<?php

namespace App\Http\Controllers;

use App\Models\TestProject;
use Illuminate\Http\Request;

class TestProjectController extends Controller
{
    public function detail($id)
    {
        $data = TestProject::query()
            ->where('id', $id)
            ->first();

        if (!$data)
            return response()
                ->json([
                    'code' => self::HTTP_REQUEST_ERROR,
                    'msg' => '找不到测试项目'
                ]);

        return response()
            ->json([
                'code' => self::HTTP_OK,
                'msg' => 'OK',
                'data' => $data,
            ]);

    }
}
