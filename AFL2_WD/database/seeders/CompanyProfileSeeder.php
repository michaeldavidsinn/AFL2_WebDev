<?php

namespace Database\Seeders;

use App\Models\CompanyProfile;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanyProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('company_profiles')->insert([

            'tentang_kami' => "Perusahaan Teknologi ABC adalah sebuah perusahaan IT inovatif yang berfokus pada pengembangan solusi perangkat lunak dan layanan teknologi tingkat tinggi. Kami memiliki tim berpengalaman yang berkomitmen untuk memberikan solusi terbaik kepada klien kami.",
            'visi' => "Menjadi pemimpin dalam industri teknologi dengan berfokus pada inovasi dan keunggulan dalam pengembangan perangkat lunak.",
            'misi' => "Memberikan solusi teknologi canggih yang memenuhi kebutuhan klien kami, menjaga komitmen terhadap kualitas, dan membangun hubungan jangka panjang dengan pelanggan.",
            'sejarah' => "Perusahaan Teknologi ABC didirikan pada tahun 2010. Sejak itu, kami telah sukses dalam menyediakan solusi teknologi terbaik kepada berbagai klien dari berbagai industri. Perjalanan kami dimulai sebagai sebuah startup ambisius dengan tim kecil. Namun, dengan semangat inovasi dan komitmen yang kuat terhadap kepuasan pelanggan, kami berhasil tumbuh dan berkembang pesat. Selama lebih dari satu dekade, kami telah menciptakan berbagai solusi perangkat lunak yang telah mengubah cara bisnis beroperasi dan memberikan nilai tambah kepada klien kami. Kami percaya bahwa masa depan teknologi adalah cerah, dan kami berencana untuk terus menjadi pemimpin dalam industri ini dengan terus menghadirkan inovasi terbaru."
        ]);
    }
}
