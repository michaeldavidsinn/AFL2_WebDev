<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\AboutUs;
use Illuminate\Database\Seeder;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('about_us')->insert([

            'alamat' => "Pakuwon Mall",
            'nomor_telepon' => "0930429344",
            'email' => "stevennelson@gmail.com",
            'jam_kerja' => "09.00"
        ]);


    }
}
