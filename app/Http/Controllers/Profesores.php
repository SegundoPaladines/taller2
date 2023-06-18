<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Profesor;

class Profesores extends Controller
{
    public function index(){
        //Equivalente a selec * y enviar todo al arreglo profesores
        $profesores = DB::table('profesores')->get();

        //enviar los datos de la variable $profesores a la vista guardados en la variable profesores
        return view('Profesores.profesores', ['profesores'=>$profesores]);
    }
    //mostrar formulario para resgistrar al profesor
    public function form_registrar(){
        return view('Profesores.form_registro');
    }

    //funcion que registra al profesor
    public function registrar(Request $r){
        //incercion con el modelo $r trae los atributos que viajan en el request
        $profesor = new Profesor(); //instanciar el modelo
        $profesor -> codprofesor = $r -> input('codigo'); //asignar valor de codigo
        $profesor -> nomprofesor = $r -> input('nombre'); //asignar nombre
        $profesor -> catprofesor = $r -> input('catedra'); //asignar la catedra
        $profesor -> save();//equivalente al incert
        return redirect()->route('lista_prof'); //cuando la ruta tiene nombre se redirecciona por el nombre
    }

    //mostrar formulario para editar al profesor
    public function form_editar($id){
        //buscar al profesor por id y guardarla en $profesor
        $profesor = Profesor::findOrFail($id);
        $nom = $profesor->nomprofesor;
        $cat = $profesor->catprofesor;
        //mostrar la vista enviando id y nom, en la vista se reciben y acceden como $id, $nombre y $cat
        return view('Profesores.form_editar', ['id' => $id, 'nombre'=>$nom, 'cat'=>$cat]);
    }

    //funcion que edita al profesor
    public function editar(Request $r, $id){
        //editar al profesor recibiendo la solicitud $r donde viajan datos y el parametro id que tambien se envia
        $profesor = Profesor::findOrFail($id); //buscar si el id existe
        $profesor -> codprofesor = $r -> input('codigo'); //asignar valor de codigo
        $profesor -> nomprofesor = $r -> input('nombre'); //asignar nombre
        $profesor -> catprofesor = $r -> input('catedra'); //asignar la catedra
        $profesor -> save();//equivalente al incert
        return redirect()->route('lista_prof'); //cuando la ruta tiene nombre se redirecciona por el nombre
    }

    //metodo que elimina al profesor
    public function eliminar($id){
        //incercion con el modelo $id trae el id a eliminar
        $profesor = Profesor::findOrFail($id); //buscar si el id existe
        $profesor->delete(); //eliminar el elemento
        return redirect()->route('lista_prof'); //cuando la ruta tiene nombre se redirecciona por el nombre
    }
}