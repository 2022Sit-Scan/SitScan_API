<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
        'categoriaPadre', 'nombre', 'urlImagen', 
     ];

     public function productos(){
        return $this->hasOne(Producto::class)->withTimestamps();
    }

    public function parent(){
        return $this->belongsTo(Categoria::class)->withTimestamps();
    }

    public function catHijos(){
        return $this->hasMany(Categoria::class,'parent_id')->withTimestamps();
    }
    

}
