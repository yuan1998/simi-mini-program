<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoopLog extends Model
{
    use HasFactory,HasDateTimeFormatter;

    const STATUS_LIST = [
        0 => '未使用',
        1 => '已使用',
        2 => '无效',
    ];

    protected $fillable = [
        'user_id',
        'phone',
        'result',
        'status',
        'cache',
    ];
    protected $casts = [
        'cache' => 'json'
    ];
}
