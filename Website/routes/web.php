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
//Route::get('test', function () {
////    Route::get('/','Home/StaticController@index');//默认首页
//    $a = config('app.url');
//    dd($a);
//
//});
//use Illuminate\Support\Facades\Storage;
//
//use Illuminate\Support\Facades\DB;
use App\Models\Education\Add;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

Route::get('test', function () {


    $a = storage_path('images/a342879382f75e1420dd8d025d767905.png');
    $B = Storage::disk(config('admin.upload.disk'));
    dd($a);
});


//Route::post('/uploadFile', 'UploadsController@uploadImg');//图片上传
Route::post('/uploadFile', 'UploadsController@uploadImg');

Route::namespace('Home')->group(function (){

    Route::get('/','StaticController@index');//默认首页

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
