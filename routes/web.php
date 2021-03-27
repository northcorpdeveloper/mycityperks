<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::Post('/getproductData', [App\Http\Controllers\HomeController::class, 'getData'])->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');



// user
Route::middleware(['auth', 'user'])->as('user.')->prefix('user')->group(function () {
    Route::get('dashboard', [App\Http\Controllers\User\DashboardController::class, 'index'])->name('dashboard');		
});



// user
Route::middleware(['auth', 'customer'])->as('customer.')->prefix('customer')->group(function () {
    Route::get('dashboard', [App\Http\Controllers\Customer\DashboardController::class, 'index'])->name('dashboard');		
});
