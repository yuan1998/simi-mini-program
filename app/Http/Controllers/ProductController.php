<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function search(Request $request) {
        $query = Product::query()
            ->select(['id', 'cover', 'enable', 'order', 'title'])
            ->where('enable' ,1)
            ->orderBy('order');
        if ($q = $request->get('q'))
            $query->where('title' ,'like' ,"%$q%");

        $data = $query
            ->get()
            ->map(function ($val) {
                return [
                    'cover' => $val->full_cover_path,
                    'id' => $val->id,
                    'title' => $val->title,
                ];
            });
        return response()
            ->json([
                'code' => self::HTTP_OK,
                'msg' => 'OK',
                'data' => $data->toArray()
            ]);
    }

    public function detail($id)
    {
        $data = Product::query()
            ->select(['id', 'images', 'enable', 'title', 'content'])
            ->where('enable', 1)
            ->where('id', $id)
            ->first();
        if (!$data)
            return response()->json([
                'code' => self::HTTP_REQUEST_ERROR,
                'msg' => '商品不存在'
            ]);

        return response()->json([
            'code' => self::HTTP_OK,
            'msg' => "OK",
            'data' => $data->safeData(),
        ]);
    }

    public function indexOfCategory($id)
    {
        $query = Product::query()
            ->select(['id', 'cover', 'enable', 'order', 'title'])
            ->where('enable', 1)
            ->orderBy('order');
        if ($id)
            $query
                ->whereHas('categories', function ($q) use ($id) {
                    $q->where('category_id', $id);
                });

        $data = $query
            ->get()
            ->map(function ($val) {
                return [
                    'cover' => $val->full_cover_path,
                    'id' => $val->id,
                    'title' => $val->title,
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
