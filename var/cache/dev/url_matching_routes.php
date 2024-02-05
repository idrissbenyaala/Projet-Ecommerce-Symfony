<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/cart' => [
            [['_route' => 'cart_index', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, true, false, null],
            [['_route' => 'cart_', '_controller' => 'App\\Controller\\CartController::index'], null, ['GET' => 0], null, false, false, null],
        ],
        '/category' => [
            [['_route' => 'app_categoryapp_category_index', '_controller' => 'App\\Controller\\CategoryController::index'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'app_category_index', '_controller' => 'App\\Controller\\CategoryController::index'], null, ['GET' => 0], null, false, false, null],
        ],
        '/category/new' => [[['_route' => 'app_categoryapp_category_new', '_controller' => 'App\\Controller\\CategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/client' => [
            [['_route' => 'app_clientapp_client_index', '_controller' => 'App\\Controller\\ClientController::index'], null, null, null, true, false, null],
            [['_route' => 'app_client_index', '_controller' => 'App\\Controller\\DetailsController::index'], null, null, null, false, false, null],
        ],
        '/command/add' => [[['_route' => 'app_command_add', '_controller' => 'App\\Controller\\CommandController::add'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/command' => [[['_route' => 'app_command_index', '_controller' => 'App\\Controller\\CommandController::index'], null, null, null, true, false, null]],
        '/product' => [
            [['_route' => 'app_productapp_product_index', '_controller' => 'App\\Controller\\ProductController::index'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'app_product_index', '_controller' => 'App\\Controller\\ProductController::index'], null, ['GET' => 0], null, false, false, null],
        ],
        '/product/new' => [[['_route' => 'app_productapp_product_new', '_controller' => 'App\\Controller\\ProductController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/teste2' => [[['_route' => 'app_teste2', '_controller' => 'App\\Controller\\Teste2Controller::index'], null, null, null, false, false, null]],
        '/user' => [
            [['_route' => 'app_userapp_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, false, false, null],
        ],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/c(?'
                    .'|a(?'
                        .'|rt/(?'
                            .'|remove([^/]++)(*:198)'
                            .'|delete([^/]++)(*:220)'
                            .'|add([^/]++)(*:239)'
                        .')'
                        .'|tegory/(?'
                            .'|([^/]++)(?'
                                .'|(*:269)'
                                .'|/edit(*:282)'
                                .'|(*:290)'
                            .')'
                            .'|new(*:302)'
                            .'|([^/]++)(?'
                                .'|(*:321)'
                                .'|/edit(*:334)'
                                .'|(*:342)'
                            .')'
                        .')'
                    .')'
                    .'|lient/details(?'
                        .'|([^/]++)(*:377)'
                        .'|/([^/]++)(*:394)'
                    .')'
                    .'|ommand/([^/]++)(?'
                        .'|(*:421)'
                    .')'
                .')'
                .'|/product/(?'
                    .'|([^/]++)(?'
                        .'|(*:454)'
                        .'|/edit(*:467)'
                        .'|(*:475)'
                    .')'
                    .'|new(*:487)'
                    .'|([^/]++)(?'
                        .'|(*:506)'
                        .'|/edit(*:519)'
                        .'|(*:527)'
                    .')'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:554)'
                .')'
                .'|/User/([^/]++)(*:577)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        198 => [[['_route' => 'cart_remove', '_controller' => 'App\\Controller\\CartController::remove'], ['id'], null, null, false, true, null]],
        220 => [[['_route' => 'cart_delete', '_controller' => 'App\\Controller\\CartController::delete'], ['id'], null, null, false, true, null]],
        239 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\CartController::add'], ['id'], null, null, false, true, null]],
        269 => [[['_route' => 'app_categoryapp_category_show', '_controller' => 'App\\Controller\\CategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        282 => [[['_route' => 'app_categoryapp_category_edit', '_controller' => 'App\\Controller\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        290 => [[['_route' => 'app_categoryapp_category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        302 => [[['_route' => 'app_category_new', '_controller' => 'App\\Controller\\CategoryController::new'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        321 => [[['_route' => 'app_category_show', '_controller' => 'App\\Controller\\CategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        334 => [[['_route' => 'app_category_edit', '_controller' => 'App\\Controller\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        342 => [[['_route' => 'app_category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        377 => [[['_route' => 'app_clientapp_client_details', '_controller' => 'App\\Controller\\ClientController::details'], ['id'], null, null, false, true, null]],
        394 => [[['_route' => 'app_client_details', '_controller' => 'App\\Controller\\ClientController::details'], ['id'], null, null, false, true, null]],
        421 => [
            [['_route' => 'app_command_app_command_delete', '_controller' => 'App\\Controller\\CommandController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [['_route' => 'app_command_delete', '_controller' => 'App\\Controller\\CommandController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        454 => [[['_route' => 'app_productapp_product_show', '_controller' => 'App\\Controller\\ProductController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        467 => [[['_route' => 'app_productapp_product_edit', '_controller' => 'App\\Controller\\ProductController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        475 => [[['_route' => 'app_productapp_product_delete', '_controller' => 'App\\Controller\\ProductController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        487 => [[['_route' => 'app_product_new', '_controller' => 'App\\Controller\\ProductController::new'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        506 => [[['_route' => 'app_product_show', '_controller' => 'App\\Controller\\ProductController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        519 => [[['_route' => 'app_product_edit', '_controller' => 'App\\Controller\\ProductController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        527 => [[['_route' => 'app_product_delete', '_controller' => 'App\\Controller\\ProductController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        554 => [
            [['_route' => 'app_userapp_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_userapp_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::index'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        577 => [
            [['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
