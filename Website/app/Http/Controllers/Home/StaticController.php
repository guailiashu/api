<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Exception;


class StaticController extends Controller
{
    /**
     * 导航栏目
     */

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
                    $get_mag[$s_route[1]]['title'] = DB::table('home_news')->limit(3)->get();
                    $get_mag[$s_route[1]]['routes'] = $val;

                }elseif($s_route[1] == 'school'){//分校  两张一组

                    //两两分组
                    $data = DB::table('home_schools')
                        ->orderBy('id','desc')
                        ->limit(4)
                        ->get();


                    foreach ($data as $school_key=>$school_val){

                         //获取分校对应数据下标
                        $sub_key = $school_key + 1;

                        //数据的总数
                        $data_count = $data->count();

                        //对应余数分组 余数为1 2 的为一组
                        $remainder = $sub_key%($data_count/2);

                        //暂时因为分两组  除数小于1的为一组
                        $divide = $sub_key/2;

                        if($divide<=1){
                            //第一组
                            if($remainder == 1)
                            {
                                $title[1]['one'] = $school_val;
                            }else{
                                $title[1]['two'] = $school_val;
                            }

                        }else{
                         //第二组

                            if($remainder == 1)
                            {
                                $title[2]['one'] = $school_val;
                            }else{
                                $title[2]['two'] = $school_val;
                            }
                        }
                        $data_num = $title;
                    }

                    $get_mag[$s_route[1]]['title'] = $data_num;
                    $get_mag[$s_route[1]]['routes'] = $val;

                }elseif($s_route[1] == 'active'){//公益
                    $get_mag[$s_route[1]]['title'] = DB::table('home_actives')
                        ->orderBy('updated_at','desc')
                        ->limit(2)
                        ->get();
                    $get_mag[$s_route[1]]['routes'] = $val;

                }elseif($s_route[1] == 'education'){//学历
                    $get_mag[$s_route[1]]['title'] = DB::table('home_educations')->limit(4)->get();
                    $get_mag[$s_route[1]]['routes'] = $val;

                }
                $home_mage = $get_mag;
            }
        }

//        dd($home_mage);
      return View('home.index')->with('column',$mag)->with('home',$home_mage);
    }

    //分校
    public function ybSchool()
    {
        $mag = $this->getNavigation();//获取导航栏数据

        $school_data = DB::table('home_schools')
            ->orderBy('id','desc')
            ->limit(4)
            ->get();

        return View('home.ybSchool')->with('column',$mag)->with('schools',$school_data);
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


    /**
     * 详情模块
     */


    //分校详情页
    public function schoolDetail()
    {
        dd(1111);

        return View('home.schoolDetail');
    }


    //导航栏数据封装
    public function getNavigation()
    {
        $mag = DB::table('navigations')->where('anable','=',1)->get();
        return $mag;
    }





}

