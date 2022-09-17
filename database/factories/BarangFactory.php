<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class BarangFactory extends Factory
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
            'id_jenis_barang' => fake()->randomDigitNot(0),
            'tgl_barang_masuk' => fake()->dateTimeThisMonth(),
            'nama' => fake()->name(),
            'harga' => fake()->randomNumber(5,true),
            'stock' => fake()->numerify(),
            'status' => fake()->randomElement(['active','deactive'])
        ];
    }
}
