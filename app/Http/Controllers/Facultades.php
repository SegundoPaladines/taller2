<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Facultades extends Controller
{
    public function index(){
        //Equivalente a selec * y enviar todo al arreglo facultades
        $facultades = DB::table('facultades')->get();

        //enviar los datos de la variable $facultades a la vista guardados en la variable facultades
        return view('Facultades.facultades', ['facultades'=>$facultades]);
    }
    public function registrar(){
        return view('Facultades.form_resgistro');
    }
}