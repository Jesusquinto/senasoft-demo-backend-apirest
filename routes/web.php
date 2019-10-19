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

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->group(['prefix' => 'demo'], function () use ($router){

    $router->get('productos', 'ProductosController@get_productos');
    $router->get('almacenes', 'AlmacenesController@get_almacenes');
    $router->get('productosalmacenes', 'ProductosAlmacenesController@get_productos_almacenes');
    
});