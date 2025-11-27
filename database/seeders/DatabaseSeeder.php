<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create a test user
        $user = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Create random users
        $users = User::factory(10)->create();

        // Create communities
        $communities = \App\Models\Community::factory(5)
            ->recycle($users) // Use existing users as creators
            ->create();

        // Create events for each community
        foreach ($communities as $community) {
            \App\Models\Event::factory(3)
                ->for($community)
                ->recycle($users) // Use existing users as organizers
                ->create();
        }
    }
}
