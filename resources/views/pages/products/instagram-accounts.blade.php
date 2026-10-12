@extends('layouts.app')

@section('title', 'Buy Instagram Accounts - Aged & PVA Verified Creator Profiles')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'Instagram Accounts',
        'title' => 'Buy Aged & Verified Instagram PVA Accounts',
        'description' => 'Aged and pre-warmed Instagram accounts crafted for influencer growth, DM outreach, brand aesthetics, and bot automation. Phone-verified with authentic mobile carriers, 2FA secret keys, and organic post histories.',
        'highlights' => [
            'Dual Phone & Email Verified (PVA): Bound to physical mobile carrier SIMs and authentic recovery inboxes.',
            'Two-Factor Authentication (2FA) Armed: Complete with 16-digit secret keys for seamless login across any location.',
            'Aged 1 to 24 Months Available: Mature profiles that have passed all strict registration sandboxes and rate limits.',
            'Clean Session Cookies Included: Netscape / JSON cookie formats included for instant anti-detect browser import.'
        ],
        'stats' => [
            ['label' => 'Account Longevity', 'value' => 'Fresh to 24M Aged'],
            ['label' => 'Security Protocol', 'value' => '2FA Enabled + Keys'],
            ['label' => 'Verification Level', 'value' => 'Carrier SIM PVA'],
            ['label' => 'Turnaround Time', 'value' => 'Instant Automated'],
        ],
        'cards' => [
            [
                'title' => 'Fresh Instagram PVA Account',
                'description' => 'Real phone-verified Instagram account with complete bio and avatar. Primed for new creator handles, link-in-bio setups, and personal brand building.',
                'price' => '$2.50',
                'original_price' => '$4.00',
                'badge' => 'Fresh PVA',
                'rating' => '4.8',
                'reviews' => '162',
                'features' => [
                    'Carrier SIM Real Phone Verified',
                    'Original Creation Email Included',
                    'Two-Factor Authentication (2FA) Key',
                    'Clean Static Residential IP Creation',
                    '48-Hour Replacement Guarantee'
                ]
            ],
            [
                'title' => 'Aged Instagram Account (1 - 3 Months)',
                'description' => 'Matured Instagram account with established trust score. Passed initial shadowban sandboxes, ideal for automated follow/unfollow and DM campaigns.',
                'price' => '$7.00',
                'original_price' => '$11.00',
                'badge' => 'Most Popular',
                'rating' => '5.0',
                'reviews' => '340',
                'features' => [
                    'Age: 1 to 3 Months Established Longevity',
                    'Passed Strict Instagram Sandboxes',
                    'High Action Limits for DMs & Comments',
                    'Full Cookie Session Export (JSON)',
                    'Permanent Inbox Control Included'
                ]
            ],
            [
                'title' => 'Vintage Instagram Account (1+ Year Aged)',
                'description' => 'High-authority legacy profile (2018-2023) with natural tenure and maximum algorithmic resistance against sudden checkpoint challenges.',
                'price' => '$16.00',
                'original_price' => '$24.00',
                'badge' => 'High Authority',
                'rating' => '5.0',
                'reviews' => '210',
                'features' => [
                    '12+ Months Mature Account Lifetime',
                    'Highest Algorithmic Trust Score',
                    'Ideal for High-Value Brand Handles',
                    'Full Residential Fingerprint Profile',
                    'VIP 24/7 Priority Support'
                ]
            ],
            [
                'title' => 'Bulk Instagram Automation Fleet (10 Accounts)',
                'description' => '10 aged PVA accounts configured for growth marketing agencies, mass DM sequences, and multi-profile influencer farming.',
                'price' => '$59.00',
                'original_price' => '$90.00',
                'badge' => 'Agency Pack',
                'rating' => '4.9',
                'reviews' => '88',
                'features' => [
                    '10 Aged Instagram 2FA Profiles',
                    'Spread Across Diverse Residential Geolocation IPs',
                    'Anti-Detect Browser Warmup Roadmap',
                    'Direct CSV Data Download Format',
                    'Dedicated Account Manager Support'
                ]
            ]
        ]
    ])
@endsection
