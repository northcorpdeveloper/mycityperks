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
/*
Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::Post('/getproductData', [App\Http\Controllers\HomeController::class, 'getData'])->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');





// user
Route::middleware(['auth', 'user'])->as('user.')->prefix('user')->group(function () {
    Route::get('dashboard', [App\Http\Controllers\User\DashboardController::class, 'index'])->name('dashboard');		
});






// customer 
Route::middleware(['auth', 'customer'])->as('customer.')->prefix('customer')->group(function () {
    Route::get('dashboard', [App\Http\Controllers\Customer\DashboardController::class, 'index'])->name('dashboard');	
    Route::get('myaccount', [App\Http\Controllers\Customer\MyaccountController::class, 'index'])->name('myaccount');
    Route::get('addproduct', [App\Http\Controllers\Customer\ProductController::class, 'addproduct'])->name('addproduct');
    Route::post('create', [App\Http\Controllers\Customer\ProductController::class, 'create'])->name('create');
    Route::get('list', [App\Http\Controllers\Customer\ProductController::class, 'index'])->name('list');
    Route::Post('getproductList', [App\Http\Controllers\HomeController::class, 'getProductData'])->name('list');
    
});
