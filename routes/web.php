<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BuildingController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\CoordinatorController;
use App\Http\Controllers\FingerprintController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentLeaveController;

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
Route::middleware(['auth'])->group(function () {

    Route::get('/', [HomeController::class,'index'])->name('home');

    Route::get('/fetchattendance', [FingerprintController::class,'fetchattendance'])->name('fetchattendance');
    Route::get('/fetchstudents', [FingerprintController::class,'fetchstudents'])->name('fetchstudents');
    Route::Get('/fetchfp', [FingerprintController::class,'fetchfp']);

    Route::get('/users', [UserController::class,'index'])->name('users.index');
    Route::get('/users/create', [UserController::class,'create'])->name('users.create');
    Route::post('/users/create', [UserController::class,'store'])->name('users.store');
    Route::get('/users/{userid}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::post('/users/{userid}/edit', [UserController::class, 'update'])->name('users.update');
    Route::get('/users/{userid}/addrole', [UserController::class,'addrole'])->name('users.addrole');
    Route::post('/users/{userid}/addrole', [UserController::class,'saverole'])->name('users.saverole');
    Route::get('/users/{userId}/role/{role}/revoke', [UserController::class,'revokeRole'])->name('users.revokerole');

    //Route::get('/users/getfingerprint',[UserController::class,'getfingerprint'])->name('users.getfingerprint');

    Route::get('/students', [StudentController::class,'index'])->name('student.list');
    Route::get('/students/addstudent', [StudentController::class,'create'])->name('student.add');
    Route::post('/students/addstudent', [StudentController::class,'store'])->name('student.store');
    Route::get('/students/roomassignment', [StudentController::class,'roomassignment'])->name('student.roomassignment');
    Route::post('/students/roomassignment', [StudentController::class,'saveroomassignment'])->name('student.saveroomassignment');
    Route::get('/students/roomassignment/{id}', [StudentController::class,'deleteroomassignment'])->name('student.deleteroomassignment');
    Route::get('/students/{id}/edit', [StudentController::class,'edit'])->name('student.edit');
    Route::post('/students/{id}/edit', [StudentController::class,'update'])->name('student.update');
    Route::get('/students/{student}/push', [StudentController::class,'push'])->name('student.push');
    Route::get('/students/{student}/deletefromdevice', [StudentController::class,'deletefromdevice'])->name('student.deletefromdevice');
    Route::get('/students/{student}/pushtodevice', [StudentController::class,'push_student_to_device'])->name('student.pushtodevice');
    Route::post('/students/{student}/pushtodevice', [StudentController::class,'post_push_student_to_device'])->name('student.postpushtodevice');

    Route::get('/students/upload', [StudentController::class, 'upload'])->name('students.upload');
    Route::post('/students/saveupload', [StudentController::class, 'saveupload'])->name('students.saveupload');
    Route::get('/students/uploadroomassignment', [StudentController::class,'uploadroomassignment'])->name('student.uploadroomassignment');
    Route::post('/students/uploadroomassignment', [StudentController::class,'saveuploadroomassignment'])->name('student.saveuploadroomassignment');



    Route::get('/students/allattendance', [StudentController::class,'allattendance'])->name('attendance.all');
    Route::get('/students/updateattendance', [StudentController::class,'updateattendance'])->name('attendance.update');

    Route::get('/devices', [DeviceController::class,'index'])->name('devices.index');
    Route::get('/devices/create', [DeviceController::class,'create'])->name('devices.create');
    Route::post('/devices/create', [DeviceController::class,'store'])->name('devices.store');
    Route::get('/devices/{device}/edit', [DeviceController::class,'edit'])->name('devices.edit');
    Route::post('/devices/{device}/edit', [DeviceController::class,'update'])->name('devices.update');
    Route::get('/devices/{device}/delete', [DeviceController::class,'delete'])->name('devices.delete');
    Route::get('/devices/{id}/fetch', [DeviceController::class,'fetch'])->name('devices.fetch');
    Route::get('/devices/{id}/push', [DeviceController::class,'push'])->name('devices.push');
    Route::get('/devices/reset', [DeviceController::class,'resetdevice'])->name('devices.reset');

    Route::resources(['departments' => DepartmentController::class]);

    Route::resources(['buildings' => BuildingController::class]);

    /** Temporary coordinator might be deleted */
    Route::get('/coordinator/{id}/delete', [CoordinatorController::class,'delete'])->name('coordinator.delete');
    //Route::get('/coordinators/{id}/delete', [CoordinatorController::class,'delete'])->name('coordinators.delete');
    Route::get('/coordinators/assign/{buildings}', [CoordinatorController::class,'assign'])->name('coordinators.assign');
    Route::post('/coordinators/assign/{buildings}', [CoordinatorController::class,'saveassign'])->name('coordinators.saveassign');

    Route::get('/roles', [RoleController::class,'index'])->name('roles.index');
    Route::get('/roles/create', [RoleController::class,'create'])->name('roles.create');
    Route::post('/roles/create', [RoleController::class,'store'])->name('roles.store');

    Route::get('/report/schedule', [ReportController::class,'schedule'])->name('report.schedule');
    Route::post('/report/schedule', [ReportController::class,'saveschedule'])->name('report.saveschedule');
    Route::get('/report/inout', [ReportController::class,'inout'])->name('report.inout');
    Route::post('/report/inout', [ReportController::class,'postinout'])->name('report.postinout');

    Route::get('/reporttest', [ReportController::class,'reporttest'])->name('reportest');

    Route::get('/studentleave', [StudentLeaveController::class,'index'])->name('studentleave.index');
    Route::get('/studentleave/create', [StudentLeaveController::class,'create'])->name('studentleave.create');
    Route::post('/studentleave/create', [StudentLeaveController::class,'store'])->name('studentleave.store');
    Route::get('/studentleave/{id}/return', [StudentLeaveController::class,'return'])->name('studentleave.return');
    Route::post('/studentleave/{id}/return', [StudentLeaveController::class,'storereturn'])->name('studentleave.storereturn');

    Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index');
    Route::get('/rooms/create', [RoomController::class, 'create'])->name('rooms.create');
    Route::post('/rooms/create', [RoomController::class,'store'])->name('rooms.store');
    Route::get('/rooms/{id}/edit', [RoomController::class, 'edit'])->name('rooms.edit');
    Route::post('/rooms/{id}/edit', [RoomController::class,'update'])->name('rooms.update');
    Route::get('/rooms/{id}/delete', [RoomController::class,'delete'])->name('rooms.delete');

    Route::get('/profile/show', [ProfileController::class,'show'])->name('profile.show');
    Route::post('/profile/show', [ProfileController::class,'update'])->name('profile.update');

});



Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [LoginController::class,'login'])->name('postlogin');
Route::post('/logout', [LoginController::class,'logout'])->name('logout');
