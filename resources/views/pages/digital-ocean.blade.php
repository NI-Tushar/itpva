@extends('layouts.app')

@section('title', 'Digital Ocean')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'Digital Ocean',
        'title' => 'A cloud-focused product page for Digital Ocean account and service listings.',
        'description' => 'Use this route for cloud account offers, deployment-related packages, or niche Digital Ocean service products with room for support and package detail.',
        'highlights' => [
            ['title' => 'Cloud category coverage', 'text' => 'Digital Ocean is now clearly represented inside the More dropdown.'],
            ['title' => 'Route clarity', 'text' => 'A dedicated slug makes linking and content management much easier.'],
            ['title' => 'Template flexibility', 'text' => 'You can pivot this into a service page or account page as needed.'],
        ],
        'stats' => [
            ['value' => 'Cloud', 'label' => 'Category', 'text' => 'Part of the broader infrastructure account group.'],
            ['value' => 'Direct', 'label' => 'Landing Page', 'text' => 'Useful for navigation and campaign-specific links.'],
            ['value' => 'Editable', 'label' => 'Content Base', 'text' => 'Prepared for packages, specs, and support details.'],
        ],
        'cards' => [
            ['icon' => 'fa-solid fa-server', 'title' => 'Cloud Offers', 'text' => 'Describe account types, quotas, or use cases here.'],
            ['icon' => 'fa-solid fa-database', 'title' => 'Technical Notes', 'text' => 'Use for setup limits, regions, or plan information.'],
            ['icon' => 'fa-solid fa-user-gear', 'title' => 'Managed Support', 'text' => 'Clarify what help you provide after delivery.'],
        ],
    ])
@endsection
