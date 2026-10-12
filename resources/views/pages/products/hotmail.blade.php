@extends('layouts.app')

@section('title', 'Buy Hotmail Accounts - Aged & PVA Verified Microsoft Outlook Inboxes')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'Hotmail',
        'title' => 'Buy Aged & Verified Hotmail / Outlook PVA Accounts',
        'description' => 'High-capacity Microsoft Outlook and Hotmail mailboxes pre-configured for enterprise cold emailing, multi-platform registrations, and automation systems. Featuring active SMTP/POP3/IMAP protocols, phone verification, and attached recovery mail.',
        'highlights' => [
            'Carrier Phone Verified (PVA): Phone number bound and verified to prevent sudden verification checkpoints.',
            'SMTP / POP3 / IMAP Protocols Active: Seamless integration with Thunderbird, Outlook, and cold email software.',
            'Aged 6 to 36 Months Live: Natural server tenure provides superior sender score and spam resistance.',
            'Instant Batch Dispatch: Delivered in structured formats with email, password, and secondary restore mail.'
        ],
        'stats' => [
            ['label' => 'Protocol Support', 'value' => 'POP3 / IMAP / SMTP'],
            ['label' => 'Account Tenure', 'value' => 'Fresh to 36M Aged'],
            ['label' => 'Security Specs', 'value' => 'Phone + Recovery Added'],
            ['label' => 'Turnaround Time', 'value' => 'Instant Delivery'],
        ],
        'cards' => [
            [
                'title' => 'Fresh Hotmail PVA Accounts (Pack of 10)',
                'description' => '10 newly created Hotmail.com accounts with phone verification cleared and active IMAP/POP3 protocols. Ready for immediate use.',
                'price' => '$2.50',
                'original_price' => '$4.00',
                'badge' => 'Fresh Verified',
                'rating' => '4.8',
                'reviews' => '96',
                'features' => [
                    '10 Real Phone Verified Hotmail Inboxes',
                    'IMAP, POP3 & SMTP Access Enabled',
                    'Clean Static Residential Registration IP',
                    'Format: Email:Password:Recovery',
                    '48-Hour Replacement Guarantee'
                ]
            ],
            [
                'title' => 'Aged Hotmail Accounts (12 - 24 Months) [10 Pack]',
                'description' => '10 aged Hotmail inboxes with 1 to 2 years of tenure. High reputation score delivers high inbox placement for cold outreach sequences.',
                'price' => '$7.50',
                'original_price' => '$12.00',
                'badge' => 'Most Popular',
                'rating' => '5.0',
                'reviews' => '310',
                'features' => [
                    'Age: 12 to 24 Months Live Microsoft Account',
                    'Pre-Warmed IP & Sender Reputation',
                    'High Daily Sending Volume Quota',
                    'Includes Full Recovery Email Access',
                    'Instant Delivery Credentials'
                ]
            ],
            [
                'title' => 'Pack of 50 Aged Outlook.com Accounts',
                'description' => '50 aged @Outlook.com corporate-styled inboxes engineered for B2B cold email marketing campaigns and automated scrapers.',
                'price' => '$28.00',
                'original_price' => '$45.00',
                'badge' => 'Outreach Choice',
                'rating' => '4.9',
                'reviews' => '182',
                'features' => [
                    '50 Aged @Outlook.com Corporate Inboxes',
                    'Seamless Integration with Smartlead & Instantly',
                    'Zero Geographic Login Challenges',
                    'Instant CSV Data Export Download',
                    '24/7 Dedicated Support'
                ]
            ],
            [
                'title' => 'Bulk Microsoft Enterprise Fleet (100 Accounts)',
                'description' => '100 aged Hotmail & Outlook accounts delivering industrial volume for cold outreach fleets, proxies, and multi-tier verification setups.',
                'price' => '$49.00',
                'original_price' => '$80.00',
                'badge' => 'Enterprise Scale',
                'rating' => '5.0',
                'reviews' => '94',
                'features' => [
                    '100 Aged Microsoft Inboxes (12-36M+)',
                    'Unbeatable Bulk Rate ($0.49 / account)',
                    'Diverse IP Geolocation Registrations',
                    'Format: Email:Password:Recovery',
                    'VIP Priority Account Manager'
                ]
            ]
        ]
    ])
@endsection
