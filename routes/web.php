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
Route::get('/', function () { return redirect(route('home')); });
Route::get('/home', 'PageController@home')->name('home');
Route::post('/apagar-produto', 'ProdutoController@excluir_produto')->name('apagar-produto');
Route::post('/buscar-produto', 'ProdutoController@buscar_produto')->name('buscar-produto');