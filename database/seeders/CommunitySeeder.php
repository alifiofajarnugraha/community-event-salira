<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Community;

class CommunitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $communities = [
            [
                'name' => 'JUMP FEST 2025 - BRED THROUGH',
                'icon' => 'spark',
                'accent' => '#E6F2FF',
                'tags' => ['#HarryPotter', '#WIBU', '#AnimeX'],
                'description' => 'Festival fandom terbesar tahun ini. Dapatkan bocoran rilis anime, sesi temu kreator, dan event eksklusif lainnya.',
                'members' => '21k',
                'posts_today' => 42,
                'member_count' => 21000,
                'is_joined' => false,
                'subtitle' => 'Trending in Western Fiction',
                'event_tag' => 'JUMP FEST 2025',
                'cover' => 'https://images.unsplash.com/photo-1582711012124-a56cf82307a0?q=80&w=1540&auto=format&fit=crop&ixlib=rb-4.1.0',
                'location' => 'Jakarta Convention Center, Jakarta',
                'date' => '13 August, 2025',
                'long_description' => 'Jump Fest 2025 is here! Bigger, louder, and more electrifying than ever. Dive into anime premieres, epic game demos, and electric live performances. Join thousands of fans for the ultimate pop culture celebration.',
                'activities' => [
                    'image' => 'https://images.unsplash.com/photo-1560472354-b33ff0c44a43?q=80&w=1000',
                    'list' => [
                        'Weekly panel discussions',
                        'Cosplay workshop',
                        'Friday streaming party',
                        'Anime premiere screenings',
                        'Meet & greet with voice actors'
                    ],
                    'gallery' => [
                        'https://images.unsplash.com/photo-1560472354-b33ff0c44a43?q=80&w=1000',
                        'https://images.unsplash.com/photo-1578662996442-48f60103fc96?q=80&w=1000',
                        'https://images.unsplash.com/photo-1574269910235-43b1b36e6c3b?q=80&w=1000'
                    ]
                ],
                'related' => [
                    ['initials' => 'AC', 'name' => 'Anime Club Indonesia', 'members' => '2.1k'],
                    ['initials' => 'MW', 'name' => 'Manga Writers', 'members' => '845'],
                    ['initials' => 'GC', 'name' => 'Gaming Community', 'members' => '1.5k']
                ],
                'statistics' => [
                    'totalPosts' => 1247,
                    'activeMembers' => 18500,
                    'monthlyGrowth' => '+15%',
                    'engagement' => 'High'
                ],
                'moderators' => [
                    [
                        'name' => 'Andi Pratama',
                        'role' => 'Community Lead',
                        'avatar' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=150',
                        'joinDate' => '2023-01-15'
                    ],
                    [
                        'name' => 'Sarah Chen',
                        'role' => 'Event Coordinator',
                        'avatar' => 'https://images.unsplash.com/photo-1494790108755-2616b9a2c6cd?w=150',
                        'joinDate' => '2023-03-20'
                    ]
                ],
                'rules' => [
                    'Respect all community members',
                    'No spam or self-promotion',
                    'Keep discussions on-topic',
                    'Use appropriate language',
                    'Help newcomers feel welcome'
                ]
            ],
            [
                'name' => 'Tech Innovators Hub',
                'icon' => 'code',
                'accent' => '#FF6B6B',
                'tags' => ['#Technology', '#Innovation', '#Startup'],
                'description' => 'Komunitas developer dan tech enthusiast yang berfokus pada inovasi teknologi terbaru.',
                'members' => '15k',
                'posts_today' => 28,
                'member_count' => 15230,
                'is_joined' => true,
                'subtitle' => 'Building Tomorrow Today',
                'event_tag' => 'TECH SUMMIT 2025',
                'cover' => 'https://images.unsplash.com/photo-1519389950473-47ba0277781c?w=800&h=600&fit=crop',
                'location' => 'SCBD Jakarta',
                'date' => '25 September, 2025',
                'long_description' => 'Join the leading tech community in Indonesia. Connect with developers, designers, and entrepreneurs who are shaping the future of technology.',
                'activities' => [
                    'image' => 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=1000',
                    'list' => [
                        'Weekly coding workshops',
                        'Tech talks and seminars',
                        'Startup pitch sessions',
                        'Open source contributions',
                        'Networking events'
                    ],
                    'gallery' => [
                        'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=1000',
                        'https://images.unsplash.com/photo-1519389950473-47ba0277781c?q=80&w=1000',
                        'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=1000'
                    ]
                ],
                'related' => [
                    ['initials' => 'DS', 'name' => 'Data Science Community', 'members' => '3.2k'],
                    ['initials' => 'AI', 'name' => 'AI Enthusiasts', 'members' => '2.8k'],
                    ['initials' => 'WD', 'name' => 'Web Developers', 'members' => '4.1k']
                ],
                'statistics' => [
                    'totalPosts' => 2156,
                    'activeMembers' => 12800,
                    'monthlyGrowth' => '+22%',
                    'engagement' => 'Very High'
                ],
                'moderators' => [
                    [
                        'name' => 'Budi Setiawan',
                        'role' => 'Tech Lead',
                        'avatar' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=150',
                        'joinDate' => '2022-06-10'
                    ]
                ],
                'rules' => [
                    'Share knowledge freely',
                    'Respect different skill levels',
                    'No proprietary code sharing',
                    'Constructive feedback only'
                ]
            ],
            [
                'name' => 'Green Earth Warriors',
                'icon' => 'leaf',
                'accent' => '#4ECDC4',
                'tags' => ['#Environment', '#Sustainability', '#ClimateAction'],
                'description' => 'Komunitas peduli lingkungan yang aktif dalam aksi nyata untuk bumi.',
                'members' => '8.5k',
                'posts_today' => 15,
                'member_count' => 8456,
                'is_joined' => false,
                'subtitle' => 'Act Now for Tomorrow',
                'event_tag' => 'EARTH DAY 2025',
                'cover' => 'https://images.unsplash.com/photo-1441974231531-c6227db76b6e?w=800&h=600&fit=crop',
                'location' => 'Taman Suropati Jakarta',
                'date' => '22 April, 2025',
                'long_description' => 'Together we can make a difference for our planet. Join our environmental initiatives and be part of the solution.',
                'activities' => [
                    'image' => 'https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?q=80&w=1000',
                    'list' => [
                        'Beach cleanup campaigns',
                        'Tree planting activities',
                        'Waste reduction workshops',
                        'Eco-friendly lifestyle tips',
                        'Environmental advocacy'
                    ],
                    'gallery' => [
                        'https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?q=80&w=1000',
                        'https://images.unsplash.com/photo-1441974231531-c6227db76b6e?q=80&w=1000',
                        'https://images.unsplash.com/photo-1518837695005-2083093ee35b?q=80&w=1000'
                    ]
                ],
                'related' => [
                    ['initials' => 'UF', 'name' => 'Urban Farming', 'members' => '1.8k'],
                    ['initials' => 'ZW', 'name' => 'Zero Waste ID', 'members' => '2.3k'],
                    ['initials' => 'RE', 'name' => 'Renewable Energy', 'members' => '1.2k']
                ],
                'statistics' => [
                    'totalPosts' => 891,
                    'activeMembers' => 6200,
                    'monthlyGrowth' => '+18%',
                    'engagement' => 'High'
                ],
                'moderators' => [
                    [
                        'name' => 'Sari Wijaya',
                        'role' => 'Environmental Activist',
                        'avatar' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=150',
                        'joinDate' => '2021-03-15'
                    ]
                ],
                'rules' => [
                    'Focus on actionable solutions',
                    'Share credible information only',
                    'Encourage positive action',
                    'No greenwashing content'
                ]
            ],
            [
                'name' => 'Digital Nomad Indonesia',
                'icon' => 'globe',
                'accent' => '#FFE66D',
                'tags' => ['#RemoteWork', '#Travel', '#Freelance'],
                'description' => 'Komunitas pekerja remote dan digital nomad di Indonesia.',
                'members' => '12k',
                'posts_today' => 35,
                'member_count' => 12340,
                'is_joined' => true,
                'subtitle' => 'Work from Anywhere',
                'event_tag' => 'NOMAD FEST 2025',
                'cover' => 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=800&h=600&fit=crop',
                'location' => 'Canggu, Bali',
                'date' => '15 November, 2025',
                'long_description' => 'Connect with like-minded remote workers and explore the nomadic lifestyle across beautiful Indonesia.',
                'activities' => [
                    'image' => 'https://images.unsplash.com/photo-1531482615713-2afd69097998?q=80&w=1000',
                    'list' => [
                        'Co-working space tours',
                        'Remote work workshops',
                        'Networking events',
                        'Location scouting trips',
                        'Skill sharing sessions'
                    ],
                    'gallery' => [
                        'https://images.unsplash.com/photo-1531482615713-2afd69097998?q=80&w=1000',
                        'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=1000',
                        'https://images.unsplash.com/photo-1488646953014-85cb44e25828?q=80&w=1000'
                    ]
                ],
                'related' => [
                    ['initials' => 'FL', 'name' => 'Freelancers ID', 'members' => '5.6k'],
                    ['initials' => 'RW', 'name' => 'Remote Workers', 'members' => '3.4k'],
                    ['initials' => 'TN', 'name' => 'Travel Nomads', 'members' => '2.1k']
                ],
                'statistics' => [
                    'totalPosts' => 1568,
                    'activeMembers' => 9800,
                    'monthlyGrowth' => '+25%',
                    'engagement' => 'Very High'
                ],
                'moderators' => [
                    [
                        'name' => 'Alex Thompson',
                        'role' => 'Community Manager',
                        'avatar' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=150',
                        'joinDate' => '2020-08-20'
                    ]
                ],
                'rules' => [
                    'Share helpful resources',
                    'Respect different work styles',
                    'No job spam posts',
                    'Support fellow nomads'
                ]
            ],
            [
                'name' => 'Foodie Adventures Jakarta',
                'icon' => 'utensils',
                'accent' => '#FF8C42',
                'tags' => ['#Food', '#Culinary', '#Restaurant'],
                'description' => 'Komunitas pecinta kuliner yang mengeksplorasi cita rasa Jakarta.',
                'members' => '25k',
                'posts_today' => 67,
                'member_count' => 25780,
                'is_joined' => false,
                'subtitle' => 'Taste the City',
                'event_tag' => 'FOOD FEST 2025',
                'cover' => 'https://images.unsplash.com/photo-1414235077428-338989a2e8c0?w=800&h=600&fit=crop',
                'location' => 'Grand Indonesia Mall',
                'date' => '10 October, 2025',
                'long_description' => 'Discover the best culinary experiences Jakarta has to offer. From street food to fine dining, explore it all with fellow food enthusiasts.',
                'activities' => [
                    'image' => 'https://images.unsplash.com/photo-1414235077428-338989a2e8c0?q=80&w=1000',
                    'list' => [
                        'Restaurant reviews',
                        'Food photography workshops',
                        'Cooking classes',
                        'Street food tours',
                        'Chef meet & greets'
                    ],
                    'gallery' => [
                        'https://images.unsplash.com/photo-1414235077428-338989a2e8c0?q=80&w=1000',
                        'https://images.unsplash.com/photo-1565299624946-b28f40a0ca4b?q=80&w=1000',
                        'https://images.unsplash.com/photo-1567620905732-2d1ec7ab7445?q=80&w=1000'
                    ]
                ],
                'related' => [
                    ['initials' => 'SF', 'name' => 'Street Food Lovers', 'members' => '8.9k'],
                    ['initials' => 'HC', 'name' => 'Home Cooking', 'members' => '4.2k'],
                    ['initials' => 'FP', 'name' => 'Food Photography', 'members' => '3.1k']
                ],
                'statistics' => [
                    'totalPosts' => 3247,
                    'activeMembers' => 18900,
                    'monthlyGrowth' => '+12%',
                    'engagement' => 'High'
                ],
                'moderators' => [
                    [
                        'name' => 'Chef Maria Santos',
                        'role' => 'Culinary Expert',
                        'avatar' => 'https://images.unsplash.com/photo-1494790108755-2616b9a2c6cd?w=150',
                        'joinDate' => '2019-11-08'
                    ]
                ],
                'rules' => [
                    'Share honest reviews',
                    'Credit photo sources',
                    'No hate comments on preferences',
                    'Support local businesses'
                ]
            ]
        ];

        // Add 25 more communities with varied data
        $additionalCommunities = [
            [
                'name' => 'Fitness Warriors',
                'icon' => 'dumbbell',
                'accent' => '#FF6B9D',
                'tags' => ['#Fitness', '#Health', '#Workout'],
                'description' => 'Komunitas fitness untuk hidup sehat dan aktif.',
                'members' => '18k',
                'posts_today' => 45,
                'member_count' => 18200,
                'is_joined' => true,
                'subtitle' => 'Strong Body, Strong Mind',
                'event_tag' => 'FITNESS EXPO 2025',
                'cover' => 'https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=800&h=600&fit=crop',
                'location' => 'Gelora Bung Karno',
                'date' => '5 June, 2025',
                'long_description' => 'Transform your lifestyle with our supportive fitness community. From beginners to athletes, everyone is welcome.',
                'activities' => [
                    'image' => 'https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?q=80&w=1000',
                    'list' => ['Group workouts', 'Nutrition workshops', 'Marathon training', 'Yoga sessions', 'Strength competitions'],
                    'gallery' => [
                        'https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?q=80&w=1000',
                        'https://images.unsplash.com/photo-1541534741688-6078c6bfb5c5?q=80&w=1000',
                        'https://images.unsplash.com/photo-1517836357463-d25dfeac3438?q=80&w=1000'
                    ]
                ],
                'related' => [
                    ['initials' => 'YC', 'name' => 'Yoga Community', 'members' => '6.2k'],
                    ['initials' => 'RC', 'name' => 'Running Club', 'members' => '9.1k'],
                    ['initials' => 'NC', 'name' => 'Nutrition Club', 'members' => '4.8k']
                ],
                'statistics' => [
                    'totalPosts' => 1876,
                    'activeMembers' => 14500,
                    'monthlyGrowth' => '+20%',
                    'engagement' => 'Very High'
                ],
                'moderators' => [
                    [
                        'name' => 'Rudi Hartono',
                        'role' => 'Fitness Coach',
                        'avatar' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=150',
                        'joinDate' => '2021-01-12'
                    ]
                ],
                'rules' => [
                    'Promote healthy habits',
                    'No body shaming',
                    'Share workout tips',
                    'Encourage beginners'
                ]
            ],
            [
                'name' => 'Photography Masters',
                'icon' => 'camera',
                'accent' => '#A8E6CF',
                'tags' => ['#Photography', '#Art', '#Visual'],
                'description' => 'Komunitas fotografer dari pemula hingga profesional.',
                'members' => '14k',
                'posts_today' => 38,
                'member_count' => 14560,
                'is_joined' => false,
                'subtitle' => 'Capture the Moment',
                'event_tag' => 'PHOTO WALK 2025',
                'cover' => 'https://images.unsplash.com/photo-1606983340077-61f8b2d10a1b?w=800&h=600&fit=crop',
                'location' => 'Kota Tua Jakarta',
                'date' => '20 July, 2025',
                'long_description' => 'Explore the art of photography with fellow enthusiasts. Learn techniques, share your work, and grow together.',
                'activities' => [
                    'image' => 'https://images.unsplash.com/photo-1606983340077-61f8b2d10a1b?q=80&w=1000',
                    'list' => ['Photo walks', 'Editing workshops', 'Portfolio reviews', 'Equipment sharing', 'Exhibition planning'],
                    'gallery' => [
                        'https://images.unsplash.com/photo-1606983340077-61f8b2d10a1b?q=80&w=1000',
                        'https://images.unsplash.com/photo-1502920917128-1aa500764cbd?q=80&w=1000',
                        'https://images.unsplash.com/photo-1516035069371-29a1b244cc32?q=80&w=1000'
                    ]
                ],
                'related' => [
                    ['initials' => 'SP', 'name' => 'Street Photography', 'members' => '5.3k'],
                    ['initials' => 'WP', 'name' => 'Wedding Photography', 'members' => '3.7k'],
                    ['initials' => 'LP', 'name' => 'Landscape Photography', 'members' => '7.2k']
                ],
                'statistics' => [
                    'totalPosts' => 2134,
                    'activeMembers' => 11200,
                    'monthlyGrowth' => '+16%',
                    'engagement' => 'High'
                ],
                'moderators' => [
                    [
                        'name' => 'Diana Sari',
                        'role' => 'Photography Instructor',
                        'avatar' => 'https://images.unsplash.com/photo-1494790108755-2616b9a2c6cd?w=150',
                        'joinDate' => '2020-04-18'
                    ]
                ],
                'rules' => [
                    'Credit original photographers',
                    'Constructive criticism only',
                    'No stolen content',
                    'Share knowledge freely'
                ]
            ]
        ];

        // Generate 23 more communities programmatically
        $icons = ['music', 'book', 'game', 'heart', 'star', 'rocket', 'shield', 'crown', 'diamond', 'fire'];
        $accents = ['#FF6B6B', '#4ECDC4', '#45B7D1', '#96CEB4', '#FFEAA7', '#DDA0DD', '#98D8C8', '#F7DC6F', '#BB8FCE', '#85C1E9'];
        $categories = [
            ['name' => 'Music Creators', 'tags' => ['#Music', '#Creative', '#Audio'], 'desc' => 'Komunitas musisi dan creator audio'],
            ['name' => 'Book Lovers Club', 'tags' => ['#Reading', '#Literature', '#Books'], 'desc' => 'Komunitas pecinta buku dan literatur'],
            ['name' => 'Gaming Squad', 'tags' => ['#Gaming', '#Esports', '#Entertainment'], 'desc' => 'Komunitas gamer dan penggemar esports'],
            ['name' => 'Art & Design Hub', 'tags' => ['#Art', '#Design', '#Creative'], 'desc' => 'Komunitas seniman dan desainer'],
            ['name' => 'Travel Enthusiasts', 'tags' => ['#Travel', '#Adventure', '#Culture'], 'desc' => 'Komunitas traveler dan petualang'],
            ['name' => 'Startup Network', 'tags' => ['#Startup', '#Business', '#Innovation'], 'desc' => 'Komunitas entrepreneur dan startup'],
            ['name' => 'Language Exchange', 'tags' => ['#Language', '#Learning', '#Culture'], 'desc' => 'Komunitas belajar bahasa asing'],
            ['name' => 'Mental Health Support', 'tags' => ['#MentalHealth', '#Wellness', '#Support'], 'desc' => 'Komunitas dukungan kesehatan mental'],
            ['name' => 'Film & Cinema', 'tags' => ['#Film', '#Cinema', '#Entertainment'], 'desc' => 'Komunitas pecinta film dan sinema'],
            ['name' => 'Science Explorers', 'tags' => ['#Science', '#Research', '#Discovery'], 'desc' => 'Komunitas ilmuwan dan peneliti']
        ];

        for ($i = 0; $i < 23; $i++) {
            $category = $categories[$i % count($categories)];
            $memberCount = rand(1000, 30000);
            $postsToday = rand(10, 80);
            
            $additionalCommunities[] = [
                'name' => $category['name'] . ' ' . ($i + 1),
                'icon' => $icons[$i % count($icons)],
                'accent' => $accents[$i % count($accents)],
                'tags' => $category['tags'],
                'description' => $category['desc'] . ' yang aktif dan supportif.',
                'members' => $this->formatMemberCount($memberCount),
                'posts_today' => $postsToday,
                'member_count' => $memberCount,
                'is_joined' => rand(0, 1) == 1,
                'subtitle' => 'Join Our Community',
                'event_tag' => strtoupper($category['name']) . ' EVENT',
                'cover' => 'https://images.unsplash.com/photo-1' . rand(500000000, 599999999) . '-' . rand(100000000, 999999999) . '?w=800&h=600&fit=crop',
                'location' => $this->getRandomLocation(),
                'date' => $this->getRandomDate(),
                'long_description' => 'Join our vibrant community and connect with like-minded individuals who share your passion.',
                'activities' => [
                    'image' => 'https://images.unsplash.com/photo-1' . rand(500000000, 599999999) . '-' . rand(100000000, 999999999) . '?w=1000',
                    'list' => ['Weekly meetups', 'Skill sharing', 'Networking events', 'Workshops', 'Community projects'],
                    'gallery' => [
                        'https://images.unsplash.com/photo-1' . rand(500000000, 599999999) . '-' . rand(100000000, 999999999) . '?w=1000',
                        'https://images.unsplash.com/photo-1' . rand(500000000, 599999999) . '-' . rand(100000000, 999999999) . '?w=1000',
                        'https://images.unsplash.com/photo-1' . rand(500000000, 599999999) . '-' . rand(100000000, 999999999) . '?w=1000'
                    ]
                ],
                'related' => [
                    ['initials' => chr(65 + rand(0, 25)) . chr(65 + rand(0, 25)), 'name' => 'Related Community ' . rand(1, 3), 'members' => $this->formatMemberCount(rand(500, 5000))],
                    ['initials' => chr(65 + rand(0, 25)) . chr(65 + rand(0, 25)), 'name' => 'Related Community ' . rand(4, 6), 'members' => $this->formatMemberCount(rand(500, 5000))]
                ],
                'statistics' => [
                    'totalPosts' => rand(100, 5000),
                    'activeMembers' => rand(500, $memberCount),
                    'monthlyGrowth' => '+' . rand(5, 30) . '%',
                    'engagement' => ['Low', 'Medium', 'High', 'Very High'][rand(0, 3)]
                ],
                'moderators' => [
                    [
                        'name' => $this->getRandomName(),
                        'role' => 'Community Manager',
                        'avatar' => 'https://images.unsplash.com/photo-1' . rand(507000000, 520000000) . '-' . rand(100000000, 999999999) . '?w=150',
                        'joinDate' => '202' . rand(0, 3) . '-' . str_pad(rand(1, 12), 2, '0', STR_PAD_LEFT) . '-' . str_pad(rand(1, 28), 2, '0', STR_PAD_LEFT)
                    ]
                ],
                'rules' => [
                    'Be respectful to all members',
                    'Stay on topic',
                    'No spam or promotional content',
                    'Help and support each other'
                ]
            ];
        }

        foreach (array_merge($communities, $additionalCommunities) as $community) {
            Community::create($community);
        }
    }

    private function formatMemberCount($count)
    {
        if ($count >= 1000) {
            return round($count / 1000, 1) . 'k';
        }
        return (string) $count;
    }

    private function getRandomLocation()
    {
        $locations = [
            'Jakarta Convention Center',
            'SCBD Jakarta',
            'Kemang Village',
            'Plaza Indonesia',
            'Grand Indonesia',
            'Senayan City',
            'Pacific Place',
            'Kuningan City',
            'Taman Suropati',
            'Ancol Beach'
        ];
        return $locations[rand(0, count($locations) - 1)];
    }

    private function getRandomDate()
    {
        $months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        return rand(1, 28) . ' ' . $months[rand(0, 11)] . ', 2025';
    }

    private function getRandomName()
    {
        $names = [
            'Ahmad Rizki', 'Siti Nurhaliza', 'Budi Santoso', 'Rina Wijaya', 'Dedi Permana',
            'Maya Sari', 'Eko Prasetyo', 'Lisa Chen', 'Agus Setiawan', 'Dewi Lestari'
        ];
        return $names[rand(0, count($names) - 1)];
    }
}