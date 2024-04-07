<?php

namespace App\Http\Controllers;

use App\Models\LoopLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoopLogController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone' => 'required',
            'result' => 'required',
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
        $data['user_id'] = $request->user()->id;
        LoopLog::create($data);
        return response()->json([
            "code" => self::HTTP_OK,
            "msg" => "OK",
        ]);
    }

    public function isLoop(Request $request)
    {
        $id = $request->user()->id;
        $data = LoopLog::query()->where('user_id', $id)->first();
        return response()->json([
            "code" => self::HTTP_OK,
            "data" => $data,
            "msg" => "OK",
        ]);
    }
}
