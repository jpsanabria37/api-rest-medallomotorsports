<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FabricanteCategoria extends Model
{
    //
    protected $table = "fabricantes_has_categorias";

    public function modelos(){
        return $this->hasMany('App\Modelo');
    }
}
