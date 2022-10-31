<?php

use App\Http\Controllers\Categoria;
use App\Http\Controllers\Cliente;
use App\Http\Controllers\Pedido;
use App\Http\Controllers\Produto;
use App\Http\Controllers\Dashboard;
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

// views
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

// dashboard
Route::get('/dashboard', [Dashboard::class, 'index']);
Route::get('/getAllUsers', [Dashboard::class, 'getAllUsers']);
Route::get('/getAllPedidos', [Dashboard::class, 'getAllPedidos']);
Route::get('/getAllPedidosLastYear', [Dashboard::class, 'getAllPedidosLastYear']);
Route::get('/getAllPedidosLastMonth', [Dashboard::class, 'getAllPedidosLastMonth']);
Route::get('/getAllPedidosLastWeek', [Dashboard::class, 'getAllPedidosLastWeek']);
Route::get('/getAllPedidosLastDay', [Dashboard::class, 'getAllPedidosLastDay']);
Route::get('/getTop5SellingCategories', [Dashboard::class, 'getTop5SellingCategories']);
Route::get('/getTop5SellingProducts', [Dashboard::class, 'getTop5SellingProducts']);
Route::get('/getTop5SellingUsers', [Dashboard::class, 'getTop5SellingUsers']);


// gets
Route::get('/cliente/get', [Cliente::class, 'get'])->name('getClientes');
Route::get('/categoria/get', [Categoria::class, 'get']);
Route::get('/produto/get', [Produto::class, 'get']);
Route::get('/pedido/get', [Pedido::class, 'get']);
Route::get('/pedido/pdf', [Pedido::class, 'createPDF'])->name('createPDF');

// cadastros
Route::post('/cliente', [Cliente::class, 'store'])->name('store');

Route::post('/categoria', [Categoria::class, 'store'])->name('store');

Route::post('/produto', [Produto::class, 'store'])->name('store');

Route::post('/pedido', [Pedido::class, 'store'])->name('store');

Route::post('/produto/filter', [Produto::class, 'show'])->name('show');


// deletes
Route::get('/cliente/d/{id}', [Cliente::class, 'destroy'])->name('destroy');

Route::get('/categoria/d/{id}', [Categoria::class, 'destroy'])->name('destroy');

Route::get('/produto/d/{id}', [Produto::class, 'destroy'])->name('destroy');

Route::get('/pedido/d/{id}', [Pedido::class, 'destroy'])->name('destroy');


// updates
Route::put('/cliente/{id}', [Cliente::class, 'update'])->name('update');

Route::put('/categoria/{id}', [Categoria::class, 'update'])->name('update');

Route::put('/produto/{id}', [Produto::class, 'update'])->name('update');

Route::put('/pedido/{id}', [Pedido::class, 'update'])->name('update');

// resources
Route::resource('cliente', Cliente::class);

Route::resource('pedido', Pedido::class);

Route::resource('categoria', Categoria::class);

Route::resource('produto', Produto::class);
