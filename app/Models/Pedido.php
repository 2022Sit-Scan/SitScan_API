<?php

namespace App\Models;

use App\Models\Mesa;
use App\Models\Producto;
use App\Models\Establecimiento;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [
        'establecimiento_id','mesa_id', 'estado', 'nombreCliente',
    ];

    public function mesa(){
        return $this->belongsTo(Mesa::class);
    }

    public function establecimiento(){
        return $this->belongsTo(Establecimiento::class);
    }
    public function productos(){
        return $this->belongsToMany(Producto::class)->withPivot('cantidad')->withTimestamps();
    }
}
