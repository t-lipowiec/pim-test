<?php

namespace Container9dkAIKW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimcore_DataObject_GridColumnConfig_Operator_Factory_PhpCodeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'pimcore.data_object.grid_column_config.operator.factory.php_code' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\DataObject\GridColumnConfig\Operator\Factory\DefaultOperatorFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/admin-ui-classic-bundle/src/DataObject/GridColumnConfig/Operator/Factory/OperatorFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/admin-ui-classic-bundle/src/DataObject/GridColumnConfig/Operator/Factory/DefaultOperatorFactory.php';

        return $container->privates['pimcore.data_object.grid_column_config.operator.factory.php_code'] = new \Pimcore\Bundle\AdminBundle\DataObject\GridColumnConfig\Operator\Factory\DefaultOperatorFactory('Pimcore\\Bundle\\AdminBundle\\DataObject\\GridColumnConfig\\Operator\\PHPCode');
    }
}
