<?php

namespace Container9dkAIKW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSchebTwoFactor_FormControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'scheb_two_factor.form_controller' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Controller\FormController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Controller/FormController.php';

        return $container->services['scheb_two_factor.form_controller'] = new \Scheb\TwoFactorBundle\Controller\FormController(($container->privates['security.token_storage'] ?? self::getSecurity_TokenStorageService($container)), ($container->privates['scheb_two_factor.provider_registry'] ?? self::getSchebTwoFactor_ProviderRegistryService($container)), ($container->services['scheb_two_factor.firewall_context'] ?? $container->load('getSchebTwoFactor_FirewallContextService')), ($container->privates['security.logout_url_generator'] ?? self::getSecurity_LogoutUrlGeneratorService($container)), NULL, false);
    }
}
