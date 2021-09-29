<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    'app_api_programmer_new' => [[], ['_controller' => 'App\\Controller\\Api\\ProgrammerController::newAction'], [], [['text', '/api/programmers']], [], []],
    'homepage' => [[], ['_controller' => 'App\\Controller\\ArticleController::homepage'], [], [['text', '/']], [], []],
    'todo_list' => [[], ['_controller' => 'App\\Controller\\ArticleController::index'], [], [['text', '/index']], [], []],
    'app_default_index' => [[], ['_controller' => 'App\\Controller\\DefaultController::index'], [], [['text', '/testM']], [], []],
    'app_product_list' => [[], ['_controller' => 'App\\Controller\\ProductController::list'], [], [['text', '/products']], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'app_site_new' => [[], ['_controller' => 'App\\Controller\\SiteController::new'], [], [['text', '/testMailer']], [], []],
    'app_task_new' => [[], ['_controller' => 'App\\Controller\\TaskController::new'], [], [['text', '/article/new']], [], []],
    'edit_task' => [['id'], ['_controller' => 'App\\Controller\\TaskController::edit'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/article/edit']], [], []],
    'task_delete' => [['id'], ['_controller' => 'App\\Controller\\TaskController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/delete']], [], []],
    'article_show' => [['id'], ['_controller' => 'App\\Controller\\TaskController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/article']], [], []],
];
