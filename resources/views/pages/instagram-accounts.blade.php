@extends('layouts.app')

@section('title', 'Instagram Accounts')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'Instagram Accounts',
        'title' => 'Show Instagram inventory with a focused page built for platform-specific messaging.',
        'description' => 'This route gives you space to explain niche, follower level, account age, and engagement-related details in a cleaner presentation.',
        'highlights' => [
            ['title' => 'Platform-focused copy', 'text' => 'Instagram messaging can now be more specific than a generic social page allows.'],
            ['title' => 'Flexible for multiple offers', 'text' => 'Use the cards for categories like niche pages, creator accounts, or starter inventory.'],
            ['title' => 'Consistent visual hierarchy', 'text' => 'Hero, stats, and card areas make the page easy to extend.'],
        ],
        'stats' => [
            ['value' => 'Dedicated', 'label' => 'Platform Route', 'text' => 'Visitors land on an Instagram-only page from the dropdown.'],
            ['value' => 'Clean', 'label' => 'Content Blocks', 'text' => 'Ready for follower stats, niche info, or CTA modules.'],
            ['value' => 'Aligned', 'label' => 'Brand Style', 'text' => 'Matches every other page in the new navigation system.'],
        ],
        'cards' => [
            ['icon' => 'fa-solid fa-camera-retro', 'title' => 'Niche Options', 'text' => 'Explain verticals like fashion, business, or local pages.'],
            ['icon' => 'fa-solid fa-chart-simple', 'title' => 'Growth Potential', 'text' => 'Use this section for account positioning and buyer expectations.'],
            ['icon' => 'fa-solid fa-circle-check', 'title' => 'Offer Details', 'text' => 'Clarify what comes with each Instagram listing or package.'],
        ],
    ])
@endsection
