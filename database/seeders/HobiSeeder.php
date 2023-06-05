<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HobiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('hobis')->insert([
            [
                'id' => 1,
                'hobi' => 'Batminton',
            ],
            [
                'id' => 2,
                'hobi' => 'Volly',
            ],
            [
                'id' => 3,
                'hobi' => 'Futsal',
            ]
        ]);
    }
}
