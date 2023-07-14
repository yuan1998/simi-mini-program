<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class Banner extends Model  implements Sortable
{
    use HasFactory;
    use HasDateTimeFormatter;
    use SortableTrait;

    const TARGET_TYPE = [
        0 => '无',
        1 => '文章',
        2 => '自测项目',
        3 => '站内页面',
        4 => 'h5链接',
        5 => '客服',
        6 => '商品',
    ];

    protected $sortable = [
        // 设置排序字段名称
        'order_column_name' => 'order',
        // 是否在创建时自动排序，此参数建议设置为true
        'sort_when_creating' => true,
    ];

    public function getFullPathAttribute() {
        return $this->path? Storage::disk('public')->url($this->path) : null;
    }

    public function safeData () {
        $result = Arr::only($this->toArray() , ['path',
            'target',
            'target_type',
            ]);
        $result['path'] = $this->full_path;
        return $result;
    }
}
