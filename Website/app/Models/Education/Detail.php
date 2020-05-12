<?php

namespace App\Models\Education;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Detail extends Model
{
    //
    public $table='home_education_details';


    //获取报考类型
    public static function getSelect() //form 表单的select多选项参数
    {
        $options = DB::table('home_educations')->select('id','name')->get();
        $selectOption = [];
        foreach ($options as $option){
            $selectOption[$option->id] = $option->name;
        }
        return $selectOption;
    }

}
