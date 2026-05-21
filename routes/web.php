<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\c;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', [AdminController::class, 'print_Info'] );

Route::get('/greeting', function () {
    return 'Hello World';
});

Route::get('test',[TestController::class, 'test']);
Route::get('t',[c::class, 'C']);
