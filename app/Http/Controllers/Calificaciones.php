<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Calificaciones extends Controller
{
    public function index(){
        return view('calificaciones');
    }
}