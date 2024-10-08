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

Route::get(
    '/',
    'PrincipalController@index'
)->name('site.index');

Route::get(
    '/sobre',
    'SobreController@index'
)->name('site.sobre');

Route::get(
    '/contato',
    'ContatoController@index'
)->name('site.contato');

Route::get(
    '/login',
    function() { return ''; }
)->name('site.login');

Route::prefix('/app')->group(function() {
    Route::get(
        '/clientes',
        function() { return ''; }
    )->name('app.clientes');

    Route::get(
        '/fornecedores',
        function() { return ''; }
    )->name('app.fornecedores');
    
    Route::get(
        '/produtos',
        function() { return ''; }
    )->name('app.produtos');    
});

Route::fallback(function () {
    $route = route('site.index');
    return "Pagina não encontrada. <a href='{$route}'>Inicio</a>";
});