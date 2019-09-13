<?php

use Illuminate\Database\Seeder;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $personas=factory(App\Models\Persona::class,5)->create()
        ->each(function($persona){
            $persona->actividades()->save(factory(App\Models\Actividad::class)->make());
       
        }); 
    }
}
