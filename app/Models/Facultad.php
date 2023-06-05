<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facultad extends Model
{
    protected $table = 'facultades'; //tabla facultades
    protected $primaryKey = 'codfacultad'; //llave primaria de la tabla
    public $timestampos = true; //los de tiempo por defecto
}
