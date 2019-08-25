<?php

use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            'numero_cedula' =>'011',
            'nombre'=>'diana',
            'sexo'=>'femenino',
            'telefono'=>'2812459'
        ]);

        DB::table('clientes')->insert([
            'numero_cedula'=>'511',
            'nombre'=>'kiana',
            'sexo'=>'femenino',
            'telefono'=>'475559'
        ]);
        DB::table('clientes')->insert([
            'numero_cedula'=>'481',
            'nombre'=>'ana',
            'sexo'=>'femenino',
            'telefono'=>'715059'
        ]);
        DB::table('clientes')->insert([
            'numero_cedula' => '940',
            'nombre'=>'maria',
            'sexo'=>'femenino',
            'telefono'=>'95459'
        ]);
        DB::table('clientes')->insert([
            'numero_cedula'=>'212',
            'nombre'=>'lina',
            'sexo'=>'femenino',
            'telefono'=>'425125'
        ]);
    }
}
