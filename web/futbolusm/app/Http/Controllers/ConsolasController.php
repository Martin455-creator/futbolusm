<?php

namespace App\Http\Controllers;
use App\Models\Jugador;
use Illuminate\Http\Request;

class ConsolasController extends Controller
{
    public function getPosicion(){
        $posicion=array();
        $posicion[] = "Por";
        $posicion[] = "Def";
        $posicion[] = "Med";
        $posicion[] = "Del";
   
    return $posicion;
    }
public function getJugador(){
$jugador=Jugador::all();
return $jugador;
}

public function crearJugador(Request $request){
    $input=$request->all();
    $jugador=new Jugador();
    $jugador->nombre=$input["nombre"];
    $jugador->edad=$input["edad"];  
    $jugador->posicion=$input["posicion"];

    $jugador->save();
    return $jugador;
}
}
