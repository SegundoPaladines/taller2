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
                'nomfacultad'=>'Facultad de Artes'
            ],
            [
                'codfacultad'=>'11',
                'nomfacultad'=>'Facultad de Ingeniería'
            ],
            [
                'codfacultad'=>'12',
                'nomfacultad'=>'Facultad Derecho'
            ],
            [
                'codfacultad'=>'13',
                'nomfacultad'=>'Ciencias Exactas y Naturales'
            ],
            [
                'codfacultad'=>'14',
                'nomfacultad'=>' Facultad de Idiomas'
            ],
        ];
        DB::table('facultades')->insert($facultades);
    }
}
