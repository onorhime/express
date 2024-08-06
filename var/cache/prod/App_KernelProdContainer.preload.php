<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg', 'embed'], true)) {
    return;
}

require dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor/autoload.php';
(require __DIR__.'/App_KernelProdContainer.php')->set(\ContainerOa31Odp\App_KernelProdContainer::class, null);
require __DIR__.'/ContainerOa31Odp/PaginatorProxy86bfc13.php';
require __DIR__.'/ContainerOa31Odp/EntityManagerGhost6410e2e.php';
require __DIR__.'/ContainerOa31Odp/RequestPayloadValueResolverGhostDc06dea.php';
require __DIR__.'/ContainerOa31Odp/getTwig_Runtime_SecurityCsrfService.php';
require __DIR__.'/ContainerOa31Odp/getTwig_Runtime_HttpkernelService.php';
require __DIR__.'/ContainerOa31Odp/getTwig_Mailer_MessageListenerService.php';
require __DIR__.'/ContainerOa31Odp/getTranslation_Loader_YmlService.php';
require __DIR__.'/ContainerOa31Odp/getTranslation_Loader_XliffService.php';
require __DIR__.'/ContainerOa31Odp/getTranslation_Loader_ResService.php';
require __DIR__.'/ContainerOa31Odp/getTranslation_Loader_QtService.php';
require __DIR__.'/ContainerOa31Odp/getTranslation_Loader_PoService.php';
require __DIR__.'/ContainerOa31Odp/getTranslation_Loader_PhpService.php';
require __DIR__.'/ContainerOa31Odp/getTranslation_Loader_MoService.php';
require __DIR__.'/ContainerOa31Odp/getTranslation_Loader_JsonService.php';
require __DIR__.'/ContainerOa31Odp/getTranslation_Loader_IniService.php';
require __DIR__.'/ContainerOa31Odp/getTranslation_Loader_DatService.php';
require __DIR__.'/ContainerOa31Odp/getTranslation_Loader_CsvService.php';
require __DIR__.'/ContainerOa31Odp/getSession_Handler_NativeService.php';
require __DIR__.'/ContainerOa31Odp/getSession_FactoryService.php';
require __DIR__.'/ContainerOa31Odp/getServicesResetterService.php';
require __DIR__.'/ContainerOa31Odp/getSecurity_UserValueResolverService.php';
require __DIR__.'/ContainerOa31Odp/getSecurity_UserPasswordHasherService.php';
require __DIR__.'/ContainerOa31Odp/getSecurity_User_Provider_Concrete_AppUserProviderService.php';
require __DIR__.'/ContainerOa31Odp/getSecurity_SecurityTokenValueResolverService.php';
require __DIR__.'/ContainerOa31Odp/getSecurity_RouteLoader_LogoutService.php';
require __DIR__.'/ContainerOa31Odp/getSecurity_PasswordHasherFactoryService.php';
require __DIR__.'/ContainerOa31Odp/getSecurity_Logout_Listener_CsrfTokenClearingService.php';
require __DIR__.'/ContainerOa31Odp/getSecurity_Listener_UserProviderService.php';
require __DIR__.'/ContainerOa31Odp/getSecurity_Listener_UserChecker_MainService.php';
require __DIR__.'/ContainerOa31Odp/getSecurity_Listener_Session_MainService.php';
require __DIR__.'/ContainerOa31Odp/getSecurity_Listener_PasswordMigratingService.php';
require __DIR__.'/ContainerOa31Odp/getSecurity_Listener_Main_UserProviderService.php';
require __DIR__.'/ContainerOa31Odp/getSecurity_Listener_CsrfProtectionService.php';
require __DIR__.'/ContainerOa31Odp/getSecurity_Listener_CheckAuthenticatorCredentialsService.php';
require __DIR__.'/ContainerOa31Odp/getSecurity_Firewall_Map_Context_MainService.php';
require __DIR__.'/ContainerOa31Odp/getSecurity_Firewall_Map_Context_DevService.php';
require __DIR__.'/ContainerOa31Odp/getSecurity_Firewall_Authenticator_MainService.php';
require __DIR__.'/ContainerOa31Odp/getSecurity_Csrf_TokenStorageService.php';
require __DIR__.'/ContainerOa31Odp/getSecurity_Csrf_TokenManagerService.php';
require __DIR__.'/ContainerOa31Odp/getSecurity_ChannelListenerService.php';
require __DIR__.'/ContainerOa31Odp/getSecurity_AccessMapService.php';
require __DIR__.'/ContainerOa31Odp/getSecurity_AccessListenerService.php';
require __DIR__.'/ContainerOa31Odp/getSecurity_Access_AuthenticatedVoterService.php';
require __DIR__.'/ContainerOa31Odp/getSecrets_VaultService.php';
require __DIR__.'/ContainerOa31Odp/getRouting_LoaderService.php';
require __DIR__.'/ContainerOa31Odp/getMailer_TransportsService.php';
require __DIR__.'/ContainerOa31Odp/getMailer_TransportFactory_SmtpService.php';
require __DIR__.'/ContainerOa31Odp/getMailer_TransportFactory_SendmailService.php';
require __DIR__.'/ContainerOa31Odp/getMailer_TransportFactory_NullService.php';
require __DIR__.'/ContainerOa31Odp/getMailer_TransportFactory_NativeService.php';
require __DIR__.'/ContainerOa31Odp/getKnpPaginatorService.php';
require __DIR__.'/ContainerOa31Odp/getFragment_Renderer_InlineService.php';
require __DIR__.'/ContainerOa31Odp/getErrorControllerService.php';
require __DIR__.'/ContainerOa31Odp/getDoctrine_UuidGeneratorService.php';
require __DIR__.'/ContainerOa31Odp/getDoctrine_UlidGeneratorService.php';
require __DIR__.'/ContainerOa31Odp/getDoctrine_SystemCachePoolService.php';
require __DIR__.'/ContainerOa31Odp/getDoctrine_ResultCachePoolService.php';
require __DIR__.'/ContainerOa31Odp/getDoctrine_Orm_Listeners_PdoSessionHandlerSchemaListenerService.php';
require __DIR__.'/ContainerOa31Odp/getDoctrine_Orm_Listeners_LockStoreSchemaListenerService.php';
require __DIR__.'/ContainerOa31Odp/getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaListenerService.php';
require __DIR__.'/ContainerOa31Odp/getDoctrine_Orm_Listeners_DoctrineDbalCacheAdapterSchemaListenerService.php';
require __DIR__.'/ContainerOa31Odp/getDoctrine_Orm_EntityValueResolverService.php';
require __DIR__.'/ContainerOa31Odp/getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php';
require __DIR__.'/ContainerOa31Odp/getDoctrine_Orm_DefaultEntityManagerService.php';
require __DIR__.'/ContainerOa31Odp/getDoctrine_Dbal_DefaultConnection_EventManagerService.php';
require __DIR__.'/ContainerOa31Odp/getDoctrine_Dbal_DefaultConnectionService.php';
require __DIR__.'/ContainerOa31Odp/getDoctrineService.php';
require __DIR__.'/ContainerOa31Odp/getDebug_ErrorHandlerConfiguratorService.php';
require __DIR__.'/ContainerOa31Odp/getController_TemplateAttributeListenerService.php';
require __DIR__.'/ContainerOa31Odp/getContainer_GetRoutingConditionServiceService.php';
require __DIR__.'/ContainerOa31Odp/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/ContainerOa31Odp/getContainer_EnvVarProcessorService.php';
require __DIR__.'/ContainerOa31Odp/getCache_SystemClearerService.php';
require __DIR__.'/ContainerOa31Odp/getCache_SystemService.php';
require __DIR__.'/ContainerOa31Odp/getCache_SecurityIsGrantedAttributeExpressionLanguageService.php';
require __DIR__.'/ContainerOa31Odp/getCache_GlobalClearerService.php';
require __DIR__.'/ContainerOa31Odp/getCache_AppClearerService.php';
require __DIR__.'/ContainerOa31Odp/getCache_AppService.php';
require __DIR__.'/ContainerOa31Odp/getArgumentResolver_VariadicService.php';
require __DIR__.'/ContainerOa31Odp/getArgumentResolver_SessionService.php';
require __DIR__.'/ContainerOa31Odp/getArgumentResolver_ServiceService.php';
require __DIR__.'/ContainerOa31Odp/getArgumentResolver_RequestAttributeService.php';
require __DIR__.'/ContainerOa31Odp/getArgumentResolver_RequestService.php';
require __DIR__.'/ContainerOa31Odp/getArgumentResolver_QueryParameterValueResolverService.php';
require __DIR__.'/ContainerOa31Odp/getArgumentResolver_DefaultService.php';
require __DIR__.'/ContainerOa31Odp/getArgumentResolver_DatetimeService.php';
require __DIR__.'/ContainerOa31Odp/getArgumentResolver_BackedEnumResolverService.php';
require __DIR__.'/ContainerOa31Odp/getTemplateControllerService.php';
require __DIR__.'/ContainerOa31Odp/getRedirectControllerService.php';
require __DIR__.'/ContainerOa31Odp/getPaginationRuntimeService.php';
require __DIR__.'/ContainerOa31Odp/getEmailSenderService.php';
require __DIR__.'/ContainerOa31Odp/getUserRepositoryService.php';
require __DIR__.'/ContainerOa31Odp/getTransactionRepositoryService.php';
require __DIR__.'/ContainerOa31Odp/getPlanRepositoryService.php';
require __DIR__.'/ContainerOa31Odp/getNotificationRepositoryService.php';
require __DIR__.'/ContainerOa31Odp/getHomeControllerService.php';
require __DIR__.'/ContainerOa31Odp/getDashboardControllerService.php';
require __DIR__.'/ContainerOa31Odp/getAdminControllerService.php';
require __DIR__.'/ContainerOa31Odp/get_ServiceLocator_Y4Zrx_Service.php';
require __DIR__.'/ContainerOa31Odp/get_ServiceLocator_O6sN0hZService.php';
require __DIR__.'/ContainerOa31Odp/get_ServiceLocator_JTSrz01Service.php';
require __DIR__.'/ContainerOa31Odp/get_ServiceLocator_FIl9B8hService.php';
require __DIR__.'/ContainerOa31Odp/get_ServiceLocator_FG4PsCEService.php';
require __DIR__.'/ContainerOa31Odp/get_ServiceLocator_O2p6Lk7Service.php';
require __DIR__.'/ContainerOa31Odp/get_ServiceLocator_NilaBYGService.php';
require __DIR__.'/ContainerOa31Odp/get_ServiceLocator_Jd1QjVvService.php';
require __DIR__.'/ContainerOa31Odp/get_ServiceLocator_DypathkService.php';
require __DIR__.'/ContainerOa31Odp/get_Security_RequestMatcher_KLbKLHaService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Symfony\Bundle\TwigBundle\TwigBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle';
$classes[] = 'Symfony\Bundle\SecurityBundle\SecurityBundle';
$classes[] = 'Flasher\Symfony\FlasherSymfonyBundle';
$classes[] = 'Flasher\Noty\Symfony\FlasherNotySymfonyBundle';
$classes[] = 'Knp\Bundle\PaginatorBundle\KnpPaginatorBundle';
$classes[] = 'Symfony\Component\HttpFoundation\ChainRequestMatcher';
$classes[] = 'Symfony\Component\HttpFoundation\RequestMatcher\PathRequestMatcher';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'App\Controller\AdminController';
$classes[] = 'App\Controller\DashboardController';
$classes[] = 'App\Controller\HomeController';
$classes[] = 'App\Repository\NotificationRepository';
$classes[] = 'App\Repository\PlanRepository';
$classes[] = 'App\Repository\TransactionRepository';
$classes[] = 'App\Repository\UserRepository';
$classes[] = 'App\Service\EmailSender';
$classes[] = 'Symfony\Component\Mailer\Mailer';
$classes[] = 'Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime';
$classes[] = 'Knp\Bundle\PaginatorBundle\Helper\Processor';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\BackedEnumValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DateTimeValueResolver';
$classes[] = 'Symfony\Component\Clock\Clock';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\QueryParameterValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\CacheAttributeListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\IsGrantedAttributeListener';
$classes[] = 'Symfony\Bridge\Twig\EventListener\TemplateAttributeListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Component\HttpKernel\Debug\ErrorHandlerConfigurator';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\FileLinkFormatter';
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Doctrine\DBAL\Schema\LegacySchemaManagerFactory';
$classes[] = 'Doctrine\DBAL\Tools\DsnParser';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Doctrine\ORM\Proxy\Autoloader';
$classes[] = 'Doctrine\ORM\EntityManager';
$classes[] = 'Doctrine\ORM\Configuration';
$classes[] = 'Symfony\Component\Cache\Adapter\PhpArrayAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\MappingDriver';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Doctrine\ORM\Mapping\Driver\AttributeDriver';
$classes[] = 'Doctrine\ORM\Mapping\UnderscoreNamingStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultQuoteStrategy';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ManagerConfigurator';
$classes[] = 'Doctrine\ORM\Tools\AttachEntityListenersListener';
$classes[] = 'Symfony\Bridge\Doctrine\ArgumentResolver\EntityValueResolver';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\DoctrineDbalCacheAdapterSchemaListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\RememberMeTokenProviderDoctrineSchemaListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\LockStoreSchemaListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\PdoSessionHandlerSchemaListener';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UlidGenerator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UuidGenerator';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Flasher\Prime\Flasher';
$classes[] = 'Flasher\Prime\Response\ResponseManager';
$classes[] = 'Flasher\Prime\Response\Resource\ResourceManager';
$classes[] = 'Flasher\Prime\Config\Config';
$classes[] = 'Flasher\Symfony\Template\TwigTemplateEngine';
$classes[] = 'Flasher\Prime\EventDispatcher\EventDispatcher';
$classes[] = 'Flasher\Prime\EventDispatcher\EventListener\TranslationListener';
$classes[] = 'Flasher\Symfony\Translation\Translator';
$classes[] = 'Flasher\Prime\EventDispatcher\EventListener\PresetListener';
$classes[] = 'Flasher\Symfony\EventListener\FlasherListener';
$classes[] = 'Flasher\Prime\Http\ResponseExtension';
$classes[] = 'Flasher\Noty\Prime\NotyFactory';
$classes[] = 'Flasher\Symfony\EventListener\SessionListener';
$classes[] = 'Flasher\Prime\Http\RequestExtension';
$classes[] = 'Flasher\Prime\Storage\StorageManager';
$classes[] = 'Flasher\Prime\Storage\StorageBag';
$classes[] = 'Flasher\Symfony\Storage\SessionBag';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\HttpKernelRunner';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\ResponseRunner';
$classes[] = 'Symfony\Component\Runtime\SymfonyRuntime';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'App\Kernel';
$classes[] = 'Knp\Component\Pager\Paginator';
$classes[] = 'Knp\Component\Pager\ArgumentAccess\RequestArgumentAccess';
$classes[] = 'Knp\Component\Pager\Event\Subscriber\Filtration\FiltrationSubscriber';
$classes[] = 'Knp\Component\Pager\Event\Subscriber\Paginate\PaginationSubscriber';
$classes[] = 'Knp\Bundle\PaginatorBundle\Subscriber\SlidingPaginationSubscriber';
$classes[] = 'Knp\Component\Pager\Event\Subscriber\Sortable\SortableSubscriber';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Component\HttpKernel\Log\Logger';
$classes[] = 'Symfony\Component\Mailer\EventListener\EnvelopeListener';
$classes[] = 'Symfony\Component\Mailer\EventListener\MessageLoggerListener';
$classes[] = 'Symfony\Component\Mailer\EventListener\MessengerTransportListener';
$classes[] = 'Symfony\Component\Mailer\Transport\NativeTransportFactory';
$classes[] = 'Symfony\Component\Mailer\Transport\NullTransportFactory';
$classes[] = 'Symfony\Component\Mailer\Transport\SendmailTransportFactory';
$classes[] = 'Symfony\Component\Mailer\Transport\Smtp\EsmtpTransportFactory';
$classes[] = 'Symfony\Component\Mailer\Transport\Transports';
$classes[] = 'Symfony\Component\Mailer\Transport';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AttributeRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AttributeDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AttributeFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\Psr4DirectoryLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Strategy\AffirmativeStrategy';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\RoleVoter';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AccessListener';
$classes[] = 'Symfony\Component\Security\Http\AccessMap';
$classes[] = 'Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AuthorizationChecker';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ChannelListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ContextListener';
$classes[] = 'Symfony\Component\Security\Csrf\CsrfTokenManager';
$classes[] = 'Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator';
$classes[] = 'Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage';
$classes[] = 'Symfony\Bundle\SecurityBundle\EventListener\FirewallListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener';
$classes[] = 'Symfony\Component\Security\Http\Authentication\AuthenticatorManager';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallMap';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallContext';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallConfig';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\LazyFirewallContext';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ExceptionListener';
$classes[] = 'Symfony\Component\Security\Http\HttpUtils';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CheckCredentialsListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfProtectionListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserProviderListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\PasswordMigratingListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\SessionStrategyListener';
$classes[] = 'Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserCheckerListener';
$classes[] = 'Symfony\Component\Security\Core\User\InMemoryUserChecker';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfTokenClearingLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\Logout\LogoutUrlGenerator';
$classes[] = 'Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory';
$classes[] = 'Symfony\Bundle\SecurityBundle\Routing\LogoutRouteLoader';
$classes[] = 'Symfony\Component\Security\Http\Controller\SecurityTokenValueResolver';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage';
$classes[] = 'Symfony\Bridge\Doctrine\Security\User\EntityUserProvider';
$classes[] = 'Symfony\Component\PasswordHasher\Hasher\UserPasswordHasher';
$classes[] = 'Symfony\Component\Security\Http\Controller\UserValueResolver';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorageFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\Handler\StrictSessionHandler';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\String\Slugger\AsciiSlugger';
$classes[] = 'Symfony\Component\Translation\Loader\CsvFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\IcuDatFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\IniFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\JsonFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\MoFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\PoFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\QtFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\IcuResFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\XliffFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Translation\LocaleSwitcher';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Translation\Translator';
$classes[] = 'Symfony\Component\Translation\Formatter\MessageFormatter';
$classes[] = 'Symfony\Component\Translation\IdentityTranslator';
$classes[] = 'Twig\Cache\FilesystemCache';
$classes[] = 'Twig\Extension\CoreExtension';
$classes[] = 'Twig\Extension\EscaperExtension';
$classes[] = 'Twig\Extension\OptimizerExtension';
$classes[] = 'Twig\Extension\StagingExtension';
$classes[] = 'Twig\ExtensionSet';
$classes[] = 'Twig\Template';
$classes[] = 'Twig\TemplateWrapper';
$classes[] = 'Twig\Environment';
$classes[] = 'Twig\Loader\FilesystemLoader';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\TranslationExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\AssetExtension';
$classes[] = 'Symfony\Component\Asset\Packages';
$classes[] = 'Symfony\Component\Asset\PathPackage';
$classes[] = 'Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy';
$classes[] = 'Symfony\Component\Asset\Context\RequestStackContext';
$classes[] = 'Symfony\Bridge\Twig\Extension\RoutingExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\YamlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\StopwatchExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpFoundationExtension';
$classes[] = 'Symfony\Component\HttpFoundation\UrlHelper';
$classes[] = 'Symfony\Bridge\Twig\Extension\LogoutUrlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\SecurityExtension';
$classes[] = 'Symfony\Component\Security\Http\Impersonate\ImpersonateUrlGenerator';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension';
$classes[] = 'Flasher\Symfony\Twig\FlasherTwigExtension';
$classes[] = 'Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension';
$classes[] = 'Symfony\Bridge\Twig\AppVariable';
$classes[] = 'Twig\RuntimeLoader\ContainerRuntimeLoader';
$classes[] = 'Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator';
$classes[] = 'Symfony\Component\Mailer\EventListener\MessageListener';
$classes[] = 'Symfony\Bridge\Twig\Mime\BodyRenderer';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelRuntime';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\FragmentUriGenerator';
$classes[] = 'Symfony\Component\HttpFoundation\UriSigner';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfRuntime';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';

$preloaded = Preloader::preload($classes);
