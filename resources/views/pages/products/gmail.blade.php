@extends('layouts.app')

@section('title', 'Gmail Accounts - Verified Inboxes & Workspace Infrastructure')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'Gmail Accounts',
        'title' => 'Gmail Accounts & Google Workspace Infrastructure',
        'description' => 'Explore our complete catalog of verified Gmail accounts, aged vintage inboxes, and Google Workspace setups. Built with real carrier phone verifications, 2FA backup codes, and pristine residential IPs for enterprise cold emailing and daily operations.',
        'highlights' => [
            'Fresh & Aged Vintage Selection: Choose newly verified PVA or mature accounts aged up to 10+ years (2014-2023).',
            'Full Protocol Accessibility: Enabled for webmail, IMAP, and SMTP with app passwords for instant mailer integration.',
            'Real Carrier Verification: Verified with physical mobile carrier numbers — zero synthetic VoIP flags.',
            'Guaranteed Dispatch & Warranty: Instant automated delivery backed by our 48-hour replacement guarantee.'
        ],
        'stats' => [
            ['label' => 'Account Types', 'value' => 'Fresh & Vintage Aged'],
            ['label' => 'Deliverability Score', 'value' => '99.5% Inbox Placement'],
            ['label' => 'Delivery Format', 'value' => 'CSV / JSON / Netscape'],
            ['label' => 'Support Hours', 'value' => '24/7 Dedicated'],
        ],
        'cards' => [
            ['icon' => 'fa-solid fa-envelope', 'title' => 'Buy Gmail Accounts', 'text' => 'Fresh phone-verified accounts with recovery mail access and 2FA codes for mass signups and active outreach.'],
            ['icon' => 'fa-solid fa-clock-rotate-left', 'title' => 'Buy Gmail Aged Accounts', 'text' => 'Vintage inboxes aged from 2014 to 2023 with established domain trust and high sender reputation.'],
            ['icon' => 'fa-solid fa-globe', 'title' => 'Gmail Domain Rent', 'text' => 'Temporary private domain rental (2h to 48h) for instant OTP code reception and app activations.'],
        ],
    ])
@endsection
