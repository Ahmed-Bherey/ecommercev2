<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\IndexController;
use App\Http\Controllers\Auth\UserLoginController;
use App\Http\Controllers\Auth\UserRegisterController;

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
// الصفحة الرئيسية
Route::get('/', [IndexController::class, 'index'])->name('home');

// انشاء حساب
Route::get('register', [UserRegisterController::class, 'registerForm'])->name('register.form');
Route::post('register', [UserRegisterController::class, 'register'])->name('register');
Route::get('user/confirmNumber/{id}', [UserRegisterController::class, 'confirmNumberIndex'])->name('user.confirmNumberIndex');
Route::post('confirmNumber/{id?}', [UserRegisterController::class, 'confirmNumberupdate'])->name('user.confirmNumberupdate');
// تسجيل دخول
Route::prefix('user')->group(function () {
    Route::get('/login', [UserLoginController::class, 'loginForm'])->name('user.login');
    Route::post('/login', [UserLoginController::class, 'login'])->name('user.login.store');
});
// تسجيل خروج
Route::get('logout', [UserLoginController::class, 'logout'])->name('logout');



/////pages
Route::get('products', [IndexController::class, 'products'])->name('products');
Route::get('single/Product/{id}', [IndexController::class, 'singleProducts'])->name('singleProducts');
Route::get('contactUs', [IndexController::class, 'contactUs'])->name('contactUs');
Route::get('about', [IndexController::class, 'about'])->name('about');
