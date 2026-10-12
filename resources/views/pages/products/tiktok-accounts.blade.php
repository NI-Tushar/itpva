@extends('layouts.app')

@section('title', 'Buy TikTok Ads Accounts - Postpaid & Prepaid Agency Accounts (USD/VND)')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'Scalable Viral Video Advertising',
        'title' => 'Buy TikTok Ads Accounts (Postpaid & Agency)',
        'description' => 'Uncapped and resilient TikTok Ads Manager accounts configured for viral media buyers, dropshippers, and affiliate marketers. Featuring postpaid billing, 2FA security, USD or VND currency, and zero payment threshold lockouts.',
        'highlights' => [
            'Postpaid & Prepaid Variations: Run campaigns smoothly with flexible billing structures and established spend limits.',
            'Multi-Currency Support: USD and VND accounts calibrated for maximum ROI and flexible ad budget management.',
            'Pre-Enabled 2FA Security: Bulletproof two-factor authentication credentials with backup security codes included.',
            'Global Campaign Targeting: Target US, UK, Canada, Australia, and 50+ worldwide tier-1 countries without region blocks.'
        ],
        'stats' => [
            ['label' => 'Billing Type', 'value' => 'Postpaid / Prepaid'],
            ['label' => 'Currency Options', 'value' => 'USD / VND'],
            ['label' => 'Security Level', 'value' => '2FA Enabled + Keys'],
            ['label' => 'Target Geo', 'value' => 'Worldwide (US/EU/Global)'],
        ],
        'cards' => [
            [
                'title' => 'Vietnamese TikTok Ads (Postpaid, 2FA, USD Currency)',
                'description' => 'High-trust TikTok Ads Manager account registered in Vietnam, configured with USD currency, postpaid billing, and 2FA authentication active.',
                'price' => '$25.00',
                'original_price' => '$38.00',
                'badge' => 'Hot Seller',
                'rating' => '4.9',
                'reviews' => '156',
                'features' => [
                    'Currency: USD (Zero FX Conversion Loss)',
                    'Billing: Postpaid Activated',
                    'Two-Factor Authentication (2FA) Setup',
                    'Worldwide Geo Targeting Unlocked',
                    'Includes Full Cookie + Login Details'
                ]
            ],
            [
                'title' => 'Vietnamese TikTok Ads (Postpaid, 2FA, VND Currency)',
                'description' => 'Postpaid TikTok Ads account configured with native VND currency. Highly resilient against suspicious payment triggers and ad account bans.',
                'price' => '$22.00',
                'original_price' => '$32.00',
                'badge' => 'High Stability',
                'rating' => '4.8',
                'reviews' => '98',
                'features' => [
                    'Currency: Vietnamese Dong (VND)',
                    'Billing: Postpaid Flexible Spending',
                    '2FA Security Active (Secret Key Included)',
                    'Stable Payment Threshold Scaling',
                    '48-Hour Account Replacement Warranty'
                ]
            ],
            [
                'title' => 'Agency Tier TikTok Ads Account (Uncapped)',
                'description' => 'Elite Agency Ads Manager with zero daily spending limits and access to priority TikTok support and beta ad creative formats.',
                'price' => '$65.00',
                'original_price' => '$90.00',
                'badge' => 'No Daily Limit',
                'rating' => '5.0',
                'reviews' => '112',
                'features' => [
                    'Uncapped Daily Ad Spend ($$$ Unlimited)',
                    'Pre-Approved for All Tier-1 Ad Geos',
                    'Whitelisted for Spark Ads & Live Shopping',
                    'Low Ban Rate with White/Grey Hat Niches',
                    'Direct 1-on-1 Agency Account Specialist'
                ]
            ],
            [
                'title' => 'Bundle: 3x Postpaid TikTok Ads Accounts (USD)',
                'description' => 'Pack of 3 standalone postpaid USD TikTok Ads accounts designed for creative split-testing, backup redundancy, and horizontal budget scaling.',
                'price' => '$68.00',
                'original_price' => '$114.00',
                'badge' => 'Media Buyer Pack',
                'rating' => '5.0',
                'reviews' => '47',
                'features' => [
                    '3 Individual Postpaid USD Ads Accounts',
                    'Independent Business Centers for Safety',
                    'Anti-Detect Browser Profiles Provided',
                    'Step-by-Step Payment Method Binding Guide',
                    'VIP 24/7 Priority Emergency Support'
                ]
            ]
        ]
    ])
@endsection
