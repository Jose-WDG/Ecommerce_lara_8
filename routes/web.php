<?php

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
    return view('layout');
});

Route::prefix('holly')->group(function()
{
    Route::get('/', function () {   return view('index');   });
    Route::get('/comprar', function () {    return view('comprar'); })->name('comprar');
    Route::get('/login', function () {    return view('clientes.login'); })->name('entrar');
    Route::get('/nova Conta', function () {    return view('clientes.novaConta'); })->name('nova conta');
    Route::get('/Recuperar senha', function () {    return view('clientes.recuperarSenha'); })->name('recuperar senha');
    Route::get('/Duvidas', function () {    return view('clientes.faq'); })->name('duvidas');
    
});
