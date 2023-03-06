<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KendaraanSeeder extends Seeder
{
    public function run()
    {
        DB::table('kendaraan')->insert([
            [
                'nopol' => 'N8768FA',
                'merk' => 'Honda',
                'jenis' => 'HRV',
                'tahun_buat' => '2022',
                'warna' => 'Sage'
            ], 
            [
                'nopol' => 'AG81902YZ',
                'merk' => 'Hyundai',
                'jenis' => 'Creta Prestige',
                'tahun_buat' => '2022',
                'warna' => 'Putih'
            ]
            ]);
    }
}
