<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Ciudad::class, function (Faker $faker) {
    return [
        'nombre_ciudad'=>$faker->city,
        'departamento_id'=>function(){
          return Factory(App\Models\Departamento::class)-> create()->id;
        }
    ];
});
