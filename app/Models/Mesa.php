<?php

namespace App\Models;

use App\Models\Establecimiento;
use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    protected $fillable = [
        'numero_mesa', 'codigoQR', 'establecimiento_id',
    ];

    public function establecimiento(){
        return $this->belongsTo(Establecimiento::class);
    }
    
    public function pedidos(){
        return $this->hasMany(Pedido::class)->withTimestamps();
    }
}
