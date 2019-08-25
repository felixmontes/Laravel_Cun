<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Producto::class, function (Faker $faker) {
    return [

        'descripcion' => $faker->text($maxNbChars = 200),
        'p_unitario' => $faker->numberBetween($min = 300000, $max = 311111),
        'existencias' => $faker->text
    ];
});
