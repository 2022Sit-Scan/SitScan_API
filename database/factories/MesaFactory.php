<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Models\Mesa;
use Faker\Generator as Faker;

$factory->define(Mesa::class, function (Faker $faker) {
    return [
        'numero_mesa'=>rand(0,10),
        'codigoQR'=>'https://codigoQR',
        'establecimiento_id'=>rand(0,10)
    ];
});
