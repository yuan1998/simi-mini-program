<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    use HasDateTimeFormatter;

    public static function toOptions()
    {
        return static::query()
            ->select(['id', 'name'])
            ->get()->pluck('name', 'id');
    }
}
