<?php

namespace ContainerV6cZn6k;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_CachePoolPruneService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.cache_pool_prune' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'CachePoolPruneCommand.php';

        $container->privates['console.command.cache_pool_prune'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand(new RewindableGenerator(function () use ($container) {
            yield 'cache.app' => ($container->services['cache.app'] ?? self::getCache_AppService($container));
            yield 'cache.system' => ($container->services['cache.system'] ?? self::getCache_SystemService($container));
            yield 'cache.validator' => ($container->privates['cache.validator'] ?? self::getCache_ValidatorService($container));
            yield 'cache.serializer' => ($container->privates['cache.serializer'] ?? self::getCache_SerializerService($container));
            yield 'cache.property_info' => ($container->privates['cache.property_info'] ?? self::getCache_PropertyInfoService($container));
            yield 'cache.doctrine.orm.default.result' => ($container->privates['cache.doctrine.orm.default.result'] ?? self::getCache_Doctrine_Orm_Default_ResultService($container));
            yield 'cache.doctrine.orm.default.query' => ($container->privates['cache.doctrine.orm.default.query'] ?? self::getCache_Doctrine_Orm_Default_QueryService($container));
            yield 'cache.security_expression_language' => ($container->privates['cache.security_expression_language'] ?? self::getCache_SecurityExpressionLanguageService($container));
            yield 'cache.security_is_granted_attribute_expression_language' => ($container->services['cache.security_is_granted_attribute_expression_language'] ?? self::getCache_SecurityIsGrantedAttributeExpressionLanguageService($container));
        }, 9));

        $instance->setName('cache:pool:prune');
        $instance->setDescription('Prune cache pools');

        return $instance;
    }
}
