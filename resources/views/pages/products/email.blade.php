@extends('layouts.app')

@section('title', 'Email Services - Global Webmail & Verified PVA Marketplace')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'Email Services',
        'title' => 'Email Infrastructure & Verified PVA Webmail Solutions',
        'description' => 'Explore the complete ITPVA email ecosystem. From fresh and vintage Gmail workspaces to authentic university .EDU student mailboxes, protocol-activated GMX and Mail.com accounts, OAuth2 Microsoft Graph inboxes, and on-demand OTP code mail receivers.',
        'highlights' => [
            'Diverse Provider Footprint: Access Gmail, Yahoo, Hotmail/Outlook, GMX, Mail.com, AOL, and .EDU college inboxes from a single unified hub.',
            'Industrial Protocol Unlocked: Full IMAP, POP3, and SMTP support with pre-generated app passwords for third-party automation tools.',
            'Real Carrier Verification: Verified with physical mobile carrier numbers — zero synthetic VoIP flags.',
            'Guaranteed Dispatch & Warranty: Instant automated delivery backed by our 48-hour replacement guarantee.'
        ],
        'stats' => [
            ['label' => 'Supported Providers', 'value' => '9+ Global Platforms'],
            ['label' => 'Protocol Status', 'value' => 'IMAP / POP3 / SMTP ON'],
            ['label' => 'Average Dispatch', 'value' => '< 3 Minutes Auto'],
            ['label' => 'Warranty Window', 'value' => '48h Replacement SLA'],
        ],
        'cards' => [
            ['icon' => 'fa-brands fa-google', 'title' => 'Buy Gmail Accounts', 'text' => 'Fresh real carrier PVA inboxes ready for immediate marketing and signups.'],
            ['icon' => 'fa-solid fa-clock-rotate-left', 'title' => 'Buy Gmail Aged Accounts', 'text' => '2014-2023 vintage Gmail accounts with seasoned sender trust.'],
            ['icon' => 'fa-solid fa-graduation-cap', 'title' => 'Edu Mail Accounts', 'text' => 'Authentic university student .EDU inboxes for developer packs and discounts.'],
            ['icon' => 'fa-solid fa-key', 'title' => 'Old Code Mail', 'text' => 'Seasoned recovery inboxes engineered to capture OTP and 2FA verification codes.'],
            ['icon' => 'fa-solid fa-envelope', 'title' => 'GMX Mail', 'text' => 'European and global GMX.com mailboxes with POP3, IMAP, and SMTP enabled.'],
            ['icon' => 'fa-solid fa-at', 'title' => 'Mail.com Accounts', 'text' => 'Fresh and 1+ month aged inboxes with distinctive international domains.'],
            ['icon' => 'fa-brands fa-microsoft', 'title' => 'Hotmail & Outlook OAuth2', 'text' => 'Aged Microsoft inboxes with modern OAuth2 Graph API and IMAP tokens.'],
            ['icon' => 'fa-solid fa-globe', 'title' => 'Gmail Domain Rent', 'text' => 'Private short and extended rental inboxes (2h to 48h) for OTP verification.'],
            ['icon' => 'fa-brands fa-yahoo', 'title' => 'Yahoo Accounts', 'text' => 'Phone-verified Yahoo Mail inboxes with 1TB free storage and IMAP access.'],
        ],
    ])
@endsection
