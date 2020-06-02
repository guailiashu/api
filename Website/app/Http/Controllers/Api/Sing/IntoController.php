<?php

namespace App\Http\Controllers\Api\Sing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IntoController extends Controller
{
    //

    public function testInto(Request $request)
    {

        $data = $request->all();

        $code = $request->input('code');

        return response()->json($code);
    }

    /**
     * 微信网页授权
     * @param $code code
     * @return {
     *    "access_token":"ACCESS_TOKEN",
     *    "expires_in":7200,
     *    "refresh_token":"REFRESH_TOKEN",
     *    "openid":"OPENID",
     *    "scope":"SCOPE"
     *}
     */
    public function getScope($code)
    {


        $appid = config('wechat.appid');

        $secret = config('wechat.secret');

        $access_token = 'https://api.weixin.qq.com/sns/oauth2/access_token?appid=%s&secret=%s&code=%s&grant_type=authorization_code';

        $uri = sprintf($access_token, $appid, $secret, $code);

        $result = $this->httpRequest($uri);

        dd($result);
    }

    /**
     * 微信公众平台生成带场景参数二维码
     */
    public function wechat_qrcode($data)
    {
        $qrcode_uri = config('wechat.qrcode');

        $access_token = $this->getAccessToken();

        $uri = sprintf($qrcode_uri, $access_token);

        $data = json_encode($data);

        $ticket_array = $this->httpRequest($uri, $data);

        $ticket = urlencode($ticket_array['ticket']);

        $showqrcode_uri = config('wechat.showqrcode');

        $showqrcode_uri = sprintf($showqrcode_uri, $ticket);

        $result = $this->getCurl($showqrcode_uri);

        header("content-type:image/jpg");

        return $result;exit;
    }


    public function httpRequest($url, $data = null)
    {
        $headerArray =array("Content-type:application/json;","Accept:application/json");
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
        if (!empty($data)){
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        }
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($curl);
        if($output === FALSE ){
            return false;
        }
        curl_close($curl);
        return json_decode($output,JSON_UNESCAPED_UNICODE);
    }

    public function getCurl($url){
        $headerArray =array("Content-type:application/json;","Accept:application/json");
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headerArray);
        $output = curl_exec($ch);
        curl_close($ch);
        return $output;
    }
}

