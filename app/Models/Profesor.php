<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    protected $table = 'profesores'; //tabla facultades
    protected $primaryKey = 'codprofesor'; //llave primaria de la tabla
    public $timestampos = true; //los de tiempo por defecto
}
