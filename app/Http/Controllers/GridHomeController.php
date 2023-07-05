<?php

namespace App\Http\Controllers;

use App\Models\GridHome;
use Illuminate\Http\Request;

class GridHomeController extends Controller
{
    public function index()
    {
        $data = GridHome::query()
            ->select(['enable', 'path', 'order', 'target' , 'target_type'])
            ->where('enable', 1)
            ->orderBy('order')
            ->limit(10)
            ->get()
            ->map(function ($item) {
                return $item->safeData();
            })->toArray();

        return response()
            ->json([
                'code' => self::HTTP_OK,
                'msg' => "OK",
                'data' => $data
            ]);

    }
}
