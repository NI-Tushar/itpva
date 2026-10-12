@extends('layouts.app')

@section('title', 'Buy Google Cloud (GCP) Accounts - $300 Free Trial & Compute Engine Active')

@section('app-content')
    @include('pages.partials.catalog-page', [
        'eyebrow' => 'Google Cloud (GCP)',
        'title' => 'Buy Verified Google Cloud Accounts ($300 Free Trial)',
        'description' => 'Pre-activated Google Cloud Platform (GCP) consoles featuring active $300 credit trials for Compute Engine (VMs), Kubernetes clusters, BigQuery, and AI APIs. Fully verified with authentic payment methods, clean identity verification, and root workspace ownership.',
        'highlights' => [
            '$300 Free Trial Credits Active: 90-day official Google Cloud credits loaded and ready to spend.',
            'Compute Engine (VMs) Unlocked: Launch Linux/Windows virtual machines without payment threshold suspension.',
            'Payment & Identity Verification Cleared: Genuine virtual/physical card verification passed without billing holds.',
            'Full Root Console Credentials: Complete handoff with primary Gmail credentials, 2FA backup codes, and project access.'
        ],
        'stats' => [
            ['label' => 'Credit Balance', 'value' => '$300 Free Trial'],
            ['label' => 'VM Engine Status', 'value' => 'Compute Engine ON'],
            ['label' => 'Billing Status', 'value' => 'Card Verified Active'],
            ['label' => 'Global Regions', 'value' => 'US, EU, ASIA Regions'],
        ],
        'cards' => [
            [
                'title' => 'Standard Google Cloud $300 Trial Account',
                'description' => 'Card-verified GCP console with $300 active credits and standard 8-vCPU quota. Ideal for VM hosting, web apps, and machine learning tests.',
                'price' => '$14.00',
                'original_price' => '$22.00',
                'badge' => 'Standard Trial',
                'rating' => '4.8',
                'reviews' => '130',
                'features' => [
                    '$300 Official Google Cloud Credits',
                    'Compute Engine (VMs) Ready to Launch',
                    'Cloud Storage & Container Registry Ready',
                    'Original Gmail Account & Password Included',
                    '48-Hour Replacement Guarantee'
                ]
            ],
            [
                'title' => 'GCP $300 Account (24 to 32 vCPU Quota Open)',
                'description' => 'Upgraded Google Cloud account with increased CPU quota request approved. Deploy larger multi-core compute instances and high-memory workloads.',
                'price' => '$28.00',
                'original_price' => '$40.00',
                'badge' => 'Most Popular',
                'rating' => '5.0',
                'reviews' => '270',
                'features' => [
                    '$300 Active Cloud Credits Loaded',
                    '24 - 32 vCPU Extended Compute Quota',
                    'Deploy Multiple Heavy Windows/Linux Instances',
                    'Clean Static Residential Registration IP',
                    'Includes Full Recovery Email Access'
                ]
            ],
            [
                'title' => 'GCP GPU-Enabled Cloud Account',
                'description' => 'Specialized Google Cloud console with approved quota for NVIDIA T4/V100/A100 GPUs. Designed for AI model training, LLM inference, and video rendering.',
                'price' => '$55.00',
                'original_price' => '$80.00',
                'badge' => 'AI / GPU Ready',
                'rating' => '5.0',
                'reviews' => '145',
                'features' => [
                    'NVIDIA GPU Quota Allocation Approved',
                    'TensorFlow & PyTorch AI Workflow Ready',
                    'High Sending / Inbound Bandwidth Pipe',
                    'Full Root Credentials & Cookies Provided',
                    'Priority 24/7 Dedicated Cloud Engineer'
                ]
            ],
            [
                'title' => 'Bulk Cloud Infrastructure Pack (5 Accounts)',
                'description' => '5 verified Google Cloud consoles delivering a combined $1,500 in cloud credits for multi-tenant SaaS staging, scrapers, and bot clusters.',
                'price' => '$62.00',
                'original_price' => '$95.00',
                'badge' => 'Enterprise Fleet',
                'rating' => '4.9',
                'reviews' => '74',
                'features' => [
                    '5 Verified GCP Accounts ($300 credits each)',
                    'Total Combined Cloud Credits: $1,500',
                    'Spread Across Diverse Clean Billing Entities',
                    'Instant CSV Data Export Download',
                    'Direct Telegram/WhatsApp Cloud Specialist'
                ]
            ]
        ]
    ])
@endsection
