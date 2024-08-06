<?php

namespace ContainerOa31Odp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Jd1QjVvService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.Jd1QjVv' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Jd1QjVv'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', true],
            'emailSender' => ['privates', 'App\\Service\\EmailSender', 'getEmailSenderService', true],
        ], [
            'doctrine' => '?',
            'emailSender' => 'App\\Service\\EmailSender',
        ]);
    }
}
