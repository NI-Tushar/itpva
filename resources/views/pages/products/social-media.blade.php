@extends('layouts.app')

@section('title', 'Social Media Accounts - Verified Profiles & Advertising Infrastructure')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'Social Media',
        'title' => 'Social Media Accounts & Global Advertising Infrastructure',
        'description' => 'Scale your viral marketing, automated engagement, influencer DM campaigns, and media buying pipelines. We provision aged and phone-verified accounts across Facebook, Instagram, TikTok Ads Manager, Twitter/X, and YouTube Channels with 2FA protection.',
        'highlights' => [
            'Pristine Residential Farm History: Created and farmed using dedicated static residential IPs to bypass platform shadowbans.',
            'Two-Factor Authentication (2FA) Armed: 16-digit secret keys provided for instant, checkpoint-free authentication.',
            'Ad Account & Agency Ready: Postpaid TikTok Ads accounts and seasoned Facebook profiles configured for ads manager linking.',
            'Instant Automated Delivery: Credentials dispatched immediately in structured format with recovery mail and session cookies.'
        ],
        'stats' => [
            ['label' => 'Supported Platforms', 'value' => '6 Major Socials'],
            ['label' => 'Security Level', 'value' => '2FA Keys + Backup Codes'],
            ['label' => 'Account Tenure', 'value' => 'Fresh to 10+ Years Aged'],
            ['label' => 'Replacement SLA', 'value' => '48h Login Guarantee'],
        ],
        'cards' => [
            ['icon' => 'fa-brands fa-facebook-f', 'title' => 'Facebook Accounts', 'text' => 'Aged Facebook profiles with friends network, 2FA keys, and active Marketplace access.'],
            ['icon' => 'fa-brands fa-instagram', 'title' => 'Instagram Accounts', 'text' => 'Phone and email-verified Instagram PVA accounts for influencer growth and DM outreach.'],
            ['icon' => 'fa-solid fa-clone', 'title' => 'Instagram Clone PVA', 'text' => '1-30 days aged Instagram accounts with 2FA secret keys and realistic bio profiles.'],
            ['icon' => 'fa-brands fa-tiktok', 'title' => 'TikTok Ads Accounts', 'text' => 'Postpaid and agency TikTok Ads Manager accounts in USD/VND with 2FA security.'],
            ['icon' => 'fa-brands fa-x-twitter', 'title' => 'Twitter Accounts', 'text' => 'Aged Twitter/X accounts with auth tokens and 2FA keys for automation bots and Web3.'],
            ['icon' => 'fa-brands fa-youtube', 'title' => 'Youtube Accounts', 'text' => 'Phone-verified YouTube channels with Level 2 verification and custom thumbnails unlocked.'],
        ],
    ])
@endsection
