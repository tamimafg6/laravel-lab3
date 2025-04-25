<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Author;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Upsert the Test User by email
        User::updateOrCreate(
            ['email' => 'test@example.com'],
            [
                'name'  => 'Test User',
                'password' => bcrypt('password'),
                // add any other defaults you need here
            ]
        );

        // Now seed your authors/posts/comments...
        \App\Models\Author::factory()
            ->count(5)
            ->hasPosts(4)      // make sure your PostFactory has hasComments() relationship
            ->create();
    }
}