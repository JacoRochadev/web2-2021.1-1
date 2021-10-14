<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClenteController;
use App\Http\Controllers\FornecedorController;


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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index',[ClenteController::class, 'index']);
Route::get('/create',[ClenteController::class, 'create']);
Route::post('/store',[ClenteController::class, 'store']);

Route::get('/clientes',[ClenteController::class, 'show']);

Route::get('/index', [FornecedorController::class, 'index']);
Route::get('/create',[FornecedorController::class, 'create']);
Route::post('/store',[FornecedorController::class, 'store']);


