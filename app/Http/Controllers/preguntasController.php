<?php

namespace App\Http\Controllers;
use App\Preguntas;

use Illuminate\Http\Request ;

class preguntasController extends Controller
{
    public function devuelve_pregunta($tema){

        return Preguntas::where('tema',$tema)->inRandomOrder()->first();
    }
}