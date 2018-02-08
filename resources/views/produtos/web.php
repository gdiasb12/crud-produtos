<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('', ['as' => 'home', 'uses' => 'IndexController@home']);
Route::get('/post/{category}', ['as' => 'post', 'uses' => 'IndexController@home']);

Route::group(['prefix' => 'illusion-admin', 'namespace' => 'Admin'], function () use ($router) {
    $router->auth();
    $router->group(['middleware' => ['auth']], function () use ($router) {
        $router->get('/', ['as' => 'admin.index', 'uses' => 'IndexController@index']);
        $router->get('logout', ['as' => 'admin.logout', 'uses' => 'Auth\LoginController@logout']);
        $router->resource('user','UserController');
        $router->resource('post','PostController');
        $router->resource('log','LogController');
    });
});
