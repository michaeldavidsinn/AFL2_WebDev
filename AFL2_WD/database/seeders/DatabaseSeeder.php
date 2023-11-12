<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      $this->call(AboutUsSeeder::class);
      $this->call(CompanyProfileSeeder::class);
      $this->call(NewsSeeder::class);
      $this->call(DetailProjectSeeder::class);
      $this->call(ProjectSeeder::class);
      $this->call(MisiSeeder::class);
      $this->call(LayananSeeder::class);
      $this->call(AllDeskripsiSeeder::class);

    }
}
