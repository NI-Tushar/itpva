@extends('layouts.app')

@section('title', 'Buy TextNow Accounts - US Phone Number & Calling/SMS Lines')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'TextNow Accounts',
        'title' => 'Buy Verified TextNow Accounts (Active US Numbers)',
        'description' => 'Phone-verified TextNow accounts featuring active US calling and SMS numbers. Built for quick mobile verification steps, two-factor OTP receptions, temporary customer outreach lines, and developer communications sandbox tests.',
        'highlights' => [
            'Active Real US Phone Number Assigned: Each account comes pre-configured with a working US area code phone number.',
            'Instant SMS & Call Reception: Receive incoming verification codes, security text messages, and voice calls with zero latency.',
            'Clean Session Storage & Cookies: Formatted for direct web browser login or import into anti-detect profiles.',
            'Fast Automated Delivery: Receive complete email, password, assigned phone number, and area code details immediately.'
        ],
        'stats' => [
            ['label' => 'Phone Number Line', 'value' => 'Active US Number'],
            ['label' => 'SMS Reception', 'value' => 'Instant Incoming'],
            ['label' => 'Protocol Type', 'value' => 'Web & Mobile App'],
            ['label' => 'Delivery Time', 'value' => 'Instant Automated'],
        ],
        'cards' => [
            [
                'title' => 'Fresh TextNow Account (Pack of 5)',
                'description' => '5 newly verified TextNow accounts with active US phone numbers. Ready for quick platform verifications and temporary outbound tests.',
                'price' => '$4.00',
                'original_price' => '$6.50',
                'badge' => 'Starter Pack',
                'rating' => '4.8',
                'reviews' => '92',
                'features' => [
                    '5 Active US Phone Number Lines',
                    'Direct Incoming SMS & Call Receiving',
                    'Clean Static Residential Registration IP',
                    'Format: Email:Password:PhoneNumber',
                    '48-Hour Replacement Guarantee'
                ]
            ],
            [
                'title' => 'Aged TextNow Accounts (Pack of 10)',
                'description' => '10 matured TextNow accounts with persistent phone numbers and established activity. High retention rate for multi-step service verification.',
                'price' => '$9.50',
                'original_price' => '$15.00',
                'badge' => 'Most Popular',
                'rating' => '5.0',
                'reviews' => '230',
                'features' => [
                    '10 Matured TextNow Accounts',
                    'Persistent Assigned US Numbers',
                    'Bypasses Quick Inactivity Number Drops',
                    'Includes Full Recovery Email Access',
                    'Instant Delivery Credentials'
                ]
            ],
            [
                'title' => 'Pack of 25 Active TextNow Lines',
                'description' => '25 active TextNow lines configured for marketing agencies, multi-account registration campaigns, and automated SMS receivers.',
                'price' => '$22.00',
                'original_price' => '$35.00',
                'badge' => 'Agency Choice',
                'rating' => '4.9',
                'reviews' => '115',
                'features' => [
                    '25 Active US Phone Number Lines',
                    'Spread Across Diverse Top US Area Codes',
                    'Zero Latency for OTP Reception',
                    'Instant CSV Data Export Download',
                    '24/7 Dedicated Support'
                ]
            ],
            [
                'title' => 'Bulk TextNow Fleet (50 Accounts)',
                'description' => '50 verified TextNow accounts delivering industrial volume for high-capacity verification bots, scrapers, and outreach fleets.',
                'price' => '$39.00',
                'original_price' => '$65.00',
                'badge' => 'Enterprise Scale',
                'rating' => '5.0',
                'reviews' => '68',
                'features' => [
                    '50 Verified TextNow Accounts',
                    'Best Volume Pricing ($0.78 / account)',
                    'Multi-State US Area Code Spread',
                    'Format: Email:Pass:Phone:AreaCode',
                    'VIP Priority Account Manager'
                ]
            ]
        ]
    ])
@endsection
