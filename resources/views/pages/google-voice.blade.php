@extends('layouts.app')

@section('title', 'Google Voice')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'Google Voice',
        'title' => 'Google Voice offerings now have a dedicated category hub with focused child pages.',
        'description' => 'This section gives you a clean entry point for standard and aged Google Voice account offers, with room for fulfillment details and support messaging.',
        'highlights' => [
            ['title' => 'Category overview', 'text' => 'Google Voice has its own top-level page for product messaging and discovery.'],
            ['title' => 'Subpage navigation', 'text' => 'Buy and aged account pages are grouped underneath the main section.'],
            ['title' => 'Consistent UX', 'text' => 'The same layout system keeps navigation and page presentation familiar.'],
        ],
        'stats' => [
            ['value' => '2', 'label' => 'Subpages', 'text' => 'Visitors can go deeper into direct-buy or aged inventory pages.'],
            ['value' => 'Clean', 'label' => 'Hierarchy', 'text' => 'URLs and route names are grouped for easier maintenance.'],
            ['value' => 'Ready', 'label' => 'Content Slots', 'text' => 'Add FAQs, delivery notes, or package cards here next.'],
        ],
        'cards' => [
            ['icon' => 'fa-solid fa-phone', 'title' => 'Core Voice Accounts', 'text' => 'Introduce your Google Voice catalog and baseline details.'],
            ['icon' => 'fa-solid fa-cart-plus', 'title' => 'Purchase Page', 'text' => 'Guide buyers straight into ready-to-order account offers.'],
            ['icon' => 'fa-solid fa-business-time', 'title' => 'Aged Inventory', 'text' => 'Separate more established inventory into its own sales page.'],
        ],
    ])
@endsection
