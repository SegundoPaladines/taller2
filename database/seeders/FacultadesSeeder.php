<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Str;

class FacultadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $facultades = [
            [
                'codfacultad'=>'10',
                'nomfacultad'=>'Diseño Grafico'
            ],
            [
                'codfacultad'=>'11',
                'nomfacultad'=>'Ingeniería'
            ],
            [
                'codfacultad'=>'12',
                'nomfacultad'=>'Derecho'
            ],
            [
                'codfacultad'=>'13',
                'nomfacultad'=>'Ciencias Exactas y Naturales'
            ],
            [
                'codfacultad'=>'14',
                'nomfacultad'=>'Idiomas'
            ],
        ];
        DB::table('facultades')->insert($facultades);
    }
}
