<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');

    /**
     * 一级栏目
     */
    $router->resource('home/navigations',NavigationController::class);//导航栏
    $router->resource('home/about', AboutController::class);//关于研博
    $router->resource('home/active', ActiveController::class);//关于研博
    $router->resource('home/news', NewsController::class);//关于研博

});

