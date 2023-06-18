<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Str;

class CiudadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ciudades = [
            [
                'codciudad'=>'10',
                'nomcuidad'=>'Pasto',
                'departamento'=>'10'
            ],
            [
                'codciudad'=>'11',
                'nomcuidad'=>'Tumaco',
                'departamento'=>'10'
            ],
            [
                'codciudad'=>'12',
                'nomcuidad'=>'Ipiales',
                'departamento'=>'10'
            ],
            [
                'codciudad'=>'13',
                'nomcuidad'=>'Belén',
                'departamento'=>'10'
            ],
            [
                'codcuidad'=>'14',
                'nomcuidad'=>'Leticia',
                'departamento'=>'11'
            ],
            [
                'codciudad'=>'15',
                'nomcuidad'=>'Puerto Nariño',
                'departamento'=>'11'
            ],
            [
                'codciudad'=>'16',
                'nomcuidad'=>'La Pedrera',
                'departamento'=>'11'
            ],
            [
                'codciudad'=>'17',
                'nomcuidad'=>'Medellín',
                'departamento'=>'12'
            ],
            [
                'codciudad'=>'18',
                'nomcuidad'=>'Itagui',
                'departamento'=>'12'
            ],
            [
                'codciudad'=>'19',
                'nomcuidad'=>'Bello',
                'departamento'=>'12'
            ],
            [
                'codciudad'=>'20',
                'nomcuidad'=>'Malambo',
                'departamento'=>'13'
            ],
            [
                'codciudad'=>'21',
                'nomcuidad'=>'Barranquilla',
                'departamento'=>'13'
            ],
            [
                'codciudad'=>'22',
                'nomcuidad'=>'Soledad',
                'departamento'=>'13'
            ],
            [
                'codciudad'=>'23',
                'nomcuidad'=>'Cartagena de Indias',
                'departamento'=>'14'
            ],
            [
                'codciudad'=>'24',
                'nomcuidad'=>'Arjona',
                'departamento'=>'14'
            ],
        ];
        DB::table('ciudades')->insert($ciudades);
    }
}
