<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Penjualan>
 */
class PenjualanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'tgl_penjualan' => fake()->dateTimeThisMonth(),
            'invoice' => fake()->iban('INV'),
            'total_pembayaran' => fake()->randomNumber(5,true),
            'status' => fake()->randomElement(['active','deactive'])
        ];
    }
}
