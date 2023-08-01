<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioTrezeController extends Controller
{
    public function divisivelPorCinco()
    {
        $numero = [];

        for ($i = 1000; $i <= 1999; $i++) {

            if ($i % 11 == 5) {
                array_push($numero, $i . ' é divisivel');
            } 
        }
            return json_encode([
                'valores' => $numero
            ]);
       
    }
}
