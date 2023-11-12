<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
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

            'alamat' => "CitraLand CBD Bouleveard, Made, Kec.Sambikerep, Surabaya, Jawa Timur 60219",
            'nomor_telepon' => "+62 123-4567891",
            'email' => "info@mamanktehc.co.id",
            'jam_kerja' => "Senin-Sabtu : 08.00 - 14.30"
        ]);


    }
}
