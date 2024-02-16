<?php

namespace ContainerJeLjmue;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLimiter_ShoppingCheckoutCustomerService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'limiter.shopping_checkout_customer' shared service.
     *
     * @return \Symfony\Component\RateLimiter\RateLimiterFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/rate-limiter/RateLimiterFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/rate-limiter/Storage/StorageInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/rate-limiter/Storage/CacheStorage.php';

        return $container->privates['limiter.shopping_checkout_customer'] = new \Symfony\Component\RateLimiter\RateLimiterFactory(['policy' => 'fixed_window', 'limit' => 10, 'interval' => '30 minutes', 'id' => 'shopping_checkout_customer'], new \Symfony\Component\RateLimiter\Storage\CacheStorage(($container->privates['rate_limiter.cache'] ?? $container->load('getRateLimiter_CacheService'))), ($container->privates['lock.default.factory'] ?? $container->load('getLock_Default_FactoryService')));
    }
}
