<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Community;
use App\Models\Event;
use App\Models\Literature;
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
        // Create a test user if it does not already exist
        if (! User::where('email', 'test@example.com')->exists()) {
            User::factory()->create([
                'name' => 'Test User',
                'email' => 'test@example.com',
            ]);
        }

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

        $literatures = [
            [
                'title' => 'Clean Code: A Handbook of Agile Software Craftsmanship',
                'author' => 'Robert C. Martin',
                'cover' => 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1436202607l/3735293.jpg',
                'rating' => 4.5,
                'description' => "Even bad code can function. But if code isn't clean, it can bring a development organization to its knees. Every year, countless hours and significant resources are lost because of poorly written code. But it doesn't have to be that way.",
                'year_edition' => '2023 2nd Edition',
                'total_bookmarked' => 3420,
                'tags' => [
                    ['name' => 'Software Engineering', 'type' => 'primary'],
                    ['name' => 'Programming', 'type' => 'secondary'],
                    ['name' => 'Best Practices', 'type' => 'secondary'],
                    ['name' => 'Code Quality', 'type' => 'secondary'],
                ],
                'copy_types' => [
                    'Physical' => [
                        'description' => 'Physical paperback/hardcover edition available at retail locations',
                        'sources' => [
                            ['name' => 'Amazon', 'url' => 'https://amazon.com/Clean-Code-Handbook-Software-Craftsmanship/dp/0132350884', 'type' => 'online_retailer', 'shipping_available' => true],
                            ['name' => 'Barnes & Noble - Union Square', 'url' => 'https://www.barnesandnoble.com', 'maps_url' => 'https://maps.google.com/?q=Barnes+%26+Noble+Union+Square+NYC', 'address' => '33 E 17th St, New York, NY 10003', 'type' => 'bookstore_chain', 'phone' => '(212) 673-2155', 'real_time_inventory' => true],
                            ['name' => 'The Strand Book Store', 'url' => 'https://www.strandbooks.com', 'maps_url' => 'https://maps.google.com/?q=The+Strand+Book+Store+NYC', 'address' => '828 Broadway, New York, NY 10003', 'type' => 'independent_bookstore', 'phone' => '(212) 473-1452', 'real_time_inventory' => false],
                            ['name' => 'New York Public Library - Tech Collection', 'url' => 'https://nypl.org/locations/schwarzman', 'maps_url' => 'https://maps.google.com/?q=New+York+Public+Library+Main+Branch', 'address' => '476 5th Ave, New York, NY 10018', 'type' => 'public_library', 'phone' => '(917) 275-6975', 'real_time_inventory' => true],
                            ['name' => 'MIT Library - Engineering Collection', 'url' => 'https://libraries.mit.edu/', 'maps_url' => 'https://maps.google.com/?q=MIT+Library+Cambridge+MA', 'address' => '77 Massachusetts Ave, Cambridge, MA 02139', 'type' => 'university_library', 'real_time_inventory' => true],
                        ],
                    ],
                    'Digital' => [
                        'description' => 'Digital edition for online reading',
                        'sources' => [
                            ['name' => 'Amazon Kindle', 'url' => 'https://amazon.com/Clean-Code-Handbook-Software-Craftsmanship/dp/0132350884', 'type' => 'purchase'],
                            ['name' => 'Google Books', 'url' => 'https://books.google.com/books?id=CpA5DwAAQBAJ', 'type' => 'preview'],
                        ],
                    ],
                ],
                'licensing_type' => 'Pay-to-own',
                'sources' => [
                    ['name' => 'IEEE Xplore', 'url' => 'https://ieeexplore.ieee.org/document/6196583'],
                    ['name' => 'Springer', 'url' => 'https://link.springer.com/book/10.1007/978-0-13-597444-5'],
                    ['name' => 'ACM Digital Library', 'url' => 'https://dl.acm.org/doi/10.5555/1413532'],
                ],
                'twitter_embeds' => [
                    ['embed_url' => 'https://twitter.com/unclebobmartin/status/123456789', 'keyword' => 'Clean Code', 'generated_at' => '2023-10-01T12:00:00Z'],
                    ['embed_url' => 'https://twitter.com/martinfowler/status/987654321', 'keyword' => 'Software Engineering', 'generated_at' => '2023-10-01T12:00:00Z'],
                ],
                'related_posts' => [1, 8],
                'community_id' => 'literacy-circle',
            ],
            [
                'title' => 'The Pragmatic Programmer: Your Journey to Mastery',
                'author' => 'Andrew Hunt & David Thomas',
                'cover' => 'https://images-na.ssl-images-amazon.com/images/I/41as+WafrFL._SX258_BO1,204,203,200_.jpg',
                'rating' => 4.8,
                'description' => 'Classic guide for software developers focusing on practical techniques, continuous learning, and craftsmanship.',
                'year_edition' => '20th Anniversary Edition',
                'total_bookmarked' => 2980,
                'tags' => [
                    ['name' => 'Software Craftsmanship', 'type' => 'primary'],
                    ['name' => 'Career Growth', 'type' => 'secondary'],
                    ['name' => 'Best Practices', 'type' => 'secondary'],
                ],
                'copy_types' => [
                    'Physical' => [
                        'description' => 'Hardcover edition with updated content',
                        'sources' => [
                            ['name' => 'Amazon', 'url' => 'https://www.amazon.com/Pragmatic-Programmer-journey-mastery-Anniversary/dp/0135957052', 'type' => 'online_retailer', 'shipping_available' => true],
                            ['name' => 'Waterstones London', 'url' => 'https://www.waterstones.com', 'address' => '203-206 Piccadilly, St. James\'s, London W1J 9HD', 'type' => 'bookstore_chain', 'phone' => '+44 20 7851 2400'],
                        ],
                    ],
                    'Digital' => [
                        'description' => 'DRM-free ebook download',
                        'sources' => [
                            ['name' => 'Apple Books', 'url' => 'https://books.apple.com/us/book/the-pragmatic-programmer/id1483838938', 'type' => 'purchase'],
                            ['name' => 'O\'Reilly Online Learning', 'url' => 'https://learning.oreilly.com/library/view/the-pragmatic-programmer/9780135956977/', 'type' => 'subscription'],
                        ],
                    ],
                ],
                'licensing_type' => 'Commercial',
                'sources' => [
                    ['name' => 'Pearson', 'url' => 'https://www.pearson.com/us/higher-education/program/Hunt-Pragmatic-Programmer-The-20th-Anniversary-Edition-Your-Journey-to-Mastery-2nd-Edition/PGM2143617.html'],
                    ['name' => 'O\'Reilly', 'url' => 'https://learning.oreilly.com/library/view/the-pragmatic-programmer/9780135956977/'],
                ],
                'twitter_embeds' => [
                    ['embed_url' => 'https://twitter.com/pragprog/status/1123456789', 'keyword' => 'Pragmatic Programmer', 'generated_at' => '2024-02-10T08:30:00Z'],
                ],
                'related_posts' => [3, 12, 15],
                'community_id' => 'craftsmanship-club',
            ],
            [
                'title' => 'Refactoring: Improving the Design of Existing Code',
                'author' => 'Martin Fowler',
                'cover' => 'https://images-na.ssl-images-amazon.com/images/I/51k+e7V3RNL._SX396_BO1,204,203,200_.jpg',
                'rating' => 4.6,
                'description' => 'Detailed catalog of refactorings with real-world examples to improve code structure without changing behavior.',
                'year_edition' => '2nd Edition',
                'total_bookmarked' => 2565,
                'tags' => [
                    ['name' => 'Refactoring', 'type' => 'primary'],
                    ['name' => 'Code Quality', 'type' => 'secondary'],
                    ['name' => 'Architecture', 'type' => 'secondary'],
                ],
                'copy_types' => [
                    'Physical' => [
                        'description' => 'Hardcover with color illustrations and code samples',
                        'sources' => [
                            ['name' => 'Book Depository', 'url' => 'https://www.bookdepository.com/Refactoring-Martin-Fowler/9780134757599', 'type' => 'online_retailer', 'shipping_available' => true],
                        ],
                    ],
                    'Digital' => [
                        'description' => 'Ebook in PDF and ePub formats',
                        'sources' => [
                            ['name' => 'InformIT', 'url' => 'https://www.informit.com/store/refactoring-improving-the-design-of-existing-code-9780134757599', 'type' => 'purchase'],
                        ],
                    ],
                ],
                'licensing_type' => 'Pay-to-own',
                'sources' => [
                    ['name' => 'Addison-Wesley', 'url' => 'https://www.informit.com/store/refactoring-improving-the-design-of-existing-code-9780134757599'],
                ],
                'twitter_embeds' => [
                    ['embed_url' => 'https://twitter.com/martinfowler/status/1356789012', 'keyword' => 'Refactoring', 'generated_at' => '2024-01-18T15:00:00Z'],
                ],
                'related_posts' => [5, 11],
                'community_id' => 'architecture-guild',
            ],
            [
                'title' => 'Design Patterns: Elements of Reusable Object-Oriented Software',
                'author' => 'Erich Gamma, Richard Helm, Ralph Johnson, John Vlissides',
                'cover' => 'https://images-na.ssl-images-amazon.com/images/I/51kuc0iWoKL._SX396_BO1,204,203,200_.jpg',
                'rating' => 4.4,
                'description' => 'Seminal catalog of object-oriented design patterns that established a common vocabulary for software engineers.',
                'year_edition' => '2019 Reprint',
                'total_bookmarked' => 1890,
                'tags' => [
                    ['name' => 'Design Patterns', 'type' => 'primary'],
                    ['name' => 'Object-Oriented Programming', 'type' => 'secondary'],
                    ['name' => 'Architecture', 'type' => 'secondary'],
                ],
                'copy_types' => [
                    'Physical' => [
                        'description' => 'Trade paperback reprint',
                        'sources' => [
                            ['name' => 'Amazon', 'url' => 'https://www.amazon.com/Design-Patterns-Elements-Reusable-Object-Oriented/dp/0201633612', 'type' => 'online_retailer', 'shipping_available' => true],
                        ],
                    ],
                    'Digital' => [
                        'description' => 'Digital scan with searchable text',
                        'sources' => [
                            ['name' => 'Safari Books Online', 'url' => 'https://learning.oreilly.com/library/view/design-patterns-elements/0201633612/', 'type' => 'subscription'],
                        ],
                    ],
                ],
                'licensing_type' => 'Commercial',
                'sources' => [
                    ['name' => 'Pearson', 'url' => 'https://www.pearson.com/en-us/subject-catalog/p/design-patterns-elements-of-reusable-object-oriented-software/P200000004602/9780201633610'],
                ],
                'twitter_embeds' => [
                    ['embed_url' => 'https://twitter.com/gof_design/status/1234098765', 'keyword' => 'Design Patterns', 'generated_at' => '2023-11-02T10:45:00Z'],
                ],
                'related_posts' => [2, 7, 19],
                'community_id' => 'oop-forum',
            ],
            [
                'title' => 'Accelerate: The Science of DevOps and Building High Performing Technology Organizations',
                'author' => 'Nicole Forsgren, Jez Humble, Gene Kim',
                'cover' => 'https://images-na.ssl-images-amazon.com/images/I/41sZk2pWcSL._SX331_BO1,204,203,200_.jpg',
                'rating' => 4.7,
                'description' => 'Groundbreaking research on the practices and capabilities that drive high-performing technology teams.',
                'year_edition' => '2018 Edition',
                'total_bookmarked' => 2215,
                'tags' => [
                    ['name' => 'DevOps', 'type' => 'primary'],
                    ['name' => 'Engineering Culture', 'type' => 'secondary'],
                    ['name' => 'Metrics', 'type' => 'secondary'],
                ],
                'copy_types' => [
                    'Physical' => [
                        'description' => 'Paperback edition',
                        'sources' => [
                            ['name' => 'Amazon', 'url' => 'https://www.amazon.com/Accelerate-Software-Performing-Technology-Organizations/dp/1942788339', 'type' => 'online_retailer', 'shipping_available' => true],
                            ['name' => 'Powell\'s City of Books', 'url' => 'https://www.powells.com', 'address' => '1005 W Burnside St, Portland, OR 97209', 'type' => 'independent_bookstore', 'phone' => '(800) 878-7323'],
                        ],
                    ],
                    'Digital' => [
                        'description' => 'Kindle and ePub formats',
                        'sources' => [
                            ['name' => 'Kindle Store', 'url' => 'https://www.amazon.com/Accelerate-Software-Performing-Technology-Organizations-ebook/dp/B07B9F83WM', 'type' => 'purchase'],
                            ['name' => 'Kobo', 'url' => 'https://www.kobo.com/us/en/ebook/accelerate-the-science-of-lean-software-and-devops', 'type' => 'purchase'],
                        ],
                    ],
                ],
                'licensing_type' => 'Pay-to-own',
                'sources' => [
                    ['name' => 'IT Revolution', 'url' => 'https://itrevolution.com/product/accelerate/'],
                ],
                'twitter_embeds' => [
                    ['embed_url' => 'https://twitter.com/nicolefv/status/1181234567', 'keyword' => 'Accelerate Book', 'generated_at' => '2023-09-12T14:00:00Z'],
                ],
                'related_posts' => [4, 9, 16],
                'community_id' => 'devops-chapter',
            ],
            [
                'title' => 'Continuous Delivery: Reliable Software Releases through Build, Test, and Deployment Automation',
                'author' => 'Jez Humble & David Farley',
                'cover' => 'https://images-na.ssl-images-amazon.com/images/I/51tW-UJVvML._SX396_BO1,204,203,200_.jpg',
                'rating' => 4.3,
                'description' => 'Comprehensive guide for implementing continuous delivery pipelines and deployment automation.',
                'year_edition' => '2010 Edition',
                'total_bookmarked' => 1735,
                'tags' => [
                    ['name' => 'Continuous Delivery', 'type' => 'primary'],
                    ['name' => 'Automation', 'type' => 'secondary'],
                    ['name' => 'DevOps', 'type' => 'secondary'],
                ],
                'copy_types' => [
                    'Physical' => [
                        'description' => 'Paperback edition for reference libraries',
                        'sources' => [
                            ['name' => 'Amazon', 'url' => 'https://www.amazon.com/Continuous-Delivery-Deployment-Automation-Addison-Wesley/dp/0321601912', 'type' => 'online_retailer', 'shipping_available' => true],
                        ],
                    ],
                    'Digital' => [
                        'description' => 'PDF and ePub formats available globally',
                        'sources' => [
                            ['name' => 'InformIT', 'url' => 'https://www.informit.com/store/continuous-delivery-reliable-software-releases-through-9780321601919', 'type' => 'purchase'],
                        ],
                    ],
                ],
                'licensing_type' => 'Commercial',
                'sources' => [
                    ['name' => 'Pearson', 'url' => 'https://www.pearson.com/us/higher-education/program/Humble-Continuous-Delivery-Reliable-Software-Releases-through-Build-Test-and-Deployment-Automation/PGM2069560.html'],
                ],
                'twitter_embeds' => [
                    ['embed_url' => 'https://twitter.com/jez_humble/status/1298374654', 'keyword' => 'Continuous Delivery', 'generated_at' => '2024-03-05T17:20:00Z'],
                ],
                'related_posts' => [6, 13],
                'community_id' => 'delivery-guild',
            ],
            [
                'title' => 'Domain-Driven Design: Tackling Complexity in the Heart of Software',
                'author' => 'Eric Evans',
                'cover' => 'https://images-na.ssl-images-amazon.com/images/I/41ml2Z6XtwL._SX396_BO1,204,203,200_.jpg',
                'rating' => 4.2,
                'description' => 'Blueprint for creating rich domain models and aligning software with business strategy.',
                'year_edition' => 'Anniversary Edition',
                'total_bookmarked' => 2044,
                'tags' => [
                    ['name' => 'Domain-Driven Design', 'type' => 'primary'],
                    ['name' => 'Architecture', 'type' => 'secondary'],
                    ['name' => 'Business Alignment', 'type' => 'secondary'],
                ],
                'copy_types' => [
                    'Physical' => [
                        'description' => 'Hardcover reference edition',
                        'sources' => [
                            ['name' => 'Amazon', 'url' => 'https://www.amazon.com/Domain-Driven-Design-Tackling-Complexity-Software/dp/0321125215', 'type' => 'online_retailer', 'shipping_available' => true],
                        ],
                    ],
                    'Digital' => [
                        'description' => 'Searchable PDF via publisher',
                        'sources' => [
                            ['name' => 'Safari Books Online', 'url' => 'https://learning.oreilly.com/library/view/domain-driven-design-tackling/0321125215/', 'type' => 'subscription'],
                        ],
                    ],
                ],
                'licensing_type' => 'Commercial',
                'sources' => [
                    ['name' => 'Addison-Wesley', 'url' => 'https://www.informit.com/store/domain-driven-design-tackling-complexity-in-the-heart-9780321125217'],
                ],
                'twitter_embeds' => [
                    ['embed_url' => 'https://twitter.com/dddcommunity/status/1109876543', 'keyword' => 'DDD', 'generated_at' => '2024-04-22T11:15:00Z'],
                ],
                'related_posts' => [10, 18],
                'community_id' => 'ddd-society',
            ],
            [
                'title' => 'Clean Architecture: A Craftsman\'s Guide to Software Structure and Design',
                'author' => 'Robert C. Martin',
                'cover' => 'https://images-na.ssl-images-amazon.com/images/I/41-sN-mzwKL._SX382_BO1,204,203,200_.jpg',
                'rating' => 4.1,
                'description' => 'Guidelines and principles for designing robust, maintainable software architectures.',
                'year_edition' => '2017 Edition',
                'total_bookmarked' => 1876,
                'tags' => [
                    ['name' => 'Architecture', 'type' => 'primary'],
                    ['name' => 'Clean Code', 'type' => 'secondary'],
                    ['name' => 'SOLID Principles', 'type' => 'secondary'],
                ],
                'copy_types' => [
                    'Physical' => [
                        'description' => 'Softcover with diagrams',
                        'sources' => [
                            ['name' => 'Amazon', 'url' => 'https://www.amazon.com/Clean-Architecture-Craftsmans-Software-Structure/dp/0134494164', 'type' => 'online_retailer', 'shipping_available' => true],
                        ],
                    ],
                    'Digital' => [
                        'description' => 'eBook with code samples',
                        'sources' => [
                            ['name' => 'Google Play Books', 'url' => 'https://play.google.com/store/books/details/Robert_C_Martin_Clean_Architecture?id=7Zl0DQAAQBAJ', 'type' => 'purchase'],
                        ],
                    ],
                ],
                'licensing_type' => 'Commercial',
                'sources' => [
                    ['name' => 'Pearson', 'url' => 'https://www.pearson.com/us/higher-education/program/Martin-Clean-Architecture-A-Craftsman-s-Guide-to-Software-Structure-and-Design/PGM2750768.html'],
                ],
                'twitter_embeds' => [
                    ['embed_url' => 'https://twitter.com/unclebobmartin/status/1405678912', 'keyword' => 'Clean Architecture', 'generated_at' => '2024-05-14T09:40:00Z'],
                ],
                'related_posts' => [14, 20],
                'community_id' => 'architecture-guild',
            ],
            [
                'title' => 'Working Effectively with Legacy Code',
                'author' => 'Michael Feathers',
                'cover' => 'https://images-na.ssl-images-amazon.com/images/I/51l8nUD5KPL._SX379_BO1,204,203,200_.jpg',
                'rating' => 4.4,
                'description' => 'Strategies and techniques for adding features and improving designs in legacy codebases safely.',
                'year_edition' => '2005 Edition',
                'total_bookmarked' => 1650,
                'tags' => [
                    ['name' => 'Legacy Code', 'type' => 'primary'],
                    ['name' => 'Testing', 'type' => 'secondary'],
                    ['name' => 'Refactoring', 'type' => 'secondary'],
                ],
                'copy_types' => [
                    'Physical' => [
                        'description' => 'Paperback edition',
                        'sources' => [
                            ['name' => 'Amazon', 'url' => 'https://www.amazon.com/Working-Effectively-Legacy-Michael-Feathers/dp/0131177052', 'type' => 'online_retailer', 'shipping_available' => true],
                        ],
                    ],
                    'Digital' => [
                        'description' => 'PDF via subscription service',
                        'sources' => [
                            ['name' => 'Safari Books Online', 'url' => 'https://learning.oreilly.com/library/view/working-effectively-with/0131177052/', 'type' => 'subscription'],
                        ],
                    ],
                ],
                'licensing_type' => 'Commercial',
                'sources' => [
                    ['name' => 'Pearson', 'url' => 'https://www.pearson.com/us/higher-education/program/Feathers-Working-Effectively-with-Legacy-Code/PGM289283.html'],
                ],
                'twitter_embeds' => [
                    ['embed_url' => 'https://twitter.com/michaelfeathers/status/1212345678', 'keyword' => 'Legacy Code', 'generated_at' => '2023-12-19T13:25:00Z'],
                ],
                'related_posts' => [21, 22],
                'community_id' => 'legacy-squad',
            ],
            [
                'title' => 'Site Reliability Engineering: How Google Runs Production Systems',
                'author' => 'Betsy Beyer, Chris Jones, Jennifer Petoff, Niall Richard Murphy',
                'cover' => 'https://images-na.ssl-images-amazon.com/images/I/51u0XZQZ0HL._SX379_BO1,204,203,200_.jpg',
                'rating' => 4.5,
                'description' => 'Collection of essays detailing Google\'s approach to running reliable, scalable production services.',
                'year_edition' => '1st Edition',
                'total_bookmarked' => 2320,
                'tags' => [
                    ['name' => 'SRE', 'type' => 'primary'],
                    ['name' => 'Reliability', 'type' => 'secondary'],
                    ['name' => 'Operations', 'type' => 'secondary'],
                ],
                'copy_types' => [
                    'Physical' => [
                        'description' => 'Printed edition for reference',
                        'sources' => [
                            ['name' => 'Amazon', 'url' => 'https://www.amazon.com/Site-Reliability-Engineering-Production-Systems/dp/149192912X', 'type' => 'online_retailer', 'shipping_available' => true],
                            ['name' => 'Google Store', 'url' => 'https://sre.google/books', 'type' => 'publisher'],
                        ],
                    ],
                    'Digital' => [
                        'description' => 'Free online HTML version',
                        'sources' => [
                            ['name' => 'Google SRE', 'url' => 'https://sre.google/sre-book/table-of-contents/', 'type' => 'open_access'],
                        ],
                    ],
                ],
                'licensing_type' => 'Mixed (Free & Commercial)',
                'sources' => [
                    ['name' => "O'Reilly Media", 'url' => 'https://www.oreilly.com/library/view/site-reliability-engineering/9781491929117/'],
                ],
                'twitter_embeds' => [
                    ['embed_url' => 'https://twitter.com/ask_sre/status/1345678901', 'keyword' => 'SRE Book', 'generated_at' => '2024-02-21T16:10:00Z'],
                ],
                'related_posts' => [24, 25, 26],
                'community_id' => 'sre-lab',
            ],
        ];

        foreach ($literatures as $literatureData) {
            Literature::create($literatureData);
        }

        // Add more communities and events using factories (without relationships)
        Community::factory(5)->create();
        Event::factory(5)->create();
    }
}
