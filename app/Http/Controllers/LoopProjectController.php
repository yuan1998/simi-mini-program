<?php

namespace App\Http\Controllers;

use App\Models\LoopProject;
use App\Models\LoopProjectLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoopProjectController extends Controller
{


    public function detail(LoopProject $project, Request $request)
    {

        $arr = $project->toArray();
//        $count = -1;
//        if ($project->limit_lottery_count != 0) {
//            $historyCount = LoopProjectLog::where("project_id",$project->id)->where("user_id",$user->id)->count();
//            $count = $project->limit_lottery_count - $historyCount;
//        }
//        // 判断 $project->limit_day_lottery_count (每日抽奖限制)
//        if ($project->limit_day_lottery_count != 0 && $count !=0) {
//            $historyCount = LoopProjectLog::where("project_id",$project->id)->where("user_id",$user->id)->whereDate("created_at",today())->count();
//            $count = $project->limit_day_lottery_count - $historyCount;
//        }
//        $arr['lottery_count'] = $count;
        $arr['share_image'] = $project->share_url;
        return response()->json(['code' => 0, 'data' => $arr, "msg" => "OK"]);
    }

    public function canLottery(LoopProject $project, Request $request)
    {
        $user = $request->user();
        $id = $project->id;
        if ($project->limit_lottery_count != 0) {
            $count = LoopProjectLog::where("project_id", $id)->where("user_id", $user->id)->count();
            if ($count >= $project->limit_lottery_count) {
                return response()->json([
                    'code' => 1,
                    'msg' => '您已抽奖,且次数已达上限',
                    'data' => 0,
                ]);
            }
        }
        if ($project->limit_day_lottery_count != 0) {
            $count = LoopProjectLog::where("project_id", $id)->where("user_id", $user->id)->whereDate("created_at", today())->count();
            if ($count >= $project->limit_day_lottery_count) {
                return response()->json(['code' => 1, 'msg' => '您已抽奖,且当天抽奖次数已达上限', 'data' => 0]);
            }
        }
        return response()->json(['code' => 1, 'msg' => 'OK', 'data' => 1]);
    }

    public function store(LoopProject $project, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone' => 'required',
            'result' => 'required',
        ], [
            'phone.required' => '手机号不能为空',
            'result.required' => '中奖项目不能为空',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'code' => self::HTTP_REQUEST_ERROR,
                'msg' => $validator->messages()->first(),
            ]);
        }
        $user = $request->user();

        if ($project->limit_lottery_count != 0) {
            $count = LoopProjectLog::where("project_id", $project->id)->where("user_id", $user->id)->count();
            if ($count >= $project->limit_lottery_count) {
                return response()->json(['code' => 1, 'msg' => '抽奖次数不足.']);
            }
        }
        if ($project->limit_day_lottery_count != 0) {
            $count = LoopProjectLog::where("project_id", $project->id)->where("user_id", $user->id)->whereDate("created_at", today())->count();
            if ($count >= $project->limit_day_lottery_count) {
                return response()->json(['code' => 1, 'msg' => '当天抽奖次数已用完.']);
            }
        }
        LoopProjectLog::create([
            "project_id" => $project->id,
            "user_id" => $user->id,
            "phone" => $request->phone,
            "result" => $request->result,
            "status" => 0,
            "cache" => [
                "project" => $project->name
            ]
        ]);

        return response()->json(['code' => 0, 'msg' => 'OK']);

    }

    public function myAwardHistory(LoopProject $project, Request $request)
    {
        $user = $request->user();
        $logs = LoopProjectLog::where("project_id",$project->id)->where("user_id",$user->id)->orderBy("id","desc")->get();
        return response()->json(['code' => 0, 'data' => $logs, "msg" => "OK"]);
    }
}
