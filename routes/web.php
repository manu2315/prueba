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
    return view('welcome');
});


Route::get('/usuarios', function () {
    return view('usuario');
});

Route::post('/usuarios', ['as' => 'usuarios.store','uses'=>'Usuarios@store']);

//Solo se puede usar 1 post y N gets
Route::get('/usuarios','Usuarios@mensaje');

