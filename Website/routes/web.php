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
Route::get('/', function () {

    Route::get('index','Home/StaticController@index');//默认首页
});


Route::namespace('Home')->group(function (){
    Route::get('index','StaticController@index')->name('home/index');//首页
    Route::get('about','StaticController@about')->name('home/about');//关于研博
    Route::get('active','StaticController@active')->name('home/active');//公益
    Route::get('education','StaticController@education')->name('home/education');//学历
    Route::get('news','StaticController@news')->name('home/news');//新闻
    Route::get('school','StaticController@ybSchool')->name('home/school');//分校
//    Route::get('index','StaticController@index')->name('home/index');//


});
