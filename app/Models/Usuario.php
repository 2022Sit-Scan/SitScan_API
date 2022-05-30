<?php

namespace App\Models;

use App\Scopes\ActiveScope;
use App\Models\Establecimiento;
use Illuminate\Support\Facades\Auth;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password','establecimiento_id','rol'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function establecimiento(){

        return $this->belongsTo(Establecimiento::class);
    }

//     protected static function boot()
// {
//     parent::boot();
//     static::addGlobalScope(new ActiveScope);
// }
}
