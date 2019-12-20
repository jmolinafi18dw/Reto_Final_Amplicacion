<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sociedad extends Model
{
    protected $table='sociedad';
    protected $fillable=['nombre','ubicacion','telefono','administrador_id'];


    public function usuarios(){
        return $this->belongsToMany(User::class);
    }
    public function incidencias(){
        return $this->hasMany(Incidencia::class);
    }

    public function productos(){
        return $this->hasMany(ProductoSociedad::class);
    }
}