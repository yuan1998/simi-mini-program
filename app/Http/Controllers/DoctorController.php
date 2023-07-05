<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{

    public function indexOfOptions()
    {
        $data = Doctor::query()
            ->where('enable', 1)
            ->get()
            ->map(function ($item) {
                return [
                    'text' => $item->name,
                    'value' => $item->id,
                ];
            });

        return [
            'code' => self::HTTP_OK,
            'msg' => "OK",
            'data' => $data,
        ];

    }

}
