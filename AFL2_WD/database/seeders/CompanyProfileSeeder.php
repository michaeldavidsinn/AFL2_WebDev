<?php

namespace Database\Seeders;

use App\Models\CompanyProfile;
use Illuminate\Support\Facades\DB;
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

            'tentang_kami' => "Mamank Tech Company adalah perusahaan jasa kreatif yang terus menerus berinovasi dalam dunia digital. Berbasis di Jakarta, Indonesia, kami telah menjadi salah satu pelopor dalam penyediaan solusi kreatif yang mencakup berbagai bidang, seperti pembuatan website, desain grafis, videografi, dan berbagai layanan terkait. Kami berkomitmen untuk membantu klien kami mencapai tujuan bisnis mereka melalui penggunaan teknologi terkini dan ide-ide kreatif yang segar.",
            'tentang_kami1' => "tentang kami 1",
            'tentang_kami2' => "tentang kami 2",
            'tentang_kami3' => "tentang kami 3",
            'tentang_kami4' => "tentang kami 4",
            'tentang_kami5' => "tentang kami 5",
            'visi' => "Menjadi pemimpin dalam industri teknologi dengan berfokus pada inovasi dan keunggulan dalam pengembangan perangkat lunak.",
            'misi' => "Memberikan solusi teknologi canggih yang memenuhi kebutuhan klien kami, menjaga komitmen terhadap kualitas, dan membangun hubungan jangka panjang dengan pelanggan.",
            'sejarah' => "Perusahaan Teknologi ABC didirikan pada tahun 2010. Sejak itu, kami telah sukses dalam menyediakan solusi teknologi terbaik kepada berbagai klien dari berbagai industri. Perjalanan kami dimulai sebagai sebuah startup ambisius dengan tim kecil. Namun, dengan semangat inovasi dan komitmen yang kuat terhadap kepuasan pelanggan, kami berhasil tumbuh dan berkembang pesat. Selama lebih dari satu dekade, kami telah menciptakan berbagai solusi perangkat lunak yang telah mengubah cara bisnis beroperasi dan memberikan nilai tambah kepada klien kami. Kami percaya bahwa masa depan teknologi adalah cerah, dan kami berencana untuk terus menjadi pemimpin dalam industri ini dengan terus menghadirkan inovasi terbaru.",
            'sejarah1' => "sejarah 1",
            'sejarah2' => "sejarah 2",
            'sejarah3' => "sejarah 3"
        ]);
    }
}
