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

// rota pelo controller
// Route::get('/',[\App\Http\NomeControler::class, 'metodo'])

Route::get('/login',[\App\Http\Controllers\LoginController::class, 'login']);

// novo login
Route::get('/', function () {
    return view('newLogin');
});

// novo dashboard
Route::get('/dashboard', function () {
    return view('teste');
});

//nova compra
Route::get('/compra', function () {
    return view('compra/newCompra');
});

//NOVA VENDA
Route::get('/venda', function () {
    return view('venda/newVenda');
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

// Route::get('/compra', function () {
//     return view('compra/compra');
// });

// Route::get('/venda', function () {
//     return view('venda/venda');
// });




