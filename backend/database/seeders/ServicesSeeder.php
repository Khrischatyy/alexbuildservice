<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            ['name' => 'Electrical', 'icon' => 'bolt', 'order' => 1],
            ['name' => 'Plumbing', 'icon' => 'faucet-drip', 'order' => 2],
            ['name' => 'Painting', 'icon' => 'paint-roller', 'order' => 3],
            ['name' => 'Tile Jobs', 'icon' => 'th-large', 'order' => 4],
            ['name' => 'Lumber', 'icon' => '/assets/services/Lumber.svg', 'order' => 5],
            ['name' => 'Kitchen Cabinets', 'icon' => '/assets/services/Kitchen cabinets.svg', 'order' => 6],
            ['name' => 'Countertops', 'icon' => '/assets/services/Countertop.svg', 'order' => 7],
            ['name' => 'Floor Installation', 'icon' => '/assets/services/floor.svg', 'order' => 8],
            ['name' => 'Drywall Installation', 'icon' => '/assets/services/Drywall.svg', 'order' => 9],
            ['name' => 'HVAC/Ventilation', 'icon' => 'fan', 'order' => 10],
            ['name' => 'Wood Restoration', 'icon' => 'brush', 'order' => 11],
            ['name' => 'Handyman Services', 'icon' => 'tools', 'order' => 12],
        ];

        foreach ($services as $service) {
            DB::table('services')->insert([
                'name' => $service['name'],
                'icon' => $service['icon'],
                'order' => $service['order'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
