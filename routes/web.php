<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;

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
    return view('dashboard');
});

Route::get('/hotel', function () {
    return view('hotel');
});


Route::post('/hotel', [HotelController::class,'save']);
Route::post('/hotel/{id}', [HotelController::class,'update']);
Route::get('/hotels', [HotelController::class,'allHotels']);
Route::get('/hotel/{id}', [HotelController::class,'searchHotel']);
