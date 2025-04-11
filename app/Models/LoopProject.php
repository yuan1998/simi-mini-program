<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class LoopProject extends Model
{
    use HasFactory,HasDateTimeFormatter;

    protected $fillable = [
        'name',
        'award_list',
        'share_title',
        'share_description',
        'share_image',
        'limit_lottery_count',
        'limit_day_lottery_count',
        'enable'
    ];
    protected $casts = [
        'award_list' => 'json',
    ];

    public function getShareUrlAttribute() {
        // 判断是否以 $this->share_image 是否为链接,如果是直接返回
        if (str_starts_with($this->share_image, "http")) {
            return $this->share_image;
        }

        return Storage::disk("public")->url($this->share_image);
    }
}
