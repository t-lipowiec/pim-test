<?php

namespace Container9dkAIKW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimcore_Datahub_Graphql_DataobjectmutationtypegeneratorDatatypeImageGalleryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'pimcore.datahub.graphql.dataobjectmutationtypegenerator_datatype_imageGallery' shared autowired service.
     *
     * @return \Pimcore\Bundle\DataHubBundle\GraphQL\DataObjectMutationFieldConfigGenerator\ImageGallery
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-hub/src/GraphQL/DataObjectMutationFieldConfigGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-hub/src/GraphQL/Traits/ServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-hub/src/GraphQL/DataObjectMutationFieldConfigGenerator/Base.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-hub/src/GraphQL/DataObjectMutationFieldConfigGenerator/ImageGallery.php';

        $a = ($container->services['Pimcore\\Bundle\\DataHubBundle\\GraphQL\\Service'] ?? $container->load('getService3Service'));

        if (isset($container->privates['pimcore.datahub.graphql.dataobjectmutationtypegenerator_datatype_imageGallery'])) {
            return $container->privates['pimcore.datahub.graphql.dataobjectmutationtypegenerator_datatype_imageGallery'];
        }

        return $container->privates['pimcore.datahub.graphql.dataobjectmutationtypegenerator_datatype_imageGallery'] = new \Pimcore\Bundle\DataHubBundle\GraphQL\DataObjectMutationFieldConfigGenerator\ImageGallery($a);
    }
}
