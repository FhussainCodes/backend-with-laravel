<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\c;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', [AdminController::class, 'print_Info'] );

Route::get('/greeting', function () {
    return 'Hello World';
});

Route::get('test',[TestController::class, 'test']);
Route::get('t',[c::class, 'C']);
Route::get('/user/{id}/{name}',[UserController::class, 'user_Data']);