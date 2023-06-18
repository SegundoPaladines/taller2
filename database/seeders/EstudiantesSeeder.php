<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Str;

class EstudiantesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $estudiantes = [
            [
                'codestudiante' => '1',
                'nomestudiante' => 'Juan Carmilla',
                'edadestudiante' => '16',
                'fechaestudiante' => '2000-01-16',
                'sexestudiante' => 'M',
                'ciudad' => '23',
                'barrio' => '5',
                'programa' => '1'
            ],
            [
                'codestudiante' => '2',
                'nomestudiante' => 'Camilla Ordoñez',
                'edadestudiante' => '25',
                'fechaestudiante' => '1998-05-11',
                'sexestudiante' => 'F',
                'ciudad' => '11',
                'barrio' => '10',
                'programa' => '1'
            ],
            [
                'codestudiante' => '3',
                'nomestudiante' => 'Juana Zambrano',
                'edadestudiante' => '26',
                'fechaestudiante' => '1997-01-16',
                'sexestudiante' => 'F',
                'ciudad' => '13',
                'barrio' => '15',
                'programa' => '1'
            ],
            [
                'codestudiante' => '4',
                'nomestudiante' => 'Samuel Castilo',
                'edadestudiante' => '16',
                'fechaestudiante' => '2006-01-16',
                'sexestudiante' => 'M',
                'ciudad' => '15',
                'barrio' => '10',
                'programa' => '1'
            ],
            [
                'codestudiante' => '5',
                'nomestudiante' => 'Armando Bolaños',
                'edadestudiante' => '23',
                'fechaestudiante' => '2000-01-16',
                'sexestudiante' => 'M',
                'ciudad' => '20',
                'barrio' => '5',
                'programa' => '1'
            ],
        ];        
        DB::table('estudiantes')->insert($estudiantes);
    }
}
