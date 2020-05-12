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


    //获取报考类型下的地区
  public static function getAdds()
  {
      $options = Add::where('enducation_id' , 1)
          ->select('id','address')
          ->get();
      $selectOption = [];
      foreach ($options as $option){
          $selectOption[$option->id] = $option->address;
      }
      return $selectOption;
  }

}
