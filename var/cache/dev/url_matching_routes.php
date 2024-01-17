<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/expense' => [[['_route' => 'app_expense_index', '_controller' => 'App\\Controller\\ExpenseController::index'], null, ['GET' => 0], null, true, false, null]],
        '/expense/new' => [[['_route' => 'app_expense_new', '_controller' => 'App\\Controller\\ExpenseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/expense/all' => [[['_route' => 'app_expense_all', '_controller' => 'App\\Controller\\ExpenseController::all'], null, ['GET' => 0], null, false, false, null]],
        '/' => [[['_route' => 'app_index', '_controller' => 'App\\Controller\\ExpenseController::index'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
