<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Actividad::class, function (Faker $faker) {
    return [
        'fecha'=>$faker->date,
        'hora'=>$faker->time,
        'descripcion'=>$faker->text($maxNbChars = 100),
        'informacion'=>$faker->creditCardDetails,

        'persona_id'=>function(){
          return Factory(App\Models\Persona::class)-> create()->id;
        }
    ];
});
