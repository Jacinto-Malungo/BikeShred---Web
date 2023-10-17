<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EstacaoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DocaController;
use App\Http\Controllers\BicletaController;
use App\Http\Controllers\AluguelController;
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

Route::get('/', [SiteController::class, 'index'])->name('site.home');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/access', [UserController::class, 'access'])->name('admin.login');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/createUser', [UserController::class,'create'])->name('user.createUser');
Route::post('/loginUser', [UserController::class,'logar'])->name('user.login');


//--------------------------------------------------------------------------------------
Route::middleware(['auth', 'checkRole: 0'])->group(function () {




    Route::get('/admin/dashboard/login', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/dashboard/estacao', [EstacaoController::class, 'index'])->name('estacao');

    // ADMIN ESTAÇÃO

    Route::get('/addEstacao', [EstacaoController::class,'add'])->name('admin.addEstacao');
    Route::post('/createEstacao', [EstacaoController::class,'create'])->name('admin.createEstacao');
    Route::delete('/destroyestacao/{id}', [EstacaoController::class,'destroy'])->name('destroyEstacao');

    // FIM ADMIN ESTAÇÃO

    // ADMIN USER

    Route::get('/admin/dashboard/user', [UserController::class, 'index'])->name('user');
    Route::delete('/destroyUser/{id}', [UserController::class,'destroy'])->name('destroyUser');

    // FIM ADMIN USER

    // ADMIN DOCA

    Route::get('/admin/dashboard/doca', [DocaController::class, 'index'])->name('doca');
    Route::get('/admin/dashboard/indexUpdateDoca/{id}', [DocaController::class, 'indexUpdateDoca'])->name('indexUpdateDoca');
    Route::put('/updateDoca/{id}', [DocaController::class,'update'])->name('updateDoca');
    Route::delete('/destroyDoca/{id}', [DocaController::class,'destroy'])->name('destroyDoca');

    // FIM ADMIN DOCA

    // ADMIN BICICLETA

    Route::get('/admin/dashboard/bicicleta', [BicletaController::class, 'index'])->name('bicicleta');
    Route::post('/createBicicleta', [BicletaController::class,'create'])->name('admin.createBicicleta');
    Route::delete('/destroyBicicleta/{id}', [BicletaController::class,'destroy'])->name('destroyBicicleta');
    // FIM ADMIN BICICLETA

});

Route::middleware(['auth', 'checkRole:1'])->group(function () {
    Route::get('/cliente/home', [ClienteController::class, 'index'])->name('cliente.home');
    Route::get('/cliente/aluguelUser', [ClienteController::class, 'aluguelUser'])->name('aluguelUser');
    Route::get('/cliente/mapa', [EstacaoController::class, 'mapa'])->name('mapa');
});



// ADMIN ALUGUEL
Route::get('/admin/dashboard/aluguel', [AluguelController::class, 'index'])->name('aluguel')->middleware('auth', 'checkRole:0');


// FIM ADMIN ALUGUEL
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
