<?php

namespace App\Models\School;

use Illuminate\Database\Eloquent\Model;
use App\Models\School\School;
use Illuminate\Support\Facades\DB;

class Image extends Model
{
    //
    public $table = 'home_school_images';


    //获取对应新闻类型
    public static function getSelect() //form 表单的select多选项参数
    {
        $options = DB::table('home_schoolS')->select('id','name')->get();
        $selectOption = [];
        foreach ($options as $option){
            $selectOption[$option->id] = $option->name;
        }
        return $selectOption;
    }

}
