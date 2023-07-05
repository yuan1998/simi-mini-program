<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory , HasDateTimeFormatter;

    const STATUS_LIST = [
        0 => "预约成功",
        1 => "预约取消",
        2 => "预约完成",
    ];
    protected $fillable = [
        'name' ,
        'phone' ,
        'date' ,
        'doctor_id' ,
        'user_id' ,
        'status' ,
    ];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class , 'user_id' , 'id');
    }

    public function doctor(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Doctor::class , 'doctor_id' , 'id');
    }

}
