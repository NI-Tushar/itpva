@extends('layouts.app')

@section('title', 'Buy GMX.com Accounts - POP3, IMAP, SMTP Activated')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'European & Global Email Infrastructure',
        'title' => 'Buy GMX Mail Accounts (POP3 / IMAP / SMTP Activated)',
        'description' => 'Reliable, high-trust GMX.com email accounts with full POP3, IMAP, and SMTP protocols activated out of the box. Engineered for seamless mail automation, email client integration (Thunderbird, Outlook), and high inbox rate marketing campaigns.',
        'highlights' => [
            'All Mail Protocols Activated: Complete POP3, IMAP, and SMTP enabled for direct mailer script and bot connections.',
            'High Sender Reputation: GMX servers deliver high inbox penetration across global mail providers.',
            'Generous Mail Storage: Built-in 65GB cloud inbox capacity with attachment sizes up to 50MB.',
            'Zero Phone Lockouts: Verified without intrusive SMS checkpoints during regular programmatic operations.'
        ],
        'stats' => [
            ['label' => 'Protocol Status', 'value' => 'POP3/IMAP/SMTP ON'],
            ['label' => 'Inbox Capacity', 'value' => '65 GB Storage'],
            ['label' => 'Mail Delivery', 'value' => 'Instant Digital'],
            ['label' => 'Authentication', 'value' => 'Direct App Password'],
        ],
        'cards' => [
            [
                'title' => 'Pack of 10 GMX.com Active Accounts',
                'description' => '10 fresh GMX mailboxes configured with IMAP, POP3, and SMTP permissions unlocked. Ready for desktop mail apps and testing.',
                'price' => '$2.50',
                'original_price' => '$4.00',
                'badge' => 'Instant Start',
                'rating' => '4.8',
                'reviews' => '64',
                'features' => [
                    '10 Verified GMX.com Email Accounts',
                    'IMAP, POP3 & SMTP Access Enabled',
                    'Compatible with Thunderbird & Outlook',
                    'Includes Full Password Credentials',
                    '48-Hour Login Warranty'
                ]
            ],
            [
                'title' => 'Pack of 50 GMX.com Accounts (IMAP/SMTP)',
                'description' => '50 protocol-enabled GMX accounts for cold email marketing sequences, customer service inboxes, and platform signups.',
                'price' => '$10.00',
                'original_price' => '$16.00',
                'badge' => 'Best Value',
                'rating' => '4.9',
                'reviews' => '172',
                'features' => [
                    '50 Active GMX.com Inboxes',
                    'Full SMTP Mass-Mailing Ready',
                    'Clean European / US IP Registrations',
                    'Direct Download Format (Email:Pass)',
                    'Instant Automated Delivery'
                ]
            ],
            [
                'title' => 'Pack of 100 GMX.com Accounts',
                'description' => 'Centrally managed 100-account package for scalable outreach and multi-threaded mailing tools.',
                'price' => '$18.00',
                'original_price' => '$30.00',
                'badge' => 'Mailing Fleet',
                'rating' => '5.0',
                'reviews' => '115',
                'features' => [
                    '100 Fully Configured GMX Inboxes',
                    'High Sending Deliverability Rate',
                    'Compatible with Auto-Senders & Warmup Tools',
                    'No Sudden Security Interceptions',
                    '24/7 Dedicated Replacement Support'
                ]
            ],
            [
                'title' => 'Pack of 500 GMX.com Enterprise Bulk',
                'description' => 'Mass volume fleet for high-scale marketing software, affiliate lead generation, and automated verification systems.',
                'price' => '$75.00',
                'original_price' => '$120.00',
                'badge' => 'Enterprise Pack',
                'rating' => '5.0',
                'reviews' => '53',
                'features' => [
                    '500 Active GMX.com Accounts',
                    'Unbeatable Price ($0.15 / account)',
                    'Export in JSON, CSV, or Text File',
                    'Rotational IP Best Practices Included',
                    'Dedicated Account Manager'
                ]
            ]
        ]
    ])
@endsection
