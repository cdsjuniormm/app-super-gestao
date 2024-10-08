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

Route::get('/login', function() { return ''; });

Route::prefix('/app')->group(function() {
    Route::get('/clientes', function() { return ''; });

    Route::get('/fornecedores', function() { return ''; });
    
    Route::get('/produtos', function() { return ''; });    
});
