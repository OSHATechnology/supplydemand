<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Barang;
use App\Models\Cabang;
use App\Models\DetailMobil;
use App\Models\DetailPenjualan;
use App\Models\JenisBarang;
use App\Models\Mobil;
use App\Models\Penjualan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Barang::factory(50)->create();
        Cabang::factory(20)->create();
        Mobil::factory(100)->create();
        Penjualan::factory(999)->create();
        DetailMobil::factory(100)->create();
        DetailPenjualan::factory(100)->create();
        JenisBarang::factory(100)->create();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
