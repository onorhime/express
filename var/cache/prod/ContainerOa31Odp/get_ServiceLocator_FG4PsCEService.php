<?php

namespace ContainerOa31Odp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FG4PsCEService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.fG4PsCE' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.fG4PsCE'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'emailSender' => ['privates', 'App\\Service\\EmailSender', 'getEmailSenderService', true],
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', true],
            'userPasswordHasherInterface' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
        ], [
            'emailSender' => 'App\\Service\\EmailSender',
            'doctrine' => '?',
            'userPasswordHasherInterface' => '?',
        ]);
    }
}