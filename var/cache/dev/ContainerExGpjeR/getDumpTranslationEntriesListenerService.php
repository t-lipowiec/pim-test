<?php

namespace ContainerExGpjeR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDumpTranslationEntriesListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Bundle\CoreBundle\EventListener\DumpTranslationEntriesListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\EventListener\DumpTranslationEntriesListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/CoreBundle/src/EventListener/DumpTranslationEntriesListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Translation/TranslationEntriesDumper.php';

        return $container->privates['Pimcore\\Bundle\\CoreBundle\\EventListener\\DumpTranslationEntriesListener'] = new \Pimcore\Bundle\CoreBundle\EventListener\DumpTranslationEntriesListener(new \Pimcore\Translation\TranslationEntriesDumper());
    }
}
