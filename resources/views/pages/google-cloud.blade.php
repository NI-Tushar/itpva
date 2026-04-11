@extends('layouts.app')

@section('title', 'Google Cloud')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'Google Cloud',
        'title' => 'A dedicated Google Cloud page for infrastructure-related account offers and service detail.',
        'description' => 'This page gives Google Cloud its own clean destination inside the catalog, ready for packages, onboarding notes, and customer support information.',
        'highlights' => [
            ['title' => 'Cloud-specific messaging', 'text' => 'Separate Google Cloud from the rest of the mixed inventory for clearer communication.'],
            ['title' => 'Expandable content space', 'text' => 'Ideal for pricing blocks, plan notes, or setup-related details.'],
            ['title' => 'Consistent navigation', 'text' => 'Fits naturally inside the responsive More dropdown experience.'],
        ],
        'stats' => [
            ['value' => 'Infra', 'label' => 'Offer Class', 'text' => 'Great for infrastructure products or related account access.'],
            ['value' => 'Ready', 'label' => 'Dedicated View', 'text' => 'Each cloud provider can now be customized separately.'],
            ['value' => 'Scalable', 'label' => 'Future Use', 'text' => 'You can turn this into a richer sales page over time.'],
        ],
        'cards' => [
            ['icon' => 'fa-solid fa-cloud', 'title' => 'Platform Details', 'text' => 'Explain account scope, credit, or setup characteristics.'],
            ['icon' => 'fa-solid fa-layer-group', 'title' => 'Package Design', 'text' => 'Use the cards area for offer tiers or included services.'],
            ['icon' => 'fa-solid fa-wrench', 'title' => 'Support Notes', 'text' => 'Clarify onboarding and post-sale assistance details.'],
        ],
    ])
@endsection
