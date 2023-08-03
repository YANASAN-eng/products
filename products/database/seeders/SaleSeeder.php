<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sale;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        sale::create([
            'product_id' => '1',
        ]);
        sale::create([
            'product_id' => '2'
        ]);
        sale::create([
            'product_id' => '3',
        ]);
    }
}
