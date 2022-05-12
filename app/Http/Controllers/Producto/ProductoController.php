<?php

namespace App\Http\Controllers\Producto;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductoController extends Controller
{
    public function index(Request $request){

        if( $request->is('api/*')){
        return $this->showAll(Producto::all());
        }
        else{
            $productos = Producto::paginate(10);
         return view('productos.index', compact('productos'));
        }
    }
    
}
