<?php

use App\Http\Middleware\AuthMiddleware;
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

Route::post(
    '/contato',
    'ContatoController@post'
)->name('site.contato');

Route::get(
    '/login/{msgErro?}',
    'AuthController@index'
)->name('site.login');

Route::post(
    '/auth',
    'AuthController@authenticate'
)->name('auth.authenticate');

Route::middleware(AuthMiddleware::class)
->prefix('/app')->group(function() {
    Route::get(
        '/home',
        'HomeController@index'
    )->name('app.home');

    Route::get(
        '/logout',
        'AuthController@deauthenticate'
    )->name('app.logout');

    Route::get(
        '/cliente',
        'ClienteController@index'
    )->name('app.cliente');

    Route::get(
        '/fornecedor',
        'FornecedorController@index'
    )->name('app.fornecedor');

    Route::post(
        '/fornecedor/listar',
        'FornecedorController@grid'
    )->name('app.fornecedor.grid');

    Route::get(
        '/fornecedor/listar',
        'FornecedorController@grid'
    )->name('app.fornecedor.grid');

    Route::get(
        '/fornecedor/form/{id?}/{msgSucesso?}',
        'FornecedorController@form'
    )->name('app.fornecedor.form');

    Route::post(
        '/fornecedor',
        'FornecedorController@post'
    )->name('app.fornecedor.post');

    Route::get(
        '/produto',
        'ProdutoController@index'
    )->name('app.produto');
});

Route::fallback(function () {
    $route = route('site.index');
    return "Pagina não encontrada. <a href='{$route}'>Inicio</a>";
});