<?php

namespace App\Http\Controllers;

use App\Models\preguntas;
use Illuminate\Http\Request;

class PreguntasController extends Controller
{
    public function Todos()
    {
        $preguntas=preguntas::all();

        return $preguntas;
    }

    public function Insertar(Request $request)
    {
        $preguntas=new preguntas();

        $preguntas->Pregunta=$request->Pregunta;
        $preguntas->respuestas=$request->respuestas;
        
        $preguntas->save();

        return $preguntas;
    }

    public function update(Request $request)
    {
        $preguntas=preguntas::findOrFail($request->id);

        $preguntas->Pregunta=$request->Pregunta;
        $preguntas->respuestas=$request->respuestas;
        
        $preguntas->save();

        return $preguntas;
    }

    public function destroy(Request $request)
    {
        $preguntas = preguntas::find($request->id);
        
        $preguntas->delete();
        return $preguntas;
    }
}
