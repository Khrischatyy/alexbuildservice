<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            ['name' => 'John Doe', 'quote' => 'Amazing work! My kitchen looks stunning.', 'order' => 1],
            ['name' => 'Jane Smith', 'quote' => 'Professional and efficient team!', 'order' => 2],
            ['name' => 'Mike Brown', 'quote' => 'Exceeded my expectations in every way.', 'order' => 3],
        ];

        foreach ($testimonials as $testimonial) {
            DB::table('testimonials')->insert([
                'name' => $testimonial['name'],
                'quote' => $testimonial['quote'],
                'position' => null,
                'company' => null,
                'order' => $testimonial['order'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
