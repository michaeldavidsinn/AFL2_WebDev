<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\News;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('news')->insert([

            'judul' => "Peluncuran Produk Baru",
            'deskripsi' => "Perusahaan ABC meluncurkan produk terbaru yang revolusioner di pasar.",
            'foto' => "news_image1.jpg",
            'tanggal' => "22 November 2021"
        ]);

        DB::table('news')->insert([

            'judul' => "Pencapaian Keuangan Tahunan",
            'deskripsi' => "Perusahaan ABC melaporkan pertumbuhan pendapatan tahunan sebesar 20%.",
            'foto' => "news_image2.jpg",
            'tanggal' => "2021-12-10"
        ]);

        DB::table('news')->insert([

            'judul' => "Perusahaan Memenangkan Penghargaan",
            'deskripsi' => "Perusahaan ABC meraih penghargaan industri untuk inovasi terbaru mereka.",
            'foto' => "news_image3.jpg",
            'tanggal' => "2022-01-15"
        ]);

        DB::table('news')->insert([

            'judul' => "Ekspansi Internasional",
            'deskripsi' => "Perusahaan ABC membuka kantor cabang baru di luar negeri.",
            'foto' => "news_image4.jpg",
            'tanggal' => "2022-02-28"
        ]);

        DB::table('news')->insert([

            'judul' => "Perusahaan Merayakan Jubilasi Ke-30",
            'deskripsi' => "Perusahaan ABC merayakan ulang tahun ke-30 dengan berbagai acara dan penawaran spesial.",
            'foto' => "news_image5.jpg",
            'tanggal' => "2022-03-10"
        ]);
    }
}
