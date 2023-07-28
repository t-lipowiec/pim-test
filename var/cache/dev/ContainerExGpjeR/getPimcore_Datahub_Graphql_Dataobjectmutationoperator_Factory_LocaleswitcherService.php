<?php

namespace ContainerExGpjeR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimcore_Datahub_Graphql_Dataobjectmutationoperator_Factory_LocaleswitcherService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'pimcore.datahub.graphql.dataobjectmutationoperator.factory.localeswitcher' shared autowired service.
     *
     * @return \Pimcore\Bundle\DataHubBundle\GraphQL\Mutation\Operator\Factory\DefaultMutationOperatorFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-hub/src/GraphQL/Traits/ServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-hub/src/GraphQL/Mutation/Operator/Factory/DefaultMutationOperatorFactoryBase.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-hub/src/GraphQL/Mutation/Operator/Factory/DefaultMutationOperatorFactory.php';

        $a = ($container->services['Pimcore\\Bundle\\DataHubBundle\\GraphQL\\Service'] ?? $container->load('getService3Service'));

        if (isset($container->privates['pimcore.datahub.graphql.dataobjectmutationoperator.factory.localeswitcher'])) {
            return $container->privates['pimcore.datahub.graphql.dataobjectmutationoperator.factory.localeswitcher'];
        }

        return $container->privates['pimcore.datahub.graphql.dataobjectmutationoperator.factory.localeswitcher'] = new \Pimcore\Bundle\DataHubBundle\GraphQL\Mutation\Operator\Factory\DefaultMutationOperatorFactory($a, 'Pimcore\\Bundle\\DataHubBundle\\GraphQL\\DataObjectMutationOperatorConfigGenerator\\LocaleSwitcher');
    }
}
