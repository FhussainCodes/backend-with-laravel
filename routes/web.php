<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\c;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\StudentsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', [AdminController::class, 'print_Info'] );

Route::get('/greeting', function () {
    return 'Hello World';
});

Route::get('test',[TestController::class, 'test']);
Route::get('t',[c::class, 'C']);
Route::get('/user/{name}/{id}',[UserController::class, 'user_Data'])
->where('id','[0-9]+');
Route::resource('Rdemo',ResourceController::class);
Route::get('/Sdata',[StudentsController::class,'studentData']);