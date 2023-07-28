<?php

declare(strict_types=1);

/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */

namespace Pimcore\Bundle\AdminBundle\EventListener;

use Doctrine\DBAL\Exception as DBALException;
use Pimcore\Bundle\CoreBundle\EventListener\Traits\PimcoreContextAwareTrait;
use Pimcore\Http\Request\Resolver\PimcoreContextResolver;
use Pimcore\Model\Element\ValidationException;
use Pimcore\Model\Exception\ConfigWriteException;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Symfony\Component\HttpKernel\KernelEvents;

/**
 * @internal
 */
class AdminExceptionListener implements EventSubscriberInterface
{
    use PimcoreContextAwareTrait;

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::EXCEPTION => 'onKernelException',
        ];
    }

    public function onKernelException(ExceptionEvent $event): void
    {
        $request = $event->getRequest();
        $ex = $event->getThrowable();

        if ($this->matchesPimcoreContext($request, PimcoreContextResolver::CONTEXT_ADMIN)) {
            // only return JSON error for XHR requests
            if (!$request->isXmlHttpRequest()) {
                return;
            }

            list($code, $headers, $message) = $this->getResponseData($ex);

            $data = [
                'success' => false,
                'traceString' => '',
            ];

            if (!\Pimcore::inDebugMode()) {
                // DBAL exceptions do include SQL statements, we don't want to expose them
                if ($ex instanceof DBALException) {
                    $message = 'Database error, see logs for details';
                }
            }

            if (\Pimcore::inDebugMode()) {
                $data['trace'] = $ex->getTrace();
                $data['traceString'] = 'in ' . $ex->getFile() . ':' . $ex->getLine() . "\n" . $ex->getTraceAsString();
            }

            if ($ex instanceof ValidationException) {
                $data['type'] = 'ValidationException';
                $code = 422;

                $this->recursiveAddValidationExceptionSubItems($ex->getSubItems(), $message, $data['traceString']);
            }

            if ($ex instanceof ConfigWriteException) {
                $data['type'] = 'ConfigWriteException';
                $code = 422;
            }

            $data['message'] = $message;

            $response = new JsonResponse($data, $code, $headers);
            $event->setResponse($response);
        }
    }

    private function getResponseData(\Throwable $ex, int $defaultStatusCode = 500): array
    {
        $code = $defaultStatusCode;
        $headers = [];

        $message = $ex->getMessage();

        if ($ex instanceof HttpExceptionInterface) {
            if (empty($message)) {
                $message = Response::$statusTexts[$ex->getStatusCode()];
            }

            $code = $ex->getStatusCode();
            $headers = $ex->getHeaders();
        }

        return [$code, $headers, $message];
    }

    /**
     * @param \Exception[] $items
     * @param string $message
     * @param string $detailedInfo
     */
    protected function recursiveAddValidationExceptionSubItems(array $items, string &$message, string &$detailedInfo): void
    {
        if (!$items) {
            return;
        }
        foreach ($items as $e) {
            if ($e->getMessage()) {
                $message .= '<b>' . $e->getMessage() . '</b>';
                if ($e instanceof ValidationException) {
                    $this->addContext($e, $message);
                }
                $message .= '<br>';

                $detailedInfo .= '<br><b>Message:</b><br>';
                $detailedInfo .= $e->getMessage() . '<br>';

                $inner = $this->getInnerStack($e);
                $detailedInfo .= '<br><b>Trace:</b> ' . $inner->getTraceAsString() . '<br>';
            }

            if ($e instanceof ValidationException) {
                $this->recursiveAddValidationExceptionSubItems($e->getSubItems(), $message, $detailedInfo);
            }
        }
    }

    protected function addContext(ValidationException $e, string &$message): void
    {
        $contextStack = $e->getContextStack();
        if ($contextStack) {
            $message = $message . ' (' . implode(',', $contextStack) . ')';
        }
    }

    protected function getInnerStack(\Throwable $e): \Throwable
    {
        while ($e->getPrevious()) {
            $e = $e->getPrevious();
        }

        return $e;
    }
}
