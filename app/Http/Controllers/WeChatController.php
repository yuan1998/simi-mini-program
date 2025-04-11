<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

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
        $data = [
            'avatar' => $request->get('avatar'),
            'nike_name' => $request->get('nike_name'),
            'language' => $request->get('language'),
            'province' => $request->get('province'),
            'country' => $request->get('country'),
            'city' => $request->get('city'),
            'gender' => $request->get('gender'),
            'invite_id' => $request->get('invite_id'),
            'session_key' => $sessionKey,
            'unionid' => data_get($session, 'unionid'),
        ];
        if ($phone = $request->get('phone')) {
            $data['phone'] = $phone;
        }

        $user = User::updateOrCreate([
            'openid' => $openId,
        ], $data);

        $data = Arr::only($user->toArray(), ["id", "block", "avatar", "nike_name", "language", "province", "country", "city", "gender", "phone", 'invite_id']);
        $data['token'] = $user->createToken('token')->plainTextToken;
        return response()->json([
            'code' => self::HTTP_OK,
            'msg' => '授权成功',
            'data' => $data
        ]);
    }

    public function decryptedPhone(Request $request)
    {
        $validator = Validator::make($request->only([
            'code',
        ]), [
            'code' => 'required',
        ], [
            'code.required' => 'Code不能为空',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'code' => self::HTTP_REQUEST_ERROR,
                'msg' => $validator->messages()->first(),
            ]);
        }

        $data = $validator->validated();
        $app = app('easywechat.mini_app');
        $r = $app->getClient()->postJson('wxa/business/getuserphonenumber', [
            'code' => $data['code'],
        ]);
        $result = json_decode($r->getContent(), true);
        if (data_get($result, 'errcode') === 0) {
            return response()->json([
                "code" => self::HTTP_OK,
                "data" => data_get($result, 'phone_info'),
                "msg" => "OK",
            ]);
        }
        Log::debug("获取号码失败" , $result);
        return response()->json([
            "code" => self::HTTP_AUTH_PHONE_ERROR,
            "msg" => "服务器繁忙,请重试",
            "data" => data_get($result, 'phone_info',[]),
        ]);
    }
    // msg: "invalid credential, access_token is invalid or not latest, could get access_token by getStableAccessToken, more details at https://mmbizurl.cn/s/JtxxFh33r rid: 67f3bc42-4b3ea2d7-5e5eaccb"

    public function indexUser(Request $request)
    {
        $user = $request->user();
        if (!$user->enable)
            return response()->json([
                'code' => self::HTTP_AUTH_BLOCK,
                'msg' => 'User get block',
            ]);

        return response()->json([
            'code' => self::HTTP_OK,
            'msg' => 'OK',
            'data' => Arr::only($user->toArray(), ["id", "avatar", "nike_name", "language", "province", "country", "city", "gender", "phone", 'invite_id'])
        ]);
    }

    public function updateUserInfo(Request $request)
    {
        $user = $request->user();
        if (!$user->enable)
            return response()->json([
                'code' => self::HTTP_AUTH_BLOCK,
                'msg' => 'User get block',
            ]);
        $arr = $request->only(['nike_name', 'avatar', 'invite_id']);
        $user->fill($arr);
        $user->save();
        return response()->json([
            'code' => self::HTTP_OK,
            'msg' => '保存成功!',
        ]);
    }

    public function uploadFile(Request $request)
    {
        $file = $request->file('image');
        $type = $request->get("type", "default");
        $res = $file->storeAs("/images/$type", $file->getClientOriginalName(), ['disk' => 'public']);
        $url = Storage::disk("public")->url($res);
        return response()->json([
            'code' => self::HTTP_OK,
            'msg' => 'OK.',
            'data' => $url
        ]);
    }

    public function generateQrcode(Request $request)
    {
        $user = $request->user();
        if (!$user->enable)
            return response()->json([
                'code' => self::HTTP_AUTH_BLOCK,
                'msg' => 'User get block',
            ]);
        $path = $request->get('path');
        if (!$path)
            return response()->json([
                'code' => self::HTTP_REQUEST_ERROR,
                'msg' => '页面路径不能为空',
            ]);
        $str = md5("{$user->id}{$path}");
        $name = "/qrcode/{$str}.png";
        if (!Storage::disk('public')->exists($name)) {
            $app = app('easywechat.mini_app');
            $r = $app->getClient()->postJson('wxa/getwxacode', [
                'path' => $path,
            ]);
            $responseContent = $r->getContent();
            Storage::disk("public")->put($name, $responseContent);
        }

        return response()->json([
                'code' => self::HTTP_OK,
                'msg' => 'OK',
                'data' => Storage::disk('public')->url($name)
            ]
        );

    }
}
