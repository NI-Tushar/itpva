@extends('layouts.app')

@section('title', 'Buy Domain Google Voice Accounts - Enterprise Workspace & Branded Telephony')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'Domain Google Voice',
        'title' => 'Buy Domain Google Voice Accounts (Enterprise Workspace)',
        'description' => 'Custom domain-linked Google Voice accounts hosted under Google Workspace enterprise tenants. Combines high-reputation business email branding with Google Voice business telephony for corporate sales desks, customer support teams, and high-trust caller ID routing.',
        'highlights' => [
            'Custom Domain Integration: Associated with professional corporate domains instead of generic @gmail.com addresses.',
            'Enterprise Workspace Tier: Unlocked business Google Voice features including multi-ring groups, desk phone routing, and advanced call forwarding.',
            'Tier-1 Non-VoIP Carrier Assigned: Authentic US carrier number allocation ensuring full SMS deliverability and verification compatibility.',
            'Admin Console & Super Admin Support: Delivered with dedicated user access or workspace tenant delegation guidance.'
        ],
        'stats' => [
            ['label' => 'Workspace Edition', 'value' => 'Google Workspace Tier'],
            ['label' => 'Branding Level', 'value' => 'Custom Domain Linked'],
            ['label' => 'Telephony Standard', 'value' => 'Enterprise Routing'],
            ['label' => 'Warranty SLA', 'value' => '48h Replacement SLA'],
        ],
        'cards' => [
            [
                'title' => 'Domain Google Voice (Single User Line)',
                'description' => '1 custom domain-linked Google Voice business line. Perfect for solo executives, founders, and consultants needing professional branded telephony.',
                'price' => '$8.50',
                'original_price' => '$14.00',
                'badge' => 'Founder Line',
                'rating' => '4.9',
                'reviews' => '115',
                'features' => [
                    'Custom Domain Branded Email + Voice Line',
                    'Dedicated Real US Carrier Business Number',
                    'Professional Voicemail & Call Routing',
                    'Clean Static Residential Registration IP',
                    '48-Hour Replacement Guarantee'
                ]
            ],
            [
                'title' => 'Team Workspace Pack (3 Domain Lines)',
                'description' => '3 domain-linked Google Voice lines under a coordinated workspace tenant. Ideal for sales teams, SDR desks, and client account managers.',
                'price' => '$24.00',
                'original_price' => '$38.00',
                'badge' => 'Most Popular',
                'rating' => '5.0',
                'reviews' => '210',
                'features' => [
                    '3 Branded Domain Voice Accounts',
                    'Consistent Corporate Domain Identity',
                    'Multi-User Call Forwarding & SMS Sync',
                    'Full Workspace Login Credentials',
                    'Includes Full Recovery Email Access'
                ]
            ],
            [
                'title' => 'Sales Agency Fleet (5 Domain Lines)',
                'description' => '5 domain-linked enterprise Google Voice accounts configured for high-volume outbound SDR calling, cold outreach, and client onboarding.',
                'price' => '$38.00',
                'original_price' => '$60.00',
                'badge' => 'Agency Fleet',
                'rating' => '5.0',
                'reviews' => '142',
                'features' => [
                    '5 Enterprise Google Voice Accounts',
                    'Custom State & Metro Area Code Allocation',
                    'High Inbound & Outbound Calling Capacity',
                    'Full Residential Fingerprint Profile',
                    'Priority 24/7 Dedicated Support'
                ]
            ],
            [
                'title' => 'Enterprise Call Center Pack (10 Lines)',
                'description' => '10 domain-linked Google Voice numbers configured for corporate customer service operations, distributed teams, and multi-state presence.',
                'price' => '$72.00',
                'original_price' => '$115.00',
                'badge' => 'Enterprise Scale',
                'rating' => '5.0',
                'reviews' => '78',
                'features' => [
                    '10 Branded Domain Google Voice Lines',
                    'Best Volume Pricing ($7.20 / account)',
                    'Multi-Region US Phone Number Assignment',
                    'Direct CSV / Excel Data Download Format',
                    'Dedicated Account Manager Support'
                ]
            ]
        ]
    ])
@endsection
