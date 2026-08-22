@extends('layouts.app')

@section('title', 'Facebook Accounts')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'Facebook Accounts',
        'title' => 'A dedicated Facebook account page that can carry listings, packages, and trust signals.',
        'description' => 'Use this page for Facebook-related offers with room for account age, profile type, business use cases, and post-sale support information.',
        'highlights' => [
            ['title' => 'Specific landing page', 'text' => 'Facebook buyers now land on a page built only for that platform.'],
            ['title' => 'Flexible content area', 'text' => 'Add profile details, package options, or buyer FAQs here later.'],
            ['title' => 'Consistent navigation', 'text' => 'Visitors can move between social categories without losing context.'],
        ],
        'stats' => [
            ['value' => 'Social', 'label' => 'Platform Type', 'text' => 'Part of the social media section with its own route.'],
            ['value' => 'Flexible', 'label' => 'Offer Layout', 'text' => 'Supports both small and bulk inventory messaging.'],
            ['value' => 'Modern', 'label' => 'Page Design', 'text' => 'Uses the same premium Tailwind page pattern site-wide.'],
        ],
        'cards' => [
            ['icon' => 'fa-solid fa-user-group', 'title' => 'Profile Types', 'text' => 'Explain what kind of Facebook accounts are available.'],
            ['icon' => 'fa-solid fa-bullhorn', 'title' => 'Use Cases', 'text' => 'Clarify whether inventory is suited for ads, outreach, or growth.'],
            ['icon' => 'fa-solid fa-thumbs-up', 'title' => 'Buyer Confidence', 'text' => 'Add guarantee and support details as needed.'],
        ],
    ])
@endsection
