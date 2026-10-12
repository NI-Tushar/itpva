@extends('layouts.app')

@section('title', 'Buy Microsoft Azure Accounts - $200 Trial Credits & Active Subscription')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'Azure Account',
        'title' => 'Buy Verified Microsoft Azure Accounts ($200 Cloud Credits)',
        'description' => 'Microsoft Azure developer subscriptions configured with initial trial credits for VM deployment (Linux & Windows Server), Azure App Services, SQL databases, and AI OpenAI services. Card-verified and cleared of initial billing challenges.',
        'highlights' => [
            '$200 Free Trial Cloud Credits Active: 30-day official Microsoft Azure cloud credits loaded and ready to deploy.',
            'Virtual Machine (VM) Deployment Open: Deploy Windows Server and Linux VMs without subscription hold status.',
            'Payment & Card Verification Cleared: Genuine virtual/physical card verification passed without billing flags.',
            'Full Azure Portal Administrative Access: Complete handoff with primary Outlook/Microsoft credentials and recovery keys.'
        ],
        'stats' => [
            ['label' => 'Credit Balance', 'value' => '$200 Free Credits'],
            ['label' => 'Subscription Type', 'value' => 'Pay-As-You-Go / Trial'],
            ['label' => 'Billing Status', 'value' => 'Card Verified Active'],
            ['label' => 'Global Regions', 'value' => 'North America, EU, Asia'],
        ],
        'cards' => [
            [
                'title' => 'Microsoft Azure $200 Trial Account',
                'description' => 'Card-verified Azure subscription loaded with $200 trial credits and standard compute quota. Perfect for VPS hosting and developer testing.',
                'price' => '$14.00',
                'original_price' => '$22.00',
                'badge' => 'Standard Trial',
                'rating' => '4.8',
                'reviews' => '115',
                'features' => [
                    '$200 Free Azure Trial Credits Active',
                    'Linux & Windows Virtual Machine Ready',
                    'Azure App Service & Database Quota Open',
                    'Original Creation Outlook Email Included',
                    '48-Hour Replacement Guarantee'
                ]
            ],
            [
                'title' => 'Azure Pay-As-You-Go Active Subscription',
                'description' => 'Matured Azure account converted to Pay-As-You-Go status. Deploy higher core allocations and multi-zone virtual machines without trial limitations.',
                'price' => '$28.00',
                'original_price' => '$42.00',
                'badge' => 'Most Popular',
                'rating' => '5.0',
                'reviews' => '245',
                'features' => [
                    'Pay-As-You-Go Active Subscription Tier',
                    'Deploy Multiple Heavy Windows/Linux Instances',
                    'Azure OpenAI & Cognitive APIs Compatible',
                    'Clean Static Residential Registration IP',
                    'Includes Full Recovery Email Access'
                ]
            ],
            [
                'title' => 'Azure Enterprise Multi-Core Account',
                'description' => 'Upgraded Azure developer account with approved vCPU quota for heavy server computing, remote desktops, and database clustering.',
                'price' => '$52.00',
                'original_price' => '$75.00',
                'badge' => 'Enterprise Compute',
                'rating' => '5.0',
                'reviews' => '120',
                'features' => [
                    'Multi-Core Compute Quota Approved',
                    'Access to High-Performance NV/D-Series VMs',
                    'Low Risk of Sudden Verification Challenges',
                    'Full Root Credentials & Tenant Admin Provided',
                    'Priority 24/7 Dedicated Cloud Engineer'
                ]
            ],
            [
                'title' => 'Bulk Azure Infrastructure Pack (5 Accounts)',
                'description' => '5 verified Microsoft Azure subscriptions delivering a combined $1,000 in cloud credits for multi-tenant SaaS hosting and bot clusters.',
                'price' => '$62.00',
                'original_price' => '$98.00',
                'badge' => 'DevOps Fleet',
                'rating' => '4.9',
                'reviews' => '65',
                'features' => [
                    '5 Verified Azure Subscriptions ($200 credits each)',
                    'Total Combined Cloud Credits: $1,000+',
                    'Spread Across Diverse Clean Billing Entities',
                    'Instant CSV Data Export Download',
                    'Direct Telegram/WhatsApp Cloud Specialist'
                ]
            ]
        ]
    ])
@endsection
