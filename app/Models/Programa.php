<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    protected $table = 'programas'; //tabla programas
    protected $primaryKey = 'codprograma'; //llave primaria de la tabla
    public $timestampos = true; //los de tiempo por defecto
}
