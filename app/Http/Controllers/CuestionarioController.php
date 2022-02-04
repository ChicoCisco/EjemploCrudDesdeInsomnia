<?php

namespace App\Http\Controllers;

use App\Models\cuestionario;
use GrahamCampbell\ResultType\Result;
use Illuminate\Http\Request;

class CuestionarioController extends Controller
{
    
    public function Todos()
    {
        $cuestionario = cuestionario::all();

        return $cuestionario;
    }

    public function Insertar(Request $request)
    {
        $cuestionario = new cuestionario();

        $cuestionario->Nombre_cuestionario=$request->Nombre_cuestionario;
        $cuestionario->Materia=$request->Materia;
        $cuestionario->Preguntas=$request->Preguntas;

        $cuestionario->save();

        return $cuestionario;
    }

    public function update(Request $request)
    {
        $cuestionario=cuestionario::findOrFail($request->id);
        $cuestionario->Nombre_cuestionario=$request->Nombre_cuestionario;
        $cuestionario->Materia=$request->Materia;
        $cuestionario->Preguntas=$request->Preguntas;

        $cuestionario->save();

        return $cuestionario;
    }

    public function destroy(Request $request)
    {
        $cuestionario = cuestionario::find($request->id);
        
        $cuestionario->delete();
        return $cuestionario;
    }
}
