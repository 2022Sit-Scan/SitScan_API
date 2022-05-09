<?php

namespace App\Http\Controllers\Producto;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductoController extends Controller
{
    public function index()
    {
        
        return $this->showAll(Producto::all());
    }
}
