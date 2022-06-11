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
    Route::resource('usuarios', 'Usuario\UsuarioController');
     Route::resource('productos', 'Producto\ProductoController');
     Route::resource('categorias', 'Categoria\CategoriaController');
     Route::resource('alergenos', 'Alergeno\AlergenoController');
     Route::resource('cartas', 'Carta\CartaController');
     Route::resource('mesas', 'Mesa\MesaController');
     Route::resource('establecimientos', 'Establecimiento\EstablecimientoController');
     Route::resource('pedidos', 'Pedido\PedidoController');
     Route::resource('pedidosproductos', 'Pedido\PedidoProductoController');
     Route::resource('pedidosacabados', 'Pedido\PedidoAcabadoController');  
});

Auth::routes();
Route::get('/landing', 'LandigController@index')->name('landing');
Route::get('/home', 'HomeController@index')->name('home');