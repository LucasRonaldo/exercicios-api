<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioOnzeController extends Controller
{
    public function calculadora(Request $request)
    {

        switch ($request->operação) {
            case 'm' || 'M':
                $resultado = $request->n1 * $request->n2;
echo $resultado;
              
                break;
            case 'd' || 'D':

                return json_encode([
                    'resultado' =>    $request->n1 / $request->n2
                ]);
                break;
            case 'a' || 'A':

                return json_encode([
                    'resultado' =>    $request->n1 + $request->n2
                ]);
                break;
            case 's' || 'S':

                return json_encode([
                    'resultado' =>    $request->n1 - $request->n2
                ]);
                break;
        }
    }
}
