@extends('layouts.app')

@section('title', 'Gmail')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'Gmail Accounts',
        'title' => 'Promote Gmail inventory with a modern product page that feels trustworthy and direct.',
        'description' => 'This page is ready for Gmail account details, package breakdowns, account quality notes, and support information using the new shared Tailwind layout.',
        'highlights' => [
            ['title' => 'Standalone destination', 'text' => 'Gmail now has its own route for organic traffic or direct campaign linking.'],
            ['title' => 'Conversion-ready structure', 'text' => 'The hero, cards, and stats blocks can be swapped for pricing and trust signals.'],
            ['title' => 'Consistent branding', 'text' => 'The page inherits the same design language as the rest of the catalog.'],
        ],
        'stats' => [
            ['value' => '24/7', 'label' => 'Showcase Support', 'text' => 'Replace this with your support or delivery promise when ready.'],
            ['value' => 'Bulk', 'label' => 'Order Friendly', 'text' => 'Use the page to talk about volume orders and fulfillment options.'],
            ['value' => 'Secure', 'label' => 'Trust Layer', 'text' => 'Add your verification and replacement policy details here.'],
        ],
        'cards' => [
            ['icon' => 'fa-solid fa-envelope-circle-check', 'title' => 'Verified Messaging', 'text' => 'Present inbox access quality and account readiness.'],
            ['icon' => 'fa-solid fa-shield-halved', 'title' => 'Policy Notes', 'text' => 'Clarify handling, warranty, or replacement terms.'],
            ['icon' => 'fa-solid fa-bolt', 'title' => 'Quick Delivery', 'text' => 'Add turnaround time expectations for customers.'],
        ],
    ])
@endsection
