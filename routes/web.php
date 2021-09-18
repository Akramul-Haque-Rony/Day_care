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

//web & side route
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/employees', [App\Http\Controllers\HomeController::class, 'employees'])->name('employees');
Route::get('/charts', [App\Http\Controllers\HomeController::class, 'chart'])->name('charts');
Route::get('/package', [App\Http\Controllers\HomeController::class, 'package'])->name('package');
Route::get('/notifications', [App\Http\Controllers\HomeController::class, 'notification'])->name('notifications');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
Route::get('/payments', [App\Http\Controllers\HomeController::class, 'payments'])->name('payments');
Route::get('/typography', [App\Http\Controllers\HomeController::class, 'typography'])->name('typography');

//baby route
Route::get('baby', [App\Http\Controllers\BabyController::class, 'index'])->name('baby.index');
Route::get('baby/create', [App\Http\Controllers\BabyController::class, 'create'])->name('baby.create');
Route::post('baby/store', [App\Http\Controllers\BabyController::class, 'store'])->name('baby.store');
Route::get('baby/edit/{id}', [App\Http\Controllers\BabyController::class, 'edit'])->name('baby.edit');
Route::post('baby/update/{id}',[App\Http\Controllers\BabyController::class, 'update'])->name('baby.update');
Route::post('baby/destroy', [App\Http\Controllers\BabyController::class, 'destroy'])->name('baby.destroy');
Route::get('baby/show', [App\Http\Controllers\BabyController::class, 'show'])->name('baby.show');

//Employee route
Route::get('employee', [App\Http\Controllers\EmployeeController::class, 'index'])->name('employee.index');
Route::get('employee/login', [App\Http\Controllers\EmployeeLoginController::class, 'index'])->name('employee.index');
Route::post('employee/login', [App\Http\Controllers\EmployeeLoginController::class, 'login'])->name('employee.login');
Route::get('employee/create', [App\Http\Controllers\EmployeeController::class, 'create'])->name('employee.create');
Route::post('employee/store', [App\Http\Controllers\EmployeeController::class, 'store'])->name('employee.store');
Route::get('employee/edit/{id}', [App\Http\Controllers\EmployeeController::class, 'edit'])->name('employee.edit');
Route::post('employee/update/{id}',[App\Http\Controllers\EmployeeController::class, 'update'])->name('employee.update');
Route::post('employee/destroy', [App\Http\Controllers\EmployeeController::class, 'destroy'])->name('employee.destroy');

// Package route
Route::get('package', [App\Http\Controllers\PackageController::class, 'index'])->name('package.index');
Route::get('package/create', [App\Http\Controllers\PackageController::class, 'create'])->name('package.create');
Route::post('package/store', [App\Http\Controllers\PackageController::class, 'store'])->name('package.store');
Route::get('package/edit/{id}', [App\Http\Controllers\PackageController::class, 'edit'])->name('package.edit');
Route::post('package/update/{id}',[App\Http\Controllers\PackageController::class, 'update'])->name('package.update');
Route::post('package/destroy', [App\Http\Controllers\PackageController::class, 'destroy'])->name('package.destroy');

//Package price route
Route::get('packageprice', [App\Http\Controllers\PackagepriceController::class, 'index'])->name('packageprice.index');
Route::get('packageprice/create', [App\Http\Controllers\PackagepriceController::class, 'create'])->name('packageprice.create');
Route::post('packageprice/store', [App\Http\Controllers\PackagepriceController::class, 'store'])->name('packageprice.store');
Route::get('packageprice/edit/{id}', [App\Http\Controllers\PackagepriceController::class, 'edit'])->name('packageprice.edit');
Route::post('packageprice/update/{id}',[App\Http\Controllers\PackagepriceController::class, 'update'])->name('packageprice.update');
Route::post('packageprice/destroy', [App\Http\Controllers\PackagepriceController::class, 'destroy'])->name('packageprice.destroy');

//Payment route
Route::get('payment', [App\Http\Controllers\PaymentController::class, 'index'])->name('payment.index');
Route::get('payment/create', [App\Http\Controllers\PaymentController::class, 'create'])->name('payment.create');
Route::post('payment/store', [App\Http\Controllers\PaymentController::class, 'store'])->name('payment.store');
// Route::get('packageprice/create', [App\Http\Controllers\PackagepriceController::class, 'create'])->name('packageprice.create');
// Route::post('packageprice/store', [App\Http\Controllers\PackagepriceController::class, 'store'])->name('packageprice.store');
// Route::get('packageprice/edit/{id}', [App\Http\Controllers\PackagepriceController::class, 'edit'])->name('packageprice.edit');
// Route::post('packageprice/update/{id}',[App\Http\Controllers\PackagepriceController::class, 'update'])->name('packageprice.update');
// Route::post('packageprice/destroy', [App\Http\Controllers\PackagepriceController::class, 'destroy'])->name('packageprice.destroy');