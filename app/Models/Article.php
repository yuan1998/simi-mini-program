<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;

class Article extends Model
{
    use HasFactory , HasDateTimeFormatter;

    const STATUS_LIST = [
        0 =>'草稿',
        1 =>'发布',
        2 =>'下架',
    ];

    public function getCoverFullPathAttribute() {
        return $this->cover_path? Storage::disk('public')->url($this->cover_path) : null;
    }

    public function safeData() {
        $result = Arr::only($this->toArray() , ['title',
            'publish_date',
            'content',]);
        $result['cover_path'] = $this->cover_full_path;
        return $result;
    }

}
