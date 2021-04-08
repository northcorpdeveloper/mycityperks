<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GoogleController;

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



Route::get('auth/google', '\App\Http\Controllers\Auth\GoogleController@redirectToGoogle');
    Route::get('auth/google/callback', '\App\Http\Controllers\Auth\GoogleController@handleGoogleCallback');
    
// Admin
    Route::middleware(['auth', 'admin'])->as('admin.')->prefix('admin')->group(function () {
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::get('user-list', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('user-list');
});


// user
Route::middleware(['auth', 'user'])->as('user.')->prefix('user')->group(function () {
    Route::get('dashboard', [App\Http\Controllers\User\DashboardController::class, 'index'])->name('dashboard');		
});



// customer 
Route::middleware(['auth', 'customer'])->as('customer.')->prefix('customer')->group(function () {
    
    Route::get('dashboard', [App\Http\Controllers\Customer\DashboardController::class, 'index'])->name('dashboard');	
    Route::get('myaccount', [App\Http\Controllers\Customer\MyaccountController::class, 'index'])->name('myaccount');
    Route::post('myaccount/save', [App\Http\Controllers\Customer\MyaccountController::class, 'saveMyAccountData'])->name('savemyaccount');
    Route::post('change-password', [App\Http\Controllers\Customer\MyaccountController::class, 'updatePassword'])->name('change-password');
    
    Route::post('change-mobile', [App\Http\Controllers\Customer\MyaccountController::class, 'updateMobile'])->name('change-mobile');
    
    
    Route::post('getStateData', [App\Http\Controllers\Customer\MyaccountController::class, 'getStateData'])->name('getStateData');
    
    Route::post('phone-varification', [App\Http\Controllers\Customer\MyaccountController::class, 'phoneVarification'])->name('phone-varification');
    
    Route::post('sendotp', [App\Http\Controllers\Customer\MyaccountController::class, 'sendSms'])->name('sendotp');
    
    /* customer product section Start */
    
    Route::get('addproduct', [App\Http\Controllers\Customer\ProductController::class, 'addproduct'])->name('addproduct');
    Route::post('create', [App\Http\Controllers\Customer\ProductController::class, 'create'])->name('create');
    Route::get('list', [App\Http\Controllers\Customer\ProductController::class, 'index'])->name('list');
    Route::Post('getproductList', [App\Http\Controllers\Customer\ProductController::class, 'getProductData'])->name('list');
    Route::get('edit', [App\Http\Controllers\Customer\ProductController::class, 'editproduct_by_id'])->name('editproduct_by_id');
    Route::post('editProduct', [App\Http\Controllers\Customer\ProductController::class, 'editProduct'])->name('editProduct');
    Route::post('deleteProduct', [App\Http\Controllers\Customer\ProductController::class, 'deleteProduct'])->name('list');
    
    /*customer product section end*/
    
    /* customer Order section start */
    Route::get('order-list', [App\Http\Controllers\Customer\OrderController::class, 'index'])->name('order-list');
    
    /* customer Order section end */ 
    
    
    /* customer Order section start */
    Route::get('transactions', [App\Http\Controllers\Customer\TransactionController::class, 'index'])->name('transactions');
    
    /* customer Order section end */ 
    
    
    /* customer Order section start */
    Route::get('deposit', [App\Http\Controllers\Customer\DepositController::class, 'index'])->name('deposit');
    Route::post('charge', [App\Http\Controllers\Customer\DepositController::class, 'charge'])->name('charge');
    /* customer Order section end */
    
    /* customer Order section start */
    Route::get('withdraw', [App\Http\Controllers\Customer\WithdrawController::class, 'index'])->name('withdraw');
    Route::get('withdrawal', [App\Http\Controllers\Customer\WithdrawController::class, 'withdrawal'])->name('withdrawal');
    Route::post('save-widhdrawal', [App\Http\Controllers\Customer\WithdrawController::class, 'save_widhdrawal'])->name('save-widhdrawal');
    /* customer Order section end */
    
    /* customer Subscription section start */
        Route::get('subscription-list', [App\Http\Controllers\Customer\SubscriptionController::class, 'index'])->name('subscription-list');
        Route::Post('getproductList', [App\Http\Controllers\Customer\SubscriptionController::class, 'getProductData'])->name('list');
    /* customer Subscription section start */
    
    
    



    
});
