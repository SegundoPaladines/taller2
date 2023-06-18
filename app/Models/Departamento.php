<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = 'departamentos'; //tabla departamentos
    protected $primaryKey = 'coddepto'; //llave primaria de la tabla
    public $timestampos = true; //los de tiempo por defecto
}
