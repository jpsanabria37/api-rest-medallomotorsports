<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uso extends Model
{
    //
    protected $table = "usos";

    public function vehiculos(){
        return $this->hasMany('App\Vehiculo');
    }
}
