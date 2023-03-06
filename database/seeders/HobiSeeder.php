<?php

namespace Database\Seeders;

use App\Models\HobiModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HobiSeeder extends Seeder
{
    public function run()
    {
        DB::table('hobi')->insert([
            [
                'nama' => 'Travelling'
            ], 
            [
                'nama' => 'Tidur'
            ],
            [
                'nama' => 'Mendengarkan Musik'
            ]
            ]);
    }
}
