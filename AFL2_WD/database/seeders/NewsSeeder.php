<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
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
            'foto' => "https://www.youtube.com/embed/LzN3WPeIhtY?si=NNYPduRcnDL8s1qZ",
            'tanggal' => "22 November 2021"
        ]);

        DB::table('news')->insert([

            'judul' => "Pencapaian Keuangan Tahunan",
            'deskripsi' => "Perusahaan ABC melaporkan pertumbuhan pendapatan tahunan sebesar 20%.",
            'foto' => "https://www.youtube.com/embed/bgTJl8nL2tw?si=COqc9TShdw6ZWKsl",
            'tanggal' => "2021-12-10"
        ]);

        DB::table('news')->insert([

            'judul' => "Perusahaan Memenangkan Penghargaan",
            'deskripsi' => "Perusahaan ABC meraih penghargaan industri untuk inovasi terbaru mereka.",
            'foto' => "https://www.youtube.com/embed/3TqCva30wno?si=KNklrQ1KV-Zw5bqf",
            'tanggal' => "2022-01-15"
        ]);

        DB::table('news')->insert([

            'judul' => "Ekspansi Internasional",
            'deskripsi' => "Perusahaan ABC membuka kantor cabang baru di luar negeri.",
            'foto' => "https://www.youtube.com/embed/3sQvA52c48Y?si=3MA-I9K0bPTEyySF",
            'tanggal' => "2022-02-28"
        ]);

        DB::table('news')->insert([

            'judul' => "Perusahaan Merayakan Jubilasi Ke-30",
            'deskripsi' => "Perusahaan ABC merayakan ulang tahun ke-30 dengan berbagai acara dan penawaran spesial.",
            'foto' => "https://www.youtube.com/embed/lhCK13O4Me0?si=Und4N6yHTiGuVAxp",
            'tanggal' => "2022-03-10"
        ]);
    }
}
