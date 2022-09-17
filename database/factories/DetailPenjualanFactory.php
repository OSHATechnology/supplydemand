<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DetailPenjualan>
 */
class DetailPenjualanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id_penjualan' => fake()->randomDigitNot(0),
            'id_barang' => fake()->randomDigitNot(0),
            'qty' => fake()->randomNumber(2,true),
            'harga_jual' => fake()->randomNumber(5,true)
        ];
    }
}
