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
        for($i = 0; $i < 10; $i++){
            Course::create([
                "title" => "Course $i",
                "description" => "Description $i",
                "image" => asset("images/9056d37cff0fcead7492b2a4fb4b01cf.jpg"),
                "video" => asset("images/9056d37cff0fcead7492b2a4fb4b01cf.jpg"),
                "instructor_id" => 1,
                "max_students" => 10,
                "start_date" => now()
            ]);
        }
    }
}
