<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;


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
    return view('layouts.index');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/employees', [App\Http\Controllers\EmployeeController::class, 'index']);


Route::get('/admin/employees/create', [EmployeeController::class, 'create'])->name('admin.employees.create');
Route::post('/admin/employees/create', [EmployeeController::class, 'store'])->name('admin.employees.store');
Route::get('editemployee/{id}',[EmployeeController::class,'edit']);
Route::put('updateemployee/{id}',[EmployeeController::class,'update']);
Route::get('deleteemployee/{id}', [EmployeeController::class, 'destroy']);


