@extends('layouts.app')

@section('title', 'Buy Product Hunt Accounts - Aged & Maker Rank Upvote Profiles')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'Product Hunt',
        'title' => 'Buy Aged & Verified Product Hunt Accounts (Launch Ready)',
        'description' => 'Matured Product Hunt profiles with authentic maker interactions, historical upvote records, and established community trust scores. Built to give your SaaS, AI tool, or startup launch authentic initial upvote momentum without algorithmic shadowban flags.',
        'highlights' => [
            'Aged 6 Months to 3+ Years: Established account tenure ensures upvotes carry legitimate algorithmic ranking weight.',
            'Upvote, Comment & Review Ready: Active community karma unlocks immediate freedom to comment, review, and support launches.',
            'Maker & Hunter Profiles Available: Curated accounts with verified badge history and active developer credentials.',
            'Clean Residential IP Creation: Zero suspicious proxy flags, ensuring complete retention on launch days.'
        ],
        'stats' => [
            ['label' => 'Account Tenure', 'value' => '6M - 3+ Years Aged'],
            ['label' => 'Upvote Weight', 'value' => 'High Algorithmic Trust'],
            ['label' => 'Community Status', 'value' => 'Reviewer / Maker Active'],
            ['label' => 'Delivery Format', 'value' => 'User:Pass:Mail:Cookie'],
        ],
        'cards' => [
            [
                'title' => 'Aged Product Hunt Account (6+ Months)',
                'description' => 'Matured Product Hunt account with natural creation timestamp and initial upvote history. Ideal for day-1 launch support and product reviews.',
                'price' => '$7.00',
                'original_price' => '$11.00',
                'badge' => 'Launch Ready',
                'rating' => '4.8',
                'reviews' => '110',
                'features' => [
                    'Age: 6+ Months Natural Account Tenure',
                    'Upvotes Count in Official Top Products Algorithm',
                    'Complete Profile Setup (Avatar & Headline)',
                    'Original Creation Email & Password Included',
                    '48-Hour Replacement Guarantee'
                ]
            ],
            [
                'title' => 'Veteran Product Hunt Account (1 - 2 Years)',
                'description' => 'High-reputation community profile with years of active upvoting, natural discussions, and high maker authority.',
                'price' => '$18.00',
                'original_price' => '$26.00',
                'badge' => 'Most Popular',
                'rating' => '5.0',
                'reviews' => '245',
                'features' => [
                    'Age: 1 to 2 Years Active Community Lifetime',
                    'Maximum Upvote Weight on Product Hunt Homepage',
                    'Passed Algorithmic Bot & Shadowban Audits',
                    'Full Cookie Session Export (JSON format)',
                    'Includes Full Recovery Email Access'
                ]
            ],
            [
                'title' => 'Product Hunt Maker / Hunter Account',
                'description' => 'Specialized account with prior product hunter history or maker badges. Supreme authority for submitting new startup hunts directly to the front page.',
                'price' => '$38.00',
                'original_price' => '$55.00',
                'badge' => 'Hunter Authority',
                'rating' => '5.0',
                'reviews' => '94',
                'features' => [
                    'Prior Product Hunt Submissions History',
                    'Hunter Badges & Community Follower Base',
                    'Immediate Hunt Submission Rights',
                    'Full Residential Fingerprint History',
                    'Priority 24/7 Dedicated Support'
                ]
            ],
            [
                'title' => 'Startup Launch Sprint Pack (10 Accounts)',
                'description' => '10 aged Product Hunt accounts delivered for tech founders, SaaS startups, and marketing agencies driving top #1 Product of the Day campaigns.',
                'price' => '$95.00',
                'original_price' => '$140.00',
                'badge' => 'Launch Sprint',
                'rating' => '4.9',
                'reviews' => '64',
                'features' => [
                    '10 Matured Product Hunt Profiles (6-24M+)',
                    'Spread Across Diverse Residential IP Geographies',
                    'Anti-Detect Browser Launch Strategy Sheet',
                    'Direct CSV Data Download Format',
                    'Direct Telegram/WhatsApp Specialist'
                ]
            ]
        ]
    ])
@endsection
