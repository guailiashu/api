<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Doctrine\DBAL\Schema\AbstractAsset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Education\Add;
//use Auth;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class InfoController extends Controller
{

    public function testInto()
    {


       $data = User::first();

        $user = Auth::guard('api')->user();

        dd($data);
    }
}
