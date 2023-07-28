<?php

namespace ContainerExGpjeR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimcore_Datahub_Graphql_CsfeaturequerytypegeneratorDatatypeQuantityValueService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'pimcore.datahub.graphql.csfeaturequerytypegenerator_datatype_quantityValue' shared autowired service.
     *
     * @return \Pimcore\Bundle\DataHubBundle\GraphQL\ClassificationstoreFeatureQueryTypeGenerator\QuantityValue
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-hub/src/GraphQL/Traits/ServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-hub/src/GraphQL/ClassificationstoreFeatureQueryTypeGenerator/Base.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-hub/src/GraphQL/ClassificationstoreFeatureQueryTypeGenerator/QuantityValue.php';

        $a = ($container->services['Pimcore\\Bundle\\DataHubBundle\\GraphQL\\Service'] ?? $container->load('getService3Service'));

        if (isset($container->privates['pimcore.datahub.graphql.csfeaturequerytypegenerator_datatype_quantityValue'])) {
            return $container->privates['pimcore.datahub.graphql.csfeaturequerytypegenerator_datatype_quantityValue'];
        }

        return $container->privates['pimcore.datahub.graphql.csfeaturequerytypegenerator_datatype_quantityValue'] = new \Pimcore\Bundle\DataHubBundle\GraphQL\ClassificationstoreFeatureQueryTypeGenerator\QuantityValue($a);
    }
}
