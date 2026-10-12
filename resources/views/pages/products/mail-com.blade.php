@extends('layouts.app')

@section('title', 'Buy Mail.com Accounts - Fresh & Aged (IMAP/POP/SMTP Enabled)')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'Premium Custom Domain Webmail',
        'title' => 'Buy Mail.com Accounts (Fresh & Aged 1M+)',
        'description' => 'Versatile, high-reputation Mail.com email accounts featuring unlocked IMAP, POP3, and SMTP protocols. Available in fresh configurations or 1+ month aged profiles with established server trust, ideal for cold emailing, SaaS trials, and developer automation.',
        'highlights' => [
            'Full Protocol Accessibility: Native IMAP, POP3, and SMTP active for third-party clients and automated bots.',
            'Aged 1 Month+ Option: Natural server retention eliminates initial sending quotas and spam flags.',
            'Distinctive Global Domains: Mail.com branding provides professional trust across international recipients.',
            'High Reliability & Storage: Includes 65GB storage with strong spam shield and zero forced phone verification.'
        ],
        'stats' => [
            ['label' => 'Protocol Support', 'value' => 'IMAP/POP/SMTP Active'],
            ['label' => 'Available Age', 'value' => 'Fresh & 1M+ Aged'],
            ['label' => 'Delivery', 'value' => 'Instant Automated'],
            ['label' => 'Storage Capacity', 'value' => '65 GB Cloud Storage'],
        ],
        'cards' => [
            [
                'title' => 'Fresh Mail.com Accounts (Pack of 10)',
                'description' => '10 newly registered Mail.com inboxes with verified credentials and full IMAP/POP3/SMTP protocol access ready for immediate use.',
                'price' => '$2.80',
                'original_price' => '$4.50',
                'badge' => 'Fresh Verified',
                'rating' => '4.8',
                'reviews' => '54',
                'features' => [
                    '10 Fresh Mail.com Email Accounts',
                    'IMAP, POP3 & SMTP Outbound Active',
                    'Clean Static IP Registrations',
                    'Export: email:password format',
                    '48-Hour Guarantee'
                ]
            ],
            [
                'title' => 'Aged Mail.com (Age = 1 Month +) [10 Accounts]',
                'description' => '10 aged Mail.com accounts with 30+ days of tenure. Pre-warmed trust allows higher outbound volume and avoids new-account restrictions.',
                'price' => '$5.50',
                'original_price' => '$8.00',
                'badge' => 'High Deliverability',
                'rating' => '5.0',
                'reviews' => '183',
                'features' => [
                    'Age: 1 Month+ Established Lifetime',
                    'IMAP / POP3 / SMTP Fully Enabled',
                    'Pre-Warmed Reputation Score',
                    'Lower Risk of Mailbox Suspension',
                    'Instant Delivery Credentials'
                ]
            ],
            [
                'title' => 'Aged Mail.com (Age = 1 Month +) [50 Accounts]',
                'description' => '50 aged Mail.com inboxes for marketing teams executing automated cold outreach sequences with high deliverability.',
                'price' => '$22.00',
                'original_price' => '$35.00',
                'badge' => 'Outreach Choice',
                'rating' => '4.9',
                'reviews' => '129',
                'features' => [
                    '50 Accounts Aged 30+ Days',
                    'Seamless Thunderbird & Mailer Integration',
                    'Bypasses Initial Sandboxes & Rate Limits',
                    'Instant CSV Download',
                    '24/7 Replacement Warranty'
                ]
            ],
            [
                'title' => 'Bulk Aged Mail.com Fleet (100 Accounts)',
                'description' => '100 aged Mail.com inboxes delivering enterprise-grade volume for cold email automation, scrapers, and outreach fleets.',
                'price' => '$39.00',
                'original_price' => '$65.00',
                'badge' => 'Enterprise Fleet',
                'rating' => '5.0',
                'reviews' => '68',
                'features' => [
                    '100 Accounts Aged 1 Month+',
                    'Full API / IMAP / SMTP Compliance',
                    'Best Bulk Pricing Tier ($0.39 / unit)',
                    'Format: Email:Password:Recovery',
                    'VIP Priority Technical Support'
                ]
            ]
        ]
    ])
@endsection
