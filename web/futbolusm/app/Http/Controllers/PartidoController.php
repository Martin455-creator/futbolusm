<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartidoController extends Controller
{
    public function getCategoria(){
        $categoria=array();
        $categoria[] = "Infantil";
        $categoria[] = "Juvenil";
        $categoria[] = "Adulta";
        
   
    return $categoria;
    }
public function getPartido(){
$partido=Partido::all();
return $partido;
}

public function crearPartido(Request $request){
    $input=$request->all();
    $partido=new partido();
    $partido->rival=$input["rival"];
    $partido->cancha=$input["cancha"];  
    $partido->categoria=$input["categoria"];

    $partido->save();
    return $partido;
}
}
