<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntrenadorController extends Controller
{
    public function getDivicion(){
        $division=array();
        $division[] = "Infantil";
        $division[] = "Juvenil";
        $division[] = "Adulta";
        
   
    return $division;
    }
public function getEntrenador(){
$entrenador=Entrenador::all();
return $entrenador;
}

public function crearEntrenador(Request $request){
    $input=$request->all();
    $entrenador=new entrenador();
    $entrenador->nombre1=$input["nombre1"];
    $entrenador->edad1=$input["edad1"];  
    $entrenador->division=$input["division"];

    $entrenador->save();
    return $entrenador;
}
}
