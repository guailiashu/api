<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Exception;


class StaticController extends Controller
{
    //主页
    public function index()
    {

       $mag = $this->getNavigation();//获取导航栏数据

        //获取页面展示数据
        foreach ($mag as $key=>$val){

        //$val->c_route 获取对应路由
        $s_route=explode('/',$val->c_route);

            /**
             * 根据路由查对应的数据表
             * $s_route[0].'_'.$s_route[1].'s' 对应数据表
             */
            if($s_route[1] !='index'&& $s_route[1] !='about'){

                if($s_route[1] == 'news'){//新闻页面
                    $get_mag[$key]['title'] = DB::table('home_news')->limit(4)->get();
                    $get_mag[$key]['routes'] = $val;

                }elseif($s_route[1] == 'school'){//分校
                    $get_mag[$key]['title'] = DB::table('home_schools')->limit(2)->get();
                    $get_mag[$key]['routes'] = $val;

                }elseif($s_route[1] == 'active'){//公益
                    $get_mag[$key]['title'] = DB::table('home_actives')->limit(2)->get();
                    $get_mag[$key]['routes'] = $val;

                }elseif($s_route[1] == 'education'){//学历
                    $get_mag[$key]['title'] = DB::table('home_educations')->limit(4)->get();
                    $get_mag[$key]['routes'] = $val;

                }
                $home_mage = $get_mag;
            }
        }
//dd($home_mage);
      return View('home.index')->with('column',$mag)->with('home',$home_mage);
    }

    //分校
    public function ybSchool()
    {
        $mag = $this->getNavigation();//获取导航栏数据
        return View('home.ybSchool')->with('column',$mag);
    }

    //学历
    public function education()
    {
        $mag = $this->getNavigation();//获取导航栏数据
        return View('home.education')->with('column',$mag);
    }


    //新闻
    public function news()
    {
        $mag = $this->getNavigation();//获取导航栏数据
        return View('home.news')->with('column',$mag);

    }


    //公益
    public function active()
    {
        $mag = $this->getNavigation();//获取导航栏数据
        return View('home.active')->with('column',$mag);

    }

    //关于研博
    public function about()
    {
        $mag = $this->getNavigation();//获取导航栏数据
        return View('home.about')->with('column',$mag);

    }


    //导航栏
    public function getNavigation()
    {
        $mag = DB::table('navigations')->where('anable','=',1)->get();
        return $mag;
    }

}

