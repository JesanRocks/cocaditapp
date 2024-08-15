<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\ContribuyenteAuthController;
use App\Http\Controllers\Auth\ContribuyenteRegisterController;
use App\Http\Controllers\Auth\FuncionarioAuthController;
use App\Http\Controllers\Auth\FuncionarioRegisterController;
use App\Http\Controllers\PagoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí puedes registrar las rutas web para tu aplicación. Estas
| rutas se cargan a través de RouteServiceProvider y se les asigna
| al grupo de middleware "web".
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/pago', function () {
     return view('welcome');
});

Route::prefix('contribuyente')->group(function () {
    Route::middleware(['redirect_if_authenticated_contribuyente'])->group(function () {
        Route::get('register', [ContribuyenteRegisterController::class, 'showRegistrationForm'])->name('contribuyente.register.form');
        Route::post('register', [ContribuyenteRegisterController::class, 'register'])->name('contribuyente.register');
        Route::get('/', [ContribuyenteAuthController::class, 'showLoginForm'])->name('contribuyente.login.form');
        Route::post('login', [ContribuyenteAuthController::class, 'login'])->name('contribuyente.login');
    });

    Route::post('logout', [ContribuyenteAuthController::class, 'logout'])->name('contribuyente.logout');
    
    Route::middleware(['auth:contribuyente'])->group(function () {
        Route::get('dashboard', [ContribuyenteAuthController::class, 'dashboard'])->name('contribuyente.dashboard');

        Route::get('/pagos', [PagoController::class, 'index'])->name('pagos.index');
        Route::get('/pagos/create', [PagoController::class, 'create'])->name('pagos.create');
        Route::post('/pagos', [PagoController::class, 'store'])->name('pagos.store');
        Route::get('/pagos/{pago}', [PagoController::class, 'show'])->name('pagos.show');
    });
});

Route::prefix('funcionario')->group(function () {
    Route::middleware(['redirect_if_authenticated_funcionario'])->group(function () {
        Route::get('/', [FuncionarioAuthController::class, 'showLoginForm'])->name('funcionario.login.form');
        Route::post('login', [FuncionarioAuthController::class, 'login'])->name('funcionario.login');
    });

    Route::post('logout', [FuncionarioAuthController::class, 'logout'])->name('funcionario.logout');
    
    Route::middleware(['auth:funcionario'])->group(function () {
        Route::get('dashboard', [FuncionarioAuthController::class, 'dashboard'])->name('funcionario.dashboard');
        Route::get('register', [FuncionarioRegisterController::class, 'showRegistrationForm'])->name('funcionario.register.form');
        Route::post('register', [FuncionarioRegisterController::class, 'register'])->name('funcionario.register');
    });
});
