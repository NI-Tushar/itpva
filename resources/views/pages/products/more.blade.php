@extends('layouts.app')

@section('title', 'More')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'More Categories',
        'title' => 'A flexible category hub for utility, cloud, messaging, and niche account offers.',
        'description' => 'The More section groups the rest of your inventory into one expandable area, helping the navbar stay organized while still exposing every requested route.',
        'highlights' => [
            ['title' => 'Large menu support', 'text' => 'A dropdown keeps the extended list manageable on desktop and mobile.'],
            ['title' => 'Individual pages ready', 'text' => 'Every item in this section now has its own controller method and blade file.'],
            ['title' => 'Easy future categorization', 'text' => 'If you later split this into smaller groups, the routes are already isolated.'],
        ],
        'stats' => [
            ['value' => '11', 'label' => 'More Pages', 'text' => 'Linked In through Product Hunt all have separate routes.'],
            ['value' => 'Responsive', 'label' => 'Mobile Menu', 'text' => 'Accordion behavior keeps a long list user-friendly on smaller screens.'],
            ['value' => 'Unified', 'label' => 'Design Pattern', 'text' => 'Every page inherits the same visual system.'],
        ],
        'cards' => [
            ['icon' => 'fa-solid fa-briefcase', 'title' => 'Professional Platforms', 'text' => 'Support product pages like Linked In and Product Hunt.'],
            ['icon' => 'fa-solid fa-cloud', 'title' => 'Cloud Accounts', 'text' => 'Present Google Cloud, AWS, Azure, and Digital Ocean from the same family.'],
            ['icon' => 'fa-solid fa-message', 'title' => 'Messaging Utilities', 'text' => 'Hotmail, TextNow, AOL, and related accounts now have dedicated pages.'],
        ],
    ])
@endsection
