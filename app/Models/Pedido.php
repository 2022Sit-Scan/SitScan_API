<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [
        'establecimiento_id', 'producto_id', 'cantidad', 'mesa_id', 'estado', 'nombreCliente',
    ];

    public function mesas(){
        return $this->hasMany(Mesa::class,'mesa_id')->withTimestamps();
    }

    public function establecimientos(){
        return $this->belongsToMany(Establecimiento::class)->withTimestamps();
    }
}
