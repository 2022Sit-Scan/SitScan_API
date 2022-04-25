<?php

namespace App\Models;

use App\Models\Mesa;
use App\Models\Usuario;
use Illuminate\Database\Eloquent\Model;

class Establecimiento extends Model
{
    protected $fillable = [
        'nombre', 'urlLogo',
    ];
    public function mesas(){
        return $this->hasMany(Mesa::class,'mesa_id')->withTimestamps();
    }

    public function usuarios(){
        return $this->hasMany(Usuario::class)->withTimestamps();
    }
    public function pedidos(){
        return $this->hasMany(Pedido::class)->withTimestamps();
    }
    public function cartas(){
        return $this->hasOne(Carta::class)->withTimestamps();
    }
    public function productos(){
        return $this->belongsToMany(Producto::class)->withTimestamps();
    }
}
