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
    //mostrar formulario para resgistrar la faciltad
    public function form_registrar(){
        return view('Facultades.form_resgistro');
    }

    //mostrar formulario para editar la facultad
    public function form_editar($id){
        //buscar la facultad por id y guardarla en $facultad
        $facultad = Facultad::findOrFail($id);
        $nom=$facultad->nomfacultad;
        //mostrar la vista enviando id y nom, en la vista se reciben y acceden como $id y $nombre
        return view('Facultades.form_editar', ['id' => $id, 'nombre'=>$nom]);
    }
    
    //funcion que registra la facultad
    public function registrar(Request $r){
        //incercion con el modelo $r trae los atributos que viajan
        $facultad = new Facultad(); //instanciar el modelo
        $facultad -> codfacultad = $r -> input('codigo'); //asignar valor de codigo
        $facultad -> nomfacultad = $r -> input('nombre'); //asignar nombre
        $facultad->save();//equivalente al incert
        return redirect()->route('listadofac'); //cuando la ruta tiene nombre se redirecciona por el nombre
    }

    //metodo que elimina la facultad
    public function eliminar($id){
        //incercion con el modelo $id trae el id a eliminar
        $facultad = Facultad::findOrFail($id); //buscar si el id existe
        $facultad->delete(); //eliminar el elemento
        return redirect()->route('listadofac'); //cuando la ruta tiene nombre se redirecciona por el nombre
    }

    //funcion que edita la facultad
    public function editar(Request $r, $id){
        //editar la facultad recibiendo la solicitud $r donde viajan datos y el parametro id que tambien se envia
        $facultad = Facultad::findOrFail($id); //buscar si el id existe
        $facultad -> codfacultad = $r -> input('codigo'); //asignar valor de codigo
        $facultad -> nomfacultad = $r -> input('nombre'); //asignar nombre
        $facultad->save();//equivalente al incert
        return redirect()->route('listadofac'); //cuando la ruta tiene nombre se redirecciona por el nombre
    }
}