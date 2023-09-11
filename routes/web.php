<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MyProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(AuthController::class)->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('/login', 'login')->name('login');
        Route::post('/login', 'authenticate')->name('authenticate');
        Route::get('/register', 'register')->name('register');
        Route::post('/register', 'createRegister')->name('createRegister');
    });
    Route::get('/logout', 'logout')->name('logout')->middleware('auth');
});

Route::middleware('auth')->group(function() {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/', 'index')->name('dashboard');    
    });
    Route::controller(MyProfileController::class)->group(function () {
        Route::get('/myprofile/{user}', 'index')->name('myprofile.index');    
        Route::put('/myprofile/update/{user}', 'update')->name('myprofile.update');    
    });
    Route::resources([
        'user' => UserController::class,
    ]);
});
