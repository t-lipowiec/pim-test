<?php

namespace Container9dkAIKW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getServicesResetterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'services_resetter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DependencyInjection/ServicesResetter.php';

        return $container->services['services_resetter'] = new \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter(new RewindableGenerator(function () use ($container) {
            if (isset($container->services['cache.app'])) {
                yield 'cache.app' => ($container->services['cache.app'] ?? null);
            }
            if (isset($container->services['cache.system'])) {
                yield 'cache.system' => ($container->services['cache.system'] ?? null);
            }
            if (isset($container->privates['cache.validator'])) {
                yield 'cache.validator' => ($container->privates['cache.validator'] ?? null);
            }
            if (isset($container->privates['cache.serializer'])) {
                yield 'cache.serializer' => ($container->privates['cache.serializer'] ?? null);
            }
            if (isset($container->privates['cache.annotations'])) {
                yield 'cache.annotations' => ($container->privates['cache.annotations'] ?? null);
            }
            if (isset($container->privates['cache.property_info'])) {
                yield 'cache.property_info' => ($container->privates['cache.property_info'] ?? null);
            }
            if (isset($container->privates['cache.messenger.restart_workers_signal'])) {
                yield 'cache.messenger.restart_workers_signal' => ($container->privates['cache.messenger.restart_workers_signal'] ?? null);
            }
            if (isset($container->privates['mailer.message_logger_listener'])) {
                yield 'mailer.message_logger_listener' => ($container->privates['mailer.message_logger_listener'] ?? null);
            }
            if (isset($container->privates['translation.locale_switcher'])) {
                yield 'translation.locale_switcher' => ($container->privates['translation.locale_switcher'] ?? null);
            }
            if (isset($container->privates['debug.stopwatch'])) {
                yield 'debug.stopwatch' => ($container->privates['debug.stopwatch'] ?? null);
            }
            if (isset($container->services['event_dispatcher'])) {
                yield 'debug.event_dispatcher' => ($container->services['event_dispatcher'] ?? null);
            }
            if (isset($container->privates['cache.rate_limiter'])) {
                yield 'cache.rate_limiter' => ($container->privates['cache.rate_limiter'] ?? null);
            }
            if (isset($container->services['Symfony\\Component\\HttpKernel\\EventListener\\SessionListener'])) {
                yield 'session_listener' => ($container->services['Symfony\\Component\\HttpKernel\\EventListener\\SessionListener'] ?? null);
            }
            if (isset($container->services['cache.validator_expression_language'])) {
                yield 'cache.validator_expression_language' => ($container->services['cache.validator_expression_language'] ?? null);
            }
            if (isset($container->privates['messenger.transport.in_memory.factory'])) {
                yield 'messenger.transport.in_memory.factory' => ($container->privates['messenger.transport.in_memory.factory'] ?? null);
            }
            if (isset($container->services['.container.private.profiler'])) {
                yield 'profiler' => ($container->services['.container.private.profiler'] ?? null);
            }
            if (isset($container->privates['debug.validator'])) {
                yield 'debug.validator' => ($container->privates['debug.validator'] ?? null);
            }
            if (isset($container->privates['security.token_storage'])) {
                yield 'security.token_storage' => ($container->privates['security.token_storage'] ?? null);
            }
            if (isset($container->privates['cache.security_expression_language'])) {
                yield 'cache.security_expression_language' => ($container->privates['cache.security_expression_language'] ?? null);
            }
            if (isset($container->services['cache.security_is_granted_attribute_expression_language'])) {
                yield 'cache.security_is_granted_attribute_expression_language' => ($container->services['cache.security_is_granted_attribute_expression_language'] ?? null);
            }
            if (isset($container->privates['monolog.handler.usage'])) {
                yield 'monolog.handler.usage' => ($container->privates['monolog.handler.usage'] ?? null);
            }
            if (isset($container->privates['monolog.handler.redirect'])) {
                yield 'monolog.handler.redirect' => ($container->privates['monolog.handler.redirect'] ?? null);
            }
            if (isset($container->privates['monolog.handler.main'])) {
                yield 'monolog.handler.main' => ($container->privates['monolog.handler.main'] ?? null);
            }
            if (isset($container->privates['monolog.handler.error'])) {
                yield 'monolog.handler.error' => ($container->privates['monolog.handler.error'] ?? null);
            }
            if (isset($container->privates['monolog.handler.console'])) {
                yield 'monolog.handler.console' => ($container->privates['monolog.handler.console'] ?? null);
            }
            if (isset($container->services['doctrine'])) {
                yield 'doctrine' => ($container->services['doctrine'] ?? null);
            }
            if (isset($container->privates['webpack_encore.tag_renderer'])) {
                yield 'webpack_encore.tag_renderer' => ($container->privates['webpack_encore.tag_renderer'] ?? null);
            }
            if (isset($container->privates['cache.webpack_encore'])) {
                yield 'cache.webpack_encore' => ($container->privates['cache.webpack_encore'] ?? null);
            }
            if (isset($container->privates['webpack_encore.entrypoint_lookup[_default]'])) {
                yield 'webpack_encore.entrypoint_lookup[_default]' => ($container->privates['webpack_encore.entrypoint_lookup[_default]'] ?? null);
            }
            if (isset($container->privates['webpack_encore.entrypoint_lookup[pimcoreAdmin]'])) {
                yield 'webpack_encore.entrypoint_lookup[pimcoreAdmin]' => ($container->privates['webpack_encore.entrypoint_lookup[pimcoreAdmin]'] ?? null);
            }
            if (isset($container->privates['webpack_encore.entrypoint_lookup[pimcoreAdminImageEditor]'])) {
                yield 'webpack_encore.entrypoint_lookup[pimcoreAdminImageEditor]' => ($container->privates['webpack_encore.entrypoint_lookup[pimcoreAdminImageEditor]'] ?? null);
            }
            if (isset($container->privates['Pimcore\\Bundle\\CoreBundle\\DataCollector\\PimcoreDataCollector'])) {
                yield 'Pimcore\\Bundle\\CoreBundle\\DataCollector\\PimcoreDataCollector' => ($container->privates['Pimcore\\Bundle\\CoreBundle\\DataCollector\\PimcoreDataCollector'] ?? null);
            }
            if (isset($container->services['pimcore.cache.adapter.null_tag_aware'])) {
                yield 'pimcore.cache.adapter.null_tag_aware' => ($container->services['pimcore.cache.adapter.null_tag_aware'] ?? null);
            }
            if (isset($container->privates['pimcore.cache.adapter.doctrine_dbal'])) {
                yield 'pimcore.cache.adapter.doctrine_dbal' => ($container->privates['pimcore.cache.adapter.doctrine_dbal'] ?? null);
            }
            if (isset($container->services['pimcore.cache.pool'])) {
                yield 'pimcore.cache.adapter.doctrine_dbal_tag_aware' => ($container->services['pimcore.cache.pool'] ?? null);
            }
            if (isset($container->privates['pimcore.cache.adapter.redis_tag_aware'])) {
                yield 'pimcore.cache.adapter.redis_tag_aware' => ($container->privates['pimcore.cache.adapter.redis_tag_aware'] ?? null);
            }
            if (false) {
                yield 'pimcore.cache.pool.app' => null;
            }
        }, fn () => 0 + (int) (isset($container->services['cache.app'])) + (int) (isset($container->services['cache.system'])) + (int) (isset($container->privates['cache.validator'])) + (int) (isset($container->privates['cache.serializer'])) + (int) (isset($container->privates['cache.annotations'])) + (int) (isset($container->privates['cache.property_info'])) + (int) (isset($container->privates['cache.messenger.restart_workers_signal'])) + (int) (isset($container->privates['mailer.message_logger_listener'])) + (int) (isset($container->privates['translation.locale_switcher'])) + (int) (isset($container->privates['debug.stopwatch'])) + (int) (isset($container->services['event_dispatcher'])) + (int) (isset($container->privates['cache.rate_limiter'])) + (int) (isset($container->services['Symfony\\Component\\HttpKernel\\EventListener\\SessionListener'])) + (int) (isset($container->services['cache.validator_expression_language'])) + (int) (isset($container->privates['messenger.transport.in_memory.factory'])) + (int) (isset($container->services['.container.private.profiler'])) + (int) (isset($container->privates['debug.validator'])) + (int) (isset($container->privates['security.token_storage'])) + (int) (isset($container->privates['cache.security_expression_language'])) + (int) (isset($container->services['cache.security_is_granted_attribute_expression_language'])) + (int) (isset($container->privates['monolog.handler.usage'])) + (int) (isset($container->privates['monolog.handler.redirect'])) + (int) (isset($container->privates['monolog.handler.main'])) + (int) (isset($container->privates['monolog.handler.error'])) + (int) (isset($container->privates['monolog.handler.console'])) + (int) (isset($container->services['doctrine'])) + (int) (isset($container->privates['webpack_encore.tag_renderer'])) + (int) (isset($container->privates['cache.webpack_encore'])) + (int) (isset($container->privates['webpack_encore.entrypoint_lookup[_default]'])) + (int) (isset($container->privates['webpack_encore.entrypoint_lookup[pimcoreAdmin]'])) + (int) (isset($container->privates['webpack_encore.entrypoint_lookup[pimcoreAdminImageEditor]'])) + (int) (isset($container->privates['Pimcore\\Bundle\\CoreBundle\\DataCollector\\PimcoreDataCollector'])) + (int) (isset($container->services['pimcore.cache.adapter.null_tag_aware'])) + (int) (isset($container->privates['pimcore.cache.adapter.doctrine_dbal'])) + (int) (isset($container->services['pimcore.cache.pool'])) + (int) (isset($container->privates['pimcore.cache.adapter.redis_tag_aware'])) + (int) (false)), ['cache.app' => ['reset'], 'cache.system' => ['reset'], 'cache.validator' => ['reset'], 'cache.serializer' => ['reset'], 'cache.annotations' => ['reset'], 'cache.property_info' => ['reset'], 'cache.messenger.restart_workers_signal' => ['reset'], 'mailer.message_logger_listener' => ['reset'], 'translation.locale_switcher' => ['reset'], 'debug.stopwatch' => ['reset'], 'debug.event_dispatcher' => ['reset'], 'cache.rate_limiter' => ['reset'], 'session_listener' => ['reset'], 'cache.validator_expression_language' => ['reset'], 'messenger.transport.in_memory.factory' => ['reset'], 'profiler' => ['reset'], 'debug.validator' => ['reset'], 'security.token_storage' => ['disableUsageTracking', 'setToken'], 'cache.security_expression_language' => ['reset'], 'cache.security_is_granted_attribute_expression_language' => ['reset'], 'monolog.handler.usage' => ['reset'], 'monolog.handler.redirect' => ['reset'], 'monolog.handler.main' => ['reset'], 'monolog.handler.error' => ['reset'], 'monolog.handler.console' => ['reset'], 'doctrine' => ['reset'], 'webpack_encore.tag_renderer' => ['reset'], 'cache.webpack_encore' => ['reset'], 'webpack_encore.entrypoint_lookup[_default]' => ['reset'], 'webpack_encore.entrypoint_lookup[pimcoreAdmin]' => ['reset'], 'webpack_encore.entrypoint_lookup[pimcoreAdminImageEditor]' => ['reset'], 'Pimcore\\Bundle\\CoreBundle\\DataCollector\\PimcoreDataCollector' => ['reset'], 'pimcore.cache.adapter.null_tag_aware' => ['reset'], 'pimcore.cache.adapter.doctrine_dbal' => ['reset'], 'pimcore.cache.adapter.doctrine_dbal_tag_aware' => ['reset'], 'pimcore.cache.adapter.redis_tag_aware' => ['reset'], 'pimcore.cache.pool.app' => ['reset']]);
    }
}
