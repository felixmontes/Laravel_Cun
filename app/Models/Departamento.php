<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected  $table='departamentos';
    protected $fillable =['id','nombre'];

    public function ciudades(){
        return $this->hasMany('App\Models\Ciudad');
    }
}
