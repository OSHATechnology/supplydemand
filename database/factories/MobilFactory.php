<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mobil>
 */
class MobilFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id_cabang' => fake()->randomDigitNot(0),
            'nama' => fake()->name(),
            'tgl_mobil_masuk' => fake()->dateTimeThisMonth(),
            'status' => fake()->randomElement(['active','deactive'])
        ];
    }
}
