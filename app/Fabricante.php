<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fabricante extends Model
{
    //
    protected $table = "fabricantes";

    public function categorias(){
        return $this->belongsMany('App\Categoria');
    }
}
