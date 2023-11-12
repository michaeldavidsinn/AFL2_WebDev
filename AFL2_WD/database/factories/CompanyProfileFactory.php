<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CompanyProfile>
 */
class CompanyProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tentang_kami' => $this->faker->paragraph,
            'tentang_kami1' => $this->faker->sentence,
            'tentang_kami2' => $this->faker->sentence,
            'tentang_kami3' => $this->faker->sentence,
            'tentang_kami4' => $this->faker->sentence,
            'tentang_kami5' => $this->faker->sentence,
            'layanan_judul1' => $this->faker->sentence,
            'layanan_deskripsi1' => $this->faker->sentence,
            'layanan_judul2' => $this->faker->sentence,
            'layanan_deskripsi2' => $this->faker->sentence,
            'layanan_judul3' => $this->faker->sentence,
            'layanan_deskripsi3' => $this->faker->sentence,
            'layanan_judul4' => $this->faker->sentence,
            'layanan_deskripsi4' => $this->faker->sentence,
            'visi' => $this->faker->sentence,
            'misi_judul1'=> $this->faker->sentence,
            'misi_deskripsi1'=> $this->faker->sentence,
            'misi_judul2'=> $this->faker->sentence,
            'misi_deskripsi2'=> $this->faker->sentence,
            'misi_judul3'=> $this->faker->sentence,
            'misi_deskripsi3'=> $this->faker->sentence,
            'misi_judul4'=> $this->faker->sentence,
            'misi_deskripsi4'=> $this->faker->sentence,
            'misi_judul1'=> $this->faker->sentence,
            'misi_deskripsi1'=> $this->faker->sentence,
            'sejarah' => $this->faker->paragraph,
            'sejarah1' => $this->faker->paragraph,
            'sejarah2' => $this->faker->paragraph,
            'sejarah3' => $this->faker->paragraph
        ];
    }
}
