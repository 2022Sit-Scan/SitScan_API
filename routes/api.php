<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('login', function (Request $request) {
    return $request->usuario();
});*/
/*Route::apiResource('usuarios', 'usuario\usuarioController'); // ya no salen edit ni create
Route::apiResource('products', 'Product\ProductController', ['only' => ['index', 'show']]);

Route::producto('login', 'usuario\usuarioController@login');*/

Route::apiResource('alergenos', 'Alergeno\AlergenoController');
Route::apiResource('cartas', 'Carta\CartaController');
Route::apiResource('mesas', 'Mesa\MesaController');
Route::apiResource('productos', 'Producto\ProductoController');
Route::apiResource('categorias', 'Categoria\CategoriaController');
Route::apiResource('establecimientos', 'Establecimiento\EstablecimientoController');
Route::apiResource('pedidos', 'Pedido\PedidoController');

