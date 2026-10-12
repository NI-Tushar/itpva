@extends('layouts.app')

@section('title', 'Buy Gmail Accounts - Fresh & Verified Bulk Google Workspace Accounts')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'Buy Gmail Accounts',
        'title' => 'Buy Fresh & Verified Gmail PVA Accounts (Bulk Delivery)',
        'description' => 'Real carrier phone-verified Gmail accounts pre-configured for everyday productivity, cold email sequences, multi-platform signups, and developer automation. Delivered with recovery email credentials, 2FA backup codes, and pristine residential IP history.',
        'highlights' => [
            '100% Real Phone Verified (PVA): Created and verified with authentic physical mobile numbers — never synthetic VoIP.',
            'Recovery Mail & 2FA Armed: Each account includes pre-linked recovery email credentials and 10 backup 2FA security codes.',
            'SMTP / IMAP / Web Access Ready: App passwords and IMAP protocols configured for seamless integration with Thunderbird and bulk mailers.',
            'Clean Static Residential IPs: Created on dedicated residential proxy nodes to prevent geographic checkpoint blocks.'
        ],
        'stats' => [
            ['label' => 'Verification Level', 'value' => 'Physical Carrier PVA'],
            ['label' => 'Security Protocol', 'value' => '2FA Enabled + Codes'],
            ['label' => 'Dispatch Speed', 'value' => 'Instant Automated'],
            ['label' => 'Replacement SLA', 'value' => '48h Login Guarantee'],
        ],
        'cards' => [
            [
                'title' => 'Fresh Gmail Accounts (Pack of 10)',
                'description' => '10 newly created, real carrier phone-verified Gmail accounts. Perfect for personal operations, app testing, and initial marketing campaigns.',
                'price' => '$3.50',
                'original_price' => '$5.50',
                'badge' => 'Starter Pack',
                'rating' => '4.8',
                'reviews' => '184',
                'features' => [
                    '10 Real Carrier Phone Verified Accounts',
                    'Direct Webmail & Mobile App Access',
                    'Recovery Email & Password Included',
                    'Clean Static Residential Registration IP',
                    '48-Hour Replacement Guarantee'
                ]
            ],
            [
                'title' => 'Pack of 50 Verified Gmail Inboxes',
                'description' => '50 verified Gmail inboxes engineered for sales development teams, outreach software, and multi-tier social media account farming.',
                'price' => '$16.00',
                'original_price' => '$25.00',
                'badge' => 'Most Popular',
                'rating' => '5.0',
                'reviews' => '410',
                'features' => [
                    '50 Active Gmail PVA Accounts',
                    'Includes Full Recovery Email Access',
                    'Organized CSV / Excel Data Download',
                    'Zero Geographic Suspicious Alerts',
                    'Instant Delivery Credentials'
                ]
            ],
            [
                'title' => 'Pack of 100 Bulk Gmail Accounts',
                'description' => '100 verified Gmail inboxes delivering high sending capacity for cold email campaigns, mass scrapers, and agency marketing suites.',
                'price' => '$29.00',
                'original_price' => '$45.00',
                'badge' => 'Best Value',
                'rating' => '5.0',
                'reviews' => '320',
                'features' => [
                    '100 Verified Google Accounts',
                    'Lowest Cost per Inbox ($0.29 / account)',
                    'Pre-Configured App Passwords Available',
                    'Diverse IP Geolocation Registrations',
                    '24/7 Dedicated Support Specialist'
                ]
            ],
            [
                'title' => 'Bulk Gmail Enterprise Fleet (500 Accounts)',
                'description' => '500 verified Gmail accounts configured for enterprise email delivery fleets, large proxy networks, and distributed verification bots.',
                'price' => '$135.00',
                'original_price' => '$210.00',
                'badge' => 'Enterprise Fleet',
                'rating' => '5.0',
                'reviews' => '115',
                'features' => [
                    '500 Verified Gmail Inboxes',
                    'Unbeatable Bulk Rate ($0.27 / unit)',
                    'Custom Anti-Detect Browser Setup Blueprint',
                    'Structured Format: Mail:Pass:Recovery:2FA',
                    'Direct Telegram/WhatsApp VIP Specialist'
                ]
            ]
        ]
    ])
@endsection
