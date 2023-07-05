<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $data = Category::query()
            ->select([
                'header_banner',
                'title',
                'id',
                'parent_id',
                'order'
            ])
            ->where('parent_id', 0)
            ->orderBy('order')
            ->get()
            ->map(function ($item) {
                return [
                    'id' => $item->id,
                    'order' => $item->order,
                    'title' => $item->title,
                    'path' => $item->full_path,
                ];
            });
        return response()
            ->json([
                'code' => self::HTTP_OK,
                'msg' => 'OK',
                'data' => $data->toArray()
            ]);
    }

}
