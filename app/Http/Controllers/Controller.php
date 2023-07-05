<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    const HTTP_OK = 0;
    const HTTP_AUTH_ERROR = 1001;
    const HTTP_AUTH_BLOCK = 1002;

    const HTTP_REQUEST_ERROR = 4001;

}
