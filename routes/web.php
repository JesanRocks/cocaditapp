<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\ContribuyenteAuthController;
use App\Http\Controllers\Auth\ContribuyenteRegisterController;
use App\Http\Controllers\Auth\FuncionarioAuthController;
use App\Http\Controllers\Auth\FuncionarioRegisterController;

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

Route::get('/', function () {
    return view('home');
});

// Route::get('/welcome', function () {
//     return view('welcome');
// })->middleware('auth');


Route::prefix('contribuyente')->group(function () {
    Route::get('register', [ContribuyenteRegisterController::class, 'showRegistrationForm'])->name('contribuyente.register.form');
    Route::post('register', [ContribuyenteRegisterController::class, 'register'])->name('contribuyente.register');
    Route::get('/', [ContribuyenteAuthController::class, 'showLoginForm'])->name('contribuyente.login.form');
    Route::post('login', [ContribuyenteAuthController::class, 'login'])->name('contribuyente.login');
    Route::post('logout', [ContribuyenteAuthController::class, 'logout'])->name('contribuyente.logout');
    Route::get('dashboard', function () {
        return view('contribuyente.dashboard');
    })->middleware('auth')->name('contribuyente.dashboard');
});



Route::prefix('funcionario')->group(function () {
    Route::get('register', [FuncionarioRegisterController::class, 'showRegistrationForm'])->name('funcionario.register.form');
    Route::post('register', [FuncionarioRegisterController::class, 'register'])->name('funcionario.register');
    Route::get('/', [FuncionarioAuthController::class, 'showLoginForm'])->name('funcionario.login.form');
    Route::post('login', [FuncionarioAuthController::class, 'login'])->name('funcionario.login');
    Route::post('logout', [FuncionarioAuthController::class, 'logout'])->name('funcionario.logout');
    Route::get('dashboard', function () {
        return view('funcionario.dashboard');
    })->middleware('auth:funcionario')->name('funcionario.dashboard');
});
