<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Discount;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Discount::create([
            'percentage' => '10%',
            'coupon_code' => 'DEZ-OFF',
            'campaign_id' => 1,
        ]);
    }
}
