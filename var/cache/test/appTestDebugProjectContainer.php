<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * appTestDebugProjectContainer.
 *
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class appTestDebugProjectContainer extends Container
{
    private $parameters;
    private $targetDirs = array();

    /**
     * Constructor.
     */
    public function __construct()
    {
        $dir = __DIR__;
        for ($i = 1; $i <= 5; ++$i) {
            $this->targetDirs[$i] = $dir = dirname($dir);
        }
        $this->parameters = $this->getDefaultParameters();

        $this->services = array();
        $this->methodMap = array(
            '1_ea6d9e8f60817a88f28a2e1036956ef36d32ea0ebd7aaac1f6fcc56026c5e8af' => 'get1Ea6d9e8f60817a88f28a2e1036956ef36d32ea0ebd7aaac1f6fcc56026c5e8afService',
            '2_ea6d9e8f60817a88f28a2e1036956ef36d32ea0ebd7aaac1f6fcc56026c5e8af' => 'get2Ea6d9e8f60817a88f28a2e1036956ef36d32ea0ebd7aaac1f6fcc56026c5e8afService',
            'abstract.service' => 'getAbstract_ServiceService',
            'annotation_reader' => 'getAnnotationReaderService',
            'annotations.reader' => 'getAnnotations_ReaderService',
            'argument_resolver.default' => 'getArgumentResolver_DefaultService',
            'argument_resolver.request' => 'getArgumentResolver_RequestService',
            'argument_resolver.request_attribute' => 'getArgumentResolver_RequestAttributeService',
            'argument_resolver.service' => 'getArgumentResolver_ServiceService',
            'argument_resolver.session' => 'getArgumentResolver_SessionService',
            'argument_resolver.variadic' => 'getArgumentResolver_VariadicService',
            'assets.context' => 'getAssets_ContextService',
            'assets.packages' => 'getAssets_PackagesService',
            'cache.annotations' => 'getCache_AnnotationsService',
            'cache.annotations.recorder_inner' => 'getCache_Annotations_RecorderInnerService',
            'cache.app' => 'getCache_AppService',
            'cache.app.recorder_inner' => 'getCache_App_RecorderInnerService',
            'cache.default_clearer' => 'getCache_DefaultClearerService',
            'cache.global_clearer' => 'getCache_GlobalClearerService',
            'cache.serializer.recorder_inner' => 'getCache_Serializer_RecorderInnerService',
            'cache.system' => 'getCache_SystemService',
            'cache.system.recorder_inner' => 'getCache_System_RecorderInnerService',
            'cache.validator' => 'getCache_ValidatorService',
            'cache.validator.recorder_inner' => 'getCache_Validator_RecorderInnerService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'config_cache_factory' => 'getConfigCacheFactoryService',
            'console.command.symfony_bundle_securitybundle_command_userpasswordencodercommand' => 'getConsole_Command_SymfonyBundleSecuritybundleCommandUserpasswordencodercommandService',
            'console.error_listener' => 'getConsole_ErrorListenerService',
            'controller_name_converter' => 'getControllerNameConverterService',
            'data_collector.dump' => 'getDataCollector_DumpService',
            'data_collector.form' => 'getDataCollector_FormService',
            'data_collector.form.extractor' => 'getDataCollector_Form_ExtractorService',
            'data_collector.request' => 'getDataCollector_RequestService',
            'data_collector.router' => 'getDataCollector_RouterService',
            'data_fixtures.provider.foo' => 'getDataFixtures_Provider_FooService',
            'debug.argument_resolver' => 'getDebug_ArgumentResolverService',
            'debug.controller_resolver' => 'getDebug_ControllerResolverService',
            'debug.debug_handlers_listener' => 'getDebug_DebugHandlersListenerService',
            'debug.dump_listener' => 'getDebug_DumpListenerService',
            'debug.event_dispatcher' => 'getDebug_EventDispatcherService',
            'debug.file_link_formatter' => 'getDebug_FileLinkFormatterService',
            'debug.log_processor' => 'getDebug_LogProcessorService',
            'debug.security.access.decision_manager' => 'getDebug_Security_Access_DecisionManagerService',
            'debug.stopwatch' => 'getDebug_StopwatchService',
            'deprecated.form.registry' => 'getDeprecated_Form_RegistryService',
            'deprecated.form.registry.csrf' => 'getDeprecated_Form_Registry_CsrfService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.connection_factory' => 'getDoctrine_Dbal_ConnectionFactoryService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.dbal.logger.profiling.default' => 'getDoctrine_Dbal_Logger_Profiling_DefaultService',
            'doctrine.orm.default_entity_listener_resolver' => 'getDoctrine_Orm_DefaultEntityListenerResolverService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'doctrine.orm.default_entity_manager.delegate' => 'getDoctrine_Orm_DefaultEntityManager_DelegateService',
            'doctrine.orm.default_entity_manager.property_info_extractor' => 'getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService',
            'doctrine.orm.default_listeners.attach_entity_listeners' => 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService',
            'doctrine.orm.default_manager_configurator' => 'getDoctrine_Orm_DefaultManagerConfiguratorService',
            'doctrine.orm.validator.unique' => 'getDoctrine_Orm_Validator_UniqueService',
            'doctrine.orm.validator_initializer' => 'getDoctrine_Orm_ValidatorInitializerService',
            'doctrine_cache.providers.doctrine.orm.default_metadata_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService',
            'doctrine_cache.providers.doctrine.orm.default_query_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService',
            'doctrine_cache.providers.doctrine.orm.default_result_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService',
            'fidry_alice_data_fixtures.doctrine.persister_loader' => 'getFidryAliceDataFixtures_Doctrine_PersisterLoaderService',
            'fidry_alice_data_fixtures.doctrine.purger_loader' => 'getFidryAliceDataFixtures_Doctrine_PurgerLoaderService',
            'fidry_alice_data_fixtures.loader.multipass_file' => 'getFidryAliceDataFixtures_Loader_MultipassFileService',
            'fidry_alice_data_fixtures.loader.simple_file' => 'getFidryAliceDataFixtures_Loader_SimpleFileService',
            'fidry_alice_data_fixtures.persistence.persister.doctrine.object_manager_persister' => 'getFidryAliceDataFixtures_Persistence_Persister_Doctrine_ObjectManagerPersisterService',
            'fidry_alice_data_fixtures.persistence.purger.doctrine.orm_purger' => 'getFidryAliceDataFixtures_Persistence_Purger_Doctrine_OrmPurgerService',
            'file_locator' => 'getFileLocatorService',
            'filesystem' => 'getFilesystemService',
            'form.factory' => 'getForm_FactoryService',
            'form.registry' => 'getForm_RegistryService',
            'form.resolved_type_factory' => 'getForm_ResolvedTypeFactoryService',
            'form.server_params' => 'getForm_ServerParamsService',
            'form.type.birthday' => 'getForm_Type_BirthdayService',
            'form.type.button' => 'getForm_Type_ButtonService',
            'form.type.checkbox' => 'getForm_Type_CheckboxService',
            'form.type.choice' => 'getForm_Type_ChoiceService',
            'form.type.collection' => 'getForm_Type_CollectionService',
            'form.type.country' => 'getForm_Type_CountryService',
            'form.type.currency' => 'getForm_Type_CurrencyService',
            'form.type.date' => 'getForm_Type_DateService',
            'form.type.datetime' => 'getForm_Type_DatetimeService',
            'form.type.email' => 'getForm_Type_EmailService',
            'form.type.entity' => 'getForm_Type_EntityService',
            'form.type.file' => 'getForm_Type_FileService',
            'form.type.form' => 'getForm_Type_FormService',
            'form.type.hidden' => 'getForm_Type_HiddenService',
            'form.type.integer' => 'getForm_Type_IntegerService',
            'form.type.language' => 'getForm_Type_LanguageService',
            'form.type.locale' => 'getForm_Type_LocaleService',
            'form.type.money' => 'getForm_Type_MoneyService',
            'form.type.number' => 'getForm_Type_NumberService',
            'form.type.password' => 'getForm_Type_PasswordService',
            'form.type.percent' => 'getForm_Type_PercentService',
            'form.type.radio' => 'getForm_Type_RadioService',
            'form.type.range' => 'getForm_Type_RangeService',
            'form.type.repeated' => 'getForm_Type_RepeatedService',
            'form.type.reset' => 'getForm_Type_ResetService',
            'form.type.search' => 'getForm_Type_SearchService',
            'form.type.submit' => 'getForm_Type_SubmitService',
            'form.type.text' => 'getForm_Type_TextService',
            'form.type.textarea' => 'getForm_Type_TextareaService',
            'form.type.time' => 'getForm_Type_TimeService',
            'form.type.timezone' => 'getForm_Type_TimezoneService',
            'form.type.url' => 'getForm_Type_UrlService',
            'form.type_extension.csrf' => 'getForm_TypeExtension_CsrfService',
            'form.type_extension.form.data_collector' => 'getForm_TypeExtension_Form_DataCollectorService',
            'form.type_extension.form.http_foundation' => 'getForm_TypeExtension_Form_HttpFoundationService',
            'form.type_extension.form.validator' => 'getForm_TypeExtension_Form_ValidatorService',
            'form.type_extension.repeated.validator' => 'getForm_TypeExtension_Repeated_ValidatorService',
            'form.type_extension.submit.validator' => 'getForm_TypeExtension_Submit_ValidatorService',
            'form.type_extension.upload.validator' => 'getForm_TypeExtension_Upload_ValidatorService',
            'form.type_guesser.doctrine' => 'getForm_TypeGuesser_DoctrineService',
            'form.type_guesser.validator' => 'getForm_TypeGuesser_ValidatorService',
            'fos_rest.body_listener' => 'getFosRest_BodyListenerService',
            'fos_rest.decoder.json' => 'getFosRest_Decoder_JsonService',
            'fos_rest.decoder.jsontoform' => 'getFosRest_Decoder_JsontoformService',
            'fos_rest.decoder.xml' => 'getFosRest_Decoder_XmlService',
            'fos_rest.decoder_provider' => 'getFosRest_DecoderProviderService',
            'fos_rest.format_listener' => 'getFosRest_FormatListenerService',
            'fos_rest.format_negotiator' => 'getFosRest_FormatNegotiatorService',
            'fos_rest.inflector' => 'getFosRest_InflectorService',
            'fos_rest.normalizer.camel_keys' => 'getFosRest_Normalizer_CamelKeysService',
            'fos_rest.normalizer.camel_keys_with_leading_underscore' => 'getFosRest_Normalizer_CamelKeysWithLeadingUnderscoreService',
            'fos_rest.param_fetcher_listener' => 'getFosRest_ParamFetcherListenerService',
            'fos_rest.request.param_fetcher' => 'getFosRest_Request_ParamFetcherService',
            'fos_rest.request.param_fetcher.reader' => 'getFosRest_Request_ParamFetcher_ReaderService',
            'fos_rest.serializer' => 'getFosRest_SerializerService',
            'fos_rest.serializer.jms_handler_registry' => 'getFosRest_Serializer_JmsHandlerRegistryService',
            'fos_rest.view_handler' => 'getFosRest_ViewHandlerService',
            'fos_rest.view_response_listener' => 'getFosRest_ViewResponseListenerService',
            'fragment.handler' => 'getFragment_HandlerService',
            'fragment.listener' => 'getFragment_ListenerService',
            'fragment.renderer.esi' => 'getFragment_Renderer_EsiService',
            'fragment.renderer.hinclude' => 'getFragment_Renderer_HincludeService',
            'fragment.renderer.inline' => 'getFragment_Renderer_InlineService',
            'fragment.renderer.ssi' => 'getFragment_Renderer_SsiService',
            'hautelook_alice.alice.generator.instantiator.chainable.instantiated_reference_instantiator' => 'getHautelookAlice_Alice_Generator_Instantiator_Chainable_InstantiatedReferenceInstantiatorService',
            'hautelook_alice.console.command.doctrine.doctrine_orm_load_data_fixtures_command' => 'getHautelookAlice_Console_Command_Doctrine_DoctrineOrmLoadDataFixturesCommandService',
            'hautelook_alice.data_fixtures.loader.file_resolver_loader' => 'getHautelookAlice_DataFixtures_Loader_FileResolverLoaderService',
            'hautelook_alice.loader.doctrine_orm_loader' => 'getHautelookAlice_Loader_DoctrineOrmLoaderService',
            'hautelook_alice.locator.env_directory' => 'getHautelookAlice_Locator_EnvDirectoryService',
            'hautelook_alice.locator.environmentless' => 'getHautelookAlice_Locator_EnvironmentlessService',
            'hautelook_alice.resolver.bundle.no_bundle_resolver' => 'getHautelookAlice_Resolver_Bundle_NoBundleResolverService',
            'hautelook_alice.resolver.bundle.simple_resolver' => 'getHautelookAlice_Resolver_Bundle_SimpleResolverService',
            'hautelook_alice.resolver.file.kernel_file_resolver' => 'getHautelookAlice_Resolver_File_KernelFileResolverService',
            'http_kernel' => 'getHttpKernelService',
            'jms_aop.interceptor_loader' => 'getJmsAop_InterceptorLoaderService',
            'jms_aop.pointcut_container' => 'getJmsAop_PointcutContainerService',
            'jms_di_extra.controller_resolver' => 'getJmsDiExtra_ControllerResolverService',
            'jms_di_extra.metadata.converter' => 'getJmsDiExtra_Metadata_ConverterService',
            'jms_di_extra.metadata.metadata_factory' => 'getJmsDiExtra_Metadata_MetadataFactoryService',
            'jms_di_extra.metadata_driver' => 'getJmsDiExtra_MetadataDriverService',
            'jms_di_extra.service_naming_strategy' => 'getJmsDiExtra_ServiceNamingStrategyService',
            'jms_serializer' => 'getJmsSerializerService',
            'jms_serializer.accessor_strategy' => 'getJmsSerializer_AccessorStrategyService',
            'jms_serializer.array_collection_handler' => 'getJmsSerializer_ArrayCollectionHandlerService',
            'jms_serializer.constraint_violation_handler' => 'getJmsSerializer_ConstraintViolationHandlerService',
            'jms_serializer.datetime_handler' => 'getJmsSerializer_DatetimeHandlerService',
            'jms_serializer.deserialization_context_factory' => 'getJmsSerializer_DeserializationContextFactoryService',
            'jms_serializer.doctrine_proxy_subscriber' => 'getJmsSerializer_DoctrineProxySubscriberService',
            'jms_serializer.expression_evaluator' => 'getJmsSerializer_ExpressionEvaluatorService',
            'jms_serializer.form_error_handler' => 'getJmsSerializer_FormErrorHandlerService',
            'jms_serializer.handler_registry' => 'getJmsSerializer_HandlerRegistryService',
            'jms_serializer.json_deserialization_visitor' => 'getJmsSerializer_JsonDeserializationVisitorService',
            'jms_serializer.json_serialization_visitor' => 'getJmsSerializer_JsonSerializationVisitorService',
            'jms_serializer.metadata_driver' => 'getJmsSerializer_MetadataDriverService',
            'jms_serializer.naming_strategy' => 'getJmsSerializer_NamingStrategyService',
            'jms_serializer.object_constructor' => 'getJmsSerializer_ObjectConstructorService',
            'jms_serializer.php_collection_handler' => 'getJmsSerializer_PhpCollectionHandlerService',
            'jms_serializer.serialization_context_factory' => 'getJmsSerializer_SerializationContextFactoryService',
            'jms_serializer.stopwatch_subscriber' => 'getJmsSerializer_StopwatchSubscriberService',
            'jms_serializer.templating.helper.serializer' => 'getJmsSerializer_Templating_Helper_SerializerService',
            'jms_serializer.twig_extension.serializer_runtime_helper' => 'getJmsSerializer_TwigExtension_SerializerRuntimeHelperService',
            'jms_serializer.unserialize_object_constructor' => 'getJmsSerializer_UnserializeObjectConstructorService',
            'jms_serializer.xml_deserialization_visitor' => 'getJmsSerializer_XmlDeserializationVisitorService',
            'jms_serializer.xml_serialization_visitor' => 'getJmsSerializer_XmlSerializationVisitorService',
            'jms_serializer.yaml_serialization_visitor' => 'getJmsSerializer_YamlSerializationVisitorService',
            'kernel.class_cache.cache_warmer' => 'getKernel_ClassCache_CacheWarmerService',
            'locale_listener' => 'getLocaleListenerService',
            'logger' => 'getLoggerService',
            'monolog.activation_strategy.not_found' => 'getMonolog_ActivationStrategy_NotFoundService',
            'monolog.handler.console' => 'getMonolog_Handler_ConsoleService',
            'monolog.handler.fingers_crossed.error_level_activation_strategy' => 'getMonolog_Handler_FingersCrossed_ErrorLevelActivationStrategyService',
            'monolog.handler.main' => 'getMonolog_Handler_MainService',
            'monolog.handler.null_internal' => 'getMonolog_Handler_NullInternalService',
            'monolog.handler.server_log' => 'getMonolog_Handler_ServerLogService',
            'monolog.logger.cache' => 'getMonolog_Logger_CacheService',
            'monolog.logger.console' => 'getMonolog_Logger_ConsoleService',
            'monolog.logger.doctrine' => 'getMonolog_Logger_DoctrineService',
            'monolog.logger.event' => 'getMonolog_Logger_EventService',
            'monolog.logger.php' => 'getMonolog_Logger_PhpService',
            'monolog.logger.profiler' => 'getMonolog_Logger_ProfilerService',
            'monolog.logger.request' => 'getMonolog_Logger_RequestService',
            'monolog.logger.router' => 'getMonolog_Logger_RouterService',
            'monolog.logger.security' => 'getMonolog_Logger_SecurityService',
            'monolog.logger.templating' => 'getMonolog_Logger_TemplatingService',
            'nelmio_alice.data_loader.simple' => 'getNelmioAlice_DataLoader_SimpleService',
            'nelmio_alice.faker.generator' => 'getNelmioAlice_Faker_GeneratorService',
            'nelmio_alice.faker.provider.alice' => 'getNelmioAlice_Faker_Provider_AliceService',
            'nelmio_alice.file_loader.simple' => 'getNelmioAlice_FileLoader_SimpleService',
            'nelmio_alice.file_locator.default' => 'getNelmioAlice_FileLocator_DefaultService',
            'nelmio_alice.file_parser.chainable.php' => 'getNelmioAlice_FileParser_Chainable_PhpService',
            'nelmio_alice.file_parser.chainable.yaml' => 'getNelmioAlice_FileParser_Chainable_YamlService',
            'nelmio_alice.file_parser.default_include_processor' => 'getNelmioAlice_FileParser_DefaultIncludeProcessorService',
            'nelmio_alice.file_parser.registry' => 'getNelmioAlice_FileParser_RegistryService',
            'nelmio_alice.file_parser.runtime_cache' => 'getNelmioAlice_FileParser_RuntimeCacheService',
            'nelmio_alice.fixture_builder.denormalizer.fixture.chainable.null_list' => 'getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Chainable_NullListService',
            'nelmio_alice.fixture_builder.denormalizer.fixture.chainable.null_range' => 'getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Chainable_NullRangeService',
            'nelmio_alice.fixture_builder.denormalizer.fixture.chainable.simple' => 'getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Chainable_SimpleService',
            'nelmio_alice.fixture_builder.denormalizer.fixture.chainable.simple_list' => 'getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Chainable_SimpleListService',
            'nelmio_alice.fixture_builder.denormalizer.fixture.chainable.simple_range' => 'getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Chainable_SimpleRangeService',
            'nelmio_alice.fixture_builder.denormalizer.fixture.chainable.temporary_list' => 'getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Chainable_TemporaryListService',
            'nelmio_alice.fixture_builder.denormalizer.fixture.chainable.temporary_range' => 'getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Chainable_TemporaryRangeService',
            'nelmio_alice.fixture_builder.denormalizer.fixture.registry_denormalizer' => 'getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_RegistryDenormalizerService',
            'nelmio_alice.fixture_builder.denormalizer.fixture.simple_fixture_bag_denormalizer' => 'getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_SimpleFixtureBagDenormalizerService',
            'nelmio_alice.fixture_builder.denormalizer.fixture.specs.arguments.simple_arguments_denormalizer' => 'getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Specs_Arguments_SimpleArgumentsDenormalizerService',
            'nelmio_alice.fixture_builder.denormalizer.fixture.specs.calls.function_denormalizer' => 'getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Specs_Calls_FunctionDenormalizerService',
            'nelmio_alice.fixture_builder.denormalizer.fixture.specs.calls.method_flag_handler.configurator_flag_handler' => 'getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Specs_Calls_MethodFlagHandler_ConfiguratorFlagHandlerService',
            'nelmio_alice.fixture_builder.denormalizer.fixture.specs.calls.method_flag_handler.optional_flag_handler' => 'getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Specs_Calls_MethodFlagHandler_OptionalFlagHandlerService',
            'nelmio_alice.fixture_builder.denormalizer.fixture.specs.calls.simple_denormalizer' => 'getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Specs_Calls_SimpleDenormalizerService',
            'nelmio_alice.fixture_builder.denormalizer.fixture.specs.constructor.constructor_denormalizer' => 'getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Specs_Constructor_ConstructorDenormalizerService',
            'nelmio_alice.fixture_builder.denormalizer.fixture.specs.constructor.factory_denormalizer' => 'getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Specs_Constructor_FactoryDenormalizerService',
            'nelmio_alice.fixture_builder.denormalizer.fixture.specs.constructor.legacy_constructor_denormalizer' => 'getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Specs_Constructor_LegacyConstructorDenormalizerService',
            'nelmio_alice.fixture_builder.denormalizer.fixture.specs.property.simple_denormalizer' => 'getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Specs_Property_SimpleDenormalizerService',
            'nelmio_alice.fixture_builder.denormalizer.fixture.specs.value.simple_value_denormalizer' => 'getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Specs_Value_SimpleValueDenormalizerService',
            'nelmio_alice.fixture_builder.denormalizer.fixture.specs.value.unique_value_denormalizer' => 'getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Specs_Value_UniqueValueDenormalizerService',
            'nelmio_alice.fixture_builder.denormalizer.flag_parser.chainable.configurator' => 'getNelmioAlice_FixtureBuilder_Denormalizer_FlagParser_Chainable_ConfiguratorService',
            'nelmio_alice.fixture_builder.denormalizer.flag_parser.chainable.extend' => 'getNelmioAlice_FixtureBuilder_Denormalizer_FlagParser_Chainable_ExtendService',
            'nelmio_alice.fixture_builder.denormalizer.flag_parser.chainable.optional' => 'getNelmioAlice_FixtureBuilder_Denormalizer_FlagParser_Chainable_OptionalService',
            'nelmio_alice.fixture_builder.denormalizer.flag_parser.chainable.template' => 'getNelmioAlice_FixtureBuilder_Denormalizer_FlagParser_Chainable_TemplateService',
            'nelmio_alice.fixture_builder.denormalizer.flag_parser.chainable.unique' => 'getNelmioAlice_FixtureBuilder_Denormalizer_FlagParser_Chainable_UniqueService',
            'nelmio_alice.fixture_builder.denormalizer.flag_parser.element' => 'getNelmioAlice_FixtureBuilder_Denormalizer_FlagParser_ElementService',
            'nelmio_alice.fixture_builder.denormalizer.flag_parser.registry' => 'getNelmioAlice_FixtureBuilder_Denormalizer_FlagParser_RegistryService',
            'nelmio_alice.fixture_builder.denormalizer.parameter.simple_parameter_bag_denormalizer' => 'getNelmioAlice_FixtureBuilder_Denormalizer_Parameter_SimpleParameterBagDenormalizerService',
            'nelmio_alice.fixture_builder.denormalizer.simple' => 'getNelmioAlice_FixtureBuilder_Denormalizer_SimpleService',
            'nelmio_alice.fixture_builder.denormalizer.specs.simple' => 'getNelmioAlice_FixtureBuilder_Denormalizer_Specs_SimpleService',
            'nelmio_alice.fixture_builder.expression_language.lexer.empty_value_lexer' => 'getNelmioAlice_FixtureBuilder_ExpressionLanguage_Lexer_EmptyValueLexerService',
            'nelmio_alice.fixture_builder.expression_language.lexer.function_lexer' => 'getNelmioAlice_FixtureBuilder_ExpressionLanguage_Lexer_FunctionLexerService',
            'nelmio_alice.fixture_builder.expression_language.lexer.globals_patterns_lexer' => 'getNelmioAlice_FixtureBuilder_ExpressionLanguage_Lexer_GlobalsPatternsLexerService',
            'nelmio_alice.fixture_builder.expression_language.lexer.reference_escaper_lexer' => 'getNelmioAlice_FixtureBuilder_ExpressionLanguage_Lexer_ReferenceEscaperLexerService',
            'nelmio_alice.fixture_builder.expression_language.lexer.reference_lexer' => 'getNelmioAlice_FixtureBuilder_ExpressionLanguage_Lexer_ReferenceLexerService',
            'nelmio_alice.fixture_builder.expression_language.lexer.sub_patterns_lexer' => 'getNelmioAlice_FixtureBuilder_ExpressionLanguage_Lexer_SubPatternsLexerService',
            'nelmio_alice.fixture_builder.expression_language.parser.function_fixture_reference_parser' => 'getNelmioAlice_FixtureBuilder_ExpressionLanguage_Parser_FunctionFixtureReferenceParserService',
            'nelmio_alice.fixture_builder.expression_language.parser.simple_parser' => 'getNelmioAlice_FixtureBuilder_ExpressionLanguage_Parser_SimpleParserService',
            'nelmio_alice.fixture_builder.expression_language.parser.string_parser' => 'getNelmioAlice_FixtureBuilder_ExpressionLanguage_Parser_StringParserService',
            'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.argument_escaper' => 'getNelmioAlice_FixtureBuilder_ExpressionLanguage_Parser_TokenParser_Chainable_ArgumentEscaperService',
            'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.dynamic_array_token_parser' => 'getNelmioAlice_FixtureBuilder_ExpressionLanguage_Parser_TokenParser_Chainable_DynamicArrayTokenParserService',
            'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.escaped_value_token_parser' => 'getNelmioAlice_FixtureBuilder_ExpressionLanguage_Parser_TokenParser_Chainable_EscapedValueTokenParserService',
            'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.fixture_list_reference_token_parser' => 'getNelmioAlice_FixtureBuilder_ExpressionLanguage_Parser_TokenParser_Chainable_FixtureListReferenceTokenParserService',
            'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.fixture_method_reference_token_parser' => 'getNelmioAlice_FixtureBuilder_ExpressionLanguage_Parser_TokenParser_Chainable_FixtureMethodReferenceTokenParserService',
            'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.fixture_range_reference_token_parser' => 'getNelmioAlice_FixtureBuilder_ExpressionLanguage_Parser_TokenParser_Chainable_FixtureRangeReferenceTokenParserService',
            'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.function_token_parser' => 'getNelmioAlice_FixtureBuilder_ExpressionLanguage_Parser_TokenParser_Chainable_FunctionTokenParserService',
            'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.identity_token_parser' => 'getNelmioAlice_FixtureBuilder_ExpressionLanguage_Parser_TokenParser_Chainable_IdentityTokenParserService',
            'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.method_reference_token_parser' => 'getNelmioAlice_FixtureBuilder_ExpressionLanguage_Parser_TokenParser_Chainable_MethodReferenceTokenParserService',
            'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.optional_token_parser' => 'getNelmioAlice_FixtureBuilder_ExpressionLanguage_Parser_TokenParser_Chainable_OptionalTokenParserService',
            'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.parameter_token_parser' => 'getNelmioAlice_FixtureBuilder_ExpressionLanguage_Parser_TokenParser_Chainable_ParameterTokenParserService',
            'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.property_reference_token_parser' => 'getNelmioAlice_FixtureBuilder_ExpressionLanguage_Parser_TokenParser_Chainable_PropertyReferenceTokenParserService',
            'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.simple_reference_token_parser' => 'getNelmioAlice_FixtureBuilder_ExpressionLanguage_Parser_TokenParser_Chainable_SimpleReferenceTokenParserService',
            'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.string_array_token_parser' => 'getNelmioAlice_FixtureBuilder_ExpressionLanguage_Parser_TokenParser_Chainable_StringArrayTokenParserService',
            'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.string_token_parser' => 'getNelmioAlice_FixtureBuilder_ExpressionLanguage_Parser_TokenParser_Chainable_StringTokenParserService',
            'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.tolerant_function_token_parser' => 'getNelmioAlice_FixtureBuilder_ExpressionLanguage_Parser_TokenParser_Chainable_TolerantFunctionTokenParserService',
            'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.variable_token_parser' => 'getNelmioAlice_FixtureBuilder_ExpressionLanguage_Parser_TokenParser_Chainable_VariableTokenParserService',
            'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.wildcard_reference_token_parser' => 'getNelmioAlice_FixtureBuilder_ExpressionLanguage_Parser_TokenParser_Chainable_WildcardReferenceTokenParserService',
            'nelmio_alice.fixture_builder.expression_language.parser.token_parser.registry' => 'getNelmioAlice_FixtureBuilder_ExpressionLanguage_Parser_TokenParser_RegistryService',
            'nelmio_alice.fixture_builder.simple' => 'getNelmioAlice_FixtureBuilder_SimpleService',
            'nelmio_alice.generator.caller.chainable.configurator_method_call' => 'getNelmioAlice_Generator_Caller_Chainable_ConfiguratorMethodCallService',
            'nelmio_alice.generator.caller.chainable.method_call_with_reference' => 'getNelmioAlice_Generator_Caller_Chainable_MethodCallWithReferenceService',
            'nelmio_alice.generator.caller.chainable.optional_method_call' => 'getNelmioAlice_Generator_Caller_Chainable_OptionalMethodCallService',
            'nelmio_alice.generator.caller.chainable.simple_call' => 'getNelmioAlice_Generator_Caller_Chainable_SimpleCallService',
            'nelmio_alice.generator.caller.registry' => 'getNelmioAlice_Generator_Caller_RegistryService',
            'nelmio_alice.generator.caller.simple' => 'getNelmioAlice_Generator_Caller_SimpleService',
            'nelmio_alice.generator.double_pass' => 'getNelmioAlice_Generator_DoublePassService',
            'nelmio_alice.generator.hydrator.property.symfony_property_access' => 'getNelmioAlice_Generator_Hydrator_Property_SymfonyPropertyAccessService',
            'nelmio_alice.generator.hydrator.simple' => 'getNelmioAlice_Generator_Hydrator_SimpleService',
            'nelmio_alice.generator.instantiator.chainable.no_caller_method_instantiator' => 'getNelmioAlice_Generator_Instantiator_Chainable_NoCallerMethodInstantiatorService',
            'nelmio_alice.generator.instantiator.chainable.no_method_call_instantiator' => 'getNelmioAlice_Generator_Instantiator_Chainable_NoMethodCallInstantiatorService',
            'nelmio_alice.generator.instantiator.chainable.null_constructor_instantiator' => 'getNelmioAlice_Generator_Instantiator_Chainable_NullConstructorInstantiatorService',
            'nelmio_alice.generator.instantiator.chainable.static_factory_instantiator' => 'getNelmioAlice_Generator_Instantiator_Chainable_StaticFactoryInstantiatorService',
            'nelmio_alice.generator.instantiator.existing_instance' => 'getNelmioAlice_Generator_Instantiator_ExistingInstanceService',
            'nelmio_alice.generator.instantiator.registry' => 'getNelmioAlice_Generator_Instantiator_RegistryService',
            'nelmio_alice.generator.instantiator.resolver' => 'getNelmioAlice_Generator_Instantiator_ResolverService',
            'nelmio_alice.generator.object_generator.complete' => 'getNelmioAlice_Generator_ObjectGenerator_CompleteService',
            'nelmio_alice.generator.object_generator.simple' => 'getNelmioAlice_Generator_ObjectGenerator_SimpleService',
            'nelmio_alice.generator.resolver.fixture_bag.template_bag' => 'getNelmioAlice_Generator_Resolver_FixtureBag_TemplateBagService',
            'nelmio_alice.generator.resolver.fixture_set.remove_conflicting_objects' => 'getNelmioAlice_Generator_Resolver_FixtureSet_RemoveConflictingObjectsService',
            'nelmio_alice.generator.resolver.fixture_set.simple' => 'getNelmioAlice_Generator_Resolver_FixtureSet_SimpleService',
            'nelmio_alice.generator.resolver.parameter.chainable.array_parameter_resolver' => 'getNelmioAlice_Generator_Resolver_Parameter_Chainable_ArrayParameterResolverService',
            'nelmio_alice.generator.resolver.parameter.chainable.recursive_parameter_resolver' => 'getNelmioAlice_Generator_Resolver_Parameter_Chainable_RecursiveParameterResolverService',
            'nelmio_alice.generator.resolver.parameter.chainable.static_parameter_resolver' => 'getNelmioAlice_Generator_Resolver_Parameter_Chainable_StaticParameterResolverService',
            'nelmio_alice.generator.resolver.parameter.chainable.string_parameter_resolver' => 'getNelmioAlice_Generator_Resolver_Parameter_Chainable_StringParameterResolverService',
            'nelmio_alice.generator.resolver.parameter.registry' => 'getNelmioAlice_Generator_Resolver_Parameter_RegistryService',
            'nelmio_alice.generator.resolver.parameter_bag.remove_conflicting_parameters' => 'getNelmioAlice_Generator_Resolver_ParameterBag_RemoveConflictingParametersService',
            'nelmio_alice.generator.resolver.parameter_bag.simple' => 'getNelmioAlice_Generator_Resolver_ParameterBag_SimpleService',
            'nelmio_alice.generator.resolver.value.chainable.array_value_resolver' => 'getNelmioAlice_Generator_Resolver_Value_Chainable_ArrayValueResolverService',
            'nelmio_alice.generator.resolver.value.chainable.dynamic_array_value_resolver' => 'getNelmioAlice_Generator_Resolver_Value_Chainable_DynamicArrayValueResolverService',
            'nelmio_alice.generator.resolver.value.chainable.evaluated_value_resolver' => 'getNelmioAlice_Generator_Resolver_Value_Chainable_EvaluatedValueResolverService',
            'nelmio_alice.generator.resolver.value.chainable.faker_value_resolver' => 'getNelmioAlice_Generator_Resolver_Value_Chainable_FakerValueResolverService',
            'nelmio_alice.generator.resolver.value.chainable.fixture_method_call_reference_resolver' => 'getNelmioAlice_Generator_Resolver_Value_Chainable_FixtureMethodCallReferenceResolverService',
            'nelmio_alice.generator.resolver.value.chainable.fixture_property_reference_resolver' => 'getNelmioAlice_Generator_Resolver_Value_Chainable_FixturePropertyReferenceResolverService',
            'nelmio_alice.generator.resolver.value.chainable.fixture_reference_resolver' => 'getNelmioAlice_Generator_Resolver_Value_Chainable_FixtureReferenceResolverService',
            'nelmio_alice.generator.resolver.value.chainable.fixture_wildcard_reference_resolver' => 'getNelmioAlice_Generator_Resolver_Value_Chainable_FixtureWildcardReferenceResolverService',
            'nelmio_alice.generator.resolver.value.chainable.function_argument_resolver' => 'getNelmioAlice_Generator_Resolver_Value_Chainable_FunctionArgumentResolverService',
            'nelmio_alice.generator.resolver.value.chainable.list_value_resolver' => 'getNelmioAlice_Generator_Resolver_Value_Chainable_ListValueResolverService',
            'nelmio_alice.generator.resolver.value.chainable.optional_value_resolver' => 'getNelmioAlice_Generator_Resolver_Value_Chainable_OptionalValueResolverService',
            'nelmio_alice.generator.resolver.value.chainable.parameter_value_resolver' => 'getNelmioAlice_Generator_Resolver_Value_Chainable_ParameterValueResolverService',
            'nelmio_alice.generator.resolver.value.chainable.php_value_resolver' => 'getNelmioAlice_Generator_Resolver_Value_Chainable_PhpValueResolverService',
            'nelmio_alice.generator.resolver.value.chainable.self_fixture_reference_resolver' => 'getNelmioAlice_Generator_Resolver_Value_Chainable_SelfFixtureReferenceResolverService',
            'nelmio_alice.generator.resolver.value.chainable.unique_value_resolver' => 'getNelmioAlice_Generator_Resolver_Value_Chainable_UniqueValueResolverService',
            'nelmio_alice.generator.resolver.value.chainable.unresolved_fixture_reference_resolver' => 'getNelmioAlice_Generator_Resolver_Value_Chainable_UnresolvedFixtureReferenceResolverService',
            'nelmio_alice.generator.resolver.value.chainable.value_for_current_value_resolver' => 'getNelmioAlice_Generator_Resolver_Value_Chainable_ValueForCurrentValueResolverService',
            'nelmio_alice.generator.resolver.value.chainable.variable_value_resolver' => 'getNelmioAlice_Generator_Resolver_Value_Chainable_VariableValueResolverService',
            'nelmio_alice.generator.resolver.value.registry' => 'getNelmioAlice_Generator_Resolver_Value_RegistryService',
            'nelmio_alice.generator.resolver.value.unique_values_pool' => 'getNelmioAlice_Generator_Resolver_Value_UniqueValuesPoolService',
            'nelmio_alice.property_accessor.std' => 'getNelmioAlice_PropertyAccessor_StdService',
            'nelmio_cors.cors_listener' => 'getNelmioCors_CorsListenerService',
            'nelmio_cors.options_provider.config' => 'getNelmioCors_OptionsProvider_ConfigService',
            'profiler' => 'getProfilerService',
            'profiler_listener' => 'getProfilerListenerService',
            'property_accessor' => 'getPropertyAccessorService',
            'request_stack' => 'getRequestStackService',
            'resolve_controller_name_subscriber' => 'getResolveControllerNameSubscriberService',
            'response_listener' => 'getResponseListenerService',
            'router' => 'getRouterService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router_listener' => 'getRouterListenerService',
            'routing.loader' => 'getRouting_LoaderService',
            'security.access.authenticated_voter' => 'getSecurity_Access_AuthenticatedVoterService',
            'security.access.expression_voter' => 'getSecurity_Access_ExpressionVoterService',
            'security.access.simple_role_voter' => 'getSecurity_Access_SimpleRoleVoterService',
            'security.authentication.guard_handler' => 'getSecurity_Authentication_GuardHandlerService',
            'security.authentication.manager' => 'getSecurity_Authentication_ManagerService',
            'security.authentication.provider.anonymous.main' => 'getSecurity_Authentication_Provider_Anonymous_MainService',
            'security.authentication.trust_resolver' => 'getSecurity_Authentication_TrustResolverService',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService',
            'security.encoder_factory' => 'getSecurity_EncoderFactoryService',
            'security.firewall' => 'getSecurity_FirewallService',
            'security.firewall.map' => 'getSecurity_Firewall_MapService',
            'security.firewall.map.context.dev' => 'getSecurity_Firewall_Map_Context_DevService',
            'security.firewall.map.context.main' => 'getSecurity_Firewall_Map_Context_MainService',
            'security.logout_url_generator' => 'getSecurity_LogoutUrlGeneratorService',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService',
            'security.rememberme.response_listener' => 'getSecurity_Rememberme_ResponseListenerService',
            'security.request_matcher.5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1d' => 'getSecurity_RequestMatcher_5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1dService',
            'security.role_hierarchy' => 'getSecurity_RoleHierarchyService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'security.user_value_resolver' => 'getSecurity_UserValueResolverService',
            'security.validator.user_password' => 'getSecurity_Validator_UserPasswordService',
            'sensio_distribution.security_checker' => 'getSensioDistribution_SecurityCheckerService',
            'sensio_distribution.security_checker.command' => 'getSensioDistribution_SecurityChecker_CommandService',
            'sensio_framework_extra.cache.listener' => 'getSensioFrameworkExtra_Cache_ListenerService',
            'sensio_framework_extra.controller.listener' => 'getSensioFrameworkExtra_Controller_ListenerService',
            'sensio_framework_extra.converter.datetime' => 'getSensioFrameworkExtra_Converter_DatetimeService',
            'sensio_framework_extra.converter.doctrine.orm' => 'getSensioFrameworkExtra_Converter_Doctrine_OrmService',
            'sensio_framework_extra.converter.listener' => 'getSensioFrameworkExtra_Converter_ListenerService',
            'sensio_framework_extra.converter.manager' => 'getSensioFrameworkExtra_Converter_ManagerService',
            'sensio_framework_extra.security.listener' => 'getSensioFrameworkExtra_Security_ListenerService',
            'sensio_framework_extra.view.guesser' => 'getSensioFrameworkExtra_View_GuesserService',
            'sensio_framework_extra.view.listener' => 'getSensioFrameworkExtra_View_ListenerService',
            'service_locator.e64d23c3bf770e2cf44b71643280668d' => 'getServiceLocator_E64d23c3bf770e2cf44b71643280668dService',
            'session' => 'getSessionService',
            'session.handler' => 'getSession_HandlerService',
            'session.save_listener' => 'getSession_SaveListenerService',
            'session.storage.filesystem' => 'getSession_Storage_FilesystemService',
            'session.storage.metadata_bag' => 'getSession_Storage_MetadataBagService',
            'session.storage.native' => 'getSession_Storage_NativeService',
            'session.storage.php_bridge' => 'getSession_Storage_PhpBridgeService',
            'session_listener' => 'getSessionListenerService',
            'streamed_response_listener' => 'getStreamedResponseListenerService',
            'swiftmailer.email_sender.listener' => 'getSwiftmailer_EmailSender_ListenerService',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService',
            'swiftmailer.mailer.default.plugin.messagelogger' => 'getSwiftmailer_Mailer_Default_Plugin_MessageloggerService',
            'swiftmailer.mailer.default.spool' => 'getSwiftmailer_Mailer_Default_SpoolService',
            'swiftmailer.mailer.default.transport' => 'getSwiftmailer_Mailer_Default_TransportService',
            'swiftmailer.mailer.default.transport.eventdispatcher' => 'getSwiftmailer_Mailer_Default_Transport_EventdispatcherService',
            'swiftmailer.mailer.default.transport.real' => 'getSwiftmailer_Mailer_Default_Transport_RealService',
            'templating' => 'getTemplatingService',
            'templating.filename_parser' => 'getTemplating_FilenameParserService',
            'templating.helper.logout_url' => 'getTemplating_Helper_LogoutUrlService',
            'templating.helper.security' => 'getTemplating_Helper_SecurityService',
            'templating.loader' => 'getTemplating_LoaderService',
            'templating.locator' => 'getTemplating_LocatorService',
            'templating.name_parser' => 'getTemplating_NameParserService',
            'test.client' => 'getTest_ClientService',
            'test.client.cookiejar' => 'getTest_Client_CookiejarService',
            'test.client.history' => 'getTest_Client_HistoryService',
            'test.session.listener' => 'getTest_Session_ListenerService',
            'translator' => 'getTranslatorService',
            'twig' => 'getTwigService',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService',
            'twig.exception_listener' => 'getTwig_ExceptionListenerService',
            'twig.form.renderer' => 'getTwig_Form_RendererService',
            'twig.loader' => 'getTwig_LoaderService',
            'twig.profile' => 'getTwig_ProfileService',
            'twig.runtime.httpkernel' => 'getTwig_Runtime_HttpkernelService',
            'twig.translation.extractor' => 'getTwig_Translation_ExtractorService',
            'uri_signer' => 'getUriSignerService',
            'user.service' => 'getUser_ServiceService',
            'validate_request_listener' => 'getValidateRequestListenerService',
            'validator' => 'getValidatorService',
            'validator.builder' => 'getValidator_BuilderService',
            'validator.email' => 'getValidator_EmailService',
            'validator.expression' => 'getValidator_ExpressionService',
            'var_dumper.cli_dumper' => 'getVarDumper_CliDumperService',
            'var_dumper.cloner' => 'getVarDumper_ClonerService',
            'web_profiler.controller.exception' => 'getWebProfiler_Controller_ExceptionService',
            'web_profiler.controller.profiler' => 'getWebProfiler_Controller_ProfilerService',
            'web_profiler.controller.router' => 'getWebProfiler_Controller_RouterService',
        );
        $this->privates = array(
            '1_ea6d9e8f60817a88f28a2e1036956ef36d32ea0ebd7aaac1f6fcc56026c5e8af' => true,
            '2_ea6d9e8f60817a88f28a2e1036956ef36d32ea0ebd7aaac1f6fcc56026c5e8af' => true,
            'annotations.reader' => true,
            'argument_resolver.default' => true,
            'argument_resolver.request' => true,
            'argument_resolver.request_attribute' => true,
            'argument_resolver.service' => true,
            'argument_resolver.session' => true,
            'argument_resolver.variadic' => true,
            'cache.annotations' => true,
            'cache.annotations.recorder_inner' => true,
            'cache.app.recorder_inner' => true,
            'cache.serializer.recorder_inner' => true,
            'cache.system.recorder_inner' => true,
            'cache.validator' => true,
            'cache.validator.recorder_inner' => true,
            'console.error_listener' => true,
            'controller_name_converter' => true,
            'debug.file_link_formatter' => true,
            'debug.log_processor' => true,
            'debug.security.access.decision_manager' => true,
            'doctrine.dbal.logger.profiling.default' => true,
            'doctrine.orm.default_entity_manager.delegate' => true,
            'form.server_params' => true,
            'form.type.choice' => true,
            'form.type.form' => true,
            'form.type_extension.csrf' => true,
            'form.type_extension.form.data_collector' => true,
            'form.type_extension.form.http_foundation' => true,
            'form.type_extension.form.validator' => true,
            'form.type_extension.repeated.validator' => true,
            'form.type_extension.submit.validator' => true,
            'form.type_extension.upload.validator' => true,
            'form.type_guesser.validator' => true,
            'fos_rest.request.param_fetcher.reader' => true,
            'fos_rest.serializer.jms_handler_registry' => true,
            'jms_di_extra.controller_resolver' => true,
            'jms_serializer.unserialize_object_constructor' => true,
            'resolve_controller_name_subscriber' => true,
            'router.request_context' => true,
            'security.access.authenticated_voter' => true,
            'security.access.expression_voter' => true,
            'security.access.simple_role_voter' => true,
            'security.authentication.manager' => true,
            'security.authentication.provider.anonymous.main' => true,
            'security.authentication.trust_resolver' => true,
            'security.firewall.map' => true,
            'security.logout_url_generator' => true,
            'security.request_matcher.5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1d' => true,
            'security.role_hierarchy' => true,
            'security.user_value_resolver' => true,
            'service_locator.e64d23c3bf770e2cf44b71643280668d' => true,
            'session.storage.metadata_bag' => true,
            'swiftmailer.mailer.default.transport.eventdispatcher' => true,
            'templating.locator' => true,
        );
        $this->aliases = array(
            'cache.app_clearer' => 'cache.default_clearer',
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.default_metadata_cache' => 'doctrine_cache.providers.doctrine.orm.default_metadata_cache',
            'doctrine.orm.default_query_cache' => 'doctrine_cache.providers.doctrine.orm.default_query_cache',
            'doctrine.orm.default_result_cache' => 'doctrine_cache.providers.doctrine.orm.default_result_cache',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'event_dispatcher' => 'debug.event_dispatcher',
            'fos_rest.router' => 'router',
            'fos_rest.templating' => 'templating',
            'hautelook_alice.data_fixtures.loader' => 'fidry_alice_data_fixtures.doctrine.persister_loader',
            'hautelook_alice.loader' => 'hautelook_alice.loader.doctrine_orm_loader',
            'hautelook_alice.locator' => 'hautelook_alice.locator.environmentless',
            'hautelook_alice.resolver.bundle' => 'hautelook_alice.resolver.bundle.no_bundle_resolver',
            'hautelook_alice.resolver.file' => 'hautelook_alice.resolver.file.kernel_file_resolver',
            'mailer' => 'swiftmailer.mailer.default',
            'nelmio_alice.data_loader' => 'nelmio_alice.data_loader.simple',
            'nelmio_alice.file_loader' => 'nelmio_alice.file_loader.simple',
            'nelmio_alice.file_locator' => 'nelmio_alice.file_locator.default',
            'nelmio_alice.file_parser' => 'nelmio_alice.file_parser.runtime_cache',
            'nelmio_alice.fixture_builder' => 'nelmio_alice.fixture_builder.simple',
            'nelmio_alice.fixture_builder.denormalizer' => 'nelmio_alice.fixture_builder.denormalizer.simple',
            'nelmio_alice.fixture_builder.denormalizer.fixture' => 'nelmio_alice.fixture_builder.denormalizer.fixture.registry_denormalizer',
            'nelmio_alice.fixture_builder.denormalizer.fixture.specs.arguments' => 'nelmio_alice.fixture_builder.denormalizer.fixture.specs.arguments.simple_arguments_denormalizer',
            'nelmio_alice.fixture_builder.denormalizer.fixture.specs.calls' => 'nelmio_alice.fixture_builder.denormalizer.fixture.specs.calls.simple_denormalizer',
            'nelmio_alice.fixture_builder.denormalizer.fixture.specs.constructor' => 'nelmio_alice.fixture_builder.denormalizer.fixture.specs.constructor.legacy_constructor_denormalizer',
            'nelmio_alice.fixture_builder.denormalizer.fixture.specs.property' => 'nelmio_alice.fixture_builder.denormalizer.fixture.specs.property.simple_denormalizer',
            'nelmio_alice.fixture_builder.denormalizer.fixture.specs.value' => 'nelmio_alice.fixture_builder.denormalizer.fixture.specs.value.unique_value_denormalizer',
            'nelmio_alice.fixture_builder.denormalizer.fixture_bag' => 'nelmio_alice.fixture_builder.denormalizer.fixture.simple_fixture_bag_denormalizer',
            'nelmio_alice.fixture_builder.denormalizer.flag_parser' => 'nelmio_alice.fixture_builder.denormalizer.flag_parser.element',
            'nelmio_alice.fixture_builder.denormalizer.parameter_bag' => 'nelmio_alice.fixture_builder.denormalizer.parameter.simple_parameter_bag_denormalizer',
            'nelmio_alice.fixture_builder.denormalizer.specs' => 'nelmio_alice.fixture_builder.denormalizer.specs.simple',
            'nelmio_alice.fixture_builder.expression_language.lexer' => 'nelmio_alice.fixture_builder.expression_language.lexer.empty_value_lexer',
            'nelmio_alice.fixture_builder.expression_language.parser' => 'nelmio_alice.fixture_builder.expression_language.parser.function_fixture_reference_parser',
            'nelmio_alice.fixture_builder.expression_language.parser.token_parser' => 'nelmio_alice.fixture_builder.expression_language.parser.token_parser.registry',
            'nelmio_alice.generator' => 'nelmio_alice.generator.double_pass',
            'nelmio_alice.generator.caller' => 'nelmio_alice.generator.caller.simple',
            'nelmio_alice.generator.hydrator' => 'nelmio_alice.generator.hydrator.simple',
            'nelmio_alice.generator.hydrator.property' => 'nelmio_alice.generator.hydrator.property.symfony_property_access',
            'nelmio_alice.generator.instantiator' => 'nelmio_alice.generator.instantiator.existing_instance',
            'nelmio_alice.generator.object_generator' => 'nelmio_alice.generator.object_generator.complete',
            'nelmio_alice.generator.resolver.fixture_bag' => 'nelmio_alice.generator.resolver.fixture_bag.template_bag',
            'nelmio_alice.generator.resolver.fixture_set' => 'nelmio_alice.generator.resolver.fixture_set.remove_conflicting_objects',
            'nelmio_alice.generator.resolver.parameter_bag' => 'nelmio_alice.generator.resolver.parameter_bag.remove_conflicting_parameters',
            'nelmio_alice.generator.resolver.value' => 'nelmio_alice.generator.resolver.value.registry',
            'nelmio_alice.generator.resolver.value.property_accessor' => 'property_accessor',
            'nelmio_alice.property_accessor' => 'nelmio_alice.property_accessor.std',
            'session.storage' => 'session.storage.filesystem',
            'swiftmailer.mailer' => 'swiftmailer.mailer.default',
            'swiftmailer.plugin.messagelogger' => 'swiftmailer.mailer.default.plugin.messagelogger',
            'swiftmailer.spool' => 'swiftmailer.mailer.default.spool',
            'swiftmailer.transport' => 'swiftmailer.mailer.default.transport',
            'swiftmailer.transport.real' => 'swiftmailer.mailer.default.transport.real',
        );
    }

    /**
     * {@inheritdoc}
     */
    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    /**
     * {@inheritdoc}
     */
    public function isCompiled()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function isFrozen()
    {
        @trigger_error(sprintf('The %s() method is deprecated since version 3.3 and will be removed in 4.0. Use the isCompiled() method instead.', __METHOD__), E_USER_DEPRECATED);

        return true;
    }

    /**
     * Gets the public 'abstract.service' shared service.
     *
     * @return \AbstractBundle\Service\AbstractService
     */
    protected function getAbstract_ServiceService()
    {
        return $this->services['abstract.service'] = new \AbstractBundle\Service\AbstractService(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->get('doctrine.orm.default_entity_manager')) && false ?: '_'}, $this);
    }

    /**
     * Gets the public 'annotation_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\CachedReader(${($_ = isset($this->services['annotations.reader']) ? $this->services['annotations.reader'] : $this->getAnnotations_ReaderService()) && false ?: '_'}, new \Symfony\Component\Cache\DoctrineProvider(\Symfony\Component\Cache\Adapter\PhpArrayAdapter::create((__DIR__.'/annotations.php'), ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'})), true);
    }

    /**
     * Gets the public 'assets.context' shared service.
     *
     * @return \Symfony\Component\Asset\Context\RequestStackContext
     */
    protected function getAssets_ContextService()
    {
        return $this->services['assets.context'] = new \Symfony\Component\Asset\Context\RequestStackContext(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'});
    }

    /**
     * Gets the public 'assets.packages' shared service.
     *
     * @return \Symfony\Component\Asset\Packages
     */
    protected function getAssets_PackagesService()
    {
        return $this->services['assets.packages'] = new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy(), ${($_ = isset($this->services['assets.context']) ? $this->services['assets.context'] : $this->get('assets.context')) && false ?: '_'}), array());
    }

    /**
     * Gets the public 'cache.app' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AppService()
    {
        return $this->services['cache.app'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(${($_ = isset($this->services['cache.app.recorder_inner']) ? $this->services['cache.app.recorder_inner'] : $this->getCache_App_RecorderInnerService()) && false ?: '_'});
    }

    /**
     * Gets the public 'cache.default_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_DefaultClearerService()
    {
        return $this->services['cache.default_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(array('cache.app' => ${($_ = isset($this->services['cache.app']) ? $this->services['cache.app'] : $this->get('cache.app')) && false ?: '_'}, 'cache.system' => ${($_ = isset($this->services['cache.system']) ? $this->services['cache.system'] : $this->get('cache.system')) && false ?: '_'}, 'cache.validator' => ${($_ = isset($this->services['cache.validator']) ? $this->services['cache.validator'] : $this->getCache_ValidatorService()) && false ?: '_'}, 'cache.annotations' => ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'}));
    }

    /**
     * Gets the public 'cache.global_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_GlobalClearerService()
    {
        return $this->services['cache.global_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(array('cache.app' => ${($_ = isset($this->services['cache.app']) ? $this->services['cache.app'] : $this->get('cache.app')) && false ?: '_'}, 'cache.system' => ${($_ = isset($this->services['cache.system']) ? $this->services['cache.system'] : $this->get('cache.system')) && false ?: '_'}, 'cache.validator' => ${($_ = isset($this->services['cache.validator']) ? $this->services['cache.validator'] : $this->getCache_ValidatorService()) && false ?: '_'}, 'cache.annotations' => ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'}));
    }

    /**
     * Gets the public 'cache.system' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SystemService()
    {
        return $this->services['cache.system'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(${($_ = isset($this->services['cache.system.recorder_inner']) ? $this->services['cache.system.recorder_inner'] : $this->getCache_System_RecorderInnerService()) && false ?: '_'});
    }

    /**
     * Gets the public 'cache_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer
     */
    protected function getCacheClearerService()
    {
        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(array(0 => ${($_ = isset($this->services['cache.default_clearer']) ? $this->services['cache.default_clearer'] : $this->get('cache.default_clearer')) && false ?: '_'}));
    }

    /**
     * Gets the public 'cache_warmer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate
     */
    protected function getCacheWarmerService()
    {
        $a = ${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'};
        $b = ${($_ = isset($this->services['templating.filename_parser']) ? $this->services['templating.filename_parser'] : $this->get('templating.filename_parser')) && false ?: '_'};

        $c = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder($a, $b, ($this->targetDirs[3].'/app/Resources'));

        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(array(0 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer($c, ${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'}), 1 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ValidatorCacheWarmer(${($_ = isset($this->services['validator.builder']) ? $this->services['validator.builder'] : $this->get('validator.builder')) && false ?: '_'}, (__DIR__.'/validation.php'), ${($_ = isset($this->services['cache.validator']) ? $this->services['cache.validator'] : $this->getCache_ValidatorService()) && false ?: '_'}), 2 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router')) && false ?: '_'}), 3 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\AnnotationsCacheWarmer(${($_ = isset($this->services['annotations.reader']) ? $this->services['annotations.reader'] : $this->getAnnotations_ReaderService()) && false ?: '_'}, (__DIR__.'/annotations.php'), ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'}), 4 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer(new \Symfony\Component\DependencyInjection\ServiceLocator(array('twig' => function () {
            $f = function (\Twig\Environment $v) { return $v; }; return $f(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'});
        })), $c, array()), 5 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer($this, new \Symfony\Bundle\TwigBundle\TemplateIterator($a, ($this->targetDirs[3].'/app'), array())), 6 => new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'}), 7 => new \JMS\DiExtraBundle\HttpKernel\ControllerInjectorsWarmer($a, ${($_ = isset($this->services['jms_di_extra.controller_resolver']) ? $this->services['jms_di_extra.controller_resolver'] : $this->getJmsDiExtra_ControllerResolverService()) && false ?: '_'}, array())));
    }

    /**
     * Gets the public 'config_cache_factory' shared service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->services['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['1_ea6d9e8f60817a88f28a2e1036956ef36d32ea0ebd7aaac1f6fcc56026c5e8af']) ? $this->services['1_ea6d9e8f60817a88f28a2e1036956ef36d32ea0ebd7aaac1f6fcc56026c5e8af'] : $this->get1Ea6d9e8f60817a88f28a2e1036956ef36d32ea0ebd7aaac1f6fcc56026c5e8afService()) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['2_ea6d9e8f60817a88f28a2e1036956ef36d32ea0ebd7aaac1f6fcc56026c5e8af']) ? $this->services['2_ea6d9e8f60817a88f28a2e1036956ef36d32ea0ebd7aaac1f6fcc56026c5e8af'] : $this->get2Ea6d9e8f60817a88f28a2e1036956ef36d32ea0ebd7aaac1f6fcc56026c5e8afService()) && false ?: '_'};
        }, 2));
    }

    /**
     * Gets the public 'console.command.symfony_bundle_securitybundle_command_userpasswordencodercommand' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand
     */
    protected function getConsole_Command_SymfonyBundleSecuritybundleCommandUserpasswordencodercommandService()
    {
        return $this->services['console.command.symfony_bundle_securitybundle_command_userpasswordencodercommand'] = new \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand(${($_ = isset($this->services['security.encoder_factory']) ? $this->services['security.encoder_factory'] : $this->get('security.encoder_factory')) && false ?: '_'}, array());
    }

    /**
     * Gets the public 'data_collector.dump' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector
     */
    protected function getDataCollector_DumpService()
    {
        return $this->services['data_collector.dump'] = new \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector(${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'}, 'UTF-8', NULL, NULL);
    }

    /**
     * Gets the public 'data_collector.form' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataCollector
     */
    protected function getDataCollector_FormService()
    {
        return $this->services['data_collector.form'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataCollector(${($_ = isset($this->services['data_collector.form.extractor']) ? $this->services['data_collector.form.extractor'] : $this->get('data_collector.form.extractor')) && false ?: '_'});
    }

    /**
     * Gets the public 'data_collector.form.extractor' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor
     */
    protected function getDataCollector_Form_ExtractorService()
    {
        return $this->services['data_collector.form.extractor'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor();
    }

    /**
     * Gets the public 'data_collector.request' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector
     */
    protected function getDataCollector_RequestService()
    {
        return $this->services['data_collector.request'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector();
    }

    /**
     * Gets the public 'data_collector.router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector
     */
    protected function getDataCollector_RouterService()
    {
        return $this->services['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector();
    }

    /**
     * Gets the public 'data_fixtures.provider.foo' shared service.
     *
     * @return \AbstractBundle\Resources\fixtures\Provider\EntityProvider
     */
    protected function getDataFixtures_Provider_FooService()
    {
        return $this->services['data_fixtures.provider.foo'] = new \AbstractBundle\Resources\fixtures\Provider\EntityProvider();
    }

    /**
     * Gets the public 'debug.argument_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver
     */
    protected function getDebug_ArgumentResolverService()
    {
        return $this->services['debug.argument_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory(), new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['argument_resolver.request_attribute']) ? $this->services['argument_resolver.request_attribute'] : $this->getArgumentResolver_RequestAttributeService()) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['argument_resolver.request']) ? $this->services['argument_resolver.request'] : $this->getArgumentResolver_RequestService()) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['argument_resolver.session']) ? $this->services['argument_resolver.session'] : $this->getArgumentResolver_SessionService()) && false ?: '_'};
            yield 3 => ${($_ = isset($this->services['security.user_value_resolver']) ? $this->services['security.user_value_resolver'] : $this->getSecurity_UserValueResolverService()) && false ?: '_'};
            yield 4 => ${($_ = isset($this->services['argument_resolver.service']) ? $this->services['argument_resolver.service'] : $this->getArgumentResolver_ServiceService()) && false ?: '_'};
            yield 5 => ${($_ = isset($this->services['argument_resolver.default']) ? $this->services['argument_resolver.default'] : $this->getArgumentResolver_DefaultService()) && false ?: '_'};
            yield 6 => ${($_ = isset($this->services['argument_resolver.variadic']) ? $this->services['argument_resolver.variadic'] : $this->getArgumentResolver_VariadicService()) && false ?: '_'};
        }, 7)), ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->get('debug.stopwatch')) && false ?: '_'});
    }

    /**
     * Gets the public 'debug.controller_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver
     */
    protected function getDebug_ControllerResolverService()
    {
        return $this->services['debug.controller_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver(${($_ = isset($this->services['jms_di_extra.controller_resolver']) ? $this->services['jms_di_extra.controller_resolver'] : $this->getJmsDiExtra_ControllerResolverService()) && false ?: '_'}, ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->get('debug.stopwatch')) && false ?: '_'}, ${($_ = isset($this->services['debug.argument_resolver']) ? $this->services['debug.argument_resolver'] : $this->get('debug.argument_resolver')) && false ?: '_'});
    }

    /**
     * Gets the public 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->services['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, ${($_ = isset($this->services['monolog.logger.php']) ? $this->services['monolog.logger.php'] : $this->get('monolog.logger.php', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, -1, -1, true, ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'}, true);
    }

    /**
     * Gets the public 'debug.dump_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DumpListener
     */
    protected function getDebug_DumpListenerService()
    {
        return $this->services['debug.dump_listener'] = new \Symfony\Component\HttpKernel\EventListener\DumpListener(${($_ = isset($this->services['var_dumper.cloner']) ? $this->services['var_dumper.cloner'] : $this->get('var_dumper.cloner')) && false ?: '_'}, ${($_ = isset($this->services['var_dumper.cli_dumper']) ? $this->services['var_dumper.cli_dumper'] : $this->get('var_dumper.cli_dumper')) && false ?: '_'});
    }

    /**
     * Gets the public 'debug.event_dispatcher' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher
     */
    protected function getDebug_EventDispatcherService()
    {
        $this->services['debug.event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher(new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this), ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->get('debug.stopwatch')) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.event']) ? $this->services['monolog.logger.event'] : $this->get('monolog.logger.event', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});

        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['data_collector.router']) ? $this->services['data_collector.router'] : $this->get('data_collector.router')) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['fos_rest.body_listener']) ? $this->services['fos_rest.body_listener'] : $this->get('fos_rest.body_listener')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 10);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['fos_rest.format_listener']) ? $this->services['fos_rest.format_listener'] : $this->get('fos_rest.format_listener')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 34);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['fos_rest.param_fetcher_listener']) ? $this->services['fos_rest.param_fetcher_listener'] : $this->get('fos_rest.param_fetcher_listener')) && false ?: '_'};
        }, 1 => 'onKernelController'), 5);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['nelmio_cors.cors_listener']) ? $this->services['nelmio_cors.cors_listener'] : $this->get('nelmio_cors.cors_listener')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 250);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['response_listener']) ? $this->services['response_listener'] : $this->get('response_listener')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['streamed_response_listener']) ? $this->services['streamed_response_listener'] : $this->get('streamed_response_listener')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -1024);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['locale_listener']) ? $this->services['locale_listener'] : $this->get('locale_listener')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 16);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['locale_listener']) ? $this->services['locale_listener'] : $this->get('locale_listener')) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['validate_request_listener']) ? $this->services['validate_request_listener'] : $this->get('validate_request_listener')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 256);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['resolve_controller_name_subscriber']) ? $this->services['resolve_controller_name_subscriber'] : $this->getResolveControllerNameSubscriberService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 24);
        $instance->addListener('console.error', array(0 => function () {
            return ${($_ = isset($this->services['console.error_listener']) ? $this->services['console.error_listener'] : $this->getConsole_ErrorListenerService()) && false ?: '_'};
        }, 1 => 'onConsoleError'), -128);
        $instance->addListener('console.terminate', array(0 => function () {
            return ${($_ = isset($this->services['console.error_listener']) ? $this->services['console.error_listener'] : $this->getConsole_ErrorListenerService()) && false ?: '_'};
        }, 1 => 'onConsoleTerminate'), -128);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['test.session.listener']) ? $this->services['test.session.listener'] : $this->get('test.session.listener')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 192);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['test.session.listener']) ? $this->services['test.session.listener'] : $this->get('test.session.listener')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -128);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['session_listener']) ? $this->services['session_listener'] : $this->get('session_listener')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 128);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['session.save_listener']) ? $this->services['session.save_listener'] : $this->get('session.save_listener')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -1000);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['fragment.listener']) ? $this->services['fragment.listener'] : $this->get('fragment.listener')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 48);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['profiler_listener']) ? $this->services['profiler_listener'] : $this->get('profiler_listener')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -100);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['profiler_listener']) ? $this->services['profiler_listener'] : $this->get('profiler_listener')) && false ?: '_'};
        }, 1 => 'onKernelException'), 0);
        $instance->addListener('kernel.terminate', array(0 => function () {
            return ${($_ = isset($this->services['profiler_listener']) ? $this->services['profiler_listener'] : $this->get('profiler_listener')) && false ?: '_'};
        }, 1 => 'onKernelTerminate'), -1024);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['data_collector.request']) ? $this->services['data_collector.request'] : $this->get('data_collector.request')) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['data_collector.request']) ? $this->services['data_collector.request'] : $this->get('data_collector.request')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['debug.debug_handlers_listener']) ? $this->services['debug.debug_handlers_listener'] : $this->get('debug.debug_handlers_listener')) && false ?: '_'};
        }, 1 => 'configure'), 2048);
        $instance->addListener('console.command', array(0 => function () {
            return ${($_ = isset($this->services['debug.debug_handlers_listener']) ? $this->services['debug.debug_handlers_listener'] : $this->get('debug.debug_handlers_listener')) && false ?: '_'};
        }, 1 => 'configure'), 2048);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['router_listener']) ? $this->services['router_listener'] : $this->get('router_listener')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 32);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['router_listener']) ? $this->services['router_listener'] : $this->get('router_listener')) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['security.firewall']) ? $this->services['security.firewall'] : $this->get('security.firewall')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 8);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['security.firewall']) ? $this->services['security.firewall'] : $this->get('security.firewall')) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['security.rememberme.response_listener']) ? $this->services['security.rememberme.response_listener'] : $this->get('security.rememberme.response_listener')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['twig.exception_listener']) ? $this->services['twig.exception_listener'] : $this->get('twig.exception_listener')) && false ?: '_'};
        }, 1 => 'onKernelException'), -128);
        $instance->addListener('console.command', array(0 => function () {
            return ${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'};
        }, 1 => 'onCommand'), 255);
        $instance->addListener('console.terminate', array(0 => function () {
            return ${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'};
        }, 1 => 'onTerminate'), -255);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->get('swiftmailer.email_sender.listener')) && false ?: '_'};
        }, 1 => 'onException'), 0);
        $instance->addListener('kernel.terminate', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->get('swiftmailer.email_sender.listener')) && false ?: '_'};
        }, 1 => 'onTerminate'), 0);
        $instance->addListener('console.error', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->get('swiftmailer.email_sender.listener')) && false ?: '_'};
        }, 1 => 'onException'), 0);
        $instance->addListener('console.terminate', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->get('swiftmailer.email_sender.listener')) && false ?: '_'};
        }, 1 => 'onTerminate'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.controller.listener']) ? $this->services['sensio_framework_extra.controller.listener'] : $this->get('sensio_framework_extra.controller.listener')) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.converter.listener']) ? $this->services['sensio_framework_extra.converter.listener'] : $this->get('sensio_framework_extra.converter.listener')) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.view.listener']) ? $this->services['sensio_framework_extra.view.listener'] : $this->get('sensio_framework_extra.view.listener')) && false ?: '_'};
        }, 1 => 'onKernelController'), -128);
        $instance->addListener('kernel.view', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.view.listener']) ? $this->services['sensio_framework_extra.view.listener'] : $this->get('sensio_framework_extra.view.listener')) && false ?: '_'};
        }, 1 => 'onKernelView'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.cache.listener']) ? $this->services['sensio_framework_extra.cache.listener'] : $this->get('sensio_framework_extra.cache.listener')) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.cache.listener']) ? $this->services['sensio_framework_extra.cache.listener'] : $this->get('sensio_framework_extra.cache.listener')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.security.listener']) ? $this->services['sensio_framework_extra.security.listener'] : $this->get('sensio_framework_extra.security.listener')) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.view', array(0 => function () {
            return ${($_ = isset($this->services['fos_rest.view_response_listener']) ? $this->services['fos_rest.view_response_listener'] : $this->get('fos_rest.view_response_listener')) && false ?: '_'};
        }, 1 => 'onKernelView'), 30);
        $instance->addListener('console.command', array(0 => function () {
            return ${($_ = isset($this->services['debug.dump_listener']) ? $this->services['debug.dump_listener'] : $this->get('debug.dump_listener')) && false ?: '_'};
        }, 1 => 'configure'), 1024);

        return $instance;
    }

    /**
     * Gets the public 'debug.stopwatch' shared service.
     *
     * @return \Symfony\Component\Stopwatch\Stopwatch
     */
    protected function getDebug_StopwatchService()
    {
        return $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch();
    }

    /**
     * Gets the public 'deprecated.form.registry' shared service.
     *
     * @return \stdClass
     *
     * @deprecated The service "deprecated.form.registry" is internal and deprecated since Symfony 3.3 and will be removed in Symfony 4.0
     */
    protected function getDeprecated_Form_RegistryService()
    {
        @trigger_error('The service "deprecated.form.registry" is internal and deprecated since Symfony 3.3 and will be removed in Symfony 4.0', E_USER_DEPRECATED);

        $this->services['deprecated.form.registry'] = $instance = new \stdClass();

        $instance->registry = array(0 => ${($_ = isset($this->services['form.type_guesser.validator']) ? $this->services['form.type_guesser.validator'] : $this->getForm_TypeGuesser_ValidatorService()) && false ?: '_'}, 1 => ${($_ = isset($this->services['form.type.choice']) ? $this->services['form.type.choice'] : $this->getForm_Type_ChoiceService()) && false ?: '_'}, 2 => ${($_ = isset($this->services['form.type.form']) ? $this->services['form.type.form'] : $this->getForm_Type_FormService()) && false ?: '_'}, 3 => ${($_ = isset($this->services['form.type_extension.form.http_foundation']) ? $this->services['form.type_extension.form.http_foundation'] : $this->getForm_TypeExtension_Form_HttpFoundationService()) && false ?: '_'}, 4 => ${($_ = isset($this->services['form.type_extension.form.validator']) ? $this->services['form.type_extension.form.validator'] : $this->getForm_TypeExtension_Form_ValidatorService()) && false ?: '_'}, 5 => ${($_ = isset($this->services['form.type_extension.repeated.validator']) ? $this->services['form.type_extension.repeated.validator'] : $this->getForm_TypeExtension_Repeated_ValidatorService()) && false ?: '_'}, 6 => ${($_ = isset($this->services['form.type_extension.submit.validator']) ? $this->services['form.type_extension.submit.validator'] : $this->getForm_TypeExtension_Submit_ValidatorService()) && false ?: '_'}, 7 => ${($_ = isset($this->services['form.type_extension.upload.validator']) ? $this->services['form.type_extension.upload.validator'] : $this->getForm_TypeExtension_Upload_ValidatorService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'deprecated.form.registry.csrf' shared service.
     *
     * @return \stdClass
     *
     * @deprecated The service "deprecated.form.registry.csrf" is internal and deprecated since Symfony 3.3 and will be removed in Symfony 4.0
     */
    protected function getDeprecated_Form_Registry_CsrfService()
    {
        @trigger_error('The service "deprecated.form.registry.csrf" is internal and deprecated since Symfony 3.3 and will be removed in Symfony 4.0', E_USER_DEPRECATED);

        $this->services['deprecated.form.registry.csrf'] = $instance = new \stdClass();

        $instance->registry = array(0 => ${($_ = isset($this->services['form.type_extension.csrf']) ? $this->services['form.type_extension.csrf'] : $this->getForm_TypeExtension_CsrfService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, array('default' => 'doctrine.dbal.default_connection'), array('default' => 'doctrine.orm.default_entity_manager'), 'default', 'default');
    }

    /**
     * Gets the public 'doctrine.dbal.connection_factory' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ConnectionFactory
     */
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory(array());
    }

    /**
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = new \Doctrine\DBAL\Logging\LoggerChain();
        $a->addLogger(new \Symfony\Bridge\Doctrine\Logger\DbalLogger(${($_ = isset($this->services['monolog.logger.doctrine']) ? $this->services['monolog.logger.doctrine'] : $this->get('monolog.logger.doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}));
        $a->addLogger(${($_ = isset($this->services['doctrine.dbal.logger.profiling.default']) ? $this->services['doctrine.dbal.logger.profiling.default'] : $this->getDoctrine_Dbal_Logger_Profiling_DefaultService()) && false ?: '_'});

        $b = new \Doctrine\DBAL\Configuration();
        $b->setSQLLogger($a);

        $c = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
        $c->addEventListener(array(0 => 'loadClassMetadata'), ${($_ = isset($this->services['doctrine.orm.default_listeners.attach_entity_listeners']) ? $this->services['doctrine.orm.default_listeners.attach_entity_listeners'] : $this->get('doctrine.orm.default_listeners.attach_entity_listeners')) && false ?: '_'});

        return $this->services['doctrine.dbal.default_connection'] = ${($_ = isset($this->services['doctrine.dbal.connection_factory']) ? $this->services['doctrine.dbal.connection_factory'] : $this->get('doctrine.dbal.connection_factory')) && false ?: '_'}->createConnection(array('driver' => 'pdo_mysql', 'host' => '127.0.0.1', 'port' => NULL, 'dbname' => 'db_symfony_test', 'user' => 'root', 'password' => 123, 'charset' => 'UTF8', 'driverOptions' => array(), 'defaultTableOptions' => array()), $b, $c, array());
    }

    /**
     * Gets the public 'doctrine.orm.default_entity_listener_resolver' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver
     */
    protected function getDoctrine_Orm_DefaultEntityListenerResolverService()
    {
        return $this->services['doctrine.orm.default_entity_listener_resolver'] = new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver($this);
    }

    /**
     * Gets the public 'doctrine.orm.default_entity_manager' shared service.
     *
     * @return \EntityManager5a4e6bef96cde_546a8d27f194334ee012bfe64f629947b07e4919\__CG__\Doctrine\ORM\EntityManager
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService()
    {
        require_once (__DIR__.'/jms_diextra/doctrine/EntityManager_5a4e6bef96cde.php');

        return $this->services['doctrine.orm.default_entity_manager'] = new \EntityManager5a4e6bef96cde_546a8d27f194334ee012bfe64f629947b07e4919\__CG__\Doctrine\ORM\EntityManager(${($_ = isset($this->services['doctrine.orm.default_entity_manager.delegate']) ? $this->services['doctrine.orm.default_entity_manager.delegate'] : $this->getDoctrine_Orm_DefaultEntityManager_DelegateService()) && false ?: '_'}, $this);
    }

    /**
     * Gets the public 'doctrine.orm.default_entity_manager.property_info_extractor' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor
     */
    protected function getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService()
    {
        return $this->services['doctrine.orm.default_entity_manager.property_info_extractor'] = new \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->get('doctrine.orm.default_entity_manager')) && false ?: '_'}->getMetadataFactory());
    }

    /**
     * Gets the public 'doctrine.orm.default_listeners.attach_entity_listeners' shared service.
     *
     * @return \Doctrine\ORM\Tools\AttachEntityListenersListener
     */
    protected function getDoctrine_Orm_DefaultListeners_AttachEntityListenersService()
    {
        return $this->services['doctrine.orm.default_listeners.attach_entity_listeners'] = new \Doctrine\ORM\Tools\AttachEntityListenersListener();
    }

    /**
     * Gets the public 'doctrine.orm.default_manager_configurator' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator
     */
    protected function getDoctrine_Orm_DefaultManagerConfiguratorService()
    {
        return $this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(), array());
    }

    /**
     * Gets the public 'doctrine.orm.validator.unique' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator
     */
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        return $this->services['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'});
    }

    /**
     * Gets the public 'doctrine.orm.validator_initializer' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer
     */
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->services['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'});
    }

    /**
     * Gets the public 'doctrine_cache.providers.doctrine.orm.default_metadata_cache' shared service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_97184ba2c3d492bb3eaf4613308c3d7f0f0d39ba159f3ffb2156f6df4ead5e57');

        return $instance;
    }

    /**
     * Gets the public 'doctrine_cache.providers.doctrine.orm.default_query_cache' shared service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_query_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_97184ba2c3d492bb3eaf4613308c3d7f0f0d39ba159f3ffb2156f6df4ead5e57');

        return $instance;
    }

    /**
     * Gets the public 'doctrine_cache.providers.doctrine.orm.default_result_cache' shared service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_97184ba2c3d492bb3eaf4613308c3d7f0f0d39ba159f3ffb2156f6df4ead5e57');

        return $instance;
    }

    /**
     * Gets the public 'fidry_alice_data_fixtures.doctrine.persister_loader' shared service.
     *
     * @return \Fidry\AliceDataFixtures\Loader\PersisterLoader
     */
    public function getFidryAliceDataFixtures_Doctrine_PersisterLoaderService($lazyLoad = true)
    {
        if ($lazyLoad) {

            return $this->services['fidry_alice_data_fixtures.doctrine.persister_loader'] = FidryAliceDataFixturesLoaderPersisterLoader_00000000037701a20000000052ea3400deb914fd286e82d6bd36b5a641b110e5::staticProxyConstructor(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getFidryAliceDataFixtures_Doctrine_PersisterLoaderService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        return new \Fidry\AliceDataFixtures\Loader\PersisterLoader(${($_ = isset($this->services['fidry_alice_data_fixtures.loader.multipass_file']) ? $this->services['fidry_alice_data_fixtures.loader.multipass_file'] : $this->get('fidry_alice_data_fixtures.loader.multipass_file')) && false ?: '_'}, ${($_ = isset($this->services['fidry_alice_data_fixtures.persistence.persister.doctrine.object_manager_persister']) ? $this->services['fidry_alice_data_fixtures.persistence.persister.doctrine.object_manager_persister'] : $this->get('fidry_alice_data_fixtures.persistence.persister.doctrine.object_manager_persister')) && false ?: '_'}, array());
    }

    /**
     * Gets the public 'fidry_alice_data_fixtures.doctrine.purger_loader' shared service.
     *
     * @return \Fidry\AliceDataFixtures\Loader\PurgerLoader
     */
    public function getFidryAliceDataFixtures_Doctrine_PurgerLoaderService($lazyLoad = true)
    {
        if ($lazyLoad) {

            return $this->services['fidry_alice_data_fixtures.doctrine.purger_loader'] = FidryAliceDataFixturesLoaderPurgerLoader_00000000037701af0000000052ea3400deb914fd286e82d6bd36b5a641b110e5::staticProxyConstructor(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getFidryAliceDataFixtures_Doctrine_PurgerLoaderService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        return new \Fidry\AliceDataFixtures\Loader\PurgerLoader(${($_ = isset($this->services['fidry_alice_data_fixtures.doctrine.persister_loader']) ? $this->services['fidry_alice_data_fixtures.doctrine.persister_loader'] : $this->get('fidry_alice_data_fixtures.doctrine.persister_loader')) && false ?: '_'}, ${($_ = isset($this->services['fidry_alice_data_fixtures.persistence.purger.doctrine.orm_purger']) ? $this->services['fidry_alice_data_fixtures.persistence.purger.doctrine.orm_purger'] : $this->get('fidry_alice_data_fixtures.persistence.purger.doctrine.orm_purger')) && false ?: '_'});
    }

    /**
     * Gets the public 'fidry_alice_data_fixtures.loader.multipass_file' shared service.
     *
     * @return \Fidry\AliceDataFixtures\Loader\MultiPassLoader
     */
    public function getFidryAliceDataFixtures_Loader_MultipassFileService($lazyLoad = true)
    {
        if ($lazyLoad) {

            return $this->services['fidry_alice_data_fixtures.loader.multipass_file'] = FidryAliceDataFixturesLoaderMultiPassLoader_00000000037701bd0000000052ea3400deb914fd286e82d6bd36b5a641b110e5::staticProxyConstructor(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getFidryAliceDataFixtures_Loader_MultipassFileService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        return new \Fidry\AliceDataFixtures\Loader\MultiPassLoader(${($_ = isset($this->services['nelmio_alice.file_loader.simple']) ? $this->services['nelmio_alice.file_loader.simple'] : $this->get('nelmio_alice.file_loader.simple')) && false ?: '_'});
    }

    /**
     * Gets the public 'fidry_alice_data_fixtures.loader.simple_file' shared service.
     *
     * @return \Fidry\AliceDataFixtures\Loader\SimpleLoader
     */
    public function getFidryAliceDataFixtures_Loader_SimpleFileService($lazyLoad = true)
    {
        if ($lazyLoad) {

            return $this->services['fidry_alice_data_fixtures.loader.simple_file'] = FidryAliceDataFixturesLoaderSimpleLoader_00000000037701b90000000052ea3400deb914fd286e82d6bd36b5a641b110e5::staticProxyConstructor(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getFidryAliceDataFixtures_Loader_SimpleFileService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        return new \Fidry\AliceDataFixtures\Loader\SimpleLoader(${($_ = isset($this->services['nelmio_alice.file_loader.simple']) ? $this->services['nelmio_alice.file_loader.simple'] : $this->get('nelmio_alice.file_loader.simple')) && false ?: '_'});
    }

    /**
     * Gets the public 'fidry_alice_data_fixtures.persistence.persister.doctrine.object_manager_persister' shared service.
     *
     * @return \Fidry\AliceDataFixtures\Bridge\Doctrine\Persister\ObjectManagerPersister
     */
    public function getFidryAliceDataFixtures_Persistence_Persister_Doctrine_ObjectManagerPersisterService($lazyLoad = true)
    {
        if ($lazyLoad) {

            return $this->services['fidry_alice_data_fixtures.persistence.persister.doctrine.object_manager_persister'] = FidryAliceDataFixturesBridgeDoctrinePersisterObjectManagerPersister_00000000037701a00000000052ea3400deb914fd286e82d6bd36b5a641b110e5::staticProxyConstructor(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getFidryAliceDataFixtures_Persistence_Persister_Doctrine_ObjectManagerPersisterService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        return new \Fidry\AliceDataFixtures\Bridge\Doctrine\Persister\ObjectManagerPersister(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->get('doctrine.orm.default_entity_manager')) && false ?: '_'});
    }

    /**
     * Gets the public 'fidry_alice_data_fixtures.persistence.purger.doctrine.orm_purger' shared service.
     *
     * @return \Fidry\AliceDataFixtures\Bridge\Doctrine\Purger\Purger
     */
    public function getFidryAliceDataFixtures_Persistence_Purger_Doctrine_OrmPurgerService($lazyLoad = true)
    {
        if ($lazyLoad) {

            return $this->services['fidry_alice_data_fixtures.persistence.purger.doctrine.orm_purger'] = FidryAliceDataFixturesBridgeDoctrinePurgerPurger_00000000037701a60000000052ea3400deb914fd286e82d6bd36b5a641b110e5::staticProxyConstructor(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getFidryAliceDataFixtures_Persistence_Purger_Doctrine_OrmPurgerService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        return new \Fidry\AliceDataFixtures\Bridge\Doctrine\Purger\Purger(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->get('doctrine.orm.default_entity_manager')) && false ?: '_'}, \Fidry\AliceDataFixtures\Persistence\PurgeMode::createDeleteMode());
    }

    /**
     * Gets the public 'file_locator' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Config\FileLocator
     */
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'}, ($this->targetDirs[3].'/app/Resources'), array(0 => ($this->targetDirs[3].'/app')));
    }

    /**
     * Gets the public 'filesystem' shared service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /**
     * Gets the public 'form.factory' shared service.
     *
     * @return \Symfony\Component\Form\FormFactory
     */
    protected function getForm_FactoryService()
    {
        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory(${($_ = isset($this->services['form.registry']) ? $this->services['form.registry'] : $this->get('form.registry')) && false ?: '_'}, ${($_ = isset($this->services['form.resolved_type_factory']) ? $this->services['form.resolved_type_factory'] : $this->get('form.resolved_type_factory')) && false ?: '_'});
    }

    /**
     * Gets the public 'form.registry' shared service.
     *
     * @return \Symfony\Component\Form\FormRegistry
     */
    protected function getForm_RegistryService()
    {
        return $this->services['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\ServiceLocator(array('Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => function () {
            return ${($_ = isset($this->services['form.type.entity']) ? $this->services['form.type.entity'] : $this->get('form.type.entity')) && false ?: '_'};
        }, 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => function () {
            return ${($_ = isset($this->services['form.type.choice']) ? $this->services['form.type.choice'] : $this->getForm_Type_ChoiceService()) && false ?: '_'};
        }, 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => function () {
            return ${($_ = isset($this->services['form.type.form']) ? $this->services['form.type.form'] : $this->getForm_Type_FormService()) && false ?: '_'};
        })), array('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['form.type_extension.form.http_foundation']) ? $this->services['form.type_extension.form.http_foundation'] : $this->getForm_TypeExtension_Form_HttpFoundationService()) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['form.type_extension.form.validator']) ? $this->services['form.type_extension.form.validator'] : $this->getForm_TypeExtension_Form_ValidatorService()) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['form.type_extension.upload.validator']) ? $this->services['form.type_extension.upload.validator'] : $this->getForm_TypeExtension_Upload_ValidatorService()) && false ?: '_'};
            yield 3 => ${($_ = isset($this->services['form.type_extension.csrf']) ? $this->services['form.type_extension.csrf'] : $this->getForm_TypeExtension_CsrfService()) && false ?: '_'};
            yield 4 => ${($_ = isset($this->services['form.type_extension.form.data_collector']) ? $this->services['form.type_extension.form.data_collector'] : $this->getForm_TypeExtension_Form_DataCollectorService()) && false ?: '_'};
        }, 5), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['form.type_extension.repeated.validator']) ? $this->services['form.type_extension.repeated.validator'] : $this->getForm_TypeExtension_Repeated_ValidatorService()) && false ?: '_'};
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['form.type_extension.submit.validator']) ? $this->services['form.type_extension.submit.validator'] : $this->getForm_TypeExtension_Submit_ValidatorService()) && false ?: '_'};
        }, 1)), new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['form.type_guesser.validator']) ? $this->services['form.type_guesser.validator'] : $this->getForm_TypeGuesser_ValidatorService()) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['form.type_guesser.doctrine']) ? $this->services['form.type_guesser.doctrine'] : $this->get('form.type_guesser.doctrine')) && false ?: '_'};
        }, 2), NULL)), ${($_ = isset($this->services['form.resolved_type_factory']) ? $this->services['form.resolved_type_factory'] : $this->get('form.resolved_type_factory')) && false ?: '_'});
    }

    /**
     * Gets the public 'form.resolved_type_factory' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy
     */
    protected function getForm_ResolvedTypeFactoryService()
    {
        return $this->services['form.resolved_type_factory'] = new \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy(new \Symfony\Component\Form\ResolvedFormTypeFactory(), ${($_ = isset($this->services['data_collector.form']) ? $this->services['data_collector.form'] : $this->get('data_collector.form')) && false ?: '_'});
    }

    /**
     * Gets the public 'form.type.birthday' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\BirthdayType
     *
     * @deprecated The "form.type.birthday" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_BirthdayService()
    {
        @trigger_error('The "form.type.birthday" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.birthday'] = new \Symfony\Component\Form\Extension\Core\Type\BirthdayType();
    }

    /**
     * Gets the public 'form.type.button' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ButtonType
     *
     * @deprecated The "form.type.button" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_ButtonService()
    {
        @trigger_error('The "form.type.button" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.button'] = new \Symfony\Component\Form\Extension\Core\Type\ButtonType();
    }

    /**
     * Gets the public 'form.type.checkbox' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CheckboxType
     *
     * @deprecated The "form.type.checkbox" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_CheckboxService()
    {
        @trigger_error('The "form.type.checkbox" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.checkbox'] = new \Symfony\Component\Form\Extension\Core\Type\CheckboxType();
    }

    /**
     * Gets the public 'form.type.collection' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CollectionType
     *
     * @deprecated The "form.type.collection" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_CollectionService()
    {
        @trigger_error('The "form.type.collection" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.collection'] = new \Symfony\Component\Form\Extension\Core\Type\CollectionType();
    }

    /**
     * Gets the public 'form.type.country' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CountryType
     *
     * @deprecated The "form.type.country" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_CountryService()
    {
        @trigger_error('The "form.type.country" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.country'] = new \Symfony\Component\Form\Extension\Core\Type\CountryType();
    }

    /**
     * Gets the public 'form.type.currency' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CurrencyType
     *
     * @deprecated The "form.type.currency" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_CurrencyService()
    {
        @trigger_error('The "form.type.currency" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.currency'] = new \Symfony\Component\Form\Extension\Core\Type\CurrencyType();
    }

    /**
     * Gets the public 'form.type.date' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateType
     *
     * @deprecated The "form.type.date" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_DateService()
    {
        @trigger_error('The "form.type.date" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.date'] = new \Symfony\Component\Form\Extension\Core\Type\DateType();
    }

    /**
     * Gets the public 'form.type.datetime' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateTimeType
     *
     * @deprecated The "form.type.datetime" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_DatetimeService()
    {
        @trigger_error('The "form.type.datetime" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.datetime'] = new \Symfony\Component\Form\Extension\Core\Type\DateTimeType();
    }

    /**
     * Gets the public 'form.type.email' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\EmailType
     *
     * @deprecated The "form.type.email" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_EmailService()
    {
        @trigger_error('The "form.type.email" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.email'] = new \Symfony\Component\Form\Extension\Core\Type\EmailType();
    }

    /**
     * Gets the public 'form.type.entity' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\Type\EntityType
     */
    protected function getForm_Type_EntityService()
    {
        return $this->services['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'});
    }

    /**
     * Gets the public 'form.type.file' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FileType
     *
     * @deprecated The "form.type.file" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_FileService()
    {
        @trigger_error('The "form.type.file" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType();
    }

    /**
     * Gets the public 'form.type.hidden' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\HiddenType
     *
     * @deprecated The "form.type.hidden" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_HiddenService()
    {
        @trigger_error('The "form.type.hidden" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.hidden'] = new \Symfony\Component\Form\Extension\Core\Type\HiddenType();
    }

    /**
     * Gets the public 'form.type.integer' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\IntegerType
     *
     * @deprecated The "form.type.integer" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_IntegerService()
    {
        @trigger_error('The "form.type.integer" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.integer'] = new \Symfony\Component\Form\Extension\Core\Type\IntegerType();
    }

    /**
     * Gets the public 'form.type.language' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LanguageType
     *
     * @deprecated The "form.type.language" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_LanguageService()
    {
        @trigger_error('The "form.type.language" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.language'] = new \Symfony\Component\Form\Extension\Core\Type\LanguageType();
    }

    /**
     * Gets the public 'form.type.locale' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LocaleType
     *
     * @deprecated The "form.type.locale" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_LocaleService()
    {
        @trigger_error('The "form.type.locale" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.locale'] = new \Symfony\Component\Form\Extension\Core\Type\LocaleType();
    }

    /**
     * Gets the public 'form.type.money' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\MoneyType
     *
     * @deprecated The "form.type.money" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_MoneyService()
    {
        @trigger_error('The "form.type.money" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.money'] = new \Symfony\Component\Form\Extension\Core\Type\MoneyType();
    }

    /**
     * Gets the public 'form.type.number' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\NumberType
     *
     * @deprecated The "form.type.number" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_NumberService()
    {
        @trigger_error('The "form.type.number" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.number'] = new \Symfony\Component\Form\Extension\Core\Type\NumberType();
    }

    /**
     * Gets the public 'form.type.password' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PasswordType
     *
     * @deprecated The "form.type.password" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_PasswordService()
    {
        @trigger_error('The "form.type.password" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.password'] = new \Symfony\Component\Form\Extension\Core\Type\PasswordType();
    }

    /**
     * Gets the public 'form.type.percent' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PercentType
     *
     * @deprecated The "form.type.percent" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_PercentService()
    {
        @trigger_error('The "form.type.percent" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.percent'] = new \Symfony\Component\Form\Extension\Core\Type\PercentType();
    }

    /**
     * Gets the public 'form.type.radio' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RadioType
     *
     * @deprecated The "form.type.radio" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_RadioService()
    {
        @trigger_error('The "form.type.radio" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.radio'] = new \Symfony\Component\Form\Extension\Core\Type\RadioType();
    }

    /**
     * Gets the public 'form.type.range' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RangeType
     *
     * @deprecated The "form.type.range" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_RangeService()
    {
        @trigger_error('The "form.type.range" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.range'] = new \Symfony\Component\Form\Extension\Core\Type\RangeType();
    }

    /**
     * Gets the public 'form.type.repeated' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RepeatedType
     *
     * @deprecated The "form.type.repeated" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_RepeatedService()
    {
        @trigger_error('The "form.type.repeated" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.repeated'] = new \Symfony\Component\Form\Extension\Core\Type\RepeatedType();
    }

    /**
     * Gets the public 'form.type.reset' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ResetType
     *
     * @deprecated The "form.type.reset" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_ResetService()
    {
        @trigger_error('The "form.type.reset" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.reset'] = new \Symfony\Component\Form\Extension\Core\Type\ResetType();
    }

    /**
     * Gets the public 'form.type.search' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SearchType
     *
     * @deprecated The "form.type.search" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_SearchService()
    {
        @trigger_error('The "form.type.search" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.search'] = new \Symfony\Component\Form\Extension\Core\Type\SearchType();
    }

    /**
     * Gets the public 'form.type.submit' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SubmitType
     *
     * @deprecated The "form.type.submit" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_SubmitService()
    {
        @trigger_error('The "form.type.submit" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.submit'] = new \Symfony\Component\Form\Extension\Core\Type\SubmitType();
    }

    /**
     * Gets the public 'form.type.text' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextType
     *
     * @deprecated The "form.type.text" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_TextService()
    {
        @trigger_error('The "form.type.text" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.text'] = new \Symfony\Component\Form\Extension\Core\Type\TextType();
    }

    /**
     * Gets the public 'form.type.textarea' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextareaType
     *
     * @deprecated The "form.type.textarea" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_TextareaService()
    {
        @trigger_error('The "form.type.textarea" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.textarea'] = new \Symfony\Component\Form\Extension\Core\Type\TextareaType();
    }

    /**
     * Gets the public 'form.type.time' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimeType
     *
     * @deprecated The "form.type.time" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_TimeService()
    {
        @trigger_error('The "form.type.time" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.time'] = new \Symfony\Component\Form\Extension\Core\Type\TimeType();
    }

    /**
     * Gets the public 'form.type.timezone' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimezoneType
     *
     * @deprecated The "form.type.timezone" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_TimezoneService()
    {
        @trigger_error('The "form.type.timezone" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.timezone'] = new \Symfony\Component\Form\Extension\Core\Type\TimezoneType();
    }

    /**
     * Gets the public 'form.type.url' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\UrlType
     *
     * @deprecated The "form.type.url" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_UrlService()
    {
        @trigger_error('The "form.type.url" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.url'] = new \Symfony\Component\Form\Extension\Core\Type\UrlType();
    }

    /**
     * Gets the public 'form.type_guesser.doctrine' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser
     */
    protected function getForm_TypeGuesser_DoctrineService()
    {
        return $this->services['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'});
    }

    /**
     * Gets the public 'fos_rest.body_listener' shared service.
     *
     * @return \FOS\RestBundle\EventListener\BodyListener
     */
    protected function getFosRest_BodyListenerService()
    {
        $this->services['fos_rest.body_listener'] = $instance = new \FOS\RestBundle\EventListener\BodyListener(${($_ = isset($this->services['fos_rest.decoder_provider']) ? $this->services['fos_rest.decoder_provider'] : $this->get('fos_rest.decoder_provider')) && false ?: '_'}, false);

        $instance->setDefaultFormat(NULL);

        return $instance;
    }

    /**
     * Gets the public 'fos_rest.decoder.json' shared service.
     *
     * @return \FOS\RestBundle\Decoder\JsonDecoder
     */
    protected function getFosRest_Decoder_JsonService()
    {
        return $this->services['fos_rest.decoder.json'] = new \FOS\RestBundle\Decoder\JsonDecoder();
    }

    /**
     * Gets the public 'fos_rest.decoder.jsontoform' shared service.
     *
     * @return \FOS\RestBundle\Decoder\JsonToFormDecoder
     */
    protected function getFosRest_Decoder_JsontoformService()
    {
        return $this->services['fos_rest.decoder.jsontoform'] = new \FOS\RestBundle\Decoder\JsonToFormDecoder();
    }

    /**
     * Gets the public 'fos_rest.decoder.xml' shared service.
     *
     * @return \FOS\RestBundle\Decoder\XmlDecoder
     */
    protected function getFosRest_Decoder_XmlService()
    {
        return $this->services['fos_rest.decoder.xml'] = new \FOS\RestBundle\Decoder\XmlDecoder();
    }

    /**
     * Gets the public 'fos_rest.decoder_provider' shared service.
     *
     * @return \FOS\RestBundle\Decoder\ContainerDecoderProvider
     */
    protected function getFosRest_DecoderProviderService()
    {
        return $this->services['fos_rest.decoder_provider'] = new \FOS\RestBundle\Decoder\ContainerDecoderProvider($this, array('json' => 'fos_rest.decoder.json', 'xml' => 'fos_rest.decoder.xml'));
    }

    /**
     * Gets the public 'fos_rest.format_listener' shared service.
     *
     * @return \FOS\RestBundle\EventListener\FormatListener
     */
    protected function getFosRest_FormatListenerService()
    {
        return $this->services['fos_rest.format_listener'] = new \FOS\RestBundle\EventListener\FormatListener(${($_ = isset($this->services['fos_rest.format_negotiator']) ? $this->services['fos_rest.format_negotiator'] : $this->get('fos_rest.format_negotiator')) && false ?: '_'});
    }

    /**
     * Gets the public 'fos_rest.format_negotiator' shared service.
     *
     * @return \FOS\RestBundle\Negotiation\FormatNegotiator
     */
    protected function getFosRest_FormatNegotiatorService()
    {
        $this->services['fos_rest.format_negotiator'] = $instance = new \FOS\RestBundle\Negotiation\FormatNegotiator(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'});

        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/', NULL, NULL, NULL, array()), array('priorities' => array(0 => 'json'), 'fallback_format' => 'json', 'prefer_extension' => false, 'methods' => NULL, 'attributes' => array(), 'stop' => false));

        return $instance;
    }

    /**
     * Gets the public 'fos_rest.inflector' shared service.
     *
     * @return \FOS\RestBundle\Inflector\DoctrineInflector
     */
    protected function getFosRest_InflectorService()
    {
        return $this->services['fos_rest.inflector'] = new \FOS\RestBundle\Inflector\DoctrineInflector();
    }

    /**
     * Gets the public 'fos_rest.normalizer.camel_keys' shared service.
     *
     * @return \FOS\RestBundle\Normalizer\CamelKeysNormalizer
     */
    protected function getFosRest_Normalizer_CamelKeysService()
    {
        return $this->services['fos_rest.normalizer.camel_keys'] = new \FOS\RestBundle\Normalizer\CamelKeysNormalizer();
    }

    /**
     * Gets the public 'fos_rest.normalizer.camel_keys_with_leading_underscore' shared service.
     *
     * @return \FOS\RestBundle\Normalizer\CamelKeysNormalizerWithLeadingUnderscore
     */
    protected function getFosRest_Normalizer_CamelKeysWithLeadingUnderscoreService()
    {
        return $this->services['fos_rest.normalizer.camel_keys_with_leading_underscore'] = new \FOS\RestBundle\Normalizer\CamelKeysNormalizerWithLeadingUnderscore();
    }

    /**
     * Gets the public 'fos_rest.param_fetcher_listener' shared service.
     *
     * @return \FOS\RestBundle\EventListener\ParamFetcherListener
     */
    protected function getFosRest_ParamFetcherListenerService()
    {
        return $this->services['fos_rest.param_fetcher_listener'] = new \FOS\RestBundle\EventListener\ParamFetcherListener(${($_ = isset($this->services['fos_rest.request.param_fetcher']) ? $this->services['fos_rest.request.param_fetcher'] : $this->get('fos_rest.request.param_fetcher')) && false ?: '_'}, false);
    }

    /**
     * Gets the public 'fos_rest.request.param_fetcher' shared service.
     *
     * @return \FOS\RestBundle\Request\ParamFetcher
     */
    protected function getFosRest_Request_ParamFetcherService()
    {
        return $this->services['fos_rest.request.param_fetcher'] = new \FOS\RestBundle\Request\ParamFetcher($this, ${($_ = isset($this->services['fos_rest.request.param_fetcher.reader']) ? $this->services['fos_rest.request.param_fetcher.reader'] : $this->getFosRest_Request_ParamFetcher_ReaderService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'}, ${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->get('validator', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'fos_rest.serializer' shared service.
     *
     * @return \FOS\RestBundle\Serializer\JMSSerializerAdapter
     */
    public function getFosRest_SerializerService($lazyLoad = true)
    {
        if ($lazyLoad) {

            return $this->services['fos_rest.serializer'] = FOSRestBundleSerializerJMSSerializerAdapter_00000000037704df0000000052ea3400deb914fd286e82d6bd36b5a641b110e5::staticProxyConstructor(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getFosRest_SerializerService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        return new \FOS\RestBundle\Serializer\JMSSerializerAdapter(${($_ = isset($this->services['jms_serializer']) ? $this->services['jms_serializer'] : $this->get('jms_serializer')) && false ?: '_'});
    }

    /**
     * Gets the public 'fos_rest.view_handler' shared service.
     *
     * @return \FOS\RestBundle\View\ViewHandler
     */
    protected function getFosRest_ViewHandlerService()
    {
        $this->services['fos_rest.view_handler'] = $instance = new \FOS\RestBundle\View\ViewHandler(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router')) && false ?: '_'}, ${($_ = isset($this->services['fos_rest.serializer']) ? $this->services['fos_rest.serializer'] : $this->get('fos_rest.serializer')) && false ?: '_'}, ${($_ = isset($this->services['templating']) ? $this->services['templating'] : $this->get('templating', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'}, array('json' => false, 'html' => true), 400, 204, false, array('html' => 302), 'twig');

        $instance->setSerializeNullStrategy(false);

        return $instance;
    }

    /**
     * Gets the public 'fos_rest.view_response_listener' shared service.
     *
     * @return \FOS\RestBundle\EventListener\ViewResponseListener
     */
    protected function getFosRest_ViewResponseListenerService()
    {
        return $this->services['fos_rest.view_response_listener'] = new \FOS\RestBundle\EventListener\ViewResponseListener(${($_ = isset($this->services['fos_rest.view_handler']) ? $this->services['fos_rest.view_handler'] : $this->get('fos_rest.view_handler')) && false ?: '_'}, true);
    }

    /**
     * Gets the public 'fragment.handler' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler
     */
    protected function getFragment_HandlerService()
    {
        return $this->services['fragment.handler'] = new \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler(${($_ = isset($this->services['service_locator.e64d23c3bf770e2cf44b71643280668d']) ? $this->services['service_locator.e64d23c3bf770e2cf44b71643280668d'] : $this->getServiceLocator_E64d23c3bf770e2cf44b71643280668dService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'}, true);
    }

    /**
     * Gets the public 'fragment.listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\FragmentListener
     */
    protected function getFragment_ListenerService()
    {
        return $this->services['fragment.listener'] = new \Symfony\Component\HttpKernel\EventListener\FragmentListener(${($_ = isset($this->services['uri_signer']) ? $this->services['uri_signer'] : $this->get('uri_signer')) && false ?: '_'}, '/_fragment');
    }

    /**
     * Gets the public 'fragment.renderer.esi' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer
     */
    protected function getFragment_Renderer_EsiService()
    {
        $this->services['fragment.renderer.esi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer(NULL, ${($_ = isset($this->services['fragment.renderer.inline']) ? $this->services['fragment.renderer.inline'] : $this->get('fragment.renderer.inline')) && false ?: '_'}, ${($_ = isset($this->services['uri_signer']) ? $this->services['uri_signer'] : $this->get('uri_signer')) && false ?: '_'});

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the public 'fragment.renderer.hinclude' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer
     */
    protected function getFragment_Renderer_HincludeService()
    {
        $this->services['fragment.renderer.hinclude'] = $instance = new \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}, ${($_ = isset($this->services['uri_signer']) ? $this->services['uri_signer'] : $this->get('uri_signer')) && false ?: '_'}, NULL);

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the public 'fragment.renderer.inline' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer
     */
    protected function getFragment_Renderer_InlineService()
    {
        $this->services['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer(${($_ = isset($this->services['http_kernel']) ? $this->services['http_kernel'] : $this->get('http_kernel')) && false ?: '_'}, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->get('debug.event_dispatcher')) && false ?: '_'});

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the public 'fragment.renderer.ssi' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer
     */
    protected function getFragment_Renderer_SsiService()
    {
        $this->services['fragment.renderer.ssi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer(NULL, ${($_ = isset($this->services['fragment.renderer.inline']) ? $this->services['fragment.renderer.inline'] : $this->get('fragment.renderer.inline')) && false ?: '_'}, ${($_ = isset($this->services['uri_signer']) ? $this->services['uri_signer'] : $this->get('uri_signer')) && false ?: '_'});

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the public 'hautelook_alice.alice.generator.instantiator.chainable.instantiated_reference_instantiator' shared service.
     *
     * @return \Hautelook\AliceBundle\Alice\Generator\Instantiator\Chainable\InstantiatedReferenceInstantiator
     */
    protected function getHautelookAlice_Alice_Generator_Instantiator_Chainable_InstantiatedReferenceInstantiatorService()
    {
        $this->services['hautelook_alice.alice.generator.instantiator.chainable.instantiated_reference_instantiator'] = $instance = new \Hautelook\AliceBundle\Alice\Generator\Instantiator\Chainable\InstantiatedReferenceInstantiator();

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the public 'hautelook_alice.console.command.doctrine.doctrine_orm_load_data_fixtures_command' shared service.
     *
     * @return \Hautelook\AliceBundle\Console\Command\Doctrine\DoctrineOrmLoadDataFixturesCommand
     */
    protected function getHautelookAlice_Console_Command_Doctrine_DoctrineOrmLoadDataFixturesCommandService()
    {
        return $this->services['hautelook_alice.console.command.doctrine.doctrine_orm_load_data_fixtures_command'] = new \Hautelook\AliceBundle\Console\Command\Doctrine\DoctrineOrmLoadDataFixturesCommand('hautelook:fixtures:load', ${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'}, ${($_ = isset($this->services['hautelook_alice.loader.doctrine_orm_loader']) ? $this->services['hautelook_alice.loader.doctrine_orm_loader'] : $this->get('hautelook_alice.loader.doctrine_orm_loader')) && false ?: '_'});
    }

    /**
     * Gets the public 'hautelook_alice.data_fixtures.loader.file_resolver_loader' shared service.
     *
     * @return \Fidry\AliceDataFixtures\Loader\FileResolverLoader
     */
    protected function getHautelookAlice_DataFixtures_Loader_FileResolverLoaderService()
    {
        return $this->services['hautelook_alice.data_fixtures.loader.file_resolver_loader'] = new \Fidry\AliceDataFixtures\Loader\FileResolverLoader(${($_ = isset($this->services['fidry_alice_data_fixtures.doctrine.purger_loader']) ? $this->services['fidry_alice_data_fixtures.doctrine.purger_loader'] : $this->get('fidry_alice_data_fixtures.doctrine.purger_loader')) && false ?: '_'}, ${($_ = isset($this->services['hautelook_alice.resolver.file.kernel_file_resolver']) ? $this->services['hautelook_alice.resolver.file.kernel_file_resolver'] : $this->get('hautelook_alice.resolver.file.kernel_file_resolver')) && false ?: '_'});
    }

    /**
     * Gets the public 'hautelook_alice.loader.doctrine_orm_loader' shared service.
     *
     * @return \Hautelook\AliceBundle\Loader\DoctrineOrmLoader
     */
    protected function getHautelookAlice_Loader_DoctrineOrmLoaderService()
    {
        return $this->services['hautelook_alice.loader.doctrine_orm_loader'] = new \Hautelook\AliceBundle\Loader\DoctrineOrmLoader(${($_ = isset($this->services['hautelook_alice.resolver.bundle.no_bundle_resolver']) ? $this->services['hautelook_alice.resolver.bundle.no_bundle_resolver'] : $this->get('hautelook_alice.resolver.bundle.no_bundle_resolver')) && false ?: '_'}, ${($_ = isset($this->services['hautelook_alice.locator.environmentless']) ? $this->services['hautelook_alice.locator.environmentless'] : $this->get('hautelook_alice.locator.environmentless')) && false ?: '_'}, ${($_ = isset($this->services['fidry_alice_data_fixtures.doctrine.persister_loader']) ? $this->services['fidry_alice_data_fixtures.doctrine.persister_loader'] : $this->get('fidry_alice_data_fixtures.doctrine.persister_loader')) && false ?: '_'}, ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->get('logger')) && false ?: '_'});
    }

    /**
     * Gets the public 'hautelook_alice.locator.env_directory' shared service.
     *
     * @return \Hautelook\AliceBundle\Locator\EnvDirectoryLocator
     */
    protected function getHautelookAlice_Locator_EnvDirectoryService()
    {
        return $this->services['hautelook_alice.locator.env_directory'] = new \Hautelook\AliceBundle\Locator\EnvDirectoryLocator('Resources/fixtures/orm', $this->targetDirs[3]);
    }

    /**
     * Gets the public 'hautelook_alice.locator.environmentless' shared service.
     *
     * @return \Hautelook\AliceBundle\Locator\EnvironmentlessFilesLocator
     */
    protected function getHautelookAlice_Locator_EnvironmentlessService()
    {
        return $this->services['hautelook_alice.locator.environmentless'] = new \Hautelook\AliceBundle\Locator\EnvironmentlessFilesLocator(${($_ = isset($this->services['hautelook_alice.locator.env_directory']) ? $this->services['hautelook_alice.locator.env_directory'] : $this->get('hautelook_alice.locator.env_directory')) && false ?: '_'});
    }

    /**
     * Gets the public 'hautelook_alice.resolver.bundle.no_bundle_resolver' shared service.
     *
     * @return \Hautelook\AliceBundle\Resolver\Bundle\NoBundleResolver
     */
    protected function getHautelookAlice_Resolver_Bundle_NoBundleResolverService()
    {
        return $this->services['hautelook_alice.resolver.bundle.no_bundle_resolver'] = new \Hautelook\AliceBundle\Resolver\Bundle\NoBundleResolver(${($_ = isset($this->services['hautelook_alice.resolver.bundle.simple_resolver']) ? $this->services['hautelook_alice.resolver.bundle.simple_resolver'] : $this->get('hautelook_alice.resolver.bundle.simple_resolver')) && false ?: '_'});
    }

    /**
     * Gets the public 'hautelook_alice.resolver.bundle.simple_resolver' shared service.
     *
     * @return \Hautelook\AliceBundle\Resolver\Bundle\SimpleBundleResolver
     */
    protected function getHautelookAlice_Resolver_Bundle_SimpleResolverService()
    {
        return $this->services['hautelook_alice.resolver.bundle.simple_resolver'] = new \Hautelook\AliceBundle\Resolver\Bundle\SimpleBundleResolver(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'});
    }

    /**
     * Gets the public 'hautelook_alice.resolver.file.kernel_file_resolver' shared service.
     *
     * @return \Hautelook\AliceBundle\Resolver\File\KernelFileResolver
     */
    protected function getHautelookAlice_Resolver_File_KernelFileResolverService()
    {
        return $this->services['hautelook_alice.resolver.file.kernel_file_resolver'] = new \Hautelook\AliceBundle\Resolver\File\KernelFileResolver(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'});
    }

    /**
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->get('debug.event_dispatcher')) && false ?: '_'}, ${($_ = isset($this->services['debug.controller_resolver']) ? $this->services['debug.controller_resolver'] : $this->get('debug.controller_resolver')) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'}, ${($_ = isset($this->services['debug.argument_resolver']) ? $this->services['debug.argument_resolver'] : $this->get('debug.argument_resolver')) && false ?: '_'});
    }

    /**
     * Gets the public 'jms_aop.interceptor_loader' shared service.
     *
     * @return \JMS\AopBundle\Aop\InterceptorLoader
     */
    protected function getJmsAop_InterceptorLoaderService()
    {
        return $this->services['jms_aop.interceptor_loader'] = new \JMS\AopBundle\Aop\InterceptorLoader($this, array());
    }

    /**
     * Gets the public 'jms_aop.pointcut_container' shared service.
     *
     * @return \JMS\AopBundle\Aop\PointcutContainer
     */
    protected function getJmsAop_PointcutContainerService()
    {
        return $this->services['jms_aop.pointcut_container'] = new \JMS\AopBundle\Aop\PointcutContainer(array());
    }

    /**
     * Gets the public 'jms_di_extra.metadata.converter' shared service.
     *
     * @return \JMS\DiExtraBundle\Metadata\MetadataConverter
     */
    protected function getJmsDiExtra_Metadata_ConverterService()
    {
        return $this->services['jms_di_extra.metadata.converter'] = new \JMS\DiExtraBundle\Metadata\MetadataConverter();
    }

    /**
     * Gets the public 'jms_di_extra.metadata.metadata_factory' shared service.
     *
     * @return \Metadata\MetadataFactory
     */
    protected function getJmsDiExtra_Metadata_MetadataFactoryService()
    {
        $this->services['jms_di_extra.metadata.metadata_factory'] = $instance = new \Metadata\MetadataFactory(new \Metadata\Driver\LazyLoadingDriver($this, 'jms_di_extra.metadata_driver'), 'Metadata\\ClassHierarchyMetadata', true);

        $instance->setCache(new \Metadata\Cache\FileCache((__DIR__.'/jms_diextra/metadata')));

        return $instance;
    }

    /**
     * Gets the public 'jms_di_extra.metadata_driver' shared service.
     *
     * @return \JMS\DiExtraBundle\Metadata\Driver\AnnotationDriver
     */
    protected function getJmsDiExtra_MetadataDriverService()
    {
        return $this->services['jms_di_extra.metadata_driver'] = new \JMS\DiExtraBundle\Metadata\Driver\AnnotationDriver(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->get('annotation_reader')) && false ?: '_'}, ${($_ = isset($this->services['jms_di_extra.service_naming_strategy']) ? $this->services['jms_di_extra.service_naming_strategy'] : $this->get('jms_di_extra.service_naming_strategy')) && false ?: '_'});
    }

    /**
     * Gets the public 'jms_di_extra.service_naming_strategy' shared service.
     *
     * @return \JMS\DiExtraBundle\Metadata\DefaultNamingStrategy
     */
    protected function getJmsDiExtra_ServiceNamingStrategyService()
    {
        return $this->services['jms_di_extra.service_naming_strategy'] = new \JMS\DiExtraBundle\Metadata\DefaultNamingStrategy();
    }

    /**
     * Gets the public 'jms_serializer' shared service.
     *
     * @return \JMS\Serializer\Serializer
     */
    protected function getJmsSerializerService()
    {
        $a = new \Metadata\MetadataFactory(new \Metadata\Driver\LazyLoadingDriver($this, 'jms_serializer.metadata_driver'), 'Metadata\\ClassHierarchyMetadata', true);
        $a->setCache(new \Metadata\Cache\FileCache((__DIR__.'/jms_serializer')));

        $b = new \JMS\Serializer\EventDispatcher\LazyEventDispatcher($this);
        $b->setListeners(array('serializer.pre_serialize' => array(0 => array(0 => array(0 => 'jms_serializer.stopwatch_subscriber', 1 => 'onPreSerialize'), 1 => NULL, 2 => NULL), 1 => array(0 => array(0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerializeTypedProxy'), 1 => NULL, 2 => NULL), 2 => array(0 => array(0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'), 1 => NULL, 2 => NULL)), 'serializer.post_serialize' => array(0 => array(0 => array(0 => 'jms_serializer.stopwatch_subscriber', 1 => 'onPostSerialize'), 1 => NULL, 2 => NULL))));

        $this->services['jms_serializer'] = $instance = new \JMS\Serializer\Serializer($a, ${($_ = isset($this->services['jms_serializer.handler_registry']) ? $this->services['jms_serializer.handler_registry'] : $this->get('jms_serializer.handler_registry')) && false ?: '_'}, ${($_ = isset($this->services['jms_serializer.unserialize_object_constructor']) ? $this->services['jms_serializer.unserialize_object_constructor'] : $this->getJmsSerializer_UnserializeObjectConstructorService()) && false ?: '_'}, new \JMS\DiExtraBundle\DependencyInjection\Collection\LazyServiceMap($this, array('json' => 'jms_serializer.json_serialization_visitor', 'xml' => 'jms_serializer.xml_serialization_visitor', 'yml' => 'jms_serializer.yaml_serialization_visitor')), new \JMS\DiExtraBundle\DependencyInjection\Collection\LazyServiceMap($this, array('json' => 'jms_serializer.json_deserialization_visitor', 'xml' => 'jms_serializer.xml_deserialization_visitor')), $b, NULL, ${($_ = isset($this->services['jms_serializer.expression_evaluator']) ? $this->services['jms_serializer.expression_evaluator'] : $this->get('jms_serializer.expression_evaluator')) && false ?: '_'});

        $instance->setSerializationContextFactory(${($_ = isset($this->services['jms_serializer.serialization_context_factory']) ? $this->services['jms_serializer.serialization_context_factory'] : $this->get('jms_serializer.serialization_context_factory')) && false ?: '_'});
        $instance->setDeserializationContextFactory(${($_ = isset($this->services['jms_serializer.deserialization_context_factory']) ? $this->services['jms_serializer.deserialization_context_factory'] : $this->get('jms_serializer.deserialization_context_factory')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'jms_serializer.accessor_strategy' shared service.
     *
     * @return \JMS\Serializer\Accessor\ExpressionAccessorStrategy
     */
    protected function getJmsSerializer_AccessorStrategyService()
    {
        return $this->services['jms_serializer.accessor_strategy'] = new \JMS\Serializer\Accessor\ExpressionAccessorStrategy(${($_ = isset($this->services['jms_serializer.expression_evaluator']) ? $this->services['jms_serializer.expression_evaluator'] : $this->get('jms_serializer.expression_evaluator')) && false ?: '_'}, new \JMS\Serializer\Accessor\DefaultAccessorStrategy());
    }

    /**
     * Gets the public 'jms_serializer.array_collection_handler' shared service.
     *
     * @return \JMS\Serializer\Handler\ArrayCollectionHandler
     */
    protected function getJmsSerializer_ArrayCollectionHandlerService()
    {
        return $this->services['jms_serializer.array_collection_handler'] = new \JMS\Serializer\Handler\ArrayCollectionHandler(false);
    }

    /**
     * Gets the public 'jms_serializer.constraint_violation_handler' shared service.
     *
     * @return \JMS\Serializer\Handler\ConstraintViolationHandler
     */
    protected function getJmsSerializer_ConstraintViolationHandlerService()
    {
        return $this->services['jms_serializer.constraint_violation_handler'] = new \JMS\Serializer\Handler\ConstraintViolationHandler();
    }

    /**
     * Gets the public 'jms_serializer.datetime_handler' shared service.
     *
     * @return \JMS\Serializer\Handler\DateHandler
     */
    protected function getJmsSerializer_DatetimeHandlerService()
    {
        return $this->services['jms_serializer.datetime_handler'] = new \JMS\Serializer\Handler\DateHandler('Y-m-d\\TH:i:sP', 'America/Sao_Paulo', true);
    }

    /**
     * Gets the public 'jms_serializer.deserialization_context_factory' shared service.
     *
     * @return \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory
     */
    protected function getJmsSerializer_DeserializationContextFactoryService()
    {
        return $this->services['jms_serializer.deserialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory();
    }

    /**
     * Gets the public 'jms_serializer.doctrine_proxy_subscriber' shared service.
     *
     * @return \JMS\Serializer\EventDispatcher\Subscriber\DoctrineProxySubscriber
     */
    protected function getJmsSerializer_DoctrineProxySubscriberService()
    {
        return $this->services['jms_serializer.doctrine_proxy_subscriber'] = new \JMS\Serializer\EventDispatcher\Subscriber\DoctrineProxySubscriber(true, false);
    }

    /**
     * Gets the public 'jms_serializer.expression_evaluator' shared service.
     *
     * @return \JMS\Serializer\Expression\ExpressionEvaluator
     */
    protected function getJmsSerializer_ExpressionEvaluatorService()
    {
        $a = new \Symfony\Component\ExpressionLanguage\ExpressionLanguage();
        $a->registerProvider(new \JMS\SerializerBundle\ExpressionLanguage\BasicSerializerFunctionsProvider());

        return $this->services['jms_serializer.expression_evaluator'] = new \JMS\Serializer\Expression\ExpressionEvaluator($a, array('container' => $this));
    }

    /**
     * Gets the public 'jms_serializer.form_error_handler' shared service.
     *
     * @return \JMS\Serializer\Handler\FormErrorHandler
     */
    protected function getJmsSerializer_FormErrorHandlerService()
    {
        return $this->services['jms_serializer.form_error_handler'] = new \JMS\Serializer\Handler\FormErrorHandler(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->get('translator')) && false ?: '_'});
    }

    /**
     * Gets the public 'jms_serializer.handler_registry' shared service.
     *
     * @return \FOS\RestBundle\Serializer\JMSHandlerRegistry
     */
    protected function getJmsSerializer_HandlerRegistryService()
    {
        return $this->services['jms_serializer.handler_registry'] = new \FOS\RestBundle\Serializer\JMSHandlerRegistry(${($_ = isset($this->services['fos_rest.serializer.jms_handler_registry']) ? $this->services['fos_rest.serializer.jms_handler_registry'] : $this->getFosRest_Serializer_JmsHandlerRegistryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'jms_serializer.json_deserialization_visitor' shared service.
     *
     * @return \JMS\Serializer\JsonDeserializationVisitor
     */
    protected function getJmsSerializer_JsonDeserializationVisitorService()
    {
        return $this->services['jms_serializer.json_deserialization_visitor'] = new \JMS\Serializer\JsonDeserializationVisitor(${($_ = isset($this->services['jms_serializer.naming_strategy']) ? $this->services['jms_serializer.naming_strategy'] : $this->get('jms_serializer.naming_strategy')) && false ?: '_'});
    }

    /**
     * Gets the public 'jms_serializer.json_serialization_visitor' shared service.
     *
     * @return \JMS\Serializer\JsonSerializationVisitor
     */
    protected function getJmsSerializer_JsonSerializationVisitorService()
    {
        $this->services['jms_serializer.json_serialization_visitor'] = $instance = new \JMS\Serializer\JsonSerializationVisitor(${($_ = isset($this->services['jms_serializer.naming_strategy']) ? $this->services['jms_serializer.naming_strategy'] : $this->get('jms_serializer.naming_strategy')) && false ?: '_'}, ${($_ = isset($this->services['jms_serializer.accessor_strategy']) ? $this->services['jms_serializer.accessor_strategy'] : $this->get('jms_serializer.accessor_strategy')) && false ?: '_'});

        $instance->setOptions(0);

        return $instance;
    }

    /**
     * Gets the public 'jms_serializer.metadata_driver' shared service.
     *
     * @return \JMS\Serializer\Metadata\Driver\DoctrineTypeDriver
     */
    protected function getJmsSerializer_MetadataDriverService()
    {
        $a = new \Metadata\Driver\FileLocator(array());

        return $this->services['jms_serializer.metadata_driver'] = new \JMS\Serializer\Metadata\Driver\DoctrineTypeDriver(new \Metadata\Driver\DriverChain(array(0 => new \JMS\Serializer\Metadata\Driver\YamlDriver($a), 1 => new \JMS\Serializer\Metadata\Driver\XmlDriver($a), 2 => new \JMS\Serializer\Metadata\Driver\PhpDriver($a), 3 => new \JMS\Serializer\Metadata\Driver\AnnotationDriver(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->get('annotation_reader')) && false ?: '_'}))), ${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'});
    }

    /**
     * Gets the public 'jms_serializer.naming_strategy' shared service.
     *
     * @return \JMS\Serializer\Naming\CacheNamingStrategy
     */
    protected function getJmsSerializer_NamingStrategyService()
    {
        return $this->services['jms_serializer.naming_strategy'] = new \JMS\Serializer\Naming\CacheNamingStrategy(new \JMS\Serializer\Naming\SerializedNameAnnotationStrategy(new \JMS\Serializer\Naming\CamelCaseNamingStrategy('_', true)));
    }

    /**
     * Gets the public 'jms_serializer.object_constructor' shared service.
     *
     * @return \JMS\Serializer\Construction\DoctrineObjectConstructor
     */
    protected function getJmsSerializer_ObjectConstructorService()
    {
        return $this->services['jms_serializer.object_constructor'] = new \JMS\Serializer\Construction\DoctrineObjectConstructor(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'}, ${($_ = isset($this->services['jms_serializer.unserialize_object_constructor']) ? $this->services['jms_serializer.unserialize_object_constructor'] : $this->getJmsSerializer_UnserializeObjectConstructorService()) && false ?: '_'}, 'null');
    }

    /**
     * Gets the public 'jms_serializer.php_collection_handler' shared service.
     *
     * @return \JMS\Serializer\Handler\PhpCollectionHandler
     */
    protected function getJmsSerializer_PhpCollectionHandlerService()
    {
        return $this->services['jms_serializer.php_collection_handler'] = new \JMS\Serializer\Handler\PhpCollectionHandler();
    }

    /**
     * Gets the public 'jms_serializer.serialization_context_factory' shared service.
     *
     * @return \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory
     */
    protected function getJmsSerializer_SerializationContextFactoryService()
    {
        return $this->services['jms_serializer.serialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory();
    }

    /**
     * Gets the public 'jms_serializer.stopwatch_subscriber' shared service.
     *
     * @return \JMS\SerializerBundle\Serializer\StopwatchEventSubscriber
     */
    protected function getJmsSerializer_StopwatchSubscriberService()
    {
        return $this->services['jms_serializer.stopwatch_subscriber'] = new \JMS\SerializerBundle\Serializer\StopwatchEventSubscriber(${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->get('debug.stopwatch')) && false ?: '_'});
    }

    /**
     * Gets the public 'jms_serializer.templating.helper.serializer' shared service.
     *
     * @return \JMS\SerializerBundle\Templating\SerializerHelper
     */
    protected function getJmsSerializer_Templating_Helper_SerializerService()
    {
        return $this->services['jms_serializer.templating.helper.serializer'] = new \JMS\SerializerBundle\Templating\SerializerHelper(${($_ = isset($this->services['jms_serializer']) ? $this->services['jms_serializer'] : $this->get('jms_serializer')) && false ?: '_'});
    }

    /**
     * Gets the public 'jms_serializer.twig_extension.serializer_runtime_helper' shared service.
     *
     * @return \JMS\Serializer\Twig\SerializerRuntimeHelper
     */
    protected function getJmsSerializer_TwigExtension_SerializerRuntimeHelperService()
    {
        return $this->services['jms_serializer.twig_extension.serializer_runtime_helper'] = new \JMS\Serializer\Twig\SerializerRuntimeHelper(${($_ = isset($this->services['jms_serializer']) ? $this->services['jms_serializer'] : $this->get('jms_serializer')) && false ?: '_'});
    }

    /**
     * Gets the public 'jms_serializer.xml_deserialization_visitor' shared service.
     *
     * @return \JMS\Serializer\XmlDeserializationVisitor
     */
    protected function getJmsSerializer_XmlDeserializationVisitorService()
    {
        $this->services['jms_serializer.xml_deserialization_visitor'] = $instance = new \JMS\Serializer\XmlDeserializationVisitor(${($_ = isset($this->services['jms_serializer.naming_strategy']) ? $this->services['jms_serializer.naming_strategy'] : $this->get('jms_serializer.naming_strategy')) && false ?: '_'});

        $instance->setDoctypeWhitelist(array());

        return $instance;
    }

    /**
     * Gets the public 'jms_serializer.xml_serialization_visitor' shared service.
     *
     * @return \JMS\Serializer\XmlSerializationVisitor
     */
    protected function getJmsSerializer_XmlSerializationVisitorService()
    {
        $this->services['jms_serializer.xml_serialization_visitor'] = $instance = new \JMS\Serializer\XmlSerializationVisitor(${($_ = isset($this->services['jms_serializer.naming_strategy']) ? $this->services['jms_serializer.naming_strategy'] : $this->get('jms_serializer.naming_strategy')) && false ?: '_'}, ${($_ = isset($this->services['jms_serializer.accessor_strategy']) ? $this->services['jms_serializer.accessor_strategy'] : $this->get('jms_serializer.accessor_strategy')) && false ?: '_'});

        $instance->setFormatOutput(true);

        return $instance;
    }

    /**
     * Gets the public 'jms_serializer.yaml_serialization_visitor' shared service.
     *
     * @return \JMS\Serializer\YamlSerializationVisitor
     */
    protected function getJmsSerializer_YamlSerializationVisitorService()
    {
        return $this->services['jms_serializer.yaml_serialization_visitor'] = new \JMS\Serializer\YamlSerializationVisitor(${($_ = isset($this->services['jms_serializer.naming_strategy']) ? $this->services['jms_serializer.naming_strategy'] : $this->get('jms_serializer.naming_strategy')) && false ?: '_'}, ${($_ = isset($this->services['jms_serializer.accessor_strategy']) ? $this->services['jms_serializer.accessor_strategy'] : $this->get('jms_serializer.accessor_strategy')) && false ?: '_'});
    }

    /**
     * Gets the public 'kernel.class_cache.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer
     *
     * @deprecated The "kernel.class_cache.cache_warmer" option is deprecated since version 3.3, to be removed in 4.0.
     */
    protected function getKernel_ClassCache_CacheWarmerService()
    {
        @trigger_error('The "kernel.class_cache.cache_warmer" option is deprecated since version 3.3, to be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['kernel.class_cache.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer(array(0 => 'Symfony\\Component\\HttpFoundation\\ParameterBag', 1 => 'Symfony\\Component\\HttpFoundation\\HeaderBag', 2 => 'Symfony\\Component\\HttpFoundation\\FileBag', 3 => 'Symfony\\Component\\HttpFoundation\\ServerBag', 4 => 'Symfony\\Component\\HttpFoundation\\Request', 5 => 'Symfony\\Component\\HttpKernel\\Kernel'));
    }

    /**
     * Gets the public 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->services['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'}, 'en', ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'logger' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->get('monolog.handler.server_log')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'monolog.activation_strategy.not_found' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\FingersCrossed\NotFoundActivationStrategy
     */
    protected function getMonolog_ActivationStrategy_NotFoundService()
    {
        return $this->services['monolog.activation_strategy.not_found'] = new \Symfony\Bridge\Monolog\Handler\FingersCrossed\NotFoundActivationStrategy();
    }

    /**
     * Gets the public 'monolog.handler.console' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler
     */
    protected function getMonolog_Handler_ConsoleService()
    {
        return $this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array());
    }

    /**
     * Gets the public 'monolog.handler.fingers_crossed.error_level_activation_strategy' shared service.
     *
     * @return \Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy
     */
    protected function getMonolog_Handler_FingersCrossed_ErrorLevelActivationStrategyService()
    {
        return $this->services['monolog.handler.fingers_crossed.error_level_activation_strategy'] = new \Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy();
    }

    /**
     * Gets the public 'monolog.handler.main' shared service.
     *
     * @return \Monolog\Handler\StreamHandler
     */
    protected function getMonolog_Handler_MainService()
    {
        $this->services['monolog.handler.main'] = $instance = new \Monolog\Handler\StreamHandler(($this->targetDirs[2].'/logs/test.log'), 100, true, NULL);

        $instance->pushProcessor(new \Monolog\Processor\PsrLogMessageProcessor());

        return $instance;
    }

    /**
     * Gets the public 'monolog.handler.null_internal' shared service.
     *
     * @return \Monolog\Handler\NullHandler
     */
    protected function getMonolog_Handler_NullInternalService()
    {
        return $this->services['monolog.handler.null_internal'] = new \Monolog\Handler\NullHandler();
    }

    /**
     * Gets the public 'monolog.handler.server_log' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ServerLogHandler
     */
    protected function getMonolog_Handler_ServerLogService()
    {
        return $this->services['monolog.handler.server_log'] = new \Symfony\Bridge\Monolog\Handler\ServerLogHandler('127.0.0.1:9911', 100, true);
    }

    /**
     * Gets the public 'monolog.logger.cache' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_CacheService()
    {
        $this->services['monolog.logger.cache'] = $instance = new \Symfony\Bridge\Monolog\Logger('cache');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->get('monolog.handler.server_log')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.console' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_ConsoleService()
    {
        $this->services['monolog.logger.console'] = $instance = new \Symfony\Bridge\Monolog\Logger('console');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->get('monolog.handler.server_log')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.doctrine' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_DoctrineService()
    {
        $this->services['monolog.logger.doctrine'] = $instance = new \Symfony\Bridge\Monolog\Logger('doctrine');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->get('monolog.handler.server_log')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.event' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_EventService()
    {
        $this->services['monolog.logger.event'] = $instance = new \Symfony\Bridge\Monolog\Logger('event');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->get('monolog.handler.server_log')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.php' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_PhpService()
    {
        $this->services['monolog.logger.php'] = $instance = new \Symfony\Bridge\Monolog\Logger('php');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->get('monolog.handler.server_log')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.profiler' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_ProfilerService()
    {
        $this->services['monolog.logger.profiler'] = $instance = new \Symfony\Bridge\Monolog\Logger('profiler');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->get('monolog.handler.server_log')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.request' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->get('monolog.handler.server_log')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.router' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RouterService()
    {
        $this->services['monolog.logger.router'] = $instance = new \Symfony\Bridge\Monolog\Logger('router');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->get('monolog.handler.server_log')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.security' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_SecurityService()
    {
        $this->services['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->get('monolog.handler.server_log')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.templating' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_TemplatingService()
    {
        $this->services['monolog.logger.templating'] = $instance = new \Symfony\Bridge\Monolog\Logger('templating');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->get('monolog.handler.server_log')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'nelmio_alice.data_loader.simple' shared service.
     *
     * @return \Nelmio\Alice\Loader\SimpleDataLoader
     */
    protected function getNelmioAlice_DataLoader_SimpleService()
    {
        return $this->services['nelmio_alice.data_loader.simple'] = new \Nelmio\Alice\Loader\SimpleDataLoader(${($_ = isset($this->services['nelmio_alice.fixture_builder.simple']) ? $this->services['nelmio_alice.fixture_builder.simple'] : $this->get('nelmio_alice.fixture_builder.simple')) && false ?: '_'}, ${($_ = isset($this->services['nelmio_alice.generator.double_pass']) ? $this->services['nelmio_alice.generator.double_pass'] : $this->get('nelmio_alice.generator.double_pass')) && false ?: '_'});
    }

    /**
     * Gets the public 'nelmio_alice.faker.generator' shared service.
     *
     * @return \Faker\Generator
     */
    protected function getNelmioAlice_Faker_GeneratorService()
    {
        $this->services['nelmio_alice.faker.generator'] = $instance = \Faker\Factory::create('en_US');

        $instance->seed(1);
        $instance->addProvider(${($_ = isset($this->services['data_fixtures.provider.foo']) ? $this->services['data_fixtures.provider.foo'] : $this->get('data_fixtures.provider.foo')) && false ?: '_'});
        $instance->addProvider(${($_ = isset($this->services['nelmio_alice.faker.provider.alice']) ? $this->services['nelmio_alice.faker.provider.alice'] : $this->get('nelmio_alice.faker.provider.alice')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'nelmio_alice.faker.provider.alice' shared service.
     *
     * @return \Nelmio\Alice\Faker\Provider\AliceProvider
     */
    protected function getNelmioAlice_Faker_Provider_AliceService()
    {
        return $this->services['nelmio_alice.faker.provider.alice'] = new \Nelmio\Alice\Faker\Provider\AliceProvider();
    }

    /**
     * Gets the public 'nelmio_alice.file_loader.simple' shared service.
     *
     * @return \Nelmio\Alice\Loader\SimpleFileLoader
     */
    protected function getNelmioAlice_FileLoader_SimpleService()
    {
        return $this->services['nelmio_alice.file_loader.simple'] = new \Nelmio\Alice\Loader\SimpleFileLoader(${($_ = isset($this->services['nelmio_alice.file_parser.runtime_cache']) ? $this->services['nelmio_alice.file_parser.runtime_cache'] : $this->get('nelmio_alice.file_parser.runtime_cache')) && false ?: '_'}, ${($_ = isset($this->services['nelmio_alice.data_loader.simple']) ? $this->services['nelmio_alice.data_loader.simple'] : $this->get('nelmio_alice.data_loader.simple')) && false ?: '_'});
    }

    /**
     * Gets the public 'nelmio_alice.file_locator.default' shared service.
     *
     * @return \Nelmio\Alice\FileLocator\DefaultFileLocator
     */
    protected function getNelmioAlice_FileLocator_DefaultService()
    {
        return $this->services['nelmio_alice.file_locator.default'] = new \Nelmio\Alice\FileLocator\DefaultFileLocator();
    }

    /**
     * Gets the public 'nelmio_alice.file_parser.chainable.php' shared service.
     *
     * @return \Nelmio\Alice\Parser\Chainable\PhpParser
     */
    protected function getNelmioAlice_FileParser_Chainable_PhpService()
    {
        return $this->services['nelmio_alice.file_parser.chainable.php'] = new \Nelmio\Alice\Parser\Chainable\PhpParser();
    }

    /**
     * Gets the public 'nelmio_alice.file_parser.chainable.yaml' shared service.
     *
     * @return \Nelmio\Alice\Parser\Chainable\YamlParser
     */
    protected function getNelmioAlice_FileParser_Chainable_YamlService()
    {
        return $this->services['nelmio_alice.file_parser.chainable.yaml'] = new \Nelmio\Alice\Parser\Chainable\YamlParser(new \Symfony\Component\Yaml\Parser());
    }

    /**
     * Gets the public 'nelmio_alice.file_parser.default_include_processor' shared service.
     *
     * @return \Nelmio\Alice\Parser\IncludeProcessor\DefaultIncludeProcessor
     */
    protected function getNelmioAlice_FileParser_DefaultIncludeProcessorService()
    {
        return $this->services['nelmio_alice.file_parser.default_include_processor'] = new \Nelmio\Alice\Parser\IncludeProcessor\DefaultIncludeProcessor(${($_ = isset($this->services['nelmio_alice.file_locator.default']) ? $this->services['nelmio_alice.file_locator.default'] : $this->get('nelmio_alice.file_locator.default')) && false ?: '_'});
    }

    /**
     * Gets the public 'nelmio_alice.file_parser.registry' shared service.
     *
     * @return \Nelmio\Alice\Parser\ParserRegistry
     */
    protected function getNelmioAlice_FileParser_RegistryService()
    {
        return $this->services['nelmio_alice.file_parser.registry'] = new \Nelmio\Alice\Parser\ParserRegistry(array(0 => ${($_ = isset($this->services['nelmio_alice.file_parser.chainable.yaml']) ? $this->services['nelmio_alice.file_parser.chainable.yaml'] : $this->get('nelmio_alice.file_parser.chainable.yaml')) && false ?: '_'}, 1 => ${($_ = isset($this->services['nelmio_alice.file_parser.chainable.php']) ? $this->services['nelmio_alice.file_parser.chainable.php'] : $this->get('nelmio_alice.file_parser.chainable.php')) && false ?: '_'}));
    }

    /**
     * Gets the public 'nelmio_alice.file_parser.runtime_cache' shared service.
     *
     * @return \Nelmio\Alice\Parser\RuntimeCacheParser
     */
    protected function getNelmioAlice_FileParser_RuntimeCacheService()
    {
        return $this->services['nelmio_alice.file_parser.runtime_cache'] = new \Nelmio\Alice\Parser\RuntimeCacheParser(${($_ = isset($this->services['nelmio_alice.file_parser.registry']) ? $this->services['nelmio_alice.file_parser.registry'] : $this->get('nelmio_alice.file_parser.registry')) && false ?: '_'}, ${($_ = isset($this->services['nelmio_alice.file_locator.default']) ? $this->services['nelmio_alice.file_locator.default'] : $this->get('nelmio_alice.file_locator.default')) && false ?: '_'}, ${($_ = isset($this->services['nelmio_alice.file_parser.default_include_processor']) ? $this->services['nelmio_alice.file_parser.default_include_processor'] : $this->get('nelmio_alice.file_parser.default_include_processor')) && false ?: '_'});
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.denormalizer.fixture.chainable.null_list' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\Chainable\NullListNameDenormalizer
     */
    protected function getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Chainable_NullListService()
    {
        return $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.chainable.null_list'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\Chainable\NullListNameDenormalizer();
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.denormalizer.fixture.chainable.null_range' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\Chainable\NullRangeNameDenormalizer
     */
    protected function getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Chainable_NullRangeService()
    {
        return $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.chainable.null_range'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\Chainable\NullRangeNameDenormalizer();
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.denormalizer.fixture.chainable.simple' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\Chainable\SimpleDenormalizer
     */
    protected function getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Chainable_SimpleService()
    {
        return $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.chainable.simple'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\Chainable\SimpleDenormalizer(${($_ = isset($this->services['nelmio_alice.fixture_builder.denormalizer.specs.simple']) ? $this->services['nelmio_alice.fixture_builder.denormalizer.specs.simple'] : $this->get('nelmio_alice.fixture_builder.denormalizer.specs.simple')) && false ?: '_'});
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.denormalizer.fixture.chainable.simple_list' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\Chainable\SimpleCollectionDenormalizer
     */
    protected function getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Chainable_SimpleListService()
    {
        return $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.chainable.simple_list'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\Chainable\SimpleCollectionDenormalizer(${($_ = isset($this->services['nelmio_alice.fixture_builder.denormalizer.fixture.chainable.temporary_list']) ? $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.chainable.temporary_list'] : $this->get('nelmio_alice.fixture_builder.denormalizer.fixture.chainable.temporary_list')) && false ?: '_'});
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.denormalizer.fixture.chainable.simple_range' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\Chainable\SimpleCollectionDenormalizer
     */
    protected function getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Chainable_SimpleRangeService()
    {
        return $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.chainable.simple_range'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\Chainable\SimpleCollectionDenormalizer(${($_ = isset($this->services['nelmio_alice.fixture_builder.denormalizer.fixture.chainable.temporary_range']) ? $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.chainable.temporary_range'] : $this->get('nelmio_alice.fixture_builder.denormalizer.fixture.chainable.temporary_range')) && false ?: '_'});
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.denormalizer.fixture.chainable.temporary_list' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\Chainable\CollectionDenormalizerWithTemporaryFixture
     */
    protected function getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Chainable_TemporaryListService()
    {
        return $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.chainable.temporary_list'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\Chainable\CollectionDenormalizerWithTemporaryFixture(${($_ = isset($this->services['nelmio_alice.fixture_builder.denormalizer.fixture.chainable.null_list']) ? $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.chainable.null_list'] : $this->get('nelmio_alice.fixture_builder.denormalizer.fixture.chainable.null_list')) && false ?: '_'});
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.denormalizer.fixture.chainable.temporary_range' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\Chainable\CollectionDenormalizerWithTemporaryFixture
     */
    protected function getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Chainable_TemporaryRangeService()
    {
        return $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.chainable.temporary_range'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\Chainable\CollectionDenormalizerWithTemporaryFixture(${($_ = isset($this->services['nelmio_alice.fixture_builder.denormalizer.fixture.chainable.null_range']) ? $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.chainable.null_range'] : $this->get('nelmio_alice.fixture_builder.denormalizer.fixture.chainable.null_range')) && false ?: '_'});
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.denormalizer.fixture.registry_denormalizer' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\FixtureDenormalizerRegistry
     */
    protected function getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_RegistryDenormalizerService()
    {
        return $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.registry_denormalizer'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\FixtureDenormalizerRegistry(${($_ = isset($this->services['nelmio_alice.fixture_builder.denormalizer.flag_parser.element']) ? $this->services['nelmio_alice.fixture_builder.denormalizer.flag_parser.element'] : $this->get('nelmio_alice.fixture_builder.denormalizer.flag_parser.element')) && false ?: '_'}, array(0 => ${($_ = isset($this->services['nelmio_alice.fixture_builder.denormalizer.fixture.chainable.simple_list']) ? $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.chainable.simple_list'] : $this->get('nelmio_alice.fixture_builder.denormalizer.fixture.chainable.simple_list')) && false ?: '_'}, 1 => ${($_ = isset($this->services['nelmio_alice.fixture_builder.denormalizer.fixture.chainable.simple_range']) ? $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.chainable.simple_range'] : $this->get('nelmio_alice.fixture_builder.denormalizer.fixture.chainable.simple_range')) && false ?: '_'}, 2 => ${($_ = isset($this->services['nelmio_alice.fixture_builder.denormalizer.fixture.chainable.simple']) ? $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.chainable.simple'] : $this->get('nelmio_alice.fixture_builder.denormalizer.fixture.chainable.simple')) && false ?: '_'}));
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.denormalizer.fixture.simple_fixture_bag_denormalizer' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\SimpleFixtureBagDenormalizer
     */
    protected function getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_SimpleFixtureBagDenormalizerService()
    {
        return $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.simple_fixture_bag_denormalizer'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\SimpleFixtureBagDenormalizer(${($_ = isset($this->services['nelmio_alice.fixture_builder.denormalizer.fixture.registry_denormalizer']) ? $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.registry_denormalizer'] : $this->get('nelmio_alice.fixture_builder.denormalizer.fixture.registry_denormalizer')) && false ?: '_'}, ${($_ = isset($this->services['nelmio_alice.fixture_builder.denormalizer.flag_parser.element']) ? $this->services['nelmio_alice.fixture_builder.denormalizer.flag_parser.element'] : $this->get('nelmio_alice.fixture_builder.denormalizer.flag_parser.element')) && false ?: '_'});
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.denormalizer.fixture.specs.arguments.simple_arguments_denormalizer' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Arguments\SimpleArgumentsDenormalizer
     */
    protected function getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Specs_Arguments_SimpleArgumentsDenormalizerService()
    {
        return $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.arguments.simple_arguments_denormalizer'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Arguments\SimpleArgumentsDenormalizer(${($_ = isset($this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.value.unique_value_denormalizer']) ? $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.value.unique_value_denormalizer'] : $this->get('nelmio_alice.fixture_builder.denormalizer.fixture.specs.value.unique_value_denormalizer')) && false ?: '_'});
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.denormalizer.fixture.specs.calls.function_denormalizer' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Calls\FunctionDenormalizer
     */
    protected function getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Specs_Calls_FunctionDenormalizerService()
    {
        return $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.calls.function_denormalizer'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Calls\FunctionDenormalizer(${($_ = isset($this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.arguments.simple_arguments_denormalizer']) ? $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.arguments.simple_arguments_denormalizer'] : $this->get('nelmio_alice.fixture_builder.denormalizer.fixture.specs.arguments.simple_arguments_denormalizer')) && false ?: '_'});
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.denormalizer.fixture.specs.calls.method_flag_handler.configurator_flag_handler' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Calls\MethodFlagHandler\ConfiguratorFlagHandler
     */
    protected function getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Specs_Calls_MethodFlagHandler_ConfiguratorFlagHandlerService()
    {
        return $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.calls.method_flag_handler.configurator_flag_handler'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Calls\MethodFlagHandler\ConfiguratorFlagHandler();
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.denormalizer.fixture.specs.calls.method_flag_handler.optional_flag_handler' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Calls\MethodFlagHandler\OptionalFlagHandler
     */
    protected function getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Specs_Calls_MethodFlagHandler_OptionalFlagHandlerService()
    {
        return $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.calls.method_flag_handler.optional_flag_handler'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Calls\MethodFlagHandler\OptionalFlagHandler();
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.denormalizer.fixture.specs.calls.simple_denormalizer' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Calls\CallsWithFlagsDenormalizer
     */
    protected function getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Specs_Calls_SimpleDenormalizerService()
    {
        return $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.calls.simple_denormalizer'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Calls\CallsWithFlagsDenormalizer(${($_ = isset($this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.calls.function_denormalizer']) ? $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.calls.function_denormalizer'] : $this->get('nelmio_alice.fixture_builder.denormalizer.fixture.specs.calls.function_denormalizer')) && false ?: '_'}, array(0 => ${($_ = isset($this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.calls.method_flag_handler.configurator_flag_handler']) ? $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.calls.method_flag_handler.configurator_flag_handler'] : $this->get('nelmio_alice.fixture_builder.denormalizer.fixture.specs.calls.method_flag_handler.configurator_flag_handler')) && false ?: '_'}, 1 => ${($_ = isset($this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.calls.method_flag_handler.optional_flag_handler']) ? $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.calls.method_flag_handler.optional_flag_handler'] : $this->get('nelmio_alice.fixture_builder.denormalizer.fixture.specs.calls.method_flag_handler.optional_flag_handler')) && false ?: '_'}));
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.denormalizer.fixture.specs.constructor.constructor_denormalizer' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Constructor\ConstructorDenormalizer
     */
    protected function getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Specs_Constructor_ConstructorDenormalizerService()
    {
        return $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.constructor.constructor_denormalizer'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Constructor\ConstructorDenormalizer(${($_ = isset($this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.arguments.simple_arguments_denormalizer']) ? $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.arguments.simple_arguments_denormalizer'] : $this->get('nelmio_alice.fixture_builder.denormalizer.fixture.specs.arguments.simple_arguments_denormalizer')) && false ?: '_'});
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.denormalizer.fixture.specs.constructor.factory_denormalizer' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Constructor\FactoryDenormalizer
     */
    protected function getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Specs_Constructor_FactoryDenormalizerService()
    {
        return $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.constructor.factory_denormalizer'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Constructor\FactoryDenormalizer(${($_ = isset($this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.calls.simple_denormalizer']) ? $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.calls.simple_denormalizer'] : $this->get('nelmio_alice.fixture_builder.denormalizer.fixture.specs.calls.simple_denormalizer')) && false ?: '_'});
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.denormalizer.fixture.specs.constructor.legacy_constructor_denormalizer' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Constructor\LegacyConstructorDenormalizer
     */
    protected function getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Specs_Constructor_LegacyConstructorDenormalizerService()
    {
        return $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.constructor.legacy_constructor_denormalizer'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Constructor\LegacyConstructorDenormalizer(${($_ = isset($this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.constructor.constructor_denormalizer']) ? $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.constructor.constructor_denormalizer'] : $this->get('nelmio_alice.fixture_builder.denormalizer.fixture.specs.constructor.constructor_denormalizer')) && false ?: '_'}, ${($_ = isset($this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.constructor.factory_denormalizer']) ? $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.constructor.factory_denormalizer'] : $this->get('nelmio_alice.fixture_builder.denormalizer.fixture.specs.constructor.factory_denormalizer')) && false ?: '_'});
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.denormalizer.fixture.specs.property.simple_denormalizer' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Property\SimplePropertyDenormalizer
     */
    protected function getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Specs_Property_SimpleDenormalizerService()
    {
        return $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.property.simple_denormalizer'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Property\SimplePropertyDenormalizer(${($_ = isset($this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.value.unique_value_denormalizer']) ? $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.value.unique_value_denormalizer'] : $this->get('nelmio_alice.fixture_builder.denormalizer.fixture.specs.value.unique_value_denormalizer')) && false ?: '_'});
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.denormalizer.fixture.specs.value.simple_value_denormalizer' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Value\SimpleValueDenormalizer
     */
    protected function getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Specs_Value_SimpleValueDenormalizerService()
    {
        return $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.value.simple_value_denormalizer'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Value\SimpleValueDenormalizer(${($_ = isset($this->services['nelmio_alice.fixture_builder.expression_language.parser.function_fixture_reference_parser']) ? $this->services['nelmio_alice.fixture_builder.expression_language.parser.function_fixture_reference_parser'] : $this->get('nelmio_alice.fixture_builder.expression_language.parser.function_fixture_reference_parser')) && false ?: '_'});
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.denormalizer.fixture.specs.value.unique_value_denormalizer' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Value\UniqueValueDenormalizer
     */
    protected function getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Specs_Value_UniqueValueDenormalizerService()
    {
        return $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.value.unique_value_denormalizer'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Value\UniqueValueDenormalizer(${($_ = isset($this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.value.simple_value_denormalizer']) ? $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.value.simple_value_denormalizer'] : $this->get('nelmio_alice.fixture_builder.denormalizer.fixture.specs.value.simple_value_denormalizer')) && false ?: '_'});
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.denormalizer.flag_parser.chainable.configurator' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\Denormalizer\FlagParser\Chainable\ConfiguratorFlagParser
     */
    protected function getNelmioAlice_FixtureBuilder_Denormalizer_FlagParser_Chainable_ConfiguratorService()
    {
        return $this->services['nelmio_alice.fixture_builder.denormalizer.flag_parser.chainable.configurator'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\FlagParser\Chainable\ConfiguratorFlagParser();
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.denormalizer.flag_parser.chainable.extend' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\Denormalizer\FlagParser\Chainable\ExtendFlagParser
     */
    protected function getNelmioAlice_FixtureBuilder_Denormalizer_FlagParser_Chainable_ExtendService()
    {
        return $this->services['nelmio_alice.fixture_builder.denormalizer.flag_parser.chainable.extend'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\FlagParser\Chainable\ExtendFlagParser();
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.denormalizer.flag_parser.chainable.optional' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\Denormalizer\FlagParser\Chainable\OptionalFlagParser
     */
    protected function getNelmioAlice_FixtureBuilder_Denormalizer_FlagParser_Chainable_OptionalService()
    {
        return $this->services['nelmio_alice.fixture_builder.denormalizer.flag_parser.chainable.optional'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\FlagParser\Chainable\OptionalFlagParser();
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.denormalizer.flag_parser.chainable.template' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\Denormalizer\FlagParser\Chainable\TemplateFlagParser
     */
    protected function getNelmioAlice_FixtureBuilder_Denormalizer_FlagParser_Chainable_TemplateService()
    {
        return $this->services['nelmio_alice.fixture_builder.denormalizer.flag_parser.chainable.template'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\FlagParser\Chainable\TemplateFlagParser();
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.denormalizer.flag_parser.chainable.unique' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\Denormalizer\FlagParser\Chainable\UniqueFlagParser
     */
    protected function getNelmioAlice_FixtureBuilder_Denormalizer_FlagParser_Chainable_UniqueService()
    {
        return $this->services['nelmio_alice.fixture_builder.denormalizer.flag_parser.chainable.unique'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\FlagParser\Chainable\UniqueFlagParser();
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.denormalizer.flag_parser.element' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\Denormalizer\FlagParser\ElementFlagParser
     */
    protected function getNelmioAlice_FixtureBuilder_Denormalizer_FlagParser_ElementService()
    {
        return $this->services['nelmio_alice.fixture_builder.denormalizer.flag_parser.element'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\FlagParser\ElementFlagParser(${($_ = isset($this->services['nelmio_alice.fixture_builder.denormalizer.flag_parser.registry']) ? $this->services['nelmio_alice.fixture_builder.denormalizer.flag_parser.registry'] : $this->get('nelmio_alice.fixture_builder.denormalizer.flag_parser.registry')) && false ?: '_'});
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.denormalizer.flag_parser.registry' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\Denormalizer\FlagParser\FlagParserRegistry
     */
    protected function getNelmioAlice_FixtureBuilder_Denormalizer_FlagParser_RegistryService()
    {
        return $this->services['nelmio_alice.fixture_builder.denormalizer.flag_parser.registry'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\FlagParser\FlagParserRegistry(array(0 => ${($_ = isset($this->services['nelmio_alice.fixture_builder.denormalizer.flag_parser.chainable.configurator']) ? $this->services['nelmio_alice.fixture_builder.denormalizer.flag_parser.chainable.configurator'] : $this->get('nelmio_alice.fixture_builder.denormalizer.flag_parser.chainable.configurator')) && false ?: '_'}, 1 => ${($_ = isset($this->services['nelmio_alice.fixture_builder.denormalizer.flag_parser.chainable.extend']) ? $this->services['nelmio_alice.fixture_builder.denormalizer.flag_parser.chainable.extend'] : $this->get('nelmio_alice.fixture_builder.denormalizer.flag_parser.chainable.extend')) && false ?: '_'}, 2 => ${($_ = isset($this->services['nelmio_alice.fixture_builder.denormalizer.flag_parser.chainable.optional']) ? $this->services['nelmio_alice.fixture_builder.denormalizer.flag_parser.chainable.optional'] : $this->get('nelmio_alice.fixture_builder.denormalizer.flag_parser.chainable.optional')) && false ?: '_'}, 3 => ${($_ = isset($this->services['nelmio_alice.fixture_builder.denormalizer.flag_parser.chainable.template']) ? $this->services['nelmio_alice.fixture_builder.denormalizer.flag_parser.chainable.template'] : $this->get('nelmio_alice.fixture_builder.denormalizer.flag_parser.chainable.template')) && false ?: '_'}, 4 => ${($_ = isset($this->services['nelmio_alice.fixture_builder.denormalizer.flag_parser.chainable.unique']) ? $this->services['nelmio_alice.fixture_builder.denormalizer.flag_parser.chainable.unique'] : $this->get('nelmio_alice.fixture_builder.denormalizer.flag_parser.chainable.unique')) && false ?: '_'}));
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.denormalizer.parameter.simple_parameter_bag_denormalizer' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\Denormalizer\Parameter\SimpleParameterBagDenormalizer
     */
    protected function getNelmioAlice_FixtureBuilder_Denormalizer_Parameter_SimpleParameterBagDenormalizerService()
    {
        return $this->services['nelmio_alice.fixture_builder.denormalizer.parameter.simple_parameter_bag_denormalizer'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\Parameter\SimpleParameterBagDenormalizer();
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.denormalizer.simple' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\Denormalizer\SimpleDenormalizer
     */
    protected function getNelmioAlice_FixtureBuilder_Denormalizer_SimpleService()
    {
        return $this->services['nelmio_alice.fixture_builder.denormalizer.simple'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\SimpleDenormalizer(${($_ = isset($this->services['nelmio_alice.fixture_builder.denormalizer.parameter.simple_parameter_bag_denormalizer']) ? $this->services['nelmio_alice.fixture_builder.denormalizer.parameter.simple_parameter_bag_denormalizer'] : $this->get('nelmio_alice.fixture_builder.denormalizer.parameter.simple_parameter_bag_denormalizer')) && false ?: '_'}, ${($_ = isset($this->services['nelmio_alice.fixture_builder.denormalizer.fixture.simple_fixture_bag_denormalizer']) ? $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.simple_fixture_bag_denormalizer'] : $this->get('nelmio_alice.fixture_builder.denormalizer.fixture.simple_fixture_bag_denormalizer')) && false ?: '_'});
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.denormalizer.specs.simple' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\SimpleSpecificationsDenormalizer
     */
    protected function getNelmioAlice_FixtureBuilder_Denormalizer_Specs_SimpleService()
    {
        return $this->services['nelmio_alice.fixture_builder.denormalizer.specs.simple'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\SimpleSpecificationsDenormalizer(${($_ = isset($this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.constructor.legacy_constructor_denormalizer']) ? $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.constructor.legacy_constructor_denormalizer'] : $this->get('nelmio_alice.fixture_builder.denormalizer.fixture.specs.constructor.legacy_constructor_denormalizer')) && false ?: '_'}, ${($_ = isset($this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.property.simple_denormalizer']) ? $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.property.simple_denormalizer'] : $this->get('nelmio_alice.fixture_builder.denormalizer.fixture.specs.property.simple_denormalizer')) && false ?: '_'}, ${($_ = isset($this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.calls.simple_denormalizer']) ? $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.calls.simple_denormalizer'] : $this->get('nelmio_alice.fixture_builder.denormalizer.fixture.specs.calls.simple_denormalizer')) && false ?: '_'});
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.expression_language.lexer.empty_value_lexer' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Lexer\EmptyValueLexer
     */
    protected function getNelmioAlice_FixtureBuilder_ExpressionLanguage_Lexer_EmptyValueLexerService()
    {
        return $this->services['nelmio_alice.fixture_builder.expression_language.lexer.empty_value_lexer'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Lexer\EmptyValueLexer(${($_ = isset($this->services['nelmio_alice.fixture_builder.expression_language.lexer.reference_escaper_lexer']) ? $this->services['nelmio_alice.fixture_builder.expression_language.lexer.reference_escaper_lexer'] : $this->get('nelmio_alice.fixture_builder.expression_language.lexer.reference_escaper_lexer')) && false ?: '_'});
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.expression_language.lexer.function_lexer' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Lexer\FunctionLexer
     */
    protected function getNelmioAlice_FixtureBuilder_ExpressionLanguage_Lexer_FunctionLexerService()
    {
        return $this->services['nelmio_alice.fixture_builder.expression_language.lexer.function_lexer'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Lexer\FunctionLexer(${($_ = isset($this->services['nelmio_alice.fixture_builder.expression_language.lexer.sub_patterns_lexer']) ? $this->services['nelmio_alice.fixture_builder.expression_language.lexer.sub_patterns_lexer'] : $this->get('nelmio_alice.fixture_builder.expression_language.lexer.sub_patterns_lexer')) && false ?: '_'});
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.expression_language.lexer.globals_patterns_lexer' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Lexer\GlobalPatternsLexer
     */
    protected function getNelmioAlice_FixtureBuilder_ExpressionLanguage_Lexer_GlobalsPatternsLexerService()
    {
        return $this->services['nelmio_alice.fixture_builder.expression_language.lexer.globals_patterns_lexer'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Lexer\GlobalPatternsLexer(${($_ = isset($this->services['nelmio_alice.fixture_builder.expression_language.lexer.function_lexer']) ? $this->services['nelmio_alice.fixture_builder.expression_language.lexer.function_lexer'] : $this->get('nelmio_alice.fixture_builder.expression_language.lexer.function_lexer')) && false ?: '_'});
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.expression_language.lexer.reference_escaper_lexer' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Lexer\ReferenceEscaperLexer
     */
    protected function getNelmioAlice_FixtureBuilder_ExpressionLanguage_Lexer_ReferenceEscaperLexerService()
    {
        return $this->services['nelmio_alice.fixture_builder.expression_language.lexer.reference_escaper_lexer'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Lexer\ReferenceEscaperLexer(${($_ = isset($this->services['nelmio_alice.fixture_builder.expression_language.lexer.globals_patterns_lexer']) ? $this->services['nelmio_alice.fixture_builder.expression_language.lexer.globals_patterns_lexer'] : $this->get('nelmio_alice.fixture_builder.expression_language.lexer.globals_patterns_lexer')) && false ?: '_'});
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.expression_language.lexer.reference_lexer' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Lexer\ReferenceLexer
     */
    protected function getNelmioAlice_FixtureBuilder_ExpressionLanguage_Lexer_ReferenceLexerService()
    {
        return $this->services['nelmio_alice.fixture_builder.expression_language.lexer.reference_lexer'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Lexer\ReferenceLexer();
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.expression_language.lexer.sub_patterns_lexer' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Lexer\SubPatternsLexer
     */
    protected function getNelmioAlice_FixtureBuilder_ExpressionLanguage_Lexer_SubPatternsLexerService()
    {
        return $this->services['nelmio_alice.fixture_builder.expression_language.lexer.sub_patterns_lexer'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Lexer\SubPatternsLexer(${($_ = isset($this->services['nelmio_alice.fixture_builder.expression_language.lexer.reference_lexer']) ? $this->services['nelmio_alice.fixture_builder.expression_language.lexer.reference_lexer'] : $this->get('nelmio_alice.fixture_builder.expression_language.lexer.reference_lexer')) && false ?: '_'});
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.expression_language.parser.function_fixture_reference_parser' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\FunctionFixtureReferenceParser
     */
    protected function getNelmioAlice_FixtureBuilder_ExpressionLanguage_Parser_FunctionFixtureReferenceParserService()
    {
        return $this->services['nelmio_alice.fixture_builder.expression_language.parser.function_fixture_reference_parser'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\FunctionFixtureReferenceParser(${($_ = isset($this->services['nelmio_alice.fixture_builder.expression_language.parser.string_parser']) ? $this->services['nelmio_alice.fixture_builder.expression_language.parser.string_parser'] : $this->get('nelmio_alice.fixture_builder.expression_language.parser.string_parser')) && false ?: '_'});
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.expression_language.parser.simple_parser' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\SimpleParser
     */
    protected function getNelmioAlice_FixtureBuilder_ExpressionLanguage_Parser_SimpleParserService()
    {
        return $this->services['nelmio_alice.fixture_builder.expression_language.parser.simple_parser'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\SimpleParser(${($_ = isset($this->services['nelmio_alice.fixture_builder.expression_language.lexer.empty_value_lexer']) ? $this->services['nelmio_alice.fixture_builder.expression_language.lexer.empty_value_lexer'] : $this->get('nelmio_alice.fixture_builder.expression_language.lexer.empty_value_lexer')) && false ?: '_'}, ${($_ = isset($this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.registry']) ? $this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.registry'] : $this->get('nelmio_alice.fixture_builder.expression_language.parser.token_parser.registry')) && false ?: '_'});
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.expression_language.parser.string_parser' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\StringMergerParser
     */
    protected function getNelmioAlice_FixtureBuilder_ExpressionLanguage_Parser_StringParserService()
    {
        return $this->services['nelmio_alice.fixture_builder.expression_language.parser.string_parser'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\StringMergerParser(${($_ = isset($this->services['nelmio_alice.fixture_builder.expression_language.parser.simple_parser']) ? $this->services['nelmio_alice.fixture_builder.expression_language.parser.simple_parser'] : $this->get('nelmio_alice.fixture_builder.expression_language.parser.simple_parser')) && false ?: '_'});
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.argument_escaper' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\ArgumentEscaper
     */
    protected function getNelmioAlice_FixtureBuilder_ExpressionLanguage_Parser_TokenParser_Chainable_ArgumentEscaperService()
    {
        return $this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.argument_escaper'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\ArgumentEscaper();
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.dynamic_array_token_parser' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\DynamicArrayTokenParser
     */
    protected function getNelmioAlice_FixtureBuilder_ExpressionLanguage_Parser_TokenParser_Chainable_DynamicArrayTokenParserService()
    {
        return $this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.dynamic_array_token_parser'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\DynamicArrayTokenParser();
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.escaped_value_token_parser' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\EscapedValueTokenParser
     */
    protected function getNelmioAlice_FixtureBuilder_ExpressionLanguage_Parser_TokenParser_Chainable_EscapedValueTokenParserService()
    {
        return $this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.escaped_value_token_parser'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\EscapedValueTokenParser();
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.fixture_list_reference_token_parser' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\FixtureListReferenceTokenParser
     */
    protected function getNelmioAlice_FixtureBuilder_ExpressionLanguage_Parser_TokenParser_Chainable_FixtureListReferenceTokenParserService()
    {
        return $this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.fixture_list_reference_token_parser'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\FixtureListReferenceTokenParser();
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.fixture_method_reference_token_parser' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\FixtureMethodReferenceTokenParser
     */
    protected function getNelmioAlice_FixtureBuilder_ExpressionLanguage_Parser_TokenParser_Chainable_FixtureMethodReferenceTokenParserService()
    {
        return $this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.fixture_method_reference_token_parser'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\FixtureMethodReferenceTokenParser();
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.fixture_range_reference_token_parser' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\FixtureRangeReferenceTokenParser
     */
    protected function getNelmioAlice_FixtureBuilder_ExpressionLanguage_Parser_TokenParser_Chainable_FixtureRangeReferenceTokenParserService()
    {
        return $this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.fixture_range_reference_token_parser'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\FixtureRangeReferenceTokenParser();
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.function_token_parser' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\FunctionTokenParser
     */
    protected function getNelmioAlice_FixtureBuilder_ExpressionLanguage_Parser_TokenParser_Chainable_FunctionTokenParserService()
    {
        return $this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.function_token_parser'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\FunctionTokenParser(${($_ = isset($this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.argument_escaper']) ? $this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.argument_escaper'] : $this->get('nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.argument_escaper')) && false ?: '_'});
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.identity_token_parser' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\IdentityTokenParser
     */
    protected function getNelmioAlice_FixtureBuilder_ExpressionLanguage_Parser_TokenParser_Chainable_IdentityTokenParserService()
    {
        return $this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.identity_token_parser'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\IdentityTokenParser(${($_ = isset($this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.function_token_parser']) ? $this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.function_token_parser'] : $this->get('nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.function_token_parser')) && false ?: '_'});
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.method_reference_token_parser' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\MethodReferenceTokenParser
     */
    protected function getNelmioAlice_FixtureBuilder_ExpressionLanguage_Parser_TokenParser_Chainable_MethodReferenceTokenParserService()
    {
        return $this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.method_reference_token_parser'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\MethodReferenceTokenParser();
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.optional_token_parser' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\OptionalTokenParser
     */
    protected function getNelmioAlice_FixtureBuilder_ExpressionLanguage_Parser_TokenParser_Chainable_OptionalTokenParserService()
    {
        return $this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.optional_token_parser'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\OptionalTokenParser();
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.parameter_token_parser' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\ParameterTokenParser
     */
    protected function getNelmioAlice_FixtureBuilder_ExpressionLanguage_Parser_TokenParser_Chainable_ParameterTokenParserService()
    {
        return $this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.parameter_token_parser'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\ParameterTokenParser();
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.property_reference_token_parser' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\PropertyReferenceTokenParser
     */
    protected function getNelmioAlice_FixtureBuilder_ExpressionLanguage_Parser_TokenParser_Chainable_PropertyReferenceTokenParserService()
    {
        return $this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.property_reference_token_parser'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\PropertyReferenceTokenParser();
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.simple_reference_token_parser' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\SimpleReferenceTokenParser
     */
    protected function getNelmioAlice_FixtureBuilder_ExpressionLanguage_Parser_TokenParser_Chainable_SimpleReferenceTokenParserService()
    {
        return $this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.simple_reference_token_parser'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\SimpleReferenceTokenParser();
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.string_array_token_parser' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\StringArrayTokenParser
     */
    protected function getNelmioAlice_FixtureBuilder_ExpressionLanguage_Parser_TokenParser_Chainable_StringArrayTokenParserService()
    {
        return $this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.string_array_token_parser'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\StringArrayTokenParser();
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.string_token_parser' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\StringTokenParser
     */
    protected function getNelmioAlice_FixtureBuilder_ExpressionLanguage_Parser_TokenParser_Chainable_StringTokenParserService()
    {
        return $this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.string_token_parser'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\StringTokenParser(${($_ = isset($this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.argument_escaper']) ? $this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.argument_escaper'] : $this->get('nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.argument_escaper')) && false ?: '_'});
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.tolerant_function_token_parser' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\TolerantFunctionTokenParser
     */
    protected function getNelmioAlice_FixtureBuilder_ExpressionLanguage_Parser_TokenParser_Chainable_TolerantFunctionTokenParserService()
    {
        return $this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.tolerant_function_token_parser'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\TolerantFunctionTokenParser(${($_ = isset($this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.identity_token_parser']) ? $this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.identity_token_parser'] : $this->get('nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.identity_token_parser')) && false ?: '_'});
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.variable_token_parser' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\VariableTokenParser
     */
    protected function getNelmioAlice_FixtureBuilder_ExpressionLanguage_Parser_TokenParser_Chainable_VariableTokenParserService()
    {
        return $this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.variable_token_parser'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\VariableTokenParser();
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.wildcard_reference_token_parser' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\WildcardReferenceTokenParser
     */
    protected function getNelmioAlice_FixtureBuilder_ExpressionLanguage_Parser_TokenParser_Chainable_WildcardReferenceTokenParserService()
    {
        return $this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.wildcard_reference_token_parser'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\WildcardReferenceTokenParser();
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.expression_language.parser.token_parser.registry' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\TokenParserRegistry
     */
    protected function getNelmioAlice_FixtureBuilder_ExpressionLanguage_Parser_TokenParser_RegistryService()
    {
        return $this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.registry'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\TokenParserRegistry(array(0 => ${($_ = isset($this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.dynamic_array_token_parser']) ? $this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.dynamic_array_token_parser'] : $this->get('nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.dynamic_array_token_parser')) && false ?: '_'}, 1 => ${($_ = isset($this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.escaped_value_token_parser']) ? $this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.escaped_value_token_parser'] : $this->get('nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.escaped_value_token_parser')) && false ?: '_'}, 2 => ${($_ = isset($this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.fixture_list_reference_token_parser']) ? $this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.fixture_list_reference_token_parser'] : $this->get('nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.fixture_list_reference_token_parser')) && false ?: '_'}, 3 => ${($_ = isset($this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.fixture_method_reference_token_parser']) ? $this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.fixture_method_reference_token_parser'] : $this->get('nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.fixture_method_reference_token_parser')) && false ?: '_'}, 4 => ${($_ = isset($this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.fixture_range_reference_token_parser']) ? $this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.fixture_range_reference_token_parser'] : $this->get('nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.fixture_range_reference_token_parser')) && false ?: '_'}, 5 => ${($_ = isset($this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.method_reference_token_parser']) ? $this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.method_reference_token_parser'] : $this->get('nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.method_reference_token_parser')) && false ?: '_'}, 6 => ${($_ = isset($this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.optional_token_parser']) ? $this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.optional_token_parser'] : $this->get('nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.optional_token_parser')) && false ?: '_'}, 7 => ${($_ = isset($this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.parameter_token_parser']) ? $this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.parameter_token_parser'] : $this->get('nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.parameter_token_parser')) && false ?: '_'}, 8 => ${($_ = isset($this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.property_reference_token_parser']) ? $this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.property_reference_token_parser'] : $this->get('nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.property_reference_token_parser')) && false ?: '_'}, 9 => ${($_ = isset($this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.simple_reference_token_parser']) ? $this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.simple_reference_token_parser'] : $this->get('nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.simple_reference_token_parser')) && false ?: '_'}, 10 => ${($_ = isset($this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.string_array_token_parser']) ? $this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.string_array_token_parser'] : $this->get('nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.string_array_token_parser')) && false ?: '_'}, 11 => ${($_ = isset($this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.string_token_parser']) ? $this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.string_token_parser'] : $this->get('nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.string_token_parser')) && false ?: '_'}, 12 => ${($_ = isset($this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.tolerant_function_token_parser']) ? $this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.tolerant_function_token_parser'] : $this->get('nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.tolerant_function_token_parser')) && false ?: '_'}, 13 => ${($_ = isset($this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.variable_token_parser']) ? $this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.variable_token_parser'] : $this->get('nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.variable_token_parser')) && false ?: '_'}, 14 => ${($_ = isset($this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.wildcard_reference_token_parser']) ? $this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.wildcard_reference_token_parser'] : $this->get('nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.wildcard_reference_token_parser')) && false ?: '_'}));
    }

    /**
     * Gets the public 'nelmio_alice.fixture_builder.simple' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\SimpleBuilder
     */
    protected function getNelmioAlice_FixtureBuilder_SimpleService()
    {
        return $this->services['nelmio_alice.fixture_builder.simple'] = new \Nelmio\Alice\FixtureBuilder\SimpleBuilder(${($_ = isset($this->services['nelmio_alice.fixture_builder.denormalizer.simple']) ? $this->services['nelmio_alice.fixture_builder.denormalizer.simple'] : $this->get('nelmio_alice.fixture_builder.denormalizer.simple')) && false ?: '_'});
    }

    /**
     * Gets the public 'nelmio_alice.generator.caller.chainable.configurator_method_call' shared service.
     *
     * @return \Nelmio\Alice\Generator\Caller\Chainable\ConfiguratorMethodCallProcessor
     */
    protected function getNelmioAlice_Generator_Caller_Chainable_ConfiguratorMethodCallService()
    {
        return $this->services['nelmio_alice.generator.caller.chainable.configurator_method_call'] = new \Nelmio\Alice\Generator\Caller\Chainable\ConfiguratorMethodCallProcessor();
    }

    /**
     * Gets the public 'nelmio_alice.generator.caller.chainable.method_call_with_reference' shared service.
     *
     * @return \Nelmio\Alice\Generator\Caller\Chainable\MethodCallWithReferenceProcessor
     */
    protected function getNelmioAlice_Generator_Caller_Chainable_MethodCallWithReferenceService()
    {
        return $this->services['nelmio_alice.generator.caller.chainable.method_call_with_reference'] = new \Nelmio\Alice\Generator\Caller\Chainable\MethodCallWithReferenceProcessor();
    }

    /**
     * Gets the public 'nelmio_alice.generator.caller.chainable.optional_method_call' shared service.
     *
     * @return \Nelmio\Alice\Generator\Caller\Chainable\OptionalMethodCallProcessor
     */
    protected function getNelmioAlice_Generator_Caller_Chainable_OptionalMethodCallService()
    {
        return $this->services['nelmio_alice.generator.caller.chainable.optional_method_call'] = new \Nelmio\Alice\Generator\Caller\Chainable\OptionalMethodCallProcessor();
    }

    /**
     * Gets the public 'nelmio_alice.generator.caller.chainable.simple_call' shared service.
     *
     * @return \Nelmio\Alice\Generator\Caller\Chainable\SimpleMethodCallProcessor
     */
    protected function getNelmioAlice_Generator_Caller_Chainable_SimpleCallService()
    {
        return $this->services['nelmio_alice.generator.caller.chainable.simple_call'] = new \Nelmio\Alice\Generator\Caller\Chainable\SimpleMethodCallProcessor();
    }

    /**
     * Gets the public 'nelmio_alice.generator.caller.registry' shared service.
     *
     * @return \Nelmio\Alice\Generator\Caller\CallProcessorRegistry
     */
    protected function getNelmioAlice_Generator_Caller_RegistryService()
    {
        return $this->services['nelmio_alice.generator.caller.registry'] = new \Nelmio\Alice\Generator\Caller\CallProcessorRegistry(array(0 => ${($_ = isset($this->services['nelmio_alice.generator.caller.chainable.configurator_method_call']) ? $this->services['nelmio_alice.generator.caller.chainable.configurator_method_call'] : $this->get('nelmio_alice.generator.caller.chainable.configurator_method_call')) && false ?: '_'}, 1 => ${($_ = isset($this->services['nelmio_alice.generator.caller.chainable.method_call_with_reference']) ? $this->services['nelmio_alice.generator.caller.chainable.method_call_with_reference'] : $this->get('nelmio_alice.generator.caller.chainable.method_call_with_reference')) && false ?: '_'}, 2 => ${($_ = isset($this->services['nelmio_alice.generator.caller.chainable.optional_method_call']) ? $this->services['nelmio_alice.generator.caller.chainable.optional_method_call'] : $this->get('nelmio_alice.generator.caller.chainable.optional_method_call')) && false ?: '_'}, 3 => ${($_ = isset($this->services['nelmio_alice.generator.caller.chainable.simple_call']) ? $this->services['nelmio_alice.generator.caller.chainable.simple_call'] : $this->get('nelmio_alice.generator.caller.chainable.simple_call')) && false ?: '_'}));
    }

    /**
     * Gets the public 'nelmio_alice.generator.caller.simple' shared service.
     *
     * @return \Nelmio\Alice\Generator\Caller\SimpleCaller
     */
    protected function getNelmioAlice_Generator_Caller_SimpleService()
    {
        return $this->services['nelmio_alice.generator.caller.simple'] = new \Nelmio\Alice\Generator\Caller\SimpleCaller(${($_ = isset($this->services['nelmio_alice.generator.caller.registry']) ? $this->services['nelmio_alice.generator.caller.registry'] : $this->get('nelmio_alice.generator.caller.registry')) && false ?: '_'}, ${($_ = isset($this->services['nelmio_alice.generator.resolver.value.registry']) ? $this->services['nelmio_alice.generator.resolver.value.registry'] : $this->get('nelmio_alice.generator.resolver.value.registry')) && false ?: '_'});
    }

    /**
     * Gets the public 'nelmio_alice.generator.double_pass' shared service.
     *
     * @return \Nelmio\Alice\Generator\DoublePassGenerator
     */
    protected function getNelmioAlice_Generator_DoublePassService()
    {
        return $this->services['nelmio_alice.generator.double_pass'] = new \Nelmio\Alice\Generator\DoublePassGenerator(${($_ = isset($this->services['nelmio_alice.generator.resolver.fixture_set.remove_conflicting_objects']) ? $this->services['nelmio_alice.generator.resolver.fixture_set.remove_conflicting_objects'] : $this->get('nelmio_alice.generator.resolver.fixture_set.remove_conflicting_objects')) && false ?: '_'}, ${($_ = isset($this->services['nelmio_alice.generator.object_generator.complete']) ? $this->services['nelmio_alice.generator.object_generator.complete'] : $this->get('nelmio_alice.generator.object_generator.complete')) && false ?: '_'});
    }

    /**
     * Gets the public 'nelmio_alice.generator.hydrator.property.symfony_property_access' shared service.
     *
     * @return \Nelmio\Alice\Generator\Hydrator\Property\SymfonyPropertyAccessorHydrator
     */
    protected function getNelmioAlice_Generator_Hydrator_Property_SymfonyPropertyAccessService()
    {
        return $this->services['nelmio_alice.generator.hydrator.property.symfony_property_access'] = new \Nelmio\Alice\Generator\Hydrator\Property\SymfonyPropertyAccessorHydrator(${($_ = isset($this->services['nelmio_alice.property_accessor.std']) ? $this->services['nelmio_alice.property_accessor.std'] : $this->get('nelmio_alice.property_accessor.std')) && false ?: '_'});
    }

    /**
     * Gets the public 'nelmio_alice.generator.hydrator.simple' shared service.
     *
     * @return \Nelmio\Alice\Generator\Hydrator\SimpleHydrator
     */
    protected function getNelmioAlice_Generator_Hydrator_SimpleService()
    {
        return $this->services['nelmio_alice.generator.hydrator.simple'] = new \Nelmio\Alice\Generator\Hydrator\SimpleHydrator(${($_ = isset($this->services['nelmio_alice.generator.hydrator.property.symfony_property_access']) ? $this->services['nelmio_alice.generator.hydrator.property.symfony_property_access'] : $this->get('nelmio_alice.generator.hydrator.property.symfony_property_access')) && false ?: '_'});
    }

    /**
     * Gets the public 'nelmio_alice.generator.instantiator.chainable.no_caller_method_instantiator' shared service.
     *
     * @return \Nelmio\Alice\Generator\Instantiator\Chainable\NoCallerMethodCallInstantiator
     */
    protected function getNelmioAlice_Generator_Instantiator_Chainable_NoCallerMethodInstantiatorService()
    {
        return $this->services['nelmio_alice.generator.instantiator.chainable.no_caller_method_instantiator'] = new \Nelmio\Alice\Generator\Instantiator\Chainable\NoCallerMethodCallInstantiator();
    }

    /**
     * Gets the public 'nelmio_alice.generator.instantiator.chainable.no_method_call_instantiator' shared service.
     *
     * @return \Nelmio\Alice\Generator\Instantiator\Chainable\NoMethodCallInstantiator
     */
    protected function getNelmioAlice_Generator_Instantiator_Chainable_NoMethodCallInstantiatorService()
    {
        return $this->services['nelmio_alice.generator.instantiator.chainable.no_method_call_instantiator'] = new \Nelmio\Alice\Generator\Instantiator\Chainable\NoMethodCallInstantiator();
    }

    /**
     * Gets the public 'nelmio_alice.generator.instantiator.chainable.null_constructor_instantiator' shared service.
     *
     * @return \Nelmio\Alice\Generator\Instantiator\Chainable\NullConstructorInstantiator
     */
    protected function getNelmioAlice_Generator_Instantiator_Chainable_NullConstructorInstantiatorService()
    {
        return $this->services['nelmio_alice.generator.instantiator.chainable.null_constructor_instantiator'] = new \Nelmio\Alice\Generator\Instantiator\Chainable\NullConstructorInstantiator();
    }

    /**
     * Gets the public 'nelmio_alice.generator.instantiator.chainable.static_factory_instantiator' shared service.
     *
     * @return \Nelmio\Alice\Generator\Instantiator\Chainable\StaticFactoryInstantiator
     */
    protected function getNelmioAlice_Generator_Instantiator_Chainable_StaticFactoryInstantiatorService()
    {
        return $this->services['nelmio_alice.generator.instantiator.chainable.static_factory_instantiator'] = new \Nelmio\Alice\Generator\Instantiator\Chainable\StaticFactoryInstantiator();
    }

    /**
     * Gets the public 'nelmio_alice.generator.instantiator.existing_instance' shared service.
     *
     * @return \Nelmio\Alice\Generator\Instantiator\ExistingInstanceInstantiator
     */
    protected function getNelmioAlice_Generator_Instantiator_ExistingInstanceService()
    {
        return $this->services['nelmio_alice.generator.instantiator.existing_instance'] = new \Nelmio\Alice\Generator\Instantiator\ExistingInstanceInstantiator(${($_ = isset($this->services['nelmio_alice.generator.instantiator.resolver']) ? $this->services['nelmio_alice.generator.instantiator.resolver'] : $this->get('nelmio_alice.generator.instantiator.resolver')) && false ?: '_'});
    }

    /**
     * Gets the public 'nelmio_alice.generator.instantiator.registry' shared service.
     *
     * @return \Nelmio\Alice\Generator\Instantiator\InstantiatorRegistry
     */
    protected function getNelmioAlice_Generator_Instantiator_RegistryService()
    {
        return $this->services['nelmio_alice.generator.instantiator.registry'] = new \Nelmio\Alice\Generator\Instantiator\InstantiatorRegistry(array(0 => ${($_ = isset($this->services['nelmio_alice.generator.instantiator.chainable.no_caller_method_instantiator']) ? $this->services['nelmio_alice.generator.instantiator.chainable.no_caller_method_instantiator'] : $this->get('nelmio_alice.generator.instantiator.chainable.no_caller_method_instantiator')) && false ?: '_'}, 1 => ${($_ = isset($this->services['nelmio_alice.generator.instantiator.chainable.null_constructor_instantiator']) ? $this->services['nelmio_alice.generator.instantiator.chainable.null_constructor_instantiator'] : $this->get('nelmio_alice.generator.instantiator.chainable.null_constructor_instantiator')) && false ?: '_'}, 2 => ${($_ = isset($this->services['nelmio_alice.generator.instantiator.chainable.no_method_call_instantiator']) ? $this->services['nelmio_alice.generator.instantiator.chainable.no_method_call_instantiator'] : $this->get('nelmio_alice.generator.instantiator.chainable.no_method_call_instantiator')) && false ?: '_'}, 3 => ${($_ = isset($this->services['nelmio_alice.generator.instantiator.chainable.static_factory_instantiator']) ? $this->services['nelmio_alice.generator.instantiator.chainable.static_factory_instantiator'] : $this->get('nelmio_alice.generator.instantiator.chainable.static_factory_instantiator')) && false ?: '_'}, 4 => ${($_ = isset($this->services['hautelook_alice.alice.generator.instantiator.chainable.instantiated_reference_instantiator']) ? $this->services['hautelook_alice.alice.generator.instantiator.chainable.instantiated_reference_instantiator'] : $this->get('hautelook_alice.alice.generator.instantiator.chainable.instantiated_reference_instantiator')) && false ?: '_'}));
    }

    /**
     * Gets the public 'nelmio_alice.generator.instantiator.resolver' shared service.
     *
     * @return \Nelmio\Alice\Generator\Instantiator\InstantiatorResolver
     */
    protected function getNelmioAlice_Generator_Instantiator_ResolverService()
    {
        return $this->services['nelmio_alice.generator.instantiator.resolver'] = new \Nelmio\Alice\Generator\Instantiator\InstantiatorResolver(${($_ = isset($this->services['nelmio_alice.generator.instantiator.registry']) ? $this->services['nelmio_alice.generator.instantiator.registry'] : $this->get('nelmio_alice.generator.instantiator.registry')) && false ?: '_'});
    }

    /**
     * Gets the public 'nelmio_alice.generator.object_generator.complete' shared service.
     *
     * @return \Nelmio\Alice\Generator\ObjectGenerator\CompleteObjectGenerator
     */
    protected function getNelmioAlice_Generator_ObjectGenerator_CompleteService()
    {
        return $this->services['nelmio_alice.generator.object_generator.complete'] = new \Nelmio\Alice\Generator\ObjectGenerator\CompleteObjectGenerator(${($_ = isset($this->services['nelmio_alice.generator.object_generator.simple']) ? $this->services['nelmio_alice.generator.object_generator.simple'] : $this->get('nelmio_alice.generator.object_generator.simple')) && false ?: '_'});
    }

    /**
     * Gets the public 'nelmio_alice.generator.object_generator.simple' shared service.
     *
     * @return \Nelmio\Alice\Generator\ObjectGenerator\SimpleObjectGenerator
     */
    protected function getNelmioAlice_Generator_ObjectGenerator_SimpleService()
    {
        return $this->services['nelmio_alice.generator.object_generator.simple'] = new \Nelmio\Alice\Generator\ObjectGenerator\SimpleObjectGenerator(${($_ = isset($this->services['nelmio_alice.generator.resolver.value.registry']) ? $this->services['nelmio_alice.generator.resolver.value.registry'] : $this->get('nelmio_alice.generator.resolver.value.registry')) && false ?: '_'}, ${($_ = isset($this->services['nelmio_alice.generator.instantiator.existing_instance']) ? $this->services['nelmio_alice.generator.instantiator.existing_instance'] : $this->get('nelmio_alice.generator.instantiator.existing_instance')) && false ?: '_'}, ${($_ = isset($this->services['nelmio_alice.generator.hydrator.simple']) ? $this->services['nelmio_alice.generator.hydrator.simple'] : $this->get('nelmio_alice.generator.hydrator.simple')) && false ?: '_'}, ${($_ = isset($this->services['nelmio_alice.generator.caller.simple']) ? $this->services['nelmio_alice.generator.caller.simple'] : $this->get('nelmio_alice.generator.caller.simple')) && false ?: '_'});
    }

    /**
     * Gets the public 'nelmio_alice.generator.resolver.fixture_bag.template_bag' shared service.
     *
     * @return \Nelmio\Alice\Generator\Resolver\Fixture\TemplateFixtureBagResolver
     */
    protected function getNelmioAlice_Generator_Resolver_FixtureBag_TemplateBagService()
    {
        return $this->services['nelmio_alice.generator.resolver.fixture_bag.template_bag'] = new \Nelmio\Alice\Generator\Resolver\Fixture\TemplateFixtureBagResolver();
    }

    /**
     * Gets the public 'nelmio_alice.generator.resolver.fixture_set.remove_conflicting_objects' shared service.
     *
     * @return \Nelmio\Alice\Generator\Resolver\FixtureSet\RemoveConflictingObjectsResolver
     */
    protected function getNelmioAlice_Generator_Resolver_FixtureSet_RemoveConflictingObjectsService()
    {
        return $this->services['nelmio_alice.generator.resolver.fixture_set.remove_conflicting_objects'] = new \Nelmio\Alice\Generator\Resolver\FixtureSet\RemoveConflictingObjectsResolver(${($_ = isset($this->services['nelmio_alice.generator.resolver.fixture_set.simple']) ? $this->services['nelmio_alice.generator.resolver.fixture_set.simple'] : $this->get('nelmio_alice.generator.resolver.fixture_set.simple')) && false ?: '_'});
    }

    /**
     * Gets the public 'nelmio_alice.generator.resolver.fixture_set.simple' shared service.
     *
     * @return \Nelmio\Alice\Generator\Resolver\FixtureSet\SimpleFixtureSetResolver
     */
    protected function getNelmioAlice_Generator_Resolver_FixtureSet_SimpleService()
    {
        return $this->services['nelmio_alice.generator.resolver.fixture_set.simple'] = new \Nelmio\Alice\Generator\Resolver\FixtureSet\SimpleFixtureSetResolver(${($_ = isset($this->services['nelmio_alice.generator.resolver.parameter_bag.remove_conflicting_parameters']) ? $this->services['nelmio_alice.generator.resolver.parameter_bag.remove_conflicting_parameters'] : $this->get('nelmio_alice.generator.resolver.parameter_bag.remove_conflicting_parameters')) && false ?: '_'}, ${($_ = isset($this->services['nelmio_alice.generator.resolver.fixture_bag.template_bag']) ? $this->services['nelmio_alice.generator.resolver.fixture_bag.template_bag'] : $this->get('nelmio_alice.generator.resolver.fixture_bag.template_bag')) && false ?: '_'});
    }

    /**
     * Gets the public 'nelmio_alice.generator.resolver.parameter.chainable.array_parameter_resolver' shared service.
     *
     * @return \Nelmio\Alice\Generator\Resolver\Parameter\Chainable\ArrayParameterResolver
     */
    protected function getNelmioAlice_Generator_Resolver_Parameter_Chainable_ArrayParameterResolverService()
    {
        return $this->services['nelmio_alice.generator.resolver.parameter.chainable.array_parameter_resolver'] = new \Nelmio\Alice\Generator\Resolver\Parameter\Chainable\ArrayParameterResolver();
    }

    /**
     * Gets the public 'nelmio_alice.generator.resolver.parameter.chainable.recursive_parameter_resolver' shared service.
     *
     * @return \Nelmio\Alice\Generator\Resolver\Parameter\Chainable\RecursiveParameterResolver
     */
    protected function getNelmioAlice_Generator_Resolver_Parameter_Chainable_RecursiveParameterResolverService()
    {
        return $this->services['nelmio_alice.generator.resolver.parameter.chainable.recursive_parameter_resolver'] = new \Nelmio\Alice\Generator\Resolver\Parameter\Chainable\RecursiveParameterResolver(${($_ = isset($this->services['nelmio_alice.generator.resolver.parameter.chainable.string_parameter_resolver']) ? $this->services['nelmio_alice.generator.resolver.parameter.chainable.string_parameter_resolver'] : $this->get('nelmio_alice.generator.resolver.parameter.chainable.string_parameter_resolver')) && false ?: '_'}, 5);
    }

    /**
     * Gets the public 'nelmio_alice.generator.resolver.parameter.chainable.static_parameter_resolver' shared service.
     *
     * @return \Nelmio\Alice\Generator\Resolver\Parameter\Chainable\StaticParameterResolver
     */
    protected function getNelmioAlice_Generator_Resolver_Parameter_Chainable_StaticParameterResolverService()
    {
        return $this->services['nelmio_alice.generator.resolver.parameter.chainable.static_parameter_resolver'] = new \Nelmio\Alice\Generator\Resolver\Parameter\Chainable\StaticParameterResolver();
    }

    /**
     * Gets the public 'nelmio_alice.generator.resolver.parameter.chainable.string_parameter_resolver' shared service.
     *
     * @return \Nelmio\Alice\Generator\Resolver\Parameter\Chainable\StringParameterResolver
     */
    protected function getNelmioAlice_Generator_Resolver_Parameter_Chainable_StringParameterResolverService()
    {
        return $this->services['nelmio_alice.generator.resolver.parameter.chainable.string_parameter_resolver'] = new \Nelmio\Alice\Generator\Resolver\Parameter\Chainable\StringParameterResolver();
    }

    /**
     * Gets the public 'nelmio_alice.generator.resolver.parameter.registry' shared service.
     *
     * @return \Nelmio\Alice\Generator\Resolver\Parameter\ParameterResolverRegistry
     */
    protected function getNelmioAlice_Generator_Resolver_Parameter_RegistryService()
    {
        return $this->services['nelmio_alice.generator.resolver.parameter.registry'] = new \Nelmio\Alice\Generator\Resolver\Parameter\ParameterResolverRegistry(array(0 => ${($_ = isset($this->services['nelmio_alice.generator.resolver.parameter.chainable.static_parameter_resolver']) ? $this->services['nelmio_alice.generator.resolver.parameter.chainable.static_parameter_resolver'] : $this->get('nelmio_alice.generator.resolver.parameter.chainable.static_parameter_resolver')) && false ?: '_'}, 1 => ${($_ = isset($this->services['nelmio_alice.generator.resolver.parameter.chainable.array_parameter_resolver']) ? $this->services['nelmio_alice.generator.resolver.parameter.chainable.array_parameter_resolver'] : $this->get('nelmio_alice.generator.resolver.parameter.chainable.array_parameter_resolver')) && false ?: '_'}, 2 => ${($_ = isset($this->services['nelmio_alice.generator.resolver.parameter.chainable.recursive_parameter_resolver']) ? $this->services['nelmio_alice.generator.resolver.parameter.chainable.recursive_parameter_resolver'] : $this->get('nelmio_alice.generator.resolver.parameter.chainable.recursive_parameter_resolver')) && false ?: '_'}));
    }

    /**
     * Gets the public 'nelmio_alice.generator.resolver.parameter_bag.remove_conflicting_parameters' shared service.
     *
     * @return \Nelmio\Alice\Generator\Resolver\Parameter\RemoveConflictingParametersParameterBagResolver
     */
    protected function getNelmioAlice_Generator_Resolver_ParameterBag_RemoveConflictingParametersService()
    {
        return $this->services['nelmio_alice.generator.resolver.parameter_bag.remove_conflicting_parameters'] = new \Nelmio\Alice\Generator\Resolver\Parameter\RemoveConflictingParametersParameterBagResolver(${($_ = isset($this->services['nelmio_alice.generator.resolver.parameter_bag.simple']) ? $this->services['nelmio_alice.generator.resolver.parameter_bag.simple'] : $this->get('nelmio_alice.generator.resolver.parameter_bag.simple')) && false ?: '_'});
    }

    /**
     * Gets the public 'nelmio_alice.generator.resolver.parameter_bag.simple' shared service.
     *
     * @return \Nelmio\Alice\Generator\Resolver\Parameter\SimpleParameterBagResolver
     */
    protected function getNelmioAlice_Generator_Resolver_ParameterBag_SimpleService()
    {
        return $this->services['nelmio_alice.generator.resolver.parameter_bag.simple'] = new \Nelmio\Alice\Generator\Resolver\Parameter\SimpleParameterBagResolver(${($_ = isset($this->services['nelmio_alice.generator.resolver.parameter.registry']) ? $this->services['nelmio_alice.generator.resolver.parameter.registry'] : $this->get('nelmio_alice.generator.resolver.parameter.registry')) && false ?: '_'});
    }

    /**
     * Gets the public 'nelmio_alice.generator.resolver.value.chainable.array_value_resolver' shared service.
     *
     * @return \Nelmio\Alice\Generator\Resolver\Value\Chainable\ArrayValueResolver
     */
    protected function getNelmioAlice_Generator_Resolver_Value_Chainable_ArrayValueResolverService()
    {
        return $this->services['nelmio_alice.generator.resolver.value.chainable.array_value_resolver'] = new \Nelmio\Alice\Generator\Resolver\Value\Chainable\ArrayValueResolver();
    }

    /**
     * Gets the public 'nelmio_alice.generator.resolver.value.chainable.dynamic_array_value_resolver' shared service.
     *
     * @return \Nelmio\Alice\Generator\Resolver\Value\Chainable\DynamicArrayValueResolver
     */
    protected function getNelmioAlice_Generator_Resolver_Value_Chainable_DynamicArrayValueResolverService()
    {
        return $this->services['nelmio_alice.generator.resolver.value.chainable.dynamic_array_value_resolver'] = new \Nelmio\Alice\Generator\Resolver\Value\Chainable\DynamicArrayValueResolver(NULL, 5);
    }

    /**
     * Gets the public 'nelmio_alice.generator.resolver.value.chainable.evaluated_value_resolver' shared service.
     *
     * @return \Nelmio\Alice\Generator\Resolver\Value\Chainable\EvaluatedValueResolver
     */
    protected function getNelmioAlice_Generator_Resolver_Value_Chainable_EvaluatedValueResolverService()
    {
        return $this->services['nelmio_alice.generator.resolver.value.chainable.evaluated_value_resolver'] = new \Nelmio\Alice\Generator\Resolver\Value\Chainable\EvaluatedValueResolver();
    }

    /**
     * Gets the public 'nelmio_alice.generator.resolver.value.chainable.faker_value_resolver' shared service.
     *
     * @return \Nelmio\Alice\Generator\Resolver\Value\Chainable\FakerFunctionCallValueResolver
     */
    protected function getNelmioAlice_Generator_Resolver_Value_Chainable_FakerValueResolverService()
    {
        return $this->services['nelmio_alice.generator.resolver.value.chainable.faker_value_resolver'] = new \Nelmio\Alice\Generator\Resolver\Value\Chainable\FakerFunctionCallValueResolver(${($_ = isset($this->services['nelmio_alice.faker.generator']) ? $this->services['nelmio_alice.faker.generator'] : $this->get('nelmio_alice.faker.generator')) && false ?: '_'});
    }

    /**
     * Gets the public 'nelmio_alice.generator.resolver.value.chainable.fixture_method_call_reference_resolver' shared service.
     *
     * @return \Nelmio\Alice\Generator\Resolver\Value\Chainable\FixtureMethodCallReferenceResolver
     */
    protected function getNelmioAlice_Generator_Resolver_Value_Chainable_FixtureMethodCallReferenceResolverService()
    {
        return $this->services['nelmio_alice.generator.resolver.value.chainable.fixture_method_call_reference_resolver'] = new \Nelmio\Alice\Generator\Resolver\Value\Chainable\FixtureMethodCallReferenceResolver();
    }

    /**
     * Gets the public 'nelmio_alice.generator.resolver.value.chainable.fixture_property_reference_resolver' shared service.
     *
     * @return \Nelmio\Alice\Generator\Resolver\Value\Chainable\FixturePropertyReferenceResolver
     */
    protected function getNelmioAlice_Generator_Resolver_Value_Chainable_FixturePropertyReferenceResolverService()
    {
        return $this->services['nelmio_alice.generator.resolver.value.chainable.fixture_property_reference_resolver'] = new \Nelmio\Alice\Generator\Resolver\Value\Chainable\FixturePropertyReferenceResolver(${($_ = isset($this->services['nelmio_alice.property_accessor.std']) ? $this->services['nelmio_alice.property_accessor.std'] : $this->get('nelmio_alice.property_accessor.std')) && false ?: '_'});
    }

    /**
     * Gets the public 'nelmio_alice.generator.resolver.value.chainable.fixture_reference_resolver' shared service.
     *
     * @return \Nelmio\Alice\Generator\Resolver\Value\Chainable\FixtureReferenceResolver
     */
    protected function getNelmioAlice_Generator_Resolver_Value_Chainable_FixtureReferenceResolverService()
    {
        return $this->services['nelmio_alice.generator.resolver.value.chainable.fixture_reference_resolver'] = new \Nelmio\Alice\Generator\Resolver\Value\Chainable\FixtureReferenceResolver();
    }

    /**
     * Gets the public 'nelmio_alice.generator.resolver.value.chainable.fixture_wildcard_reference_resolver' shared service.
     *
     * @return \Nelmio\Alice\Generator\Resolver\Value\Chainable\FixtureWildcardReferenceResolver
     */
    protected function getNelmioAlice_Generator_Resolver_Value_Chainable_FixtureWildcardReferenceResolverService()
    {
        return $this->services['nelmio_alice.generator.resolver.value.chainable.fixture_wildcard_reference_resolver'] = new \Nelmio\Alice\Generator\Resolver\Value\Chainable\FixtureWildcardReferenceResolver();
    }

    /**
     * Gets the public 'nelmio_alice.generator.resolver.value.chainable.function_argument_resolver' shared service.
     *
     * @return \Nelmio\Alice\Generator\Resolver\Value\Chainable\FunctionCallArgumentResolver
     */
    protected function getNelmioAlice_Generator_Resolver_Value_Chainable_FunctionArgumentResolverService()
    {
        return $this->services['nelmio_alice.generator.resolver.value.chainable.function_argument_resolver'] = new \Nelmio\Alice\Generator\Resolver\Value\Chainable\FunctionCallArgumentResolver(${($_ = isset($this->services['nelmio_alice.generator.resolver.value.chainable.php_value_resolver']) ? $this->services['nelmio_alice.generator.resolver.value.chainable.php_value_resolver'] : $this->get('nelmio_alice.generator.resolver.value.chainable.php_value_resolver')) && false ?: '_'});
    }

    /**
     * Gets the public 'nelmio_alice.generator.resolver.value.chainable.list_value_resolver' shared service.
     *
     * @return \Nelmio\Alice\Generator\Resolver\Value\Chainable\ListValueResolver
     */
    protected function getNelmioAlice_Generator_Resolver_Value_Chainable_ListValueResolverService()
    {
        return $this->services['nelmio_alice.generator.resolver.value.chainable.list_value_resolver'] = new \Nelmio\Alice\Generator\Resolver\Value\Chainable\ListValueResolver();
    }

    /**
     * Gets the public 'nelmio_alice.generator.resolver.value.chainable.optional_value_resolver' shared service.
     *
     * @return \Nelmio\Alice\Generator\Resolver\Value\Chainable\OptionalValueResolver
     */
    protected function getNelmioAlice_Generator_Resolver_Value_Chainable_OptionalValueResolverService()
    {
        return $this->services['nelmio_alice.generator.resolver.value.chainable.optional_value_resolver'] = new \Nelmio\Alice\Generator\Resolver\Value\Chainable\OptionalValueResolver();
    }

    /**
     * Gets the public 'nelmio_alice.generator.resolver.value.chainable.parameter_value_resolver' shared service.
     *
     * @return \Nelmio\Alice\Generator\Resolver\Value\Chainable\ParameterValueResolver
     */
    protected function getNelmioAlice_Generator_Resolver_Value_Chainable_ParameterValueResolverService()
    {
        return $this->services['nelmio_alice.generator.resolver.value.chainable.parameter_value_resolver'] = new \Nelmio\Alice\Generator\Resolver\Value\Chainable\ParameterValueResolver();
    }

    /**
     * Gets the public 'nelmio_alice.generator.resolver.value.chainable.php_value_resolver' shared service.
     *
     * @return \Nelmio\Alice\Generator\Resolver\Value\Chainable\PhpFunctionCallValueResolver
     */
    protected function getNelmioAlice_Generator_Resolver_Value_Chainable_PhpValueResolverService()
    {
        return $this->services['nelmio_alice.generator.resolver.value.chainable.php_value_resolver'] = new \Nelmio\Alice\Generator\Resolver\Value\Chainable\PhpFunctionCallValueResolver(array(0 => 'current'), ${($_ = isset($this->services['nelmio_alice.generator.resolver.value.chainable.faker_value_resolver']) ? $this->services['nelmio_alice.generator.resolver.value.chainable.faker_value_resolver'] : $this->get('nelmio_alice.generator.resolver.value.chainable.faker_value_resolver')) && false ?: '_'});
    }

    /**
     * Gets the public 'nelmio_alice.generator.resolver.value.chainable.self_fixture_reference_resolver' shared service.
     *
     * @return \Nelmio\Alice\Generator\Resolver\Value\Chainable\SelfFixtureReferenceResolver
     */
    protected function getNelmioAlice_Generator_Resolver_Value_Chainable_SelfFixtureReferenceResolverService()
    {
        return $this->services['nelmio_alice.generator.resolver.value.chainable.self_fixture_reference_resolver'] = new \Nelmio\Alice\Generator\Resolver\Value\Chainable\SelfFixtureReferenceResolver(${($_ = isset($this->services['nelmio_alice.generator.resolver.value.chainable.fixture_reference_resolver']) ? $this->services['nelmio_alice.generator.resolver.value.chainable.fixture_reference_resolver'] : $this->get('nelmio_alice.generator.resolver.value.chainable.fixture_reference_resolver')) && false ?: '_'});
    }

    /**
     * Gets the public 'nelmio_alice.generator.resolver.value.chainable.unique_value_resolver' shared service.
     *
     * @return \Nelmio\Alice\Generator\Resolver\Value\Chainable\UniqueValueResolver
     */
    protected function getNelmioAlice_Generator_Resolver_Value_Chainable_UniqueValueResolverService()
    {
        return $this->services['nelmio_alice.generator.resolver.value.chainable.unique_value_resolver'] = new \Nelmio\Alice\Generator\Resolver\Value\Chainable\UniqueValueResolver(${($_ = isset($this->services['nelmio_alice.generator.resolver.value.unique_values_pool']) ? $this->services['nelmio_alice.generator.resolver.value.unique_values_pool'] : $this->get('nelmio_alice.generator.resolver.value.unique_values_pool')) && false ?: '_'}, NULL, 150);
    }

    /**
     * Gets the public 'nelmio_alice.generator.resolver.value.chainable.unresolved_fixture_reference_resolver' shared service.
     *
     * @return \Nelmio\Alice\Generator\Resolver\Value\Chainable\UnresolvedFixtureReferenceIdResolver
     */
    protected function getNelmioAlice_Generator_Resolver_Value_Chainable_UnresolvedFixtureReferenceResolverService()
    {
        return $this->services['nelmio_alice.generator.resolver.value.chainable.unresolved_fixture_reference_resolver'] = new \Nelmio\Alice\Generator\Resolver\Value\Chainable\UnresolvedFixtureReferenceIdResolver(${($_ = isset($this->services['nelmio_alice.generator.resolver.value.chainable.self_fixture_reference_resolver']) ? $this->services['nelmio_alice.generator.resolver.value.chainable.self_fixture_reference_resolver'] : $this->get('nelmio_alice.generator.resolver.value.chainable.self_fixture_reference_resolver')) && false ?: '_'});
    }

    /**
     * Gets the public 'nelmio_alice.generator.resolver.value.chainable.value_for_current_value_resolver' shared service.
     *
     * @return \Nelmio\Alice\Generator\Resolver\Value\Chainable\ValueForCurrentValueResolver
     */
    protected function getNelmioAlice_Generator_Resolver_Value_Chainable_ValueForCurrentValueResolverService()
    {
        return $this->services['nelmio_alice.generator.resolver.value.chainable.value_for_current_value_resolver'] = new \Nelmio\Alice\Generator\Resolver\Value\Chainable\ValueForCurrentValueResolver();
    }

    /**
     * Gets the public 'nelmio_alice.generator.resolver.value.chainable.variable_value_resolver' shared service.
     *
     * @return \Nelmio\Alice\Generator\Resolver\Value\Chainable\VariableValueResolver
     */
    protected function getNelmioAlice_Generator_Resolver_Value_Chainable_VariableValueResolverService()
    {
        return $this->services['nelmio_alice.generator.resolver.value.chainable.variable_value_resolver'] = new \Nelmio\Alice\Generator\Resolver\Value\Chainable\VariableValueResolver();
    }

    /**
     * Gets the public 'nelmio_alice.generator.resolver.value.registry' shared service.
     *
     * @return \Nelmio\Alice\Generator\Resolver\Value\ValueResolverRegistry
     */
    protected function getNelmioAlice_Generator_Resolver_Value_RegistryService()
    {
        return $this->services['nelmio_alice.generator.resolver.value.registry'] = new \Nelmio\Alice\Generator\Resolver\Value\ValueResolverRegistry(array(0 => ${($_ = isset($this->services['nelmio_alice.generator.resolver.value.chainable.array_value_resolver']) ? $this->services['nelmio_alice.generator.resolver.value.chainable.array_value_resolver'] : $this->get('nelmio_alice.generator.resolver.value.chainable.array_value_resolver')) && false ?: '_'}, 1 => ${($_ = isset($this->services['nelmio_alice.generator.resolver.value.chainable.dynamic_array_value_resolver']) ? $this->services['nelmio_alice.generator.resolver.value.chainable.dynamic_array_value_resolver'] : $this->get('nelmio_alice.generator.resolver.value.chainable.dynamic_array_value_resolver')) && false ?: '_'}, 2 => ${($_ = isset($this->services['nelmio_alice.generator.resolver.value.chainable.evaluated_value_resolver']) ? $this->services['nelmio_alice.generator.resolver.value.chainable.evaluated_value_resolver'] : $this->get('nelmio_alice.generator.resolver.value.chainable.evaluated_value_resolver')) && false ?: '_'}, 3 => ${($_ = isset($this->services['nelmio_alice.generator.resolver.value.chainable.function_argument_resolver']) ? $this->services['nelmio_alice.generator.resolver.value.chainable.function_argument_resolver'] : $this->get('nelmio_alice.generator.resolver.value.chainable.function_argument_resolver')) && false ?: '_'}, 4 => ${($_ = isset($this->services['nelmio_alice.generator.resolver.value.chainable.fixture_property_reference_resolver']) ? $this->services['nelmio_alice.generator.resolver.value.chainable.fixture_property_reference_resolver'] : $this->get('nelmio_alice.generator.resolver.value.chainable.fixture_property_reference_resolver')) && false ?: '_'}, 5 => ${($_ = isset($this->services['nelmio_alice.generator.resolver.value.chainable.fixture_method_call_reference_resolver']) ? $this->services['nelmio_alice.generator.resolver.value.chainable.fixture_method_call_reference_resolver'] : $this->get('nelmio_alice.generator.resolver.value.chainable.fixture_method_call_reference_resolver')) && false ?: '_'}, 6 => ${($_ = isset($this->services['nelmio_alice.generator.resolver.value.chainable.unresolved_fixture_reference_resolver']) ? $this->services['nelmio_alice.generator.resolver.value.chainable.unresolved_fixture_reference_resolver'] : $this->get('nelmio_alice.generator.resolver.value.chainable.unresolved_fixture_reference_resolver')) && false ?: '_'}, 7 => ${($_ = isset($this->services['nelmio_alice.generator.resolver.value.chainable.fixture_wildcard_reference_resolver']) ? $this->services['nelmio_alice.generator.resolver.value.chainable.fixture_wildcard_reference_resolver'] : $this->get('nelmio_alice.generator.resolver.value.chainable.fixture_wildcard_reference_resolver')) && false ?: '_'}, 8 => ${($_ = isset($this->services['nelmio_alice.generator.resolver.value.chainable.list_value_resolver']) ? $this->services['nelmio_alice.generator.resolver.value.chainable.list_value_resolver'] : $this->get('nelmio_alice.generator.resolver.value.chainable.list_value_resolver')) && false ?: '_'}, 9 => ${($_ = isset($this->services['nelmio_alice.generator.resolver.value.chainable.optional_value_resolver']) ? $this->services['nelmio_alice.generator.resolver.value.chainable.optional_value_resolver'] : $this->get('nelmio_alice.generator.resolver.value.chainable.optional_value_resolver')) && false ?: '_'}, 10 => ${($_ = isset($this->services['nelmio_alice.generator.resolver.value.chainable.parameter_value_resolver']) ? $this->services['nelmio_alice.generator.resolver.value.chainable.parameter_value_resolver'] : $this->get('nelmio_alice.generator.resolver.value.chainable.parameter_value_resolver')) && false ?: '_'}, 11 => ${($_ = isset($this->services['nelmio_alice.generator.resolver.value.chainable.unique_value_resolver']) ? $this->services['nelmio_alice.generator.resolver.value.chainable.unique_value_resolver'] : $this->get('nelmio_alice.generator.resolver.value.chainable.unique_value_resolver')) && false ?: '_'}, 12 => ${($_ = isset($this->services['nelmio_alice.generator.resolver.value.chainable.value_for_current_value_resolver']) ? $this->services['nelmio_alice.generator.resolver.value.chainable.value_for_current_value_resolver'] : $this->get('nelmio_alice.generator.resolver.value.chainable.value_for_current_value_resolver')) && false ?: '_'}, 13 => ${($_ = isset($this->services['nelmio_alice.generator.resolver.value.chainable.variable_value_resolver']) ? $this->services['nelmio_alice.generator.resolver.value.chainable.variable_value_resolver'] : $this->get('nelmio_alice.generator.resolver.value.chainable.variable_value_resolver')) && false ?: '_'}));
    }

    /**
     * Gets the public 'nelmio_alice.generator.resolver.value.unique_values_pool' shared service.
     *
     * @return \Nelmio\Alice\Generator\Resolver\UniqueValuesPool
     */
    protected function getNelmioAlice_Generator_Resolver_Value_UniqueValuesPoolService()
    {
        return $this->services['nelmio_alice.generator.resolver.value.unique_values_pool'] = new \Nelmio\Alice\Generator\Resolver\UniqueValuesPool();
    }

    /**
     * Gets the public 'nelmio_alice.property_accessor.std' shared service.
     *
     * @return \Nelmio\Alice\PropertyAccess\StdPropertyAccessor
     */
    protected function getNelmioAlice_PropertyAccessor_StdService()
    {
        return $this->services['nelmio_alice.property_accessor.std'] = new \Nelmio\Alice\PropertyAccess\StdPropertyAccessor(${($_ = isset($this->services['property_accessor']) ? $this->services['property_accessor'] : $this->get('property_accessor')) && false ?: '_'});
    }

    /**
     * Gets the public 'nelmio_cors.cors_listener' shared service.
     *
     * @return \Nelmio\CorsBundle\EventListener\CorsListener
     */
    protected function getNelmioCors_CorsListenerService()
    {
        return $this->services['nelmio_cors.cors_listener'] = new \Nelmio\CorsBundle\EventListener\CorsListener(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->get('debug.event_dispatcher')) && false ?: '_'}, new \Nelmio\CorsBundle\Options\Resolver(array(0 => ${($_ = isset($this->services['nelmio_cors.options_provider.config']) ? $this->services['nelmio_cors.options_provider.config'] : $this->get('nelmio_cors.options_provider.config')) && false ?: '_'})));
    }

    /**
     * Gets the public 'nelmio_cors.options_provider.config' shared service.
     *
     * @return \Nelmio\CorsBundle\Options\ConfigProvider
     */
    protected function getNelmioCors_OptionsProvider_ConfigService()
    {
        return $this->services['nelmio_cors.options_provider.config'] = new \Nelmio\CorsBundle\Options\ConfigProvider(array(), array('allow_origin' => true, 'allow_credentials' => false, 'allow_headers' => true, 'expose_headers' => array(), 'allow_methods' => array(0 => 'GET', 1 => 'POST', 2 => 'PUT', 3 => 'DELETE', 4 => 'OPTIONS'), 'max_age' => 3600, 'hosts' => array(), 'origin_regex' => false, 'forced_allow_origin_value' => NULL));
    }

    /**
     * Gets the public 'profiler' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Profiler\Profiler
     */
    protected function getProfilerService()
    {
        $a = ${($_ = isset($this->services['monolog.logger.profiler']) ? $this->services['monolog.logger.profiler'] : $this->get('monolog.logger.profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};
        $b = ${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};

        $c = new \Symfony\Component\Cache\DataCollector\CacheDataCollector();
        $c->addInstance('cache.app', ${($_ = isset($this->services['cache.app']) ? $this->services['cache.app'] : $this->get('cache.app')) && false ?: '_'});
        $c->addInstance('cache.system', ${($_ = isset($this->services['cache.system']) ? $this->services['cache.system'] : $this->get('cache.system')) && false ?: '_'});
        $c->addInstance('cache.validator', ${($_ = isset($this->services['cache.validator']) ? $this->services['cache.validator'] : $this->getCache_ValidatorService()) && false ?: '_'});
        $c->addInstance('cache.serializer', new \Symfony\Component\Cache\Adapter\TraceableAdapter(${($_ = isset($this->services['cache.serializer.recorder_inner']) ? $this->services['cache.serializer.recorder_inner'] : $this->getCache_Serializer_RecorderInnerService()) && false ?: '_'}));
        $c->addInstance('cache.annotations', ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'});

        $d = new \Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'});
        $d->addLogger('default', ${($_ = isset($this->services['doctrine.dbal.logger.profiling.default']) ? $this->services['doctrine.dbal.logger.profiling.default'] : $this->getDoctrine_Dbal_Logger_Profiling_DefaultService()) && false ?: '_'});

        $e = new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector();
        if ($this->has('kernel')) {
            $e->setKernel($b);
        }

        $this->services['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler(new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage(('file:'.__DIR__.'/profiler')), $a);

        $instance->disable();
        $instance->add(${($_ = isset($this->services['data_collector.request']) ? $this->services['data_collector.request'] : $this->get('data_collector.request')) && false ?: '_'});
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector($b, ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector());
        $instance->add(${($_ = isset($this->services['data_collector.form']) ? $this->services['data_collector.form'] : $this->get('data_collector.form')) && false ?: '_'});
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector($a, (__DIR__.'/appTestDebugProjectContainer')));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}));
        $instance->add(${($_ = isset($this->services['data_collector.router']) ? $this->services['data_collector.router'] : $this->get('data_collector.router')) && false ?: '_'});
        $instance->add($c);
        $instance->add(new \Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->getSecurity_RoleHierarchyService()) && false ?: '_'}, ${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'}, ${($_ = isset($this->services['debug.security.access.decision_manager']) ? $this->services['debug.security.access.decision_manager'] : $this->getDebug_Security_Access_DecisionManagerService()) && false ?: '_'}, ${($_ = isset($this->services['security.firewall.map']) ? $this->services['security.firewall.map'] : $this->getSecurity_Firewall_MapService()) && false ?: '_'}));
        $instance->add(new \Symfony\Bridge\Twig\DataCollector\TwigDataCollector(${($_ = isset($this->services['twig.profile']) ? $this->services['twig.profile'] : $this->get('twig.profile')) && false ?: '_'}));
        $instance->add($d);
        $instance->add(new \Symfony\Bundle\SwiftmailerBundle\DataCollector\MessageDataCollector($this));
        $instance->add(${($_ = isset($this->services['data_collector.dump']) ? $this->services['data_collector.dump'] : $this->get('data_collector.dump')) && false ?: '_'});
        $instance->add($e);

        return $instance;
    }

    /**
     * Gets the public 'profiler_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ProfilerListener
     */
    protected function getProfilerListenerService()
    {
        return $this->services['profiler_listener'] = new \Symfony\Component\HttpKernel\EventListener\ProfilerListener(${($_ = isset($this->services['profiler']) ? $this->services['profiler'] : $this->get('profiler')) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'}, NULL, false, false);
    }

    /**
     * Gets the public 'property_accessor' shared service.
     *
     * @return \Symfony\Component\PropertyAccess\PropertyAccessor
     */
    protected function getPropertyAccessorService()
    {
        return $this->services['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, false, new \Symfony\Component\Cache\Adapter\ArrayAdapter(0, false));
    }

    /**
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the public 'response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ResponseListener
     */
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /**
     * Gets the public 'router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    protected function getRouterService()
    {
        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, ($this->targetDirs[3].'/app/config/routing_dev.yml'), array('cache_dir' => __DIR__, 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appTestDebugProjectContainerUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appTestDebugProjectContainerUrlMatcher', 'strict_requirements' => true), ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.router']) ? $this->services['monolog.logger.router'] : $this->get('monolog.logger.router', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});

        $instance->setConfigCacheFactory(${($_ = isset($this->services['config_cache_factory']) ? $this->services['config_cache_factory'] : $this->get('config_cache_factory')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router')) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'}, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.request']) ? $this->services['monolog.logger.request'] : $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'routing.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader
     */
    protected function getRouting_LoaderService()
    {
        $a = ${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : $this->getControllerNameConverterService()) && false ?: '_'};
        $b = ${($_ = isset($this->services['file_locator']) ? $this->services['file_locator'] : $this->get('file_locator')) && false ?: '_'};
        $c = ${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->get('annotation_reader')) && false ?: '_'};

        $d = new \Sensio\Bundle\FrameworkExtraBundle\Routing\AnnotatedRouteControllerLoader($c);

        $e = new \FOS\RestBundle\Routing\Loader\RestRouteProcessor();

        $f = new \Symfony\Component\Config\Loader\LoaderResolver();
        $f->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($b));
        $f->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($b));
        $f->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($b));
        $f->addLoader(new \Symfony\Component\Config\Loader\GlobFileLoader($b));
        $f->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($b));
        $f->addLoader(new \Symfony\Component\Routing\Loader\DependencyInjection\ServiceRouterLoader($this));
        $f->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($b, $d));
        $f->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($b, $d));
        $f->addLoader($d);
        $f->addLoader(new \FOS\RestBundle\Routing\Loader\DirectoryRouteLoader($b, $e));
        $f->addLoader(new \FOS\RestBundle\Routing\Loader\RestRouteLoader($this, $b, $a, new \FOS\RestBundle\Routing\Loader\Reader\RestControllerReader(new \FOS\RestBundle\Routing\Loader\Reader\RestActionReader($c, ${($_ = isset($this->services['fos_rest.request.param_fetcher.reader']) ? $this->services['fos_rest.request.param_fetcher.reader'] : $this->getFosRest_Request_ParamFetcher_ReaderService()) && false ?: '_'}, ${($_ = isset($this->services['fos_rest.inflector']) ? $this->services['fos_rest.inflector'] : $this->get('fos_rest.inflector')) && false ?: '_'}, true, array('json' => false, 'html' => true)), $c), NULL));
        $f->addLoader(new \FOS\RestBundle\Routing\Loader\RestYamlCollectionLoader($b, $e, true, array('json' => false, 'html' => true), NULL));
        $f->addLoader(new \FOS\RestBundle\Routing\Loader\RestXmlCollectionLoader($b, $e, true, array('json' => false, 'html' => true), NULL));

        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($a, $f);
    }

    /**
     * Gets the public 'security.authentication.guard_handler' shared service.
     *
     * @return \Symfony\Component\Security\Guard\GuardAuthenticatorHandler
     */
    protected function getSecurity_Authentication_GuardHandlerService()
    {
        return $this->services['security.authentication.guard_handler'] = new \Symfony\Component\Security\Guard\GuardAuthenticatorHandler(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage')) && false ?: '_'}, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'security.authentication_utils' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\AuthenticationUtils
     */
    protected function getSecurity_AuthenticationUtilsService()
    {
        return $this->services['security.authentication_utils'] = new \Symfony\Component\Security\Http\Authentication\AuthenticationUtils(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'});
    }

    /**
     * Gets the public 'security.authorization_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage')) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['debug.security.access.decision_manager']) ? $this->services['debug.security.access.decision_manager'] : $this->getDebug_Security_Access_DecisionManagerService()) && false ?: '_'}, false);
    }

    /**
     * Gets the public 'security.csrf.token_manager' shared service.
     *
     * @return \Symfony\Component\Security\Csrf\CsrfTokenManager
     */
    protected function getSecurity_Csrf_TokenManagerService()
    {
        return $this->services['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator(), new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage(${($_ = isset($this->services['session']) ? $this->services['session'] : $this->get('session')) && false ?: '_'}));
    }

    /**
     * Gets the public 'security.encoder_factory' shared service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\EncoderFactory
     */
    protected function getSecurity_EncoderFactoryService()
    {
        return $this->services['security.encoder_factory'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(array());
    }

    /**
     * Gets the public 'security.firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\EventListener\FirewallListener
     */
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Bundle\SecurityBundle\EventListener\FirewallListener(${($_ = isset($this->services['security.firewall.map']) ? $this->services['security.firewall.map'] : $this->getSecurity_Firewall_MapService()) && false ?: '_'}, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->get('debug.event_dispatcher')) && false ?: '_'}, ${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'});
    }

    /**
     * Gets the public 'security.firewall.map.context.dev' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_DevService()
    {
        return $this->services['security.firewall.map.context.dev'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(), NULL, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('dev', 'security.user_checker', 'security.request_matcher.5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1d', false, '', '', '', '', '', '', array()));
    }

    /**
     * Gets the public 'security.firewall.map.context.main' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_MainService()
    {
        $a = ${($_ = isset($this->services['monolog.logger.security']) ? $this->services['monolog.logger.security'] : $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};
        $b = ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage')) && false ?: '_'};
        $c = ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->getSecurity_Authentication_TrustResolverService()) && false ?: '_'};
        $d = ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'};
        $e = ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};

        $f = new \Symfony\Component\Security\Http\AccessMap();

        return $this->services['security.firewall.map.context.main'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => new \Symfony\Component\Security\Http\Firewall\ChannelListener($f, new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443), $a), 1 => new \Symfony\Component\Security\Http\Firewall\ContextListener($b, array(0 => new \Symfony\Component\Security\Core\User\InMemoryUserProvider()), 'main', $a, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, $c), 2 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($b, '5a4e6bef857a64.86224008', $a, $d), 3 => new \Symfony\Component\Security\Http\Firewall\AccessListener($b, ${($_ = isset($this->services['debug.security.access.decision_manager']) ? $this->services['debug.security.access.decision_manager'] : $this->getDebug_Security_Access_DecisionManagerService()) && false ?: '_'}, $f, $d)), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($b, $c, new \Symfony\Component\Security\Http\HttpUtils($e, $e), 'main', NULL, NULL, NULL, $a, false), new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('main', 'security.user_checker', NULL, true, false, 'security.user.provider.concrete.in_memory', 'main', NULL, NULL, NULL, array(0 => 'anonymous')));
    }

    /**
     * Gets the public 'security.password_encoder' shared service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder
     */
    protected function getSecurity_PasswordEncoderService()
    {
        return $this->services['security.password_encoder'] = new \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder(${($_ = isset($this->services['security.encoder_factory']) ? $this->services['security.encoder_factory'] : $this->get('security.encoder_factory')) && false ?: '_'});
    }

    /**
     * Gets the public 'security.rememberme.response_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\RememberMe\ResponseListener
     */
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }

    /**
     * Gets the public 'security.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }

    /**
     * Gets the public 'security.validator.user_password' shared service.
     *
     * @return \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator
     */
    protected function getSecurity_Validator_UserPasswordService()
    {
        return $this->services['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage')) && false ?: '_'}, ${($_ = isset($this->services['security.encoder_factory']) ? $this->services['security.encoder_factory'] : $this->get('security.encoder_factory')) && false ?: '_'});
    }

    /**
     * Gets the public 'sensio_distribution.security_checker' shared service.
     *
     * @return \SensioLabs\Security\SecurityChecker
     */
    protected function getSensioDistribution_SecurityCheckerService()
    {
        return $this->services['sensio_distribution.security_checker'] = new \SensioLabs\Security\SecurityChecker();
    }

    /**
     * Gets the public 'sensio_distribution.security_checker.command' shared service.
     *
     * @return \SensioLabs\Security\Command\SecurityCheckerCommand
     */
    protected function getSensioDistribution_SecurityChecker_CommandService()
    {
        return $this->services['sensio_distribution.security_checker.command'] = new \SensioLabs\Security\Command\SecurityCheckerCommand(${($_ = isset($this->services['sensio_distribution.security_checker']) ? $this->services['sensio_distribution.security_checker'] : $this->get('sensio_distribution.security_checker')) && false ?: '_'});
    }

    /**
     * Gets the public 'sensio_framework_extra.cache.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener
     */
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener();
    }

    /**
     * Gets the public 'sensio_framework_extra.controller.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->services['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->get('annotation_reader')) && false ?: '_'});
    }

    /**
     * Gets the public 'sensio_framework_extra.converter.datetime' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter
     */
    protected function getSensioFrameworkExtra_Converter_DatetimeService()
    {
        return $this->services['sensio_framework_extra.converter.datetime'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter();
    }

    /**
     * Gets the public 'sensio_framework_extra.converter.doctrine.orm' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter
     */
    protected function getSensioFrameworkExtra_Converter_Doctrine_OrmService()
    {
        return $this->services['sensio_framework_extra.converter.doctrine.orm'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'sensio_framework_extra.converter.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->services['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener(${($_ = isset($this->services['sensio_framework_extra.converter.manager']) ? $this->services['sensio_framework_extra.converter.manager'] : $this->get('sensio_framework_extra.converter.manager')) && false ?: '_'}, true);
    }

    /**
     * Gets the public 'sensio_framework_extra.converter.manager' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager
     */
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->services['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();

        $instance->add(${($_ = isset($this->services['sensio_framework_extra.converter.doctrine.orm']) ? $this->services['sensio_framework_extra.converter.doctrine.orm'] : $this->get('sensio_framework_extra.converter.doctrine.orm')) && false ?: '_'}, 0, 'doctrine.orm');
        $instance->add(${($_ = isset($this->services['sensio_framework_extra.converter.datetime']) ? $this->services['sensio_framework_extra.converter.datetime'] : $this->get('sensio_framework_extra.converter.datetime')) && false ?: '_'}, 0, 'datetime');

        return $instance;
    }

    /**
     * Gets the public 'sensio_framework_extra.security.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->services['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(NULL, new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->getSecurity_Authentication_TrustResolverService()) && false ?: '_'}, ${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->getSecurity_RoleHierarchyService()) && false ?: '_'}, ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'sensio_framework_extra.view.guesser' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser
     */
    protected function getSensioFrameworkExtra_View_GuesserService()
    {
        return $this->services['sensio_framework_extra.view.guesser'] = new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'});
    }

    /**
     * Gets the public 'sensio_framework_extra.view.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener($this);
    }

    /**
     * Gets the public 'session' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session
     */
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session(${($_ = isset($this->services['session.storage.filesystem']) ? $this->services['session.storage.filesystem'] : $this->get('session.storage.filesystem')) && false ?: '_'}, new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());
    }

    /**
     * Gets the public 'session.handler' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler
     */
    protected function getSession_HandlerService()
    {
        return $this->services['session.handler'] = new \Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler(($this->targetDirs[2].'/sessions/test'));
    }

    /**
     * Gets the public 'session.save_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SaveSessionListener
     */
    protected function getSession_SaveListenerService()
    {
        return $this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener();
    }

    /**
     * Gets the public 'session.storage.filesystem' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage
     */
    protected function getSession_Storage_FilesystemService()
    {
        return $this->services['session.storage.filesystem'] = new \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage((__DIR__.'/sessions'), 'MOCKSESSID', ${($_ = isset($this->services['session.storage.metadata_bag']) ? $this->services['session.storage.metadata_bag'] : $this->getSession_Storage_MetadataBagService()) && false ?: '_'});
    }

    /**
     * Gets the public 'session.storage.native' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage
     */
    protected function getSession_Storage_NativeService()
    {
        return $this->services['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage(array('cookie_httponly' => true, 'gc_probability' => 1), ${($_ = isset($this->services['session.handler']) ? $this->services['session.handler'] : $this->get('session.handler')) && false ?: '_'}, ${($_ = isset($this->services['session.storage.metadata_bag']) ? $this->services['session.storage.metadata_bag'] : $this->getSession_Storage_MetadataBagService()) && false ?: '_'});
    }

    /**
     * Gets the public 'session.storage.php_bridge' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage
     */
    protected function getSession_Storage_PhpBridgeService()
    {
        return $this->services['session.storage.php_bridge'] = new \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage(${($_ = isset($this->services['session.handler']) ? $this->services['session.handler'] : $this->get('session.handler')) && false ?: '_'}, ${($_ = isset($this->services['session.storage.metadata_bag']) ? $this->services['session.storage.metadata_bag'] : $this->getSession_Storage_MetadataBagService()) && false ?: '_'});
    }

    /**
     * Gets the public 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\ServiceLocator(array('session' => function () {
            return ${($_ = isset($this->services['session']) ? $this->services['session'] : $this->get('session', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};
        })));
    }

    /**
     * Gets the public 'streamed_response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener
     */
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }

    /**
     * Gets the public 'swiftmailer.email_sender.listener' shared service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener
     */
    protected function getSwiftmailer_EmailSender_ListenerService()
    {
        return $this->services['swiftmailer.email_sender.listener'] = new \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener($this, ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'swiftmailer.mailer.default' shared service.
     *
     * @return \Swift_Mailer
     */
    protected function getSwiftmailer_Mailer_DefaultService()
    {
        return $this->services['swiftmailer.mailer.default'] = new \Swift_Mailer(${($_ = isset($this->services['swiftmailer.mailer.default.transport']) ? $this->services['swiftmailer.mailer.default.transport'] : $this->get('swiftmailer.mailer.default.transport')) && false ?: '_'});
    }

    /**
     * Gets the public 'swiftmailer.mailer.default.plugin.messagelogger' shared service.
     *
     * @return \Swift_Plugins_MessageLogger
     */
    protected function getSwiftmailer_Mailer_Default_Plugin_MessageloggerService()
    {
        return $this->services['swiftmailer.mailer.default.plugin.messagelogger'] = new \Swift_Plugins_MessageLogger();
    }

    /**
     * Gets the public 'swiftmailer.mailer.default.spool' shared service.
     *
     * @return \Swift_MemorySpool
     */
    protected function getSwiftmailer_Mailer_Default_SpoolService()
    {
        return $this->services['swiftmailer.mailer.default.spool'] = new \Swift_MemorySpool();
    }

    /**
     * Gets the public 'swiftmailer.mailer.default.transport' shared service.
     *
     * @return \Swift_Transport_SpoolTransport
     */
    protected function getSwiftmailer_Mailer_Default_TransportService()
    {
        $this->services['swiftmailer.mailer.default.transport'] = $instance = new \Swift_Transport_SpoolTransport(${($_ = isset($this->services['swiftmailer.mailer.default.transport.eventdispatcher']) ? $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] : $this->getSwiftmailer_Mailer_Default_Transport_EventdispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['swiftmailer.mailer.default.spool']) ? $this->services['swiftmailer.mailer.default.spool'] : $this->get('swiftmailer.mailer.default.spool')) && false ?: '_'});

        $instance->registerPlugin(${($_ = isset($this->services['swiftmailer.mailer.default.plugin.messagelogger']) ? $this->services['swiftmailer.mailer.default.plugin.messagelogger'] : $this->get('swiftmailer.mailer.default.plugin.messagelogger')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'swiftmailer.mailer.default.transport.real' shared service.
     *
     * @return \Swift_Transport_NullTransport
     */
    protected function getSwiftmailer_Mailer_Default_Transport_RealService()
    {
        return $this->services['swiftmailer.mailer.default.transport.real'] = new \Swift_Transport_NullTransport(${($_ = isset($this->services['swiftmailer.mailer.default.transport.eventdispatcher']) ? $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] : $this->getSwiftmailer_Mailer_Default_Transport_EventdispatcherService()) && false ?: '_'});
    }

    /**
     * Gets the public 'templating' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\TwigEngine
     */
    protected function getTemplatingService()
    {
        return $this->services['templating'] = new \Symfony\Bundle\TwigBundle\TwigEngine(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}, ${($_ = isset($this->services['templating.name_parser']) ? $this->services['templating.name_parser'] : $this->get('templating.name_parser')) && false ?: '_'}, ${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'});
    }

    /**
     * Gets the public 'templating.filename_parser' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser
     */
    protected function getTemplating_FilenameParserService()
    {
        return $this->services['templating.filename_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser();
    }

    /**
     * Gets the public 'templating.helper.logout_url' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper
     */
    protected function getTemplating_Helper_LogoutUrlService()
    {
        return $this->services['templating.helper.logout_url'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper(${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'});
    }

    /**
     * Gets the public 'templating.helper.security' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper
     */
    protected function getTemplating_Helper_SecurityService()
    {
        return $this->services['templating.helper.security'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper(${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'templating.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader
     */
    protected function getTemplating_LoaderService()
    {
        return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader(${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'});
    }

    /**
     * Gets the public 'templating.name_parser' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser
     */
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'});
    }

    /**
     * Gets the public 'test.client' service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Client
     */
    protected function getTest_ClientService()
    {
        return new \Symfony\Bundle\FrameworkBundle\Client(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'}, array(), new \Symfony\Component\BrowserKit\History(), new \Symfony\Component\BrowserKit\CookieJar());
    }

    /**
     * Gets the public 'test.client.cookiejar' service.
     *
     * @return \Symfony\Component\BrowserKit\CookieJar
     */
    protected function getTest_Client_CookiejarService()
    {
        return new \Symfony\Component\BrowserKit\CookieJar();
    }

    /**
     * Gets the public 'test.client.history' service.
     *
     * @return \Symfony\Component\BrowserKit\History
     */
    protected function getTest_Client_HistoryService()
    {
        return new \Symfony\Component\BrowserKit\History();
    }

    /**
     * Gets the public 'test.session.listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TestSessionListener
     */
    protected function getTest_Session_ListenerService()
    {
        return $this->services['test.session.listener'] = new \Symfony\Component\HttpKernel\EventListener\TestSessionListener(new \Symfony\Component\DependencyInjection\ServiceLocator(array('session' => function () {
            return ${($_ = isset($this->services['session']) ? $this->services['session'] : $this->get('session', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};
        })));
    }

    /**
     * Gets the public 'translator' shared service.
     *
     * @return \Symfony\Component\Translation\IdentityTranslator
     */
    protected function getTranslatorService()
    {
        return $this->services['translator'] = new \Symfony\Component\Translation\IdentityTranslator(new \Symfony\Component\Translation\MessageSelector());
    }

    /**
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    protected function getTwigService()
    {
        $a = ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};
        $b = ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'};
        $c = ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'};

        $d = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 0);
        $d->setDisplayOptions(array('fileLinkFormat' => $b));

        $e = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 1);
        $e->setDisplayOptions(array('maxStringLength' => 4096, 'fileLinkFormat' => $b));

        $f = new \Symfony\Bridge\Twig\AppVariable();
        $f->setEnvironment('test');
        $f->setDebug(true);
        if ($this->has('security.token_storage')) {
            $f->setTokenStorage(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
        }
        if ($this->has('request_stack')) {
            $f->setRequestStack($c);
        }

        $this->services['twig'] = $instance = new \Twig\Environment(${($_ = isset($this->services['twig.loader']) ? $this->services['twig.loader'] : $this->get('twig.loader')) && false ?: '_'}, array('debug' => true, 'strict_variables' => true, 'exception_controller' => 'twig.controller.exception:showAction', 'form_themes' => array(0 => 'form_div_layout.html.twig'), 'autoescape' => 'name', 'cache' => (__DIR__.'/twig'), 'charset' => 'UTF-8', 'paths' => array(), 'date' => array('format' => 'F j, Y H:i', 'interval_format' => '%d days', 'timezone' => NULL), 'number_format' => array('decimals' => 0, 'decimal_point' => '.', 'thousands_separator' => ',')));

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension(${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ProfilerExtension(${($_ = isset($this->services['twig.profile']) ? $this->services['twig.profile'] : $this->get('twig.profile')) && false ?: '_'}, $a));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->get('translator')) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension(${($_ = isset($this->services['assets.packages']) ? $this->services['assets.packages'] : $this->get('assets.packages')) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension($b, ($this->targetDirs[3].'/app'), 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router')) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($a, true));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension($c, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}));
        $instance->addExtension(new \Twig\Extension\DebugExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(array(0 => $this, 1 => 'twig.form.renderer')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\WebLinkExtension($c));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(new \JMS\Serializer\Twig\SerializerRuntimeExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\DumpExtension(${($_ = isset($this->services['var_dumper.cloner']) ? $this->services['var_dumper.cloner'] : $this->get('var_dumper.cloner')) && false ?: '_'}, $d));
        $instance->addExtension(new \Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension($e));
        $instance->addGlobal('app', $f);
        $instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\ServiceLocator(array('JMS\\Serializer\\Twig\\SerializerRuntimeHelper' => function () {
            return ${($_ = isset($this->services['jms_serializer.twig_extension.serializer_runtime_helper']) ? $this->services['jms_serializer.twig_extension.serializer_runtime_helper'] : $this->get('jms_serializer.twig_extension.serializer_runtime_helper')) && false ?: '_'};
        }, 'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => function () {
            return ${($_ = isset($this->services['twig.runtime.httpkernel']) ? $this->services['twig.runtime.httpkernel'] : $this->get('twig.runtime.httpkernel')) && false ?: '_'};
        }, 'Symfony\\Bridge\\Twig\\Form\\TwigRenderer' => function () {
            return ${($_ = isset($this->services['twig.form.renderer']) ? $this->services['twig.form.renderer'] : $this->get('twig.form.renderer')) && false ?: '_'};
        }))));
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'twig.controller.exception' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\ExceptionController
     */
    protected function getTwig_Controller_ExceptionService()
    {
        return $this->services['twig.controller.exception'] = new \Symfony\Bundle\TwigBundle\Controller\ExceptionController(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}, true);
    }

    /**
     * Gets the public 'twig.controller.preview_error' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController
     */
    protected function getTwig_Controller_PreviewErrorService()
    {
        return $this->services['twig.controller.preview_error'] = new \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController(${($_ = isset($this->services['http_kernel']) ? $this->services['http_kernel'] : $this->get('http_kernel')) && false ?: '_'}, 'twig.controller.exception:showAction');
    }

    /**
     * Gets the public 'twig.exception_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ExceptionListener
     */
    protected function getTwig_ExceptionListenerService()
    {
        return $this->services['twig.exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ExceptionListener('twig.controller.exception:showAction', ${($_ = isset($this->services['monolog.logger.request']) ? $this->services['monolog.logger.request'] : $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'twig.form.renderer' shared service.
     *
     * @return \Symfony\Bridge\Twig\Form\TwigRenderer
     */
    protected function getTwig_Form_RendererService()
    {
        return $this->services['twig.form.renderer'] = new \Symfony\Bridge\Twig\Form\TwigRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine(array(0 => 'form_div_layout.html.twig'), ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}), ${($_ = isset($this->services['security.csrf.token_manager']) ? $this->services['security.csrf.token_manager'] : $this->get('security.csrf.token_manager', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'twig.loader' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader
     */
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader(${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'}, ${($_ = isset($this->services['templating.name_parser']) ? $this->services['templating.name_parser'] : $this->get('templating.name_parser')) && false ?: '_'}, $this->targetDirs[3]);

        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views'), 'Framework');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views'), 'Security');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views'), 'Twig');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $instance->addPath(($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Resources/views'), 'Doctrine');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/DebugBundle/Resources/views'), 'Debug');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views'), 'WebProfiler');
        $instance->addPath(($this->targetDirs[3].'/app/Resources/views'));
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form'));

        return $instance;
    }

    /**
     * Gets the public 'twig.profile' shared service.
     *
     * @return \Twig\Profiler\Profile
     */
    protected function getTwig_ProfileService()
    {
        return $this->services['twig.profile'] = new \Twig\Profiler\Profile();
    }

    /**
     * Gets the public 'twig.runtime.httpkernel' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\HttpKernelRuntime
     */
    protected function getTwig_Runtime_HttpkernelService()
    {
        return $this->services['twig.runtime.httpkernel'] = new \Symfony\Bridge\Twig\Extension\HttpKernelRuntime(${($_ = isset($this->services['fragment.handler']) ? $this->services['fragment.handler'] : $this->get('fragment.handler')) && false ?: '_'});
    }

    /**
     * Gets the public 'twig.translation.extractor' shared service.
     *
     * @return \Symfony\Bridge\Twig\Translation\TwigExtractor
     */
    protected function getTwig_Translation_ExtractorService()
    {
        return $this->services['twig.translation.extractor'] = new \Symfony\Bridge\Twig\Translation\TwigExtractor(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'});
    }

    /**
     * Gets the public 'uri_signer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\UriSigner
     */
    protected function getUriSignerService()
    {
        return $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('1b8ebd19769bd8b76fcef76b992f8f4b1d51834c');
    }

    /**
     * Gets the public 'user.service' shared service.
     *
     * @return \AppBundle\Service\UserService
     */
    protected function getUser_ServiceService()
    {
        return $this->services['user.service'] = new \AppBundle\Service\UserService(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->get('doctrine.orm.default_entity_manager')) && false ?: '_'}, $this);
    }

    /**
     * Gets the public 'validate_request_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener
     */
    protected function getValidateRequestListenerService()
    {
        return $this->services['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener();
    }

    /**
     * Gets the public 'validator' shared service.
     *
     * @return \Symfony\Component\Validator\Validator\ValidatorInterface
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = ${($_ = isset($this->services['validator.builder']) ? $this->services['validator.builder'] : $this->get('validator.builder')) && false ?: '_'}->getValidator();
    }

    /**
     * Gets the public 'validator.builder' shared service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilderInterface
     */
    protected function getValidator_BuilderService()
    {
        $this->services['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $instance->setConstraintValidatorFactory(new \Symfony\Component\Validator\ContainerConstraintValidatorFactory(new \Symfony\Component\DependencyInjection\ServiceLocator(array('Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => function () {
            return ${($_ = isset($this->services['doctrine.orm.validator.unique']) ? $this->services['doctrine.orm.validator.unique'] : $this->get('doctrine.orm.validator.unique')) && false ?: '_'};
        }, 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => function () {
            return ${($_ = isset($this->services['security.validator.user_password']) ? $this->services['security.validator.user_password'] : $this->get('security.validator.user_password')) && false ?: '_'};
        }, 'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => function () {
            return ${($_ = isset($this->services['validator.email']) ? $this->services['validator.email'] : $this->get('validator.email')) && false ?: '_'};
        }, 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => function () {
            return ${($_ = isset($this->services['validator.expression']) ? $this->services['validator.expression'] : $this->get('validator.expression')) && false ?: '_'};
        }, 'doctrine.orm.validator.unique' => function () {
            return ${($_ = isset($this->services['doctrine.orm.validator.unique']) ? $this->services['doctrine.orm.validator.unique'] : $this->get('doctrine.orm.validator.unique')) && false ?: '_'};
        }, 'security.validator.user_password' => function () {
            return ${($_ = isset($this->services['security.validator.user_password']) ? $this->services['security.validator.user_password'] : $this->get('security.validator.user_password')) && false ?: '_'};
        }, 'validator.expression' => function () {
            return ${($_ = isset($this->services['validator.expression']) ? $this->services['validator.expression'] : $this->get('validator.expression')) && false ?: '_'};
        }))));
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->get('translator')) && false ?: '_'});
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings(array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/config/validation.xml')));
        $instance->enableAnnotationMapping(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->get('annotation_reader')) && false ?: '_'});
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->addObjectInitializers(array(0 => ${($_ = isset($this->services['doctrine.orm.validator_initializer']) ? $this->services['doctrine.orm.validator_initializer'] : $this->get('doctrine.orm.validator_initializer')) && false ?: '_'}));

        return $instance;
    }

    /**
     * Gets the public 'validator.email' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\EmailValidator
     */
    protected function getValidator_EmailService()
    {
        return $this->services['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator(false);
    }

    /**
     * Gets the public 'validator.expression' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\ExpressionValidator
     */
    protected function getValidator_ExpressionService()
    {
        return $this->services['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator();
    }

    /**
     * Gets the public 'var_dumper.cli_dumper' shared service.
     *
     * @return \Symfony\Component\VarDumper\Dumper\CliDumper
     */
    protected function getVarDumper_CliDumperService()
    {
        return $this->services['var_dumper.cli_dumper'] = new \Symfony\Component\VarDumper\Dumper\CliDumper(NULL, 'UTF-8', 0);
    }

    /**
     * Gets the public 'var_dumper.cloner' shared service.
     *
     * @return \Symfony\Component\VarDumper\Cloner\VarCloner
     */
    protected function getVarDumper_ClonerService()
    {
        $this->services['var_dumper.cloner'] = $instance = new \Symfony\Component\VarDumper\Cloner\VarCloner();

        $instance->setMaxItems(2500);
        $instance->setMaxString(-1);

        return $instance;
    }

    /**
     * Gets the public 'web_profiler.controller.exception' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController
     */
    protected function getWebProfiler_Controller_ExceptionService()
    {
        return $this->services['web_profiler.controller.exception'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController(${($_ = isset($this->services['profiler']) ? $this->services['profiler'] : $this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}, true);
    }

    /**
     * Gets the public 'web_profiler.controller.profiler' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController
     */
    protected function getWebProfiler_Controller_ProfilerService()
    {
        return $this->services['web_profiler.controller.profiler'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['profiler']) ? $this->services['profiler'] : $this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}, array('data_collector.request' => array(0 => 'request', 1 => '@WebProfiler/Collector/request.html.twig'), 'data_collector.time' => array(0 => 'time', 1 => '@WebProfiler/Collector/time.html.twig'), 'data_collector.memory' => array(0 => 'memory', 1 => '@WebProfiler/Collector/memory.html.twig'), 'data_collector.ajax' => array(0 => 'ajax', 1 => '@WebProfiler/Collector/ajax.html.twig'), 'data_collector.form' => array(0 => 'form', 1 => '@WebProfiler/Collector/form.html.twig'), 'data_collector.exception' => array(0 => 'exception', 1 => '@WebProfiler/Collector/exception.html.twig'), 'data_collector.logger' => array(0 => 'logger', 1 => '@WebProfiler/Collector/logger.html.twig'), 'data_collector.events' => array(0 => 'events', 1 => '@WebProfiler/Collector/events.html.twig'), 'data_collector.router' => array(0 => 'router', 1 => '@WebProfiler/Collector/router.html.twig'), 'data_collector.cache' => array(0 => 'cache', 1 => '@WebProfiler/Collector/cache.html.twig'), 'data_collector.security' => array(0 => 'security', 1 => '@Security/Collector/security.html.twig'), 'data_collector.twig' => array(0 => 'twig', 1 => '@WebProfiler/Collector/twig.html.twig'), 'data_collector.doctrine' => array(0 => 'db', 1 => '@Doctrine/Collector/db.html.twig'), 'swiftmailer.data_collector' => array(0 => 'swiftmailer', 1 => '@Swiftmailer/Collector/swiftmailer.html.twig'), 'data_collector.dump' => array(0 => 'dump', 1 => '@Debug/Profiler/dump.html.twig'), 'data_collector.config' => array(0 => 'config', 1 => '@WebProfiler/Collector/config.html.twig')), 'bottom', new \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler(new \Symfony\Bundle\WebProfilerBundle\Csp\NonceGenerator()), $this->targetDirs[3]);
    }

    /**
     * Gets the public 'web_profiler.controller.router' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\RouterController
     */
    protected function getWebProfiler_Controller_RouterService()
    {
        return $this->services['web_profiler.controller.router'] = new \Symfony\Bundle\WebProfilerBundle\Controller\RouterController(${($_ = isset($this->services['profiler']) ? $this->services['profiler'] : $this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the private '1_ea6d9e8f60817a88f28a2e1036956ef36d32ea0ebd7aaac1f6fcc56026c5e8af' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker
     */
    protected function get1Ea6d9e8f60817a88f28a2e1036956ef36d32ea0ebd7aaac1f6fcc56026c5e8afService()
    {
        return $this->services['1_ea6d9e8f60817a88f28a2e1036956ef36d32ea0ebd7aaac1f6fcc56026c5e8af'] = new \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker($this);
    }

    /**
     * Gets the private '2_ea6d9e8f60817a88f28a2e1036956ef36d32ea0ebd7aaac1f6fcc56026c5e8af' shared service.
     *
     * @return \Symfony\Component\Config\Resource\SelfCheckingResourceChecker
     */
    protected function get2Ea6d9e8f60817a88f28a2e1036956ef36d32ea0ebd7aaac1f6fcc56026c5e8afService()
    {
        return $this->services['2_ea6d9e8f60817a88f28a2e1036956ef36d32ea0ebd7aaac1f6fcc56026c5e8af'] = new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker();
    }

    /**
     * Gets the private 'annotations.reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotations_ReaderService()
    {
        $a = new \Doctrine\Common\Annotations\AnnotationRegistry();
        $a->registerLoader('class_exists');

        $this->services['annotations.reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader();

        $instance->addGlobalIgnoredName('required', $a);

        return $instance;
    }

    /**
     * Gets the private 'argument_resolver.default' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver
     */
    protected function getArgumentResolver_DefaultService()
    {
        return $this->services['argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver();
    }

    /**
     * Gets the private 'argument_resolver.request' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver
     */
    protected function getArgumentResolver_RequestService()
    {
        return $this->services['argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver();
    }

    /**
     * Gets the private 'argument_resolver.request_attribute' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver
     */
    protected function getArgumentResolver_RequestAttributeService()
    {
        return $this->services['argument_resolver.request_attribute'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver();
    }

    /**
     * Gets the private 'argument_resolver.service' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver
     */
    protected function getArgumentResolver_ServiceService()
    {
        return $this->services['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\ServiceLocator(array()));
    }

    /**
     * Gets the private 'argument_resolver.session' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver
     */
    protected function getArgumentResolver_SessionService()
    {
        return $this->services['argument_resolver.session'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver();
    }

    /**
     * Gets the private 'argument_resolver.variadic' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver
     */
    protected function getArgumentResolver_VariadicService()
    {
        return $this->services['argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver();
    }

    /**
     * Gets the private 'cache.annotations' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AnnotationsService()
    {
        return $this->services['cache.annotations'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(${($_ = isset($this->services['cache.annotations.recorder_inner']) ? $this->services['cache.annotations.recorder_inner'] : $this->getCache_Annotations_RecorderInnerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'cache.annotations.recorder_inner' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_Annotations_RecorderInnerService($lazyLoad = true)
    {
        return $this->services['cache.annotations.recorder_inner'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('rvDTXwTpfY', 0, 'LkgUn+2PbltI1t1N2Lqyfw', (__DIR__.'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the private 'cache.app.recorder_inner' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    public function getCache_App_RecorderInnerService($lazyLoad = true)
    {
        if ($lazyLoad) {

            return $this->services['cache.app.recorder_inner'] = SymfonyComponentCacheAdapterFilesystemAdapter_00000000037700a50000000052ea3400deb914fd286e82d6bd36b5a641b110e5::staticProxyConstructor(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getCache_App_RecorderInnerService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('9dIKO8rESm', 0, (__DIR__.'/pools'));

        if ($this->has('monolog.logger.cache')) {
            $instance->setLogger(${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
        }

        return $instance;
    }

    /**
     * Gets the private 'cache.serializer.recorder_inner' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_Serializer_RecorderInnerService($lazyLoad = true)
    {
        return $this->services['cache.serializer.recorder_inner'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('g13Ihx+Orc', 0, 'LkgUn+2PbltI1t1N2Lqyfw', (__DIR__.'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the private 'cache.system.recorder_inner' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_System_RecorderInnerService($lazyLoad = true)
    {
        return $this->services['cache.system.recorder_inner'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('24QJjyYiLI', 0, 'LkgUn+2PbltI1t1N2Lqyfw', (__DIR__.'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the private 'cache.validator' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_ValidatorService()
    {
        return $this->services['cache.validator'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(${($_ = isset($this->services['cache.validator.recorder_inner']) ? $this->services['cache.validator.recorder_inner'] : $this->getCache_Validator_RecorderInnerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'cache.validator.recorder_inner' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_Validator_RecorderInnerService($lazyLoad = true)
    {
        return $this->services['cache.validator.recorder_inner'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('887R1fH6bb', 0, 'LkgUn+2PbltI1t1N2Lqyfw', (__DIR__.'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the private 'console.error_listener' shared service.
     *
     * @return \Symfony\Component\Console\EventListener\ErrorListener
     */
    protected function getConsole_ErrorListenerService()
    {
        return $this->services['console.error_listener'] = new \Symfony\Component\Console\EventListener\ErrorListener(${($_ = isset($this->services['monolog.logger.console']) ? $this->services['monolog.logger.console'] : $this->get('monolog.logger.console', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the private 'controller_name_converter' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser
     */
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'});
    }

    /**
     * Gets the private 'debug.file_link_formatter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\FileLinkFormatter
     */
    protected function getDebug_FileLinkFormatterService()
    {
        return $this->services['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, $this->targetDirs[3], '/_profiler/open?file=%f&line=%l#line%l');
    }

    /**
     * Gets the private 'debug.log_processor' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Processor\DebugProcessor
     */
    protected function getDebug_LogProcessorService()
    {
        return $this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor();
    }

    /**
     * Gets the private 'debug.security.access.decision_manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager
     */
    protected function getDebug_Security_Access_DecisionManagerService()
    {
        return $this->services['debug.security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager(new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['security.access.authenticated_voter']) ? $this->services['security.access.authenticated_voter'] : $this->getSecurity_Access_AuthenticatedVoterService()) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['security.access.simple_role_voter']) ? $this->services['security.access.simple_role_voter'] : $this->getSecurity_Access_SimpleRoleVoterService()) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['security.access.expression_voter']) ? $this->services['security.access.expression_voter'] : $this->getSecurity_Access_ExpressionVoterService()) && false ?: '_'};
        }, 3), 'affirmative', false, true));
    }

    /**
     * Gets the private 'doctrine.dbal.logger.profiling.default' shared service.
     *
     * @return \Doctrine\DBAL\Logging\DebugStack
     */
    protected function getDoctrine_Dbal_Logger_Profiling_DefaultService()
    {
        return $this->services['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack();
    }

    /**
     * Gets the private 'doctrine.orm.default_entity_manager.delegate' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    public function getDoctrine_Orm_DefaultEntityManager_DelegateService($lazyLoad = true)
    {
        if ($lazyLoad) {

            return $this->services['doctrine.orm.default_entity_manager.delegate'] = DoctrineORMEntityManager_00000000037703750000000052ea3400deb914fd286e82d6bd36b5a641b110e5::staticProxyConstructor(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getDoctrine_Orm_DefaultEntityManager_DelegateService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        $a = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
        $a->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->get('annotation_reader')) && false ?: '_'}, array(0 => ($this->targetDirs[3].'/src/AppBundle/Entity'))), 'AppBundle\\Entity');

        $b = new \Doctrine\ORM\Configuration();
        $b->setEntityNamespaces(array('AppBundle' => 'AppBundle\\Entity'));
        $b->setMetadataCacheImpl(${($_ = isset($this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache']) ? $this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] : $this->get('doctrine_cache.providers.doctrine.orm.default_metadata_cache')) && false ?: '_'});
        $b->setQueryCacheImpl(${($_ = isset($this->services['doctrine_cache.providers.doctrine.orm.default_query_cache']) ? $this->services['doctrine_cache.providers.doctrine.orm.default_query_cache'] : $this->get('doctrine_cache.providers.doctrine.orm.default_query_cache')) && false ?: '_'});
        $b->setResultCacheImpl(${($_ = isset($this->services['doctrine_cache.providers.doctrine.orm.default_result_cache']) ? $this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] : $this->get('doctrine_cache.providers.doctrine.orm.default_result_cache')) && false ?: '_'});
        $b->setMetadataDriverImpl($a);
        $b->setProxyDir((__DIR__.'/doctrine/orm/Proxies'));
        $b->setProxyNamespace('Proxies');
        $b->setAutoGenerateProxyClasses(true);
        $b->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $b->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $b->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy());
        $b->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $b->setEntityListenerResolver(${($_ = isset($this->services['doctrine.orm.default_entity_listener_resolver']) ? $this->services['doctrine.orm.default_entity_listener_resolver'] : $this->get('doctrine.orm.default_entity_listener_resolver')) && false ?: '_'});

        $instance = \Doctrine\ORM\EntityManager::create(${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->get('doctrine.dbal.default_connection')) && false ?: '_'}, $b);

        ${($_ = isset($this->services['doctrine.orm.default_manager_configurator']) ? $this->services['doctrine.orm.default_manager_configurator'] : $this->get('doctrine.orm.default_manager_configurator')) && false ?: '_'}->configure($instance);

        return $instance;
    }

    /**
     * Gets the private 'form.server_params' shared service.
     *
     * @return \Symfony\Component\Form\Util\ServerParams
     */
    protected function getForm_ServerParamsService()
    {
        return $this->services['form.server_params'] = new \Symfony\Component\Form\Util\ServerParams(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'});
    }

    /**
     * Gets the private 'form.type.choice' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ChoiceType
     */
    protected function getForm_Type_ChoiceService()
    {
        return $this->services['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType(new \Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator(new \Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator(new \Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory(), ${($_ = isset($this->services['property_accessor']) ? $this->services['property_accessor'] : $this->get('property_accessor')) && false ?: '_'})));
    }

    /**
     * Gets the private 'form.type.form' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FormType
     */
    protected function getForm_Type_FormService()
    {
        return $this->services['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType(${($_ = isset($this->services['property_accessor']) ? $this->services['property_accessor'] : $this->get('property_accessor')) && false ?: '_'});
    }

    /**
     * Gets the private 'form.type_extension.csrf' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension
     */
    protected function getForm_TypeExtension_CsrfService()
    {
        return $this->services['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension(${($_ = isset($this->services['security.csrf.token_manager']) ? $this->services['security.csrf.token_manager'] : $this->get('security.csrf.token_manager')) && false ?: '_'}, true, '_token', ${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->get('translator')) && false ?: '_'}, 'validators', ${($_ = isset($this->services['form.server_params']) ? $this->services['form.server_params'] : $this->getForm_ServerParamsService()) && false ?: '_'});
    }

    /**
     * Gets the private 'form.type_extension.form.data_collector' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension
     */
    protected function getForm_TypeExtension_Form_DataCollectorService()
    {
        return $this->services['form.type_extension.form.data_collector'] = new \Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension(${($_ = isset($this->services['data_collector.form']) ? $this->services['data_collector.form'] : $this->get('data_collector.form')) && false ?: '_'});
    }

    /**
     * Gets the private 'form.type_extension.form.http_foundation' shared service.
     *
     * @return \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension
     */
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        return $this->services['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension(new \Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler(${($_ = isset($this->services['form.server_params']) ? $this->services['form.server_params'] : $this->getForm_ServerParamsService()) && false ?: '_'}));
    }

    /**
     * Gets the private 'form.type_extension.form.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension
     */
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        return $this->services['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->get('validator')) && false ?: '_'});
    }

    /**
     * Gets the private 'form.type_extension.repeated.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension
     */
    protected function getForm_TypeExtension_Repeated_ValidatorService()
    {
        return $this->services['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension();
    }

    /**
     * Gets the private 'form.type_extension.submit.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension
     */
    protected function getForm_TypeExtension_Submit_ValidatorService()
    {
        return $this->services['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension();
    }

    /**
     * Gets the private 'form.type_extension.upload.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension
     */
    protected function getForm_TypeExtension_Upload_ValidatorService()
    {
        return $this->services['form.type_extension.upload.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->get('translator')) && false ?: '_'}, 'validators');
    }

    /**
     * Gets the private 'form.type_guesser.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser
     */
    protected function getForm_TypeGuesser_ValidatorService()
    {
        return $this->services['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->get('validator')) && false ?: '_'});
    }

    /**
     * Gets the private 'fos_rest.request.param_fetcher.reader' shared service.
     *
     * @return \FOS\RestBundle\Request\ParamReader
     */
    protected function getFosRest_Request_ParamFetcher_ReaderService()
    {
        return $this->services['fos_rest.request.param_fetcher.reader'] = new \FOS\RestBundle\Request\ParamReader(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->get('annotation_reader')) && false ?: '_'});
    }

    /**
     * Gets the private 'fos_rest.serializer.jms_handler_registry' shared service.
     *
     * @return \JMS\Serializer\Handler\LazyHandlerRegistry
     */
    protected function getFosRest_Serializer_JmsHandlerRegistryService()
    {
        return $this->services['fos_rest.serializer.jms_handler_registry'] = new \JMS\Serializer\Handler\LazyHandlerRegistry($this, array(2 => array('DateTime' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromjson'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromxml'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromyml')), 'DateTimeImmutable' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeImmutableFromjson'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeImmutableFromxml'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeImmutableFromyml')), 'DateInterval' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateIntervalFromjson'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateIntervalFromxml'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateIntervalFromyml')), 'ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\Common\\Collections\\ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\ORM\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\ODM\\MongoDB\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\ODM\\PHPCR\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'PhpCollection\\Sequence' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeSequence'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeSequence'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeSequence')), 'PhpCollection\\Map' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeMap'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeMap'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeMap'))), 1 => array('DateTime' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime')), 'DateTimeImmutable' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTimeImmutable'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTimeImmutable'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTimeImmutable')), 'DateInterval' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval')), 'ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\Common\\Collections\\ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\ORM\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\ODM\\MongoDB\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\ODM\\PHPCR\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'PhpCollection\\Sequence' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeSequence'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeSequence'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeSequence')), 'PhpCollection\\Map' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeMap'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeMap'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeMap')), 'Symfony\\Component\\Form\\Form' => array('xml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormToxml'), 'json' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormTojson'), 'yml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormToyml')), 'Symfony\\Component\\Form\\FormError' => array('xml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorToxml'), 'json' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorTojson'), 'yml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorToyml')), 'Symfony\\Component\\Validator\\ConstraintViolationList' => array('xml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListToxml'), 'json' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListTojson'), 'yml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListToyml')), 'Symfony\\Component\\Validator\\ConstraintViolation' => array('xml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationToxml'), 'json' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationTojson'), 'yml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationToyml')))));
    }

    /**
     * Gets the private 'jms_di_extra.controller_resolver' shared service.
     *
     * @return \JMS\DiExtraBundle\HttpKernel\ControllerResolver
     */
    protected function getJmsDiExtra_ControllerResolverService()
    {
        return $this->services['jms_di_extra.controller_resolver'] = new \JMS\DiExtraBundle\HttpKernel\ControllerResolver($this, ${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : $this->getControllerNameConverterService()) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.request']) ? $this->services['monolog.logger.request'] : $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the private 'jms_serializer.unserialize_object_constructor' shared service.
     *
     * @return \JMS\Serializer\Construction\UnserializeObjectConstructor
     */
    protected function getJmsSerializer_UnserializeObjectConstructorService()
    {
        return $this->services['jms_serializer.unserialize_object_constructor'] = new \JMS\Serializer\Construction\UnserializeObjectConstructor();
    }

    /**
     * Gets the private 'resolve_controller_name_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber
     */
    protected function getResolveControllerNameSubscriberService()
    {
        return $this->services['resolve_controller_name_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber(${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : $this->getControllerNameConverterService()) && false ?: '_'});
    }

    /**
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the private 'security.access.authenticated_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter
     */
    protected function getSecurity_Access_AuthenticatedVoterService()
    {
        return $this->services['security.access.authenticated_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter(${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->getSecurity_Authentication_TrustResolverService()) && false ?: '_'});
    }

    /**
     * Gets the private 'security.access.expression_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter
     */
    protected function getSecurity_Access_ExpressionVoterService()
    {
        return $this->services['security.access.expression_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter(new \Symfony\Component\Security\Core\Authorization\ExpressionLanguage(), ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->getSecurity_Authentication_TrustResolverService()) && false ?: '_'}, ${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->getSecurity_RoleHierarchyService()) && false ?: '_'});
    }

    /**
     * Gets the private 'security.access.simple_role_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\RoleVoter
     */
    protected function getSecurity_Access_SimpleRoleVoterService()
    {
        return $this->services['security.access.simple_role_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\RoleVoter();
    }

    /**
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->services['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['security.authentication.provider.anonymous.main']) ? $this->services['security.authentication.provider.anonymous.main'] : $this->getSecurity_Authentication_Provider_Anonymous_MainService()) && false ?: '_'};
        }, 1), true);

        $instance->setEventDispatcher(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->get('debug.event_dispatcher')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'security.authentication.provider.anonymous.main' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider
     */
    protected function getSecurity_Authentication_Provider_Anonymous_MainService()
    {
        return $this->services['security.authentication.provider.anonymous.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('5a4e6bef857a64.86224008');
    }

    /**
     * Gets the private 'security.authentication.trust_resolver' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver
     */
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }

    /**
     * Gets the private 'security.firewall.map' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallMap
     */
    protected function getSecurity_Firewall_MapService()
    {
        return $this->services['security.firewall.map'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallMap(new \Symfony\Component\DependencyInjection\ServiceLocator(array('security.firewall.map.context.dev' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.dev']) ? $this->services['security.firewall.map.context.dev'] : $this->get('security.firewall.map.context.dev')) && false ?: '_'};
        }, 'security.firewall.map.context.main' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.main']) ? $this->services['security.firewall.map.context.main'] : $this->get('security.firewall.map.context.main')) && false ?: '_'};
        })), new RewindableGenerator(function () {
            yield 'security.firewall.map.context.dev' => ${($_ = isset($this->services['security.request_matcher.5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1d']) ? $this->services['security.request_matcher.5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1d'] : $this->getSecurity_RequestMatcher_5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1dService()) && false ?: '_'};
            yield 'security.firewall.map.context.main' => NULL;
        }, 2));
    }

    /**
     * Gets the private 'security.logout_url_generator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        return $this->services['security.logout_url_generator'] = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the private 'security.request_matcher.5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1d' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestMatcher
     */
    protected function getSecurity_RequestMatcher_5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1dService()
    {
        return $this->services['security.request_matcher.5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1d'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/');
    }

    /**
     * Gets the private 'security.role_hierarchy' shared service.
     *
     * @return \Symfony\Component\Security\Core\Role\RoleHierarchy
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->services['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy(array());
    }

    /**
     * Gets the private 'security.user_value_resolver' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\SecurityUserValueResolver
     */
    protected function getSecurity_UserValueResolverService()
    {
        return $this->services['security.user_value_resolver'] = new \Symfony\Bundle\SecurityBundle\SecurityUserValueResolver(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage')) && false ?: '_'});
    }

    /**
     * Gets the private 'service_locator.e64d23c3bf770e2cf44b71643280668d' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getServiceLocator_E64d23c3bf770e2cf44b71643280668dService()
    {
        return $this->services['service_locator.e64d23c3bf770e2cf44b71643280668d'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('esi' => function () {
            return ${($_ = isset($this->services['fragment.renderer.esi']) ? $this->services['fragment.renderer.esi'] : $this->get('fragment.renderer.esi')) && false ?: '_'};
        }, 'hinclude' => function () {
            return ${($_ = isset($this->services['fragment.renderer.hinclude']) ? $this->services['fragment.renderer.hinclude'] : $this->get('fragment.renderer.hinclude')) && false ?: '_'};
        }, 'inline' => function () {
            return ${($_ = isset($this->services['fragment.renderer.inline']) ? $this->services['fragment.renderer.inline'] : $this->get('fragment.renderer.inline')) && false ?: '_'};
        }, 'ssi' => function () {
            return ${($_ = isset($this->services['fragment.renderer.ssi']) ? $this->services['fragment.renderer.ssi'] : $this->get('fragment.renderer.ssi')) && false ?: '_'};
        }));
    }

    /**
     * Gets the private 'session.storage.metadata_bag' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag
     */
    protected function getSession_Storage_MetadataBagService()
    {
        return $this->services['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', '0');
    }

    /**
     * Gets the private 'swiftmailer.mailer.default.transport.eventdispatcher' shared service.
     *
     * @return \Swift_Events_SimpleEventDispatcher
     */
    protected function getSwiftmailer_Mailer_Default_Transport_EventdispatcherService()
    {
        return $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher();
    }

    /**
     * Gets the private 'templating.locator' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator
     */
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator(${($_ = isset($this->services['file_locator']) ? $this->services['file_locator'] : $this->get('file_locator')) && false ?: '_'}, __DIR__);
    }

    /**
     * {@inheritdoc}
     */
    public function getParameter($name)
    {
        $name = strtolower($name);

        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters) || isset($this->loadedDynamicParameters[$name]))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    /**
     * {@inheritdoc}
     */
    public function hasParameter($name)
    {
        $name = strtolower($name);

        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters) || isset($this->loadedDynamicParameters[$name]);
    }

    /**
     * {@inheritdoc}
     */
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    /**
     * {@inheritdoc}
     */
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = array(
        'kernel.root_dir' => false,
        'kernel.project_dir' => false,
        'kernel.logs_dir' => false,
        'kernel.bundles_metadata' => false,
        'session.save_path' => false,
        'router.resource' => false,
        'jms_di_extra.directories' => false,
        'doctrine_migrations.dir_name' => false,
    );
    private $dynamicParameters = array();

    /**
     * Computes a dynamic parameter.
     *
     * @param string The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        switch ($name) {
            case 'kernel.root_dir': $value = ($this->targetDirs[3].'/app'); break;
            case 'kernel.project_dir': $value = $this->targetDirs[3]; break;
            case 'kernel.logs_dir': $value = ($this->targetDirs[2].'/logs'); break;
            case 'kernel.bundles_metadata': $value = array(
                'FrameworkBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ),
                'SecurityBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ),
                'TwigBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ),
                'MonologBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/monolog-bundle'),
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ),
                'SwiftmailerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SwiftmailerBundle',
                ),
                'DoctrineBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ),
                'SensioFrameworkExtraBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sensio/framework-extra-bundle'),
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ),
                'JMSDiExtraBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/jms/di-extra-bundle'),
                    'namespace' => 'JMS\\DiExtraBundle',
                ),
                'JMSAopBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/jms/aop-bundle'),
                    'namespace' => 'JMS\\AopBundle',
                ),
                'FOSRestBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/friendsofsymfony/rest-bundle'),
                    'namespace' => 'FOS\\RestBundle',
                ),
                'JMSSerializerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/jms/serializer-bundle'),
                    'namespace' => 'JMS\\SerializerBundle',
                ),
                'NelmioCorsBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/nelmio/cors-bundle'),
                    'namespace' => 'Nelmio\\CorsBundle',
                ),
                'AppBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/src/AppBundle'),
                    'namespace' => 'AppBundle',
                ),
                'AbstractBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/src/AbstractBundle'),
                    'namespace' => 'AbstractBundle',
                ),
                'DoctrineMigrationsBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-migrations-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\MigrationsBundle',
                ),
                'DebugBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/DebugBundle'),
                    'namespace' => 'Symfony\\Bundle\\DebugBundle',
                ),
                'WebProfilerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle'),
                    'namespace' => 'Symfony\\Bundle\\WebProfilerBundle',
                ),
                'SensioDistributionBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sensio/distribution-bundle'),
                    'namespace' => 'Sensio\\Bundle\\DistributionBundle',
                ),
                'DoctrineFixturesBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-fixtures-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\FixturesBundle',
                ),
                'NelmioAliceBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/nelmio/alice/src/Bridge/Symfony'),
                    'namespace' => 'Nelmio\\Alice\\Bridge\\Symfony',
                ),
                'FidryAliceDataFixturesBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/theofidry/alice-data-fixtures/src/Bridge/Symfony'),
                    'namespace' => 'Fidry\\AliceDataFixtures\\Bridge\\Symfony',
                ),
                'HautelookAliceBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/hautelook/alice-bundle/src'),
                    'namespace' => 'Hautelook\\AliceBundle',
                ),
            ); break;
            case 'session.save_path': $value = ($this->targetDirs[2].'/sessions/test'); break;
            case 'router.resource': $value = ($this->targetDirs[3].'/app/config/routing_dev.yml'); break;
            case 'jms_di_extra.directories': $value = array(
                0 => ($this->targetDirs[3].'/app/../src'),
            ); break;
            case 'doctrine_migrations.dir_name': $value = ($this->targetDirs[3].'/app/DoctrineMigrations'); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.environment' => 'test',
            'kernel.debug' => true,
            'kernel.name' => 'app',
            'kernel.cache_dir' => __DIR__,
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'JMSDiExtraBundle' => 'JMS\\DiExtraBundle\\JMSDiExtraBundle',
                'JMSAopBundle' => 'JMS\\AopBundle\\JMSAopBundle',
                'FOSRestBundle' => 'FOS\\RestBundle\\FOSRestBundle',
                'JMSSerializerBundle' => 'JMS\\SerializerBundle\\JMSSerializerBundle',
                'NelmioCorsBundle' => 'Nelmio\\CorsBundle\\NelmioCorsBundle',
                'AppBundle' => 'AppBundle\\AppBundle',
                'AbstractBundle' => 'AbstractBundle\\AbstractBundle',
                'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle',
                'DebugBundle' => 'Symfony\\Bundle\\DebugBundle\\DebugBundle',
                'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
                'SensioDistributionBundle' => 'Sensio\\Bundle\\DistributionBundle\\SensioDistributionBundle',
                'DoctrineFixturesBundle' => 'Doctrine\\Bundle\\FixturesBundle\\DoctrineFixturesBundle',
                'NelmioAliceBundle' => 'Nelmio\\Alice\\Bridge\\Symfony\\NelmioAliceBundle',
                'FidryAliceDataFixturesBundle' => 'Fidry\\AliceDataFixtures\\Bridge\\Symfony\\FidryAliceDataFixturesBundle',
                'HautelookAliceBundle' => 'Hautelook\\AliceBundle\\HautelookAliceBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appTestDebugProjectContainer',
            'database_host' => '127.0.0.1',
            'database_port' => NULL,
            'database_name' => 'db_symfony',
            'database_name_test' => 'db_symfony_test',
            'database_user' => 'root',
            'database_password' => 123,
            'mailer_transport' => 'smtp',
            'mailer_host' => '127.0.0.1',
            'mailer_user' => NULL,
            'mailer_password' => NULL,
            'secret' => '1b8ebd19769bd8b76fcef76b992f8f4b1d51834c',
            'locale' => 'en',
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.path' => '/_fragment',
            'kernel.secret' => '1b8ebd19769bd8b76fcef76b992f8f4b1d51834c',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => array(

            ),
            'kernel.default_locale' => 'en',
            'templating.helper.code.file_link_format' => NULL,
            'debug.file_link_format' => NULL,
            'test.client.parameters' => array(

            ),
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => array(
                'cookie_httponly' => true,
                'gc_probability' => 1,
            ),
            'session.metadata.update_threshold' => '0',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'twig',
            ),
            'validator.mapping.cache.prefix' => '',
            'validator.mapping.cache.file' => (__DIR__.'/validation.php'),
            'validator.translation_domain' => 'validators',
            'profiler_listener.only_exceptions' => false,
            'profiler_listener.only_master_requests' => false,
            'profiler.storage.dsn' => ('file:'.__DIR__.'/profiler'),
            'debug.error_handler.throw_at' => -1,
            'debug.container.dump' => (__DIR__.'/appTestDebugProjectContainer.xml'),
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.options.matcher.cache_class' => 'appTestDebugProjectContainerUrlMatcher',
            'router.options.generator.cache_class' => 'appTestDebugProjectContainerUrlGenerator',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.cache_class_prefix' => 'appTestDebugProjectContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.role_hierarchy.roles' => array(

            ),
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => array(
                0 => 'form_div_layout.html.twig',
            ),
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => array(

            ),
            'monolog.handlers_to_channels' => array(
                'monolog.handler.server_log' => NULL,
                'monolog.handler.console' => array(
                    'type' => 'exclusive',
                    'elements' => array(
                        0 => 'event',
                        1 => 'doctrine',
                        2 => 'console',
                    ),
                ),
                'monolog.handler.main' => array(
                    'type' => 'exclusive',
                    'elements' => array(
                        0 => 'event',
                    ),
                ),
            ),
            'swiftmailer.class' => 'Swift_Mailer',
            'swiftmailer.transport.sendmail.class' => 'Swift_Transport_SendmailTransport',
            'swiftmailer.transport.mail.class' => 'Swift_Transport_MailTransport',
            'swiftmailer.transport.failover.class' => 'Swift_Transport_FailoverTransport',
            'swiftmailer.plugin.redirecting.class' => 'Swift_Plugins_RedirectingPlugin',
            'swiftmailer.plugin.impersonate.class' => 'Swift_Plugins_ImpersonatePlugin',
            'swiftmailer.plugin.messagelogger.class' => 'Swift_Plugins_MessageLogger',
            'swiftmailer.plugin.antiflood.class' => 'Swift_Plugins_AntiFloodPlugin',
            'swiftmailer.transport.smtp.class' => 'Swift_Transport_EsmtpTransport',
            'swiftmailer.plugin.blackhole.class' => 'Swift_Plugins_BlackholePlugin',
            'swiftmailer.spool.file.class' => 'Swift_FileSpool',
            'swiftmailer.spool.memory.class' => 'Swift_MemorySpool',
            'swiftmailer.email_sender.listener.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener',
            'swiftmailer.data_collector.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector',
            'swiftmailer.mailer.default.transport.name' => 'null',
            'swiftmailer.mailer.default.transport.smtp.encryption' => NULL,
            'swiftmailer.mailer.default.transport.smtp.port' => 25,
            'swiftmailer.mailer.default.transport.smtp.host' => '127.0.0.1',
            'swiftmailer.mailer.default.transport.smtp.username' => NULL,
            'swiftmailer.mailer.default.transport.smtp.password' => NULL,
            'swiftmailer.mailer.default.transport.smtp.auth_mode' => NULL,
            'swiftmailer.mailer.default.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.default.transport.smtp.source_ip' => NULL,
            'swiftmailer.mailer.default.transport.smtp.local_domain' => NULL,
            'swiftmailer.spool.default.memory.path' => (__DIR__.'/swiftmailer/spool/default'),
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.mailer.default.delivery.enabled' => false,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => false,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => array(
                'default' => 'swiftmailer.mailer.default',
            ),
            'swiftmailer.default_mailer' => 'default',
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.apcu.class' => 'Doctrine\\Common\\Cache\\ApcuCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.chain.class' => 'Doctrine\\Common\\Cache\\ChainCache',
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.predis.client.class' => 'Predis\\Client',
            'doctrine_cache.predis.scheme' => 'tcp',
            'doctrine_cache.predis.host' => 'localhost',
            'doctrine_cache.predis.port' => 6379,
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.sqlite3.class' => 'Doctrine\\Common\\Cache\\SQLite3Cache',
            'doctrine_cache.sqlite3.connection.class' => 'SQLite3',
            'doctrine_cache.void.class' => 'Doctrine\\Common\\Cache\\VoidCache',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => array(
                'default' => 'doctrine.orm.default_entity_manager',
            ),
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => array(

            ),
            'doctrine.connections' => array(
                'default' => 'doctrine.dbal.default_connection',
            ),
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerAwareEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.proxy_dir' => (__DIR__.'/doctrine/orm/Proxies'),
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'sensio_framework_extra.view.guesser.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Templating\\TemplateGuesser',
            'sensio_framework_extra.controller.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener',
            'sensio_framework_extra.routing.loader.annot_dir.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader',
            'sensio_framework_extra.routing.loader.annot_file.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader',
            'sensio_framework_extra.routing.loader.annot_class.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Routing\\AnnotatedRouteControllerLoader',
            'sensio_framework_extra.converter.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener',
            'sensio_framework_extra.converter.manager.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\ParamConverterManager',
            'sensio_framework_extra.converter.doctrine.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DoctrineParamConverter',
            'sensio_framework_extra.converter.datetime.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DateTimeParamConverter',
            'sensio_framework_extra.view.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener',
            'jms_di_extra.metadata.driver.annotation_driver.class' => 'JMS\\DiExtraBundle\\Metadata\\Driver\\AnnotationDriver',
            'jms_di_extra.metadata.driver.configured_controller_injections.class' => 'JMS\\DiExtraBundle\\Metadata\\Driver\\ConfiguredControllerInjectionsDriver',
            'jms_di_extra.metadata.driver.lazy_loading_driver.class' => 'Metadata\\Driver\\LazyLoadingDriver',
            'jms_di_extra.service_naming_strategy.default.class' => 'JMS\\DiExtraBundle\\Metadata\\DefaultNamingStrategy',
            'jms_di_extra.metadata.metadata_factory.class' => 'Metadata\\MetadataFactory',
            'jms_di_extra.metadata.cache.file_cache.class' => 'Metadata\\Cache\\FileCache',
            'jms_di_extra.metadata.converter.class' => 'JMS\\DiExtraBundle\\Metadata\\MetadataConverter',
            'jms_di_extra.controller_resolver.class' => 'JMS\\DiExtraBundle\\HttpKernel\\ControllerResolver',
            'jms_di_extra.controller_injectors_warmer.class' => 'JMS\\DiExtraBundle\\HttpKernel\\ControllerInjectorsWarmer',
            'jms_di_extra.all_bundles' => true,
            'jms_di_extra.bundles' => array(
                0 => 'AppBundle',
                1 => 'AbstractBundle',
            ),
            'jms_di_extra.cache_dir' => (__DIR__.'/jms_diextra'),
            'jms_di_extra.disable_grep' => false,
            'jms_di_extra.doctrine_integration' => true,
            'jms_di_extra.cache_warmer.controller_file_blacklist' => array(

            ),
            'jms_di_extra.doctrine_integration.entity_manager.file' => (__DIR__.'/jms_diextra/doctrine/EntityManager_5a4e6bef96cde.php'),
            'jms_di_extra.doctrine_integration.entity_manager.class' => 'EntityManager5a4e6bef96cde_546a8d27f194334ee012bfe64f629947b07e4919\\__CG__\\Doctrine\\ORM\\EntityManager',
            'jms_aop.cache_dir' => (__DIR__.'/jms_aop'),
            'jms_aop.interceptor_loader.class' => 'JMS\\AopBundle\\Aop\\InterceptorLoader',
            'jms_serializer.form_error_handler.class' => 'JMS\\Serializer\\Handler\\FormErrorHandler',
            'fos_rest.format_listener.rules' => NULL,
            'jms_serializer.metadata.file_locator.class' => 'Metadata\\Driver\\FileLocator',
            'jms_serializer.metadata.annotation_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\AnnotationDriver',
            'jms_serializer.metadata.chain_driver.class' => 'Metadata\\Driver\\DriverChain',
            'jms_serializer.metadata.yaml_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\YamlDriver',
            'jms_serializer.metadata.xml_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\XmlDriver',
            'jms_serializer.metadata.php_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\PhpDriver',
            'jms_serializer.metadata.doctrine_type_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\DoctrineTypeDriver',
            'jms_serializer.metadata.doctrine_phpcr_type_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\DoctrinePHPCRTypeDriver',
            'jms_serializer.metadata.lazy_loading_driver.class' => 'Metadata\\Driver\\LazyLoadingDriver',
            'jms_serializer.metadata.metadata_factory.class' => 'Metadata\\MetadataFactory',
            'jms_serializer.metadata.cache.file_cache.class' => 'Metadata\\Cache\\FileCache',
            'jms_serializer.event_dispatcher.class' => 'JMS\\Serializer\\EventDispatcher\\LazyEventDispatcher',
            'jms_serializer.camel_case_naming_strategy.class' => 'JMS\\Serializer\\Naming\\CamelCaseNamingStrategy',
            'jms_serializer.identical_property_naming_strategy.class' => 'JMS\\Serializer\\Naming\\IdenticalPropertyNamingStrategy',
            'jms_serializer.serialized_name_annotation_strategy.class' => 'JMS\\Serializer\\Naming\\SerializedNameAnnotationStrategy',
            'jms_serializer.cache_naming_strategy.class' => 'JMS\\Serializer\\Naming\\CacheNamingStrategy',
            'jms_serializer.doctrine_object_constructor.class' => 'JMS\\Serializer\\Construction\\DoctrineObjectConstructor',
            'jms_serializer.unserialize_object_constructor.class' => 'JMS\\Serializer\\Construction\\UnserializeObjectConstructor',
            'jms_serializer.version_exclusion_strategy.class' => 'JMS\\Serializer\\Exclusion\\VersionExclusionStrategy',
            'jms_serializer.serializer.class' => 'JMS\\Serializer\\Serializer',
            'jms_serializer.twig_extension.class' => 'JMS\\Serializer\\Twig\\SerializerExtension',
            'jms_serializer.twig_runtime_extension.class' => 'JMS\\Serializer\\Twig\\SerializerRuntimeExtension',
            'jms_serializer.twig_runtime_extension_helper.class' => 'JMS\\Serializer\\Twig\\SerializerRuntimeHelper',
            'jms_serializer.templating.helper.class' => 'JMS\\SerializerBundle\\Templating\\SerializerHelper',
            'jms_serializer.json_serialization_visitor.class' => 'JMS\\Serializer\\JsonSerializationVisitor',
            'jms_serializer.json_serialization_visitor.options' => 0,
            'jms_serializer.json_deserialization_visitor.class' => 'JMS\\Serializer\\JsonDeserializationVisitor',
            'jms_serializer.xml_serialization_visitor.class' => 'JMS\\Serializer\\XmlSerializationVisitor',
            'jms_serializer.xml_deserialization_visitor.class' => 'JMS\\Serializer\\XmlDeserializationVisitor',
            'jms_serializer.xml_deserialization_visitor.doctype_whitelist' => array(

            ),
            'jms_serializer.xml_serialization_visitor.format_output' => true,
            'jms_serializer.yaml_serialization_visitor.class' => 'JMS\\Serializer\\YamlSerializationVisitor',
            'jms_serializer.handler_registry.class' => 'JMS\\Serializer\\Handler\\LazyHandlerRegistry',
            'jms_serializer.datetime_handler.class' => 'JMS\\Serializer\\Handler\\DateHandler',
            'jms_serializer.array_collection_handler.class' => 'JMS\\Serializer\\Handler\\ArrayCollectionHandler',
            'jms_serializer.php_collection_handler.class' => 'JMS\\Serializer\\Handler\\PhpCollectionHandler',
            'jms_serializer.constraint_violation_handler.class' => 'JMS\\Serializer\\Handler\\ConstraintViolationHandler',
            'jms_serializer.doctrine_proxy_subscriber.class' => 'JMS\\Serializer\\EventDispatcher\\Subscriber\\DoctrineProxySubscriber',
            'jms_serializer.stopwatch_subscriber.class' => 'JMS\\SerializerBundle\\Serializer\\StopwatchEventSubscriber',
            'jms_serializer.configured_context_factory.class' => 'JMS\\SerializerBundle\\ContextFactory\\ConfiguredContextFactory',
            'jms_serializer.expression_evaluator.class' => 'JMS\\Serializer\\Expression\\ExpressionEvaluator',
            'jms_serializer.expression_language.class' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage',
            'jms_serializer.expression_language.function_provider.class' => 'JMS\\SerializerBundle\\ExpressionLanguage\\BasicSerializerFunctionsProvider',
            'jms_serializer.accessor_strategy.default.class' => 'JMS\\Serializer\\Accessor\\DefaultAccessorStrategy',
            'jms_serializer.accessor_strategy.expression.class' => 'JMS\\Serializer\\Accessor\\ExpressionAccessorStrategy',
            'nelmio_cors.map' => array(

            ),
            'nelmio_cors.defaults' => array(
                'allow_origin' => true,
                'allow_credentials' => false,
                'allow_headers' => true,
                'expose_headers' => array(

                ),
                'allow_methods' => array(
                    0 => 'GET',
                    1 => 'POST',
                    2 => 'PUT',
                    3 => 'DELETE',
                    4 => 'OPTIONS',
                ),
                'max_age' => 3600,
                'hosts' => array(

                ),
                'origin_regex' => false,
                'forced_allow_origin_value' => NULL,
            ),
            'nelmio_cors.cors_listener.class' => 'Nelmio\\CorsBundle\\EventListener\\CorsListener',
            'nelmio_cors.options_resolver.class' => 'Nelmio\\CorsBundle\\Options\\Resolver',
            'nelmio_cors.options_provider.config.class' => 'Nelmio\\CorsBundle\\Options\\ConfigProvider',
            'doctrine_migrations.namespace' => 'Application\\Migrations',
            'doctrine_migrations.table_name' => 'migration_versions',
            'doctrine_migrations.name' => 'Application Migrations',
            'doctrine_migrations.organize_migrations' => false,
            'web_profiler.debug_toolbar.position' => 'bottom',
            'nelmio_alice.locale' => 'en_US',
            'nelmio_alice.seed' => 1,
            'nelmio_alice.functions_blacklist' => array(
                0 => 'current',
            ),
            'nelmio_alice.loading_limit' => 5,
            'nelmio_alice.max_unique_values_retry' => 150,
            'hautelook_alice.fixtures_path' => 'Resources/fixtures/orm',
            'data_collector.templates' => array(
                'data_collector.request' => array(
                    0 => 'request',
                    1 => '@WebProfiler/Collector/request.html.twig',
                ),
                'data_collector.time' => array(
                    0 => 'time',
                    1 => '@WebProfiler/Collector/time.html.twig',
                ),
                'data_collector.memory' => array(
                    0 => 'memory',
                    1 => '@WebProfiler/Collector/memory.html.twig',
                ),
                'data_collector.ajax' => array(
                    0 => 'ajax',
                    1 => '@WebProfiler/Collector/ajax.html.twig',
                ),
                'data_collector.form' => array(
                    0 => 'form',
                    1 => '@WebProfiler/Collector/form.html.twig',
                ),
                'data_collector.exception' => array(
                    0 => 'exception',
                    1 => '@WebProfiler/Collector/exception.html.twig',
                ),
                'data_collector.logger' => array(
                    0 => 'logger',
                    1 => '@WebProfiler/Collector/logger.html.twig',
                ),
                'data_collector.events' => array(
                    0 => 'events',
                    1 => '@WebProfiler/Collector/events.html.twig',
                ),
                'data_collector.router' => array(
                    0 => 'router',
                    1 => '@WebProfiler/Collector/router.html.twig',
                ),
                'data_collector.cache' => array(
                    0 => 'cache',
                    1 => '@WebProfiler/Collector/cache.html.twig',
                ),
                'data_collector.security' => array(
                    0 => 'security',
                    1 => '@Security/Collector/security.html.twig',
                ),
                'data_collector.twig' => array(
                    0 => 'twig',
                    1 => '@WebProfiler/Collector/twig.html.twig',
                ),
                'data_collector.doctrine' => array(
                    0 => 'db',
                    1 => '@Doctrine/Collector/db.html.twig',
                ),
                'swiftmailer.data_collector' => array(
                    0 => 'swiftmailer',
                    1 => '@Swiftmailer/Collector/swiftmailer.html.twig',
                ),
                'data_collector.dump' => array(
                    0 => 'dump',
                    1 => '@Debug/Profiler/dump.html.twig',
                ),
                'data_collector.config' => array(
                    0 => 'config',
                    1 => '@WebProfiler/Collector/config.html.twig',
                ),
            ),
            'console.command.ids' => array(
                'console.command.symfony_bundle_securitybundle_command_userpasswordencodercommand' => 'console.command.symfony_bundle_securitybundle_command_userpasswordencodercommand',
                'console.command.sensiolabs_security_command_securitycheckercommand' => 'sensio_distribution.security_checker.command',
                'console.command.hautelook_alicebundle_console_command_doctrine_doctrineormloaddatafixturescommand' => 'hautelook_alice.console.command.doctrine.doctrine_orm_load_data_fixtures_command',
            ),
        );
    }
}

class FidryAliceDataFixturesLoaderMultiPassLoader_00000000037701bd0000000052ea3400deb914fd286e82d6bd36b5a641b110e5 extends \Fidry\AliceDataFixtures\Loader\MultiPassLoader implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder5a4e6bf0130ad268248820 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5a4e6bf0130b8111001082 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5a4e6bf01307e325360929 = array(
        
    );

    /**
     * {@inheritDoc}
     */
    public function load(array $fixturesFiles, array $parameters = array(), array $objects = array(), ?\Fidry\AliceDataFixtures\Persistence\PurgeMode $purgeMode = null) : array
    {
        $this->initializer5a4e6bf0130b8111001082 && $this->initializer5a4e6bf0130b8111001082->__invoke($this->valueHolder5a4e6bf0130ad268248820, $this, 'load', array('fixturesFiles' => $fixturesFiles, 'parameters' => $parameters, 'objects' => $objects, 'purgeMode' => $purgeMode), $this->initializer5a4e6bf0130b8111001082);

        return $this->valueHolder5a4e6bf0130ad268248820->load($fixturesFiles, $parameters, $objects, $purgeMode);
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();

        \Closure::bind(function (\Fidry\AliceDataFixtures\Loader\MultiPassLoader $instance) {
            unset($instance->loader, $instance->maxPass);
        }, $instance, 'Fidry\\AliceDataFixtures\\Loader\\MultiPassLoader')->__invoke($instance);

        $instance->initializer5a4e6bf0130b8111001082 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Nelmio\Alice\FileLoaderInterface $fileLoader, int $maxPass = 15)
    {
        static $reflection;

        if (! $this->valueHolder5a4e6bf0130ad268248820) {
            $reflection = $reflection ?: new \ReflectionClass('Fidry\\AliceDataFixtures\\Loader\\MultiPassLoader');
            $this->valueHolder5a4e6bf0130ad268248820 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Fidry\AliceDataFixtures\Loader\MultiPassLoader $instance) {
            unset($instance->loader, $instance->maxPass);
        }, $this, 'Fidry\\AliceDataFixtures\\Loader\\MultiPassLoader')->__invoke($this);

        }

        $this->valueHolder5a4e6bf0130ad268248820->__construct($fileLoader, $maxPass);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer5a4e6bf0130b8111001082 && $this->initializer5a4e6bf0130b8111001082->__invoke($this->valueHolder5a4e6bf0130ad268248820, $this, '__get', ['name' => $name], $this->initializer5a4e6bf0130b8111001082);

        if (isset(self::$publicProperties5a4e6bf01307e325360929[$name])) {
            return $this->valueHolder5a4e6bf0130ad268248820->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a4e6bf0130ad268248820;

            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder5a4e6bf0130ad268248820;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer5a4e6bf0130b8111001082 && $this->initializer5a4e6bf0130b8111001082->__invoke($this->valueHolder5a4e6bf0130ad268248820, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5a4e6bf0130b8111001082);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a4e6bf0130ad268248820;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder5a4e6bf0130ad268248820;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer5a4e6bf0130b8111001082 && $this->initializer5a4e6bf0130b8111001082->__invoke($this->valueHolder5a4e6bf0130ad268248820, $this, '__isset', array('name' => $name), $this->initializer5a4e6bf0130b8111001082);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a4e6bf0130ad268248820;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder5a4e6bf0130ad268248820;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer5a4e6bf0130b8111001082 && $this->initializer5a4e6bf0130b8111001082->__invoke($this->valueHolder5a4e6bf0130ad268248820, $this, '__unset', array('name' => $name), $this->initializer5a4e6bf0130b8111001082);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a4e6bf0130ad268248820;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder5a4e6bf0130ad268248820;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * {@inheritDoc}
     */
    public function __clone()
    {
        $this->initializer5a4e6bf0130b8111001082 && $this->initializer5a4e6bf0130b8111001082->__invoke($this->valueHolder5a4e6bf0130ad268248820, $this, '__clone', array(), $this->initializer5a4e6bf0130b8111001082);

        $this->valueHolder5a4e6bf0130ad268248820 = clone $this->valueHolder5a4e6bf0130ad268248820;
    }

    public function __sleep()
    {
        $this->initializer5a4e6bf0130b8111001082 && $this->initializer5a4e6bf0130b8111001082->__invoke($this->valueHolder5a4e6bf0130ad268248820, $this, '__sleep', array(), $this->initializer5a4e6bf0130b8111001082);

        return array('valueHolder5a4e6bf0130ad268248820');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Fidry\AliceDataFixtures\Loader\MultiPassLoader $instance) {
            unset($instance->loader, $instance->maxPass);
        }, $this, 'Fidry\\AliceDataFixtures\\Loader\\MultiPassLoader')->__invoke($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer5a4e6bf0130b8111001082 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer5a4e6bf0130b8111001082;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer5a4e6bf0130b8111001082 && $this->initializer5a4e6bf0130b8111001082->__invoke($this->valueHolder5a4e6bf0130ad268248820, $this, 'initializeProxy', array(), $this->initializer5a4e6bf0130b8111001082);
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5a4e6bf0130ad268248820;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5a4e6bf0130ad268248820;
    }


}

class FidryAliceDataFixturesLoaderSimpleLoader_00000000037701b90000000052ea3400deb914fd286e82d6bd36b5a641b110e5 extends \Fidry\AliceDataFixtures\Loader\SimpleLoader implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder5a4e6bf01388b452576739 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5a4e6bf013894089762867 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5a4e6bf01386a850744766 = array(
        
    );

    /**
     * {@inheritDoc}
     */
    public function load(array $fixturesFiles, array $parameters = array(), array $objects = array(), ?\Fidry\AliceDataFixtures\Persistence\PurgeMode $purgeMode = null) : array
    {
        $this->initializer5a4e6bf013894089762867 && $this->initializer5a4e6bf013894089762867->__invoke($this->valueHolder5a4e6bf01388b452576739, $this, 'load', array('fixturesFiles' => $fixturesFiles, 'parameters' => $parameters, 'objects' => $objects, 'purgeMode' => $purgeMode), $this->initializer5a4e6bf013894089762867);

        return $this->valueHolder5a4e6bf01388b452576739->load($fixturesFiles, $parameters, $objects, $purgeMode);
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();

        \Closure::bind(function (\Fidry\AliceDataFixtures\Loader\SimpleLoader $instance) {
            unset($instance->fileLoader);
        }, $instance, 'Fidry\\AliceDataFixtures\\Loader\\SimpleLoader')->__invoke($instance);

        $instance->initializer5a4e6bf013894089762867 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Nelmio\Alice\FileLoaderInterface $fileLoader)
    {
        static $reflection;

        if (! $this->valueHolder5a4e6bf01388b452576739) {
            $reflection = $reflection ?: new \ReflectionClass('Fidry\\AliceDataFixtures\\Loader\\SimpleLoader');
            $this->valueHolder5a4e6bf01388b452576739 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Fidry\AliceDataFixtures\Loader\SimpleLoader $instance) {
            unset($instance->fileLoader);
        }, $this, 'Fidry\\AliceDataFixtures\\Loader\\SimpleLoader')->__invoke($this);

        }

        $this->valueHolder5a4e6bf01388b452576739->__construct($fileLoader);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer5a4e6bf013894089762867 && $this->initializer5a4e6bf013894089762867->__invoke($this->valueHolder5a4e6bf01388b452576739, $this, '__get', ['name' => $name], $this->initializer5a4e6bf013894089762867);

        if (isset(self::$publicProperties5a4e6bf01386a850744766[$name])) {
            return $this->valueHolder5a4e6bf01388b452576739->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a4e6bf01388b452576739;

            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder5a4e6bf01388b452576739;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer5a4e6bf013894089762867 && $this->initializer5a4e6bf013894089762867->__invoke($this->valueHolder5a4e6bf01388b452576739, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5a4e6bf013894089762867);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a4e6bf01388b452576739;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder5a4e6bf01388b452576739;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer5a4e6bf013894089762867 && $this->initializer5a4e6bf013894089762867->__invoke($this->valueHolder5a4e6bf01388b452576739, $this, '__isset', array('name' => $name), $this->initializer5a4e6bf013894089762867);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a4e6bf01388b452576739;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder5a4e6bf01388b452576739;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer5a4e6bf013894089762867 && $this->initializer5a4e6bf013894089762867->__invoke($this->valueHolder5a4e6bf01388b452576739, $this, '__unset', array('name' => $name), $this->initializer5a4e6bf013894089762867);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a4e6bf01388b452576739;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder5a4e6bf01388b452576739;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * {@inheritDoc}
     */
    public function __clone()
    {
        $this->initializer5a4e6bf013894089762867 && $this->initializer5a4e6bf013894089762867->__invoke($this->valueHolder5a4e6bf01388b452576739, $this, '__clone', array(), $this->initializer5a4e6bf013894089762867);

        $this->valueHolder5a4e6bf01388b452576739 = clone $this->valueHolder5a4e6bf01388b452576739;
    }

    public function __sleep()
    {
        $this->initializer5a4e6bf013894089762867 && $this->initializer5a4e6bf013894089762867->__invoke($this->valueHolder5a4e6bf01388b452576739, $this, '__sleep', array(), $this->initializer5a4e6bf013894089762867);

        return array('valueHolder5a4e6bf01388b452576739');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Fidry\AliceDataFixtures\Loader\SimpleLoader $instance) {
            unset($instance->fileLoader);
        }, $this, 'Fidry\\AliceDataFixtures\\Loader\\SimpleLoader')->__invoke($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer5a4e6bf013894089762867 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer5a4e6bf013894089762867;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer5a4e6bf013894089762867 && $this->initializer5a4e6bf013894089762867->__invoke($this->valueHolder5a4e6bf01388b452576739, $this, 'initializeProxy', array(), $this->initializer5a4e6bf013894089762867);
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5a4e6bf01388b452576739;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5a4e6bf01388b452576739;
    }


}

class FidryAliceDataFixturesBridgeDoctrinePurgerPurger_00000000037701a60000000052ea3400deb914fd286e82d6bd36b5a641b110e5 extends \Fidry\AliceDataFixtures\Bridge\Doctrine\Purger\Purger implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder5a4e6bf013d7e409328014 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5a4e6bf013d88621621095 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5a4e6bf013d60764450011 = array(
        
    );

    /**
     * {@inheritDoc}
     */
    public function create(\Fidry\AliceDataFixtures\Persistence\PurgeMode $mode, ?\Fidry\AliceDataFixtures\Persistence\PurgerInterface $purger = null) : \Fidry\AliceDataFixtures\Persistence\PurgerInterface
    {
        $this->initializer5a4e6bf013d88621621095 && $this->initializer5a4e6bf013d88621621095->__invoke($this->valueHolder5a4e6bf013d7e409328014, $this, 'create', array('mode' => $mode, 'purger' => $purger), $this->initializer5a4e6bf013d88621621095);

        return $this->valueHolder5a4e6bf013d7e409328014->create($mode, $purger);
    }

    /**
     * {@inheritDoc}
     */
    public function purge()
    {
        $this->initializer5a4e6bf013d88621621095 && $this->initializer5a4e6bf013d88621621095->__invoke($this->valueHolder5a4e6bf013d7e409328014, $this, 'purge', array(), $this->initializer5a4e6bf013d88621621095);

        return $this->valueHolder5a4e6bf013d7e409328014->purge();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();

        \Closure::bind(function (\Fidry\AliceDataFixtures\Bridge\Doctrine\Purger\Purger $instance) {
            unset($instance->manager, $instance->purger);
        }, $instance, 'Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Purger\\Purger')->__invoke($instance);

        $instance->initializer5a4e6bf013d88621621095 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Doctrine\Common\Persistence\ObjectManager $manager, ?\Fidry\AliceDataFixtures\Persistence\PurgeMode $purgeMode = null)
    {
        static $reflection;

        if (! $this->valueHolder5a4e6bf013d7e409328014) {
            $reflection = $reflection ?: new \ReflectionClass('Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Purger\\Purger');
            $this->valueHolder5a4e6bf013d7e409328014 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Fidry\AliceDataFixtures\Bridge\Doctrine\Purger\Purger $instance) {
            unset($instance->manager, $instance->purger);
        }, $this, 'Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Purger\\Purger')->__invoke($this);

        }

        $this->valueHolder5a4e6bf013d7e409328014->__construct($manager, $purgeMode);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer5a4e6bf013d88621621095 && $this->initializer5a4e6bf013d88621621095->__invoke($this->valueHolder5a4e6bf013d7e409328014, $this, '__get', ['name' => $name], $this->initializer5a4e6bf013d88621621095);

        if (isset(self::$publicProperties5a4e6bf013d60764450011[$name])) {
            return $this->valueHolder5a4e6bf013d7e409328014->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a4e6bf013d7e409328014;

            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder5a4e6bf013d7e409328014;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer5a4e6bf013d88621621095 && $this->initializer5a4e6bf013d88621621095->__invoke($this->valueHolder5a4e6bf013d7e409328014, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5a4e6bf013d88621621095);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a4e6bf013d7e409328014;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder5a4e6bf013d7e409328014;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer5a4e6bf013d88621621095 && $this->initializer5a4e6bf013d88621621095->__invoke($this->valueHolder5a4e6bf013d7e409328014, $this, '__isset', array('name' => $name), $this->initializer5a4e6bf013d88621621095);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a4e6bf013d7e409328014;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder5a4e6bf013d7e409328014;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer5a4e6bf013d88621621095 && $this->initializer5a4e6bf013d88621621095->__invoke($this->valueHolder5a4e6bf013d7e409328014, $this, '__unset', array('name' => $name), $this->initializer5a4e6bf013d88621621095);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a4e6bf013d7e409328014;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder5a4e6bf013d7e409328014;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * {@inheritDoc}
     */
    public function __clone()
    {
        $this->initializer5a4e6bf013d88621621095 && $this->initializer5a4e6bf013d88621621095->__invoke($this->valueHolder5a4e6bf013d7e409328014, $this, '__clone', array(), $this->initializer5a4e6bf013d88621621095);

        $this->valueHolder5a4e6bf013d7e409328014 = clone $this->valueHolder5a4e6bf013d7e409328014;
    }

    public function __sleep()
    {
        $this->initializer5a4e6bf013d88621621095 && $this->initializer5a4e6bf013d88621621095->__invoke($this->valueHolder5a4e6bf013d7e409328014, $this, '__sleep', array(), $this->initializer5a4e6bf013d88621621095);

        return array('valueHolder5a4e6bf013d7e409328014');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Fidry\AliceDataFixtures\Bridge\Doctrine\Purger\Purger $instance) {
            unset($instance->manager, $instance->purger);
        }, $this, 'Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Purger\\Purger')->__invoke($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer5a4e6bf013d88621621095 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer5a4e6bf013d88621621095;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer5a4e6bf013d88621621095 && $this->initializer5a4e6bf013d88621621095->__invoke($this->valueHolder5a4e6bf013d7e409328014, $this, 'initializeProxy', array(), $this->initializer5a4e6bf013d88621621095);
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5a4e6bf013d7e409328014;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5a4e6bf013d7e409328014;
    }


}

class FidryAliceDataFixturesBridgeDoctrinePersisterObjectManagerPersister_00000000037701a00000000052ea3400deb914fd286e82d6bd36b5a641b110e5 extends \Fidry\AliceDataFixtures\Bridge\Doctrine\Persister\ObjectManagerPersister implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder5a4e6bf0144a5301609363 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5a4e6bf0144ad594260805 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5a4e6bf014485939101973 = array(
        
    );

    /**
     * {@inheritDoc}
     */
    public function persist($object)
    {
        $this->initializer5a4e6bf0144ad594260805 && $this->initializer5a4e6bf0144ad594260805->__invoke($this->valueHolder5a4e6bf0144a5301609363, $this, 'persist', array('object' => $object), $this->initializer5a4e6bf0144ad594260805);

        return $this->valueHolder5a4e6bf0144a5301609363->persist($object);
    }

    /**
     * {@inheritDoc}
     */
    public function flush()
    {
        $this->initializer5a4e6bf0144ad594260805 && $this->initializer5a4e6bf0144ad594260805->__invoke($this->valueHolder5a4e6bf0144a5301609363, $this, 'flush', array(), $this->initializer5a4e6bf0144ad594260805);

        return $this->valueHolder5a4e6bf0144a5301609363->flush();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();

        \Closure::bind(function (\Fidry\AliceDataFixtures\Bridge\Doctrine\Persister\ObjectManagerPersister $instance) {
            unset($instance->objectManager, $instance->persistableClasses);
        }, $instance, 'Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister')->__invoke($instance);

        $instance->initializer5a4e6bf0144ad594260805 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Doctrine\Common\Persistence\ObjectManager $manager)
    {
        static $reflection;

        if (! $this->valueHolder5a4e6bf0144a5301609363) {
            $reflection = $reflection ?: new \ReflectionClass('Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister');
            $this->valueHolder5a4e6bf0144a5301609363 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Fidry\AliceDataFixtures\Bridge\Doctrine\Persister\ObjectManagerPersister $instance) {
            unset($instance->objectManager, $instance->persistableClasses);
        }, $this, 'Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister')->__invoke($this);

        }

        $this->valueHolder5a4e6bf0144a5301609363->__construct($manager);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer5a4e6bf0144ad594260805 && $this->initializer5a4e6bf0144ad594260805->__invoke($this->valueHolder5a4e6bf0144a5301609363, $this, '__get', ['name' => $name], $this->initializer5a4e6bf0144ad594260805);

        if (isset(self::$publicProperties5a4e6bf014485939101973[$name])) {
            return $this->valueHolder5a4e6bf0144a5301609363->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a4e6bf0144a5301609363;

            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder5a4e6bf0144a5301609363;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer5a4e6bf0144ad594260805 && $this->initializer5a4e6bf0144ad594260805->__invoke($this->valueHolder5a4e6bf0144a5301609363, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5a4e6bf0144ad594260805);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a4e6bf0144a5301609363;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder5a4e6bf0144a5301609363;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer5a4e6bf0144ad594260805 && $this->initializer5a4e6bf0144ad594260805->__invoke($this->valueHolder5a4e6bf0144a5301609363, $this, '__isset', array('name' => $name), $this->initializer5a4e6bf0144ad594260805);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a4e6bf0144a5301609363;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder5a4e6bf0144a5301609363;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer5a4e6bf0144ad594260805 && $this->initializer5a4e6bf0144ad594260805->__invoke($this->valueHolder5a4e6bf0144a5301609363, $this, '__unset', array('name' => $name), $this->initializer5a4e6bf0144ad594260805);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a4e6bf0144a5301609363;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder5a4e6bf0144a5301609363;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * {@inheritDoc}
     */
    public function __clone()
    {
        $this->initializer5a4e6bf0144ad594260805 && $this->initializer5a4e6bf0144ad594260805->__invoke($this->valueHolder5a4e6bf0144a5301609363, $this, '__clone', array(), $this->initializer5a4e6bf0144ad594260805);

        $this->valueHolder5a4e6bf0144a5301609363 = clone $this->valueHolder5a4e6bf0144a5301609363;
    }

    public function __sleep()
    {
        $this->initializer5a4e6bf0144ad594260805 && $this->initializer5a4e6bf0144ad594260805->__invoke($this->valueHolder5a4e6bf0144a5301609363, $this, '__sleep', array(), $this->initializer5a4e6bf0144ad594260805);

        return array('valueHolder5a4e6bf0144a5301609363');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Fidry\AliceDataFixtures\Bridge\Doctrine\Persister\ObjectManagerPersister $instance) {
            unset($instance->objectManager, $instance->persistableClasses);
        }, $this, 'Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister')->__invoke($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer5a4e6bf0144ad594260805 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer5a4e6bf0144ad594260805;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer5a4e6bf0144ad594260805 && $this->initializer5a4e6bf0144ad594260805->__invoke($this->valueHolder5a4e6bf0144a5301609363, $this, 'initializeProxy', array(), $this->initializer5a4e6bf0144ad594260805);
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5a4e6bf0144a5301609363;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5a4e6bf0144a5301609363;
    }


}

class FidryAliceDataFixturesLoaderPersisterLoader_00000000037701a20000000052ea3400deb914fd286e82d6bd36b5a641b110e5 extends \Fidry\AliceDataFixtures\Loader\PersisterLoader implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder5a4e6bf014a1a591716663 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5a4e6bf014a23817498553 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5a4e6bf0149fc593834781 = array(
        
    );

    /**
     * {@inheritDoc}
     */
    public function withPersister(\Fidry\AliceDataFixtures\Persistence\PersisterInterface $persister) : \Fidry\AliceDataFixtures\Loader\PersisterLoader
    {
        $this->initializer5a4e6bf014a23817498553 && $this->initializer5a4e6bf014a23817498553->__invoke($this->valueHolder5a4e6bf014a1a591716663, $this, 'withPersister', array('persister' => $persister), $this->initializer5a4e6bf014a23817498553);

        return $this->valueHolder5a4e6bf014a1a591716663->withPersister($persister);
    }

    /**
     * {@inheritDoc}
     */
    public function load(array $fixturesFiles, array $parameters = array(), array $objects = array(), ?\Fidry\AliceDataFixtures\Persistence\PurgeMode $purgeMode = null) : array
    {
        $this->initializer5a4e6bf014a23817498553 && $this->initializer5a4e6bf014a23817498553->__invoke($this->valueHolder5a4e6bf014a1a591716663, $this, 'load', array('fixturesFiles' => $fixturesFiles, 'parameters' => $parameters, 'objects' => $objects, 'purgeMode' => $purgeMode), $this->initializer5a4e6bf014a23817498553);

        return $this->valueHolder5a4e6bf014a1a591716663->load($fixturesFiles, $parameters, $objects, $purgeMode);
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();

        \Closure::bind(function (\Fidry\AliceDataFixtures\Loader\PersisterLoader $instance) {
            unset($instance->loader, $instance->persister, $instance->processors);
        }, $instance, 'Fidry\\AliceDataFixtures\\Loader\\PersisterLoader')->__invoke($instance);

        $instance->initializer5a4e6bf014a23817498553 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Fidry\AliceDataFixtures\LoaderInterface $decoratedLoader, \Fidry\AliceDataFixtures\Persistence\PersisterInterface $persister, array $processors)
    {
        static $reflection;

        if (! $this->valueHolder5a4e6bf014a1a591716663) {
            $reflection = $reflection ?: new \ReflectionClass('Fidry\\AliceDataFixtures\\Loader\\PersisterLoader');
            $this->valueHolder5a4e6bf014a1a591716663 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Fidry\AliceDataFixtures\Loader\PersisterLoader $instance) {
            unset($instance->loader, $instance->persister, $instance->processors);
        }, $this, 'Fidry\\AliceDataFixtures\\Loader\\PersisterLoader')->__invoke($this);

        }

        $this->valueHolder5a4e6bf014a1a591716663->__construct($decoratedLoader, $persister, $processors);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer5a4e6bf014a23817498553 && $this->initializer5a4e6bf014a23817498553->__invoke($this->valueHolder5a4e6bf014a1a591716663, $this, '__get', ['name' => $name], $this->initializer5a4e6bf014a23817498553);

        if (isset(self::$publicProperties5a4e6bf0149fc593834781[$name])) {
            return $this->valueHolder5a4e6bf014a1a591716663->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a4e6bf014a1a591716663;

            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder5a4e6bf014a1a591716663;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer5a4e6bf014a23817498553 && $this->initializer5a4e6bf014a23817498553->__invoke($this->valueHolder5a4e6bf014a1a591716663, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5a4e6bf014a23817498553);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a4e6bf014a1a591716663;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder5a4e6bf014a1a591716663;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer5a4e6bf014a23817498553 && $this->initializer5a4e6bf014a23817498553->__invoke($this->valueHolder5a4e6bf014a1a591716663, $this, '__isset', array('name' => $name), $this->initializer5a4e6bf014a23817498553);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a4e6bf014a1a591716663;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder5a4e6bf014a1a591716663;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer5a4e6bf014a23817498553 && $this->initializer5a4e6bf014a23817498553->__invoke($this->valueHolder5a4e6bf014a1a591716663, $this, '__unset', array('name' => $name), $this->initializer5a4e6bf014a23817498553);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a4e6bf014a1a591716663;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder5a4e6bf014a1a591716663;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * {@inheritDoc}
     */
    public function __clone()
    {
        $this->initializer5a4e6bf014a23817498553 && $this->initializer5a4e6bf014a23817498553->__invoke($this->valueHolder5a4e6bf014a1a591716663, $this, '__clone', array(), $this->initializer5a4e6bf014a23817498553);

        $this->valueHolder5a4e6bf014a1a591716663 = clone $this->valueHolder5a4e6bf014a1a591716663;
    }

    public function __sleep()
    {
        $this->initializer5a4e6bf014a23817498553 && $this->initializer5a4e6bf014a23817498553->__invoke($this->valueHolder5a4e6bf014a1a591716663, $this, '__sleep', array(), $this->initializer5a4e6bf014a23817498553);

        return array('valueHolder5a4e6bf014a1a591716663');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Fidry\AliceDataFixtures\Loader\PersisterLoader $instance) {
            unset($instance->loader, $instance->persister, $instance->processors);
        }, $this, 'Fidry\\AliceDataFixtures\\Loader\\PersisterLoader')->__invoke($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer5a4e6bf014a23817498553 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer5a4e6bf014a23817498553;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer5a4e6bf014a23817498553 && $this->initializer5a4e6bf014a23817498553->__invoke($this->valueHolder5a4e6bf014a1a591716663, $this, 'initializeProxy', array(), $this->initializer5a4e6bf014a23817498553);
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5a4e6bf014a1a591716663;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5a4e6bf014a1a591716663;
    }


}

class FidryAliceDataFixturesLoaderPurgerLoader_00000000037701af0000000052ea3400deb914fd286e82d6bd36b5a641b110e5 extends \Fidry\AliceDataFixtures\Loader\PurgerLoader implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder5a4e6bf016a01850415415 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5a4e6bf016a0a914077685 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5a4e6bf0169dd898854539 = array(
        
    );

    /**
     * {@inheritDoc}
     */
    public function load(array $fixturesFiles, array $parameters = array(), array $objects = array(), ?\Fidry\AliceDataFixtures\Persistence\PurgeMode $purgeMode = null) : array
    {
        $this->initializer5a4e6bf016a0a914077685 && $this->initializer5a4e6bf016a0a914077685->__invoke($this->valueHolder5a4e6bf016a01850415415, $this, 'load', array('fixturesFiles' => $fixturesFiles, 'parameters' => $parameters, 'objects' => $objects, 'purgeMode' => $purgeMode), $this->initializer5a4e6bf016a0a914077685);

        return $this->valueHolder5a4e6bf016a01850415415->load($fixturesFiles, $parameters, $objects, $purgeMode);
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();

        \Closure::bind(function (\Fidry\AliceDataFixtures\Loader\PurgerLoader $instance) {
            unset($instance->loader, $instance->purgerFactory);
        }, $instance, 'Fidry\\AliceDataFixtures\\Loader\\PurgerLoader')->__invoke($instance);

        $instance->initializer5a4e6bf016a0a914077685 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Fidry\AliceDataFixtures\LoaderInterface $decoratedLoader, \Fidry\AliceDataFixtures\Persistence\PurgerFactoryInterface $purgerFactory)
    {
        static $reflection;

        if (! $this->valueHolder5a4e6bf016a01850415415) {
            $reflection = $reflection ?: new \ReflectionClass('Fidry\\AliceDataFixtures\\Loader\\PurgerLoader');
            $this->valueHolder5a4e6bf016a01850415415 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Fidry\AliceDataFixtures\Loader\PurgerLoader $instance) {
            unset($instance->loader, $instance->purgerFactory);
        }, $this, 'Fidry\\AliceDataFixtures\\Loader\\PurgerLoader')->__invoke($this);

        }

        $this->valueHolder5a4e6bf016a01850415415->__construct($decoratedLoader, $purgerFactory);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer5a4e6bf016a0a914077685 && $this->initializer5a4e6bf016a0a914077685->__invoke($this->valueHolder5a4e6bf016a01850415415, $this, '__get', ['name' => $name], $this->initializer5a4e6bf016a0a914077685);

        if (isset(self::$publicProperties5a4e6bf0169dd898854539[$name])) {
            return $this->valueHolder5a4e6bf016a01850415415->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a4e6bf016a01850415415;

            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder5a4e6bf016a01850415415;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer5a4e6bf016a0a914077685 && $this->initializer5a4e6bf016a0a914077685->__invoke($this->valueHolder5a4e6bf016a01850415415, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5a4e6bf016a0a914077685);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a4e6bf016a01850415415;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder5a4e6bf016a01850415415;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer5a4e6bf016a0a914077685 && $this->initializer5a4e6bf016a0a914077685->__invoke($this->valueHolder5a4e6bf016a01850415415, $this, '__isset', array('name' => $name), $this->initializer5a4e6bf016a0a914077685);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a4e6bf016a01850415415;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder5a4e6bf016a01850415415;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer5a4e6bf016a0a914077685 && $this->initializer5a4e6bf016a0a914077685->__invoke($this->valueHolder5a4e6bf016a01850415415, $this, '__unset', array('name' => $name), $this->initializer5a4e6bf016a0a914077685);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a4e6bf016a01850415415;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder5a4e6bf016a01850415415;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * {@inheritDoc}
     */
    public function __clone()
    {
        $this->initializer5a4e6bf016a0a914077685 && $this->initializer5a4e6bf016a0a914077685->__invoke($this->valueHolder5a4e6bf016a01850415415, $this, '__clone', array(), $this->initializer5a4e6bf016a0a914077685);

        $this->valueHolder5a4e6bf016a01850415415 = clone $this->valueHolder5a4e6bf016a01850415415;
    }

    public function __sleep()
    {
        $this->initializer5a4e6bf016a0a914077685 && $this->initializer5a4e6bf016a0a914077685->__invoke($this->valueHolder5a4e6bf016a01850415415, $this, '__sleep', array(), $this->initializer5a4e6bf016a0a914077685);

        return array('valueHolder5a4e6bf016a01850415415');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Fidry\AliceDataFixtures\Loader\PurgerLoader $instance) {
            unset($instance->loader, $instance->purgerFactory);
        }, $this, 'Fidry\\AliceDataFixtures\\Loader\\PurgerLoader')->__invoke($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer5a4e6bf016a0a914077685 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer5a4e6bf016a0a914077685;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer5a4e6bf016a0a914077685 && $this->initializer5a4e6bf016a0a914077685->__invoke($this->valueHolder5a4e6bf016a01850415415, $this, 'initializeProxy', array(), $this->initializer5a4e6bf016a0a914077685);
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5a4e6bf016a01850415415;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5a4e6bf016a01850415415;
    }


}

class DoctrineORMEntityManager_00000000037703750000000052ea3400deb914fd286e82d6bd36b5a641b110e5 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder5a4e6bf016f7b570954093 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5a4e6bf016f85474754612 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5a4e6bf016f5b636698207 = array(
        
    );

    /**
     * {@inheritDoc}
     */
    public function getConnection()
    {
        $this->initializer5a4e6bf016f85474754612 && $this->initializer5a4e6bf016f85474754612->__invoke($this->valueHolder5a4e6bf016f7b570954093, $this, 'getConnection', array(), $this->initializer5a4e6bf016f85474754612);

        return $this->valueHolder5a4e6bf016f7b570954093->getConnection();
    }

    /**
     * {@inheritDoc}
     */
    public function getMetadataFactory()
    {
        $this->initializer5a4e6bf016f85474754612 && $this->initializer5a4e6bf016f85474754612->__invoke($this->valueHolder5a4e6bf016f7b570954093, $this, 'getMetadataFactory', array(), $this->initializer5a4e6bf016f85474754612);

        return $this->valueHolder5a4e6bf016f7b570954093->getMetadataFactory();
    }

    /**
     * {@inheritDoc}
     */
    public function getExpressionBuilder()
    {
        $this->initializer5a4e6bf016f85474754612 && $this->initializer5a4e6bf016f85474754612->__invoke($this->valueHolder5a4e6bf016f7b570954093, $this, 'getExpressionBuilder', array(), $this->initializer5a4e6bf016f85474754612);

        return $this->valueHolder5a4e6bf016f7b570954093->getExpressionBuilder();
    }

    /**
     * {@inheritDoc}
     */
    public function beginTransaction()
    {
        $this->initializer5a4e6bf016f85474754612 && $this->initializer5a4e6bf016f85474754612->__invoke($this->valueHolder5a4e6bf016f7b570954093, $this, 'beginTransaction', array(), $this->initializer5a4e6bf016f85474754612);

        return $this->valueHolder5a4e6bf016f7b570954093->beginTransaction();
    }

    /**
     * {@inheritDoc}
     */
    public function getCache()
    {
        $this->initializer5a4e6bf016f85474754612 && $this->initializer5a4e6bf016f85474754612->__invoke($this->valueHolder5a4e6bf016f7b570954093, $this, 'getCache', array(), $this->initializer5a4e6bf016f85474754612);

        return $this->valueHolder5a4e6bf016f7b570954093->getCache();
    }

    /**
     * {@inheritDoc}
     */
    public function transactional($func)
    {
        $this->initializer5a4e6bf016f85474754612 && $this->initializer5a4e6bf016f85474754612->__invoke($this->valueHolder5a4e6bf016f7b570954093, $this, 'transactional', array('func' => $func), $this->initializer5a4e6bf016f85474754612);

        return $this->valueHolder5a4e6bf016f7b570954093->transactional($func);
    }

    /**
     * {@inheritDoc}
     */
    public function commit()
    {
        $this->initializer5a4e6bf016f85474754612 && $this->initializer5a4e6bf016f85474754612->__invoke($this->valueHolder5a4e6bf016f7b570954093, $this, 'commit', array(), $this->initializer5a4e6bf016f85474754612);

        return $this->valueHolder5a4e6bf016f7b570954093->commit();
    }

    /**
     * {@inheritDoc}
     */
    public function rollback()
    {
        $this->initializer5a4e6bf016f85474754612 && $this->initializer5a4e6bf016f85474754612->__invoke($this->valueHolder5a4e6bf016f7b570954093, $this, 'rollback', array(), $this->initializer5a4e6bf016f85474754612);

        return $this->valueHolder5a4e6bf016f7b570954093->rollback();
    }

    /**
     * {@inheritDoc}
     */
    public function getClassMetadata($className)
    {
        $this->initializer5a4e6bf016f85474754612 && $this->initializer5a4e6bf016f85474754612->__invoke($this->valueHolder5a4e6bf016f7b570954093, $this, 'getClassMetadata', array('className' => $className), $this->initializer5a4e6bf016f85474754612);

        return $this->valueHolder5a4e6bf016f7b570954093->getClassMetadata($className);
    }

    /**
     * {@inheritDoc}
     */
    public function createQuery($dql = '')
    {
        $this->initializer5a4e6bf016f85474754612 && $this->initializer5a4e6bf016f85474754612->__invoke($this->valueHolder5a4e6bf016f7b570954093, $this, 'createQuery', array('dql' => $dql), $this->initializer5a4e6bf016f85474754612);

        return $this->valueHolder5a4e6bf016f7b570954093->createQuery($dql);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedQuery($name)
    {
        $this->initializer5a4e6bf016f85474754612 && $this->initializer5a4e6bf016f85474754612->__invoke($this->valueHolder5a4e6bf016f7b570954093, $this, 'createNamedQuery', array('name' => $name), $this->initializer5a4e6bf016f85474754612);

        return $this->valueHolder5a4e6bf016f7b570954093->createNamedQuery($name);
    }

    /**
     * {@inheritDoc}
     */
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5a4e6bf016f85474754612 && $this->initializer5a4e6bf016f85474754612->__invoke($this->valueHolder5a4e6bf016f7b570954093, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5a4e6bf016f85474754612);

        return $this->valueHolder5a4e6bf016f7b570954093->createNativeQuery($sql, $rsm);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedNativeQuery($name)
    {
        $this->initializer5a4e6bf016f85474754612 && $this->initializer5a4e6bf016f85474754612->__invoke($this->valueHolder5a4e6bf016f7b570954093, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5a4e6bf016f85474754612);

        return $this->valueHolder5a4e6bf016f7b570954093->createNamedNativeQuery($name);
    }

    /**
     * {@inheritDoc}
     */
    public function createQueryBuilder()
    {
        $this->initializer5a4e6bf016f85474754612 && $this->initializer5a4e6bf016f85474754612->__invoke($this->valueHolder5a4e6bf016f7b570954093, $this, 'createQueryBuilder', array(), $this->initializer5a4e6bf016f85474754612);

        return $this->valueHolder5a4e6bf016f7b570954093->createQueryBuilder();
    }

    /**
     * {@inheritDoc}
     */
    public function flush($entity = null)
    {
        $this->initializer5a4e6bf016f85474754612 && $this->initializer5a4e6bf016f85474754612->__invoke($this->valueHolder5a4e6bf016f7b570954093, $this, 'flush', array('entity' => $entity), $this->initializer5a4e6bf016f85474754612);

        return $this->valueHolder5a4e6bf016f7b570954093->flush($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function find($entityName, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5a4e6bf016f85474754612 && $this->initializer5a4e6bf016f85474754612->__invoke($this->valueHolder5a4e6bf016f7b570954093, $this, 'find', array('entityName' => $entityName, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5a4e6bf016f85474754612);

        return $this->valueHolder5a4e6bf016f7b570954093->find($entityName, $id, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function getReference($entityName, $id)
    {
        $this->initializer5a4e6bf016f85474754612 && $this->initializer5a4e6bf016f85474754612->__invoke($this->valueHolder5a4e6bf016f7b570954093, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5a4e6bf016f85474754612);

        return $this->valueHolder5a4e6bf016f7b570954093->getReference($entityName, $id);
    }

    /**
     * {@inheritDoc}
     */
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5a4e6bf016f85474754612 && $this->initializer5a4e6bf016f85474754612->__invoke($this->valueHolder5a4e6bf016f7b570954093, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5a4e6bf016f85474754612);

        return $this->valueHolder5a4e6bf016f7b570954093->getPartialReference($entityName, $identifier);
    }

    /**
     * {@inheritDoc}
     */
    public function clear($entityName = null)
    {
        $this->initializer5a4e6bf016f85474754612 && $this->initializer5a4e6bf016f85474754612->__invoke($this->valueHolder5a4e6bf016f7b570954093, $this, 'clear', array('entityName' => $entityName), $this->initializer5a4e6bf016f85474754612);

        return $this->valueHolder5a4e6bf016f7b570954093->clear($entityName);
    }

    /**
     * {@inheritDoc}
     */
    public function close()
    {
        $this->initializer5a4e6bf016f85474754612 && $this->initializer5a4e6bf016f85474754612->__invoke($this->valueHolder5a4e6bf016f7b570954093, $this, 'close', array(), $this->initializer5a4e6bf016f85474754612);

        return $this->valueHolder5a4e6bf016f7b570954093->close();
    }

    /**
     * {@inheritDoc}
     */
    public function persist($entity)
    {
        $this->initializer5a4e6bf016f85474754612 && $this->initializer5a4e6bf016f85474754612->__invoke($this->valueHolder5a4e6bf016f7b570954093, $this, 'persist', array('entity' => $entity), $this->initializer5a4e6bf016f85474754612);

        return $this->valueHolder5a4e6bf016f7b570954093->persist($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function remove($entity)
    {
        $this->initializer5a4e6bf016f85474754612 && $this->initializer5a4e6bf016f85474754612->__invoke($this->valueHolder5a4e6bf016f7b570954093, $this, 'remove', array('entity' => $entity), $this->initializer5a4e6bf016f85474754612);

        return $this->valueHolder5a4e6bf016f7b570954093->remove($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function refresh($entity)
    {
        $this->initializer5a4e6bf016f85474754612 && $this->initializer5a4e6bf016f85474754612->__invoke($this->valueHolder5a4e6bf016f7b570954093, $this, 'refresh', array('entity' => $entity), $this->initializer5a4e6bf016f85474754612);

        return $this->valueHolder5a4e6bf016f7b570954093->refresh($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function detach($entity)
    {
        $this->initializer5a4e6bf016f85474754612 && $this->initializer5a4e6bf016f85474754612->__invoke($this->valueHolder5a4e6bf016f7b570954093, $this, 'detach', array('entity' => $entity), $this->initializer5a4e6bf016f85474754612);

        return $this->valueHolder5a4e6bf016f7b570954093->detach($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function merge($entity)
    {
        $this->initializer5a4e6bf016f85474754612 && $this->initializer5a4e6bf016f85474754612->__invoke($this->valueHolder5a4e6bf016f7b570954093, $this, 'merge', array('entity' => $entity), $this->initializer5a4e6bf016f85474754612);

        return $this->valueHolder5a4e6bf016f7b570954093->merge($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function copy($entity, $deep = false)
    {
        $this->initializer5a4e6bf016f85474754612 && $this->initializer5a4e6bf016f85474754612->__invoke($this->valueHolder5a4e6bf016f7b570954093, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5a4e6bf016f85474754612);

        return $this->valueHolder5a4e6bf016f7b570954093->copy($entity, $deep);
    }

    /**
     * {@inheritDoc}
     */
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5a4e6bf016f85474754612 && $this->initializer5a4e6bf016f85474754612->__invoke($this->valueHolder5a4e6bf016f7b570954093, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5a4e6bf016f85474754612);

        return $this->valueHolder5a4e6bf016f7b570954093->lock($entity, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function getRepository($entityName)
    {
        $this->initializer5a4e6bf016f85474754612 && $this->initializer5a4e6bf016f85474754612->__invoke($this->valueHolder5a4e6bf016f7b570954093, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5a4e6bf016f85474754612);

        return $this->valueHolder5a4e6bf016f7b570954093->getRepository($entityName);
    }

    /**
     * {@inheritDoc}
     */
    public function contains($entity)
    {
        $this->initializer5a4e6bf016f85474754612 && $this->initializer5a4e6bf016f85474754612->__invoke($this->valueHolder5a4e6bf016f7b570954093, $this, 'contains', array('entity' => $entity), $this->initializer5a4e6bf016f85474754612);

        return $this->valueHolder5a4e6bf016f7b570954093->contains($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function getEventManager()
    {
        $this->initializer5a4e6bf016f85474754612 && $this->initializer5a4e6bf016f85474754612->__invoke($this->valueHolder5a4e6bf016f7b570954093, $this, 'getEventManager', array(), $this->initializer5a4e6bf016f85474754612);

        return $this->valueHolder5a4e6bf016f7b570954093->getEventManager();
    }

    /**
     * {@inheritDoc}
     */
    public function getConfiguration()
    {
        $this->initializer5a4e6bf016f85474754612 && $this->initializer5a4e6bf016f85474754612->__invoke($this->valueHolder5a4e6bf016f7b570954093, $this, 'getConfiguration', array(), $this->initializer5a4e6bf016f85474754612);

        return $this->valueHolder5a4e6bf016f7b570954093->getConfiguration();
    }

    /**
     * {@inheritDoc}
     */
    public function isOpen()
    {
        $this->initializer5a4e6bf016f85474754612 && $this->initializer5a4e6bf016f85474754612->__invoke($this->valueHolder5a4e6bf016f7b570954093, $this, 'isOpen', array(), $this->initializer5a4e6bf016f85474754612);

        return $this->valueHolder5a4e6bf016f7b570954093->isOpen();
    }

    /**
     * {@inheritDoc}
     */
    public function getUnitOfWork()
    {
        $this->initializer5a4e6bf016f85474754612 && $this->initializer5a4e6bf016f85474754612->__invoke($this->valueHolder5a4e6bf016f7b570954093, $this, 'getUnitOfWork', array(), $this->initializer5a4e6bf016f85474754612);

        return $this->valueHolder5a4e6bf016f7b570954093->getUnitOfWork();
    }

    /**
     * {@inheritDoc}
     */
    public function getHydrator($hydrationMode)
    {
        $this->initializer5a4e6bf016f85474754612 && $this->initializer5a4e6bf016f85474754612->__invoke($this->valueHolder5a4e6bf016f7b570954093, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5a4e6bf016f85474754612);

        return $this->valueHolder5a4e6bf016f7b570954093->getHydrator($hydrationMode);
    }

    /**
     * {@inheritDoc}
     */
    public function newHydrator($hydrationMode)
    {
        $this->initializer5a4e6bf016f85474754612 && $this->initializer5a4e6bf016f85474754612->__invoke($this->valueHolder5a4e6bf016f7b570954093, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5a4e6bf016f85474754612);

        return $this->valueHolder5a4e6bf016f7b570954093->newHydrator($hydrationMode);
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyFactory()
    {
        $this->initializer5a4e6bf016f85474754612 && $this->initializer5a4e6bf016f85474754612->__invoke($this->valueHolder5a4e6bf016f7b570954093, $this, 'getProxyFactory', array(), $this->initializer5a4e6bf016f85474754612);

        return $this->valueHolder5a4e6bf016f7b570954093->getProxyFactory();
    }

    /**
     * {@inheritDoc}
     */
    public function initializeObject($obj)
    {
        $this->initializer5a4e6bf016f85474754612 && $this->initializer5a4e6bf016f85474754612->__invoke($this->valueHolder5a4e6bf016f7b570954093, $this, 'initializeObject', array('obj' => $obj), $this->initializer5a4e6bf016f85474754612);

        return $this->valueHolder5a4e6bf016f7b570954093->initializeObject($obj);
    }

    /**
     * {@inheritDoc}
     */
    public function getFilters()
    {
        $this->initializer5a4e6bf016f85474754612 && $this->initializer5a4e6bf016f85474754612->__invoke($this->valueHolder5a4e6bf016f7b570954093, $this, 'getFilters', array(), $this->initializer5a4e6bf016f85474754612);

        return $this->valueHolder5a4e6bf016f7b570954093->getFilters();
    }

    /**
     * {@inheritDoc}
     */
    public function isFiltersStateClean()
    {
        $this->initializer5a4e6bf016f85474754612 && $this->initializer5a4e6bf016f85474754612->__invoke($this->valueHolder5a4e6bf016f7b570954093, $this, 'isFiltersStateClean', array(), $this->initializer5a4e6bf016f85474754612);

        return $this->valueHolder5a4e6bf016f7b570954093->isFiltersStateClean();
    }

    /**
     * {@inheritDoc}
     */
    public function hasFilters()
    {
        $this->initializer5a4e6bf016f85474754612 && $this->initializer5a4e6bf016f85474754612->__invoke($this->valueHolder5a4e6bf016f7b570954093, $this, 'hasFilters', array(), $this->initializer5a4e6bf016f85474754612);

        return $this->valueHolder5a4e6bf016f7b570954093->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer5a4e6bf016f85474754612 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder5a4e6bf016f7b570954093) {
            $reflection = $reflection ?: new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5a4e6bf016f7b570954093 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5a4e6bf016f7b570954093->__construct($conn, $config, $eventManager);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer5a4e6bf016f85474754612 && $this->initializer5a4e6bf016f85474754612->__invoke($this->valueHolder5a4e6bf016f7b570954093, $this, '__get', ['name' => $name], $this->initializer5a4e6bf016f85474754612);

        if (isset(self::$publicProperties5a4e6bf016f5b636698207[$name])) {
            return $this->valueHolder5a4e6bf016f7b570954093->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a4e6bf016f7b570954093;

            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder5a4e6bf016f7b570954093;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer5a4e6bf016f85474754612 && $this->initializer5a4e6bf016f85474754612->__invoke($this->valueHolder5a4e6bf016f7b570954093, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5a4e6bf016f85474754612);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a4e6bf016f7b570954093;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder5a4e6bf016f7b570954093;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer5a4e6bf016f85474754612 && $this->initializer5a4e6bf016f85474754612->__invoke($this->valueHolder5a4e6bf016f7b570954093, $this, '__isset', array('name' => $name), $this->initializer5a4e6bf016f85474754612);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a4e6bf016f7b570954093;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder5a4e6bf016f7b570954093;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer5a4e6bf016f85474754612 && $this->initializer5a4e6bf016f85474754612->__invoke($this->valueHolder5a4e6bf016f7b570954093, $this, '__unset', array('name' => $name), $this->initializer5a4e6bf016f85474754612);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a4e6bf016f7b570954093;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder5a4e6bf016f7b570954093;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer5a4e6bf016f85474754612 && $this->initializer5a4e6bf016f85474754612->__invoke($this->valueHolder5a4e6bf016f7b570954093, $this, '__clone', array(), $this->initializer5a4e6bf016f85474754612);

        $this->valueHolder5a4e6bf016f7b570954093 = clone $this->valueHolder5a4e6bf016f7b570954093;
    }

    public function __sleep()
    {
        $this->initializer5a4e6bf016f85474754612 && $this->initializer5a4e6bf016f85474754612->__invoke($this->valueHolder5a4e6bf016f7b570954093, $this, '__sleep', array(), $this->initializer5a4e6bf016f85474754612);

        return array('valueHolder5a4e6bf016f7b570954093');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer5a4e6bf016f85474754612 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer5a4e6bf016f85474754612;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer5a4e6bf016f85474754612 && $this->initializer5a4e6bf016f85474754612->__invoke($this->valueHolder5a4e6bf016f7b570954093, $this, 'initializeProxy', array(), $this->initializer5a4e6bf016f85474754612);
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5a4e6bf016f7b570954093;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5a4e6bf016f7b570954093;
    }


}

class SymfonyComponentCacheAdapterFilesystemAdapter_00000000037700a50000000052ea3400deb914fd286e82d6bd36b5a641b110e5 extends \Symfony\Component\Cache\Adapter\FilesystemAdapter implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder5a4e6bf01c453170604485 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5a4e6bf01c460404865385 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5a4e6bf01c41f502359781 = array(
        
    );

    /**
     * {@inheritDoc}
     */
    public function getItem($key)
    {
        $this->initializer5a4e6bf01c460404865385 && $this->initializer5a4e6bf01c460404865385->__invoke($this->valueHolder5a4e6bf01c453170604485, $this, 'getItem', array('key' => $key), $this->initializer5a4e6bf01c460404865385);

        return $this->valueHolder5a4e6bf01c453170604485->getItem($key);
    }

    /**
     * {@inheritDoc}
     */
    public function getItems(array $keys = array())
    {
        $this->initializer5a4e6bf01c460404865385 && $this->initializer5a4e6bf01c460404865385->__invoke($this->valueHolder5a4e6bf01c453170604485, $this, 'getItems', array('keys' => $keys), $this->initializer5a4e6bf01c460404865385);

        return $this->valueHolder5a4e6bf01c453170604485->getItems($keys);
    }

    /**
     * {@inheritDoc}
     */
    public function save(\Psr\Cache\CacheItemInterface $item)
    {
        $this->initializer5a4e6bf01c460404865385 && $this->initializer5a4e6bf01c460404865385->__invoke($this->valueHolder5a4e6bf01c453170604485, $this, 'save', array('item' => $item), $this->initializer5a4e6bf01c460404865385);

        return $this->valueHolder5a4e6bf01c453170604485->save($item);
    }

    /**
     * {@inheritDoc}
     */
    public function saveDeferred(\Psr\Cache\CacheItemInterface $item)
    {
        $this->initializer5a4e6bf01c460404865385 && $this->initializer5a4e6bf01c460404865385->__invoke($this->valueHolder5a4e6bf01c453170604485, $this, 'saveDeferred', array('item' => $item), $this->initializer5a4e6bf01c460404865385);

        return $this->valueHolder5a4e6bf01c453170604485->saveDeferred($item);
    }

    /**
     * {@inheritDoc}
     */
    public function commit()
    {
        $this->initializer5a4e6bf01c460404865385 && $this->initializer5a4e6bf01c460404865385->__invoke($this->valueHolder5a4e6bf01c453170604485, $this, 'commit', array(), $this->initializer5a4e6bf01c460404865385);

        return $this->valueHolder5a4e6bf01c453170604485->commit();
    }

    /**
     * {@inheritDoc}
     */
    public function __destruct()
    {
        $this->initializer5a4e6bf01c460404865385 || $this->valueHolder5a4e6bf01c453170604485->__destruct();
    }

    /**
     * {@inheritDoc}
     */
    public function hasItem($key)
    {
        $this->initializer5a4e6bf01c460404865385 && $this->initializer5a4e6bf01c460404865385->__invoke($this->valueHolder5a4e6bf01c453170604485, $this, 'hasItem', array('key' => $key), $this->initializer5a4e6bf01c460404865385);

        return $this->valueHolder5a4e6bf01c453170604485->hasItem($key);
    }

    /**
     * {@inheritDoc}
     */
    public function clear()
    {
        $this->initializer5a4e6bf01c460404865385 && $this->initializer5a4e6bf01c460404865385->__invoke($this->valueHolder5a4e6bf01c453170604485, $this, 'clear', array(), $this->initializer5a4e6bf01c460404865385);

        return $this->valueHolder5a4e6bf01c453170604485->clear();
    }

    /**
     * {@inheritDoc}
     */
    public function deleteItem($key)
    {
        $this->initializer5a4e6bf01c460404865385 && $this->initializer5a4e6bf01c460404865385->__invoke($this->valueHolder5a4e6bf01c453170604485, $this, 'deleteItem', array('key' => $key), $this->initializer5a4e6bf01c460404865385);

        return $this->valueHolder5a4e6bf01c453170604485->deleteItem($key);
    }

    /**
     * {@inheritDoc}
     */
    public function deleteItems(array $keys)
    {
        $this->initializer5a4e6bf01c460404865385 && $this->initializer5a4e6bf01c460404865385->__invoke($this->valueHolder5a4e6bf01c453170604485, $this, 'deleteItems', array('keys' => $keys), $this->initializer5a4e6bf01c460404865385);

        return $this->valueHolder5a4e6bf01c453170604485->deleteItems($keys);
    }

    /**
     * {@inheritDoc}
     */
    public function enableVersioning($enable = true)
    {
        $this->initializer5a4e6bf01c460404865385 && $this->initializer5a4e6bf01c460404865385->__invoke($this->valueHolder5a4e6bf01c453170604485, $this, 'enableVersioning', array('enable' => $enable), $this->initializer5a4e6bf01c460404865385);

        return $this->valueHolder5a4e6bf01c453170604485->enableVersioning($enable);
    }

    /**
     * {@inheritDoc}
     */
    public function setLogger(\Psr\Log\LoggerInterface $logger)
    {
        $this->initializer5a4e6bf01c460404865385 && $this->initializer5a4e6bf01c460404865385->__invoke($this->valueHolder5a4e6bf01c453170604485, $this, 'setLogger', array('logger' => $logger), $this->initializer5a4e6bf01c460404865385);

        return $this->valueHolder5a4e6bf01c453170604485->setLogger($logger);
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();

        unset($instance->maxIdLength, $instance->logger);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\FilesystemAdapter $instance) {
            unset($instance->directory, $instance->tmp);
        }, $instance, 'Symfony\\Component\\Cache\\Adapter\\FilesystemAdapter')->__invoke($instance);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\AbstractAdapter $instance) {
            unset($instance->createCacheItem, $instance->mergeByLifetime, $instance->namespace, $instance->namespaceVersion, $instance->versioningIsEnabled, $instance->deferred);
        }, $instance, 'Symfony\\Component\\Cache\\Adapter\\AbstractAdapter')->__invoke($instance);

        $instance->initializer5a4e6bf01c460404865385 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct($namespace = '', $defaultLifetime = 0, $directory = null)
    {
        static $reflection;

        if (! $this->valueHolder5a4e6bf01c453170604485) {
            $reflection = $reflection ?: new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\FilesystemAdapter');
            $this->valueHolder5a4e6bf01c453170604485 = $reflection->newInstanceWithoutConstructor();
        unset($this->maxIdLength, $this->logger);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\FilesystemAdapter $instance) {
            unset($instance->directory, $instance->tmp);
        }, $this, 'Symfony\\Component\\Cache\\Adapter\\FilesystemAdapter')->__invoke($this);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\AbstractAdapter $instance) {
            unset($instance->createCacheItem, $instance->mergeByLifetime, $instance->namespace, $instance->namespaceVersion, $instance->versioningIsEnabled, $instance->deferred);
        }, $this, 'Symfony\\Component\\Cache\\Adapter\\AbstractAdapter')->__invoke($this);

        }

        $this->valueHolder5a4e6bf01c453170604485->__construct($namespace, $defaultLifetime, $directory);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer5a4e6bf01c460404865385 && $this->initializer5a4e6bf01c460404865385->__invoke($this->valueHolder5a4e6bf01c453170604485, $this, '__get', ['name' => $name], $this->initializer5a4e6bf01c460404865385);

        if (isset(self::$publicProperties5a4e6bf01c41f502359781[$name])) {
            return $this->valueHolder5a4e6bf01c453170604485->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a4e6bf01c453170604485;

            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder5a4e6bf01c453170604485;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer5a4e6bf01c460404865385 && $this->initializer5a4e6bf01c460404865385->__invoke($this->valueHolder5a4e6bf01c453170604485, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5a4e6bf01c460404865385);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a4e6bf01c453170604485;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder5a4e6bf01c453170604485;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer5a4e6bf01c460404865385 && $this->initializer5a4e6bf01c460404865385->__invoke($this->valueHolder5a4e6bf01c453170604485, $this, '__isset', array('name' => $name), $this->initializer5a4e6bf01c460404865385);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a4e6bf01c453170604485;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder5a4e6bf01c453170604485;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer5a4e6bf01c460404865385 && $this->initializer5a4e6bf01c460404865385->__invoke($this->valueHolder5a4e6bf01c453170604485, $this, '__unset', array('name' => $name), $this->initializer5a4e6bf01c460404865385);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a4e6bf01c453170604485;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder5a4e6bf01c453170604485;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer5a4e6bf01c460404865385 && $this->initializer5a4e6bf01c460404865385->__invoke($this->valueHolder5a4e6bf01c453170604485, $this, '__clone', array(), $this->initializer5a4e6bf01c460404865385);

        $this->valueHolder5a4e6bf01c453170604485 = clone $this->valueHolder5a4e6bf01c453170604485;
    }

    public function __sleep()
    {
        $this->initializer5a4e6bf01c460404865385 && $this->initializer5a4e6bf01c460404865385->__invoke($this->valueHolder5a4e6bf01c453170604485, $this, '__sleep', array(), $this->initializer5a4e6bf01c460404865385);

        return array('valueHolder5a4e6bf01c453170604485');
    }

    public function __wakeup()
    {
        unset($this->maxIdLength, $this->logger);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\FilesystemAdapter $instance) {
            unset($instance->directory, $instance->tmp);
        }, $this, 'Symfony\\Component\\Cache\\Adapter\\FilesystemAdapter')->__invoke($this);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\AbstractAdapter $instance) {
            unset($instance->createCacheItem, $instance->mergeByLifetime, $instance->namespace, $instance->namespaceVersion, $instance->versioningIsEnabled, $instance->deferred);
        }, $this, 'Symfony\\Component\\Cache\\Adapter\\AbstractAdapter')->__invoke($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer5a4e6bf01c460404865385 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer5a4e6bf01c460404865385;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer5a4e6bf01c460404865385 && $this->initializer5a4e6bf01c460404865385->__invoke($this->valueHolder5a4e6bf01c453170604485, $this, 'initializeProxy', array(), $this->initializer5a4e6bf01c460404865385);
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5a4e6bf01c453170604485;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5a4e6bf01c453170604485;
    }


}

class FOSRestBundleSerializerJMSSerializerAdapter_00000000037704df0000000052ea3400deb914fd286e82d6bd36b5a641b110e5 extends \FOS\RestBundle\Serializer\JMSSerializerAdapter implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder5a4e6bf01e314872401411 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5a4e6bf01e31c050248106 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5a4e6bf01e2ed895967554 = array(
        
    );

    /**
     * {@inheritDoc}
     */
    public function serialize($data, $format, \FOS\RestBundle\Context\Context $context)
    {
        $this->initializer5a4e6bf01e31c050248106 && $this->initializer5a4e6bf01e31c050248106->__invoke($this->valueHolder5a4e6bf01e314872401411, $this, 'serialize', array('data' => $data, 'format' => $format, 'context' => $context), $this->initializer5a4e6bf01e31c050248106);

        return $this->valueHolder5a4e6bf01e314872401411->serialize($data, $format, $context);
    }

    /**
     * {@inheritDoc}
     */
    public function deserialize($data, $type, $format, \FOS\RestBundle\Context\Context $context)
    {
        $this->initializer5a4e6bf01e31c050248106 && $this->initializer5a4e6bf01e31c050248106->__invoke($this->valueHolder5a4e6bf01e314872401411, $this, 'deserialize', array('data' => $data, 'type' => $type, 'format' => $format, 'context' => $context), $this->initializer5a4e6bf01e31c050248106);

        return $this->valueHolder5a4e6bf01e314872401411->deserialize($data, $type, $format, $context);
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();

        \Closure::bind(function (\FOS\RestBundle\Serializer\JMSSerializerAdapter $instance) {
            unset($instance->serializer);
        }, $instance, 'FOS\\RestBundle\\Serializer\\JMSSerializerAdapter')->__invoke($instance);

        $instance->initializer5a4e6bf01e31c050248106 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\JMS\Serializer\SerializerInterface $serializer)
    {
        static $reflection;

        if (! $this->valueHolder5a4e6bf01e314872401411) {
            $reflection = $reflection ?: new \ReflectionClass('FOS\\RestBundle\\Serializer\\JMSSerializerAdapter');
            $this->valueHolder5a4e6bf01e314872401411 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\FOS\RestBundle\Serializer\JMSSerializerAdapter $instance) {
            unset($instance->serializer);
        }, $this, 'FOS\\RestBundle\\Serializer\\JMSSerializerAdapter')->__invoke($this);

        }

        $this->valueHolder5a4e6bf01e314872401411->__construct($serializer);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer5a4e6bf01e31c050248106 && $this->initializer5a4e6bf01e31c050248106->__invoke($this->valueHolder5a4e6bf01e314872401411, $this, '__get', ['name' => $name], $this->initializer5a4e6bf01e31c050248106);

        if (isset(self::$publicProperties5a4e6bf01e2ed895967554[$name])) {
            return $this->valueHolder5a4e6bf01e314872401411->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a4e6bf01e314872401411;

            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder5a4e6bf01e314872401411;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer5a4e6bf01e31c050248106 && $this->initializer5a4e6bf01e31c050248106->__invoke($this->valueHolder5a4e6bf01e314872401411, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5a4e6bf01e31c050248106);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a4e6bf01e314872401411;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder5a4e6bf01e314872401411;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer5a4e6bf01e31c050248106 && $this->initializer5a4e6bf01e31c050248106->__invoke($this->valueHolder5a4e6bf01e314872401411, $this, '__isset', array('name' => $name), $this->initializer5a4e6bf01e31c050248106);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a4e6bf01e314872401411;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder5a4e6bf01e314872401411;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer5a4e6bf01e31c050248106 && $this->initializer5a4e6bf01e31c050248106->__invoke($this->valueHolder5a4e6bf01e314872401411, $this, '__unset', array('name' => $name), $this->initializer5a4e6bf01e31c050248106);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a4e6bf01e314872401411;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder5a4e6bf01e314872401411;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer5a4e6bf01e31c050248106 && $this->initializer5a4e6bf01e31c050248106->__invoke($this->valueHolder5a4e6bf01e314872401411, $this, '__clone', array(), $this->initializer5a4e6bf01e31c050248106);

        $this->valueHolder5a4e6bf01e314872401411 = clone $this->valueHolder5a4e6bf01e314872401411;
    }

    public function __sleep()
    {
        $this->initializer5a4e6bf01e31c050248106 && $this->initializer5a4e6bf01e31c050248106->__invoke($this->valueHolder5a4e6bf01e314872401411, $this, '__sleep', array(), $this->initializer5a4e6bf01e31c050248106);

        return array('valueHolder5a4e6bf01e314872401411');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\FOS\RestBundle\Serializer\JMSSerializerAdapter $instance) {
            unset($instance->serializer);
        }, $this, 'FOS\\RestBundle\\Serializer\\JMSSerializerAdapter')->__invoke($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer5a4e6bf01e31c050248106 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer5a4e6bf01e31c050248106;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer5a4e6bf01e31c050248106 && $this->initializer5a4e6bf01e31c050248106->__invoke($this->valueHolder5a4e6bf01e314872401411, $this, 'initializeProxy', array(), $this->initializer5a4e6bf01e31c050248106);
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5a4e6bf01e314872401411;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5a4e6bf01e314872401411;
    }


}
