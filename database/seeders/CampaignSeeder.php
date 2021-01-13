<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Campaign;

class CampaignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Campaign::create([
            'name' => 'Campanha 1',
            'description' => 'Lorem ipsum',
            'status' => 1,
        ]);
    }
}
