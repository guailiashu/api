<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class StaticController extends Controller
{
    //主页
    public function index()
    {

       $mag = DB::table('navigation')->get();

        return View('home.index')->with('column',$mag);
    }

    //分校
    public function ybSchool()
    {
        return View('home.ybSchool');
    }

    //学历
    public function education()
    {
        return View('home.education');
    }


    //新闻
    public function news()
    {
        return View('home.news');

    }


    //公益
    public function active()
    {
        return View('home.active');

    }

    //关于研博
    public function about()
    {
        return View('home.about');

    }


}
