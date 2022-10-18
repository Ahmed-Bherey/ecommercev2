<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Admin\MainDePartmentController;
use App\Http\Controllers\Admin\subDepartmentController;
use App\Http\Controllers\Admin\ProductController;


// تسجيل دخول
Route::prefix('admin')->group(function(){
    Route::get('/login' , [AdminLoginController::class, 'loginForm'])->name('admin.login.form');
    Route::post('/store' , [AdminLoginController::class, 'login'])->name('admin.login');
    Route::get('/logout' , [AdminLoginController::class, 'logout'])->name('admin.logout');
});

// تسجيل خروج
Route::middleware('authAdmin')->group(function(){
    Route::get('/admin' , [DashboardController::class, 'index'])->name('dashboard');
    // المستخدمين
    Route::get('users' , [UserController::class, 'index'])->name('user.index');
    Route::get('users/{id}' , [UserController::class, 'edit'])->name('user.edit');
    Route::post('users/{id}' , [UserController::class, 'update'])->name('user.update');
    Route::get('users/destroy/{id}' , [UserController::class, 'destroy'])->name('user.destroy');
    Route::get('blockList/users' , [UserController::class, 'blockList'])->name('user.list');


    Route::group(['prefix' => 'mainDepartments/','as'=>'mainDepartments.'], function () {
        Route::get('create', [MainDePartmentController::class, 'create'])->name('create');
        Route::post('store', [MainDePartmentController::class, 'store'])->name('store');
        Route::get('edit/{id}', [MainDePartmentController::class, 'edit'])->name('edit');
        Route::post('update/{id}', [MainDePartmentController::class, 'update'])->name('update');
        Route::get('delete/{id}', [MainDePartmentController::class, 'delete'])->name('delete');
    });

    Route::group(['prefix' => 'subDepartments/','as'=>'subDepartments.'], function () {
        Route::get('create', [subDepartmentController::class, 'create'])->name('create');
        Route::post('store', [subDepartmentController::class, 'store'])->name('store');
        Route::get('edit/{id}', [subDepartmentController::class, 'edit'])->name('edit');
        Route::post('update/{id}', [subDepartmentController::class, 'update'])->name('update');
        Route::get('delete/{id}', [subDepartmentController::class, 'delete'])->name('delete');
    });
    Route::group(['prefix' => 'products/','as'=>'products.'], function () {
        Route::get('create', [ProductController::class, 'create'])->name('create');
        Route::post('store', [ProductController::class, 'store'])->name('store');
        Route::get('edit/{id}', [ProductController::class, 'edit'])->name('edit');
        Route::post('update/{id}', [ProductController::class, 'update'])->name('update');
        Route::get('delete/{id}', [ProductController::class, 'delete'])->name('delete');
        Route::get('mainDepartment/subDepartment/ajax/{id}', [ProductController::class, 'ajax'])->name('mainDepartment.subDepartment.ajax');
    });
});
