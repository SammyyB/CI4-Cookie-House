<?php

use CodeIgniter\Router\RouteCollection;

$routes->get('/', 'Users::index');
$routes->get('/login', 'Users::login');
