<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/orders', function () {
    return view('order_managment');
});

Route::get('/addOrders', 'orderController@goToAdd');
Route::get('/orderList', 'orderController@goToOrder');

Route::post('/addNewOrder','orderController@store');
