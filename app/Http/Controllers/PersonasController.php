<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    public function ObtenerPersonas(){
        return Personas::all();
    }

    public function Insertar(Request $request){
        return Personas::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'edad' => $request->edad
        ]);
    }

    public function Eliminar($id){
        return Personas::where("id",$id)->delete();
    }

    public function Actualizar(Request $request){
        return Personas::where("id",$request->id)->update([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'edad' => $request->edad
        ]);
    }
}
