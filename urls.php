<?php

return [
    '/request' => [
        'name' => 'request',
        'callback' => '\Modules\Skol\Controllers\RequestController:index'
    ],
    '/clients' => [
        'name' => 'clients',
        'callback' => '\Modules\Skol\Controllers\ClientsController:index'
    ]
];
