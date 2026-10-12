@extends('layouts.app')

@section('title', 'Buy Yahoo Accounts - Aged & PVA Verified Yahoo Mail Inboxes')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'Yahoo Accounts',
        'title' => 'Buy Aged & Verified Yahoo Mail PVA Accounts',
        'description' => 'Phone-verified Yahoo Mail accounts with active POP3 and IMAP access protocols. Engineered for cold email outreach, multi-platform registrations, affiliate marketing pipelines, and automated newsletter sequences with pristine deliverability.',
        'highlights' => [
            'Carrier Phone Verified (PVA): Verified with genuine physical phone numbers to guarantee no security lockouts.',
            'POP3 & IMAP Access Ready: App passwords generated for seamless Thunderbird, Outlook, and auto-mailer connections.',
            'Fresh & Aged Inboxes Available: Choose between fresh clean PVA or matured inboxes with established reputation scores.',
            'Instant Credential Dispatch: Structured delivery with full email, password, and secondary recovery credentials.'
        ],
        'stats' => [
            ['label' => 'Protocol Support', 'value' => 'POP3 / IMAP / Webmail'],
            ['label' => 'Verification Level', 'value' => '100% Real Phone PVA'],
            ['label' => 'Storage Capacity', 'value' => '1,000 GB (1TB) Free'],
            ['label' => 'Turnaround Time', 'value' => 'Instant Automated'],
        ],
        'cards' => [
            [
                'title' => 'Fresh Yahoo PVA Accounts (Pack of 10)',
                'description' => '10 newly registered Yahoo Mail accounts with phone verification cleared and full webmail access. Ready for platform signups and testing.',
                'price' => '$3.00',
                'original_price' => '$5.00',
                'badge' => 'Starter Pack',
                'rating' => '4.8',
                'reviews' => '82',
                'features' => [
                    '10 Real Carrier Phone Verified Accounts',
                    'Direct Webmail & App Access',
                    'Clean Static Residential Registration IP',
                    'Format: Email:Password:Recovery',
                    '48-Hour Replacement Guarantee'
                ]
            ],
            [
                'title' => 'Aged Yahoo Accounts (6 - 12 Months) [10 Pack]',
                'description' => '10 aged Yahoo Mail inboxes with established tenure. Pre-warmed sender trust ensures high inbox deliverability for cold outreach sequences.',
                'price' => '$8.50',
                'original_price' => '$14.00',
                'badge' => 'Most Popular',
                'rating' => '5.0',
                'reviews' => '214',
                'features' => [
                    'Age: 6 to 12 Months Established Lifetime',
                    'POP3 & IMAP Protocol Access Activated',
                    'High Sending Deliverability Score',
                    'Includes Full Recovery Email Access',
                    'Instant Delivery Credentials'
                ]
            ],
            [
                'title' => 'Pack of 50 Aged Yahoo Inboxes (POP3/IMAP)',
                'description' => '50 aged Yahoo Mail accounts engineered for cold email marketing campaigns, sales development reps, and transactional testing.',
                'price' => '$35.00',
                'original_price' => '$55.00',
                'badge' => 'Outreach Choice',
                'rating' => '4.9',
                'reviews' => '130',
                'features' => [
                    '50 Aged Yahoo Mail Accounts',
                    'Seamless Integration with Cold Mailers',
                    'Zero Intrusive SMS Checkpoints',
                    'Instant CSV Data Export Download',
                    '24/7 Dedicated Support'
                ]
            ],
            [
                'title' => 'Bulk Yahoo Enterprise Fleet (100 Accounts)',
                'description' => '100 aged Yahoo inboxes delivering maximum sending capacity for large marketing agencies, proxy farming, and automation software.',
                'price' => '$62.00',
                'original_price' => '$98.00',
                'badge' => 'Enterprise Scale',
                'rating' => '5.0',
                'reviews' => '71',
                'features' => [
                    '100 Aged Yahoo Mail Inboxes',
                    'Best Volume Pricing ($0.62 / account)',
                    'Pre-Configured App Passwords Available',
                    'Diverse IP Registrations for Safety',
                    'VIP Priority Account Manager'
                ]
            ]
        ]
    ])
@endsection
