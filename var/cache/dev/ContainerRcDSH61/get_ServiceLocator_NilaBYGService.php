<?php

namespace ContainerRcDSH61;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NilaBYGService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.NilaBYG' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.NilaBYG'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'plan' => ['privates', '.errored..service_locator.NilaBYG.App\\Entity\\Plan', NULL, 'Cannot autowire service ".service_locator.NilaBYG": it needs an instance of "App\\Entity\\Plan" but this type has been excluded in "config/services.yaml".'],
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
        ], [
            'plan' => 'App\\Entity\\Plan',
            'doctrine' => '?',
        ]);
    }
}
