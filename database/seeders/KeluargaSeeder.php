<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeluargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('keluarga')->insert([
            [
                'nama' => 'Prayogi Kurniawan',
                'umur' => '44',
                'status' => 'Ayah'
            ], 
            [
                'nama' => 'Iin Yuliastuti',
                'umur' => '44',
                'status' => 'Ibu'
            ],
            [
                'nama' => 'Muhammad Alfanugi Kurniawan',
                'umur' => '23',
                'status' => 'Kakak'
            ]
            ]);
    }
}
