@extends('layouts.app')

@section('title', 'AOL Account')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'AOL Account',
        'title' => 'A standalone AOL account page for niche inventory and targeted offers.',
        'description' => 'This page gives AOL its own route so you can present inventory details, order information, and support notes without crowding other sections.',
        'highlights' => [
            ['title' => 'Dedicated visibility', 'text' => 'AOL now has a full page instead of being buried in a mixed list.'],
            ['title' => 'Easy customization', 'text' => 'You can add product details or sales copy without touching the navbar.'],
            ['title' => 'Consistent styling', 'text' => 'The page follows the same modern Tailwind layout as the full marketplace.'],
        ],
        'stats' => [
            ['value' => 'Niche', 'label' => 'Inventory Type', 'text' => 'Useful for specialized account listings and offers.'],
            ['value' => 'Direct', 'label' => 'Navigation Link', 'text' => 'Accessible from the More dropdown like the rest of the catalog.'],
            ['value' => 'Ready', 'label' => 'Sales Layout', 'text' => 'Supports package and support information out of the box.'],
        ],
        'cards' => [
            ['icon' => 'fa-solid fa-envelope-circle-check', 'title' => 'Inventory Details', 'text' => 'Describe AOL account stock, quality, or intended use.'],
            ['icon' => 'fa-solid fa-receipt', 'title' => 'Order Terms', 'text' => 'Use this space for package counts or key commercial notes.'],
            ['icon' => 'fa-solid fa-phone-volume', 'title' => 'Support Contact', 'text' => 'Guide visitors toward your preferred help channel.'],
        ],
    ])
@endsection
