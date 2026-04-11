@extends('layouts.app')

@section('title', 'Buy Gmail Accounts')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'Buy Gmail Accounts',
        'title' => 'A purchase-focused landing page for Gmail buyers who already know what they need.',
        'description' => 'Use this route for high-intent visitors. The layout is ready for package tables, order minimums, account quality descriptions, and direct contact instructions.',
        'highlights' => [
            ['title' => 'High-intent route', 'text' => 'The slug is tailored for direct sales navigation and product-focused campaigns.'],
            ['title' => 'Action-oriented design', 'text' => 'Buttons and strong contrast naturally guide users toward inquiry or checkout actions.'],
            ['title' => 'Clean content blocks', 'text' => 'You can swap these sections with packages, reviews, or policy summaries.'],
        ],
        'stats' => [
            ['value' => 'Direct', 'label' => 'Sales Focus', 'text' => 'Built to reduce friction for ready-to-buy traffic.'],
            ['value' => 'Simple', 'label' => 'Lead Flow', 'text' => 'One page can now hold all your purchase-critical information.'],
            ['value' => 'Scalable', 'label' => 'Offer Types', 'text' => 'Add multiple plan tiers without touching the layout file.'],
        ],
        'cards' => [
            ['icon' => 'fa-solid fa-bag-shopping', 'title' => 'Package Tiers', 'text' => 'Add starter, business, or bulk Gmail bundles.'],
            ['icon' => 'fa-solid fa-file-invoice-dollar', 'title' => 'Pricing Clarity', 'text' => 'Show buyers exactly what is included at each level.'],
            ['icon' => 'fa-solid fa-headset', 'title' => 'Sales Support', 'text' => 'Use this area to point buyers to WhatsApp, Telegram, or email support.'],
        ],
    ])
@endsection
