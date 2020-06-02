<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


/**
 *  官网
 */
Route::namespace('Api')->group(function (){

    Route::get('eduction/adds/{id?}','IntoController@GetEducationAdds');//学历：NavigationController    地区接口（联动）
});


/**
 * 梦想学院
 */

Route::namespace('Api\Sing')->prefix('sing')->group(function (){
    Route::get('navigation','HomeController@getNavigation');//导航栏
    Route::post('banner','HomeController@getBanner');//banner图

    /**
     * 视频板块
     */
    Route::prefix('video')->group(function (){

        Route::post('new','VideoController@getNew');//最新直播课程
        Route::post('detail','VideoController@getDetail');//详情
    });


    /**
     * 第三方登录
     */

    Route::get('test','IntoController@testInto');
});
