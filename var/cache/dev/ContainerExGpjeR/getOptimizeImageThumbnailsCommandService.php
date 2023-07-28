<?php

namespace ContainerExGpjeR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOptimizeImageThumbnailsCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Bundle\CoreBundle\Command\OptimizeImageThumbnailsCommand' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\Command\OptimizeImageThumbnailsCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Console/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/CoreBundle/src/Command/OptimizeImageThumbnailsCommand.php';

        $container->privates['Pimcore\\Bundle\\CoreBundle\\Command\\OptimizeImageThumbnailsCommand'] = $instance = new \Pimcore\Bundle\CoreBundle\Command\OptimizeImageThumbnailsCommand(($container->services['Pimcore\\Image\\Optimizer'] ?? $container->load('getOptimizerService')));

        $instance->setName('pimcore:thumbnails:optimize-images');

        return $instance;
    }
}
