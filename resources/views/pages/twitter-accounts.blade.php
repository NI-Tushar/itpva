@extends('layouts.app')

@section('title', 'Twitter Accounts')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'Twitter Accounts',
        'title' => 'A dedicated Twitter account page with room for listing details and service terms.',
        'description' => 'Use this page to outline Twitter inventory, account quality, support conditions, and package structures for users arriving through the social media dropdown.',
        'highlights' => [
            ['title' => 'Direct access', 'text' => 'Twitter buyers no longer need to browse a generic page to find relevant offers.'],
            ['title' => 'Customizable blocks', 'text' => 'Turn these template sections into pricing tiers or account specs when ready.'],
            ['title' => 'Strong navigation support', 'text' => 'The dropdown structure helps keep a large inventory list manageable.'],
        ],
        'stats' => [
            ['value' => 'Direct', 'label' => 'Landing Route', 'text' => 'Linked from the Social Media dropdown for faster discovery.'],
            ['value' => 'Ready', 'label' => 'Product Space', 'text' => 'Prepared for feature lists, bundles, or proof content.'],
            ['value' => 'Responsive', 'label' => 'User Experience', 'text' => 'Looks clean across desktop and smaller screens.'],
        ],
        'cards' => [
            ['icon' => 'fa-solid fa-comment-dots', 'title' => 'Platform Fit', 'text' => 'Explain the intended use or quality level of the accounts.'],
            ['icon' => 'fa-solid fa-box-open', 'title' => 'Inventory Format', 'text' => 'Clarify quantity, access type, or bundle format.'],
            ['icon' => 'fa-solid fa-life-ring', 'title' => 'Support Path', 'text' => 'Point customers to support before and after purchase.'],
        ],
    ])
@endsection
