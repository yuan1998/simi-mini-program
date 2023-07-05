<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Dcat\Admin\Traits\ModelTree;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Category extends Model
{
    use HasFactory;
    use ModelTree;
    use HasDateTimeFormatter;

    public static function toOptions() {
        return static::query()->select(['id' , 'title'])
            ->get()
            ->pluck( 'title','id' );
    }

    public function getFullPathAttribute() {
        return $this->header_banner? Storage::disk('public')->url($this->header_banner) : null;
    }

}
