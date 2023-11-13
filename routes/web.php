<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\MyProfileController;
use App\Http\Controllers\PenanggungjawabController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\UserController;
use App\Models\Pengumuman;
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
        Route::get('/dashboard', 'index')->name('dashboard');
    });
    Route::controller(MyProfileController::class)->group(function () {
        Route::get('/myprofile/{user}', 'index')->name('myprofile.index');
        Route::put('/myprofile/update/{user}', 'update')->name('myprofile.update');
    });
    Route::resources([
        'user' => UserController::class,
    ]);
});

Route::resource('/pengumuman',PengumumanController::class);

Route::get('/', [GuestController::class, 'index'])->name('blog.index');

Route::get('/penanggung', [PenanggungjawabController::class, 'index'])->name('pj.index');
Route::get('/penanggung/create', [PenanggungjawabController::class, 'create'])->name('pj.create');
Route::post('/penanggung/create', [PenanggungjawabController::class, 'store'])->name('pj.store');
Route::get('/penanggung/edit/{id}', [PenanggungjawabController::class, 'edit'])->name('pj.edit');
Route::post('/penanggung/edit/{id}', [PenanggungjawabController::class, 'update'])->name('pj.update');
Route::delete('/penanggung/delete/{id}', [PenanggungjawabController::class, 'destroy'])->name('pj.destroy');

