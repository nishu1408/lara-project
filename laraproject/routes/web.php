<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewArrivalController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ShoppingcartController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;



Route::get('/home',[HomeController::class,'index']);
Route::get('/newarrival',[NewArrivalController::class,'index']);
Route::get('/shop',[ShopController::class,'index']);
Route::get('/aboutus',[AboutUsController::class,'index']);
Route::get('/search',[SearchController::class,'index']);
Route::get('/shoppingcart',[ShoppingcartController::class,'index']);
Route::get('/profile',[ProfileController::class,'index']);
Route::get('/contact',[ContactController::class,'index']);



// Route::get('/', function () {
//     return view('welcome');
// });
