<?php

use App\Http\Controllers\Categoria;
use App\Http\Controllers\Cliente;
use App\Http\Controllers\Pedido;
use App\Http\Controllers\Produto;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/cliente', function () {
    return view('cliente');
});

Route::get('/categoria', function () {
    return view('categoria');
});

Route::get('/produto', function () {
    return view('produto');
});

Route::get('/pedido', function () {
    return view('pedido');
});

Route::get('/admin', function () {
    return view('admin');
});


Route::resource('/cliente', Cliente::class);

Route::resource('/pedido', Pedido::class);

Route::resource('/categoria', Categoria::class);

Route::resource('/produto', Produto::class);
