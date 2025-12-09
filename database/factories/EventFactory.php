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
        $eventDate = $this->faker->dateTimeBetween('now', '+3 months');
        $communityNames = [
            'Laravel Indonesia', 'Vue.js Jakarta', 'React Bandung', 
            'Python Surabaya', 'DevOps Community', 'UI/UX Designers',
            'Mobile Dev ID', 'Data Science ID', 'Blockchain ID', 'AI/ML Community'
        ];

        // Valid Unsplash images for tech events
        $techImages = [
            'https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=800&h=400&fit=crop', // Laptop coding
            'https://images.unsplash.com/photo-1515378791036-0648a814c963?w=800&h=400&fit=crop', // Conference room
            'https://images.unsplash.com/photo-1555421689-491a97ff2040?w=800&h=400&fit=crop', // Code on screen
            'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=800&h=400&fit=crop', // Data visualization
            'https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=800&h=400&fit=crop', // Mobile development
            'https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=800&h=400&fit=crop', // Server room
            'https://images.unsplash.com/photo-1581291518857-4e27b48ff24e?w=800&h=400&fit=crop', // UI/UX design
            'https://images.unsplash.com/photo-1639762681485-074b7f938ba0?w=800&h=400&fit=crop', // Blockchain
            'https://images.unsplash.com/photo-1485827404703-89b55fcc595e?w=800&h=400&fit=crop', // AI/ML
            'https://images.unsplash.com/photo-1559136555-9303baea8ebd?w=800&h=400&fit=crop', // Business meeting
            'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=800&h=400&fit=crop', // Team collaboration
            'https://images.unsplash.com/photo-1531403009284-440f080d1e12?w=800&h=400&fit=crop', // Modern office
            'https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=800&h=400&fit=crop', // Presentation
            'https://images.unsplash.com/photo-1556761175-4b46a572b786?w=800&h=400&fit=crop', // Developer workspace
            'https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?w=800&h=400&fit=crop'  // Tech conference
        ];
        
        $eventTitles = [
            'Tech Meetup: Innovation in Digital Era',
            'Workshop: Advanced Programming Techniques',
            'Seminar: Future of Technology',
            'Bootcamp: Full Stack Development',
            'Conference: Digital Transformation',
            'Hackathon: Build the Future',
            'Networking: Connect with Industry Leaders',
            'Training: Cloud Computing Fundamentals',
            'Panel Discussion: Tech Trends 2025',
            'Masterclass: Clean Code Principles'
        ];

        $categories = [
            'Workshop', 'Seminar', 'Meetup', 'Conference', 
            'Bootcamp', 'Hackathon', 'Networking', 'Training',
            'Masterclass', 'Panel Discussion'
        ];

        $techTags = [
            ['Programming', 'Development', 'Code'],
            ['Frontend', 'Backend', 'Fullstack'],
            ['JavaScript', 'React', 'Vue'],
            ['Python', 'Django', 'Flask'],
            ['Laravel', 'PHP', 'Symfony'],
            ['DevOps', 'Docker', 'Kubernetes'],
            ['AI', 'Machine Learning', 'Data Science'],
            ['Mobile', 'Android', 'iOS'],
            ['Blockchain', 'Web3', 'Crypto'],
            ['UI/UX', 'Design', 'Figma']
        ];
        
        return [
            'title' => $this->faker->randomElement($eventTitles),
            'subtitle' => $this->faker->sentence(6),
            'community_id' => 'COM' . rand(1000, 9999),
            'community_name' => $this->faker->randomElement($communityNames),
            'date' => $eventDate,
            'location' => $this->faker->randomElement([
                'Jakarta Convention Center',
                'Bandung Digital Valley',
                'Surabaya Tech Hub',
                'Yogyakarta Innovation Center',
                'Online Event',
                'Hybrid Event',
                'Tokopedia Tower',
                'Gojek HQ',
                'Traveloka Office',
                'Bukalapak Campus'
            ]),
            'image' => $this->faker->randomElement($techImages),
            'description' => $this->faker->paragraphs(rand(2, 4), true),
            'category' => $this->faker->randomElement($categories),
            'tags' => $this->faker->randomElement($techTags),
        ];
    }
}
