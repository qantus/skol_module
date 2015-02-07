<?php

return [
    '/' => [
        'name' => 'list',
        'callback' => '\Modules\Skol\Controllers\CatalogController:index'
    ],
    '/{slug:.*}' => [
        'name' => 'view',
        'callback' => '\Modules\Skol\Controllers\CatalogController:view'
    ],
];
