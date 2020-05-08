<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    //
    public $table='home_news';

    //获取对应新闻类型
    public static function getSelect() //form 表单的select多选项参数
    {
        $options = DB::table('home_news_types')->select('id','name')->get();
        $selectOption = [];
        foreach ($options as $option){
            $selectOption[$option->id] = $option->name;
        }
        return $selectOption;
    }
}
