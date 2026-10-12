@extends('layouts.app')

@section('title', 'Rent Gmail Domains - Short & Extended Rental Inboxes (2-4h, 12h, 48h)')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'On-Demand Inbound Mail Infrastructure',
        'title' => 'Gmail Domain Rental Service (2h to 48h+ Flexible)',
        'description' => 'Temporary and extended rental of verified Google Mail domains and active Gmail inboxes. Receive critical 2FA codes, account verifications, password resets, and authentication emails without long-term recurring overhead.',
        'highlights' => [
            'Immediate Activation: Start receiving inbound verification emails within 60 seconds of rental confirmation.',
            'Flexible Rental Durations: Choose between quick blitz sessions (2-4 Hours), half-day workflows (12+ Hours), or weekend holds (12-48 Hours).',
            'Full Direct Inbox Forwarding & Webmail: Access mail contents via secure web console or automated webhook forwarding.',
            'Private & Exclusive Access: Dedicated inbox assigned exclusively to you for the entire duration of your rental window.'
        ],
        'stats' => [
            ['label' => 'Activation Latency', 'value' => '< 60 Seconds'],
            ['label' => 'Rental Windows', 'value' => '2h, 12h, 48h+'],
            ['label' => 'Exclusivity', 'value' => '100% Private Slot'],
            ['label' => 'Forwarding Type', 'value' => 'Webmail / Webhook'],
        ],
        'cards' => [
            [
                'title' => 'Gmail Domain Rental (2 - 4 Hours)',
                'description' => 'Quick-turnaround rental for immediate single-purpose OTP verifications, gaming account linking, or rapid app activations.',
                'price' => '$2.00',
                'original_price' => '$3.50',
                'badge' => 'Quick Verification',
                'rating' => '4.8',
                'reviews' => '142',
                'features' => [
                    'Rental Duration: 2 to 4 Full Hours',
                    'Dedicated Inbound Mail Inbox Access',
                    'Instant Delivery of All Verification Codes',
                    'No Long-Term Subscription Necessary',
                    'Immediate Activation Confirmation'
                ]
            ],
            [
                'title' => 'Gmail Domain Rental (12+ Hours)',
                'description' => 'Extended half-day rental window. Ideal for multi-step service setups, complex account validations, and batch profile setups.',
                'price' => '$4.50',
                'original_price' => '$7.00',
                'badge' => 'Most Popular',
                'rating' => '4.9',
                'reviews' => '210',
                'features' => [
                    'Rental Duration: 12+ Continuous Hours',
                    'Private Inbound Mail Web Console',
                    'Guaranteed Zero Other User Collision',
                    'Unlimited Inbound Email Capacity',
                    'Fast 24/7 Support Team'
                ]
            ],
            [
                'title' => 'Gmail Domain Rental (12 - 48 Hours)',
                'description' => 'Multi-day rental hold for extended platform onboarding, follow-up security challenges, and high-value account stabilization.',
                'price' => '$8.50',
                'original_price' => '$14.00',
                'badge' => 'Extended Hold',
                'rating' => '5.0',
                'reviews' => '97',
                'features' => [
                    'Rental Duration: Up to 48 Hours',
                    'Persistent Security Pin & Link Reception',
                    'Live Inbound Monitoring Webhook Ready',
                    'Exclusive Private Single-Tenant Assignment',
                    'Dedicated Account Handler'
                ]
            ],
            [
                'title' => 'Custom Bulk Domain Rental (Weekly Fleet)',
                'description' => 'Multi-domain rental fleet configured with dedicated custom domains for large marketing agencies and mass automation workflows.',
                'price' => '$35.00',
                'original_price' => '$55.00',
                'badge' => 'Agency Fleet',
                'rating' => '5.0',
                'reviews' => '42',
                'features' => [
                    'Up to 10 Gmail Domain Inboxes in Parallel',
                    '7 Days Continuous Multi-Tenant Isolation',
                    'Custom Catch-All Forwarding Options',
                    'API / Webhook Feed for Auto-Ingestion',
                    'Priority Telegram VIP Support'
                ]
            ]
        ]
    ])
@endsection
