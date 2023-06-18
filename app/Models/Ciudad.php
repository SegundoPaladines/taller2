<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $table = 'ciudades'; //tabla Ciudades
    protected $primaryKey = 'codciudad'; //llave primaria de la tabla
    public $timestampos = true; //los de tiempo por defecto
}
