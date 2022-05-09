<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    //
    protected $table = "modelos";

    public function fabricantecategoria(){
        return $this->belongsTo('App\FabricanteCategoria', 'idfabricante_categoria');
    }

    public function vehiculos(){
        return $this->hasMany('App\Vehiculo');
    }
}
