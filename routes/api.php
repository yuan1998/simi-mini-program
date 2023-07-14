<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CardHomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\GridHomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\TestProjectController;
use App\Http\Controllers\TestProjectResultController;
use App\Http\Controllers\WeChatController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([
    'middleware' => ['auth:sanctum']
], function () {
    Route::get('/wechat/user', [WeChatController::class, 'indexUser']);
    Route::post('/project/result', [TestProjectResultController::class, 'store']);
    Route::post('/reservation', [ReservationController::class, 'store']);
    Route::get('/reservation', [ReservationController::class, 'indexOfUser']);
});

Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/product/search', [ProductController::class, 'search']);
Route::get('/doctor/options', [DoctorController::class, 'indexOfOptions']);

Route::get('/category/{id}/products', [ProductController::class, 'indexOfCategory']);
Route::get('/product/{id}', [ProductController::class, 'detail']);
Route::get('/project/{id}', [TestProjectController::class, 'detail']);
Route::get('/article/{id}', [ArticleController::class, 'show']);

Route::get('/banner', [BannerController::class, 'index']);
Route::get('/home/setting', [BannerController::class, 'homeSetting']);
Route::get('/grid_home', [GridHomeController::class, 'index']);
Route::get('/card_home', [CardHomeController::class, 'index']);
Route::any('/wechat/login', [WeChatController::class, 'login']);
Route::any('/wechat/phone', [WeChatController::class, 'decryptedPhone']);
