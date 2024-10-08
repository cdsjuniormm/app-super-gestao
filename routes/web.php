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

Route::get('/', 'PrincipalController@index');

Route::get('/sobre', 'SobreController@index');

Route::get('/contato', 'ContatoController@index');

Route::get(
    '/contato/{nome}/{categoriaId?}',
    function (
        string $nome,
        int $categoriaId = 1
    ) {
        print "Nome: {$nome} {$categoriaId}";
})->where(
    'nome',
    '[A-Za-z]+'
)->where(
    'categoriaId',
    '[0-9]+'
);