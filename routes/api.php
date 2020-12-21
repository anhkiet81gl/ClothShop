<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('categories', 'CategoriesAPIController');

Route::resource('products', 'ProductsAPIController');

Route::resource('order_statuses', 'OrderStatusAPIController');

Route::resource('deliveries', 'DeliveryAPIController');

Route::resource('banners', 'BannerAPIController');

Route::resource('customers', 'CustomerAPIController');

Route::resource('orders', 'OrderAPIController');

Route::resource('roles', 'RolesAPIController');