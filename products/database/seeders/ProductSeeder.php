<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Product::create([
        'company_id' => '1',
        'product_name' => 'コーラー',
        'price' => '130',
        'stock' => '10',
        'comment' => '',
        'img_path' => '商品画像',
       ]);
       Product::create([
        'company_id' => '2',
        'product_name' => 'お茶',
        'price' => '130',
        'stock' => '6',
        'comment' => '',
        'img_path' => '商品画像',
       ]);
       Product::create([
        'company_id' => '3',
        'product_name' => '水',
        'price' => '110',
        'stock' => '6',
        'comment' => '',
        'img_path' => '商品画像',
       ]);
    }
}
