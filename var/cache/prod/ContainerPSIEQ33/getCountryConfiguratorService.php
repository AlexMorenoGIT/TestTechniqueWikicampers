<?php

namespace ContainerPSIEQ33;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCountryConfiguratorService extends App_KernelProdContainer
{
    /*
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\CountryConfigurator' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\CountryConfigurator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\CountryConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\CountryConfigurator(($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Asset\\AssetPackage'] ?? $container->load('getAssetPackageService')));
    }
}
