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
            ->leftJoin('home_education_details','home_education_adds.enducation_id','=','home_education_details.add_id')
            ->get();

        //获取类型数据
        $educations = DB::table('home_educations')->get();

//
//        $meta =array();
//        for($i = 0; $i < 3; $i++) {
//            $tmp_url = $meta['quote'.($i+1)]=1;
//        }
//
//  dd($tmp_url);


//        dd($educations);

        /**
         * 编辑三级分类目录
         */

        //第一层 ： 类型层
        foreach ($educations  as $e_key=>$e_val){


              //第二层 ： 类型对应的区域层 ，使用 "教育分类"和对应" 集合数据
            foreach ($education_data as $add_key=>$add_val){

                //地区 enducation_id 与 分类id对应
                if($e_val->id == $add_val->enducation_id){

                    //数据集合
                    $educations_mag[$e_key]['id'] = $add_val->id;
                    $educations_mag[$e_key]['name'] = $add_val->name;
                    $educations_mag[$e_key]['image'] =  $add_val->image;
//                    $educations_mag[$e_key]['adds'][$add_key] = $add_val->address;

//                    $educations_mag[$e_key]['adds'][$add_key] = 1;

                    //获取对应地区的学校
                    $add_schools = DB::table('home_education_details')
                        ->where([
                            ['add_id', '=', $e_val->id],
                            ['enducation_add_id', '=', $add_val->enducation_id],
                        ])
//                        ->select('add_school_index')
                        ->get();


                            $adds_school_data = [];
                    if($add_schools->count()){
                        $adds_school_data['add'] = $add_val->address;
                        $adds_school_data['school'] = $add_schools;
                    }

                    $educations_mag[$e_key]['adds'][$add_key] = $adds_school_data;

                }
                $aggregate = $educations_mag;
            }
        }


dd($aggregate);
exit;
        dd($education_adds_data);

        $mag = $this->getNavigation();//获取导航栏数据
        return View('home.education')->with('column',$mag)->with('data',$education_data);
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
    public function schoolDetail(Request $request)
    {
        //获取返回的具体分校对应id编号
        $school_id = $request->schoolId;

        //获取分校的图片数据
        $school_db_data = DB::table('home_school_images')
            ->where('school_id',$school_id)
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

        return View('home.schoolDetail')->with('column',$Detail_route)->with('school_data',$school_db_data);
    }



    //导航栏数据封装
    public function getNavigation()
    {
        $mag = DB::table('navigations')->where('anable','=',1)->get();
        return $mag;
    }





}

