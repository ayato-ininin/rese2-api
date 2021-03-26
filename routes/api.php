<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LikesController;
use App\Http\Controllers\ShopsController;
use App\Http\Controllers\ReservationController;

Route::post('/register',[RegisterController::class,'post']);
Route::post('/login',[LoginController::class,'post']);
Route::post('/logout',[LogoutController::class,'post']);
Route::get('/users',[UsersController::class,'get']);
Route::apiResource('/shops',ShopsController::class);
Route::post('/likes',[LikesController::class,'post']);
Route::delete('/likes',[LikesController::class,'delete']);
Route::get('/likes/shops',[LikesController::class,'getLikeShops']);
Route::get('/reservations/shops',[ReservationController::class,'getReservationsShops']);
Route::post('/reservations',[ReservationController::class,'post']);
Route::delete('/reservations',[ReservationController::class,'delete']);
