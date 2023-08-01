<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioOnzeController extends Controller
{
    public function calculadora(Request $request)
    {
        $resultado = "erro: operação invalida";
        switch (strtoupper($request->operação)) {
            case 'M':
                $resultado = $request->n1 * $request->n2;
                break;
            case 'D':
                $resultado = $request->n1 / $request->n2;
                break;
            case 'A':
                $resultado = $request->n1 + $request->n2;
                break;
            case 'S':
                $resultado = $request->n1 - $request->n2;
                break;
            default :
                $resultado = "erro: operação invalida";
                break;
        }
        return json_encode([
            'resultado'=> $resultado
        ]);
    }
}

