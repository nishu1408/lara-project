<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewArrivalController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\AboutUsController;


Route::get('/home',[HomeController::class,'index']);
Route::get('/newarrival',[NewArrivalController::class,'index']);
Route::get('/shop',[ShopController::class,'index']);
Route::get('/aboutus',[AboutUsController::class,'index']);



// Route::get('/', function () {
//     return view('welcome');
// });
