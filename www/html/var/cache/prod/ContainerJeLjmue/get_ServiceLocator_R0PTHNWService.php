<?php

namespace ContainerJeLjmue;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_R0PTHNWService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.r0PTHNW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.r0PTHNW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Template' => ['privates', '.errored..service_locator.r0PTHNW.Eccube\\Entity\\Template', NULL, 'Cannot autowire service ".service_locator.r0PTHNW": it references class "Eccube\\Entity\\Template" but no such service exists.'],
        ], [
            'Template' => 'Eccube\\Entity\\Template',
        ]);
    }
}
