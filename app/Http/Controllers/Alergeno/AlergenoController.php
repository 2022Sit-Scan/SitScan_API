<?php

namespace App\Http\Controllers\Alergeno;

use App\Models\Alergeno;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlergenoController extends Controller
{
    public function index(Request $request){

        if( $request->is('api/*')){
        return $this->showAll(Alergeno::all());
        }
        else{
            $alergenos = Alergeno::all();
         return view('alergenos.index', compact('alergenos'));
        }
    }
    
}
