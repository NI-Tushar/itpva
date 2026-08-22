<!doctype html>
<html class="scroll-smooth" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title', 'ITPVA')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="/small-logo.png">
    <link rel="manifest" href="site.webmanifest">
    <meta name="keywords" content="">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('small-logo.png') }}">
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
                'items' => [
                    ['label' => 'Gmail', 'route' => 'email.gmail'],
                    ['label' => 'Buy Gmail Accounts', 'route' => 'email.buy-gmail-accounts'],
                    ['label' => 'Buy Gmail Aged Accounts', 'route' => 'email.buy-gmail-aged-accounts'],
                ],
            ],
            [
                'type' => 'dropdown',
                'label' => 'Google Voice',
                'route' => 'google-voice',
                'items' => [
                    ['label' => 'Buy Google Voice Accounts', 'route' => 'google-voice.buy-google-voice-accounts'],
                    ['label' => 'AGED-Google Voice', 'route' => 'google-voice.aged-google-voice'],
                ],
            ],
            ['type' => 'link', 'label' => 'Yahoo', 'route' => 'yahoo'],
            [
                'type' => 'dropdown',
                'label' => 'Social Media',
                'route' => 'social-media',
                'items' => [
                    ['label' => 'Facebook Accounts', 'route' => 'social-media.facebook-accounts'],
                    ['label' => 'Instagram Accounts', 'route' => 'social-media.instagram-accounts'],
                    ['label' => 'Twitter Accounts', 'route' => 'social-media.twitter-accounts'],
                    ['label' => 'Youtube Accounts', 'route' => 'social-media.youtube-accounts'],
                ],
            ],
            [
                'type' => 'dropdown',
                'label' => 'More',
                'route' => 'more',
                'items' => [
                    ['label' => 'Linked In', 'route' => 'more.linked-in'],
                    ['label' => 'Hotmail', 'route' => 'more.hotmail'],
                    ['label' => 'Raddit', 'route' => 'more.raddit'],
                    ['label' => 'TextNow', 'route' => 'more.textnow'],
                    ['label' => 'Digital Ocean', 'route' => 'more.digital-ocean'],
                    ['label' => 'Google Cloud', 'route' => 'more.google-cloud'],
                    ['label' => 'Amazon Web Services', 'route' => 'more.amazon-web-services'],
                    ['label' => 'Azure Account', 'route' => 'more.azure-account'],
                    ['label' => 'AOL Account', 'route' => 'more.aol-account'],
                    ['label' => 'Domain GV', 'route' => 'more.domain-gv'],
                    ['label' => 'Product Hunt', 'route' => 'more.product-hunt'],
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
                            <div x-data="{ open: false }" class="relative">
                                <div class="flex items-center rounded-xl pr-2 transition hover:bg-sky-50" @mouseenter="open = true" @mouseleave="open = false">
                                    <a href="{{ route($section['route']) }}" class="whitespace-nowrap rounded-xl px-4 py-2 text-sm font-bold text-black transition hover:text-sky-700 {{ request()->routeIs($section['route']) || request()->routeIs($section['route'] . '.*') ? 'text-sky-700' : '' }}">
                                        {{ $section['label'] }}
                                    </a>
                                    <button type="button" @click="open = !open" class="rounded p-2 text-slate-400 transition hover:text-sky-700">
                                        <i class="fa-solid fa-chevron-down text-xs"></i>
                                    </button>
                                </div>
                                <div x-show="open" x-transition @mouseenter="open = true" @mouseleave="open = false" @click.outside="open = false" class="absolute left-0 top-full mt-3 w-72 rounded-2xl border border-slate-200 bg-white p-3 shadow-xl shadow-slate-200/60" style="display: none;">
                                    <a href="{{ route($section['route']) }}" class="mb-2 block whitespace-nowrap rounded-xl px-4 py-3 text-sm font-semibold text-black transition hover:bg-slate-50 hover:text-sky-700 {{ request()->routeIs($section['route']) ? 'bg-sky-50 text-sky-700' : 'bg-white' }}">
                                        {{ $section['label'] }} Overview
                                    </a>
                                    @foreach ($section['items'] as $item)
                                        <a href="{{ route($item['route']) }}" class="block whitespace-nowrap rounded-xl px-4 py-3 text-sm text-black transition hover:bg-slate-50 hover:text-sky-700 {{ request()->routeIs($item['route']) ? 'bg-sky-50 text-sky-700' : '' }}">
                                            {{ $item['label'] }}
                                        </a>
                                    @endforeach
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
                                    <div x-show="expanded" x-transition class="space-y-2 px-1 pb-1" style="display: none;">
                                        <a href="{{ route($section['route']) }}" class="block whitespace-nowrap rounded-xl px-4 py-3 text-sm font-semibold text-black {{ request()->routeIs($section['route']) ? 'bg-sky-50 text-sky-700' : 'bg-white' }}">{{ $section['label'] }} Overview</a>
                                        @foreach ($section['items'] as $item)
                                            <a href="{{ route($item['route']) }}" class="block whitespace-nowrap rounded-xl px-4 py-3 text-sm text-black transition hover:bg-white hover:text-sky-700 {{ request()->routeIs($item['route']) ? 'bg-sky-50 text-sky-700' : '' }}">{{ $item['label'] }}</a>
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
        </main>

        <footer class="border-t border-slate-800 bg-slate-950 text-slate-100">
            <div class="mx-auto grid max-w-7xl gap-10 px-4 py-12 sm:px-6 lg:grid-cols-[1.2fr_0.8fr_0.8fr_0.8fr] lg:px-8">
                <div class="space-y-4">
                    <a href="{{ route('home') }}" class="flex items-center gap-3">
                        <img class="h-10 w-auto" src="{{ asset('images/logo/logo.png') }}" alt="ITPVA">
                        <span>
                            <span class="block text-sm font-bold uppercase tracking-[0.35em] text-white">ITPVA</span>
                            <span class="block text-xs text-slate-400">Account Marketplace</span>
                        </span>
                    </a>
                    <p class="max-w-md text-sm leading-7 text-slate-400">
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
