<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TarSol;

class TarjetaSolController extends Controller
{
    function index(){
    	$solicitudes = TarSol::all();
    	return view('Tarjetas de solicitud.index',['solicitudes'=>$solicitudes]);
    }
    function create(){
    	
    	return view('Tarjetas de solicitud.create');
    }
}
