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
        '/admin' => [[['_route' => 'back_home', '_controller' => 'App\\Controller\\BackController::home'], null, null, null, false, false, null]],
        '/admin/about' => [[['_route' => 'back_about', '_controller' => 'App\\Controller\\BackController::about'], null, null, null, false, false, null]],
        '/admin/courses' => [[['_route' => 'back_courses', '_controller' => 'App\\Controller\\BackController::courses'], null, null, null, false, false, null]],
        '/admin/course-details' => [[['_route' => 'back_course_details', '_controller' => 'App\\Controller\\BackController::courseDetails'], null, null, null, false, false, null]],
        '/admin/instructors' => [[['_route' => 'back_instructors', '_controller' => 'App\\Controller\\BackController::instructors'], null, null, null, false, false, null]],
        '/admin/instructor-profile' => [[['_route' => 'back_instructor_profile', '_controller' => 'App\\Controller\\BackController::instructorProfile'], null, null, null, false, false, null]],
        '/admin/events' => [[['_route' => 'back_events', '_controller' => 'App\\Controller\\BackController::events'], null, null, null, false, false, null]],
        '/admin/pricing' => [[['_route' => 'back_pricing', '_controller' => 'App\\Controller\\BackController::pricing'], null, null, null, false, false, null]],
        '/admin/blog' => [[['_route' => 'back_blog', '_controller' => 'App\\Controller\\BackController::blog'], null, null, null, false, false, null]],
        '/admin/blog-details' => [[['_route' => 'back_blog_details', '_controller' => 'App\\Controller\\BackController::blogDetails'], null, null, null, false, false, null]],
        '/admin/contact' => [[['_route' => 'back_contact', '_controller' => 'App\\Controller\\BackController::contact'], null, null, null, false, false, null]],
        '/' => [
            [['_route' => 'front_home', '_controller' => 'App\\Controller\\FrontController::home'], null, null, null, false, false, null],
            [['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null],
        ],
        '/about' => [[['_route' => 'front_about', '_controller' => 'App\\Controller\\FrontController::about'], null, null, null, false, false, null]],
        '/courses' => [[['_route' => 'front_courses', '_controller' => 'App\\Controller\\FrontController::courses'], null, null, null, false, false, null]],
        '/course-details' => [[['_route' => 'front_course_details', '_controller' => 'App\\Controller\\FrontController::courseDetails'], null, null, null, false, false, null]],
        '/instructors' => [[['_route' => 'front_instructors', '_controller' => 'App\\Controller\\FrontController::instructors'], null, null, null, false, false, null]],
        '/instructor-profile' => [[['_route' => 'front_instructor_profile', '_controller' => 'App\\Controller\\FrontController::instructorProfile'], null, null, null, false, false, null]],
        '/events' => [[['_route' => 'front_events', '_controller' => 'App\\Controller\\FrontController::events'], null, null, null, false, false, null]],
        '/pricing' => [[['_route' => 'front_pricing', '_controller' => 'App\\Controller\\FrontController::pricing'], null, null, null, false, false, null]],
        '/privacy' => [[['_route' => 'front_privacy', '_controller' => 'App\\Controller\\FrontController::privacy'], null, null, null, false, false, null]],
        '/terms' => [[['_route' => 'front_terms', '_controller' => 'App\\Controller\\FrontController::terms'], null, null, null, false, false, null]],
        '/blog' => [[['_route' => 'front_blog', '_controller' => 'App\\Controller\\FrontController::blog'], null, null, null, false, false, null]],
        '/blog-details' => [[['_route' => 'front_blog_details', '_controller' => 'App\\Controller\\FrontController::blogDetails'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'front_contact', '_controller' => 'App\\Controller\\FrontController::contact'], null, null, null, false, false, null]],
        '/enroll' => [[['_route' => 'front_enroll', '_controller' => 'App\\Controller\\FrontController::enroll'], null, null, null, false, false, null]],
        '/starter' => [[['_route' => 'front_starter', '_controller' => 'App\\Controller\\FrontController::starter'], null, null, null, false, false, null]],
        '/404' => [[['_route' => 'front_404', '_controller' => 'App\\Controller\\FrontController::error404'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
