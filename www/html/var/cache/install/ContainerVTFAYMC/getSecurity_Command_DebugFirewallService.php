<?php

namespace ContainerVTFAYMC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Command_DebugFirewallService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'security.command.debug_firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Command\DebugFirewallCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Command/DebugFirewallCommand.php';

        $container->privates['security.command.debug_firewall'] = $instance = new \Symfony\Bundle\SecurityBundle\Command\DebugFirewallCommand($container->parameters['security.firewalls'], ($container->privates['.service_locator.YP.F1Xa'] ?? $container->get_ServiceLocator_YP_F1XaService()), ($container->privates['.service_locator.JMcCbV9'] ?? $container->load('get_ServiceLocator_JMcCbV9Service')), ['api' => [0 => ($container->privates['security.authenticator.oauth2.api'] ?? $container->load('getSecurity_Authenticator_Oauth2_ApiService'))], 'admin' => [0 => ($container->privates['security.authenticator.form_login.admin'] ?? $container->load('getSecurity_Authenticator_FormLogin_AdminService'))], 'customer' => [0 => ($container->privates['security.authenticator.form_login.customer'] ?? $container->load('getSecurity_Authenticator_FormLogin_CustomerService')), 1 => ($container->privates['security.authenticator.remember_me.customer'] ?? $container->load('getSecurity_Authenticator_RememberMe_CustomerService'))]], true);

        $instance->setName('debug:firewall');
        $instance->setDescription('Display information about your security firewall(s)');

        return $instance;
    }
}
