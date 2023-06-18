<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Programa;
use App\Models\Facultad;

class Programas extends Controller
{
    public function index(){
        //Equivalente a selec * y enviar todo al arreglo programas
        $programas = DB::table('programas')->get();
        //enviar los datos de la variable $programas a la vista guardados en la variable programas
        return view('Programas.programas', ['programas'=>$programas]);
    }
    public function form_registrar(){
        //Equivalente a selec * y enviar todo al arreglo programas
        $facultades = DB::table('facultades')->get();

        //enviar los datos de la variable $programas a la vista guardados en la variable programas
        return view('Programas.form_registro', ['facultades'=>$facultades]);
    }
    public function registrar(Request $r){
        //crear la instnacia del modelo
        $programa = new Programa();
        //asignar los valores de los atributos a los recogidos en el request
        $programa->codprograma = $r->input('codigo');
        $programa->nomprograma = $r->input('nombre');
        $programa->facultad = $r->get('facultades');
        //incertar en la tabla
        $programa->save();
        return redirect()->route('lista_prog');
    }
    public function encontrarFacultad($id){
        $facultad = Facultad::findOrFail($id);
        $nom=$facultad->nomfacultad;
        return $nom;
    }
    //mostrar formulario para editar la facultad
    public function form_editar($id){
        $programa = Programa::findOrFail($id);
        $nom=$programa->nomprograma;
        $fac=$programa->facultad;
        $facultades = DB::table('facultades')->get();
        return view('Programas.form_editar', ['id' => $id, 'nombre'=>$nom, 'facultades'=>$facultades, 'fac'=>$fac]);
    }
    //metodo que hace el update en la tabla y redirecciona a la lista de programas
    public function editar(Request $r, $id){
        //se recibe $r que trae los datos enviados por el formulario con el post
        //el $id que se lo envia con la ruta
        //buscar el programa por id en la base de datos
        $programa=Programa::findOrFail($id);

        //asignar los valores de los atributos a los recogidos en el request
        $programa->codprograma = $r->input('codigo');
        $programa->nomprograma = $r->input('nombre');
        $programa->facultad = $r->get('facultades');

        //incertar en la tabla
        $programa->save();
        return redirect()->route('lista_prog');
    }
    public function eliminar($id){
        //se recibe el $id que envia con la ruta
        //buscar el programa por id en la base de datos
        $programa=Programa::findOrFail($id);
        $programa->delete(); //elimina el programa
        return redirect()->route('lista_prog'); // redirecciona a la vista de lista programas
    }
}
