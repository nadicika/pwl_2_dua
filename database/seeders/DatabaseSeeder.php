<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\KendaraanModel;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*$this->call([
            KendaraanSeeder::class
        ]);*/

        /*$this->call([
            HobiSeeder::class
        ]);*/
        /*$this->call([
            KeluargaSeeder::class
        ]);*/
        $this->call([
            MatkulSeeder::class
        ]);
    }
}
