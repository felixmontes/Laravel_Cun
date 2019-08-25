<?php

use Illuminate\Database\Seeder;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departamentos=factory(App\Models\Departamento::class,10)->create()
        ->each(function($departamento){
            $departamento->ciudades()->save(factory(App\Models\Ciudad::class)->make());
       
        });   
    }
}
