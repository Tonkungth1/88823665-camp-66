<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
Route::get('/', function () {
    return view('layouts.default');
});
Route ::get('/hello', function () {
    return "<h1>hi<h1>";;
});
Route::get('/mylaravel/{id?}',[Mycontroller::class,'myfunction']);

Route::post('/mylaravel/{id?}',[Mycontroller::class,'myfunction']);
Route::get('/login',  [LoginController::class,'index']);
