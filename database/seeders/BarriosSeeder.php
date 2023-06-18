<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Str;

class BarriosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $barrios= [
            [
                'codbarrio'=>'5',
                'nombarrio'=>'Barrio 1',
                'estbarrio'=>'1',
                'comuna'=>'5'
            ],
            [
                'codbarrio'=>'10',
                'nombarrio'=>'Barrio 2',
                'estbarrio'=>'3',
                'comuna'=>'10'
            ],
            [
                'codbarrio'=>'15',
                'nombarrio'=>'Barrio 3',
                'estbarrio'=>'2',
                'comuna'=>'15'
            ],

        ];
        DB::table('barrios')->insert($barrios);
    }
}