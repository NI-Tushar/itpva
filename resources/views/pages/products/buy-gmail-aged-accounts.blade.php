@extends('layouts.app')

@section('title', 'Buy Aged Gmail Accounts - Vintage 2014-2023 High Reputation Inboxes')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'Aged Gmail',
        'title' => 'Buy Aged Gmail Accounts (Vintage 2014 - 2023)',
        'description' => 'Seasoned, high-trust aged Gmail accounts spanning creation years from 2014 to 2023. Pre-warmed with natural inbox history, organic cookies, and established domain trust scores to ensure unmatched cold email deliverability and zero registration checkpoint locks.',
        'highlights' => [
            'Vintage Creation Dates (2014-2023): Verified creation timestamps with mature Google algorithmic reputation scores.',
            'Supreme Inbox Placement: Bypasses strict recipient spam filters (Spamhaus, Barracuda, Google Workspace) with ease.',
            'Recovery Mail & 2FA Armed: Delivered with full secondary recovery credentials, 2FA secret keys, and backup recovery codes.',
            'Session Cookies (JSON) Included: Netscape / JSON formatted cookies included for instant anti-detect profile injection.'
        ],
        'stats' => [
            ['label' => 'Account Vintage', 'value' => '2014 - 2023 Aged'],
            ['label' => 'Sender Trust Score', 'value' => '99.5% Primary Inbox'],
            ['label' => 'Session Delivery', 'value' => 'Cookies + Login Format'],
            ['label' => 'Warranty Coverage', 'value' => '48h Replacement SLA'],
        ],
        'cards' => [
            [
                'title' => 'Aged Gmail Account (2021 - 2023 Aged)',
                'description' => 'Matured Gmail accounts aged 1 to 3 years. Far more resilient against rate limits and verification prompts than freshly created accounts.',
                'price' => '$4.50',
                'original_price' => '$7.00',
                'badge' => 'Aged Starter',
                'rating' => '4.9',
                'reviews' => '245',
                'features' => [
                    'Creation Vintage: 2021 to 2023 Matured Account',
                    'Higher Daily Sending Volume Limit',
                    'Full Recovery Email Access Included',
                    'Clean Static Residential Registration IP',
                    '48-Hour Replacement Guarantee'
                ]
            ],
            [
                'title' => 'Mature Gmail Account (2017 - 2020 Vintage)',
                'description' => 'High-trust vintage Gmail inbox aged 4 to 7 years. Supreme sender authority for enterprise cold emailing, Smartlead, and Instantly warmup sequences.',
                'price' => '$9.50',
                'original_price' => '$15.00',
                'badge' => 'Most Popular',
                'rating' => '5.0',
                'reviews' => '410',
                'features' => [
                    'Creation Vintage: 2017 to 2020 Historic Lifetime',
                    'High Sending Deliverability Rate',
                    'Cookies (JSON/Netscape) + Direct Access',
                    'Passed Google Security Audits',
                    'Includes Full Recovery Email Access'
                ]
            ],
            [
                'title' => 'Ultra-Vintage Gmail Account (2014 - 2016)',
                'description' => 'Elite aged legacy Gmail account with nearly a decade of tenure. Unmatched algorithmic trust and immune to sudden security checks.',
                'price' => '$18.00',
                'original_price' => '$28.00',
                'badge' => 'Ultra Vintage',
                'rating' => '5.0',
                'reviews' => '190',
                'features' => [
                    'Creation Vintage: 2014 to 2016 Decade Legacy',
                    'Maximum Algorithmic Trust & Inbound Authority',
                    'Full Residential IP Fingerprint Profile',
                    '2FA Secret Keys & Backup Codes Included',
                    'Priority 24/7 Dedicated Support'
                ]
            ],
            [
                'title' => 'Bulk Aged Warmup Fleet (10 Accounts)',
                'description' => '10 vintage Gmail accounts configured for cold outreach agencies scaling high-ticket B2B client acquisition campaigns.',
                'price' => '$85.00',
                'original_price' => '$130.00',
                'badge' => 'Agency Fleet',
                'rating' => '5.0',
                'reviews' => '98',
                'features' => [
                    '10 Vintage Gmail Accounts (2016-2021)',
                    'Pre-Warmed Session Cookies Provided',
                    'Spread Across Diverse Residential Geolocation IPs',
                    'Direct CSV / Excel Data Download Format',
                    'Direct Telegram/WhatsApp VIP Specialist'
                ]
            ]
        ]
    ])
@endsection
