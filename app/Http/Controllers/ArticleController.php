<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show($id)
    {
        if ($id) {
            $article = Article::query()
                ->select([
                    'id',
                    'status',
                    'title',
                    'publish_date',
                    'cover_path',
                    'content',
                ])
                ->where('status', 1)
                ->where('id', $id)
                ->first();

            if ($article)
                return response()
                    ->json([
                        'code' => self::HTTP_OK,
                        'msg' => 'OK',
                        'data' => $article->safeData()
                    ]);
        }
        return response()->json([
            'code' => self::HTTP_REQUEST_ERROR,
            'msg' => '错误的参数'
        ]);


    }
}
