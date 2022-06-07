<?php

namespace App\Models;

use App\Models\Mesa;
use App\Models\Carta;
use App\Models\Pedido;
use App\Models\Usuario;
use App\Models\Producto;
use Illuminate\Database\Eloquent\Model;

class Establecimiento extends Model
{
    protected $fillable = [
        'nombre', 'urlLogo',
    ];
    public function mesas(){
        return $this->hasMany(Mesa::class)->withTimestamps();
    }

    public function usuarios(){
        return $this->hasMany(Usuario::class)->withTimestamps();
    }
    public function pedidos(){
        return $this->hasMany(Pedido::class)->withTimestamps();
    }
    public function carta(){
        return $this->hasOne(Carta::class)->withTimestamps();
    }
   
}
