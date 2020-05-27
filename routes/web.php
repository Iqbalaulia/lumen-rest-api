<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->post('/products', 'ProductsController@create');
$router->get('/products/index', 'ProductsController@index');
$router->get('/products/index/{id}', 'ProductsController@show');
$router->put('/products/index/{id}', 'ProductsController@update');
$router->delete('/products/index/{id}', 'ProductsController@destroy');

$router->post('/register', 'UserController@register');
