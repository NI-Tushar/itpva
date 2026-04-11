@extends('layouts.app')

@section('title', 'Contact')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'Contact',
        'title' => 'Give visitors a clear way to reach you for orders, support, and custom requests.',
        'description' => 'Use this page for WhatsApp, Telegram, email, live chat, or any other contact channel so buyers can move from browsing to direct conversation.',
        'highlights' => [
            ['title' => 'Conversion support', 'text' => 'A visible contact page helps ready-to-buy visitors reach you faster.'],
            ['title' => 'Flexible content area', 'text' => 'Swap this template with a contact form, live chat embed, or support matrix later.'],
            ['title' => 'Consistent experience', 'text' => 'The page design stays aligned with the full navigation system and catalog pages.'],
        ],
        'stats' => [
            ['value' => '24/7', 'label' => 'Response Goal', 'text' => 'Replace with your actual support availability if needed.'],
            ['value' => 'Multi', 'label' => 'Channel Ready', 'text' => 'Prepared for multiple contact options and response paths.'],
            ['value' => 'Direct', 'label' => 'Buyer Flow', 'text' => 'Designed to turn site visitors into conversations.'],
        ],
        'cards' => [
            ['icon' => 'fa-solid fa-paper-plane', 'title' => 'Fast Inquiry', 'text' => 'Direct users to the fastest way to place or discuss orders.'],
            ['icon' => 'fa-solid fa-headset', 'title' => 'Support Requests', 'text' => 'Provide a route for current customers who need help.'],
            ['icon' => 'fa-solid fa-user-plus', 'title' => 'Custom Orders', 'text' => 'Use this area to invite special requests or bulk inquiries.'],
        ],
    ])
@endsection
