@extends('layouts.app')

@section('title', 'Buy Gmail Aged Accounts')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'Aged Gmail',
        'title' => 'Highlight account age, stability, and trust factors for premium Gmail inventory.',
        'description' => 'This page is designed for aged Gmail offers where account history matters. Add age ranges, usage history, verification notes, and premium pricing details here.',
        'highlights' => [
            ['title' => 'Premium positioning', 'text' => 'The structure supports more valuable and trust-sensitive inventory.'],
            ['title' => 'Dedicated SEO page', 'text' => 'A dedicated route is easier to optimize for aged Gmail search terms.'],
            ['title' => 'Ready for proof blocks', 'text' => 'You can add screenshots, guarantees, or replacement policies later.'],
        ],
        'stats' => [
            ['value' => 'Aged', 'label' => 'Inventory Type', 'text' => 'Use this area for age brackets and account history notes.'],
            ['value' => 'Premium', 'label' => 'Offer Class', 'text' => 'Great for higher-value listings and curated packages.'],
            ['value' => 'Trusted', 'label' => 'Buyer Signal', 'text' => 'Support your offer with handling and support details.'],
        ],
        'cards' => [
            ['icon' => 'fa-solid fa-hourglass-half', 'title' => 'Account Age', 'text' => 'Explain how aged inventory differs from fresh accounts.'],
            ['icon' => 'fa-solid fa-medal', 'title' => 'Quality Assurance', 'text' => 'Mention testing, replacements, or support conditions.'],
            ['icon' => 'fa-solid fa-chart-line', 'title' => 'Use Case Fit', 'text' => 'Show buyers who this category is best suited for.'],
        ],
    ])
@endsection
