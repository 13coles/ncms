<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
class AccreditationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('accreditation')->insert([
            [
                'qualification' => 'Certified Laravel Developer',
                'accreditation_number' => Str::random(10),
                'validity' => Carbon::now()->addYear(),
                'assessment_fee' => 1500.00,
                'number_hours' => '40',
                'number_candidates' => '20',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'qualification' => 'Certified PHP Developer',
                'accreditation_number' => Str::random(10),
                'validity' => Carbon::now()->addYear(),
                'assessment_fee' => 1200.00,
                'number_hours' => '30',
                'number_candidates' => '25',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'qualification' => 'Certified Web Developer',
                'accreditation_number' => Str::random(10),
                'validity' => Carbon::now()->addYear(),
                'assessment_fee' => 1000.00,
                'number_hours' => '50',
                'number_candidates' => '15',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
