<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */

Route::get('/', function () {
    return view('welcome');
});
$router->group(['prefix' => 'blog'], function () use ($router) {
    $router->get('/', 'BlogController@index')->name('blog.index');
    $router->get('post/{slug}', 'BlogController@post')->name('blog.post');
    $router->get('about', 'BlogController@about')->name('blog.about');
    $router->get('contact', 'BlogController@contact')->name('blog.contact');
    $router->get('autor/{user}', 'BlogController@author')->name('user.show');
});

$router->group(['prefix' => 'admin', 'middleware' => 'auth'], function () use ($router) {
    $router->get('/', 'AdminController@index')->name('admin.index');
});
