<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Str;

class ProfesoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $profesores = [
            [
                'codprofesor'=>'10',
                'nomprofesor'=>'Javier Jimenéz',
                'catprofesor'=>'PI1'
            ],
            [
                'codprofesor'=>'11',
                'nomprofesor'=>'Juan Castillo',
                'catprofesor'=>'RD'
            ],
            [
                'codprofesor'=>'12',
                'nomprofesor'=>'Jesús Insuati',
                'catprofesor'=>'RN'
            ],
            [
                'codprofesor'=>'13',
                'nomprofesor'=>'Sandra Marcela',
                'catprofesor'=>'TAIS'
            ],
            [
                'codprofesor'=>'14',
                'nomprofesor'=>'Javier Villalva',
                'catprofesor'=>'GEBT'
            ],
        ];
        DB::table('profesores')->insert($profesores);
    }
}
