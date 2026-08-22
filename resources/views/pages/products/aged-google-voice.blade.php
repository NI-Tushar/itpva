@extends('layouts.app')

@section('title', 'AGED-Google Voice')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'Aged Google Voice',
        'title' => 'Position aged Google Voice inventory as a more specialized, premium offering.',
        'description' => 'This page is ideal for established Google Voice accounts where age, consistency, and use-case quality should be explained more carefully.',
        'highlights' => [
            ['title' => 'Premium segmentation', 'text' => 'Aged inventory gets its own route instead of being mixed into general listings.'],
            ['title' => 'Better messaging control', 'text' => 'Talk about history, quality, and intended use cases with more nuance.'],
            ['title' => 'Ready for trust content', 'text' => 'You can later insert support terms, FAQs, or verification notes.'],
        ],
        'stats' => [
            ['value' => 'Aged', 'label' => 'Offer Type', 'text' => 'Tailor this to your exact Google Voice inventory profile.'],
            ['value' => 'Focused', 'label' => 'Sales Copy', 'text' => 'A standalone page supports more precise product communication.'],
            ['value' => 'Premium', 'label' => 'Positioning', 'text' => 'Useful when aged inventory sells differently from standard stock.'],
        ],
        'cards' => [
            ['icon' => 'fa-solid fa-history', 'title' => 'Account Longevity', 'text' => 'Explain the age or background of the inventory you provide.'],
            ['icon' => 'fa-solid fa-shield', 'title' => 'Confidence Signals', 'text' => 'Add buyer reassurance through replacement or testing notes.'],
            ['icon' => 'fa-solid fa-briefcase', 'title' => 'Use-Case Fit', 'text' => 'Describe who aged Google Voice inventory is best for.'],
        ],
    ])
@endsection
