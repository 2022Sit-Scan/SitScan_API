<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Models\Carta;
use Faker\Generator as Faker;

$factory->define(Carta::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->name,
        'establecimiento_id'=>rand(0,10)
    ];
});
