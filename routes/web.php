<?php

/** @var \Laravel\Lumen\Routing\Router $router */


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



$router->get('/', ['uses' => 'MainController@index', 'as' => 'index']);

$router->get('/add', ['uses' => 'MainController@add', 'as' => 'addNewTime']);
$router->post('/create', ['uses' => 'MainController@create', 'as' => 'createTime']);

$router->get('/modify/{id}', ['uses' => 'MainController@modify', 'as' => 'modifyTime']);
$router->post('/update/{id}', ['uses' => 'MainController@update', 'as' => 'updateTime']);

$router->post('/delete/{id}', ['uses' => 'MainController@delete', 'as' => 'deleteTime']);

$router->get('/bjeriziles', ['uses' => 'MainController@bjeriZiles', 'as' => 'bjeriZiles']);
$router->post('/bjerizilestani', ['uses' => 'MainController@bjeriZilesTani', 'as' => 'bjeriZilesTani']);
