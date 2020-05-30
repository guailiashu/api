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
    $router->resource('home/active', ActiveController::class);//研博公益
    $router->resource('home/news', NewsController::class);//研博新闻
    $router->resource('home/banner',BannerController::class);//banner图

    //关于研博
    $router->resource('home/about/about', About\AboutController::class);//企业文化
    $router->resource('home/about/course', About\CourseController::class);//发展历程

    //学历
    $router->resource('home/education/add', Education\AddController::class);//地区
    $router->resource('home/education/detail', Education\DetailController::class);//高校
    $router->resource('home/education/education', Education\EducationController::class);//高校

    //分校
    $router->resource('home/school/info',School\SchoolController::class);//分校
    $router->resource('home/school/image',School\ImageController::class);//分校图片



    /**
     * 梦想学院
     */
    Route::namespace('Sing')->group(function ($router){

        $router->resource('sing/navigation',NavigationController::class);//导航栏
        $router->resource('sing/banner',BannerController::class);//轮播图数据
        $router->resource('sing/video',VideoController::class);//视频管理


    });
});

