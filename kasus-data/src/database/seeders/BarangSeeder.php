<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents; use App\Models\Barang;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Barang::firstOrCreate([
            'name' => 'Jungle Land',
            'code_barang' => '123',
            'price' => 10
        ]);
    }
}
