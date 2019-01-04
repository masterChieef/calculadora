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
//$router->group(['middleware' => 'auth'], function () use ($router) {
$router->post('/suma',['uses'=>'ExampleController@suma']);
$router->post('/resta',['uses'=>'ExampleController@resta']);
$router->post('/multiplicacion',['uses'=>'ExampleController@multiplicacion']);
$router->post('/divicion',['uses'=>'ExampleController@divicion']);

//});