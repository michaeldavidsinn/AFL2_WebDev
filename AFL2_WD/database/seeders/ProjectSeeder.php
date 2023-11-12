<?php

namespace Database\Seeders;

use App\Models\DetailProject;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

            DB::table('projects')->insert([

                'lokasi' => "Surabaya",
                'pemberi_pekerjaan' => "PT. Paulu",
                'jenis_pekerjaan' => "Jasa Pembuatan Website",
                'tanggal' => "2022, Februari 23",
                'detail_project_id' => 1
            ]);

            DB::table('projects')->insert([

                'lokasi' => "Jakarta",
                'pemberi_pekerjaan' => "PT. ABC",
                'jenis_pekerjaan' => "Jasa Desain Grafis",
                'tanggal' => "2022, Maret 15",
                'detail_project_id' => 2
            ]);

            DB::table('projects')->insert([

                'lokasi' => "Bandung",
                'pemberi_pekerjaan' => "PT. XYZ",
                'jenis_pekerjaan' => "Pengembangan Aplikasi Mobile",
                'tanggal' => "2022, April 10",
                'detail_project_id' => 3
            ]);

            DB::table('projects')->insert([

                'lokasi' => "Yogyakarta",
                'pemberi_pekerjaan' => "PT. QWERTY",
                'jenis_pekerjaan' => "Pengembangan Web Aplikasi",
                'tanggal' => "2022, Mei 5",
                'detail_project_id' => 4
            ]);

            DB::table('projects')->insert([

                'lokasi' => "Semarang",
                'pemberi_pekerjaan' => "PT. Zebra",
                'jenis_pekerjaan' => "Pengembangan Sistem ERP",
                'tanggal' => "2022, Juni 20",
                'detail_project_id' => 5

            ]);

            DB::table('projects')->insert([

                'lokasi' => "Kendal",
                'pemberi_pekerjaan' => "PT. Zera",
                'jenis_pekerjaan' => "Pengembangan Sistem Database",
                'tanggal' => "2021, Juli 20",
                'detail_project_id' => 6
            ]);

            DB::table('projects')->insert([

                'lokasi' => "Surabaya",
                'pemberi_pekerjaan' => "PT. Raptor",
                'jenis_pekerjaan' => "Jasa SEO",
                'tanggal' => "2022, Juli 10",
                'detail_project_id' => 7
            ]);

            DB::table('projects')->insert([

                'lokasi' => "Medan",
                'pemberi_pekerjaan' => "PT. Acme",
                'jenis_pekerjaan' => "Pengembangan Aplikasi E-commerce",
                'tanggal' => "2022, Agustus 5",
                'detail_project_id' => 8
            ]);

            DB::table('projects')->insert([

                'lokasi' => "Bali",
                'pemberi_pekerjaan' => "PT. Harmony",
                'jenis_pekerjaan' => "Pengembangan Aplikasi Mobile",
                'tanggal' => "2022, September 15",
                'detail_project_id' => 9
            ]);

            DB::table('projects')->insert([

                'lokasi' => "Makassar",
                'pemberi_pekerjaan' => "PT. Vortex",
                'jenis_pekerjaan' => "Jasa Desain Logo",
                'tanggal' => "2022, Oktober 10",
                'detail_project_id' => 10
            ]);

            DB::table('projects')->insert([

                'lokasi' => "Pontianak",
                'pemberi_pekerjaan' => "PT. Unity",
                'jenis_pekerjaan' => "Pengembangan Aplikasi Web",
                'tanggal' => "2022, November 5",
                'detail_project_id' => 11
            ]);

            DB::table('projects')->insert([

                'lokasi' => "Palembang",
                'pemberi_pekerjaan' => "PT. Phoenix",
                'jenis_pekerjaan' => "Pengembangan Sistem Keuangan",
                'tanggal' => "2022, Desember 25",
                'detail_project_id' => 12
            ]);
        }
    }

