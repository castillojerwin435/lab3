<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('about', 'Home::about');
$routes->get('teashop', 'Home::teashop');
$routes->get('pricing', 'Home::pricing');
$routes->get('testimonies', 'Home::testimonies');
$routes->get('contact', 'Home::contact');
$routes->get('admin', 'Home::admin');
$routes->get('dashboard', 'Home::admin');
$routes->post('/main/insert', 'ProductController::insert');