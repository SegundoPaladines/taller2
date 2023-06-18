<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Estudiante;
use App\Models\Programa;
use App\Models\Ciudad;
use App\Models\Barrio;

class Estudiantes extends Controller
{
    public function index(){
        //Equivalente a selec * y enviar todo al arreglo estudiantes
        $estudiantes = DB::table('estudiantes')->get();

        //enviar los datos de la variable $estudiantes a la vista guardados en la variable estudiantes
        return view('Estudiantes.estudiantes', ['estudiantes'=>$estudiantes]);
    }

    public function encontrarCiudad($id){
        $ciudad = Ciudad::findOrFail($id);
        $nom=$ciudad->nomcuidad;
        return $nom;
    }

    public function encontrarBarrio($id){
        $barrio = Barrio::findOrFail($id);
        $nom=$barrio->nombarrio;
        return $nom;
    }

    public function encontrarPrograma($id){
        $programa = Programa::findOrFail($id);
        $nom=$programa->nomprograma;
        return $nom;
    }

    public function form_registrar(){
        //equivalentes a slectas para ser enviados
        $programas = DB::table('programas')->get();
        $ciudades = DB::table('ciudades')->get();
        $barrios = DB::table('barrios')->get();

        //eviar arreglos con datos para ser tratados
        return view('Estudiantes.form_registro', ['programas'=>$programas, 'ciudades'=>$ciudades, 'barrios'=>$barrios]);
    }

    public function registrar(Request $r){
        //crear la instnacia del modelo
        $estudiante = new Estudiante();
        //asignar los valores de los atributos a los recogidos en el request
        $estudiante->codestudiante = $r->input('codigo');
        $estudiante->nomestudiante = $r->input('nombre');
        $estudiante->edadestudiante = $r->input('edad');
        $estudiante->fechaestudiante = $r->input('f_nac');
        $estudiante->sexestudiante = $r->get('sexo');
        $estudiante->ciudad = $r->get('ciudad');
        $estudiante->barrio = $r->get('barrio');
        $estudiante->programa = $r->get('programa');
        //incertar en la tabla
        $estudiante->save();
        return redirect()->route('lista_est');
    }

    //mostrar formulario para editar el estudiante
    public function form_editar($id){
        $estudiante = Estudiante::findOrFail($id);
        $nom = $estudiante->nomestudiante;
        $edad = $estudiante->edadestudiante;
        $fecha = $estudiante->fechaestudiante;
        $sex = $estudiante->sexestudiante;
        $ciu = $estudiante->ciudad;
        $bar = $estudiante->barrio;
        $prog = $estudiante->programa;

        $programas = DB::table('programas')->get();
        $ciudades = DB::table('ciudades')->get();
        $barrios = DB::table('barrios')->get();
        return view('Estudiantes.form_editar', ['id' => $id, 'nom'=>$nom, 'edad'=>$edad, 'fecha'=>$fecha, 
            'sex'=>$sex, 'ciu'=>$ciu, 'bar'=>$bar,'prog'=>$prog, 'programas'=>$programas, 'ciudades'=>$ciudades, 
            'barrios'=>$barrios
        ]);
    }
    //metodo que hace el update en la tabla y redirecciona a la lista de programas
    public function editar(Request $r, $id){
        //se recibe $r que trae los datos enviados por el formulario con el post
        //el $id que se lo envia con la ruta
        //buscar el programa por id en la base de datos
        $estudiante = Estudiante::findOrFail($id);

        //asignar los valores de los atributos a los recogidos en el request
        $estudiante->codestudiante = $r->input('codigo');
        $estudiante->nomestudiante = $r->input('nombre');
        $estudiante->edadestudiante = $r->input('edad');
        $estudiante->fechaestudiante = $r->input('f_nac');
        $estudiante->sexestudiante = $r->get('sexo');
        $estudiante->ciudad = $r->get('ciudad');
        $estudiante->barrio = $r->get('barrio');
        $estudiante->programa = $r->get('programa');

        //incertar en la tabla
        $estudiante->save();
        return redirect()->route('lista_est');
    }
    public function eliminar($id){
        //se recibe el $id que envia con la ruta
        //buscar el programa por id en la base de datos
        $estudiante=Estudiante::findOrFail($id);
        $estudiante->delete(); //elimina el estudiante
        return redirect()->route('lista_est'); // redirecciona a la vista de lista estudiantes
    }
}