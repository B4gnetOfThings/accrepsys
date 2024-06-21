<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//$routes->setAutoRoute(true);
$routes->get('/','Admin::login');
$routes->get('admin/login','Admin::login');
$routes->post('admin/login','Admin::login');
$routes->get('admin/logout','Admin::logout');


$routes->group('', ['filter'=> 'AuthAdmin'], static function ($routes) {
    $routes->get('/content/index','content::index');
    $routes->get('/content/index','content::index');
    $routes->get('/content/add','content::add');
    $routes->post('/content/add','content::add');
    $routes->get('/content/view/(:any)','content::view/$1');
    $routes->get('/content/edit/(:any)','content::edit/$1');
    $routes->post('/content/edit/(:any)','content::edit/$1');
    $routes->get('/content/delete/(:any)','content::delete/$1');
    $routes->post('/content/delete/(:any)','content::delete/$1');
}); 