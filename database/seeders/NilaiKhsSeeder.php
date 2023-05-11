<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NilaiKhsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nilai_khs')->insert([
            [
                'mhs_id' => '5',
                'matkul_id' => '1',
                'nilai' => 'A'
            ],
            [
                'mhs_id' => '5',
                'matkul_id' => '3',
                'nilai' => 'A'
            ],
            [
                'mhs_id' => '5',
                'matkul_id' => '5',
                'nilai' => 'A'
            ],
            [
                'mhs_id' => '10',
                'matkul_id' => '1',
                'nilai' => 'B+'
            ],
            [
                'mhs_id' => '10',
                'matkul_id' => '3',
                'nilai' => 'A'
            ],
            [
                'mhs_id' => '10',
                'matkul_id' => '5',
                'nilai' => 'B+'
            ]

        ]);
    }
}
