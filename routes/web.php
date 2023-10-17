<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\HomeController;
use App\Http\Controllers\EmployeeInfoController;

Route::get('/employees', [EmployeeController::class, 'index']);
Route::get('/employees/{id}', [EmployeeController::class, 'show']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::post('/employee-info/process-form', [EmployeeInfoController::class, 'processForm'])->name('employee.info.processForm');

Route::middleware('auth')->group(function () {
    Route::get('/employee-info', [EmployeeInfoController::class, 'index'])->name('employee.info');
    Route::get('/employee-info/edit', [EmployeeInfoController::class, 'edit'])->name('employee.info.edit');
    Route::put('/employee-info/update', [EmployeeInfoController::class, 'update'])->name('employee.info.update');
});
