<?php

namespace ContainerJeLjmue;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductListMaxRepositoryService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\Repository\Master\ProductListMaxRepository' shared autowired service.
     *
     * @return \Eccube\Repository\Master\ProductListMaxRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Eccube/Repository/Master/ProductListMaxRepository.php';

        return $container->privates['Eccube\\Repository\\Master\\ProductListMaxRepository'] = new \Eccube\Repository\Master\ProductListMaxRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
