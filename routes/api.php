<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cliente;
use App\Http\Controllers\Categoria;
use App\Http\Controllers\Pedido;
use App\Http\Controllers\Produto;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// cadastros
Route::post('/cliente', [Cliente::class, 'store'])->name('store');

Route::post('/categoria', [Categoria::class, 'store'])->name('store');

Route::post('/produto', [Produto::class, 'store'])->name('store');

Route::post('/pedido', [Pedido::class, 'store'])->name('store');
