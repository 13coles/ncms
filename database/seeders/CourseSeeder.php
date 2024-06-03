<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define default courses
        $courses = [
            [
                'course_name' => 'Course 1',
                'num_hours' => 20,
                'description' => 'Description for Course 1',
                'img' => 'course1.jpg',
            ],
            [
                'course_name' => 'Course 2',
                'num_hours' => 30,
                'description' => 'Description for Course 2',
                'img' => 'course2.jpg',
            ],
            // Add more courses as needed
        ];

        // Insert default courses into the database
        foreach ($courses as $courseData) {
            Course::create($courseData);
        }
    }
}
