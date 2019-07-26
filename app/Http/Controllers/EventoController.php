<?php

namespace App\Http\Controllers;


use App\Evento;
use Illuminate\Http\Request;


class EventoController extends Controller
{
    public function api()
    {	
    	$data = Evento::all()->toArray();
 		
        return response()->json($data); //para luego retornarlo y estar listo para consumirlo
 
    }
}
