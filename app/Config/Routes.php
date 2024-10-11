<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

#menu login
$routes->get('/login', 'Login::index');
$routes->post('/logging', 'Login::logging');

#menu register (diletakkan di luar group)
$routes->get('/register', 'Register::index');
$routes->post('/regist', 'Register::regist');

# menu awal
$routes->get('/home', 'Home::index');
$routes->get('/event', 'Home::event');
$routes->get('/market', 'Market::index');

#menu yang membutuhkan login
$routes->group('', ['filter' => 'login'], static function ($routes) {


    #menu profile dan edit
    $routes->get('/profile', 'Profile::index');
    $routes->get('/editprofile', 'Editprofile::index');
    $routes->post('/editprofile/update', 'Profile::update');

    #menu keranjang
    $routes->get('/cartada/add/(:segment)', 'Cartada::add/$1');
    $routes->get('/cartada', 'Cartada::index');

    #menu payment
    $routes->get('/payment', 'Payment::index');
    $routes->get('/doneorder', 'Doneorder::index');

    $routes->get('/logout', 'Login::logout');
});

#$routes->get('/profile', 'Profile::index');
#$routes->get('/editprofile', 'Editprofile::index');
#$routes->post('/edit', 'Profile::edit');