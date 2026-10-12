@extends('layouts.app')

@section('title', 'Buy Twitter Accounts - Aged & PVA Verified X Profiles')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'Twitter / X Accounts',
        'title' => 'Buy Aged & Verified Twitter / X Accounts (PVA)',
        'description' => 'Aged and phone-verified Twitter / X accounts engineered for social growth, Web3 communities, crypto marketing, developer API bots, and automated retweet sequences. Delivered with 2FA secret keys and clean session cookies.',
        'highlights' => [
            'Email & Phone Verified (PVA): Dual verified with real mobile carrier numbers to prevent lockouts.',
            'Aged 3 to 36 Months Available: Natural timeline history that completely bypasses shadowbans and search bans.',
            '2FA Secret Key & Auth Token: Includes 16-character 2FA keys and auth_token cookies for instant bot authentication.',
            'Zero Shadowban Guarantee: Every profile is pre-tested through Twitter shadowban checkers before release.'
        ],
        'stats' => [
            ['label' => 'Authentication', 'value' => '2FA Key + Auth Token'],
            ['label' => 'Account Tenure', 'value' => '3 - 36 Months Aged'],
            ['label' => 'Shadowban Score', 'value' => '100% Clean Status'],
            ['label' => 'Delivery Format', 'value' => 'User:Pass:Token:2FA'],
        ],
        'cards' => [
            [
                'title' => 'Fresh Twitter / X PVA Account',
                'description' => 'Brand new phone-verified Twitter/X account with filled bio and avatar. Primed for fresh personal handles and community discussions.',
                'price' => '$2.20',
                'original_price' => '$3.50',
                'badge' => 'Fresh Verified',
                'rating' => '4.8',
                'reviews' => '115',
                'features' => [
                    'Physical Carrier Phone Number Verified',
                    'Original Creation Email Included',
                    'Two-Factor Authentication (2FA) Setup',
                    'Clean Static Residential Registration IP',
                    '48-Hour Replacement Guarantee'
                ]
            ],
            [
                'title' => 'Aged Twitter / X Account (6 - 12 Months)',
                'description' => 'Matured Twitter account with natural history. High resistance against rate limits and immediate captcha checkpoints on high-volume tweeting.',
                'price' => '$6.50',
                'original_price' => '$10.00',
                'badge' => 'Most Popular',
                'rating' => '5.0',
                'reviews' => '280',
                'features' => [
                    'Age: 6 to 12 Months Established Profile',
                    'Auth Token & Netscape Cookies Included',
                    'Zero Shadowban or Search Suggestion Ban',
                    'Compatible with Python & Node.js Tweeting Bots',
                    'Includes Full Recovery Email Access'
                ]
            ],
            [
                'title' => 'Vintage Twitter / X Account (2012-2020)',
                'description' => 'Ultra-aged vintage profile with 5-10+ years of tenure. Supreme authority for crypto airdrops, Web3 announcements, and high-visibility commentary.',
                'price' => '$18.00',
                'original_price' => '$26.00',
                'badge' => 'Vintage Authority',
                'rating' => '5.0',
                'reviews' => '195',
                'features' => [
                    'Creation Date: 2012 to 2020 Legacy Account',
                    'Maximum Algorithmic Trust & Reach',
                    'Zero Phone Number Checkpoint Prompts',
                    'Full Residential Fingerprint History',
                    'Priority 24/7 Dedicated Support'
                ]
            ],
            [
                'title' => 'Bulk Twitter Bot Fleet (20 Accounts)',
                'description' => '20 aged Twitter PVA accounts with auth tokens configured for automated trend campaigns, engagement groups, and mass community growth.',
                'price' => '$98.00',
                'original_price' => '$150.00',
                'badge' => 'Bot Fleet',
                'rating' => '4.9',
                'reviews' => '84',
                'features' => [
                    '20 Matured Twitter/X Accounts (6-12M+)',
                    'Includes Auth Tokens for Direct API Scripts',
                    'Spread Across Diverse Clean Residential IPs',
                    'Instant CSV / Excel Data Download',
                    'Direct Telegram/WhatsApp Specialist'
                ]
            ]
        ]
    ])
@endsection
