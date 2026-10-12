@extends('layouts.app')

@section('title', 'Buy Facebook Accounts - Aged & PVA Verified Facebook Profiles')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'Facebook Accounts',
        'title' => 'Buy Aged & Verified Facebook PVA Accounts',
        'description' => 'Seasoned Facebook profiles with natural friends networks, authentic engagement history, and active Marketplace access. Pre-warmed for Facebook Ads Manager, community management, and high-trust outreach campaigns.',
        'highlights' => [
            '2FA Secret Key & Backup Codes: Seamless authentication without phone number checkpoint blocks.',
            'Aged History & Organic Friends: Matured profiles (3 to 36 months) with organic wall posts and active interactions.',
            'Facebook Marketplace & Ads Ready: Pre-approved for Marketplace listings, page administration, and Business Manager setups.',
            'Clean Residential IP Footprints: Created and farmed with pristine static residential proxy IPs.'
        ],
        'stats' => [
            ['label' => 'Profile Security', 'value' => '2FA Enabled + Keys'],
            ['label' => 'Marketplace Status', 'value' => 'Active & Unlocked'],
            ['label' => 'Delivery Format', 'value' => 'User:Pass:2FA:Mail:Cookie'],
            ['label' => 'Replacement SLA', 'value' => '48h Login Guarantee'],
        ],
        'cards' => [
            [
                'title' => 'Fresh Facebook PVA Profile',
                'description' => 'Real phone-verified Facebook profile with complete bio and avatar. Primed for organic warm-up, group joining, and brand engagement.',
                'price' => '$3.50',
                'original_price' => '$5.00',
                'badge' => 'Fresh PVA',
                'rating' => '4.8',
                'reviews' => '134',
                'features' => [
                    'Phone Number & Email Verified (PVA)',
                    'Profile Photo, Cover & Bio Completed',
                    'Two-Factor Authentication (2FA) Secret Key',
                    'Clean Static Residential Registration IP',
                    '48-Hour Replacement Guarantee'
                ]
            ],
            [
                'title' => 'Aged Facebook Account (3 - 6 Months)',
                'description' => 'Matured Facebook profile with established activity logs, friends list, and low checkpoint sensitivity for cold outreach.',
                'price' => '$9.50',
                'original_price' => '$14.00',
                'badge' => 'Most Popular',
                'rating' => '5.0',
                'reviews' => '289',
                'features' => [
                    'Age: 3 to 6 Months Natural Retention',
                    '50 - 200 Real-Looking Active Friends',
                    'Bypasses Immediate Shadowbans & Blocks',
                    'Full Cookie Session Export (JSON format)',
                    'Original Recovery Email Included'
                ]
            ],
            [
                'title' => 'Vintage Facebook Account (1+ Year Aged)',
                'description' => 'High-trust legacy Facebook account with 12+ months history. Marketplace active and pre-tested for Meta Business Manager linking.',
                'price' => '$19.00',
                'original_price' => '$28.00',
                'badge' => 'High Trust',
                'rating' => '5.0',
                'reviews' => '178',
                'features' => [
                    '1+ Year Account Lifetime (2020-2023)',
                    'Facebook Marketplace Unlocked & Active',
                    'Ready to Link Meta Ads Manager & Pages',
                    'Full Residential Fingerprint Profile',
                    'Priority 24/7 Replacement Support'
                ]
            ],
            [
                'title' => 'Meta Business Manager Fleet (5 Accounts)',
                'description' => '5 seasoned Facebook accounts configured for media buyers scaling ad campaigns, affiliate ads, and agency page ownership.',
                'price' => '$79.00',
                'original_price' => '$115.00',
                'badge' => 'Agency Pack',
                'rating' => '4.9',
                'reviews' => '65',
                'features' => [
                    '5 Aged PVA Facebook Profiles with 2FA',
                    'Spread Across Unique Residential IPs',
                    'Anti-Detect Browser Setup Blueprint Included',
                    'Fast CSV / Text Data Dispatch',
                    'Direct Telegram/WhatsApp Specialist'
                ]
            ]
        ]
    ])
@endsection
