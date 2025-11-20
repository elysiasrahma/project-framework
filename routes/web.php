<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\SalariesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::resource('employees', EmployeeController::class);
Route::resource('departments', DepartmentController::class);
Route::resource('attendances', AttendanceController::class);
Route::resource('positions', PositionController::class);
Route::resource('salaries', SalariesController::class);
Route::get('/', function() {
    return view('welcome');
}); 
// Route::get('/', [EmployeeController::class, 'index'])->name('home');
Route::get('/employees/{id}', [EmployeeController::class, 'show'])->name('employees.show');
Route::put('/employees/{id}', [EmployeeController::class, 'update'])->name('employees.update');

Route::get('/register', [UserController::class, 'showRegisterForm'])->name('users.register');
Route::post('/register', [UserController::class, 'register'])->name('users.register.submit');

Route::get('/login', [UserController::class, 'showLoginForm'])->name('users.login');
Route::post('/login', [UserController::class, 'login'])->name('users.login.submit');

// Route::get('/', function () {
//     return view('welcome');
// });

use SweetAlert2\Laravel\Swal;

Route::get('/test-swal', function () {
    Swal::success([
        'title' => 'Berhasil!',
        'text' => 'SweetAlert2 sudah jalan!',
    ]);

    return view('users.login');
});
