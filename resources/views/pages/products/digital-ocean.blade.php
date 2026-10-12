@extends('layouts.app')

@section('title', 'Buy DigitalOcean Accounts - $200 Credits & 3-10 Droplets Limit Unlocked')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'DigitalOcean',
        'title' => 'Buy Verified DigitalOcean Accounts ($200 Cloud Credits)',
        'description' => 'Fully verified DigitalOcean cloud developer accounts with approved billing thresholds, multi-droplet deployment quotas (3 to 10 droplets limit), and clean history. Ideal for web hosting, VPN servers, docker clusters, and developer sandboxes.',
        'highlights' => [
            'Card & Identity Verification Cleared: Genuine payment method linked and validated to ensure no sudden account hold.',
            '$200 Free Trial Cloud Credits: 60-day active trial credits ready for droplets, managed databases, and spaces storage.',
            '3 to 10 Droplets Limit Open: Deploy multiple cloud servers simultaneously across global datacenters.',
            'Full Root Workspace Access: Handed over with primary email, password, and complete administrative control.'
        ],
        'stats' => [
            ['label' => 'Credit Balance', 'value' => '$200 Free Credits'],
            ['label' => 'Droplet Limit', 'value' => '3 - 10 Droplets Open'],
            ['label' => 'Billing Status', 'value' => 'Card Verified Active'],
            ['label' => 'Global Datacenters', 'value' => 'NYC, SFO, FRA, SGP'],
        ],
        'cards' => [
            [
                'title' => 'DigitalOcean $200 Credit Account (3 Droplets)',
                'description' => 'Card-verified DigitalOcean account loaded with $200 trial credits and a 3-droplet concurrent limit. Perfect for VPS hosting and app testing.',
                'price' => '$12.00',
                'original_price' => '$18.00',
                'badge' => 'Standard Cloud',
                'rating' => '4.8',
                'reviews' => '118',
                'features' => [
                    '$200 Free Cloud Trial Credits Active',
                    '3 Droplets Deployment Limit Unlocked',
                    'Full Access to Global Datacenter Regions',
                    'Original Creation Email & Password Included',
                    '48-Hour Replacement Guarantee'
                ]
            ],
            [
                'title' => 'DigitalOcean 10 Droplets Limit Account',
                'description' => 'Higher quota DigitalOcean console with approved 10-droplet capacity and verified billing profile. Ready for multi-node web architectures.',
                'price' => '$22.00',
                'original_price' => '$32.00',
                'badge' => 'Most Popular',
                'rating' => '5.0',
                'reviews' => '240',
                'features' => [
                    '$200 Active Cloud Credits Included',
                    '10 Droplets Concurrent Limit Approved',
                    'Managed Databases & Spaces Storage Ready',
                    'Clean Static Residential Registration IP',
                    'Includes Full Recovery Email Access'
                ]
            ],
            [
                'title' => 'DigitalOcean Port 25 Open Account (Mailing)',
                'description' => 'Specialized DigitalOcean cloud account with outbound Port 25 SMTP unlocked for self-hosted mail servers and transactional email gateways.',
                'price' => '$45.00',
                'original_price' => '$65.00',
                'badge' => 'SMTP Mailer Ready',
                'rating' => '5.0',
                'reviews' => '142',
                'features' => [
                    'Port 25 (SMTP) Outbound Unblocked',
                    'Self-Hosted Mailer Setup Approved',
                    'High Sending Deliverability Reputation',
                    'Full Root Credentials & Cookies Provided',
                    'Priority 24/7 Dedicated Cloud Engineer'
                ]
            ],
            [
                'title' => 'Bulk Cloud Deployment Pack (5 Accounts)',
                'description' => '5 card-verified DigitalOcean accounts configured for DevOps agencies, multi-tenant app staging, and distributed proxy clusters.',
                'price' => '$52.00',
                'original_price' => '$80.00',
                'badge' => 'DevOps Fleet',
                'rating' => '4.9',
                'reviews' => '68',
                'features' => [
                    '5 Verified DigitalOcean Accounts ($200 each)',
                    'Total Combined Cloud Credits: $1,000+',
                    'Spread Across Diverse Clean Billing Entities',
                    'Instant CSV Data Export Download',
                    'Direct Telegram/WhatsApp Cloud Specialist'
                ]
            ]
        ]
    ])
@endsection
