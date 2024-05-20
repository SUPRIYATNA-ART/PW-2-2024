<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nilai', function () {
    return view('nilai');
});

Route::get('/admin',[AdminController::class,'index']);