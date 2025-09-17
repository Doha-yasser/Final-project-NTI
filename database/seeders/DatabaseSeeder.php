<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'omar',
            'email' => 'osamy8088@gmail.com',
            'password' => bcrypt('12345678'),
            'type' => 'instructor',
        ]);
        $this->call(CouresesSeeder::class);
    }
}
