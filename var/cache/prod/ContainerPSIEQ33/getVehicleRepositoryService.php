<?php

namespace ContainerPSIEQ33;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVehicleRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\VehicleRepository' shared autowired service.
     *
     * @return \App\Repository\VehicleRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\VehicleRepository'] = new \App\Repository\VehicleRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
