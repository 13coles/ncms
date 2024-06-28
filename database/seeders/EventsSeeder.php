<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('events')->insert([
            [
                'name' => 'Animation NC II',
                'venue' => 'Paglaum Sports Complex',
                'address' => 'Hernaez St. Bacolod City, Negros Occidental',
                'telephone' => '(034) 495 6092',
                'email' => 'nolitc@gmail.com',
                'start_date' => '2024-07-01',
                'end_date' => '2024-07-05',
                'start_time' => '09:00:00',
                'end_time' => '17:00:00',
            ],
            [
                'name' => 'CAnimation NC II',
                'venue' => 'Paglaum Sports Complex',
                'address' => 'Hernaez St. Bacolod City, Negros Occidental',
                'telephone' => '(034) 495 6092',
                'email' => 'nolitc@gmail.com',
                'start_date' => '2024-07-10',
                'end_date' => '2024-07-14',
                'start_time' => '10:00:00',
                'end_time' => '16:00:00',
            ],
            [
                'name' => 'CAnimation NC II',
                'venue' => 'Paglaum Sports Complex',
                'address' => 'Hernaez St. Bacolod City, Negros Occidental',
                'telephone' => '(034) 495 6092',
                'email' => 'nolitc@gmail.com',
                'start_date' => '2024-07-20',
                'end_date' => '2024-07-24',
                'start_time' => '11:00:00',
                'end_time' => '15:00:00',
            ],
        ]);
    }
}
