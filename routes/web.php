<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BuildingController;
use App\Http\Controllers\CoordinatorController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\FingerprintController;
use App\Http\Controllers\RoleController;

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
Route::middleware(['auth'])->group( function() {

    Route::get('/',[HomeController::class,'index'])->name('home');
    Route::get('/connect',[FingerprintController::class,'connect'])->name('connect');
    Route::Get('/getfp',[FingerprintController::class,'getfp']);

    Route::get('/users', [UserController::class,'index'])->name('users.index');
    Route::get('/users/create',[UserController::class,'create'])->name('users.create');
    Route::post('/users/create',[UserController::class,'store'])->name('users.store');
    Route::get('/users/{userId}/role/{role}/revoke',[UserController::class,'revokeRole'])->name('users.revokerole');

    Route::get('/users/getfingerprint',[UserController::class,'getfingerprint'])->name('users.getfingerprint');

    Route::get('/students',[StudentController::class,'index'])->name('student.list');
    Route::get('/students/addstudent',[StudentController::class,'create'])->name('student.add');
    Route::post('/students/addstudent',[StudentController::class,'store'])->name('student.store');
    Route::get('/students/{id}/edit',[StudentController::class,'edit'])->name('student.edit');
    Route::post('/students/{id}/edit',[StudentController::class,'update'])->name('student.update');
    Route::get('/students/buildingassignment', [StudentController::class,'buildings'])->name('student.building');
    Route::get('/students/inout', [StudentController::class,'inout'])->name('student.inout');

    Route::get('/students/allattendance',[StudentController::class,'allattendance'])->name('attendance.all');
    Route::get('/students/updateattendance',[StudentController::class,'updateattendance'])->name('attendance.update');

    Route::get('/devices',[DeviceController::class,'index'])->name('devices.index');
    Route::get('/devices/create',[DeviceController::class,'create'])->name('devices.create');
    Route::post('/devices/create',[DeviceController::class,'store'])->name('devices.store');
    Route::get('/devices/reset',[DeviceController::class,'resetdevice'])->name('devices.reset');

    Route::resources(['departments'=>DepartmentController::class]);

    Route::resources(['buildings'=>BuildingController::class]);

    /** Temporary coordinator might be deleted */
    Route::get('/coordinator/{id}',[CoordinatorController::class,'delete'])->name('coordinator.delete');
    Route::get('/coordinators/assign/{buildings}',[CoordinatorController::class,'assign'])->name('coordinators.assign');
    Route::post('/coordinators/assign/{buildings}',[CoordinatorController::class,'saveassign'])->name('coordinators.saveassign');

    Route::get('/roles',[RoleController::class,'index'])->name('roles.index');
    Route::get('/roles/create',[RoleController::class,'create'])->name('roles.create');
    Route::post('/roles/create',[RoleController::class,'store'])->name('roles.store');
});



Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login',[LoginController::class,'login'])->name('postlogin');
Route::post('/logout', [LoginController::class,'logout'])->name('logout');
