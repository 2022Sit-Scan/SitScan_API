<?php

namespace App\Models;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [
        'establecimiento_id', 'producto_id', 'cantidad', 'mesa_id', 'estado', 'nombreCliente',
    ];

    public function mesa(){
        return $this->belongsTo(Mesa::class,'mesa_id')->withTimestamps();
    }

    public function establecimiento(){
        return $this->belongsTo(Establecimiento::class)->withTimestamps();
    }
    public function productos(){
        return $this->belongsToMany(Producto::class)->withTimestamps();
    }
}
