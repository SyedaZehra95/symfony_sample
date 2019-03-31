<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/galleryList' => [[['_route' => 'app_api_database_getgalleries', '_controller' => 'App\\Controller\\Api\\DatabaseController::getGalleries'], null, ['GET' => 0], null, false, false, null]],
            '/createGallery' => [[['_route' => 'app_api_database_newgallery', '_controller' => 'App\\Controller\\Api\\DatabaseController::newGallery'], null, ['POST' => 0], null, false, false, null]],
            '/detected' => [[['_route' => 'app_api_database_emotionsdetected', '_controller' => 'App\\Controller\\Api\\DatabaseController::emotionsDetected'], null, ['GET' => 0], null, false, false, null]],
            '/captured' => [[['_route' => 'app_api_database_emotionscaptured', '_controller' => 'App\\Controller\\Api\\DatabaseController::emotionsCaptured'], null, ['GET' => 0], null, false, false, null]],
            '/unattended' => [[['_route' => 'app_api_database_visitorunattended', '_controller' => 'App\\Controller\\Api\\DatabaseController::visitorUnattended'], null, ['GET' => 0], null, false, false, null]],
            '/galleryvisit' => [[['_route' => 'app_api_database_visitorgallery', '_controller' => 'App\\Controller\\Api\\DatabaseController::visitorGallery'], null, ['GET' => 0], null, false, false, null]],
            '/emotions' => [[['_route' => 'app_api_emotionsapi_emotions', '_controller' => 'App\\Controller\\Api\\EmotionsApiController::emotions'], null, ['POST' => 0], null, false, false, null]],
            '/events' => [[['_route' => 'app_api_eventsapi_eventrequest', '_controller' => 'App\\Controller\\Api\\EventsApiController::eventRequest'], null, ['POST' => 0], null, false, false, null]],
            '/charts' => [[['_route' => 'app_api_eventsapi_datarequest', '_controller' => 'App\\Controller\\Api\\EventsApiController::dataRequest'], null, ['POST' => 0], null, false, false, null]],
            '/consoleEvent' => [[['_route' => 'app_api_eventsapi_consolerequest', '_controller' => 'App\\Controller\\Api\\EventsApiController::consoleRequest'], null, ['POST' => 0], null, false, false, null]],
            '/gallery' => [[['_route' => 'app_api_galleryapi_galleryrequest', '_controller' => 'App\\Controller\\Api\\GalleryApiController::galleryRequest'], null, ['POST' => 0], null, false, false, null]],
            '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\AuthenticationController::login'], null, null, null, false, false, null]],
            '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\AuthenticationController::logout'], null, null, null, false, false, null]],
            '/login_success' => [[['_route' => 'login_success', '_controller' => 'App\\Controller\\AuthenticationController::postLoginRedirectAction'], null, null, null, false, false, null]],
            '/admin' => [[['_route' => 'easyadmin', '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction'], null, null, null, true, false, null]],
            '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
            '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
            '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
            '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
            '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
            '/api/login_check' => [[['_route' => 'api_login_check'], null, null, null, false, false, null]],
            '/api/token/refresh' => [[['_route' => 'gesdinet_jwt_refresh_token', '_controller' => 'gesdinet.jwtrefreshtoken:refresh'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/api(?'
                        .'|/([^/]++)/(?'
                            .'|gallery(?'
                                .'|List(*:41)'
                                .'|visit(*:53)'
                                .'|(*:60)'
                            .')'
                            .'|c(?'
                                .'|reateGallery(*:84)'
                                .'|aptured(*:98)'
                                .'|harts(*:110)'
                                .'|onsoleEvent(*:129)'
                            .')'
                            .'|detected(*:146)'
                            .'|unattended(*:164)'
                            .'|e(?'
                                .'|motions(*:183)'
                                .'|vents(*:196)'
                            .')'
                        .')'
                        .'|(?:/(index)(?:\\.([^/]++))?)?(*:234)'
                        .'|/(?'
                            .'|docs(?:\\.([^/]++))?(*:265)'
                            .'|contexts/(.+)(?:\\.([^/]++))?(*:301)'
                            .'|u(?'
                                .'|ser(?'
                                    .'|_(?'
                                        .'|otps(?'
                                            .'|(?:\\.([^/]++))?(?'
                                                .'|(*:348)'
                                            .')'
                                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                                .'|(*:386)'
                                            .')'
                                        .')'
                                        .'|profiles(?'
                                            .'|(?:\\.([^/]++))?(?'
                                                .'|(*:425)'
                                            .')'
                                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                                .'|(*:463)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|s(?'
                                        .'|(?:\\.([^/]++))?(*:493)'
                                        .'|/(?'
                                            .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                                .'|(*:533)'
                                            .')'
                                            .'|([^/]++)/role(?:\\.([^/]++))?(*:570)'
                                        .')'
                                    .')'
                                .')'
                                .'|nattendeds(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:612)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:650)'
                                    .')'
                                .')'
                            .')'
                            .'|g(?'
                                .'|alleries(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:694)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:732)'
                                    .')'
                                .')'
                                .'|enders(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:769)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:807)'
                                    .')'
                                .')'
                            .')'
                            .'|age_(?'
                                .'|ranges(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:852)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:890)'
                                    .')'
                                .')'
                                .'|distributions(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:934)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:972)'
                                    .')'
                                .')'
                            .')'
                            .'|roles(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:1009)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1048)'
                                .')'
                            .')'
                            .'|ethnic(?'
                                .'|_groups(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:1096)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:1135)'
                                    .')'
                                .')'
                                .'|ities(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:1172)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:1211)'
                                    .')'
                                .')'
                            .')'
                            .'|visitors(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:1252)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1291)'
                                .')'
                            .')'
                            .'|spotted_cases(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:1336)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1375)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:1419)'
                        .'|wdt/([^/]++)(*:1440)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:1487)'
                                .'|router(*:1502)'
                                .'|exception(?'
                                    .'|(*:1523)'
                                    .'|\\.css(*:1537)'
                                .')'
                            .')'
                            .'|(*:1548)'
                        .')'
                    .')'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            41 => [[['_route' => 'api_app_api_database_getgalleries', '_controller' => 'App\\Controller\\Api\\DatabaseController::getGalleries'], ['version'], ['GET' => 0], null, false, false, null]],
            53 => [[['_route' => 'api_app_api_database_visitorgallery', '_controller' => 'App\\Controller\\Api\\DatabaseController::visitorGallery'], ['version'], ['GET' => 0], null, false, false, null]],
            60 => [[['_route' => 'api_app_api_galleryapi_galleryrequest', '_controller' => 'App\\Controller\\Api\\GalleryApiController::galleryRequest'], ['version'], ['POST' => 0], null, false, false, null]],
            84 => [[['_route' => 'api_app_api_database_newgallery', '_controller' => 'App\\Controller\\Api\\DatabaseController::newGallery'], ['version'], ['POST' => 0], null, false, false, null]],
            98 => [[['_route' => 'api_app_api_database_emotionscaptured', '_controller' => 'App\\Controller\\Api\\DatabaseController::emotionsCaptured'], ['version'], ['GET' => 0], null, false, false, null]],
            110 => [[['_route' => 'api_app_api_eventsapi_datarequest', '_controller' => 'App\\Controller\\Api\\EventsApiController::dataRequest'], ['version'], ['POST' => 0], null, false, false, null]],
            129 => [[['_route' => 'api_app_api_eventsapi_consolerequest', '_controller' => 'App\\Controller\\Api\\EventsApiController::consoleRequest'], ['version'], ['POST' => 0], null, false, false, null]],
            146 => [[['_route' => 'api_app_api_database_emotionsdetected', '_controller' => 'App\\Controller\\Api\\DatabaseController::emotionsDetected'], ['version'], ['GET' => 0], null, false, false, null]],
            164 => [[['_route' => 'api_app_api_database_visitorunattended', '_controller' => 'App\\Controller\\Api\\DatabaseController::visitorUnattended'], ['version'], ['GET' => 0], null, false, false, null]],
            183 => [[['_route' => 'api_app_api_emotionsapi_emotions', '_controller' => 'App\\Controller\\Api\\EmotionsApiController::emotions'], ['version'], ['POST' => 0], null, false, false, null]],
            196 => [[['_route' => 'api_app_api_eventsapi_eventrequest', '_controller' => 'App\\Controller\\Api\\EventsApiController::eventRequest'], ['version'], ['POST' => 0], null, false, false, null]],
            234 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => '1', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
            265 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_api_respond' => '1', '_format' => ''], ['_format'], null, null, false, true, null]],
            301 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_api_respond' => '1', '_format' => 'jsonld'], ['shortName', '_format'], null, null, false, true, null]],
            348 => [
                [['_route' => 'api_user_otps_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\UserOtp', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_user_otps_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\UserOtp', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
            ],
            386 => [
                [['_route' => 'api_user_otps_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\UserOtp', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_user_otps_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\UserOtp', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
                [['_route' => 'api_user_otps_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\UserOtp', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            ],
            425 => [
                [['_route' => 'api_user_profiles_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\UserProfile', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_user_profiles_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\UserProfile', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
            ],
            463 => [
                [['_route' => 'api_user_profiles_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\UserProfile', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_user_profiles_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\UserProfile', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
                [['_route' => 'api_user_profiles_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\UserProfile', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            ],
            493 => [[['_route' => 'api_users_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null]],
            533 => [
                [['_route' => 'api_users_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_users_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            ],
            570 => [[['_route' => 'api_users_role_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Role', '_api_subresource_operation_name' => 'api_users_role_get_subresource', '_api_subresource_context' => ['property' => 'role', 'identifiers' => [['id', 'App\\Entity\\User', true]], 'collection' => false, 'operationId' => 'api_users_role_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
            612 => [
                [['_route' => 'api_unattendeds_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Unattended', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_unattendeds_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Unattended', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
            ],
            650 => [
                [['_route' => 'api_unattendeds_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Unattended', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_unattendeds_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Unattended', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
                [['_route' => 'api_unattendeds_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Unattended', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            ],
            694 => [
                [['_route' => 'api_galleries_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Gallery', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_galleries_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Gallery', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
            ],
            732 => [
                [['_route' => 'api_galleries_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Gallery', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_galleries_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Gallery', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
                [['_route' => 'api_galleries_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Gallery', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            ],
            769 => [
                [['_route' => 'api_genders_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Gender', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_genders_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Gender', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
            ],
            807 => [
                [['_route' => 'api_genders_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Gender', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_genders_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Gender', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
                [['_route' => 'api_genders_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Gender', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            ],
            852 => [
                [['_route' => 'api_age_ranges_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\AgeRange', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_age_ranges_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\AgeRange', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
            ],
            890 => [
                [['_route' => 'api_age_ranges_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\AgeRange', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_age_ranges_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\AgeRange', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
                [['_route' => 'api_age_ranges_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\AgeRange', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            ],
            934 => [
                [['_route' => 'api_age_distributions_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\AgeDistribution', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_age_distributions_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\AgeDistribution', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
            ],
            972 => [
                [['_route' => 'api_age_distributions_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\AgeDistribution', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_age_distributions_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\AgeDistribution', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
                [['_route' => 'api_age_distributions_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\AgeDistribution', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            ],
            1009 => [
                [['_route' => 'api_roles_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Role', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_roles_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Role', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
            ],
            1048 => [
                [['_route' => 'api_roles_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Role', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_roles_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Role', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
                [['_route' => 'api_roles_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Role', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            ],
            1096 => [
                [['_route' => 'api_ethnic_groups_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\EthnicGroup', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_ethnic_groups_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\EthnicGroup', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
            ],
            1135 => [
                [['_route' => 'api_ethnic_groups_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\EthnicGroup', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_ethnic_groups_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\EthnicGroup', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
                [['_route' => 'api_ethnic_groups_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\EthnicGroup', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            ],
            1172 => [
                [['_route' => 'api_ethnicities_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Ethnicity', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_ethnicities_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Ethnicity', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
            ],
            1211 => [
                [['_route' => 'api_ethnicities_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Ethnicity', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_ethnicities_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Ethnicity', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
                [['_route' => 'api_ethnicities_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Ethnicity', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            ],
            1252 => [
                [['_route' => 'api_visitors_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Visitors', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_visitors_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Visitors', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
            ],
            1291 => [
                [['_route' => 'api_visitors_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Visitors', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_visitors_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Visitors', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
                [['_route' => 'api_visitors_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Visitors', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            ],
            1336 => [
                [['_route' => 'api_spotted_cases_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\SpottedCases', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_spotted_cases_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\SpottedCases', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
            ],
            1375 => [
                [['_route' => 'api_spotted_cases_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\SpottedCases', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_spotted_cases_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\SpottedCases', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
                [['_route' => 'api_spotted_cases_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\SpottedCases', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            ],
            1419 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            1440 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
            1487 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
            1502 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
            1523 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
            1537 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
            1548 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        ];
    }
}
