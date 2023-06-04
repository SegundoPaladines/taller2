<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Facultades extends Controller
{
    public function index(){
        return view('facultades');
    }
}