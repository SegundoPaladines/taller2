<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Str;

class DepartamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departamentos = [
            [
                'coddepto'=>'10',
                'nomdepto'=>'Nariño'
            ],
            [
                'coddepto'=>'11',
                'nomdepto'=>'Amazonas'
            ],
            [
                'coddepto'=>'12',
                'nomdepto'=>'Antioquia'
            ],
            [
                'coddepto'=>'13',
                'nomdepto'=>'Atlantico'
            ],
            [
                'coddepto'=>'14',
                'nomdepto'=>'Bolivar'
            ],
        ];
        DB::table('departamentos')->insert($departamentos);
    }
}
