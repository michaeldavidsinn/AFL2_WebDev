<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AllDeskripsi>
 */
class AllDeskripsiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'deskripsi_news' => $this->faker->paragraph,
            'deskripsi_news1' => $this->faker->paragraph,
            'deskripsi_news2' => $this->faker->paragraph,
            'deskripsi_news3' => $this->faker->paragraph,
            'deskripsi_news4' => $this->faker->paragraph,
            'deskripsi_project' => $this->faker->paragraph,
            'deskripsi_project1' => $this->faker->paragraph,
            'deskripsi_project2' => $this->faker->paragraph,
            'deskripsi_project3' => $this->faker->paragraph,
            'deskripsi_project4' => $this->faker->paragraph,
            'deskripsi_beranda' => $this->faker->paragraph,
            'deskripsi_beranda1' => $this->faker->paragraph,
            'deskripsi_beranda2' => $this->faker->paragraph,
            'deskripsi_beranda3' => $this->faker->paragraph,
            'deskripsi_beranda4' => $this->faker->paragraph,
            'deskripsi_beranda5' => $this->faker->paragraph,
        ];
    }
}
