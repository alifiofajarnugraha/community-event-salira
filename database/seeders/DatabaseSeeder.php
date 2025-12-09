<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Community;
use App\Models\Event;
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

        // Create sample communities
        $communities = [
            [
                'name' => 'Laravel Indonesia',
                'icon' => '🚀',
                'accent' => '#FF2D20',
                'tags' => ['Laravel', 'PHP', 'Backend'],
                'description' => 'Komunitas pengembang Laravel Indonesia',
                'members' => '12k',
                'posts_today' => 15,
                'member_count' => 12000,
                'is_joined' => false,
                'subtitle' => 'Build amazing web applications with Laravel',
                'event_tag' => 'workshop',
                'cover' => 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=800&h=400&fit=crop',
                'location' => 'Jakarta',
                'date' => '2025-12-15',
                'long_description' => 'Komunitas resmi Laravel Indonesia yang aktif mengadakan workshop, meetup, dan berbagi knowledge tentang framework Laravel.',
                'activities' => [
                    ['name' => 'Weekly Workshop', 'description' => 'Workshop mingguan tentang Laravel', 'frequency' => 'Weekly'],
                    ['name' => 'Monthly Meetup', 'description' => 'Pertemuan bulanan developer Laravel', 'frequency' => 'Monthly']
                ],
                'related' => [
                    ['name' => 'PHP Indonesia', 'description' => 'Komunitas PHP Indonesia', 'members' => '25k'],
                ],
                'statistics' => [
                    'totalPosts' => 1250,
                    'activeMembers' => 8500,
                    'monthlyGrowth' => '+15%',
                    'engagement' => 'Very High'
                ],
                'moderators' => [
                    ['name' => 'Andi Kusuma', 'role' => 'Admin', 'avatar' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&h=100&fit=crop&crop=face'],
                    ['name' => 'Sari Dewi', 'role' => 'Moderator', 'avatar' => 'https://images.unsplash.com/photo-1494790108755-2616b612-f1e?w=100&h=100&fit=crop&crop=face']
                ],
                'rules' => [
                    'Gunakan bahasa yang sopan',
                    'Share knowledge yang bermanfaat',
                    'Tidak spam atau promosi berlebihan',
                    'Respect sesama member'
                ]
            ],
            [
                'name' => 'Vue.js Indonesia',
                'icon' => '🔥',
                'accent' => '#4FC08D',
                'tags' => ['Vue.js', 'JavaScript', 'Frontend'],
                'description' => 'Komunitas pengembang Vue.js Indonesia',
                'members' => '8.5k',
                'posts_today' => 12,
                'member_count' => 8500,
                'is_joined' => true,
                'subtitle' => 'Progressive JavaScript Framework',
                'event_tag' => 'meetup',
                'cover' => 'https://images.unsplash.com/photo-1517180102446-f3ece451e9d8?w=800&h=400&fit=crop',
                'location' => 'Jakarta',
                'date' => '2025-12-18',
                'long_description' => 'Komunitas Vue.js Indonesia yang fokus pada pengembangan aplikasi web menggunakan Vue.js framework.',
                'activities' => [
                    ['name' => 'Vue Workshop', 'description' => 'Workshop Vue.js setiap bulan', 'frequency' => 'Monthly'],
                    ['name' => 'Code Review Session', 'description' => 'Review kode Vue.js bersama', 'frequency' => 'Bi-weekly']
                ],
                'related' => [
                    ['name' => 'JavaScript Indonesia', 'description' => 'Komunitas JavaScript Indonesia', 'members' => '30k'],
                ],
                'statistics' => [
                    'totalPosts' => 950,
                    'activeMembers' => 6200,
                    'monthlyGrowth' => '+12%',
                    'engagement' => 'High'
                ],
                'moderators' => [
                    ['name' => 'Budi Santoso', 'role' => 'Admin', 'avatar' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=100&h=100&fit=crop&crop=face'],
                    ['name' => 'Rina Wijaya', 'role' => 'Moderator', 'avatar' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=100&h=100&fit=crop&crop=face']
                ],
                'rules' => [
                    'Be respectful to all members',
                    'Share Vue.js related content only',
                    'No spam or self-promotion',
                    'Help others learn Vue.js'
                ]
            ],
            [
                'name' => 'React Developers Indonesia',
                'icon' => '⚛️',
                'accent' => '#61DAFB',
                'tags' => ['React', 'JavaScript', 'Frontend'],
                'description' => 'Komunitas pengembang React Indonesia',
                'members' => '15k',
                'posts_today' => 25,
                'member_count' => 15000,
                'is_joined' => false,
                'subtitle' => 'A JavaScript library for building user interfaces',
                'event_tag' => 'conference',
                'cover' => 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=800&h=400&fit=crop',
                'location' => 'Bandung',
                'date' => '2025-12-20',
                'long_description' => 'Komunitas terbesar pengembang React di Indonesia yang aktif berbagi knowledge dan best practices.',
                'activities' => [
                    ['name' => 'React Bootcamp', 'description' => 'Bootcamp React untuk pemula', 'frequency' => 'Quarterly'],
                    ['name' => 'React Meetup', 'description' => 'Meetup bulanan React developers', 'frequency' => 'Monthly']
                ],
                'related' => [
                    ['name' => 'JavaScript Indonesia', 'description' => 'Komunitas JavaScript Indonesia', 'members' => '30k'],
                    ['name' => 'Frontend Indonesia', 'description' => 'Komunitas Frontend Indonesia', 'members' => '20k']
                ],
                'statistics' => [
                    'totalPosts' => 1800,
                    'activeMembers' => 11000,
                    'monthlyGrowth' => '+18%',
                    'engagement' => 'Very High'
                ],
                'moderators' => [
                    ['name' => 'Dimas Rahardi', 'role' => 'Admin', 'avatar' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=100&h=100&fit=crop&crop=face'],
                    ['name' => 'Sinta Maharani', 'role' => 'Moderator', 'avatar' => 'https://images.unsplash.com/photo-1544725176-7c40e5a71c5e?w=100&h=100&fit=crop&crop=face']
                ],
                'rules' => [
                    'Focus on React-related discussions',
                    'Be constructive in feedback',
                    'Share resources and help others',
                    'Maintain professional conduct'
                ]
            ],
            [
                'name' => 'Python Indonesia',
                'icon' => '🐍',
                'accent' => '#3776AB',
                'tags' => ['Python', 'Data Science', 'Backend'],
                'description' => 'Komunitas pengembang Python Indonesia',
                'members' => '22k',
                'posts_today' => 18,
                'member_count' => 22000,
                'is_joined' => true,
                'subtitle' => 'Programming language that lets you work quickly',
                'event_tag' => 'bootcamp',
                'cover' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=800&h=400&fit=crop',
                'location' => 'Surabaya',
                'date' => '2025-12-22',
                'long_description' => 'Komunitas Python Indonesia yang mencakup web development, data science, machine learning, dan automation.',
                'activities' => [
                    ['name' => 'Python Workshop', 'description' => 'Workshop Python untuk semua level', 'frequency' => 'Monthly'],
                    ['name' => 'Data Science Meetup', 'description' => 'Meetup data science dengan Python', 'frequency' => 'Bi-monthly']
                ],
                'related' => [
                    ['name' => 'Data Science Indonesia', 'description' => 'Komunitas Data Science Indonesia', 'members' => '18k'],
                    ['name' => 'Machine Learning Indonesia', 'description' => 'Komunitas ML Indonesia', 'members' => '12k']
                ],
                'statistics' => [
                    'totalPosts' => 2200,
                    'activeMembers' => 16500,
                    'monthlyGrowth' => '+20%',
                    'engagement' => 'Very High'
                ],
                'moderators' => [
                    ['name' => 'Agus Setiawan', 'role' => 'Admin', 'avatar' => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?w=100&h=100&fit=crop&crop=face'],
                    ['name' => 'Maya Sari', 'role' => 'Moderator', 'avatar' => 'https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?w=100&h=100&fit=crop&crop=face']
                ],
                'rules' => [
                    'Python-related content only',
                    'Help newcomers learn',
                    'Share code responsibly',
                    'Be respectful and inclusive'
                ]
            ],
            [
                'name' => 'DevOps Indonesia',
                'icon' => '⚙️',
                'accent' => '#326CE5',
                'tags' => ['DevOps', 'Docker', 'Kubernetes'],
                'description' => 'Komunitas DevOps dan Cloud Computing Indonesia',
                'members' => '9.2k',
                'posts_today' => 8,
                'member_count' => 9200,
                'is_joined' => false,
                'subtitle' => 'Bridging Development and Operations',
                'event_tag' => 'workshop',
                'cover' => 'https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=800&h=400&fit=crop',
                'location' => 'Jakarta',
                'date' => '2025-12-25',
                'long_description' => 'Komunitas yang fokus pada praktik DevOps, CI/CD, containerization, dan cloud infrastructure.',
                'activities' => [
                    ['name' => 'DevOps Workshop', 'description' => 'Workshop praktis DevOps tools', 'frequency' => 'Monthly'],
                    ['name' => 'Cloud Certification Prep', 'description' => 'Persiapan sertifikasi cloud', 'frequency' => 'Quarterly']
                ],
                'related' => [
                    ['name' => 'Cloud Indonesia', 'description' => 'Komunitas Cloud Computing', 'members' => '15k'],
                ],
                'statistics' => [
                    'totalPosts' => 800,
                    'activeMembers' => 7000,
                    'monthlyGrowth' => '+10%',
                    'engagement' => 'High'
                ],
                'moderators' => [
                    ['name' => 'Rizky Pratama', 'role' => 'Admin', 'avatar' => 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=100&h=100&fit=crop&crop=face'],
                    ['name' => 'Dewi Lestari', 'role' => 'Moderator', 'avatar' => 'https://images.unsplash.com/photo-1494790108755-2616b9a2c6cd?w=100&h=100&fit=crop&crop=face']
                ],
                'rules' => [
                    'Share DevOps best practices',
                    'No vendor bashing',
                    'Help with troubleshooting',
                    'Keep discussions technical'
                ]
            ]
        ];

        foreach ($communities as $communityData) {
            Community::create($communityData);
        }

        // Create sample events
        $events = [
            [
                'title' => 'Laravel Workshop: Building Modern Web Applications',
                'subtitle' => 'Learn how to build scalable web applications with Laravel',
                'community_id' => 'COM1001',
                'community_name' => 'Laravel Indonesia',
                'date' => '2025-12-20 10:00:00',
                'location' => 'Jakarta Convention Center',
                'image' => 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=800&h=400&fit=crop',
                'description' => 'Workshop intensif tentang pengembangan aplikasi web modern menggunakan Laravel framework.',
                'category' => 'Workshop',
                'tags' => ['Laravel', 'Workshop', 'Web Development', 'PHP']
            ],
            [
                'title' => 'Vue.js Meetup Jakarta',
                'subtitle' => 'Monthly meetup for Vue.js enthusiasts',
                'community_id' => 'COM1002',
                'community_name' => 'Vue.js Jakarta',
                'date' => '2025-12-25 19:00:00',
                'location' => 'Tokopedia Tower',
                'image' => 'https://images.unsplash.com/photo-1515378791036-0648a814c963?w=800&h=400&fit=crop',
                'description' => 'Sharing session tentang Vue.js 3, Composition API, dan ecosystem Vue.js terbaru.',
                'category' => 'Meetup',
                'tags' => ['Vue.js', 'JavaScript', 'Frontend', 'Meetup']
            ],
            [
                'title' => 'React Developer Conference 2025',
                'subtitle' => 'The biggest React conference in Indonesia',
                'community_id' => 'COM1003',
                'community_name' => 'React Indonesia',
                'date' => '2025-12-28 09:00:00',
                'location' => 'Bandung Digital Valley',
                'image' => 'https://images.unsplash.com/photo-1555421689-491a97ff2040?w=800&h=400&fit=crop',
                'description' => 'Konferensi tahunan developer React Indonesia dengan speaker internasional.',
                'category' => 'Conference',
                'tags' => ['React', 'JavaScript', 'Conference', 'Frontend']
            ],
            [
                'title' => 'Python Data Science Bootcamp',
                'subtitle' => 'Intensive bootcamp for aspiring data scientists',
                'community_id' => 'COM1004',
                'community_name' => 'Python Indonesia',
                'date' => '2025-12-30 10:00:00',
                'location' => 'Surabaya Tech Hub',
                'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=800&h=400&fit=crop',
                'description' => 'Bootcamp intensif 3 hari untuk mempelajari data science menggunakan Python.',
                'category' => 'Bootcamp',
                'tags' => ['Python', 'Data Science', 'Machine Learning', 'Bootcamp']
            ],
            [
                'title' => 'Mobile Development Workshop',
                'subtitle' => 'Build cross-platform mobile apps with Flutter',
                'community_id' => 'COM1005',
                'community_name' => 'Flutter Indonesia',
                'date' => '2026-01-02 13:00:00',
                'location' => 'Online Event',
                'image' => 'https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=800&h=400&fit=crop',
                'description' => 'Workshop hands-on membangun aplikasi mobile cross-platform dengan Flutter.',
                'category' => 'Workshop',
                'tags' => ['Flutter', 'Mobile', 'Dart', 'Cross-platform']
            ],
            [
                'title' => 'DevOps & Cloud Computing Seminar',
                'subtitle' => 'Best practices for modern infrastructure',
                'community_id' => 'COM1006',
                'community_name' => 'DevOps Indonesia',
                'date' => '2026-01-05 14:00:00',
                'location' => 'Jakarta Convention Center',
                'image' => 'https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=800&h=400&fit=crop',
                'description' => 'Seminar tentang best practices DevOps dan cloud computing untuk enterprise.',
                'category' => 'Seminar',
                'tags' => ['DevOps', 'Cloud', 'AWS', 'Kubernetes']
            ],
            [
                'title' => 'UI/UX Design Thinking Workshop',
                'subtitle' => 'Create user-centered designs',
                'community_id' => 'COM1007',
                'community_name' => 'UXID Indonesia',
                'date' => '2026-01-08 10:00:00',
                'location' => 'Yogyakarta Innovation Center',
                'image' => 'https://images.unsplash.com/photo-1581291518857-4e27b48ff24e?w=800&h=400&fit=crop',
                'description' => 'Workshop design thinking untuk menciptakan user experience yang optimal.',
                'category' => 'Workshop',
                'tags' => ['UI/UX', 'Design', 'User Experience', 'Design Thinking']
            ],
            [
                'title' => 'Blockchain & Web3 Meetup',
                'subtitle' => 'Exploring the future of decentralized web',
                'community_id' => 'COM1008',
                'community_name' => 'Blockchain Indonesia',
                'date' => '2026-01-10 19:00:00',
                'location' => 'Hybrid Event',
                'image' => 'https://images.unsplash.com/photo-1639762681485-074b7f938ba0?w=800&h=400&fit=crop',
                'description' => 'Meetup bulanan membahas perkembangan teknologi blockchain dan Web3.',
                'category' => 'Meetup',
                'tags' => ['Blockchain', 'Web3', 'Cryptocurrency', 'DeFi']
            ],
            [
                'title' => 'AI & Machine Learning Hackathon',
                'subtitle' => '48-hour coding challenge for AI enthusiasts',
                'community_id' => 'COM1009',
                'community_name' => 'AI Indonesia',
                'date' => '2026-01-12 09:00:00',
                'location' => 'Bandung Digital Valley',
                'image' => 'https://images.unsplash.com/photo-1485827404703-89b55fcc595e?w=800&h=400&fit=crop',
                'description' => 'Hackathon 48 jam untuk mengembangkan solusi AI dan machine learning.',
                'category' => 'Hackathon',
                'tags' => ['AI', 'Machine Learning', 'Hackathon', 'Competition']
            ],
            [
                'title' => 'Startup Pitch Night',
                'subtitle' => 'Showcase your startup to investors',
                'community_id' => 'COM1010',
                'community_name' => 'Startup Indonesia',
                'date' => '2026-01-15 18:00:00',
                'location' => 'Jakarta Startup Hub',
                'image' => 'https://images.unsplash.com/photo-1559136555-9303baea8ebd?w=800&h=400&fit=crop',
                'description' => 'Malam pitch startup untuk menampilkan ide bisnis kepada investor.',
                'category' => 'Networking',
                'tags' => ['Startup', 'Pitch', 'Investment', 'Entrepreneur']
            ],
            [
                'title' => 'Angular Workshop: Advanced Concepts',
                'subtitle' => 'Deep dive into Angular advanced features',
                'community_id' => 'COM1011',
                'community_name' => 'Angular Indonesia',
                'date' => '2026-01-18 10:00:00',
                'location' => 'Surabaya Tech Hub',
                'image' => 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=800&h=400&fit=crop',
                'description' => 'Workshop lanjutan Angular yang membahas routing, state management, dan performance optimization.',
                'category' => 'Workshop',
                'tags' => ['Angular', 'TypeScript', 'Frontend', 'SPA']
            ],
            [
                'title' => 'Cybersecurity Awareness Seminar',
                'subtitle' => 'Protecting your digital assets',
                'community_id' => 'COM1012',
                'community_name' => 'InfoSec Indonesia',
                'date' => '2026-01-20 14:00:00',
                'location' => 'Jakarta Convention Center',
                'image' => 'https://images.unsplash.com/photo-1563013544-824ae1b704d3?w=800&h=400&fit=crop',
                'description' => 'Seminar kesadaran keamanan siber untuk developer dan perusahaan.',
                'category' => 'Seminar',
                'tags' => ['Cybersecurity', 'InfoSec', 'Security', 'Privacy']
            ],
            [
                'title' => 'Game Development Bootcamp',
                'subtitle' => 'Create your first indie game',
                'community_id' => 'COM1013',
                'community_name' => 'IndieGameDev Indonesia',
                'date' => '2026-01-22 09:00:00',
                'location' => 'Bandung Creative Hub',
                'image' => 'https://images.unsplash.com/photo-1550745165-9bc0b252726f?w=800&h=400&fit=crop',
                'description' => 'Bootcamp pengembangan game indie menggunakan Unity dan C#.',
                'category' => 'Bootcamp',
                'tags' => ['GameDev', 'Unity', 'C#', 'Indie']
            ],
            [
                'title' => 'Digital Marketing for Developers',
                'subtitle' => 'Market your tech products effectively',
                'community_id' => 'COM1014',
                'community_name' => 'TechMarketing Indonesia',
                'date' => '2026-01-25 15:00:00',
                'location' => 'Online Event',
                'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800&h=400&fit=crop',
                'description' => 'Workshop pemasaran digital khusus untuk developer dan produk teknologi.',
                'category' => 'Workshop',
                'tags' => ['Marketing', 'Digital', 'Growth', 'Product']
            ],
            [
                'title' => 'Open Source Contribution Meetup',
                'subtitle' => 'How to contribute to open source projects',
                'community_id' => 'COM1015',
                'community_name' => 'OpenSource Indonesia',
                'date' => '2026-01-28 19:00:00',
                'location' => 'Jakarta Coworking Space',
                'image' => 'https://images.unsplash.com/photo-1556075798-4825dfaaf498?w=800&h=400&fit=crop',
                'description' => 'Meetup untuk belajar berkontribusi pada proyek open source.',
                'category' => 'Meetup',
                'tags' => ['OpenSource', 'GitHub', 'Contribution', 'Community']
            ],
            [
                'title' => 'Database Design & Optimization Workshop',
                'subtitle' => 'Build efficient database systems',
                'community_id' => 'COM1016',
                'community_name' => 'Database Indonesia',
                'date' => '2026-01-30 10:00:00',
                'location' => 'Surabaya Tech Center',
                'image' => 'https://images.unsplash.com/photo-1544383835-bda2bc66a55d?w=800&h=400&fit=crop',
                'description' => 'Workshop desain database dan optimasi query untuk performa maksimal.',
                'category' => 'Workshop',
                'tags' => ['Database', 'SQL', 'Performance', 'Optimization']
            ],
            [
                'title' => 'Microservices Architecture Conference',
                'subtitle' => 'Building scalable distributed systems',
                'community_id' => 'COM1017',
                'community_name' => 'Microservices Indonesia',
                'date' => '2026-02-02 09:00:00',
                'location' => 'Jakarta International Expo',
                'image' => 'https://images.unsplash.com/photo-1531403009284-440f080d1e12?w=800&h=400&fit=crop',
                'description' => 'Konferensi arsitektur microservices dengan studi kasus industri.',
                'category' => 'Conference',
                'tags' => ['Microservices', 'Architecture', 'Distributed', 'Scalability']
            ],
            [
                'title' => 'API Design Best Practices',
                'subtitle' => 'Design RESTful APIs that developers love',
                'community_id' => 'COM1018',
                'community_name' => 'API Indonesia',
                'date' => '2026-02-05 14:00:00',
                'location' => 'Yogyakarta Tech Hub',
                'image' => 'https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=800&h=400&fit=crop',
                'description' => 'Workshop best practices desain API RESTful dan GraphQL.',
                'category' => 'Workshop',
                'tags' => ['API', 'REST', 'GraphQL', 'Design']
            ],
            [
                'title' => 'Quality Assurance Automation',
                'subtitle' => 'Automate your testing workflow',
                'community_id' => 'COM1019',
                'community_name' => 'QA Indonesia',
                'date' => '2026-02-08 10:00:00',
                'location' => 'Bandung Software Park',
                'image' => 'https://images.unsplash.com/photo-1556761175-4b46a572b786?w=800&h=400&fit=crop',
                'description' => 'Workshop automation testing menggunakan Selenium, Cypress, dan Jest.',
                'category' => 'Workshop',
                'tags' => ['QA', 'Testing', 'Automation', 'Selenium']
            ],
            [
                'title' => 'Tech Leadership Summit',
                'subtitle' => 'Leading engineering teams effectively',
                'community_id' => 'COM1020',
                'community_name' => 'TechLeads Indonesia',
                'date' => '2026-02-10 09:00:00',
                'location' => 'Jakarta Business District',
                'image' => 'https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?w=800&h=400&fit=crop',
                'description' => 'Summit untuk tech leaders membahas management dan leadership skills.',
                'category' => 'Conference',
                'tags' => ['Leadership', 'Management', 'TechLead', 'Team']
            ],
            [
                'title' => 'Progressive Web Apps Workshop',
                'subtitle' => 'Build app-like web experiences',
                'community_id' => 'COM1021',
                'community_name' => 'PWA Indonesia',
                'date' => '2026-02-12 13:00:00',
                'location' => 'Online Event',
                'image' => 'https://images.unsplash.com/photo-1563986768609-322da13575f3?w=800&h=400&fit=crop',
                'description' => 'Workshop membangun Progressive Web Apps dengan service workers dan caching.',
                'category' => 'Workshop',
                'tags' => ['PWA', 'ServiceWorker', 'WebApp', 'Mobile']
            ],
            [
                'title' => 'Data Engineering Pipeline',
                'subtitle' => 'Build robust data processing systems',
                'community_id' => 'COM1022',
                'community_name' => 'DataEng Indonesia',
                'date' => '2026-02-15 10:00:00',
                'location' => 'Surabaya Data Center',
                'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=800&h=400&fit=crop',
                'description' => 'Workshop data engineering dengan Apache Kafka, Spark, dan Airflow.',
                'category' => 'Workshop',
                'tags' => ['DataEngineering', 'Pipeline', 'BigData', 'ETL']
            ],
            [
                'title' => 'Serverless Architecture Meetup',
                'subtitle' => 'Building without servers',
                'community_id' => 'COM1023',
                'community_name' => 'Serverless Indonesia',
                'date' => '2026-02-18 19:00:00',
                'location' => 'Jakarta Cloud Center',
                'image' => 'https://images.unsplash.com/photo-1558494949-ef010cbdcc31?w=800&h=400&fit=crop',
                'description' => 'Meetup arsitektur serverless dengan AWS Lambda, Vercel, dan Netlify.',
                'category' => 'Meetup',
                'tags' => ['Serverless', 'Lambda', 'Cloud', 'Functions']
            ],
            [
                'title' => 'No-Code/Low-Code Revolution',
                'subtitle' => 'Build apps without traditional coding',
                'community_id' => 'COM1024',
                'community_name' => 'NoCode Indonesia',
                'date' => '2026-02-20 14:00:00',
                'location' => 'Bandung Innovation Hub',
                'image' => 'https://images.unsplash.com/photo-1553877522-43269d4ea984?w=800&h=400&fit=crop',
                'description' => 'Workshop no-code/low-code tools untuk rapid prototyping.',
                'category' => 'Workshop',
                'tags' => ['NoCode', 'LowCode', 'Rapid', 'Prototyping']
            ],
            [
                'title' => 'Agile Development Masterclass',
                'subtitle' => 'Master agile methodologies',
                'community_id' => 'COM1025',
                'community_name' => 'Agile Indonesia',
                'date' => '2026-02-22 09:00:00',
                'location' => 'Yogyakarta Business Center',
                'image' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?w=800&h=400&fit=crop',
                'description' => 'Masterclass metodologi Agile, Scrum, dan Kanban untuk tim development.',
                'category' => 'Masterclass',
                'tags' => ['Agile', 'Scrum', 'Kanban', 'Methodology']
            ]
        ];

        foreach ($events as $eventData) {
            Event::create($eventData);
        }

        // Add more communities and events using factories (without relationships)
        Community::factory(5)->create();
        Event::factory(5)->create();
    }
}
