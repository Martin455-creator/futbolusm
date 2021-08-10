<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DestacadoController extends Controller
{
    public function getDivicion1(){
        $division1=array();
        $division1[] = "Infantil";
        $division1[] = "Juvenil";
        $division1[] = "Adulta";
        
   
    return $division1;
    }
public function getDestacado(){
$destacado=Destacado::all();
return $destacado;
}

public function crearDestacado(Request $request){
    $input=$request->all();
    $destacado=new destacado();
    $destacado->jugador=$input["jugador"];
    $destacado->edad2=$input["edad2"];  
    $destacado->division1=$input["division1"];

    $destacado->save();
    return $destacado;
}
}
