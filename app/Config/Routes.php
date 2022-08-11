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
//$routes->get('/', 'Home::index');

$routes->get('/', 'Page::dashboard');
$routes->get('/dashboard', 'Page::dashboard');

$routes->get('/kategori', 'Page::kategori');
$routes->get('/kategori/add', 'Page::addKategori');
$routes->post('/kategori/save', 'Page::saveKategori');
$routes->get('/kategori/edit/(:num)', 'Page::editKategori/$1');
$routes->get('/kategori/delete/(:num)', 'Page::deleteKategori/$1');
$routes->post('/kategori/update/(:num)', 'Page::updateKategori/$1');

$routes->get('/tamu', 'Tamu::index');
$routes->get('/tamu/add', 'Tamu::addTamu');
$routes->post('/tamu/save', 'Tamu::saveTamu');
$routes->get('/tamu/edit/(:num)', 'Tamu::editTamu/$1');
$routes->post('/tamu/update/(:num)', 'Tamu::updateTamu/$1');
$routes->get('/tamu/delete/(:num)', 'Tamu::deleteTamu/$1');

$routes->get('/kehadiran', 'Page::kehadiran');
$routes->get('/doa', 'Page::doa');

$routes->get('/inv-pria', 'Invitation::invPria');
$routes->post('/inv-pria/update/(:num)', 'Invitation::editStatusPria/$1');
$routes->get('/inv-wanita', 'Invitation::invWanita');
$routes->post('/inv-wanita/update/(:num)', 'Invitation::editStatusWanita/$1');

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
