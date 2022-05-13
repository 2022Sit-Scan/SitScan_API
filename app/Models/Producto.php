<?php

namespace App\Models;

use App\Models\Pedido;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
       'nombre', 'urlImagen', 'descripcion','categoria_id',
    ];

    public function establecimientos(){
        return $this->belongsToMany(Establecimiento::class)->withTimestamps()->withPivot('precio');
    }
    public function alergenos(){
        return $this->belongsToMany(Alergeno::class)->withTimestamps();
    }
    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
    public function cartas(){
        return $this->belongsToMany(Carta::class)->withTimestamps();
    }
    public function pedidos(){
        return $this->belongsToMany(Pedido::class)->withTimestamps();
    }
}
