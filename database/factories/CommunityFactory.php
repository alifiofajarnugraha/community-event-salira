<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Community>
 */
class CommunityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company(),
            'creator_id' => \App\Models\User::factory(),
            'description' => $this->faker->paragraph(),
            'logo' => $this->faker->imageUrl(),
            'tags' => $this->faker->words(3),
        ];
    }
}
