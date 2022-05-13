<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carta extends Model
{
    protected $fillable = [
        'nombre', 'establecimiento_id',
    ];
    public function establecimiento(){
        return $this->belongsTo(Establecimiento::class);
    }
    public function productos(){
        return $this->belongsToMany(Producto::class)->withTimestamps();
    }
}
