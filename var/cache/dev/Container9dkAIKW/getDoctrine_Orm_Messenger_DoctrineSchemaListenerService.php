<?php

namespace Container9dkAIKW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Orm_Messenger_DoctrineSchemaListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine.orm.messenger.doctrine_schema_listener' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\SchemaListener\MessengerTransportDoctrineSchemaListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/SchemaListener/AbstractSchemaListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/SchemaListener/MessengerTransportDoctrineSchemaListener.php';

        return $container->privates['doctrine.orm.messenger.doctrine_schema_listener'] = new \Symfony\Bridge\Doctrine\SchemaListener\MessengerTransportDoctrineSchemaListener(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['messenger.transport.pimcore_core'] ?? $container->load('getMessenger_Transport_PimcoreCoreService'));
            yield 1 => ($container->privates['messenger.transport.pimcore_maintenance'] ?? $container->load('getMessenger_Transport_PimcoreMaintenanceService'));
            yield 2 => ($container->privates['messenger.transport.pimcore_scheduled_tasks'] ?? $container->load('getMessenger_Transport_PimcoreScheduledTasksService'));
            yield 3 => ($container->privates['messenger.transport.pimcore_image_optimize'] ?? $container->load('getMessenger_Transport_PimcoreImageOptimizeService'));
            yield 4 => ($container->privates['messenger.transport.pimcore_asset_update'] ?? $container->load('getMessenger_Transport_PimcoreAssetUpdateService'));
            yield 5 => ($container->privates['messenger.transport.pimcore_failed_jobs'] ?? $container->load('getMessenger_Transport_PimcoreFailedJobsService'));
        }, 6));
    }
}
