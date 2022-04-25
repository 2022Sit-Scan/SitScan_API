<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carta extends Model
{
    protected $fillable = [
        'nombre', 'establecimiento_id',
    ];
    public function establecimientos(){
        return $this->hasOne(Establecimiento::class)->withTimestamps();
    }
}
