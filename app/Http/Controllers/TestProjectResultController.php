<?php

namespace App\Http\Controllers;

use App\Models\TestProject;
use App\Models\TestProjectResult;
use Illuminate\Http\Request;

class TestProjectResultController extends Controller
{
    public function store(Request $request)
    {
        $projectId = $request->get('project_id');
        if (!TestProject::query()->where('id', $projectId)->exists())
            return response()->json([
                'code' => self::HTTP_REQUEST_ERROR,
                'msg' => '找不到该项目'
            ]);
        $answers = $request->get('answers');
        $score = $request->get('score');
        $userId = $request->user()->id;

        TestProjectResult::create([
            'answers' => $answers,
            'score' => $score,
            'user_id' => $userId,
            'project_id' => $projectId,
        ]);

        return response()->json([
            'code' => self::HTTP_OK,
            'msg' => 'OK'
        ]);
    }
}
