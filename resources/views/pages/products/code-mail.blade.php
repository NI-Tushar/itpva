@extends('layouts.app')

@section('title', 'Buy Old Code Mail Accounts - OTP & 2FA Recovery Inboxes')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'Automated OTP & Recovery Verification',
        'title' => 'Buy Old Code Mail Accounts (Recovery Inboxes)',
        'description' => 'Aged, high-deliverability email inboxes engineered specifically for receiving registration verification codes, 2FA OTPs, social security pins, and account recovery triggers without spam drops or delays.',
        'highlights' => [
            'Immediate Code Reception: Instant mail synchronization with zero latency on automated verification codes.',
            'Aged Domain Inbox Warmth: Aged 6 to 36 months to guarantee incoming mail is delivered directly to primary inbox.',
            'Multi-Platform Compatibility: Seamlessly receives recovery codes from Google, Facebook, TikTok, Steam, and Discord.',
            'POP3 / IMAP / Web Access: Compatible with automation bots, mass signup scripts, and browser logins.'
        ],
        'stats' => [
            ['label' => 'Code Delivery Speed', 'value' => '< 3 Seconds'],
            ['label' => 'Account Age', 'value' => '6 - 36 Months'],
            ['label' => 'Protocol Support', 'value' => 'IMAP / POP3 / Web'],
            ['label' => 'Spam Filtering', 'value' => 'Bypassed Inbox'],
        ],
        'cards' => [
            [
                'title' => 'Pack of 10 Old Code Mail Inboxes',
                'description' => '10 aged email accounts with POP3/IMAP access enabled, primed to instantly capture verification codes and confirmation links.',
                'price' => '$3.00',
                'original_price' => '$5.00',
                'badge' => 'Starter Pack',
                'rating' => '4.8',
                'reviews' => '88',
                'features' => [
                    '10 Aged Inboxes with IMAP/POP3 Protocol',
                    'Zero Latency for OTP & Activation Links',
                    'Tested on Social Media & PVA Registrations',
                    'Formatted: Email:Password:Recovery',
                    '48-Hour Guarantee'
                ]
            ],
            [
                'title' => 'Pack of 50 Old Code Mail Accounts',
                'description' => 'Bulk inbox bundle for automated PVA creation and multi-account social media registration campaigns.',
                'price' => '$12.50',
                'original_price' => '$20.00',
                'badge' => 'Most Popular',
                'rating' => '5.0',
                'reviews' => '214',
                'features' => [
                    '50 Aged Domain Recovery Accounts',
                    'High Deliverability & Trusted Sender Rep',
                    'Compatible with Python, Node.js & BAS Bots',
                    'Instant CSV / Excel Data Download',
                    'Continuous Inbound Reliability'
                ]
            ],
            [
                'title' => 'Pack of 100 Aged Code Mail Inboxes',
                'description' => 'Large scale automated verification fleet. Unrestricted inbound email limits with persistent web and API access.',
                'price' => '$22.00',
                'original_price' => '$35.00',
                'badge' => 'Automation Fleet',
                'rating' => '4.9',
                'reviews' => '142',
                'features' => [
                    '100 Aged Accounts (12+ Months Old)',
                    'Permanent Inbound Mail Reception',
                    'Supports Concurrent IMAP Connections',
                    'Clean Domain Footprint (No Blacklists)',
                    '24/7 Replacement on Defective Logins'
                ]
            ],
            [
                'title' => 'Pack of 500 Enterprise Code Mail Fleet',
                'description' => 'Maximum volume inbox package designed for mass marketing software, proxy farming, and multi-tier verification setups.',
                'price' => '$90.00',
                'original_price' => '$140.00',
                'badge' => 'Enterprise Scale',
                'rating' => '5.0',
                'reviews' => '76',
                'features' => [
                    '500 Matured OTP Recovery Mailboxes',
                    'Lowest Cost per Inbox ($0.18 / account)',
                    'Dedicated Proxy & Port Rotation Guides',
                    'Custom Format Export on Demand',
                    'Dedicated VIP Account Engineer'
                ]
            ]
        ]
    ])
@endsection
