<?php

namespace ContainerJeLjmue;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCache_PropertyAccessService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'cache.property_access' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-access/PropertyAccessorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-access/PropertyAccessor.php';

        return $container->privates['cache.property_access'] = \Symfony\Component\PropertyAccess\PropertyAccessor::createCache('vtFsGsGR0d', 0, $container->getParameter('container.build_id'), ($container->privates['monolog.logger.cache'] ?? $container->getMonolog_Logger_CacheService()));
    }
}
