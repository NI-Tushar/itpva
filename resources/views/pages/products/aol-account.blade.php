@extends('layouts.app')

@section('title', 'Buy AOL Accounts - Aged & PVA Verified AOL Mail Inboxes')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'AOL Account',
        'title' => 'Buy Aged & Verified AOL Mail PVA Accounts',
        'description' => 'Seasoned AOL Mail accounts verified with physical phone numbers and enabled for IMAP/POP3 protocol connections. Built for email deliverability testing, specialized newsletter outreach, affiliate campaigns, and secondary verification fallback inboxes.',
        'highlights' => [
            'Carrier Phone Verified (PVA): Registered with physical US/UK mobile carrier numbers to prevent sudden lockouts.',
            'App Passwords & IMAP/SMTP Active: Generate secure third-party client tokens for Thunderbird, Outlook, and auto-mailers.',
            'Aged 6 to 36 Months Live: Natural server tenure ensures high reputation score and excellent inbox placement.',
            'Instant Batch Dispatch: Delivered in organized CSV / text formats with email, password, and recovery notes.'
        ],
        'stats' => [
            ['label' => 'Protocol Support', 'value' => 'POP3 / IMAP / Webmail'],
            ['label' => 'Verification Level', 'value' => 'Real Carrier SIM PVA'],
            ['label' => 'Inbox Capacity', 'value' => 'Unlimited Mail Storage'],
            ['label' => 'Turnaround Time', 'value' => 'Instant Delivery'],
        ],
        'cards' => [
            [
                'title' => 'Fresh AOL PVA Accounts (Pack of 10)',
                'description' => '10 newly created AOL.com accounts with phone verification cleared and full webmail access. Ready for platform signups and testing.',
                'price' => '$2.50',
                'original_price' => '$4.00',
                'badge' => 'Starter Pack',
                'rating' => '4.8',
                'reviews' => '74',
                'features' => [
                    '10 Real Carrier Phone Verified Accounts',
                    'Direct Webmail & App Access',
                    'Clean Static Residential Registration IP',
                    'Format: Email:Password:Recovery',
                    '48-Hour Replacement Guarantee'
                ]
            ],
            [
                'title' => 'Aged AOL Accounts (6 - 12 Months) [10 Pack]',
                'description' => '10 aged AOL Mail inboxes with established tenure. Pre-warmed sender trust ensures high inbox deliverability for cold outreach sequences.',
                'price' => '$6.50',
                'original_price' => '$10.00',
                'badge' => 'Most Popular',
                'rating' => '5.0',
                'reviews' => '195',
                'features' => [
                    'Age: 6 to 12 Months Established Lifetime',
                    'POP3 & IMAP Protocol Access Activated',
                    'High Sending Deliverability Score',
                    'Includes Full Recovery Email Access',
                    'Instant Delivery Credentials'
                ]
            ],
            [
                'title' => 'Pack of 50 Aged AOL Inboxes (POP3/IMAP)',
                'description' => '50 aged AOL Mail accounts engineered for cold email marketing campaigns, sales development reps, and transactional testing.',
                'price' => '$26.00',
                'original_price' => '$42.00',
                'badge' => 'Outreach Choice',
                'rating' => '4.9',
                'reviews' => '118',
                'features' => [
                    '50 Aged AOL Mail Accounts',
                    'Seamless Integration with Cold Mailers',
                    'Zero Intrusive SMS Checkpoints',
                    'Instant CSV Data Export Download',
                    '24/7 Dedicated Support'
                ]
            ],
            [
                'title' => 'Bulk AOL Enterprise Fleet (100 Accounts)',
                'description' => '100 aged AOL inboxes delivering maximum sending capacity for large marketing agencies, proxy farming, and automation software.',
                'price' => '$48.00',
                'original_price' => '$75.00',
                'badge' => 'Enterprise Scale',
                'rating' => '5.0',
                'reviews' => '62',
                'features' => [
                    '100 Aged AOL Mail Inboxes',
                    'Best Volume Pricing ($0.48 / account)',
                    'Pre-Configured App Passwords Available',
                    'Diverse IP Registrations for Safety',
                    'VIP Priority Account Manager'
                ]
            ]
        ]
    ])
@endsection
