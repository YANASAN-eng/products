<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Company;
class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        company::create([
            'company_name' => 'Coca-Cola',
            'street_address' => '東京都渋谷区渋谷4丁目6番3号',
            'representative_name' => 'カリン・ドラガン',
        ]);
        company::create([
            'company_name' => 'サントリー',
            'street_address' => '東京都港区台場2-3-3',
            'representative_name' => '佐治 信忠',
        ]);
        company::create([
            'company_name' => 'キリン',
            'street_address' => '東京都中野区中野四丁目10番2号 中野セントラルパークサウス',
            'representative_name' => '磯崎 功典',
        ]);
    }
}
