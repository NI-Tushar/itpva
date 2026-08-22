@extends('layouts.app')

@section('title', 'Home')

@section('app-content')
    @php
        $filters = [
            ['key' => 'all', 'label' => 'All Products'],
            ['key' => 'email', 'label' => 'Email'],
            ['key' => 'voice', 'label' => 'Google Voice'],
            ['key' => 'social', 'label' => 'Social Media'],
            ['key' => 'cloud', 'label' => 'Cloud'],
            ['key' => 'more', 'label' => 'More'],
        ];

        $products = [
            ['title' => 'Gmail', 'category' => 'email', 'route' => route('email.gmail'), 'image' => asset('images/products/gmail.png'), 'description' => 'Clean Gmail product page for direct offers and account details.'],
            ['title' => 'Buy Gmail Accounts', 'category' => 'email', 'route' => route('email.buy-gmail-accounts'), 'image' => asset('images/products/gmail.png'), 'description' => 'High-intent landing page for Gmail account buyers.'],
            ['title' => 'Buy Gmail Aged Accounts', 'category' => 'email', 'route' => route('email.buy-gmail-aged-accounts'), 'image' => asset('images/products/edumail.png'), 'description' => 'Dedicated page for aged Gmail inventory and premium buyers.'],
            ['title' => 'Buy Google Voice Accounts', 'category' => 'voice', 'route' => route('google-voice.buy-google-voice-accounts'), 'image' => asset('images/products/voice.png'), 'description' => 'Focused Google Voice buying page with direct CTA flow.'],
            ['title' => 'AGED-Google Voice', 'category' => 'voice', 'route' => route('google-voice.aged-google-voice'), 'image' => asset('images/products/voice.png'), 'description' => 'Premium Google Voice page for aged inventory offers.'],
            ['title' => 'Yahoo', 'category' => 'email', 'route' => route('yahoo'), 'image' => asset('images/products/yeahoo.png'), 'description' => 'Standalone Yahoo page for inventory, support, and offer details.'],
            ['title' => 'Facebook Accounts', 'category' => 'social', 'route' => route('social-media.facebook-accounts'), 'image' => asset('images/products/facebook.png'), 'description' => 'Platform-specific Facebook account product page.'],
            ['title' => 'Instagram Accounts', 'category' => 'social', 'route' => route('social-media.instagram-accounts'), 'image' => asset('images/products/instagram.png'), 'description' => 'Instagram inventory cards, niches, and package-ready page.'],
            ['title' => 'Twitter Accounts', 'category' => 'social', 'route' => route('social-media.twitter-accounts'), 'image' => asset('images/products/twitter.png'), 'description' => 'Twitter account offers with space for specs and support.'],
            ['title' => 'Youtube Accounts', 'category' => 'social', 'route' => route('social-media.youtube-accounts'), 'image' => asset('images/products/youtube.png'), 'description' => 'Youtube-specific route for account and channel offers.'],
            ['title' => 'Linked In', 'category' => 'more', 'route' => route('more.linked-in'), 'image' => asset('images/products/linkedin.png'), 'description' => 'Professional network account page with business-focused messaging.'],
            ['title' => 'Hotmail', 'category' => 'more', 'route' => route('more.hotmail'), 'image' => asset('images/products/hotmail.png'), 'description' => 'Dedicated Hotmail listing page in the extended catalog.'],
            ['title' => 'Raddit', 'category' => 'more', 'route' => route('more.raddit'), 'image' => asset('images/products/raddit.png'), 'description' => 'Custom page matching your requested Raddit menu item.'],
            ['title' => 'TextNow', 'category' => 'more', 'route' => route('more.textnow'), 'image' => asset('images/products/textnow.jpg'), 'description' => 'Utility-focused TextNow page with support-ready layout.'],
            ['title' => 'Digital Ocean', 'category' => 'cloud', 'route' => route('more.digital-ocean'), 'image' => asset('images/products/digital.png'), 'description' => 'Cloud account offer page for Digital Ocean services.'],
            ['title' => 'Google Cloud', 'category' => 'cloud', 'route' => route('more.google-cloud'), 'image' => asset('images/products/digital.png'), 'description' => 'Infrastructure-focused Google Cloud product page.'],
            ['title' => 'Amazon Web Services', 'category' => 'cloud', 'route' => route('more.amazon-web-services'), 'image' => asset('images/products/digital.png'), 'description' => 'AWS page ready for plans, packages, and support detail.'],
            ['title' => 'Azure Account', 'category' => 'cloud', 'route' => route('more.azure-account'), 'image' => asset('images/products/digital.png'), 'description' => 'Azure account landing page inside the cloud category.'],
            ['title' => 'AOL Account', 'category' => 'more', 'route' => route('more.aol-account'), 'image' => asset('images/products/aol.png'), 'description' => 'AOL account page for niche inventory and support details.'],
            ['title' => 'Domain GV', 'category' => 'more', 'route' => route('more.domain-gv'), 'image' => asset('images/products/digital.png'), 'description' => 'Custom route and page for Domain GV offers.'],
            ['title' => 'Product Hunt', 'category' => 'more', 'route' => route('more.product-hunt'), 'image' => asset('images/products/digital.png'), 'description' => 'Launch-related Product Hunt service or account page.'],
        ];

        $cards = [
            ['icon' => 'fa-solid fa-envelope', 'title' => 'Email Catalog', 'text' => 'Promote Gmail, aged Gmail, and related account delivery options.'],
            ['icon' => 'fa-solid fa-phone-volume', 'title' => 'Google Voice Listings', 'text' => 'Present standard and aged Google Voice inventory with dedicated pages.'],
            ['icon' => 'fa-solid fa-hashtag', 'title' => 'Social Inventory', 'text' => 'Feature Facebook, Instagram, Twitter, and Youtube offerings clearly.'],
            ['icon' => 'fa-solid fa-layer-group', 'title' => 'Expanded More Menu', 'text' => 'Support cloud, messaging, and utility account categories from one dropdown.'],
            ['icon' => 'fa-solid fa-users', 'title' => 'Trust Building', 'text' => 'Use About Us and Contact pages to add credibility, FAQs, and support links.'],
            ['icon' => 'fa-solid fa-wand-magic-sparkles', 'title' => 'Content Ready', 'text' => 'Each page can now be customized with pricing tables, testimonials, or product data.'],
        ];
    @endphp

    @include('pages.partials.catalog-page', [
        'eyebrow' => 'Marketplace Home',
        'title' => 'Responsive account marketplace pages built around your new navigation.',
        'description' => 'Browse service categories, explore account types, and move between product sections with a clean Tailwind-powered navbar designed for both desktop and mobile visitors.',
        'highlights' => [
            ['title' => 'Responsive navigation', 'text' => 'Desktop dropdowns and mobile accordion menus keep the long category list manageable.'],
            ['title' => 'User actions included', 'text' => 'Authenticated users get dashboard, profile, and logout options while guests can log in or register.'],
            ['title' => 'Easy to scale', 'text' => 'Each menu item now has its own route and page template so content can grow section by section.'],
        ],
        'stats' => [
            ['value' => '29', 'label' => 'Pages Ready', 'text' => 'A separate view exists for each requested navigation destination.'],
            ['value' => '100%', 'label' => 'Tailwind UI', 'text' => 'The layout and page sections use utility classes for quick future edits.'],
            ['value' => '1', 'label' => 'Controller', 'text' => 'All requested front-facing pages are served through HomeController methods.'],
        ],
    ])
    <div class="pointer-events-none absolute inset-x-0 top-20 -z-10 h-[32rem] overflow-hidden">
        <div class="absolute left-1/4 top-0 h-96 w-96 rounded-full bg-sky-200/50 blur-3xl"></div>
        <div class="absolute right-0 top-24 h-80 w-80 rounded-full bg-emerald-100/70 blur-3xl"></div>
    </div>

    <!--  -->
    <section class="relative left-1/2 w-screen -translate-x-1/2 bg-[aliceblue] py-16">
        <div class="mx-auto w-full max-w-7xl px-5 ">
            <div class="rounded-[2rem] bg-white/90 p-6 shadow-[0_20px_60px_-30px_rgba(2,6,23,0.35)] backdrop-blur supports-[backdrop-filter]:bg-white/80 sm:p-8">
                <div class="flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between">
                    <div>
                        <p class="text-sm font-semibold uppercase tracking-[0.3em] text-sky-700">Available Services</p>
                        <h2 class="mt-2 text-2xl font-bold text-slate-900">Built for fast delivery and clean onboarding</h2>
                    </div>
                    <p class="max-w-2xl text-sm leading-7 text-slate-600">
                        Every page is ready for your content, pricing, proof, and CTA sections. You can now expand each category independently without changing the header structure.
                    </p>
                </div>
                <div class="mt-6 grid gap-4 md:grid-cols-2 xl:grid-cols-3">
                    @foreach ($cards as $card)
                        <div class="rounded-[1.5rem] border border-slate-200 bg-white p-5 shadow-sm">
                            <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-sky-500/10 text-sky-700 ring-1 ring-sky-400/20">
                                <i class="{{ $card['icon'] }}"></i>
                            </div>
                            <h3 class="mt-4 text-lg font-semibold text-slate-900">{{ $card['title'] }}</h3>
                            <p class="mt-2 text-sm leading-6 text-slate-600">{{ $card['text'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!--  -->
    <section id="products" class="relative left-1/2 w-screen -translate-x-1/2 bg-[aliceblue] py-16">
        <div
            x-data="{ activeFilter: 'all', products: @js($products) }"
            class="mx-auto w-full max-w-7xl px-5 text-slate-900 ">
            <div class="px-5 lg:px-0 py-8 ">
                <div class="flex flex-col gap-5 lg:flex-row lg:items-end lg:justify-between">
                    <div class="max-w-3xl">
                        <span class="inline-flex rounded-full bg-sky-100 px-4 py-2 text-xs font-semibold uppercase tracking-[0.3em] text-sky-700">
                            Product Section
                        </span>
                        <h2 class="mt-4 text-3xl font-black tracking-tight text-slate-900 sm:text-4xl">
                            Explore all products in a smooth, filterable card view.
                        </h2>
                        <p class="mt-4 text-base leading-8 text-slate-600">
                            All products show by default. Click any filter to smoothly refine the grid, then select a card to jump straight to that product page.
                        </p>
                    </div>

                    <div class="flex flex-wrap gap-3">
                        @foreach ($filters as $filter)
                            <button
                                type="button"
                                @click="activeFilter = '{{ $filter['key'] }}'"
                                :class="activeFilter === '{{ $filter['key'] }}'
                                    ? 'bg-slate-900 text-white shadow-lg shadow-slate-900/15'
                                    : 'bg-white text-slate-600 hover:bg-slate-100'"
                                class="rounded-full border border-slate-200 px-5 py-3 text-sm font-semibold transition-all duration-300"
                            >
                                {{ $filter['label'] }}
                            </button>
                        @endforeach
                    </div>
                </div>

                <div class="mt-8 grid gap-6 sm:grid-cols-2 xl:grid-cols-3">
                    <template x-for="product in products" :key="product.route">
                        <a
                            x-show="activeFilter === 'all' || activeFilter === product.category"
                            x-transition:enter="transition ease-out duration-400"
                            x-transition:enter-start="opacity-0 translate-y-4 scale-95"
                            x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                            x-transition:leave="transition ease-in duration-250"
                            x-transition:leave-start="opacity-100 translate-y-0 scale-100"
                            x-transition:leave-end="opacity-0 -translate-y-2 scale-95"
                            :href="product.route"
                            class="group block rounded-[15px] border border-slate-200 bg-white p-6 shadow-sm transition-all duration-300 hover:-translate-y-2 hover:border-sky-300 hover:shadow-2xl hover:shadow-sky-100"
                            style="display: none;"
                        >
                            <div class="flex items-start justify-between rounded gap-4">
                                <div class="flex h-16 w-auto items-center justify-center bg-transparent">
                                    <img :src="product.image" :alt="product.title" class="h-full w-full rounded object-contain transition duration-300 group-hover:scale-105">
                                </div>
                                <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold uppercase tracking-[0.22em] text-slate-500" x-text="product.category"></span>
                            </div>

                            <div class="mt-6">
                                <h3 class="text-xl font-bold text-slate-900 transition duration-300 group-hover:text-sky-700" x-text="product.title"></h3>
                                <p class="mt-3 text-sm leading-7 text-slate-600" x-text="product.description"></p>
                            </div>

                            <div class="mt-6 flex items-center justify-between border-t border-slate-100 pt-4">
                                <span class="text-sm font-semibold text-sky-700">View Product</span>
                                <span class="flex h-10 w-10 items-center justify-center rounded-full bg-slate-100 text-slate-700 transition duration-300 group-hover:bg-sky-600 group-hover:text-white">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </span>
                            </div>
                        </a>
                    </template>
                </div>
            </div>
        </div>
    </section>
@endsection
