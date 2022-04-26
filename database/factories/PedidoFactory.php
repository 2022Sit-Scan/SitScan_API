<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'establecimiento_id'=>rand(10),
        'producto_id'=>rand(100),
        'cantidad'=>rand(5),
        'mesa_id'=>rand(10),
        'estado'=>rand(0,1),
        'nombreCliente'=>$faker->name
    ];
});
