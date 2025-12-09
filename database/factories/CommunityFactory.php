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
        $activities = [];
        $activityCount = rand(1, 3);
        for ($i = 0; $i < $activityCount; $i++) {
            $activities[] = [
                'name' => $this->faker->words(2, true),
                'description' => $this->faker->sentence(),
                'frequency' => $this->faker->randomElement(['Weekly', 'Monthly', 'Quarterly'])
            ];
        }

        $moderators = [];
        $modCount = rand(1, 3);
        for ($i = 0; $i < $modCount; $i++) {
            $moderators[] = [
                'name' => $this->faker->name(),
                'role' => $this->faker->randomElement(['Admin', 'Moderator', 'Community Manager']),
                'avatar' => 'https://images.unsplash.com/photo-' . rand(1500000000, 1700000000) . '?w=100&h=100&fit=crop&crop=face'
            ];
        }

        $related = [];
        $relatedCount = rand(1, 2);
        for ($i = 0; $i < $relatedCount; $i++) {
            $related[] = [
                'name' => $this->faker->company(),
                'description' => $this->faker->sentence(),
                'members' => rand(100, 5000) . 'k'
            ];
        }

        return [
            'name' => $this->faker->company(),
            'icon' => $this->faker->randomElement(['🌟', '💻', '🎯', '🚀', '🎨', '📚', '🔬', '🎵']),
            'accent' => $this->faker->hexColor(),
            'tags' => $this->faker->words(rand(2, 5)),
            'description' => $this->faker->sentence(),
            'members' => rand(100, 50000) . 'k',
            'posts_today' => rand(10, 100),
            'member_count' => rand(1000, 50000),
            'is_joined' => $this->faker->boolean(30),
            'subtitle' => $this->faker->sentence(),
            'event_tag' => $this->faker->randomElement(['workshop', 'meetup', 'conference', 'seminar']),
            'cover' => 'https://images.unsplash.com/photo-' . rand(1500000000, 1700000000) . '?w=800&h=400&fit=crop',
            'location' => $this->faker->city(),
            'date' => $this->faker->dateTimeBetween('now', '+1 month')->format('Y-m-d'),
            'long_description' => $this->faker->paragraphs(rand(2, 4), true),
            'activities' => $activities,
            'related' => $related,
            'statistics' => [
                'totalPosts' => rand(500, 10000),
                'activeMembers' => rand(100, 5000),
                'monthlyGrowth' => '+' . rand(5, 30) . '%',
                'engagement' => $this->faker->randomElement(['Low', 'Medium', 'High', 'Very High'])
            ],
            'moderators' => $moderators,
            'rules' => $this->faker->sentences(rand(3, 6)),
        ];
    }
}
