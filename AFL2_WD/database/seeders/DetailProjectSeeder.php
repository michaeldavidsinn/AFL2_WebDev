<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('detail_projects')->insert([

            'jenis_pekerjaan' => "Jasa Pembuatan Website",
            'pemberi_pekerjaan' => "PT. Paulu",
            'lokasi' => "Surabaya",
            'nomor_telepon' => "08115912599",
            'email' => "michaelsin04@gmail.com",
            'deskripsi_pekerjaan' => "Kami mencari penyedia jasa untuk membantu kami dalam pembuatan website perusahaan. Website ini diharapkan memiliki desain yang menarik dan fungsionalitas yang sesuai dengan kebutuhan bisnis kami. Proyek ini mencakup pengembangan front-end dan back-end serta integrasi dengan beberapa layanan pihak ketiga. Kami berharap untuk bekerja sama dengan profesional yang berpengalaman dalam bidang ini.",
            'foto_dokumentasi' => "detailproject_image1.jpg"
        ]);

        DB::table('detail_projects')->insert([
            'jenis_pekerjaan' => "Jasa Desain Grafis",
            'pemberi_pekerjaan' => "PT. ABC",
            'lokasi' => "Jakarta",
            'nomor_telepon' => "08123456788",
            'email' => "abc@example.com",
            'deskripsi_pekerjaan' => "Deskripsi pekerjaan untuk proyek Desain Grafis di Jakarta.",
            'foto_dokumentasi' => "detailproject_image2.jpg"
        ]);

        DB::table('detail_projects')->insert([
            'jenis_pekerjaan' => "Pengembangan Aplikasi Mobile",
            'pemberi_pekerjaan' => "PT. XYZ",
            'lokasi' => "Bandung",
            'nomor_telepon' => "08123456787",
            'email' => "xyz@example.com",
            'deskripsi_pekerjaan' => "Deskripsi pekerjaan untuk proyek Pengembangan Aplikasi Mobile di Bandung.",
            'foto_dokumentasi' => "detailproject_image3.jpg"
        ]);

        DB::table('detail_projects')->insert([
            'jenis_pekerjaan' => "Pengembangan Web Aplikasi",
            'pemberi_pekerjaan' => "PT. QWERTY",
            'lokasi' => "Yogyakarta",
            'nomor_telepon' => "08123456786",
            'email' => "qwerty@example.com",
            'deskripsi_pekerjaan' => "Deskripsi pekerjaan untuk proyek Pengembangan Web Aplikasi di Yogyakarta.",
            'foto_dokumentasi' => "detailproject_image4.jpg"
        ]);

        // DB::table('detail_projects') kelima
        DB::table('detail_projects')->insert([
            'jenis_pekerjaan' => "Pengembangan Sistem ERP",
            'pemberi_pekerjaan' => "PT. Zebra",
            'lokasi' => "Semarang",
            'nomor_telepon' => "08123456785",
            'email' => "zebra@example.com",
            'deskripsi_pekerjaan' => "Deskripsi pekerjaan untuk proyek Pengembangan Sistem ERP di Semarang.",
            'foto_dokumentasi' => "detailproject_image5.jpg"
        ]);

        // DB::table('detail_projects') keenam
        DB::table('detail_projects')->insert([
            'jenis_pekerjaan' => "Pengembangan Sistem Database",
            'pemberi_pekerjaan' => "PT. Zera",
            'lokasi' => "Kendal",
            'nomor_telepon' => "08123456784",
            'email' => "zera@example.com",
            'deskripsi_pekerjaan' => "Deskripsi pekerjaan untuk proyek Pengembangan Sistem Database di Kendal.",
            'foto_dokumentasi' => "detailproject_image6.jpg"
        ]);

        // DB::table('detail_projects') ketujuh
        DB::table('detail_projects')->insert([
            'jenis_pekerjaan' => "Jasa SEO",
            'pemberi_pekerjaan' => "PT. Raptor",
            'lokasi' => "Surabaya",
            'nomor_telepon' => "08123456783",
            'email' => "raptor@example.com",
            'deskripsi_pekerjaan' => "Deskripsi pekerjaan untuk proyek Jasa SEO di Surabaya.",
            'foto_dokumentasi' => "detailproject_image7.jpg"
        ]);

        // DB::table('detail_projects') kedelapan
        DB::table('detail_projects')->insert([
            'jenis_pekerjaan' => "Pengembangan Aplikasi E-commerce",
            'pemberi_pekerjaan' => "PT. Acme",
            'lokasi' => "Medan",
            'nomor_telepon' => "08123456782",
            'email' => "acme@example.com",
            'deskripsi_pekerjaan' => "Deskripsi pekerjaan untuk proyek Pengembangan Aplikasi E-commerce di Medan.",
            'foto_dokumentasi' => "detailproject_image8.jpg"
        ]);

        // DB::table('detail_projects') kesembilan
        DB::table('detail_projects')->insert([
            'jenis_pekerjaan' => "Pengembangan Aplikasi Mobile",
            'pemberi_pekerjaan' => "PT. Harmony",
            'lokasi' => "Bali",
            'nomor_telepon' => "08123456781",
            'email' => "harmony@example.com",
            'deskripsi_pekerjaan' => "Deskripsi pekerjaan untuk proyek Pengembangan Aplikasi Mobile di Bali.",
            'foto_dokumentasi' => "detailproject_image9.jpg"
        ]);

        // DB::table('detail_projects') kesepuluh
        DB::table('detail_projects')->insert([
            'jenis_pekerjaan' => "Jasa Desain Logo",
            'pemberi_pekerjaan' => "PT. Vortex",
            'lokasi' => "Makassar",
            'nomor_telepon' => "08123456780",
            'email' => "vortex@example.com",
            'deskripsi_pekerjaan' => "Deskripsi pekerjaan untuk proyek Jasa Desain Logo di Makassar.",
            'foto_dokumentasi' => "detailproject_image10.jpg"
        ]);

        // DB::table('detail_projects') kesebelas
        DB::table('detail_projects')->insert([
            'jenis_pekerjaan' => "Pengembangan Aplikasi Web",
            'pemberi_pekerjaan' => "PT. Unity",
            'lokasi' => "Pontianak",
            'nomor_telepon' => "08123456779",
            'email' => "unity@example.com",
            'deskripsi_pekerjaan' => "Deskripsi pekerjaan untuk proyek Pengembangan Aplikasi Web di Pontianak.",
            'foto_dokumentasi' => "detailproject_image11.jpg"
        ]);

        // DB::table('detail_projects') keduabelas
        DB::table('detail_projects')->insert([
            'jenis_pekerjaan' => "Pengembangan Sistem Keuangan",
            'pemberi_pekerjaan' => "PT. Phoenix",
            'lokasi' => "Palembang",
            'nomor_telepon' => "08123456778",
            'email' => "phoenix@example.com",
            'deskripsi_pekerjaan' => "Deskripsi pekerjaan untuk proyek Pengembangan Sistem Keuangan di Palembang.",
            'foto_dokumentasi' => "detailproject_image12.jpg"
        ]);
    }
}
