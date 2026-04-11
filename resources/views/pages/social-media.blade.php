@extends('layouts.app')

@section('title', 'Social Media')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'Social Media',
        'title' => 'A central social media category page for account-based platform offers.',
        'description' => 'This overview page introduces your social account services and directs users into Facebook, Instagram, Twitter, and Youtube product pages from one place.',
        'highlights' => [
            ['title' => 'Organized category hub', 'text' => 'Keep all major social account offerings grouped under a single navigation family.'],
            ['title' => 'Platform-specific pages', 'text' => 'Each major platform now has a separate route and view for tailored messaging.'],
            ['title' => 'Scalable design system', 'text' => 'You can later add more platforms without rebuilding the page structure.'],
        ],
        'stats' => [
            ['value' => '4', 'label' => 'Platform Pages', 'text' => 'Facebook, Instagram, Twitter, and Youtube are already connected.'],
            ['value' => 'Unified', 'label' => 'User Flow', 'text' => 'Users can browse a category before jumping into a specific platform.'],
            ['value' => 'Tailwind', 'label' => 'Visual System', 'text' => 'All pages inherit the same responsive styling foundation.'],
        ],
        'cards' => [
            ['icon' => 'fa-brands fa-facebook-f', 'title' => 'Facebook Accounts', 'text' => 'Use for page growth, ad-ready accounts, or marketplace listings.'],
            ['icon' => 'fa-brands fa-instagram', 'title' => 'Instagram Accounts', 'text' => 'Showcase niche-based or engagement-ready Instagram stock.'],
            ['icon' => 'fa-brands fa-x-twitter', 'title' => 'Twitter Accounts', 'text' => 'Explain account characteristics and delivery process clearly.'],
            ['icon' => 'fa-brands fa-youtube', 'title' => 'Youtube Accounts', 'text' => 'Present channel or account-related offerings with clearer categorization.'],
        ],
    ])
@endsection
