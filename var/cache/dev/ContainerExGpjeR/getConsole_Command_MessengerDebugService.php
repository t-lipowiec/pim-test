<?php

namespace ContainerExGpjeR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_MessengerDebugService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.messenger_debug' shared service.
     *
     * @return \Symfony\Component\Messenger\Command\DebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Command/DebugCommand.php';

        $container->privates['console.command.messenger_debug'] = $instance = new \Symfony\Component\Messenger\Command\DebugCommand(['messenger.bus.pimcore-core' => ['Symfony\\Component\\Mailer\\Messenger\\SendEmailMessage' => [['mailer.messenger.message_handler', []]], 'Symfony\\Component\\Messenger\\Message\\RedispatchMessage' => [['messenger.redispatch_message_handler', []]], 'Pimcore\\Messenger\\VideoConvertMessage' => [['Pimcore\\Messenger\\Handler\\VideoConvertHandler', []]], 'Pimcore\\Messenger\\CleanupThumbnailsMessage' => [['Pimcore\\Messenger\\Handler\\CleanupThumbnailsHandler', []]], 'Pimcore\\Messenger\\AssetUpdateTasksMessage' => [['Pimcore\\Messenger\\Handler\\AssetUpdateTasksHandler', []]], 'Pimcore\\Messenger\\AssetPreviewImageMessage' => [['Pimcore\\Messenger\\Handler\\AssetPreviewImageHandler', []]], 'Pimcore\\Messenger\\MaintenanceTaskMessage' => [['Pimcore\\Messenger\\Handler\\MaintenanceTaskHandler', []]], 'Pimcore\\Messenger\\ScheduledTaskMessage' => [['Pimcore\\Messenger\\Handler\\ScheduledTaskHandler', []]], 'Pimcore\\Messenger\\OptimizeImageMessage' => [['Pimcore\\Messenger\\Handler\\OptimizeImageHandler', []]], 'Pimcore\\Messenger\\GeneratePagePreviewMessage' => [['Pimcore\\Messenger\\Handler\\GeneratePagePreviewHandler', []]], 'Pimcore\\Messenger\\VersionDeleteMessage' => [['Pimcore\\Messenger\\Handler\\VersionDeleteHandler', []]], 'Pimcore\\Messenger\\SanityCheckMessage' => [['Pimcore\\Messenger\\Handler\\SanityCheckHandler', []]]]]);

        $instance->setName('debug:messenger');
        $instance->setDescription('List messages you can dispatch using the message buses');

        return $instance;
    }
}