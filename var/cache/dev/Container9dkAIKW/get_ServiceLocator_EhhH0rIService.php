<?php

namespace Container9dkAIKW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EhhH0rIService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.EhhH0rI' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.EhhH0rI'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'user' => ['privates', '.errored..service_locator.EhhH0rI.Pimcore\\Model\\User', NULL, 'Cannot autowire service ".service_locator.EhhH0rI": it references class "Pimcore\\Model\\User" but no such service exists.'],
        ], [
            'user' => 'Pimcore\\Model\\User',
        ]);
    }
}
