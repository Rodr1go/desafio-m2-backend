<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Internet Móvel',
            'description' => 'Pacote de internet 10MB',
            'price' => 45.00,
            'campaign_id' => 1,
        ]);
    }
}
