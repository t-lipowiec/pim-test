<?php

namespace Container9dkAIKW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimcore_Templating_Engine_DelegatingService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'pimcore.templating.engine.delegating' shared autowired service.
     *
     * @return \Pimcore\Templating\TwigDefaultDelegatingEngine
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/templating/EngineInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/templating/StreamingEngineInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/templating/DelegatingEngine.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Templating/TwigDefaultDelegatingEngine.php';

        $a = ($container->privates['twig'] ?? self::getTwigService($container));

        if (isset($container->services['pimcore.templating.engine.delegating'])) {
            return $container->services['pimcore.templating.engine.delegating'];
        }

        return $container->services['pimcore.templating.engine.delegating'] = new \Pimcore\Templating\TwigDefaultDelegatingEngine($a, ($container->services['Pimcore\\Config'] ??= new \Pimcore\Config()));
    }
}
