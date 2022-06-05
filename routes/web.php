<?php

use Illuminate\Support\Facades\Auth;
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

Route::group(['middleware' => ['auth']], function() {

    Route::get('/', 'Usuario\UsuarioController@index');

    /* definiendo rutas sueltas
    Route::get('/indice', 'usuarioController@index');
    Route::producto('/crear', 'usuario\usuarioController@store');*/

    // definiendo rutas con controlador de recursos
    Route::resource('usuarios', 'Usuario\UsuarioController')->except(['show']);
     Route::resource('productos', 'Producto\ProductoController')->except(['show']);
     Route::resource('categorias', 'Categoria\CategoriaController')->except(['show']);
     Route::resource('alergenos', 'Alergeno\AlergenoController')->except(['show']);
     Route::resource('cartas', 'Carta\CartaController')->except(['show']);
     Route::resource('mesas', 'Mesa\MesaController')->except(['show']);
     Route::resource('establecimientos', 'Establecimiento\EstablecimientoController')->except(['show']);
     Route::resource('pedidos', 'Pedido\PedidoController')->except(['show']);
     Route::resource('listaprecios', 'Establecimiento\EstablecimientoProductoController');
     Route::resource('pedidosproductos', 'Pedido\PedidoProductoController');

    // Route::resource('comments', 'CommentController');
});

Auth::routes();

//esta ruta esta protegida desde el __construct del controlador
Route::get('/home', 'HomeController@index')->name('home');