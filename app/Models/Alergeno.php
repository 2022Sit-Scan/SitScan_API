<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alergeno extends Model
{
    protected $fillable = [
        'nombre', 'urlImagen','producto_id'
     ];

     public function productos(){
        return $this->belongsToMany(Producto::class)->withTimestamps();
    }
}
