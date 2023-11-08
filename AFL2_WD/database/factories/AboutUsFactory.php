<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AboutUs>
 */
class AboutUsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
      
        return [
                'alamat' => $this->faker->address,
                'nomor_telepon' => $this->faker->phoneNumber,
                'email' => $this->faker->email,
                'jam_kerja' => $this->faker->sentence,
        ];
    }
}
