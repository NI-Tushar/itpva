@extends('layouts.app')

@section('title', 'Buy Google Voice Accounts - Fresh Real Carrier US PVA Phone Lines')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'Google Voice',
        'title' => 'Buy Verified Google Voice Accounts (Real US Carrier SIM)',
        'description' => 'Real carrier phone-verified Google Voice accounts ready for business communications, SMS marketing, 2FA security verifications, and client calls. Created with pristine static residential IPs and genuine physical carrier numbers to guarantee long-term retention without suspension.',
        'highlights' => [
            '100% Real Physical Carrier PVA: Verified with genuine Tier-1 US carrier SIM cards (AT&T, Verizon, T-Mobile) — zero cheap VoIP flags.',
            'Instant Calling & SMS Ready: Make and receive domestic and international calls, send texts, and set up voicemail greetings immediately.',
            'Complete Google Account Ownership: Full access to the primary Gmail inbox, linked recovery email credentials, and 2FA recovery backup codes.',
            'Custom US Area Codes on Request: Request specific US states, major cities, or preferred local area codes.'
        ],
        'stats' => [
            ['label' => 'Phone Line Type', 'value' => 'Real Carrier Non-VoIP'],
            ['label' => 'Carrier Quality', 'value' => 'Tier-1 US Mobile'],
            ['label' => 'Turnaround Time', 'value' => 'Instant Automated'],
            ['label' => 'Warranty Coverage', 'value' => '48h Replacement SLA'],
        ],
        'cards' => [
            [
                'title' => 'Fresh Google Voice Account (Single Line)',
                'description' => 'Freshly created Google Voice account verified with a physical US carrier SIM. Primed for personal calling, SMS, and account verifications.',
                'price' => '$4.00',
                'original_price' => '$6.00',
                'badge' => 'Instant Delivery',
                'rating' => '4.9',
                'reviews' => '320',
                'features' => [
                    'Real Physical US Carrier Phone Line',
                    'Full Gmail Access (Email + Password + Recovery)',
                    'Clean Static Residential Registration IP',
                    'Direct Web & Mobile App Login',
                    '48-Hour Replacement Guarantee'
                ]
            ],
            [
                'title' => 'Pack of 5 Verified Google Voice Lines',
                'description' => '5 individual Google Voice accounts with diverse US area codes. Ideal for small sales teams, customer service desks, and outreach workflows.',
                'price' => '$18.00',
                'original_price' => '$28.00',
                'badge' => 'Most Popular',
                'rating' => '5.0',
                'reviews' => '480',
                'features' => [
                    '5 Unique Real Carrier Google Voice Numbers',
                    'Spread Across Diverse Top US Metro Area Codes',
                    'Independent Google Accounts for Maximum Safety',
                    'Organized CSV / Excel Data Download',
                    'Priority Technical Onboarding Guide'
                ]
            ],
            [
                'title' => 'Pack of 10 Google Voice Fleet',
                'description' => '10 verified Google Voice numbers delivering scalable calling and SMS bandwidth for growing agencies and marketing automation.',
                'price' => '$34.00',
                'original_price' => '$55.00',
                'badge' => 'Agency Value',
                'rating' => '5.0',
                'reviews' => '290',
                'features' => [
                    '10 Active US Google Voice Accounts',
                    'Custom State / Area Code Allocation Upon Request',
                    'Cookies (JSON/Netscape) + Direct Password Access',
                    'Tested for WhatsApp & Telegram Registration',
                    'Dedicated Priority Support Specialist'
                ]
            ],
            [
                'title' => 'Bulk Google Voice Enterprise (25 Lines)',
                'description' => '25 verified Google Voice accounts configured for call centers, high-volume lead generators, and distributed customer support fleets.',
                'price' => '$79.00',
                'original_price' => '$125.00',
                'badge' => 'Enterprise Fleet',
                'rating' => '5.0',
                'reviews' => '115',
                'features' => [
                    '25 Verified Google Voice Accounts',
                    'Best Volume Pricing ($3.16 / account)',
                    'Dedicated Account Manager & VIP Queue',
                    'Custom Anti-Detect Browser Profiles Provided',
                    'Direct Telegram/WhatsApp VIP Tech Support'
                ]
            ]
        ]
    ])
@endsection
