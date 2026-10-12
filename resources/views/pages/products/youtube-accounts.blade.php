@extends('layouts.app')

@section('title', 'Buy YouTube Accounts - Aged & PVA Verified YouTube Channels')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'YouTube Accounts',
        'title' => 'Buy Aged & Verified YouTube Channel Accounts',
        'description' => 'Phone-verified YouTube channels equipped for video uploads, livestream activations, and automated content creation. Features clean channel standing, verified phone verification status, and full Gmail primary inbox access.',
        'highlights' => [
            'Channel Verification Level 2 Cleared: Upload videos longer than 15 minutes and add custom thumbnails out of the box.',
            'Livestream Feature Activated: Ready for 24/7 continuous stream broadcasts and live events.',
            'Aged 2012-2023 Channels Available: Vintage channels with historical view algorithms that rank videos faster.',
            'Full Primary Google Access: Complete credentials with original Gmail password and linked recovery mailbox.'
        ],
        'stats' => [
            ['label' => 'Channel Verification', 'value' => 'Level 2 Cleared'],
            ['label' => 'Livestream Status', 'value' => 'Unlocked & Ready'],
            ['label' => 'Account Tenure', 'value' => 'Fresh to 2012 Vintage'],
            ['label' => 'Delivery Format', 'value' => 'Mail:Pass:Recovery:2FA'],
        ],
        'cards' => [
            [
                'title' => 'Fresh YouTube PVA Channel',
                'description' => 'Phone-verified YouTube channel with custom thumbnail privileges and Level 2 features unlocked. Ready for immediate video uploads.',
                'price' => '$3.00',
                'original_price' => '$5.00',
                'badge' => 'Fresh Verified',
                'rating' => '4.8',
                'reviews' => '110',
                'features' => [
                    'Carrier SIM Real Phone Verified',
                    'Custom Thumbnails Enabled',
                    'Videos > 15 Minutes Upload Access',
                    'Full Gmail Access Included',
                    '48-Hour Replacement Guarantee'
                ]
            ],
            [
                'title' => 'Livestream Ready YouTube Channel',
                'description' => 'Channel with the 24-hour livestream waiting period already cleared. Ready to start broadcasting live gaming, crypto, or podcast streams immediately.',
                'price' => '$6.50',
                'original_price' => '$10.00',
                'badge' => 'Stream Ready',
                'rating' => '5.0',
                'reviews' => '245',
                'features' => [
                    'Livestreaming Feature Active & Tested',
                    'Zero 24-Hour Wait Restriction',
                    'Phone Number Cleared & Bound',
                    'Full Cookie Session Export (JSON)',
                    'Includes Full Recovery Email Access'
                ]
            ],
            [
                'title' => 'Vintage YouTube Channel (2012-2020 Aged)',
                'description' => 'Historic legacy channel aged 5-10+ years. Algorithmic authority helps new uploads rank faster in YouTube search and recommended feed.',
                'price' => '$18.00',
                'original_price' => '$26.00',
                'badge' => 'High Authority',
                'rating' => '5.0',
                'reviews' => '174',
                'features' => [
                    'Age: 2012 to 2020 Historic Lifetime',
                    'Zero Copyright Strikes & Clean Standing',
                    'Faster Algorithmic Video Indexing',
                    'Full Residential IP Fingerprint History',
                    'Priority 24/7 Dedicated Support'
                ]
            ],
            [
                'title' => 'Bulk Automation Channel Pack (10 Channels)',
                'description' => '10 verified YouTube channels configured for automated video syndication, shorts clipping channels, and niche affiliate video pipelines.',
                'price' => '$75.00',
                'original_price' => '$110.00',
                'badge' => 'Agency Pack',
                'rating' => '4.9',
                'reviews' => '62',
                'features' => [
                    '10 Verified YouTube PVA Channels',
                    'All Feature Custom Thumbnail Activation',
                    'Spread Across Diverse Clean IP Registrations',
                    'Instant CSV / Excel Data Download',
                    'Direct Telegram/WhatsApp Specialist'
                ]
            ]
        ]
    ])
@endsection
