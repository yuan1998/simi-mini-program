<?php

namespace App\Http\Controllers;

use App\Models\CardHome;
use Illuminate\Http\Request;

class CardHomeController extends Controller
{
    public function index()
    {
        $data = CardHome::query()
            ->select(['enable', 'path', 'order', 'target', 'target_type'])
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
