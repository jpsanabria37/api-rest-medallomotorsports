<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //Asigna y hace referencia el nombre de la tabla en la base de datos (clientes)
    protected $table = "clientes";

    //relacion de muchos a uno
    public function tipoDocumento(){
        return $this->belongsTo('App\TipoDocumento', 'tipo_documento');
    }
}
