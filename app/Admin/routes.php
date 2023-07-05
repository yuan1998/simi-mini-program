<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Dcat\Admin\Admin;

Admin::routes();

Route::group([
    'prefix'     => config('admin.route.prefix'),
    'namespace'  => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->get('/home_setting', 'HomeController@setting');
    $router->resource('program_pages', 'ProgramPageController');
    $router->resource('banners', 'BannerController');
    $router->resource('grid_home', 'GridHomeController');
    $router->resource('categories', 'CategoryController');
    $router->resource('products', 'ProductController');
    $router->resource('doctors', 'DoctorController');
    $router->resource('users', 'UserController');
    $router->resource('reservations', 'ReservationController');
    $router->resource('articles', 'ArticleController');
    $router->resource('test_project', 'TestProjectController');
    $router->resource('test_project_result', 'TestProjectResultController');
    $router->resource('card_home', 'CardHomeController');

});
