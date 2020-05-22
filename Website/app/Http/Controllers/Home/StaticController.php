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


//                    foreach ($data as $school_key=>$school_val){
//
//                         //获取分校对应数据下标
//                        $sub_key = $school_key + 1;
//
//                        //数据的总数
//                        $data_count = $data->count();
//
//                        //对应余数分组 余数为1 2 的为一组
//                        $remainder = $sub_key%($data_count/2);
//
//                        //暂时因为分两组  除数小于1的为一组
//                        $divide = $sub_key/2;
//
//                        if($divide<=1){
//                            //第一组
//                            if($remainder == 1)
//                            {
//                                $title[1]['one'] = $school_val;
//                            }else{
//                                $title[1]['two'] = $school_val;
//                            }
//
//                        }else{
//                         //第二组
//
//                            if($remainder == 1)
//                            {
//                                $title[2]['one'] = $school_val;
//                            }else{
//                                $title[2]['two'] = $school_val;
//                            }
//                        }
//                        $data_num = $title;
//                    }

                    $get_mag[$s_route[1]]['title'] = $data;
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

//            dd($home_mage);
      return View('home.index')
          ->with('column',$mag)
          ->with('home',$home_mage);
    }

    //分校
    public function ybSchool()
    {
        $mag = $this->getNavigation();//获取导航栏数据

        $school_data = DB::table('home_schools')
            ->orderBy('id','desc')
            ->paginate(2);

        return View('home.ybSchool')
            ->with('column',$mag)
            ->with('schools',$school_data);
    }

    //学历
    public function education()
    {
        //获取学历分类 以及 分类下对应的学校
        //home_educations分类表
        //home_education_adds分类对应地区表
        //home_education_details分类对应学校表

        //获取到"教育分类"和对应"分类地区"的leftJoin集合
        $education_data = DB::table('home_educations')
            ->leftJoin('home_education_adds','home_educations.id','=','home_education_adds.enducation_id')
            ->get();

        //获取到"地区"和对应"学校"的leftJoin集合
        $education_adds_data = DB::table('home_education_adds')
            ->leftJoin('home_education_details','home_education_adds.id','=','home_education_details.enducation_add_id')
            ->get();

        //获取类型数据
        $educations = DB::table('home_educations')->get();


        //热门学校（根据表中是否热门获取数据）
        $popular_data = DB::table('home_education_details')
            ->where('popular',1)
            ->paginate(6);

        $mag = $this->getNavigation();//获取导航栏数据

//dd($education_adds_data);
        return View('home.education')
            ->with('edu_data',$educations)//一级学历分类数据集合
            ->with('edu_address',$education_data)//二级地区数据
            ->with('data',$education_adds_data)//对应三级联动的“高校”数据
            ->with('popular_data',$popular_data)
            ->with('column',$mag);//导航栏

    }


    //新闻
    public function news()
    {

        /**
         * home_news 新闻详情页
         * home_news_types 新闻类别
         */
        //新闻数据
        $news_data = DB::table('home_news_types')
            ->leftJoin('home_news','home_news_types.id','=','home_news.type_id')
//            ->limit(6)
//            ->orderBy('updated_at','desc')
            ->get();


        //分类数据
        $news_type = DB::table('home_news_types')
            ->get();

        $mag = $this->getNavigation();//获取导航栏数据

//        dd($news_data);

        return View('home.news')
            ->with('column',$mag) //导航栏
            ->with('data',$news_data) //新闻数据
            ->with('type_data',$news_type); //分类数据
    }


    //公益
    public function active()
    {
        /**
         *    数据表：home_actives
         */

        //分页
        $page_date = DB::table('home_actives')->paginate(6);

//        dd($page_date);

        $mag = $this->getNavigation();//获取导航栏数据
        return View('home.active')
            ->with('data',$page_date)
            ->with('column',$mag);

    }

    //关于研博
    public function about()
    {
        /**
         * 数据表
         * home_abouts 企业文化
         * home_about_courses 发展历程
         */

        $about_data = DB::table('home_abouts')->get();
        $about_courses_data = DB::table('home_about_courses')->get();

//        dd($about_data);

        $mag = $this->getNavigation();//获取导航栏数据
        return View('home.about')
            ->with('about_data',$about_data)//企业文化
            ->with('courses_data',$about_courses_data)//发展历程
            ->with('column',$mag);

    }


    /**
     * 详情模块
     */

    //分校详情页
    public function schoolDetail(Request $request)
    {
        //获取返回的具体分校对应id编号
        $school_id = $request->schoolId;

        $school_data = DB::table('home_schools')
            ->where('id',$school_id)
            ->value('name');

        //获取分校的图片数据
        $school_db_data = DB::table('home_school_images')
                ->where('school_id',$school_id)
              //  ->leftJoin('home_schools','home_school_images.school_id','home_schools.id')
                ->get();


        $mag = $this->getNavigation();//获取导航栏数据

        //因为路由带参数，导致页面渲染中路径变化，需要修改路由
        foreach( $mag as $key=>$val)
        {
            $s_route=explode('/',$val->c_route);
            $Detail_route[$key]['id'] = $val->id;
            $Detail_route[$key]['c_route'] = $s_route[1];
            $Detail_route[$key]['column'] = $val->column;
        }

//dd($school_db_data);

        return View('home.schoolDetail')
            ->with('column',$Detail_route)
            ->with('school',$school_data)
            ->with('school_data',$school_db_data);
    }


    //学历-学校详情页
    public function eduDetail(Request $request)
    {
        //对应表 ：home_education_details

          $school_data_eduId = $request->eduId;//对应 enducation_add_id
          $school_data_name = $request->schoolName;//对应 name

        $school_data = DB::table('home_education_details')
            ->where([
                [ 'enducation_add_id','=',$school_data_eduId],
                [  'name','=',$school_data_name ]
            ])
            ->first();


        $mag = $this->getNavigation();//获取导航栏数据

        //因为路由带参数，导致页面渲染中路径变化，需要修改路由
        foreach( $mag as $key=>$val)
        {
            $s_route=explode('/',$val->c_route);
            $Detail_route[$key]['id'] = $val->id;
            $Detail_route[$key]['c_route'] = $s_route[1];
            $Detail_route[$key]['column'] = $val->column;
        }
//dd($school_data);
        return View('home.eduDetail')
            ->with('column',$Detail_route)//导航栏数据
            ->with('data',$school_data);//学校详情
    }


    //导航栏数据封装
    public function getNavigation()
    {
        $mag = DB::table('navigations')->where('anable','=',1)->get();
        return $mag;
    }





}

