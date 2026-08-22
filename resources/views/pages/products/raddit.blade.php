@extends('layouts.app')

@section('title', 'Raddit')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'Raddit',
        'title' => 'A route and page template for your Raddit menu item, ready for custom inventory details.',
        'description' => 'I kept the label as Raddit to match your provided navbar list. If you later want it renamed to Reddit, the route and page can be updated quickly.',
        'highlights' => [
            ['title' => 'Matches your menu list', 'text' => 'The page title and route follow the item exactly as you requested.'],
            ['title' => 'Easy rename later', 'text' => 'You can adjust the label and slug when you are ready without redesigning the page.'],
            ['title' => 'Template ready', 'text' => 'Use the content areas for product details, policies, and support channels.'],
        ],
        'stats' => [
            ['value' => 'Custom', 'label' => 'Label Match', 'text' => 'Preserves the wording from your original navigation list.'],
            ['value' => 'Ready', 'label' => 'Dedicated Route', 'text' => 'Accessible from the More dropdown like the rest of the section.'],
            ['value' => 'Flexible', 'label' => 'Future Edit', 'text' => 'Easy to rename or enrich with platform-specific content later.'],
        ],
        'cards' => [
            ['icon' => 'fa-solid fa-comments', 'title' => 'Community Focus', 'text' => 'Tailor the page toward discussion-community account needs.'],
            ['icon' => 'fa-solid fa-pen-ruler', 'title' => 'Branding Space', 'text' => 'Use this page as a placeholder until final copy is ready.'],
            ['icon' => 'fa-solid fa-screwdriver-wrench', 'title' => 'Easy Updates', 'text' => 'The route and blade file are already separated for independent edits.'],
        ],
    ])
@endsection
