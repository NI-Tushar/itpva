@extends('layouts.app')

@section('title', 'Linked In')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'Linked In',
        'title' => 'A polished page for professional network account offerings and related services.',
        'description' => 'Use this route to present Linked In products, explain account quality, and outline support or delivery details in a cleaner format.',
        'highlights' => [
            ['title' => 'Professional positioning', 'text' => 'This page can be tailored to business-oriented buyers and use cases.'],
            ['title' => 'Strong route structure', 'text' => 'Linked In now lives under the More dropdown with a dedicated method and view.'],
            ['title' => 'Ready for customization', 'text' => 'Replace the default content with platform-specific details whenever needed.'],
        ],
        'stats' => [
            ['value' => 'Business', 'label' => 'Audience Fit', 'text' => 'Great for professional platform product messaging.'],
            ['value' => 'Direct', 'label' => 'Navigation Path', 'text' => 'Accessible from the expanded More menu.'],
            ['value' => 'Reusable', 'label' => 'Template Base', 'text' => 'Can be adapted quickly for richer sales content.'],
        ],
        'cards' => [
            ['icon' => 'fa-solid fa-id-badge', 'title' => 'Profile Types', 'text' => 'Describe the style or condition of Linked In inventory.'],
            ['icon' => 'fa-solid fa-building', 'title' => 'Use Cases', 'text' => 'Support recruiting, outreach, or campaign-oriented buyers.'],
            ['icon' => 'fa-solid fa-handshake', 'title' => 'Support Terms', 'text' => 'Add confidence-building details and response channels.'],
        ],
    ])
@endsection
