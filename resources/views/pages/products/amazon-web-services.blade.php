@extends('layouts.app')

@section('title', 'Buy Amazon Web Services (AWS) Accounts - 8-32 vCPUs & SES Quota Ready')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'Amazon Web Services',
        'title' => 'Buy Verified Amazon Web Services (AWS) Accounts',
        'description' => 'Fully verified AWS console instances featuring standard 8 to 32 vCPU quotas, active credit cards bound, identity verification cleared, and root administrative access. Ready for EC2 cloud servers, Lightsail instances, S3 storage buckets, and SES email workflows.',
        'highlights' => [
            'Billing & Identity Verification Cleared: Phone verification and credit card binding verified to prevent instant suspension.',
            '8 to 32 vCPU Quotas Unlocked: Launch robust compute instances across US-East, US-West, Europe, and Asia-Pacific regions.',
            'Lightsail & EC2 Ready: Instant deployment of Linux/Windows virtual machines within seconds of login.',
            'Full Root Account Ownership: Complete transfer including root email credentials, root password, and 2FA reset guides.'
        ],
        'stats' => [
            ['label' => 'EC2 Compute Limit', 'value' => '8 - 32 vCPUs Open'],
            ['label' => 'Identity Check', 'value' => '100% Cleared & Active'],
            ['label' => 'Global Regions', 'value' => 'us-east-1, eu, apac'],
            ['label' => 'Access Level', 'value' => 'Root Console Admin'],
        ],
        'cards' => [
            [
                'title' => 'AWS 8 vCPU Standard Verified Account',
                'description' => 'Card-verified AWS account with standard 8-vCPU quota and global regions enabled. Ideal for web hosting, Lightsail servers, and developer sandboxes.',
                'price' => '$15.00',
                'original_price' => '$24.00',
                'badge' => 'Standard Cloud',
                'rating' => '4.8',
                'reviews' => '142',
                'features' => [
                    'Standard 8 vCPU EC2 Instance Limit Open',
                    'Lightsail & S3 Storage Services Ready',
                    'Global AWS Regions Active & Unlocked',
                    'Original Root Email & Password Included',
                    '48-Hour Replacement Guarantee'
                ]
            ],
            [
                'title' => 'AWS 32 vCPU Extended Limit Account',
                'description' => 'Upgraded AWS account featuring an approved 32-vCPU service quota limit. Designed for high-performance computing, multi-node clusters, and VPN fleets.',
                'price' => '$32.00',
                'original_price' => '$48.00',
                'badge' => 'Most Popular',
                'rating' => '5.0',
                'reviews' => '280',
                'features' => [
                    '32 vCPU High Compute Quota Approved',
                    'Deploy Multiple Heavy Windows/Linux Instances',
                    'Low Risk of Unexpected Billing Inquiries',
                    'Clean Static Residential Registration IP',
                    'Includes Full Recovery Email Access'
                ]
            ],
            [
                'title' => 'AWS SES 50k Limit Account (Cold Emailing)',
                'description' => 'Pre-approved Amazon Simple Email Service (SES) account with sandbox lifted and 50,000 daily sending limit for high-volume email campaigns.',
                'price' => '$65.00',
                'original_price' => '$95.00',
                'badge' => 'SES Mailer Ready',
                'rating' => '5.0',
                'reviews' => '164',
                'features' => [
                    'Amazon SES Production Access Granted (Out of Sandbox)',
                    '50,000 Emails / Day Sending Quota Active',
                    'Pristine Sender Reputation & Clean History',
                    'Full Root Credentials & IAM Keys Provided',
                    'Priority 24/7 Dedicated Cloud Engineer'
                ]
            ],
            [
                'title' => 'Bulk Cloud Infrastructure Pack (5 Accounts)',
                'description' => '5 verified AWS root accounts configured for enterprise DevOps pipelines, distributed web scraping, and multi-tenant hosting architectures.',
                'price' => '$68.00',
                'original_price' => '$110.00',
                'badge' => 'Enterprise Fleet',
                'rating' => '4.9',
                'reviews' => '82',
                'features' => [
                    '5 Verified AWS Accounts (8-32 vCPU)',
                    'Independent Clean Billing Entities',
                    'Spread Across Diverse Clean Residential IPs',
                    'Instant CSV Data Export Download',
                    'Direct Telegram/WhatsApp Cloud Specialist'
                ]
            ]
        ]
    ])
@endsection
