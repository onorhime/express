<?php

namespace ContainerBwgDnSS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_ChannelListenerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'security.channel_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\ChannelListener
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['router.request_context'] ?? self::getRouter_RequestContextService($container));

        return $container->privates['security.channel_listener'] = new \Symfony\Component\Security\Http\Firewall\ChannelListener(($container->privates['security.access_map'] ?? $container->load('getSecurity_AccessMapService')), ($container->privates['logger'] ?? self::getLoggerService($container)), $a->getHttpPort(), $a->getHttpsPort());
    }
}
