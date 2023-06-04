<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Estudiantes extends Controller
{
    public function index(){
        return view('estudiantes');
    }
}