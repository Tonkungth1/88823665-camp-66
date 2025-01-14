<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
Route::get('/', function () {
    return view('welcome');
});
Route ::get('/hello', function () {
    return "<h1>hi<h1>";;
});
Route::get('/mylaravel/{id?}',[Mycontroller::class,'myfunction']);

Route::post('/mylaravel/{id?}',[Mycontroller::class,'myfunction']);