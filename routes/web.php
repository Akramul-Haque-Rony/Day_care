<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BabyController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});
Route::get('duplicate', [App\Http\Controllers\HomeController::class, 'duplicate'])->name('duplicate');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/employees', [App\Http\Controllers\HomeController::class, 'employees'])->name('employees');
Route::get('/charts', [App\Http\Controllers\HomeController::class, 'chart'])->name('charts');
Route::get('/package', [App\Http\Controllers\HomeController::class, 'package'])->name('package');
Route::get('/notifications', [App\Http\Controllers\HomeController::class, 'notification'])->name('notifications');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
Route::get('/payments', [App\Http\Controllers\HomeController::class, 'payments'])->name('payments');
Route::get('/typography', [App\Http\Controllers\HomeController::class, 'typography'])->name('typography');

Route::get('baby', [App\Http\Controllers\BabyController::class, 'index'])->name('baby.index');
Route::get('baby/create', [App\Http\Controllers\BabyController::class, 'create'])->name('baby.create');
Route::post('baby/store', [App\Http\Controllers\BabyController::class, 'store'])->name('baby.store');
Route::get('baby/edit/{id}', [App\Http\Controllers\BabyController::class, 'edit'])->name('baby.edit');
Route::post('baby/update/{id}',[App\Http\Controllers\BabyController::class, 'update'])->name('baby.update');
Route::post('baby/destroy', [App\Http\Controllers\BabyController::class, 'destroy'])->name('baby.destroy');
Route::get('baby/show', [App\Http\Controllers\BabyController::class, 'show'])->name('baby.show');

Route::get('employee', [App\Http\Controllers\EmployeeController::class, 'index'])->name('employee.index');
Route::get('employee/create', [App\Http\Controllers\EmployeeController::class, 'create'])->name('employee.create');
Route::post('employee/store', [App\Http\Controllers\EmployeeController::class, 'store'])->name('employee.store');
Route::get('employee/edit/{id}', [App\Http\Controllers\EmployeeController::class, 'edit'])->name('employee.edit');
Route::post('employee/update/{id}',[App\Http\Controllers\EmployeeController::class, 'update'])->name('employee.update');
Route::post('employee/destroy', [App\Http\Controllers\EmployeeController::class, 'destroy'])->name('employee.destroy');

// Route::get("index", 'index');

