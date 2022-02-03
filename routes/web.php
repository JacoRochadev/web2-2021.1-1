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

//user
Route::get('/',[\App\Http\Controllers\UserController::class, 'login'])->name('login.page');
Route::post('/auth',[\App\Http\Controllers\UserController::class, 'auth'])->name('auth.user');

//cliente
Route::get('/cliente',[\App\Http\Controllers\ClienteController::class, 'show'])->name('cliente.page');

// novo dashboard
// Route::get('/compra',[\App\Http\Controllers\CompraController::class, 'create'])->name('compra.page');
Route::get('/dashboard', function () {
    return view('dashboard');
});

//nova compra
Route::get('/compra', function () {
    return view('compra/compra');
});

//NOVA VENDA
Route::get('/venda',[\App\Http\Controllers\VendaController::class, 'create'])->name('venda.page');
Route::get('/cadastrarVenda',[\App\Http\Controllers\VendaController::class, 'cadastrarVenda'])->name('venda.cadastrarVenda');
Route::post('/venda',[\App\Http\Controllers\VendaController::class, 'store'])->name('venda.vendido');
// Route::get('/venda', function () {
//     return view('venda/venda');
// });

