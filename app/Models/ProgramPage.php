<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class ProgramPage extends Model implements Sortable
{
    use HasFactory;
    use HasDateTimeFormatter;
    use SortableTrait;

    protected $sortable = [
        // 设置排序字段名称
        'order_column_name' => 'order',
        // 是否在创建时自动排序，此参数建议设置为true
        'sort_when_creating' => true,
    ];

    protected $fillable = [
        'path',
        'name',
        'type',
        'order',
    ];

    const PROGRAM_PAGE_LIST = [
        "首页" => '/pages/index/index',
        "预约" => '/pages/reservation/index',
        "商城" => '/pages/shop/index',
        "申请预约" => '/pages/reservation/create',
        "搜索结果" => '/pages/shop/search?k={搜索关键词}',
        "项目自测" => '/pages/project/index?id={测试项目ID}',
        "商品详情页" => '/pages/shop/detail?id={商品ID}',
        "文章详情页" => '/pages/article/index?id={文章ID}',
    ];

    public static function initPage () {
        foreach (self::PROGRAM_PAGE_LIST as $key => $value) {
            self::create([
                'name' =>$key,
                'path' => $value
            ]);
        }
    }

}
