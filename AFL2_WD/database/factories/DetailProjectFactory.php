<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DetailProject>
 */
class DetailProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'jenis_pekerjaan' => $this->faker->word,
            'pemberi_pekerjaan' => $this->faker->name,
            'lokasi' => $this->faker->address,
            'nomor_telepon' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'deskripsi_pekerjaan' => $this->faker->paragraph,
            'foto_dokumentasi' => $this->faker->imageUrl()
        ];
    }
}
