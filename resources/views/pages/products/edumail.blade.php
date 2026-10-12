@extends('layouts.app')

@section('title', 'Buy Edu Mail Accounts - Authentic Student .EDU Email')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'Academic Discounts & Developer Perks',
        'title' => 'Buy Authentic .EDU Email Accounts',
        'description' => 'Unlock thousands of dollars in student developer packs, software subscriptions, and academic perks. Verified college & university .edu email accounts with webmail, portal access, and lifetime student privileges.',
        'highlights' => [
            'Exclusive Academic Perks: Claim GitHub Student Developer Pack, JetBrains, Canva Pro, Figma, and Notion.',
            'Massive Savings: Enjoy 50% off Spotify Premium, Amazon Prime Student (6 Months Free), Apple Music, and YouTube Premium.',
            'Direct Portal / Outlook Web Access: Receive login credentials with complete webmail inbox control.',
            'Guaranteed Validity: Every .edu account is freshly tested and covered with our replacement warranty.'
        ],
        'stats' => [
            ['label' => 'Perks Eligible', 'value' => 'GitHub, Prime, Spotify'],
            ['label' => 'Domain Authority', 'value' => 'US/CA/UK College'],
            ['label' => 'Delivery', 'value' => 'Instant Digital'],
            ['label' => 'Portal Access', 'value' => 'Webmail / O365'],
        ],
        'cards' => [
            [
                'title' => 'Standard .EDU Student Email',
                'description' => 'Active US college student email address with direct webmail portal. Perfect for accessing student discounts, Spotify, Amazon Prime, and general student perks.',
                'price' => '$3.99',
                'original_price' => '$7.00',
                'badge' => 'Best Value',
                'rating' => '4.9',
                'reviews' => '342',
                'features' => [
                    'US University .edu Domain Email',
                    'Direct Webmail Inbox Access',
                    'Eligible for Amazon Prime 6-Month Trial',
                    'Spotify & Apple Music Student 50% Off',
                    'Full Credentials (Email + Password + Recovery)'
                ]
            ],
            [
                'title' => 'GitHub Student Pack Ready .EDU',
                'description' => 'Pre-vetted university student inbox pre-qualified for the GitHub Student Developer Pack, JetBrains IDE Suite, Namecheap free domain, and DigitalOcean credits.',
                'price' => '$8.50',
                'original_price' => '$14.00',
                'badge' => 'Developer Choice',
                'rating' => '5.0',
                'reviews' => '521',
                'features' => [
                    'GitHub Student Developer Pack Approved',
                    'JetBrains All Products Pack Access',
                    'Canva Pro & Notion Student Workspace',
                    'Microsoft Office 365 Cloud Apps',
                    '7-Day Replacement Guarantee'
                ]
            ],
            [
                'title' => 'Office 365 + OneDrive .EDU Mail',
                'description' => 'Official Microsoft 365 Education mailbox with cloud desktop app activations and large cloud storage allocation.',
                'price' => '$12.00',
                'original_price' => '$20.00',
                'badge' => 'Storage & Apps',
                'rating' => '4.9',
                'reviews' => '189',
                'features' => [
                    'Official Microsoft Office 365 Education Access',
                    '1TB - 5TB OneDrive Cloud Storage Capacity',
                    'Access to Word, Excel, PowerPoint Online & App',
                    'Custom First & Last Name Allocation',
                    'Long-Term University Retention'
                ]
            ],
            [
                'title' => 'Pack of 5 Verified .EDU Accounts',
                'description' => 'Multi-institution student bundle from 5 distinct accredited colleges. Maximizes coupon claims and digital subscription activations across your team.',
                'price' => '$32.00',
                'original_price' => '$50.00',
                'badge' => 'Bundle Savings',
                'rating' => '5.0',
                'reviews' => '95',
                'features' => [
                    '5 Unique .EDU Accounts from Diverse Colleges',
                    'All Compatible with Major Student Portals',
                    'CSV / TXT Instant Export with Access Credentials',
                    'Priority Technical Onboarding Guide',
                    'Dedicated 24/7 Bulk Order Support'
                ]
            ]
        ]
    ])
@endsection
