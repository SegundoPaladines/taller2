<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Facultad;

class Facultades extends Controller
{
    public function index(){
        //Equivalente a selec * y enviar todo al arreglo facultades
        $facultades = DB::table('facultades')->get();

        //enviar los datos de la variable $facultades a la vista guardados en la variable facultades
        return view('Facultades.facultades', ['facultades'=>$facultades]);
    }
    public function form_registrar(){
        return view('Facultades.form_resgistro');
    }
    public function registrar(Request $r){
        //incercion con el modelo $r trae los atributos que viajan
        $facultad = new Facultad(); //instanciar el modelo
        $facultad -> codfacultad = $r -> input('codigo'); //asignar valor de codigo
        $facultad -> nomfacultad = $r -> input('nombre'); //asignar nombre
        $facultad->save();//equivalente al incert
        return redirect()->route('listadofac'); //cuando la ruta tiene nombre se redirecciona por el nombre
    }
    public function eliminar($id){
        //incercion con el modelo $id trae el id a eliminar
        $facultad = Facultad::findOrFail($id); //buscar si el id existe
        $facultad->delete(); //eliminar el elemento
        return redirect()->route('listadofac'); //cuando la ruta tiene nombre se redirecciona por el nombre
    }
}