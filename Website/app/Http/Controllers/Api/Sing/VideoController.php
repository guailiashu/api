<?php

namespace App\Http\Controllers\Api\Sing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Sing\Video;

class VideoController extends Controller
{
    //最新直播课程
    public function getNew(Request $request ,$type_id)
    {
        $id = $type_id;
        $new_data = Video::orderBy('updated_at','desc')
            ->where('navigation_id',$id)
            ->limit(4)
            ->get();

        return response()->json($new_data);
    }

    //详情
    public function getDetail(Request $request ,$video_id)
    {
        $detail_data = Video::where('id',$video_id)->first();

        return response()->json($detail_data);
    }



}
