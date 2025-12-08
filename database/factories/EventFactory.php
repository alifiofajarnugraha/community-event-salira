<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $startTime = $this->faker->dateTimeBetween('now', '+1 month');
        return [
            'community_id' => \App\Models\Community::factory(),
            'organizer_id' => \App\Models\User::factory(),
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'location' => $this->faker->address(),
            'start_time' => $startTime,
            'end_time' => $this->faker->dateTimeBetween($startTime, '+1 month +2 hours'),
            'status' => 'scheduled',
            'image' => $this->faker->imageUrl(),
            'tags' => $this->faker->words(3),
        ];
    }
}
