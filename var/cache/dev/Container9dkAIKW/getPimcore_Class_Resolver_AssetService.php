<?php

namespace Container9dkAIKW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimcore_Class_Resolver_AssetService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'pimcore.class.resolver.asset' shared autowired service.
     *
     * @return \Pimcore\Resolver\ClassResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Resolver/ResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Resolver/ClassResolver.php';

        return $container->services['pimcore.class.resolver.asset'] = new \Pimcore\Resolver\ClassResolver($container->parameters['pimcore.assets.classes.map']);
    }
}
