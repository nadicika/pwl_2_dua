<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatkulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matkul')->insert([
            [
                'kodeMk' => 'RTI214008',
                'matkul' => 'Pemrograman Web Lanjut',
                'dosen' => 'Moch. Zawaruddin Abdullah, S.ST., M.Kom.',
                'sks' => '3',
                'jam' =>'6'
            ], 
            [
                'kodeMk' => 'RTI214009',
                'matkul' => 'Statistik Komputasi',
                'dosen' => 'Elok Nur Hamdana, S.T, M.T.',
                'sks' => '2',
                'jam' =>'4'
            ],
            [
                'kodeMk' => 'RTI214004',
                'matkul' => 'Proyek 1',
                'dosen' => 'Farid Angga Pribadi, S.Kom., M.Kom.',
                'sks' => '3',
                'jam' =>'6'
            ],
            [
                'kodeMk' => 'RTI214005',
                'matkul' => 'Business Intelligence',
                'dosen' => 'Endah Septa Sintiya, S.Pd., M.Kom.',
                'sks' => '2',
                'jam' =>'4'
            ],
            [
                'kodeMk' => 'RTI214006',
                'matkul' => 'Jaringan Komputer',
                'dosen' => 'Kadek Suarjuna Batubulan, S.Kom., M.T.',
                'sks' => '2',
                'jam' =>'4'
            ],
            [
                'kodeMk' => 'RTI214003',
                'matkul' => 'Manajemen Proyek',
                'dosen' => 'Candra Bella Vista, S.Kom., M.T.',
                'sks' => '2',
                'jam' =>'3'
            ]
            ]);
    }
}
