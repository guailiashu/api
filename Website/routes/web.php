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


Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});



Route::namespace('Home')->group(function (){
    //一级目录
    Route::get('index','StaticController@index')->name('home/index');//首页
    Route::get('about','StaticController@about')->name('home/about');//关于研博
    Route::get('active','StaticController@active')->name('home/active');//公益
    Route::get('education','StaticController@education')->name('home/education');//学历
    Route::get('news','StaticController@news')->name('home/news');//新闻
    Route::get('school','StaticController@ybSchool')->name('home/school');//分校

    //二级目录
    Route::get('schoolDetail/{schoolId}','StaticController@schoolDetail')->name('home/schoolDetail');//分校详情
    Route::get('schoolDetail','StaticController@schoolDetailA')->name('home/schoolDetailA');//分校详情 无参数

    Route::get('eduDetail/{eduId}/{schoolName}','StaticController@eduDetail')->name('home/eduDetail');//学历-对应学校详情



});
