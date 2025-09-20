<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CouresesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 1; $i <= 10; $i++){
            Course::create([
                "title" => "Course $i",
                "description" => "Description $i",
                "image" => "uploads/courses/images/$i.jpg",
                "video" => "uploads/courses/videos/$i.mp4",
                "instructor_id" => 1,
                "max_students" => 10,
                "start_date" => now()
            ]);
        }
    }
}
