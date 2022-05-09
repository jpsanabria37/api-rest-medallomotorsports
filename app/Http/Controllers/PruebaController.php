<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoDocumento;
use App\Cliente;
use App\Fabricante;
use App\Categoria;
use App\Modelo;
use App\Uso;
use App\Vehiculo;

class PruebaController extends Controller
{
    //
    public function prueba1(){
        
        $fabricantes = Fabricante::all();
        foreach($fabricantes as $fabricante){
            echo $fabricante->nombre."<BR>";
        }
        die();
    }
}
