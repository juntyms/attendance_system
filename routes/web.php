<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\FingerprintController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/connect',[FingerprintController::class,'connect'])->name('connect');
Route::Get('/getfp',[FingerprintController::class,'getfp']);
*/
Route::get('/users',[UserController::class,'user'])->name('users');

























Route::resources(['devices'=> DeviceController::class]);