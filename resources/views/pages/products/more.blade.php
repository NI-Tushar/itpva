@extends('layouts.app')

@section('title', 'Cloud & Utility Marketplace - Developer Consoles & Communication Tools')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'More Categories',
        'title' => 'Cloud Platforms, Developer Consoles & Utility Accounts',
        'description' => 'Provision high-tier cloud consoles, professional B2B profiles, community outreach accounts, and communication utilities. Everything you need to scale infrastructure across AWS, Google Cloud, Azure, DigitalOcean, LinkedIn, Nextdoor, Reddit, and TextNow.',
        'highlights' => [
            'Card-Verified Cloud Consoles: Approved developer subscriptions with $200-$300 credit trials across AWS, GCP, Azure, and DigitalOcean.',
            'Local & Community Authority: Nextdoor accounts with US/UK postal address verification and aged Reddit profiles with karma.',
            'Professional B2B Profiles: Fully configured LinkedIn accounts ready for Sales Navigator and outbound prospecting.',
            'Instant Automated Dispatch: Structured credentials with root administrative access and comprehensive setup guides.'
        ],
        'stats' => [
            ['label' => 'Available Utilities', 'value' => '12+ Cloud & Tools'],
            ['label' => 'Cloud Credit Value', 'value' => 'Up to $300 Active'],
            ['label' => 'Delivery Format', 'value' => 'CSV / JSON Console'],
            ['label' => 'Technical Support', 'value' => '24/7 Cloud Engineers'],
        ],
        'cards' => [
            ['icon' => 'fa-solid fa-house-chimney-user', 'title' => 'Nextdoor Accounts', 'text' => 'Aged and fresh Nextdoor accounts with US/UK postal verification for local contractor and service leads.'],
            ['icon' => 'fa-brands fa-linkedin-in', 'title' => 'Linked In', 'text' => 'Seasoned LinkedIn profiles with established connections for Sales Navigator and B2B prospecting.'],
            ['icon' => 'fa-brands fa-reddit-alien', 'title' => 'Raddit', 'text' => 'Aged Reddit accounts with post and comment karma for unmoderated community submissions.'],
            ['icon' => 'fa-solid fa-comment-sms', 'title' => 'TextNow', 'text' => 'Active US calling and texting lines for quick mobile OTP verifications and developer testing.'],
            ['icon' => 'fa-brands fa-digital-ocean', 'title' => 'Digital Ocean', 'text' => 'Card-verified DigitalOcean consoles with $200 credits and 3-10 droplet deployment limits.'],
            ['icon' => 'fa-brands fa-google', 'title' => 'Google Cloud', 'text' => 'Pre-activated GCP consoles featuring $300 credit trials and Compute Engine VMs unlocked.'],
            ['icon' => 'fa-brands fa-aws', 'title' => 'Amazon Web Services', 'text' => 'Verified AWS console instances with 8-32 vCPU quotas and production SES email access.'],
            ['icon' => 'fa-brands fa-microsoft', 'title' => 'Azure Account', 'text' => 'Microsoft Azure developer subscriptions loaded with $200 trial credits and active VMs.'],
            ['icon' => 'fa-solid fa-rocket', 'title' => 'Product Hunt', 'text' => 'Aged Product Hunt profiles with maker interactions and high-trust upvote authority.'],
        ],
    ])
@endsection
