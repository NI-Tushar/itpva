@extends('layouts.app')

@section('title', 'Hotmail')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'Hotmail',
        'title' => 'A dedicated Hotmail landing page ready for product, package, and support content.',
        'description' => 'Use this space for Hotmail account offers, quality information, package sizes, and post-sale instructions in the same responsive design system.',
        'highlights' => [
            ['title' => 'Dedicated visibility', 'text' => 'Hotmail is no longer hidden in a generic page and can be marketed directly.'],
            ['title' => 'Tailwind-ready layout', 'text' => 'The page structure makes it easy to add trust and pricing sections later.'],
            ['title' => 'Route consistency', 'text' => 'The URL pattern stays clean within the More category.'],
        ],
        'stats' => [
            ['value' => 'Email', 'label' => 'Category Fit', 'text' => 'Placed inside the More section based on your requested menu.'],
            ['value' => 'Simple', 'label' => 'Maintenance', 'text' => 'Content can change independently without touching the navbar.'],
            ['value' => 'Responsive', 'label' => 'Layout', 'text' => 'Looks clean across mobile, tablet, and desktop.'],
        ],
        'cards' => [
            ['icon' => 'fa-solid fa-envelope-open-text', 'title' => 'Offer Details', 'text' => 'Describe Hotmail account types and inventory quality.'],
            ['icon' => 'fa-solid fa-table-list', 'title' => 'Package Options', 'text' => 'Add bulk sizes or plan tiers for buyers.'],
            ['icon' => 'fa-solid fa-circle-question', 'title' => 'FAQ Ready', 'text' => 'Use the section space for onboarding or support answers.'],
        ],
    ])
@endsection
