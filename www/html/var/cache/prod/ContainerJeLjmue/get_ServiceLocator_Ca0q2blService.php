<?php

namespace ContainerJeLjmue;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ca0q2blService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.ca0q2bl' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ca0q2bl'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Order' => ['privates', '.errored..service_locator.ca0q2bl.Eccube\\Entity\\Order', NULL, 'Cannot autowire service ".service_locator.ca0q2bl": it references class "Eccube\\Entity\\Order" but no such service exists.'],
        ], [
            'Order' => 'Eccube\\Entity\\Order',
        ]);
    }
}
