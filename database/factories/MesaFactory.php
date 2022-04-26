<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'numero_mesa'=>rand(10),
        'codigoQR'=>'https://codigoQR',
        'establecimiento_id'=>rand(10)
    ];
});
