@extends('layouts.app')

@section('title', 'Buy Hotmail & Outlook Trusted OAuth2 Accounts - Graph & IMAP/POP3 (12-36 Months Aged)')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'Microsoft Azure & Enterprise Cloud Inboxes',
        'title' => 'Buy Hotmail & Outlook Trusted OAuth2 Accounts',
        'description' => 'Aged 12 to 36 months, highly trusted Microsoft Hotmail and Outlook accounts equipped with modern OAuth2 tokens (Microsoft Graph API & IMAP/POP3), phone verification, and attached recovery mailboxes for industrial cold outreach.',
        'highlights' => [
            'OAuth2 Graph & IMAP Protocols: Pre-configured token credentials compatible with modern mail software that deprecates legacy basic auth.',
            'Aged 12 to 36 Months: Mature Microsoft accounts with exceptional IP sender trust and spam resistance.',
            'Recovery Email & Phone Added: Multi-layered security binding prevents login challenges and unexpected lockouts.',
            'High Sending Limits: Warm mailboxes ready for immediate cold email outreach, client onboarding, and automated tools.'
        ],
        'stats' => [
            ['label' => 'Account Longevity', 'value' => '12 - 36 Months Live'],
            ['label' => 'Auth Protocol', 'value' => 'OAuth2 [Graph / IMAP]'],
            ['label' => 'Security Specs', 'value' => 'Phone + Recovery Added'],
            ['label' => 'Delivery Time', 'value' => 'Instant Automated'],
        ],
        'cards' => [
            [
                'title' => 'Hotmail Trusted - OAuth2 [Graph] Live 12-36M',
                'description' => 'Aged Hotmail account (1 to 3 years) authenticated with Microsoft Graph API OAuth2 tokens. Built for seamless CRM and cold emailing integration.',
                'price' => '$1.20',
                'original_price' => '$2.00',
                'badge' => 'Graph API Ready',
                'rating' => '4.9',
                'reviews' => '189',
                'features' => [
                    'Age: 12 - 36 Months Microsoft Account',
                    'OAuth2 [Graph API] Client Credentials',
                    'Includes Refresh Token & Client ID',
                    'Zero Basic-Auth Deprecation Issues',
                    'Instant Delivery (Format: Mail:Pass:Token)'
                ]
            ],
            [
                'title' => 'Hotmail Trusted - OAuth2 [IMAP/POP3] Live 12-36M',
                'description' => 'Aged 12-36 months Hotmail account configured with modern OAuth2 authentication for standard IMAP and POP3 mailer apps.',
                'price' => '$1.10',
                'original_price' => '$1.80',
                'badge' => 'IMAP Protocol',
                'rating' => '4.8',
                'reviews' => '214',
                'features' => [
                    'Age: 12 - 36 Months High Trust Score',
                    'OAuth2 [IMAP/POP3] Unlocked',
                    'Compatible with Thunderbird & Warmup Tools',
                    'Clean Historical Delivery Record',
                    '48-Hour Login Guarantee'
                ]
            ],
            [
                'title' => 'Hotmail Trusted - OAuth2 + Phone + Mail Restore',
                'description' => 'Fully fortified Hotmail account featuring OAuth2 tokens, verified phone number added, and secondary recovery email attached for maximum lifespan.',
                'price' => '$1.60',
                'original_price' => '$2.50',
                'badge' => 'Full Security',
                'rating' => '5.0',
                'reviews' => '326',
                'features' => [
                    'Added Real Phone Number Verification',
                    'Secondary Mail Restore Attached',
                    'OAuth2 Tokens + Full Web Login',
                    'Bypasses Geographic Suspicious Login Alerts',
                    'Longest Retention Guarantee'
                ]
            ],
            [
                'title' => 'Outlook Trusted - OAuth2 [Graph] Live 12-36M',
                'description' => 'Aged official @Outlook.com email account with Microsoft Graph OAuth2 tokens. Professional corporate appearance with supreme deliverability.',
                'price' => '$1.30',
                'original_price' => '$2.20',
                'badge' => 'Outlook Domain',
                'rating' => '4.9',
                'reviews' => '278',
                'features' => [
                    'Aged 12-36 Months @Outlook.com Domain',
                    'OAuth2 Microsoft Graph Connected',
                    'Corporate Grade Sender Reputation',
                    'Includes Full Refresh Token & Secrets',
                    '24/7 Dedicated Support'
                ]
            ],
            [
                'title' => 'Outlook Trusted - OAuth2 [IMAP/POP3] Live 12-36M',
                'description' => 'Aged Outlook.com profile calibrated for automated IMAP connections using OAuth2 modern auth protocols.',
                'price' => '$1.20',
                'original_price' => '$2.00',
                'badge' => 'Aged Outlook',
                'rating' => '4.8',
                'reviews' => '165',
                'features' => [
                    'Age: 12 - 36 Months Mature Status',
                    'OAuth2 IMAP/POP3 Authentication',
                    'High Sending Deliverability Rate',
                    'Instant Delivery Credentials',
                    'Fast Replacement Warranty'
                ]
            ],
            [
                'title' => 'Outlook Trusted - OAuth2 + Phone + Mail Restore',
                'description' => 'The ultimate Outlook.com inbox. 12-36 months live, OAuth2 active, verified phone linked, and dedicated recovery email bound.',
                'price' => '$1.75',
                'original_price' => '$2.80',
                'badge' => 'Top Deliverability',
                'rating' => '5.0',
                'reviews' => '412',
                'features' => [
                    '12-36 Months Live Account Longevity',
                    'Phone Number Added + Recovery Email Bound',
                    'OAuth2 IMAP & Webmail Ready',
                    'Highest Inbox Placement Score',
                    'Zero Sudden Checkpoint Lockouts'
                ]
            ]
        ]
    ])
@endsection
