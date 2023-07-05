<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class Product extends Model implements Sortable
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


    protected $casts = [
        'images'
    ];


    public function categories(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Category::class, "category_has_products",
            "product_id", "category_id");
    }

    public function getFullCoverPathAttribute()
    {
        return $this->cover ? Storage::disk('public')->url($this->cover) : null;
    }

    public function getFullImagePathAttribute()
    {
        return $this->images ? collect(json_decode($this->images,true))
            ->map(function ($val) {
                return $val ? Storage::disk('public')->url($val) : null;
            }) : [];
    }

    public function safeData()
    {
        return [
            'title' => $this->title,
            'content' => $this->content,
            'images' => $this->full_image_path,
            'sku' => $this->sku,
        ];
    }

}
