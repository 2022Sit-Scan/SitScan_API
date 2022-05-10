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
    return $request->user();
});*/
/*Route::apiResource('users', 'User\UserController'); // ya no salen edit ni create
Route::apiResource('products', 'Product\ProductController', ['only' => ['index', 'show']]);

Route::producto('login', 'User\UserController@login');*/

Route::apiResource('productos', 'Producto\ProductoController');