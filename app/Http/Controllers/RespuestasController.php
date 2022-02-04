<?php

namespace App\Http\Controllers;

use App\Models\respuestas;
use Illuminate\Http\Request;

class RespuestasController extends Controller
{
    public function Todos()
    {
        $respuestas=respuestas::all();

        return $respuestas;
    }

    public function Insertar(Request $request)
    {
        $respuestas=new respuestas();

        $respuestas->respuesta=$request->respuesta;

        $respuestas->save();

        return $respuestas;
    }

    public function update(Request $request)
    {
        $respuestas=respuestas::findOrFail($request->id);

        $respuestas->respuesta=$request->respuesta;

        $respuestas->save();

        return $respuestas;
    }

    public function destroy(Request $request)
    {
        $respuestas = respuestas::find($request->id);
        
        $respuestas->delete();
        return $respuestas;
    }
}
