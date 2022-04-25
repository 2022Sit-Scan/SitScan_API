<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
       'nombre', 'urlImagen', 'descripcion', 'carta_id', 
    ];

    public function establecimientos(){
        return $this->belongsToMany(Establecimiento::class)->withTimestamps()->withPivot('precio');
    }
    public function alergenos(){
        return $this->belongsToMany(Alergenos::class)->withTimestamps();
    }
    public function categorias(){
        return $this->hasMany(Categoria::class)->withTimestamps();
    }
}
