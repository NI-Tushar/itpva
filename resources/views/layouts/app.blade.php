<!doctype html>
<html class="scroll-smooth" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title', 'ITPVA')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="manifest" href="site.webmanifest">
    <meta name="keywords" content="">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <script src="https://kit.fontawesome.com/9f57283aa3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        :root { --site-primary: #08A05A; --site-primary-dark: #067a45; --site-primary-soft: #e8f7ef; }
        [class~="text-sky-50"], [class~="text-sky-100"], [class~="text-sky-200"], [class~="text-sky-300"], [class~="text-sky-400"], [class~="text-sky-500"], [class~="text-sky-600"], [class~="text-sky-700"], [class~="text-sky-900"], [class~="text-emerald-300"], [class~="text-emerald-400"], [class~="text-emerald-600"], [class~="text-emerald-700"], [class~="text-green-600"], [class~="text-indigo-600"], [class~="text-violet-600"], [class~="text-amber-600"] { color: var(--site-primary) !important; }
        [class~="bg-sky-50"], [class~="bg-sky-100"], [class~="bg-emerald-50"], [class~="bg-emerald-100"], [class~="bg-green-50"], [class~="bg-violet-50"], [class~="bg-amber-50"] { background-color: var(--site-primary-soft) !important; }
        [class~="bg-sky-400"], [class~="bg-sky-500"], [class~="bg-sky-600"], [class~="bg-sky-700"], [class~="bg-emerald-400"], [class~="bg-emerald-500"], [class~="bg-emerald-600"], [class~="bg-emerald-700"], [class~="bg-green-600"], [class~="bg-indigo-600"] { background-color: var(--site-primary) !important; }
        [class~="border-sky-200"], [class~="border-sky-300"], [class~="border-sky-400"], [class~="border-emerald-200"], [class~="border-emerald-400"], [class~="border-green-600"], [class~="border-indigo-500"], [class~="border-violet-300"], [class~="border-amber-300"] { border-color: color-mix(in srgb, var(--site-primary) 28%, white) !important; }
        [class~="hover:bg-sky-400"]:hover, [class~="hover:bg-sky-500"]:hover, [class~="hover:bg-sky-600"]:hover, [class~="hover:bg-sky-700"]:hover, [class~="hover:bg-emerald-300"]:hover, [class~="hover:bg-emerald-700"]:hover { background-color: var(--site-primary-dark) !important; }
        [class~="hover:text-sky-700"]:hover, [class~="hover:text-sky-900"]:hover, [class~="hover:text-emerald-700"]:hover { color: var(--site-primary-dark) !important; }
        [class*="focus:border-sky-"]:focus, [class*="focus:border-emerald-"]:focus, [class*="focus:border-indigo-"]:focus { border-color: var(--site-primary) !important; }
        [class*="focus:ring-sky-"]:focus, [class*="focus:ring-emerald-"]:focus, [class*="focus:ring-indigo-"]:focus { --tw-ring-color: var(--site-primary) !important; }
        header nav a:hover, header [x-show="mobileOpen"] a:hover { color: #000 !important; }
        header nav a[class~="text-sky-700"], header nav a[class~="text-sky-700"]:hover, header [x-show="mobileOpen"] a[class~="text-sky-700"], header [x-show="mobileOpen"] a[class~="text-sky-700"]:hover { color: var(--site-primary) !important; }

        @keyframes floatSlow {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-12px); }
        }
        @keyframes floatReverse {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(12px); }
        }
        @keyframes floatSubtle {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-8px) rotate(1deg); }
        }
        .animate-float {
            animation: floatSlow 4s ease-in-out infinite;
        }
        .animate-float-slow {
            animation: floatSlow 7s ease-in-out infinite;
        }
        .animate-float-reverse {
            animation: floatReverse 5s ease-in-out infinite;
        }
        .animate-float-subtle {
            animation: floatSubtle 6s ease-in-out infinite;
        }
    </style>
    @stack('css')
</head>
<body class="min-h-screen bg-slate-50 text-slate-900">
    @php
        $navSections = [
            ['type' => 'link', 'label' => 'Home', 'route' => 'home'],
            [
                'type' => 'dropdown',
                'label' => 'Email',
                'route' => 'email',
                'badge' => '9 Services',
                'items' => [
                    ['label' => 'Gmail', 'route' => 'email.gmail', 'image' => asset('images/products/gmail.png'), 'sub' => 'Fresh & Aged Workspaces'],
                    ['label' => 'Buy Gmail Accounts', 'route' => 'email.buy-gmail-accounts', 'image' => asset('images/products/gmail.png'), 'sub' => 'Verified Bulk Accounts'],
                    ['label' => 'Buy Gmail Aged Accounts', 'route' => 'email.buy-gmail-aged-accounts', 'image' => asset('images/products/aged-gmail.png'), 'sub' => '2014-2023 Vintage'],
                    ['label' => 'Edu Mail Accounts', 'route' => 'email.edumail', 'image' => asset('images/products/edumail.png'), 'sub' => 'Student Perks & Discounts'],
                    ['label' => 'Old Code Mail', 'route' => 'email.code-mail', 'image' => asset('images/products/review_mail.png'), 'sub' => 'Instant OTP Recovery'],
                    ['label' => 'GMX Mail', 'route' => 'email.gmx', 'image' => asset('images/products/gmx.png'), 'sub' => 'POP3/IMAP/SMTP Active'],
                    ['label' => 'Mail.com Accounts', 'route' => 'email.mail-com', 'image' => asset('images/products/mailcom.png'), 'sub' => 'Fresh & 1M+ Aged Webmail'],
                    ['label' => 'Hotmail OAuth2', 'route' => 'email.hotmail-oauth2', 'image' => asset('images/products/outlook.png'), 'sub' => 'Microsoft Graph & IMAP'],
                    ['label' => 'Gmail Domain Rent', 'route' => 'email.gmail-domain-rent', 'image' => asset('images/products/gmail-domain-rent.png'), 'sub' => '2h to 48h Private Slots'],
                ],
            ],
            [
                'type' => 'dropdown',
                'label' => 'Google Voice',
                'route' => 'google-voice',
                'badge' => '2 Services',
                'items' => [
                    ['label' => 'Buy Google Voice', 'route' => 'google-voice.buy-google-voice-accounts', 'image' => asset('images/products/voice.png'), 'sub' => 'Fresh US Real Carrier PVA'],
                    ['label' => 'AGED Google Voice', 'route' => 'google-voice.aged-google-voice', 'image' => asset('images/products/aged-voice.png'), 'sub' => 'Historical Call Logs Seasoned'],
                ],
            ],
            ['type' => 'link', 'label' => 'Yahoo', 'route' => 'yahoo'],
            [
                'type' => 'dropdown',
                'label' => 'Social Media',
                'route' => 'social-media',
                'badge' => '6 Platforms',
                'items' => [
                    ['label' => 'Facebook Accounts', 'route' => 'social-media.facebook-accounts', 'image' => asset('images/products/facebook.png'), 'sub' => 'Aged Profiles + 2FA Key'],
                    ['label' => 'Instagram Accounts', 'route' => 'social-media.instagram-accounts', 'image' => asset('images/products/instagram.png'), 'sub' => 'Phone & Email Verified PVA'],
                    ['label' => 'Instagram Clone PVA', 'route' => 'social-media.instagram-clone', 'image' => asset('images/products/instagram-clone.png'), 'sub' => '1-30 Days Aged with 2FA'],
                    ['label' => 'TikTok Ads Accounts', 'route' => 'social-media.tiktok-accounts', 'image' => asset('images/products/tik-tok.png'), 'sub' => 'Postpaid USD/VND Agency'],
                    ['label' => 'Twitter / X Accounts', 'route' => 'social-media.twitter-accounts', 'image' => asset('images/products/twitter.png'), 'sub' => 'API & Automation Tokens'],
                    ['label' => 'YouTube Accounts', 'route' => 'social-media.youtube-accounts', 'image' => asset('images/products/youtube.png'), 'sub' => 'Verified Channels & Stream'],
                ],
            ],
            [
                'type' => 'dropdown',
                'label' => 'More',
                'route' => 'more',
                'badge' => '12 Utilities',
                'items' => [
                    ['label' => 'Nextdoor Accounts', 'route' => 'more.nextdoor', 'image' => asset('images/products/nextdoor.png'), 'sub' => 'Local US/UK Postal PVA'],
                    ['label' => 'LinkedIn Accounts', 'route' => 'more.linked-in', 'image' => asset('images/products/linkedin.png'), 'sub' => 'Sales Navigator & B2B'],
                    ['label' => 'Hotmail / Outlook', 'route' => 'more.hotmail', 'image' => asset('images/products/hotmail.png'), 'sub' => 'Enterprise POP3/SMTP'],
                    ['label' => 'Reddit Accounts', 'route' => 'more.raddit', 'image' => asset('images/products/raddit.png'), 'sub' => 'Aged Karma Profiles'],
                    ['label' => 'TextNow Accounts', 'route' => 'more.textnow', 'image' => asset('images/products/textnow.jpg'), 'sub' => 'Active US SMS / Call Line'],
                    ['label' => 'DigitalOcean', 'route' => 'more.digital-ocean', 'image' => asset('images/products/digitalocean.png'), 'sub' => '$200 Credits Cloud Console'],
                    ['label' => 'Google Cloud (GCP)', 'route' => 'more.google-cloud', 'image' => asset('images/products/google-cloud.png'), 'sub' => '$300 Trial Compute Ready'],
                    ['label' => 'Amazon Web Services', 'route' => 'more.amazon-web-services', 'image' => asset('images/products/aws.png'), 'sub' => 'EC2 / SES Quotas Open'],
                    ['label' => 'Azure Account', 'route' => 'more.azure-account', 'image' => asset('images/products/azure.png'), 'sub' => 'Microsoft Azure $200 Tier'],
                    ['label' => 'AOL Account', 'route' => 'more.aol-account', 'image' => asset('images/products/aol.png'), 'sub' => 'Seasoned Email PVA'],
                    ['label' => 'Domain Google Voice', 'route' => 'more.domain-gv', 'image' => asset('images/products/domain-gv.png'), 'sub' => 'Enterprise Workspace VOIP'],
                    ['label' => 'Product Hunt', 'route' => 'more.product-hunt', 'image' => asset('images/products/producthunt.png'), 'sub' => 'Maker Rank Upvote Profiles'],
                ],
            ],
            ['type' => 'link', 'label' => 'About Us', 'route' => 'about-us'],
            ['type' => 'link', 'label' => 'Contact', 'route' => 'contact'],
        ];
    @endphp

    <div class="relative min-h-screen overflow-x-hidden">
        <div class="absolute inset-0 -z-10 bg-[radial-gradient(circle_at_top,_rgba(14,165,233,0.10),_transparent_32%),radial-gradient(circle_at_bottom_right,_rgba(16,185,129,0.08),_transparent_24%),linear-gradient(180deg,_#ffffff_0%,_#f8fafc_55%,_#eef6ff_100%)]"></div>

        <header x-data="{ mobileOpen: false }" class="fixed inset-x-0 top-0 z-50 border-b border-slate-200/80 bg-white/90 shadow-sm backdrop-blur-xl">
            <div class="mx-auto flex max-w-7xl items-center justify-between gap-4 px-4 py-4 sm:px-6 lg:px-8">
                <a href="{{ route('home') }}" class="flex items-center gap-3">
                    <!-- <span class="flex h-11 w-11 items-center justify-center rounded bg-sky-500/15 text-sky-300 ring-1 ring-sky-400/30">
                        <i class="fa-solid fa-globe text-lg"></i>
                    </span> -->
                    <span>
                        <img class="h-[30px] w-auto" src="{{ asset('images/logo/logo.png') }}" alt="">
                        <!-- <span class="block text-sm font-medium uppercase tracking-[0.35em] text-sky-300">ITPVA</span>
                        <span class="block text-xs text-slate-400">Account Marketplace</span> -->
                    </span>
                </a>

                <nav class="hidden items-center gap-1 xl:flex">
                    @foreach ($navSections as $section)
                        @if ($section['type'] === 'link')
                            <a href="{{ route($section['route']) }}" class="whitespace-nowrap rounded-xl px-4 py-2 text-sm font-bold text-black transition hover:bg-sky-50 hover:text-sky-700 {{ request()->routeIs($section['route']) ? 'bg-sky-50 text-sky-700' : '' }}">
                                {{ $section['label'] }}
                            </a>
                        @else
                            @php
                                $itemCount = count($section['items']);
                                $useMultiCol = $itemCount > 5;
                                $dropdownWidth = $itemCount > 10 ? 'w-[780px]' : ($itemCount > 5 ? 'w-[540px]' : 'w-[320px]');
                            @endphp
                            <div x-data="{ open: false }" class="relative" @mouseenter="open = true" @mouseleave="open = false">
                                <div class="flex items-center rounded-xl pr-2 transition hover:bg-sky-50">
                                    <a href="{{ route($section['route']) }}" class="whitespace-nowrap rounded-xl px-4 py-2 text-sm font-bold text-black transition hover:text-sky-700 {{ request()->routeIs($section['route']) || request()->routeIs($section['route'] . '.*') ? 'text-sky-700' : '' }}">
                                        {{ $section['label'] }}
                                    </a>
                                    <button type="button" @click="open = !open" class="rounded p-2 text-slate-400 transition hover:text-sky-700">
                                        <i class="fa-solid fa-chevron-down text-xs transition duration-200" :class="{ 'rotate-180': open }"></i>
                                    </button>
                                </div>

                                {{-- Rich Mega Dropdown Menu (Flex Column / Grid) --}}
                                <div x-show="open" 
                                     x-transition:enter="transition ease-out duration-200"
                                     x-transition:enter-start="opacity-0 translate-y-2 scale-98"
                                     x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                                     x-transition:leave="transition ease-in duration-150"
                                     x-transition:leave-start="opacity-100 translate-y-0 scale-100"
                                     x-transition:leave-end="opacity-0 translate-y-2 scale-98"
                                     @click.outside="open = false" 
                                     class="absolute left-0 top-full mt-2 {{ $dropdownWidth }} rounded-3xl border border-slate-200/90 bg-white/95 p-4 shadow-2xl shadow-slate-900/10 backdrop-blur-2xl ring-1 ring-slate-900/5 z-50" 
                                     style="display: none;">
                                    
                                    {{-- Dropdown Header with Category Title & Overview Action --}}
                                    <div class="flex items-center justify-between border-b border-slate-100 pb-3 px-2 mb-3">
                                        <div class="flex items-center gap-2">
                                            <span class="flex h-6 w-6 items-center justify-center rounded-lg bg-emerald-50 text-emerald-600 text-xs">
                                                <i class="fa-solid fa-layer-group"></i>
                                            </span>
                                            <span class="text-xs font-bold uppercase tracking-wider text-slate-900">{{ $section['label'] }} Marketplace</span>
                                            @if (!empty($section['badge']))
                                                <span class="rounded-full bg-emerald-100/80 px-2 py-0.5 text-[11px] font-bold text-emerald-800">{{ $section['badge'] }}</span>
                                            @endif
                                        </div>
                                        <a href="{{ route($section['route']) }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-emerald-600 hover:text-emerald-700 transition">
                                            <span>All {{ $section['label'] }}</span>
                                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                        </a>
                                    </div>

                                    {{-- Flex / Grid Columns (Max 5 to 6 items per column) --}}
                                    <div class="{{ $useMultiCol ? ($itemCount > 10 ? 'grid grid-cols-3 gap-2' : 'grid grid-cols-2 gap-2') : 'flex flex-col gap-1.5' }}">
                                        @foreach ($section['items'] as $item)
                                            <a href="{{ route($item['route']) }}" 
                                               class="group flex items-center gap-3 rounded-2xl p-2.5 transition duration-150 hover:bg-slate-50 hover:shadow-sm border border-transparent hover:border-slate-200/80 {{ request()->routeIs($item['route']) ? 'bg-emerald-50/70 border-emerald-200 text-emerald-900' : 'text-slate-700' }}">
                                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-slate-50 border border-slate-200/70 p-1.5 transition duration-200 group-hover:scale-110 group-hover:bg-white group-hover:border-emerald-300 group-hover:shadow-sm">
                                                    <img src="{{ $item['image'] ?? asset('images/products/digital.png') }}" 
                                                         alt="{{ $item['label'] }}" 
                                                         class="h-full w-full object-contain filter drop-shadow-xs">
                                                </div>
                                                <div class="min-w-0 flex-1">
                                                    <p class="truncate text-sm font-bold text-slate-900 group-hover:text-emerald-600 transition">
                                                        {{ $item['label'] }}
                                                    </p>
                                                    @if (!empty($item['sub']))
                                                        <p class="truncate text-[11px] text-slate-400 group-hover:text-slate-600 transition">
                                                            {{ $item['sub'] }}
                                                        </p>
                                                    @endif
                                                </div>
                                                <i class="fa-solid fa-chevron-right text-[10px] text-slate-300 opacity-0 group-hover:opacity-100 group-hover:translate-x-0.5 text-emerald-600 transition shrink-0"></i>
                                            </a>
                                        @endforeach
                                    </div>

                                    {{-- Dropdown Quick Footer --}}
                                    <div class="mt-3 pt-3 border-t border-slate-100 flex items-center justify-between px-2 text-[11px] text-slate-400">
                                        <span class="flex items-center gap-1.5">
                                            <i class="fa-solid fa-circle-check text-emerald-500 text-[10px]"></i>
                                            <span>Clean IPs &bull; 48h Warranty</span>
                                        </span>
                                        <a href="{{ route('contact') }}" class="font-semibold text-slate-500 hover:text-emerald-600 transition">Need Custom Batch?</a>
                                    </div>

                                </div>
                            </div>
                        @endif
                    @endforeach
                </nav>

                <div class="hidden items-center gap-3 xl:flex">
                    @auth
                        <div x-data="{ open: false }" class="relative">
                            <button type="button" @click="open = !open" class="flex items-center gap-3 rounded-xl border border-slate-200 bg-white px-3 py-2 text-left transition hover:border-sky-300 hover:bg-sky-50">
                                <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-sky-100 text-sm font-semibold text-sky-700">
                                    {{ strtoupper(substr(auth()->user()->name ?? 'U', 0, 1)) }}
                                </span>
                                <span>
                                    <span class="block text-sm font-semibold text-slate-900">{{ auth()->user()->name }}</span>
                                    <span class="block text-xs text-slate-500">{{ auth()->user()->email }}</span>
                                </span>
                                <i class="fa-solid fa-chevron-down text-xs text-slate-400"></i>
                            </button>

                            <div x-show="open" x-transition @click.outside="open = false" class="absolute right-0 top-full mt-3 w-56 rounded-2xl border border-slate-200 bg-white p-3 shadow-xl" style="display: none;">
                                <a href="{{ route('dashboard') }}" class="block rounded-xl px-4 py-3 text-sm text-slate-600 transition hover:bg-slate-50 hover:text-sky-700">Dashboard</a>
                                <a href="{{ route('profile.edit') }}" class="block rounded-xl px-4 py-3 text-sm text-slate-600 transition hover:bg-slate-50 hover:text-sky-700">Profile Settings</a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="mt-1 w-full rounded px-4 py-3 text-left text-sm text-rose-300 transition hover:bg-rose-500/10 hover:text-rose-200">Log Out</button>
                                </form>
                            </div>
                        </div>
                    @else
                            <a href="{{ route('login') }}" class="rounded-xl border border-sky-600 px-4 py-2 text-sm font-semibold text-sky-700 transition hover:bg-sky-50">Login</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="rounded-xl bg-sky-600 px-5 py-2 text-sm font-semibold text-white transition hover:bg-sky-700">Register</a>
                        @endif
                    @endauth
                </div>

                <button type="button" @click="mobileOpen = !mobileOpen" class="inline-flex h-11 w-11 items-center justify-center rounded-xl border border-slate-200 bg-white text-slate-700 xl:hidden">
                    <i class="fa-solid" :class="mobileOpen ? 'fa-xmark' : 'fa-bars'"></i>
                </button>
            </div>

            <div x-show="mobileOpen" x-transition class="border-t border-slate-200 bg-white xl:hidden" style="display: none;">
                <div class="mx-auto max-w-7xl px-4 py-4 sm:px-6 lg:px-8">
                    <div class="space-y-3">
                        @foreach ($navSections as $section)
                            @if ($section['type'] === 'link')
                                <a href="{{ route($section['route']) }}" class="block whitespace-nowrap rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm font-semibold text-black {{ request()->routeIs($section['route']) ? 'bg-sky-50 text-sky-700' : '' }}">{{ $section['label'] }}</a>
                            @else
                                <div x-data="{ expanded: false }" class="rounded-2xl border border-slate-200 bg-slate-50 p-2">
                                    <button type="button" @click="expanded = !expanded" class="flex w-full items-center justify-between rounded-xl px-3 py-3 text-left text-sm font-medium text-black">
                                        <span>{{ $section['label'] }}</span>
                                        <i class="fa-solid fa-chevron-down text-xs text-slate-400" :class="{ 'rotate-180': expanded }"></i>
                                    </button>
                                    <div x-show="expanded" x-transition class="space-y-1.5 px-1 pb-1 pt-2 border-t border-slate-200/70 mt-1" style="display: none;">
                                        <a href="{{ route($section['route']) }}" class="flex items-center justify-between rounded-xl px-3 py-2.5 text-xs font-bold uppercase tracking-wider text-emerald-700 bg-emerald-50/70 border border-emerald-200/60 transition">
                                            <span>All {{ $section['label'] }} Marketplace</span>
                                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                        </a>
                                        @foreach ($section['items'] as $item)
                                            <a href="{{ route($item['route']) }}" class="flex items-center gap-3 rounded-xl px-3 py-2 text-sm text-slate-800 transition hover:bg-white hover:text-emerald-700 {{ request()->routeIs($item['route']) ? 'bg-white font-bold text-emerald-700 shadow-xs' : '' }}">
                                                <div class="flex h-7 w-7 shrink-0 items-center justify-center rounded-lg bg-white border border-slate-200/80 p-1">
                                                    <img src="{{ $item['image'] ?? asset('images/products/digital.png') }}" alt="{{ $item['label'] }}" class="h-full w-full object-contain">
                                                </div>
                                                <div class="min-w-0 flex-1">
                                                    <span class="block truncate font-medium">{{ $item['label'] }}</span>
                                                </div>
                                                <i class="fa-solid fa-chevron-right text-[10px] text-slate-300"></i>
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>

                    <div class="mt-4 rounded-2xl border border-slate-200 bg-slate-50 p-3">
                        @auth
                            <div class="mb-3 rounded-xl bg-white px-4 py-3">
                                <p class="text-sm font-semibold text-slate-900">{{ auth()->user()->name }}</p>
                                <p class="text-xs text-slate-500">{{ auth()->user()->email }}</p>
                            </div>
                            <a href="{{ route('dashboard') }}" class="block rounded-xl px-4 py-3 text-sm text-slate-600 transition hover:bg-white hover:text-sky-700">Dashboard</a>
                            <a href="{{ route('profile.edit') }}" class="block rounded-xl px-4 py-3 text-sm text-slate-600 transition hover:bg-white hover:text-sky-700">Profile Settings</a>
                            <form method="POST" action="{{ route('logout') }}" class="mt-1">
                                @csrf
                                <button type="submit" class="w-full rounded-xl px-4 py-3 text-left text-sm text-rose-600 transition hover:bg-rose-50">Log Out</button>
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="block rounded-xl px-4 py-3 text-sm font-semibold text-sky-700 transition hover:bg-white">Login</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                class="mt-1 block rounded-xl bg-sky-600 px-4 py-3 text-sm font-semibold text-white transition hover:bg-sky-700">Register</a>
                            @endif
                        @endauth
                    </div>
                </div>
            </div>
        </header>

        <main class="mx-auto min-h-[calc(100vh-88px)] max-w-7xl px-4 pb-10 pt-20 sm:px-6 lg:px-8">
            @yield('app-content')
            {{ $slot ?? '' }}
        </main>

        <footer class="border-t border-slate-800 bg-slate-950 text-slate-100">
            <div class="mx-auto grid max-w-7xl gap-10 px-4 py-12 sm:px-6 lg:grid-cols-[1.2fr_0.8fr_0.8fr_0.8fr] lg:px-8">
                <div class="space-y-4">
                    <a href="{{ route('home') }}" class="flex items-center gap-3">
                        <img class="h-10 w-auto" src="{{ asset('images/logo/logo.png') }}" alt="ITPVA">
                        <span>
                            <span class="block text-base font-bold uppercase tracking-[0.35em] text-white">ITPVA</span>
                            <span class="block text-sm text-slate-300">Account Marketplace</span>
                        </span>
                    </a>
                    <p class="max-w-md text-base leading-7 text-slate-300">
                        Explore verified account categories, responsive product pages, and a clean browsing experience built to help users discover services quickly.
                    </p>
                    <div class="flex items-center gap-3 text-slate-400">
                        <a href="{{ route('social-media.facebook-accounts') }}" class="flex h-10 w-10 items-center justify-center rounded-full border border-white/10 bg-white/5 transition hover:border-sky-300 hover:text-sky-300">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="{{ route('social-media.instagram-accounts') }}" class="flex h-10 w-10 items-center justify-center rounded-full border border-white/10 bg-white/5 transition hover:border-sky-300 hover:text-sky-300">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="{{ route('social-media.twitter-accounts') }}" class="flex h-10 w-10 items-center justify-center rounded-full border border-white/10 bg-white/5 transition hover:border-sky-300 hover:text-sky-300">
                            <i class="fa-brands fa-x-twitter"></i>
                        </a>
                        <a href="{{ route('social-media.youtube-accounts') }}" class="flex h-10 w-10 items-center justify-center rounded-full border border-white/10 bg-white/5 transition hover:border-sky-300 hover:text-sky-300">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </div>
                </div>

                <div>
                    <h3 class="text-sm font-bold uppercase tracking-[0.25em] text-white">Quick Links</h3>
                    <div class="mt-4 space-y-3">
                        <a href="{{ route('home') }}" class="block text-sm text-slate-400 transition hover:text-sky-300">Home</a>
                        <a href="{{ route('about-us') }}" class="block text-sm text-slate-400 transition hover:text-sky-300">About Us</a>
                        <a href="{{ route('contact') }}" class="block text-sm text-slate-400 transition hover:text-sky-300">Contact</a>
                        <a href="{{ route('email') }}" class="block text-sm text-slate-400 transition hover:text-sky-300">Email</a>
                        <a href="{{ route('social-media') }}" class="block text-sm text-slate-400 transition hover:text-sky-300">Social Media</a>
                    </div>
                </div>

                <div>
                    <h3 class="text-sm font-bold uppercase tracking-[0.25em] text-white">Top Categories</h3>
                    <div class="mt-4 space-y-3">
                        <a href="{{ route('email.gmail') }}" class="block text-sm text-slate-400 transition hover:text-sky-300">Gmail</a>
                        <a href="{{ route('google-voice.buy-google-voice-accounts') }}" class="block text-sm text-slate-400 transition hover:text-sky-300">Google Voice</a>
                        <a href="{{ route('social-media.facebook-accounts') }}" class="block text-sm text-slate-400 transition hover:text-sky-300">Facebook Accounts</a>
                        <a href="{{ route('social-media.instagram-accounts') }}" class="block text-sm text-slate-400 transition hover:text-sky-300">Instagram Accounts</a>
                        <a href="{{ route('more.google-cloud') }}" class="block text-sm text-slate-400 transition hover:text-sky-300">Google Cloud</a>
                    </div>
                </div>

                <div>
                    <h3 class="text-sm font-bold uppercase tracking-[0.25em] text-white">Support</h3>
                    <div class="mt-4 space-y-4">
                        <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                            <p class="text-xs uppercase tracking-[0.2em] text-sky-300">Email</p>
                            <p class="mt-2 text-sm text-slate-300">support@itpva.com</p>
                        </div>
                        <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                            <p class="text-xs uppercase tracking-[0.2em] text-sky-300">Availability</p>
                            <p class="mt-2 text-sm text-slate-300">Mon - Sun, 24/7 response support</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-t border-white/10">
                <div class="mx-auto flex max-w-7xl flex-col gap-3 px-4 py-5 text-sm text-slate-500 sm:px-6 lg:flex-row lg:items-center lg:justify-between lg:px-8">
                    <p>&copy; {{ now()->year }} ITPVA. All rights reserved.</p>
                    <div class="flex flex-wrap gap-4">
                        <a href="{{ route('about-us') }}" class="transition hover:text-sky-300">About</a>
                        <a href="{{ route('contact') }}" class="transition hover:text-sky-300">Contact</a>
                        <a href="{{ route('more') }}" class="transition hover:text-sky-300">More Services</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    @stack('script')
</body>
</html>
