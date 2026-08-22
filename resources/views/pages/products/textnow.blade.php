@extends('layouts.app')

@section('title', 'TextNow')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'TextNow',
        'title' => 'A TextNow product page built for messaging and utility account offers.',
        'description' => 'Use this page to explain TextNow account availability, package options, delivery timing, and support workflows using the new shared layout.',
        'highlights' => [
            ['title' => 'Niche product support', 'text' => 'TextNow now has a proper destination inside the extended More section.'],
            ['title' => 'Consistent interface', 'text' => 'Users get the same structure and navigation behavior across categories.'],
            ['title' => 'Easy to expand', 'text' => 'You can add package cards, trust badges, and FAQs whenever needed.'],
        ],
        'stats' => [
            ['value' => 'Utility', 'label' => 'Account Type', 'text' => 'Fits nicely in the expanded catalog structure.'],
            ['value' => 'Focused', 'label' => 'Page Intent', 'text' => 'Keep TextNow-specific messaging in one location.'],
            ['value' => 'Modern', 'label' => 'Presentation', 'text' => 'Uses the same polished Tailwind treatment as other pages.'],
        ],
        'cards' => [
            ['icon' => 'fa-solid fa-sms', 'title' => 'Messaging Use', 'text' => 'Explain what buyers can expect from the account offering.'],
            ['icon' => 'fa-solid fa-truck-fast', 'title' => 'Delivery Flow', 'text' => 'Add fulfillment timing and access instructions.'],
            ['icon' => 'fa-solid fa-headphones-simple', 'title' => 'Support Access', 'text' => 'Point customers toward your preferred support channel.'],
        ],
    ])
@endsection
