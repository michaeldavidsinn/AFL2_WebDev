<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AllDeskripsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('all_deskripsis')->insert([
            'deskripsi_news' => "News",
            'deskripsi_news1' => "News1",
            'deskripsi_news2' => "News2",
            'deskripsi_news3' => "News3",
            'deskripsi_news4' => "News4",
            'deskripsi_project' => "Project",
            'deskripsi_project1' => "Project1",
            'deskripsi_project2' => "Project2",
            'deskripsi_project3' => "Project3",
            'deskripsi_project4' => "Project4",
            'deskripsi_beranda' => "Beranda",
            'deskripsi_beranda1' => "Beranda1",
            'deskripsi_beranda2' => "Beranda2",
            'deskripsi_beranda3' => "Beranda3",
            'deskripsi_beranda4' => "Beranda4",
            'deskripsi_beranda5' => "Beranda5"
        ]);
    }
}
