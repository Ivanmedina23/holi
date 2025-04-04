<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AutosController;

Route::resource("auto", AutosController::class);

Route::post('/login',[LoginController::class,'authenticate'])->name('Login');

Route::post('/logout',[LoginController::class,'logout'])->name('logout');

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

