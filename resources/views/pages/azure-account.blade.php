@extends('layouts.app')

@section('title', 'Azure Account')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'Azure Account',
        'title' => 'A dedicated Microsoft Azure landing page for account-based cloud offers.',
        'description' => 'Use this route to describe Azure account products, package structures, delivery timelines, and any onboarding support you provide.',
        'highlights' => [
            ['title' => 'Cloud section continuity', 'text' => 'Azure joins Google Cloud, AWS, and Digital Ocean as its own destination.'],
            ['title' => 'Ready for technical content', 'text' => 'The layout can hold specifications, package terms, or support notes.'],
            ['title' => 'Better discoverability', 'text' => 'The route structure makes the extended catalog easier to browse.'],
        ],
        'stats' => [
            ['value' => 'Azure', 'label' => 'Platform', 'text' => 'Dedicated to Microsoft Azure-related offers.'],
            ['value' => 'Clean', 'label' => 'Route Map', 'text' => 'Nested neatly under the More menu family.'],
            ['value' => 'Adaptable', 'label' => 'Content Space', 'text' => 'Simple to expand into more detailed commercial content.'],
        ],
        'cards' => [
            ['icon' => 'fa-solid fa-window-maximize', 'title' => 'Platform Notes', 'text' => 'Explain what is included in the Azure-related offer.'],
            ['icon' => 'fa-solid fa-cubes', 'title' => 'Tier Options', 'text' => 'Show multiple package levels or service variations.'],
            ['icon' => 'fa-solid fa-user-clock', 'title' => 'After-Sale Help', 'text' => 'Clarify the support path after delivery.'],
        ],
    ])
@endsection
