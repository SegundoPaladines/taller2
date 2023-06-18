<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Str;

class ProgramasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $programas=[
            ['codprograma'=>'1',
            'nomprograma'=>'Ingeniería de Sistemas',
            'facultad'=>'11'
            ],
            ['codprograma'=>'2',
            'nomprograma'=>'Ingeniería Cívil',
            'facultad'=>'11'
            ],
            ['codprograma'=>'3',
            'nomprograma'=>'Ingeniería Electrónica',
            'facultad'=>'11'
            ],
            ['codprograma'=>'4',
            'nomprograma'=>'Diseño Grafico',
            'facultad'=>'10'
            ],
            ['codprograma'=>'5',
            'nomprograma'=>'Licenciatura en Inglés',
            'facultad'=>'14'
            ],
        ];
        DB::table('programas')->insert($programas);
    }
}
