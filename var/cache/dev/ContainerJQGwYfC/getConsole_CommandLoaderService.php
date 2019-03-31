<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'console.command_loader' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/console/CommandLoader/CommandLoaderInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/console/CommandLoader/ContainerCommandLoader.php';

return $this->services['console.command_loader'] = new \Symfony\Component\Console\CommandLoader\ContainerCommandLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'console.command.about' => ['privates', 'console.command.about', 'getConsole_Command_AboutService.php', true],
    'console.command.assets_install' => ['privates', 'console.command.assets_install', 'getConsole_Command_AssetsInstallService.php', true],
    'console.command.cache_clear' => ['privates', 'console.command.cache_clear', 'getConsole_Command_CacheClearService.php', true],
    'console.command.cache_pool_clear' => ['privates', 'console.command.cache_pool_clear', 'getConsole_Command_CachePoolClearService.php', true],
    'console.command.cache_pool_delete' => ['privates', 'console.command.cache_pool_delete', 'getConsole_Command_CachePoolDeleteService.php', true],
    'console.command.cache_pool_prune' => ['privates', 'console.command.cache_pool_prune', 'getConsole_Command_CachePoolPruneService.php', true],
    'console.command.cache_warmup' => ['privates', 'console.command.cache_warmup', 'getConsole_Command_CacheWarmupService.php', true],
    'console.command.config_debug' => ['privates', 'console.command.config_debug', 'getConsole_Command_ConfigDebugService.php', true],
    'console.command.config_dump_reference' => ['privates', 'console.command.config_dump_reference', 'getConsole_Command_ConfigDumpReferenceService.php', true],
    'console.command.container_debug' => ['privates', 'console.command.container_debug', 'getConsole_Command_ContainerDebugService.php', true],
    'console.command.debug_autowiring' => ['privates', 'console.command.debug_autowiring', 'getConsole_Command_DebugAutowiringService.php', true],
    'console.command.event_dispatcher_debug' => ['privates', 'console.command.event_dispatcher_debug', 'getConsole_Command_EventDispatcherDebugService.php', true],
    'console.command.form_debug' => ['privates', 'console.command.form_debug', 'getConsole_Command_FormDebugService.php', true],
    'console.command.messenger_consume_messages' => ['privates', 'console.command.messenger_consume_messages', 'getConsole_Command_MessengerConsumeMessagesService.php', true],
    'console.command.messenger_debug' => ['privates', 'console.command.messenger_debug', 'getConsole_Command_MessengerDebugService.php', true],
    'console.command.router_debug' => ['privates', 'console.command.router_debug', 'getConsole_Command_RouterDebugService.php', true],
    'console.command.router_match' => ['privates', 'console.command.router_match', 'getConsole_Command_RouterMatchService.php', true],
    'console.command.translation_debug' => ['privates', 'console.command.translation_debug', 'getConsole_Command_TranslationDebugService.php', true],
    'console.command.translation_update' => ['privates', 'console.command.translation_update', 'getConsole_Command_TranslationUpdateService.php', true],
    'console.command.xliff_lint' => ['privates', 'console.command.xliff_lint', 'getConsole_Command_XliffLintService.php', true],
    'console.command.yaml_lint' => ['privates', 'console.command.yaml_lint', 'getConsole_Command_YamlLintService.php', true],
    'doctrine.cache_clear_metadata_command' => ['privates', 'doctrine.cache_clear_metadata_command', 'getDoctrine_CacheClearMetadataCommandService.php', true],
    'doctrine.cache_clear_query_cache_command' => ['privates', 'doctrine.cache_clear_query_cache_command', 'getDoctrine_CacheClearQueryCacheCommandService.php', true],
    'doctrine.cache_clear_result_command' => ['privates', 'doctrine.cache_clear_result_command', 'getDoctrine_CacheClearResultCommandService.php', true],
    'doctrine.cache_collection_region_command' => ['privates', 'doctrine.cache_collection_region_command', 'getDoctrine_CacheCollectionRegionCommandService.php', true],
    'doctrine.clear_entity_region_command' => ['privates', 'doctrine.clear_entity_region_command', 'getDoctrine_ClearEntityRegionCommandService.php', true],
    'doctrine.clear_query_region_command' => ['privates', 'doctrine.clear_query_region_command', 'getDoctrine_ClearQueryRegionCommandService.php', true],
    'doctrine.database_create_command' => ['privates', 'doctrine.database_create_command', 'getDoctrine_DatabaseCreateCommandService.php', true],
    'doctrine.database_drop_command' => ['privates', 'doctrine.database_drop_command', 'getDoctrine_DatabaseDropCommandService.php', true],
    'doctrine.database_import_command' => ['privates', 'doctrine.database_import_command', 'getDoctrine_DatabaseImportCommandService.php', true],
    'doctrine.ensure_production_settings_command' => ['privates', 'doctrine.ensure_production_settings_command', 'getDoctrine_EnsureProductionSettingsCommandService.php', true],
    'doctrine.fixtures_load_command' => ['privates', 'doctrine.fixtures_load_command', 'getDoctrine_FixturesLoadCommandService.php', true],
    'doctrine.generate_entities_command' => ['privates', 'doctrine.generate_entities_command', 'getDoctrine_GenerateEntitiesCommandService.php', true],
    'doctrine.mapping_convert_command' => ['privates', 'doctrine.mapping_convert_command', 'getDoctrine_MappingConvertCommandService.php', true],
    'doctrine.mapping_import_command' => ['privates', 'doctrine.mapping_import_command', 'getDoctrine_MappingImportCommandService.php', true],
    'doctrine.mapping_info_command' => ['privates', 'doctrine.mapping_info_command', 'getDoctrine_MappingInfoCommandService.php', true],
    'doctrine.query_dql_command' => ['privates', 'doctrine.query_dql_command', 'getDoctrine_QueryDqlCommandService.php', true],
    'doctrine.query_sql_command' => ['privates', 'doctrine.query_sql_command', 'getDoctrine_QuerySqlCommandService.php', true],
    'doctrine.schema_create_command' => ['privates', 'doctrine.schema_create_command', 'getDoctrine_SchemaCreateCommandService.php', true],
    'doctrine.schema_drop_command' => ['privates', 'doctrine.schema_drop_command', 'getDoctrine_SchemaDropCommandService.php', true],
    'doctrine.schema_update_command' => ['privates', 'doctrine.schema_update_command', 'getDoctrine_SchemaUpdateCommandService.php', true],
    'doctrine.schema_validate_command' => ['privates', 'doctrine.schema_validate_command', 'getDoctrine_SchemaValidateCommandService.php', true],
    'lexik_jwt_authentication.check_config_command' => ['services', 'lexik_jwt_authentication.check_config_command', 'getLexikJwtAuthentication_CheckConfigCommandService.php', true],
    'lexik_jwt_authentication.generate_token_command' => ['services', 'lexik_jwt_authentication.generate_token_command', 'getLexikJwtAuthentication_GenerateTokenCommandService.php', true],
    'maker.auto_command.make_auth' => ['privates', 'maker.auto_command.make_auth', 'getMaker_AutoCommand_MakeAuthService.php', true],
    'maker.auto_command.make_command' => ['privates', 'maker.auto_command.make_command', 'getMaker_AutoCommand_MakeCommandService.php', true],
    'maker.auto_command.make_controller' => ['privates', 'maker.auto_command.make_controller', 'getMaker_AutoCommand_MakeControllerService.php', true],
    'maker.auto_command.make_crud' => ['privates', 'maker.auto_command.make_crud', 'getMaker_AutoCommand_MakeCrudService.php', true],
    'maker.auto_command.make_entity' => ['privates', 'maker.auto_command.make_entity', 'getMaker_AutoCommand_MakeEntityService.php', true],
    'maker.auto_command.make_fixtures' => ['privates', 'maker.auto_command.make_fixtures', 'getMaker_AutoCommand_MakeFixturesService.php', true],
    'maker.auto_command.make_form' => ['privates', 'maker.auto_command.make_form', 'getMaker_AutoCommand_MakeFormService.php', true],
    'maker.auto_command.make_functional_test' => ['privates', 'maker.auto_command.make_functional_test', 'getMaker_AutoCommand_MakeFunctionalTestService.php', true],
    'maker.auto_command.make_migration' => ['privates', 'maker.auto_command.make_migration', 'getMaker_AutoCommand_MakeMigrationService.php', true],
    'maker.auto_command.make_registration_form' => ['privates', 'maker.auto_command.make_registration_form', 'getMaker_AutoCommand_MakeRegistrationFormService.php', true],
    'maker.auto_command.make_serializer_encoder' => ['privates', 'maker.auto_command.make_serializer_encoder', 'getMaker_AutoCommand_MakeSerializerEncoderService.php', true],
    'maker.auto_command.make_serializer_normalizer' => ['privates', 'maker.auto_command.make_serializer_normalizer', 'getMaker_AutoCommand_MakeSerializerNormalizerService.php', true],
    'maker.auto_command.make_subscriber' => ['privates', 'maker.auto_command.make_subscriber', 'getMaker_AutoCommand_MakeSubscriberService.php', true],
    'maker.auto_command.make_twig_extension' => ['privates', 'maker.auto_command.make_twig_extension', 'getMaker_AutoCommand_MakeTwigExtensionService.php', true],
    'maker.auto_command.make_unit_test' => ['privates', 'maker.auto_command.make_unit_test', 'getMaker_AutoCommand_MakeUnitTestService.php', true],
    'maker.auto_command.make_user' => ['privates', 'maker.auto_command.make_user', 'getMaker_AutoCommand_MakeUserService.php', true],
    'maker.auto_command.make_validator' => ['privates', 'maker.auto_command.make_validator', 'getMaker_AutoCommand_MakeValidatorService.php', true],
    'maker.auto_command.make_voter' => ['privates', 'maker.auto_command.make_voter', 'getMaker_AutoCommand_MakeVoterService.php', true],
    'security.command.user_password_encoder' => ['privates', 'security.command.user_password_encoder', 'getSecurity_Command_UserPasswordEncoderService.php', true],
    'swiftmailer.command.debug' => ['privates', 'swiftmailer.command.debug', 'getSwiftmailer_Command_DebugService.php', true],
    'swiftmailer.command.new_email' => ['privates', 'swiftmailer.command.new_email', 'getSwiftmailer_Command_NewEmailService.php', true],
    'swiftmailer.command.send_email' => ['privates', 'swiftmailer.command.send_email', 'getSwiftmailer_Command_SendEmailService.php', true],
    'twig.command.debug' => ['privates', 'twig.command.debug', 'getTwig_Command_DebugService.php', true],
    'twig.command.lint' => ['privates', 'twig.command.lint', 'getTwig_Command_LintService.php', true],
    'vich_uploader.command.mapping_debug' => ['privates', 'vich_uploader.command.mapping_debug', 'getVichUploader_Command_MappingDebugService.php', true],
    'vich_uploader.command.mapping_debug_class' => ['privates', 'vich_uploader.command.mapping_debug_class', 'getVichUploader_Command_MappingDebugClassService.php', true],
    'vich_uploader.command.mapping_list_classes' => ['privates', 'vich_uploader.command.mapping_list_classes', 'getVichUploader_Command_MappingListClassesService.php', true],
    'web_server.command.server_log' => ['privates', 'web_server.command.server_log', 'getWebServer_Command_ServerLogService.php', true],
    'web_server.command.server_run' => ['privates', 'web_server.command.server_run', 'getWebServer_Command_ServerRunService.php', true],
    'web_server.command.server_start' => ['privates', 'web_server.command.server_start', 'getWebServer_Command_ServerStartService.php', true],
    'web_server.command.server_status' => ['privates', 'web_server.command.server_status', 'getWebServer_Command_ServerStatusService.php', true],
    'web_server.command.server_stop' => ['privates', 'web_server.command.server_stop', 'getWebServer_Command_ServerStopService.php', true],
]), ['about' => 'console.command.about', 'assets:install' => 'console.command.assets_install', 'cache:clear' => 'console.command.cache_clear', 'cache:pool:clear' => 'console.command.cache_pool_clear', 'cache:pool:prune' => 'console.command.cache_pool_prune', 'cache:pool:delete' => 'console.command.cache_pool_delete', 'cache:warmup' => 'console.command.cache_warmup', 'debug:config' => 'console.command.config_debug', 'config:dump-reference' => 'console.command.config_dump_reference', 'debug:container' => 'console.command.container_debug', 'debug:autowiring' => 'console.command.debug_autowiring', 'debug:event-dispatcher' => 'console.command.event_dispatcher_debug', 'messenger:consume-messages' => 'console.command.messenger_consume_messages', 'debug:messenger' => 'console.command.messenger_debug', 'debug:router' => 'console.command.router_debug', 'router:match' => 'console.command.router_match', 'debug:translation' => 'console.command.translation_debug', 'translation:update' => 'console.command.translation_update', 'lint:xliff' => 'console.command.xliff_lint', 'lint:yaml' => 'console.command.yaml_lint', 'debug:form' => 'console.command.form_debug', 'debug:twig' => 'twig.command.debug', 'lint:twig' => 'twig.command.lint', 'security:encode-password' => 'security.command.user_password_encoder', 'doctrine:database:create' => 'doctrine.database_create_command', 'doctrine:database:drop' => 'doctrine.database_drop_command', 'doctrine:generate:entities' => 'doctrine.generate_entities_command', 'doctrine:query:sql' => 'doctrine.query_sql_command', 'doctrine:cache:clear-metadata' => 'doctrine.cache_clear_metadata_command', 'doctrine:cache:clear-query' => 'doctrine.cache_clear_query_cache_command', 'doctrine:cache:clear-result' => 'doctrine.cache_clear_result_command', 'doctrine:cache:clear-collection-region' => 'doctrine.cache_collection_region_command', 'doctrine:mapping:convert' => 'doctrine.mapping_convert_command', 'doctrine:schema:create' => 'doctrine.schema_create_command', 'doctrine:schema:drop' => 'doctrine.schema_drop_command', 'doctrine:ensure-production-settings' => 'doctrine.ensure_production_settings_command', 'doctrine:cache:clear-entity-region' => 'doctrine.clear_entity_region_command', 'doctrine:database:import' => 'doctrine.database_import_command', 'doctrine:mapping:info' => 'doctrine.mapping_info_command', 'doctrine:cache:clear-query-region' => 'doctrine.clear_query_region_command', 'doctrine:query:dql' => 'doctrine.query_dql_command', 'doctrine:schema:update' => 'doctrine.schema_update_command', 'doctrine:schema:validate' => 'doctrine.schema_validate_command', 'doctrine:mapping:import' => 'doctrine.mapping_import_command', 'lexik:jwt:check-config' => 'lexik_jwt_authentication.check_config_command', 'lexik:jwt:generate-token' => 'lexik_jwt_authentication.generate_token_command', 'doctrine:fixtures:load' => 'doctrine.fixtures_load_command', 'vich:mapping:debug-class' => 'vich_uploader.command.mapping_debug_class', 'vich:mapping:debug' => 'vich_uploader.command.mapping_debug', 'vich:mapping:list-classes' => 'vich_uploader.command.mapping_list_classes', 'server:run' => 'web_server.command.server_run', 'server:start' => 'web_server.command.server_start', 'server:stop' => 'web_server.command.server_stop', 'server:status' => 'web_server.command.server_status', 'server:log' => 'web_server.command.server_log', 'debug:swiftmailer' => 'swiftmailer.command.debug', 'swiftmailer:email:send' => 'swiftmailer.command.new_email', 'swiftmailer:spool:send' => 'swiftmailer.command.send_email', 'make:auth' => 'maker.auto_command.make_auth', 'make:command' => 'maker.auto_command.make_command', 'make:controller' => 'maker.auto_command.make_controller', 'make:crud' => 'maker.auto_command.make_crud', 'make:entity' => 'maker.auto_command.make_entity', 'make:fixtures' => 'maker.auto_command.make_fixtures', 'make:form' => 'maker.auto_command.make_form', 'make:functional-test' => 'maker.auto_command.make_functional_test', 'make:registration-form' => 'maker.auto_command.make_registration_form', 'make:serializer:encoder' => 'maker.auto_command.make_serializer_encoder', 'make:serializer:normalizer' => 'maker.auto_command.make_serializer_normalizer', 'make:subscriber' => 'maker.auto_command.make_subscriber', 'make:twig-extension' => 'maker.auto_command.make_twig_extension', 'make:unit-test' => 'maker.auto_command.make_unit_test', 'make:validator' => 'maker.auto_command.make_validator', 'make:voter' => 'maker.auto_command.make_voter', 'make:user' => 'maker.auto_command.make_user', 'make:migration' => 'maker.auto_command.make_migration']);
