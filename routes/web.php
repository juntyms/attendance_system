<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\StudentController;
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
Route::get('/', function () {
    return view('auth.login');
})->name('login');

Auth::routes();


Route::group(['middleware' => ['auth']], function() {
    
    Route::get('/home',[HomeController::class,'index'])->name('home'); 
    Route::get('/connect',[FingerprintController::class,'connect'])->name('connect');
    Route::Get('/getfp',[FingerprintController::class,'getfp']);
    Route::get('/users',[UserController::class,'user'])->name('users');
    
    Route::get('/students',[StudentController::class,'index'])->name('student.list');
    Route::get('/students/addstudent',[StudentController::class,'create'])->name('student.add');
    Route::post('/students/addstudent',[StudentController::class,'store'])->name('student.store');
    


    Route::get('/students/allattendance',[StudentController::class,'allattendance'])->name('attendance.all');
    Route::get('/students/updateattendance',[StudentController::class,'updateattendance'])->name('attendance.update');
});

























Route::resources(['devices'=> DeviceController::class]);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');