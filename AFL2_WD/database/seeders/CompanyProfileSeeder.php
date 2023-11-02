<?php

namespace Database\Seeders;

use App\Models\CompanyProfile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanyProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CompanyProfile::factory()->create([
            
            'tentang_kami' => 'This is some information about us.',
            'visi' => 'Our vision statement goes here.',
            'misi' => 'Our mission statement is important.',
            'sejarah' => 'A brief history of our company.',
        ]);
    }
}
