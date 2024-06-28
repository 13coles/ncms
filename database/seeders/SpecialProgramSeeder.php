<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SpecialProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('special_programs')->insert([
            [
                'program_name' => 'Youth Leadership Program',
                'description' => 'A program designed to develop leadership skills among youth.',
                'program_image' => 'youth_leadership.jpg',
            ],
            [
                'program_name' => 'Community Outreach Program',
                'description' => 'An initiative to engage and support local communities.',
                'program_image' => 'community_outreach.jpg',
            ],
            [
                'program_name' => 'Tech Innovation Program',
                'description' => 'A program encouraging innovation and technology development.',
                'program_image' => 'tech_innovation.jpg',
            ],
        ]);
    }
}
