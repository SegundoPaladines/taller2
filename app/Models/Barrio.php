<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barrio extends Model
{
    protected $table = 'barrios'; //tabla barrios
    protected $primaryKey = 'codbarrio'; //llave primaria de la tabla
    public $timestampos = true; //los de tiempo por defecto
}
