<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{

    protected  $table='personas';
    protected $fillable =['nombre','apellido','email','direccion'];

    protected $hidden=['create_at','update_at','remember_token'];

    public function actividades(){
        return $this->hasMany('App\Models\Actividad');

    }
   
    public function getFullNameAttribute() {
        return "{$this->nombre} {$this->apellido}";
    } 

    public function setLastNameAttribute($valor) {
      $this->attributes['apellido']=strtoupper($valor);
    } 

    public function setEmailAttribute($valor){
        $this->attributes['email']= ucfirst($valor);
    }

    public function getPersonaAttribute(){
        return $this->actividades;
    }
}
