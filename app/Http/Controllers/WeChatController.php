<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class WeChatController extends Controller
{

    public function login(Request $request)
    {
        $code = $request->get('code');
        $app = app('easywechat.mini_app');
        $utils = $app->getUtils();
        $session = $utils->codeToSession($code);

        // 将session_key和openid保存到数据库或缓存中，用于后续的登录验证
        $sessionKey = data_get($session, 'session_key');
        $openId = data_get($session, 'openid');
        if (!$openId)
            return response()->json([
                'code' => self::HTTP_AUTH_ERROR,
                'msg' => '授权错误'
            ]);

        $user = User::updateOrCreate([
            'openid' => $openId,
        ], [
            'avatar' => $request->get('avatar'),
            'nike_name' => $request->get('nike_name'),
            'language' => $request->get('language'),
            'province' => $request->get('province'),
            'country' => $request->get('country'),
            'city' => $request->get('city'),
            'gender' => $request->get('gender'),
            'session_key' => $sessionKey,
            'unionid' => data_get($session, 'unionid'),
        ]);

        $data = Arr::only($user->toArray(), ["avatar", "nike_name", "language", "province", "country", "city", "gender"]);
        $data['token'] = $user->createToken('token')->plainTextToken;
        return response()->json([
            'code' => self::HTTP_OK,
            'msg' => '授权成功',
            'data' => $data
        ]);
    }

    public function indexUser(Request $request)
    {
        $user = $request->user();
        if (!$user->enable)
            return response()->json([
                'code' =>self::HTTP_AUTH_BLOCK,
                'msg' => 'User get block',
            ]);

        return response()->json([
            'code' => self::HTTP_OK,
            'msg' => 'OK',
            'data' => Arr::only($user->toArray(), ["avatar", "nike_name", "language", "province", "country", "city", "gender"])
        ]);
    }
}
