<?php

namespace App\Http\Controllers\Api\Sing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Sing\Banner;
use App\Models\Sing\Navigation;


class HomeController extends Controller
{
    //获取导航栏数据
    public function getNavigation(Request $request)
    {
        $data = Navigation::get();
        return response()->json($data);
    }

    //获取轮播图，分类数据
    public function getBanner(Request $request)
    {
        $id = $request->input('type_id');

        $banner_data = Banner::where('navigation_id',$id)->first();

        return response()->json($banner_data);
    }




}
