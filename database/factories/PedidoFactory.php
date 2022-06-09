<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Models\Pedido;
use Faker\Generator as Faker;

$factory->define(Pedido::class, function (Faker $faker) {
    return [
        'establecimiento_id'=>rand(1,5),
        'mesa_id'=>rand(0,25),
        'estado'=>rand(0,1),
        'nombreCliente'=>$faker->name
    ];
});
