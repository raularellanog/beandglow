<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

Route::get('/login',
           [AuthController::class,'login']);
Route::post('/login',[AuthController::class,'processLogin']);

Route::get('/logout',[AuthController::class,'logout']);

Route::get('register',[AuthController::class,'register']);
