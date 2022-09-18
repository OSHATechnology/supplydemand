<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DetailMobil>
 */
class DetailMobilFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id_mobil' => fake()->randomDigitNot(0),
            'nama_detail' => fake()->name(),
            'th_keluar' => fake()->date(),
            'transmisi' => fake()->randomElement(['matic','manual']),
            'warna' => fake()->randomElement(['silver','black','metalic']),
            'status' => fake()->randomElement(['active','deactive'])
        ];
    }
}
