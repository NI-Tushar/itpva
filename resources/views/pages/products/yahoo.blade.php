@extends('layouts.app')

@section('title', 'Yahoo')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'Yahoo Accounts',
        'title' => 'A dedicated Yahoo landing page with the same premium Tailwind presentation.',
        'description' => 'Use this page to publish Yahoo account offers, inventory details, and support information while keeping design consistency with the rest of the site.',
        'highlights' => [
            ['title' => 'Standalone route', 'text' => 'Yahoo is now directly accessible from the navbar without being buried in another category.'],
            ['title' => 'Consistent sales layout', 'text' => 'The same visual structure helps users trust the broader catalog.'],
            ['title' => 'Easy content expansion', 'text' => 'Add package options, policy notes, and order instructions whenever you are ready.'],
        ],
        'stats' => [
            ['value' => 'Single', 'label' => 'Focused Page', 'text' => 'A clean route for Yahoo-specific product content.'],
            ['value' => 'Aligned', 'label' => 'Branding', 'text' => 'Matches the visual language of the full marketplace.'],
            ['value' => 'Ready', 'label' => 'Marketing Use', 'text' => 'Suitable for internal navigation or campaign landing links.'],
        ],
        'cards' => [
            ['icon' => 'fa-solid fa-inbox', 'title' => 'Account Listings', 'text' => 'Present available Yahoo account types and delivery information.'],
            ['icon' => 'fa-solid fa-circle-info', 'title' => 'Buyer Guidance', 'text' => 'Clarify what buyers should expect after inquiry or payment.'],
            ['icon' => 'fa-solid fa-message', 'title' => 'Support Channel', 'text' => 'Use this space for contact and post-sale communication details.'],
        ],
    ])
@endsection
