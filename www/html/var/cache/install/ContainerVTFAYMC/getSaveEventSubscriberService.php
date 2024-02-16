<?php

namespace ContainerVTFAYMC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSaveEventSubscriberService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'Eccube\Doctrine\EventSubscriber\SaveEventSubscriber' shared autowired service.
     *
     * @return \Eccube\Doctrine\EventSubscriber\SaveEventSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/event-manager/src/EventSubscriber.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Doctrine/EventSubscriber/SaveEventSubscriber.php';

        return $container->privates['Eccube\\Doctrine\\EventSubscriber\\SaveEventSubscriber'] = new \Eccube\Doctrine\EventSubscriber\SaveEventSubscriber(($container->privates['Eccube\\Request\\Context'] ?? $container->load('getContextService')), ($container->services['Eccube\\Common\\EccubeConfig'] ?? ($container->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($container))));
    }
}
