<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('Homepage.Home');
});

//for patinet login
Route::get('/home',[HomeController::class,'index']);
// admin add doctor
Route::post('/addoctor',[HomeController::class,'addoctor']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard',[HomeController::class,'index'] )->name('dashboard');
});
