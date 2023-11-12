<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('layanans')->insert([

            'nama_Layanan' => "Nama Layanan",
            'deskripsi_layanan' => "Deskripsi Layanan",
        ]);
    }
}
