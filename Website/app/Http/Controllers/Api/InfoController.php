<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Education\Add;

class InfoController extends Controller
{
    //学历：NavigationController    地区接口（联动）
    public function GetEducationAdds(Request $request)
    {
        //pash_info 模式路由
        $qs = $request->all();
        try {
            if($qs['q']){

//                $options = Add::where('enducation_id' , $qs['q'])
//                ->select('id','address')
//                ->get();
//            $selectOption = [];
//            foreach ($options as $option){
//                $selectOption[$option->id] = $option->address;
//            }
//            dd($selectOption);

                $provinceId = Add::where('enducation_id', $qs['q'])->get(['id', DB::raw('address as text')]);

            return $provinceId;

//                $data = DB::table('home_education_adds')
//                    ->where('enducation_id',$qs['q'])
//                    ->pluck('address','id');
//                return $data;
            }else{
             throw new \Exception( '没有此路由');
            }
        }catch (\Exception $e ){
            return  $e->getMessage();
        }
    }
}
