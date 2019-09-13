<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Persona::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->name,
        'apellido'=>$faker->lastName,
        'email'=>$faker->unique()->safeEmail,
        'direccion'=>$faker->address,
        
    ];
});
