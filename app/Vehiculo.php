<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    //
    protected $table = "vehiculos";

    public function modelo(){
        return $this->belongsTo('App\Modelo', 'idmodelo');
    }

    public function uso(){
        return $this->belongsTo('App\Uso', 'iduso');
    }
}
