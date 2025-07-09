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
use App\Http\Controllers\ProductdetailsController;



Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'index']);
Route::get('/new-arrival',[NewArrivalController::class,'index']);
Route::get('/shop',[ShopController::class,'index']);
Route::get('/about-us',[AboutUsController::class,'index']);
Route::get('/search',[SearchController::class,'index']);
Route::get('/shopping-cart',[ShoppingcartController::class,'index']);
Route::get('/profile',[ProfileController::class,'index']);
Route::get('/contact',[ContactController::class,'index']);
Route::get('/product-details', [ProductdetailsController::class, 'index'])->name('product.details');
