@extends('layouts.app')

@section('title', 'Buy Google Voice Accounts')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'Buy Google Voice',
        'title' => 'A direct-response Google Voice sales page designed for faster conversion.',
        'description' => 'Use this page for Google Voice customers who want pricing, package details, support information, and a clear path to place an order without extra navigation steps.',
        'highlights' => [
            ['title' => 'Purchase-first structure', 'text' => 'The route and layout are both aligned with buyers who are already evaluating offers.'],
            ['title' => 'Space for proof', 'text' => 'You can add account screenshots, guarantee notes, or turnaround times later.'],
            ['title' => 'Clear CTA placement', 'text' => 'Primary and secondary actions are already built into the template.'],
        ],
        'stats' => [
            ['value' => 'Fast', 'label' => 'Buyer Journey', 'text' => 'Keep the offer focused and easy to understand.'],
            ['value' => 'Clear', 'label' => 'Product Pitch', 'text' => 'Use the sections to explain what buyers receive.'],
            ['value' => 'Flexible', 'label' => 'Page Slots', 'text' => 'Swap highlights for pricing, testimonials, or order steps.'],
        ],
        'cards' => [
            ['icon' => 'fa-solid fa-phone-flip', 'title' => 'Delivery Details', 'text' => 'Explain format, timing, and access expectations.'],
            ['icon' => 'fa-solid fa-clipboard-check', 'title' => 'Order Requirements', 'text' => 'List any minimum order sizes or support terms.'],
            ['icon' => 'fa-solid fa-user-check', 'title' => 'Post-Sale Support', 'text' => 'Show where buyers should go after payment or delivery.'],
        ],
    ])
@endsection
