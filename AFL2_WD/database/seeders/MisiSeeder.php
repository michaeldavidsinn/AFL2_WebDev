<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('misis')->insert([

            'judul_misi' => "Judul Misi",
            'deskripsi_misi' => "Deskripsi Misi",
        ]);
    }
}
