<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\SalariesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ShiftController;
use SweetAlert2\Laravel\Swal;
use Illuminate\Support\Facades\Auth;

/*
|-------------------------
| Resource Routes (CRUD)
|------------------------
*/
Route::resource('employees', EmployeeController::class);
Route::resource('departments', DepartmentController::class);
Route::resource('attendances', AttendanceController::class);
Route::resource('positions', PositionController::class);
Route::resource('salaries', SalariesController::class);
Route::resource('shifts', ShiftController::class); 

/*
|---------------------------------------
| Auth Routes (Login, Register, Logout)
|---------------------------------------
*/
// Register
Route::get('/register', [UserController::class, 'showRegisterForm'])->name('users.register');
Route::post('/register', [UserController::class, 'register'])->name('users.register.submit');

// Login
Route::get('/login', [UserController::class, 'showLoginForm'])->name('users.login');
Route::post('/login', [UserController::class, 'login'])->name('users.login.submit');

// Logout
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

/*
|----------------
| Custom Routes
|----------------
*/
// Welcome page
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Optional: if you want to override specific employee routes
Route::get('/employees/{id}', [EmployeeController::class, 'show'])->name('employees.show');
Route::put('/employees/{id}', [EmployeeController::class, 'update'])->name('employees.update');

/*
|-------------------------
| Testing / Debug Routes
|-------------------------
*/
Route::get('/test-swal', function () {
    Swal::success([
        'title' => 'Berhasil!',
        'text' => 'SweetAlert2 sudah jalan!',
    ]);

    return view('users.login');
});