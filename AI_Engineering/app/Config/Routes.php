<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// Route for the AI² Engineering Landing Page
$routes->get('hiring', 'HiringController::index');