<?php

namespace ContainerVTFAYMC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDeleteCartsCommandService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'Eccube\Command\DeleteCartsCommand' shared autowired service.
     *
     * @return \Eccube\Command\DeleteCartsCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Command/DeleteCartsCommand.php';

        $container->privates['Eccube\\Command\\DeleteCartsCommand'] = $instance = new \Eccube\Command\DeleteCartsCommand($container, ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['Eccube\\Repository\\CartRepository'] ?? $container->getCartRepositoryService()));

        $instance->setName('eccube:delete-carts');

        return $instance;
    }
}
