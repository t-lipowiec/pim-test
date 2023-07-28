<?php

namespace Container9dkAIKW;
include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AbstractTagAwareAdapter.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/RedisTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/RedisTagAwareAdapter.php';

class RedisTagAwareAdapterGhost4d74e17 extends \Symfony\Component\Cache\Adapter\RedisTagAwareAdapter implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".'*'."\0".'logger' => [parent::class, 'logger', null],
        "\0".'*'."\0".'maxIdLength' => [parent::class, 'maxIdLength', null],
        "\0".'Symfony\\Component\\Cache\\Adapter\\AbstractTagAwareAdapter'."\0".'callbackWrapper' => ['Symfony\\Component\\Cache\\Adapter\\AbstractTagAwareAdapter', 'callbackWrapper', null],
        "\0".'Symfony\\Component\\Cache\\Adapter\\AbstractTagAwareAdapter'."\0".'computing' => ['Symfony\\Component\\Cache\\Adapter\\AbstractTagAwareAdapter', 'computing', null],
        "\0".'Symfony\\Component\\Cache\\Adapter\\AbstractTagAwareAdapter'."\0".'defaultLifetime' => ['Symfony\\Component\\Cache\\Adapter\\AbstractTagAwareAdapter', 'defaultLifetime', null],
        "\0".'Symfony\\Component\\Cache\\Adapter\\AbstractTagAwareAdapter'."\0".'deferred' => ['Symfony\\Component\\Cache\\Adapter\\AbstractTagAwareAdapter', 'deferred', null],
        "\0".'Symfony\\Component\\Cache\\Adapter\\AbstractTagAwareAdapter'."\0".'ids' => ['Symfony\\Component\\Cache\\Adapter\\AbstractTagAwareAdapter', 'ids', null],
        "\0".'Symfony\\Component\\Cache\\Adapter\\AbstractTagAwareAdapter'."\0".'namespace' => ['Symfony\\Component\\Cache\\Adapter\\AbstractTagAwareAdapter', 'namespace', null],
        "\0".'Symfony\\Component\\Cache\\Adapter\\AbstractTagAwareAdapter'."\0".'namespaceVersion' => ['Symfony\\Component\\Cache\\Adapter\\AbstractTagAwareAdapter', 'namespaceVersion', null],
        "\0".'Symfony\\Component\\Cache\\Adapter\\AbstractTagAwareAdapter'."\0".'versioningIsEnabled' => ['Symfony\\Component\\Cache\\Adapter\\AbstractTagAwareAdapter', 'versioningIsEnabled', null],
        "\0".parent::class."\0".'marshaller' => [parent::class, 'marshaller', null],
        "\0".parent::class."\0".'namespace' => [parent::class, 'namespace', null],
        "\0".parent::class."\0".'redis' => [parent::class, 'redis', null],
        "\0".parent::class."\0".'redisEvictionPolicy' => [parent::class, 'redisEvictionPolicy', null],
        'callbackWrapper' => ['Symfony\\Component\\Cache\\Adapter\\AbstractTagAwareAdapter', 'callbackWrapper', null],
        'computing' => ['Symfony\\Component\\Cache\\Adapter\\AbstractTagAwareAdapter', 'computing', null],
        'defaultLifetime' => ['Symfony\\Component\\Cache\\Adapter\\AbstractTagAwareAdapter', 'defaultLifetime', null],
        'deferred' => ['Symfony\\Component\\Cache\\Adapter\\AbstractTagAwareAdapter', 'deferred', null],
        'ids' => ['Symfony\\Component\\Cache\\Adapter\\AbstractTagAwareAdapter', 'ids', null],
        'logger' => [parent::class, 'logger', null],
        'marshaller' => [parent::class, 'marshaller', null],
        'maxIdLength' => [parent::class, 'maxIdLength', null],
        'namespace' => [parent::class, 'namespace', null],
        'namespaceVersion' => ['Symfony\\Component\\Cache\\Adapter\\AbstractTagAwareAdapter', 'namespaceVersion', null],
        'redis' => [parent::class, 'redis', null],
        'redisEvictionPolicy' => [parent::class, 'redisEvictionPolicy', null],
        'versioningIsEnabled' => ['Symfony\\Component\\Cache\\Adapter\\AbstractTagAwareAdapter', 'versioningIsEnabled', null],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('RedisTagAwareAdapterGhost4d74e17', false)) {
    \class_alias(__NAMESPACE__.'\\RedisTagAwareAdapterGhost4d74e17', 'RedisTagAwareAdapterGhost4d74e17', false);
}
