<?php

namespace ContainerExGpjeR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Sq1D4mjService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Sq1D4mj' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Sq1D4mj'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'csrfProtection' => ['services', 'Pimcore\\Bundle\\AdminBundle\\Security\\CsrfProtectionHandler', 'getCsrfProtectionHandlerService', false],
        ], [
            'csrfProtection' => 'Pimcore\\Bundle\\AdminBundle\\Security\\CsrfProtectionHandler',
        ]);
    }
}
