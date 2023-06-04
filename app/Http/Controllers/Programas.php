<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Programas extends Controller
{
    public function index(){
        return view('programas');
    }
}
