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

Route::get('/', function () {
    return view('home');
});

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::get('/pedido', function () {
    return view('pedido');
});

Route::get('/cardapio', 'App\Http\Controllers\NorteController@index');
Route::post('/salvo', 'App\Http\Controllers\NorteController@guardar');
Route::post('/salvoP', 'App\Http\Controllers\NorteController@guardarP');
