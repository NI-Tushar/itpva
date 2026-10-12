@extends('layouts.app')

@section('title', 'Buy Nextdoor Accounts - Aged & Fresh Local Verified PVA')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'Hyperlocal Community Outreach',
        'title' => 'Buy Verified Nextdoor Accounts (New & Aged)',
        'description' => 'Target high-intent local homeowners, neighborhoods, and commercial areas across the US and UK. Premium phone-verified and residential IP-warmed Nextdoor accounts ready for community promotions, service outreach, and neighborhood recommendations.',
        'highlights' => [
            'US/UK Postal Area Verified: Verified with authentic residential zip codes and valid addresses.',
            'Aged & Fresh Profiles Available: Choose freshly registered PVA or mature profiles with clean activity history.',
            'Local Neighborhood Trust: Pre-warmed accounts designed to bypass instant neighborhood suspicion.',
            'Instant Replacement Warranty: Backed by our 48-hour login and activation replacement policy.'
        ],
        'stats' => [
            ['label' => 'Zip Code Accuracy', 'value' => '100% US/UK'],
            ['label' => 'Verification Level', 'value' => 'PVA + Address'],
            ['label' => 'Delivery Time', 'value' => 'Instant - 15m'],
            ['label' => 'Support Coverage', 'value' => '24/7 Specialist'],
        ],
        'cards' => [
            [
                'title' => 'Fresh Nextdoor PVA Account',
                'description' => 'Brand new phone-verified Nextdoor account assigned to high-income US residential zip codes. Ideal for new local service launches.',
                'price' => '$4.50',
                'original_price' => '$6.00',
                'badge' => 'Fresh Verified',
                'rating' => '4.9',
                'reviews' => '118',
                'features' => [
                    'US Real Phone Number Verified',
                    'Specific City / State Address Tag',
                    'Complete Profile Setup (Name & Bio)',
                    'Clean Static Residential Registration IP',
                    '48-Hour Replacement Guarantee'
                ]
            ],
            [
                'title' => 'Aged Nextdoor Account (3 - 6 Months)',
                'description' => 'Matured Nextdoor account with natural tenure and neighbor interactions. High authority for posting neighborhood contractor and local service recommendations.',
                'price' => '$12.00',
                'original_price' => '$16.00',
                'badge' => 'Most Popular',
                'rating' => '5.0',
                'reviews' => '240',
                'features' => [
                    'Age: 3 to 6 Months Natural Retention',
                    'Existing Neighbor Connections Included',
                    'Low Neighborhood Flag & Shadowban Risk',
                    'Cookies (JSON/Netscape) + Direct Login',
                    'Includes Full Recovery Email Access'
                ]
            ],
            [
                'title' => 'Vintage Nextdoor Account (1+ Year Aged)',
                'description' => 'High-reputation legacy profile active in key metropolitan zip codes. Maximum neighborhood feed visibility and authority for high-volume outreach.',
                'price' => '$24.00',
                'original_price' => '$32.00',
                'badge' => 'High Reputation',
                'rating' => '5.0',
                'reviews' => '94',
                'features' => [
                    '12+ Months Account Lifetime',
                    'Established Neighborhood Karma & Trust',
                    'Immediate Freedom to Post in Feed & Groups',
                    'Full Residential Fingerprint & Session',
                    'Priority 24/7 Dedicated Account Rep'
                ]
            ],
            [
                'title' => 'Bulk Nextdoor Campaign Pack (10 Accounts)',
                'description' => 'Multi-region package configured across 10 distinct top US metro areas. Engineered for agencies scaling local HVAC, roofing, cleaning, and home renovation leads.',
                'price' => '$95.00',
                'original_price' => '$130.00',
                'badge' => 'Agency Bundle',
                'rating' => '4.9',
                'reviews' => '67',
                'features' => [
                    '10 Matured Nextdoor Verified Accounts',
                    'Spread Across Diverse Top Tier Metro Zips',
                    'Custom Geolocation Allocation Available',
                    'Includes Anti-Detect Browser Setup Guide',
                    'Direct Telegram/WhatsApp VIP Support'
                ]
            ]
        ]
    ])
@endsection
