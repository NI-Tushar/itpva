@extends('layouts.app')

@section('title', 'Buy LinkedIn Accounts - Aged & Sales Navigator Verified Profiles')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'LinkedIn Accounts',
        'title' => 'Buy Aged & Verified LinkedIn Accounts (B2B Ready)',
        'description' => 'Seasoned LinkedIn profiles with authentic professional bios, established connection networks, and clean identity records. Ready for Sales Navigator, automated B2B outreach tools (Expandi, Waalaxy, Dripify), and executive talent prospecting.',
        'highlights' => [
            'Complete Professional Profiles: Filled educational history, career experience, profile headshots, and cover art.',
            'Warm Connection Networks: 50 to 500+ authentic industry connections already established.',
            'Sales Navigator Compatible: Clean account health ready for Sales Navigator subscriptions and high InMail volume.',
            'Zero Restriction History: Clean residential IP creation ensures no identity challenge or temporary lockouts.'
        ],
        'stats' => [
            ['label' => 'Profile Completion', 'value' => '100% All-Star'],
            ['label' => 'Connection Base', 'value' => '50 - 500+ Connections'],
            ['label' => 'B2B Compatibility', 'value' => 'Expandi & Waalaxy'],
            ['label' => 'Account Warranty', 'value' => '48h Replacement SLA'],
        ],
        'cards' => [
            [
                'title' => 'Fresh LinkedIn PVA Account',
                'description' => 'Real phone-verified LinkedIn profile with clean credentials and initial setup. Ready for personal career positioning or custom brand building.',
                'price' => '$5.00',
                'original_price' => '$8.00',
                'badge' => 'Fresh Verified',
                'rating' => '4.8',
                'reviews' => '94',
                'features' => [
                    'Phone Number & Email Verified (PVA)',
                    'Complete Name, Headline & Professional Bio',
                    'Clean Static Residential Registration IP',
                    'Format: Email:Pass:Phone:Cookie',
                    '48-Hour Replacement Guarantee'
                ]
            ],
            [
                'title' => 'Aged LinkedIn Account (3 - 6 Months)',
                'description' => 'Matured LinkedIn profile with established connection network and natural tenure. Bypasses strict anti-bot detection for automated outreach.',
                'price' => '$15.00',
                'original_price' => '$22.00',
                'badge' => 'Most Popular',
                'rating' => '5.0',
                'reviews' => '215',
                'features' => [
                    'Age: 3 to 6 Months Natural Tenured Lifetime',
                    '50+ Real First-Degree Professional Connections',
                    'Compatible with Automated Outreach Scrapers',
                    'Session Cookies (JSON/Netscape) Included',
                    'Includes Full Recovery Email Access'
                ]
            ],
            [
                'title' => 'Vintage LinkedIn Account (1+ Year Aged)',
                'description' => 'High-authority legacy profile with 100-300+ connections and mature creation dates. High weekly invitation limit for B2B lead generation agencies.',
                'price' => '$32.00',
                'original_price' => '$45.00',
                'badge' => 'High Authority',
                'rating' => '5.0',
                'reviews' => '160',
                'features' => [
                    '1+ Year Aged Account Tenure (2020-2023)',
                    '100 - 300+ Verified Network Connections',
                    'Higher Weekly Connection Invitation Caps',
                    'Sales Navigator Ready Without Immediate ID Checks',
                    'Priority 24/7 Dedicated Support Specialist'
                ]
            ],
            [
                'title' => 'Bulk B2B Outreach Pack (5 Accounts)',
                'description' => '5 seasoned LinkedIn profiles configured for lead gen agencies scaling outbound campaigns across diverse industry verticals.',
                'price' => '$135.00',
                'original_price' => '$190.00',
                'badge' => 'Agency Fleet',
                'rating' => '4.9',
                'reviews' => '72',
                'features' => [
                    '5 Aged LinkedIn PVA Accounts (3-12M+)',
                    'Spread Across Unique Clean Residential IP Blocks',
                    'Anti-Detect Browser Integration Guideline',
                    'Structured CSV Format Data Handover',
                    'Direct Telegram/WhatsApp VIP Tech Support'
                ]
            ]
        ]
    ])
@endsection
