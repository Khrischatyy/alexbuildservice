<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $works = [
            ['title' => 'Smart Home', 'image' => '/assets/works/smart home.jpg', 'order' => 1],
            ['title' => 'General Remodeling', 'image' => '/assets/works/generalremodeling.jpg', 'order' => 2],
            ['title' => 'Kitchen Remodeling', 'image' => '/assets/works/kitchen.jpeg', 'order' => 3],
            ['title' => 'Bedroom Remodeling', 'image' => '/assets/works/bedroom remodeling.jpg', 'order' => 4],
            ['title' => 'Garage Renovation', 'image' => '/assets/works/garage.webp', 'order' => 5],
            ['title' => 'Bathroom Remodeling', 'image' => '/assets/works/Bathroom.jpg', 'order' => 6],
            ['title' => 'Outside Restoration', 'image' => '/assets/works/outside.jpeg', 'order' => 7],
            ['title' => 'Closets Remodeling', 'image' => '/assets/works/closets.jpg', 'order' => 8],
            ['title' => 'ADU Construction', 'image' => '/assets/works/ADU.webp', 'order' => 9],
        ];

        foreach ($works as $work) {
            DB::table('works')->insert([
                'title' => $work['title'],
                'image' => $work['image'],
                'description' => null,
                'order' => $work['order'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
