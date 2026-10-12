@extends('layouts.app')

@section('title', 'Buy Reddit Accounts - Aged & High Karma Seasoned Profiles')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'Reddit Accounts',
        'title' => 'Buy Aged & High-Karma Reddit Accounts',
        'description' => 'Aged Reddit accounts with natural post and comment karma, established account tenure, and clean posting history. Grant immediate submission and commenting permissions in strict, high-karma threshold subreddits without automod deletions.',
        'highlights' => [
            'Post & Comment Karma Included: Pre-loaded with genuine karma points from real organic community discussions.',
            'Aged 6 Months to 5+ Years: Mature creation timestamps that instantly bypass new-account automod spam filters.',
            'Original Email Access Bound: Full credentials including email password, username, and account password.',
            'Shadowban-Free Verification: Tested through null-program shadowban checkers before order fulfillment.'
        ],
        'stats' => [
            ['label' => 'Karma Balance', 'value' => '100 - 5,000+ Karma'],
            ['label' => 'Account Tenure', 'value' => '6M - 5+ Years Aged'],
            ['label' => 'Automod Status', 'value' => '100% Filter Cleared'],
            ['label' => 'Delivery Format', 'value' => 'User:Pass:Mail:Cookie'],
        ],
        'cards' => [
            [
                'title' => 'Aged Reddit Account (6+ Months, 100+ Karma)',
                'description' => 'Matured Reddit account with initial comment and post karma. Bypasses 90% of basic community automoderator posting restrictions.',
                'price' => '$5.50',
                'original_price' => '$8.00',
                'badge' => 'Starter Karma',
                'rating' => '4.8',
                'reviews' => '142',
                'features' => [
                    'Age: 6+ Months Established History',
                    '100+ Organic Post & Comment Karma',
                    'Verified Email Bound & Included',
                    'Clean Static Residential Registration IP',
                    '48-Hour Replacement Guarantee'
                ]
            ],
            [
                'title' => 'High-Karma Reddit Account (1+ Year, 500+ Karma)',
                'description' => 'High-trust Reddit profile with substantial karma and 12+ months history. Ready for immediate posting in top subreddits like r/cryptocurrency, r/entrepreneur, and r/technology.',
                'price' => '$14.00',
                'original_price' => '$22.00',
                'badge' => 'Most Popular',
                'rating' => '5.0',
                'reviews' => '310',
                'features' => [
                    'Age: 1+ Year Natural Community History',
                    '500 - 1,000+ Real Karma Points',
                    'Unrestricted Post & Comment Freedom',
                    'Session Cookies (JSON/Netscape) Included',
                    'Full Recovery Email Access'
                ]
            ],
            [
                'title' => 'Veteran Reddit Account (3+ Years, 2,000+ Karma)',
                'description' => 'Elite Reddit account with years of natural history and high authority. Supreme algorithmic trust for viral growth, brand mentions, and AMA hosting.',
                'price' => '$29.00',
                'original_price' => '$42.00',
                'badge' => 'Veteran Authority',
                'rating' => '5.0',
                'reviews' => '188',
                'features' => [
                    'Age: 3 to 5+ Years Historic Lifetime',
                    '2,000 - 5,000+ Post & Comment Karma',
                    'Trophy Badges & Verified Email Active',
                    'Full Residential Fingerprint Profile',
                    'Priority 24/7 Dedicated Support'
                ]
            ],
            [
                'title' => 'Bulk Reddit Marketing Pack (5 Accounts)',
                'description' => '5 aged, high-karma Reddit accounts configured for marketing agencies, affiliate promotions, and coordinated organic community discussions.',
                'price' => '$58.00',
                'original_price' => '$85.00',
                'badge' => 'Agency Pack',
                'rating' => '4.9',
                'reviews' => '76',
                'features' => [
                    '5 Matured Reddit Accounts (500+ Karma each)',
                    'Spread Across Diverse Residential IP Geographies',
                    'Anti-Detect Browser Setup Blueprint Included',
                    'Direct CSV Data Download Format',
                    'Direct Telegram/WhatsApp Specialist'
                ]
            ]
        ]
    ])
@endsection
