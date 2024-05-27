<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nilai', function () {
    return view('nilai');
});

Route::get('/admin',[AdminController::class,'index']);

Route::get('/admin/pasien', [PasienController::class, 'index']);