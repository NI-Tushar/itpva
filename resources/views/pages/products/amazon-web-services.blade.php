@extends('layouts.app')

@section('title', 'Amazon Web Services')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'Amazon Web Services',
        'title' => 'A responsive AWS product page ready for cloud-related offers and fulfillment details.',
        'description' => 'Use this page for Amazon Web Services account offerings, cloud service packages, or related support information in the same visual system as the rest of the site.',
        'highlights' => [
            ['title' => 'Provider-specific route', 'text' => 'AWS now has its own route and no longer shares a generic catch-all page.'],
            ['title' => 'Prepared for detail-heavy content', 'text' => 'The structure works well for plans, specs, and technical caveats.'],
            ['title' => 'Clean user journey', 'text' => 'Visitors can discover AWS directly from the More dropdown.'],
        ],
        'stats' => [
            ['value' => 'AWS', 'label' => 'Platform Focus', 'text' => 'Use this for Amazon cloud-related product messaging.'],
            ['value' => 'Responsive', 'label' => 'Experience', 'text' => 'The page is styled to stay readable across device sizes.'],
            ['value' => 'Flexible', 'label' => 'Content Model', 'text' => 'Can support account offers, service packages, or both.'],
        ],
        'cards' => [
            ['icon' => 'fa-solid fa-network-wired', 'title' => 'Technical Offers', 'text' => 'Present account access, credits, or service bundles.'],
            ['icon' => 'fa-solid fa-sheet-plastic', 'title' => 'Plan Breakdown', 'text' => 'Add tiered features or package comparisons here.'],
            ['icon' => 'fa-solid fa-circle-nodes', 'title' => 'Cloud Support', 'text' => 'Explain deployment assistance or support expectations.'],
        ],
    ])
@endsection
