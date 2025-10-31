<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\SalariesController;
use Illuminate\Support\Facades\Route;


Route::resource('employees', EmployeeController::class);
Route::resource('departments', DepartmentController::class);
Route::resource('attendances', AttendanceController::class);
Route::resource('positions', PositionController::class);
Route::resource('salaries', SalariesController::class);
Route::get('/', [EmployeeController::class, 'index'])->name('home');
Route::get('/employees/{id}', [EmployeeController::class, 'show'])->name('employees.show');
Route::put('/employees/{id}', [EmployeeController::class, 'update'])->name('employees.update');


// Route::get('/', function () {
//     return view('welcome');
// });