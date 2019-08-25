<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected  $table='ciudades';
    protected $fillable =['id','nombre_ciudad'];

    public function departamentos(){
        return $this->belongsTo('App\Models\Ciudad');
}
}