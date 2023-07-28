<?php

namespace Container9dkAIKW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Product\ProductController' shared autowired service.
     *
     * @return \App\Controller\Product\ProductController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Controller/Controller.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Controller/FrontendController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Product/ProductController.php';

        $container->services['App\\Controller\\Product\\ProductController'] = $instance = new \App\Controller\Product\ProductController();

        $instance->setContainer(($container->privates['.service_locator.jIByowl'] ?? $container->load('get_ServiceLocator_JIByowlService'))->withContext('App\\Controller\\Product\\ProductController', $container));

        return $instance;
    }
}
