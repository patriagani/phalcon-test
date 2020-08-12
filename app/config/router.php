<?php

$router = $di->getRouter();

// Define your routes here

$router->add(
    '/',
    [
        'controller' => 'index',
        'action'     => 'index',
    ]
);

$router->add(
    '/admin',
    [
        'controller' => 'index',
        'action'     => 'admin',
    ]
);

$router->handle();
