<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table = 'estudiantes'; //tabla estudiantes
    protected $primaryKey = 'codestudiante'; //llave primaria de la tabla
    public $timestampos = true; //los de tiempo por defecto
}
