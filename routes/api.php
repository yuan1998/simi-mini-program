<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CardHomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\GridHomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\TestProjectController;
use App\Http\Controllers\TestProjectResultController;
use App\Http\Controllers\WeChatController;
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
    Route::post('/wechat/user/info', [WeChatController::class, 'updateUserInfo']);
    Route::post('/wechat/orcode/path', [WeChatController::class, 'generateQrcode']);
    Route::post('/project/result', [TestProjectResultController::class, 'store']);
    Route::post('/loop_log/store', [\App\Http\Controllers\LoopLogController::class, 'store']);
    Route::post('/loop_log/check', [\App\Http\Controllers\LoopLogController::class, 'isLoop']);
    Route::post('/reservation', [ReservationController::class, 'store']);
    Route::get('/reservation', [ReservationController::class, 'indexOfUser']);

    Route::group([
        'prefix' => 'lottery'
    ],function () {
        Route::get('/{project}/can', [\App\Http\Controllers\LoopProjectController::class, 'canLottery']);
        Route::get('/{project}/my/award', [\App\Http\Controllers\LoopProjectController::class, 'myAwardHistory']);
        Route::post('/{project}/store', [\App\Http\Controllers\LoopProjectController::class, 'store']);

    });

});
Route::post('/wechat/upload_file', [WeChatController::class, 'uploadFile']);
Route::get('/project/options', [ProjectController::class, 'options']);

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

Route::group([
    'prefix' => 'lottery'
],function () {
    Route::get('/{project}', [\App\Http\Controllers\LoopProjectController::class, 'detail']);
});
