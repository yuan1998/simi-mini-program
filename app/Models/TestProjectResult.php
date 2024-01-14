<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestProjectResult extends Model
{
    use HasFactory, HasDateTimeFormatter;

    protected $fillable = [
        'answers',
        'score',
        'user_id',
        'project_id',
        'form_data',
    ];

    protected $casts = [
        'answers' => 'json',
        'form_data' => 'json',
    ];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function project(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(TestProject::class, 'project_id', 'id');
    }
}
