@extends('layouts.app')

@section('title', 'Email')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'Email Services',
        'title' => 'Email account solutions with organized product routes and scalable landing pages.',
        'description' => 'Use this section to showcase your email-related offers, explain delivery quality, and guide customers into Gmail and aged account categories from one focused hub.',
        'highlights' => [
            ['title' => 'Focused category landing', 'text' => 'The Email page acts as the parent destination for account-related offerings.'],
            ['title' => 'Better product discovery', 'text' => 'Dropdown links route visitors directly to Gmail and purchase-specific pages.'],
            ['title' => 'Future-friendly layout', 'text' => 'You can add pricing cards, FAQ blocks, or account features without reworking navigation.'],
        ],
        'stats' => [
            ['value' => '3', 'label' => 'Email Subpages', 'text' => 'Gmail and buying pages are connected under this section.'],
            ['value' => 'Fast', 'label' => 'Navigation Flow', 'text' => 'Visitors can move from overview to purchase intent pages quickly.'],
            ['value' => 'Clear', 'label' => 'Structure', 'text' => 'Top-level and child routes are separated for cleaner content planning.'],
        ],
        'cards' => [
            ['icon' => 'fa-solid fa-at', 'title' => 'Gmail', 'text' => 'Introduce core Gmail account inventory with service expectations and delivery notes.'],
            ['icon' => 'fa-solid fa-cart-shopping', 'title' => 'Buy Gmail Accounts', 'text' => 'Turn purchase-ready traffic into leads with direct offer messaging and CTAs.'],
            ['icon' => 'fa-solid fa-clock-rotate-left', 'title' => 'Buy Gmail Aged Accounts', 'text' => 'Highlight longevity, trust factors, and account history benefits.'],
        ],
    ])
@endsection
