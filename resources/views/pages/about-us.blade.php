@extends('layouts.app')

@section('title', 'About Us')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'About Us',
        'title' => 'Tell your story, build trust, and explain how your service works.',
        'description' => 'The About Us page is ready for your company background, service approach, quality standards, customer support process, and trust-building content.',
        'highlights' => [
            ['title' => 'Trust-focused page', 'text' => 'Use this route to add credibility beyond your product listings.'],
            ['title' => 'Modern presentation', 'text' => 'The same visual language keeps the informational pages aligned with sales pages.'],
            ['title' => 'Easy to personalize', 'text' => 'Swap placeholder content for your real story, mission, and customer promise.'],
        ],
        'stats' => [
            ['value' => 'Brand', 'label' => 'Storytelling', 'text' => 'Introduce who you are and how you operate.'],
            ['value' => 'Trust', 'label' => 'Confidence Layer', 'text' => 'Use social proof, process details, and service values here.'],
            ['value' => 'Ready', 'label' => 'Content Base', 'text' => 'Prepared for testimonials, milestones, and team details.'],
        ],
        'cards' => [
            ['icon' => 'fa-solid fa-people-group', 'title' => 'Who You Serve', 'text' => 'Describe your buyers, industries, or common use cases.'],
            ['icon' => 'fa-solid fa-star', 'title' => 'Why Buyers Choose You', 'text' => 'Add your differentiators, support style, and quality approach.'],
            ['icon' => 'fa-solid fa-timeline', 'title' => 'Growth Story', 'text' => 'Use the section for milestones, history, or roadmap details.'],
        ],
    ])
@endsection
