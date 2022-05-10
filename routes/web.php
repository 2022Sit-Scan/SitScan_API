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

Route::group(['middleware' => ['auth']], function() {

    Route::get('/', 'Usuario\UsuarioController@index');

    /* definiendo rutas sueltas
    Route::get('/indice', 'UserController@index');
    Route::producto('/crear', 'User\UserController@store');*/

    // definiendo rutas con controlador de recursos
    Route::resource('users', 'Usuario\UsuarioController');
     Route::resource('productos', 'Producto\ProductoController')->except(['create']);
    // Route::resource('comments', 'CommentController');
});

Auth::routes();

//esta ruta esta protegida desde el __construct del controlador
Route::get('/home', 'HomeController@index')->name('home');