<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\DataKeluarga;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            //ArtikelSeeder::class,
           // DataKeluargaSeeder::class,
            //DataMataKuliahSeeder::class,
            //HobiSeeder::class,
            //UserSeeder::class,
            //TransaksiSeeder::class,
            //HobiSeeder::class,
            KelasSeeder::class,
            MatakuliahSeeder::class,
            UpdateMahasiswaSeeder::class
        ]);
    }
}
