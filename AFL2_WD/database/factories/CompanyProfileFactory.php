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
            'visi' => $this->faker->sentence,
            'misi' => $this->faker->sentence,
            'sejarah' => $this->faker->paragraph,
        ];
    }
}
