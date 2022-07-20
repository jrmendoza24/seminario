<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Capacitaciones::index');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
$routes->get('participantes/vista', 'Participantes::index');
$routes->get('participantes/crear', 'Participantes::crear');
$routes->post('participantes/guardar', 'Participantes::guardar');
$routes->get('participantes/borrar/(:num)', 'Participantes::borrar/$1');
$routes->get('participantes/editar/(:num)', 'Participantes::editar/$1');
$routes->post('participantes/actualizar', 'Participantes::actualizar');

$routes->get('facilitadores/vista', 'Facilitadores::index');
$routes->get('facilitadores/crear', 'Facilitadores::crear');
$routes->post('facilitadores/guardar', 'Facilitadores::guardar');
$routes->get('facilitadores/borrar/(:num)', 'Facilitadores::borrar/$1');
$routes->get('facilitadores/editar/(:num)', 'Facilitadores::editar/$1');
$routes->post('facilitadores/actualizar', 'Facilitadores::actualizar');

$routes->get('cursos/vista', 'Cursos::index');
$routes->get('cursos/crear', 'Cursos::crear');
$routes->post('cursos/guardar', 'Cursos::guardar');
$routes->get('cursos/borrar/(:num)', 'Cursos::borrar/$1');
$routes->get('cursos/editar/(:num)', 'Cursos::editar/$1');
$routes->post('cursos/actualizar', 'Cursos::actualizar');

$routes->get('capacitaciones/vista', 'Capacitaciones::index');
$routes->get('capacitaciones/crear', 'Capacitaciones::crear');
$routes->post('capacitaciones/guardar', 'Capacitaciones::guardar');
$routes->get('capacitaciones/borrar/(:num)', 'Capacitaciones::borrar/$1');
$routes->get('capacitaciones/editar/(:num)', 'Capacitaciones::editar/$1');
$routes->post('capacitaciones/actualizar', 'Capacitaciones::actualizar');
