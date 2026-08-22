@extends('layouts.app')

@section('title', 'Product Hunt')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'Product Hunt',
        'title' => 'A clean Product Hunt page for account-related services or niche launch support offers.',
        'description' => 'Use this page to explain Product Hunt-related products, package options, and support pathways while maintaining the same site-wide design system.',
        'highlights' => [
            ['title' => 'Specific destination', 'text' => 'Product Hunt now has a direct route inside the More dropdown group.'],
            ['title' => 'Good for targeted campaigns', 'text' => 'This page can act as a focused entry point for external traffic.'],
            ['title' => 'Editable template', 'text' => 'Swap in product-specific proof, benefits, or contact details later.'],
        ],
        'stats' => [
            ['value' => 'Launch', 'label' => 'Use Case', 'text' => 'Suitable for launch-related services or account offerings.'],
            ['value' => 'Direct', 'label' => 'Route Access', 'text' => 'Linked from the extended navigation without cluttering the main bar.'],
            ['value' => 'Consistent', 'label' => 'UI Pattern', 'text' => 'Shares the same responsive page structure as every other item.'],
        ],
        'cards' => [
            ['icon' => 'fa-solid fa-bullseye', 'title' => 'Offer Positioning', 'text' => 'Explain the Product Hunt-related service or account clearly.'],
            ['icon' => 'fa-solid fa-list-check', 'title' => 'Package Scope', 'text' => 'Use for deliverables, steps, or package comparisons.'],
            ['icon' => 'fa-solid fa-comments-dollar', 'title' => 'Sales CTA', 'text' => 'Add direct inquiry instructions or booking details here.'],
        ],
    ])
@endsection
