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

    Route::get('/', 'Pedido\PedidoProductoController@index');

    // definiendo rutas con controlador de recursos
    Route::resource('usuarios', 'Usuario\UsuarioController')->except(['show']);
    Route::resource('productos', 'Producto\ProductoController')->except(['show']);
    Route::resource('categorias', 'Categoria\CategoriaController')->except(['show']);
    Route::resource('alergenos', 'Alergeno\AlergenoController')->except(['show']);
    Route::resource('cartas', 'Carta\CartaController')->except(['show']);
    Route::resource('mesas', 'Mesa\MesaController')->except(['show']);
    Route::resource('establecimientos', 'Establecimiento\EstablecimientoController')->except(['show']);
    Route::resource('pedidos', 'Pedido\PedidoController')->except(['show']);
     Route::resource('pedidosproductos', 'Pedido\PedidoProductoController');
     Route::resource('pedidosacabados', 'Pedido\PedidoAcabadoController');  
});

Auth::routes();
Route::get('/landing', 'LandigController@index');
Route::get('/home', 'HomeController@index')->name('home');