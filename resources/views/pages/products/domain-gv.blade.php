@extends('layouts.app')

@section('title', 'Domain GV')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'Domain GV',
        'title' => 'A custom route for Domain GV with room for product explanation and buyer guidance.',
        'description' => 'This page is ready for whatever Domain GV represents in your catalog, whether that is a niche service, bundle, or specialized account category.',
        'highlights' => [
            ['title' => 'Custom label preserved', 'text' => 'The navigation and route keep your provided naming intact.'],
            ['title' => 'Flexible placeholder design', 'text' => 'Useful when you want the route ready before final product copy is written.'],
            ['title' => 'Independent page management', 'text' => 'The blade file can now evolve without affecting unrelated sections.'],
        ],
        'stats' => [
            ['value' => 'Custom', 'label' => 'Category Name', 'text' => 'Aligned with your original header option list.'],
            ['value' => 'Ready', 'label' => 'Standalone Route', 'text' => 'Accessible from the More menu and easy to revise later.'],
            ['value' => 'Flexible', 'label' => 'Content Direction', 'text' => 'Supports product, service, or support-oriented messaging.'],
        ],
        'cards' => [
            ['icon' => 'fa-solid fa-diagram-project', 'title' => 'Product Framing', 'text' => 'Use this area to define the Domain GV offer clearly.'],
            ['icon' => 'fa-solid fa-circle-exclamation', 'title' => 'Important Notes', 'text' => 'Add buyer instructions, policy notes, or onboarding context.'],
            ['icon' => 'fa-solid fa-rocket', 'title' => 'Launch Ready', 'text' => 'The route exists now even if content is still being finalized.'],
        ],
    ])
@endsection
