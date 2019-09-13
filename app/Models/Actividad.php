<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    protected  $table='actividades';
    protected $fillable =['id','fecha','hora','descripcion','informacion','persona_id'];

    public function personas(){
        return $this->belongsTo('App\Models\Persona','persona_id');
}

protected $casts = [
    'informacion'=> 'array',

];

}
