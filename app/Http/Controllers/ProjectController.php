<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function options()
    {
        $data = Project::query()
            ->where('enable', 1)
            ->orderBy('order')
            ->get()
            ->map(function ($item) {
                return [
                    'text' => $item->title,
                    'value' => $item->id,
                ];
            });


        return response()
            ->json([
                'code' => self::HTTP_OK,
                'data' => $data,
                'msg' => 'OK'
            ]);
    }
}
