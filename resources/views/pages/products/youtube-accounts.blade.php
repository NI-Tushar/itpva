@extends('layouts.app')

@section('title', 'Youtube Accounts')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'Youtube Accounts',
        'title' => 'A Youtube account landing page that can support channel-focused inventory or bundled offers.',
        'description' => 'Use this page to describe channel readiness, account types, package details, and support expectations for Youtube-related products.',
        'highlights' => [
            ['title' => 'Separate platform identity', 'text' => 'Youtube inventory now lives on its own page inside the social section.'],
            ['title' => 'Great for campaigns', 'text' => 'The route can be used as a direct landing page for platform-specific promotions.'],
            ['title' => 'Easy future edits', 'text' => 'Adjust the same Tailwind sections instead of rebuilding layout pieces.'],
        ],
        'stats' => [
            ['value' => 'Video', 'label' => 'Platform Focus', 'text' => 'Tailor content to channel and audience-related buyers.'],
            ['value' => 'Flexible', 'label' => 'Offer Shape', 'text' => 'Works for simple listings or richer product pages.'],
            ['value' => 'Consistent', 'label' => 'Marketplace UI', 'text' => 'Navigation and page styling align with the whole site.'],
        ],
        'cards' => [
            ['icon' => 'fa-solid fa-play', 'title' => 'Channel Positioning', 'text' => 'Explain channel age, theme, or inventory characteristics.'],
            ['icon' => 'fa-solid fa-video', 'title' => 'Offer Breakdown', 'text' => 'Use for plan details, bonuses, or account-related add-ons.'],
            ['icon' => 'fa-solid fa-user-shield', 'title' => 'Confidence Details', 'text' => 'Add replacement and support terms when needed.'],
        ],
    ])
@endsection
