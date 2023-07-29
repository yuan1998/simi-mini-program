<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Reservation;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReservationController extends Controller
{

    public function indexOfUser(Request $request)
    {
        $id = $request->user()->id;
        $data = Reservation::query()
            ->with(['doctor'])
            ->where('user_id', $id)
            ->where('enable', 1)
            ->whereDate('date', '>=', Carbon::today())
            ->orderBy('date')
            ->get()
            ->map(function ($item) {
                return [
                    'doctor_name' => data_get($item, 'doctor.name'),
                    'date' => data_get($item, 'date'),
                    'status' => data_get(Reservation::STATUS_LIST, $item->status),
                ];
            })->toArray();
        return response()->json([
            'code' => self::HTTP_OK,
            'msg' => 'OK',
            'data' => $data
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:10',
            'phone' => 'required|regex:/^1[3-9]\d{9}$/i',
            'doctor_id' => 'required|exists:doctors,id',
            'date' => 'required|date',
            'project_id' => 'required|exists:projects,id',
            'project_name' => 'required',
        ], [
            'phone.required' => '电话不能为空',
            'date.required' => '预约日期不能为空',
            'date.date' => '错误的预约日期',
            'doctor_id.required' => '医生不能为空',
            'doctor_id.exists' => '医生不存在',
            'phone.regex' => '错误的预约电话',
            'name.required' => '预约姓名',
            'project_id.required' => '预约项目不能为空',
            'project_id.exists' => '预约项目不存在',
            'project_name.required' => '预约项目Name不能为空',
            'name.max' => '姓名太长',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'code' => self::HTTP_REQUEST_ERROR,
                'msg' => $validator->messages()->first(),
            ]);
        }

        $data = $validator->validated();
        $user = $request->user();
        $data['user_id'] = $user->id;
        Reservation::create($data);
        if (!$user->phone) {
            User::query()
                ->where('id', $user->id)
                ->update([
                    'phone' => $data['phone'],
                    'name' => $data['name']
                ]);
        }

        return response()->json([
            'code' => self::HTTP_OK,
            'msg' => '申请预约成功~',
        ]);


    }
}
