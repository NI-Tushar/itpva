@extends('layouts.app')

@section('title', 'Buy Instagram Clone Accounts - Aged 1-30 Days PVA with 2FA')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'Resilient Social Media Growth Infrastructure',
        'title' => 'Buy Instagram Clone & Aged Accounts (1-30 Days PVA with 2FA)',
        'description' => 'Fortified Instagram PVA clone accounts aged between 1 to 30 days. Pre-configured with realistic profile setups, 2FA security secret keys, linked recovery mailboxes, and pre-warmed trust ready for bot automation, DM marketing, and mass engagement campaigns.',
        'highlights' => [
            'Aged 1 to 30 Days: Matured profiles that have passed the strict initial shadowban and registration sandboxes.',
            'Two-Factor Authentication (2FA) Active: Complete with 16-digit secret keys for safe login across any IP without SMS triggers.',
            'Phone & Email Verified (PVA): Dual verified with authentic residential numbers and accessible inboxes.',
            'Clone Ready with Profile Data: Realistic avatars, bios, and initial post histories to ensure authentic engagement score.'
        ],
        'stats' => [
            ['label' => 'Age Range', 'value' => '1 - 30 Days Aged'],
            ['label' => 'Security Protocol', 'value' => '2FA Enabled + Keys'],
            ['label' => 'Verification Level', 'value' => 'Dual PVA (Phone + Email)'],
            ['label' => 'Delivery Format', 'value' => 'User:Pass:2FA:Mail'],
        ],
        'cards' => [
            [
                'title' => 'Instagram Aged (1 - 7 Days) PVA + 2FA',
                'description' => 'Lightly aged Instagram account with dual verification and 2FA key. Ideal for launching warm-up actions and building fresh brand personas.',
                'price' => '$1.50',
                'original_price' => '$2.50',
                'badge' => 'Starter PVA',
                'rating' => '4.8',
                'reviews' => '174',
                'features' => [
                    'Age: 1 to 7 Days Old Natural Warmup',
                    '2FA Secret Key Included for Instant Login',
                    'Real Phone Number & Email Verified',
                    'Profile Photo & Bio Pre-Configured',
                    '48-Hour Replacement Guarantee'
                ]
            ],
            [
                'title' => 'Instagram Aged (14 - 30 Days) PVA + 2FA',
                'description' => 'Matured 1-month aged Instagram profile with proven stability. High resilience against action blocks, perfect for DM marketing and automation.',
                'price' => '$3.20',
                'original_price' => '$5.00',
                'badge' => 'Most Popular',
                'rating' => '5.0',
                'reviews' => '312',
                'features' => [
                    'Age: 14 to 30 Days Established Lifetime',
                    'Passed Initial Strict Instagram Sandboxes',
                    '2FA Security Active (Zero Phone Challenges)',
                    'Pre-Warmed Session Cookies (JSON/Netscape)',
                    'Includes Full Recovery Email Credentials'
                ]
            ],
            [
                'title' => 'Instagram Clone Profile (Realistic Posts & Followers)',
                'description' => 'High-trust replica/clone profile featuring 5-15 genuine-looking lifestyle posts, real followers, and bio styling for maximum influencer legitimacy.',
                'price' => '$6.50',
                'original_price' => '$10.00',
                'badge' => 'High Trust Clone',
                'rating' => '4.9',
                'reviews' => '128',
                'features' => [
                    'Complete Clone Styling (9+ Posts & Story Highlights)',
                    'Initial Base of Real-Looking Followers',
                    'Aged 30+ Days for Maximum Authority',
                    '2FA Authenticator & Backup Codes Attached',
                    'Priority Replacement & Warmup Guide'
                ]
            ],
            [
                'title' => 'Bulk Instagram Automation Fleet (50 Accounts)',
                'description' => '50 aged Instagram 2FA accounts delivered with anti-detect browser cookies and proxy binding parameters for large-scale DM campaigns.',
                'price' => '$125.00',
                'original_price' => '$180.00',
                'badge' => 'Agency Fleet',
                'rating' => '5.0',
                'reviews' => '84',
                'features' => [
                    '50 Aged 14-30 Days PVA Accounts',
                    'Bulk Export (User:Pass:2FA:Mail:MailPass:Cookie)',
                    'Lowest Cost per Unit ($2.50 / account)',
                    'Residential Proxy Recommendation Sheet',
                    'VIP 24/7 Dedicated Account Manager'
                ]
            ]
        ]
    ])
@endsection
