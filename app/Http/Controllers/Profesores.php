<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Profesores extends Controller
{
    public function index(){
        return view('profesores');
    }
}