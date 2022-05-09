<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehiculo;
use App\Modelo;

class VehiculoController extends Controller
{
    //
    public function index(){

        $vehiculo = Vehiculo::all();

        $data = array(
            "status" => "succes",
            "code" => "200",
            "content" => $vehiculo
        );

        return response()->json($data, $data['code']);
    }
}
