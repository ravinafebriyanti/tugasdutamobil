<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\CashController;




Route::get('/', [HomeController::class, 'index']);
Route::resource('home', DashboardController::class);
Route::resource('pelanggan', PembeliController::class);
Route::resource('cash', CashController::class);
Route::get('/', function () {
    return view('homepage.index');
}) ;