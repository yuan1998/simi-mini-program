<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestProject extends Model
{
    use HasFactory,HasDateTimeFormatter;
    protected $casts = [
        'question_data' => 'json'
    ];
}
