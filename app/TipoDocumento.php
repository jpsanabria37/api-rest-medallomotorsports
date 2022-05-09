<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model
{
    //Asigna y hace referencia el nombre de la tabla en la base de datos (tipos_documentos)
    protected $table = "tipos_documento";

    //Relacion uno a muchos
    public function clientes(){
        return $this->hasMany('App\Cliente');
    }
}
