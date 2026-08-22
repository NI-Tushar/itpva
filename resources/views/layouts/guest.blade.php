<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            :root { --site-primary: #08A05A; --site-primary-dark: #067a45; --site-primary-soft: #e8f7ef; }
            [class~="text-sky-50"], [class~="text-sky-100"], [class~="text-sky-200"], [class~="text-sky-300"], [class~="text-sky-400"], [class~="text-sky-500"], [class~="text-sky-600"], [class~="text-sky-700"], [class~="text-sky-900"], [class~="text-emerald-300"], [class~="text-emerald-400"], [class~="text-emerald-600"], [class~="text-emerald-700"], [class~="text-green-600"], [class~="text-indigo-600"] { color: var(--site-primary) !important; }
            [class~="bg-sky-50"], [class~="bg-sky-100"], [class~="bg-emerald-50"], [class~="bg-emerald-100"] { background-color: var(--site-primary-soft) !important; }
            [class~="bg-sky-400"], [class~="bg-sky-500"], [class~="bg-sky-600"], [class~="bg-sky-700"], [class~="bg-emerald-400"], [class~="bg-emerald-500"], [class~="bg-emerald-600"], [class~="bg-emerald-700"] { background-color: var(--site-primary) !important; }
            [class~="border-sky-200"], [class~="border-sky-300"], [class~="border-sky-400"], [class~="border-emerald-200"], [class~="border-emerald-400"], [class~="border-green-600"], [class~="border-indigo-500"] { border-color: color-mix(in srgb, var(--site-primary) 28%, white) !important; }
            [class~="hover:bg-sky-700"]:hover, [class~="hover:bg-emerald-700"]:hover { background-color: var(--site-primary-dark) !important; }
            [class*="focus:border-sky-"]:focus, [class*="focus:border-emerald-"]:focus, [class*="focus:border-indigo-"]:focus { border-color: var(--site-primary) !important; }
            [class*="focus:ring-sky-"]:focus, [class*="focus:ring-emerald-"]:focus, [class*="focus:ring-indigo-"]:focus { --tw-ring-color: var(--site-primary) !important; }
        </style>
    </head>
    <body class="min-h-screen bg-slate-50 font-sans text-slate-900 antialiased">
        <div class="relative flex min-h-screen items-center justify-center overflow-hidden px-4 py-8 sm:px-6 lg:px-8">
            <div class="pointer-events-none absolute -left-24 -top-24 h-96 w-96 rounded-full bg-sky-200/60 blur-3xl"></div>
            <div class="pointer-events-none absolute -bottom-32 -right-24 h-96 w-96 rounded-full bg-emerald-100/70 blur-3xl"></div>
            <div class="relative grid w-full max-w-5xl overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-2xl shadow-slate-200/80 lg:grid-cols-[0.85fr_1.15fr]">
                <aside class="hidden bg-gradient-to-br from-[#08A05A] to-[#067a45] p-10 text-white lg:flex lg:flex-col lg:justify-between">
                    <div>
                        <a href="{{ route('home') }}" class="inline-flex items-center gap-3"><span class="flex h-11 w-11 items-center justify-center rounded-2xl bg-white/15"><i class="fa-solid fa-layer-group"></i></span><span class="text-lg font-black tracking-[0.2em]">ITPVA</span></a>
                        <div class="mt-20"><p class="text-sm font-bold uppercase tracking-[0.3em] text-sky-100">Welcome back</p><h1 class="mt-4 text-4xl font-black leading-tight">A clearer way to manage your marketplace journey.</h1><p class="mt-6 leading-7 text-sky-100">Sign in to keep your profile, orders, and product conversations in one place.</p></div>
                    </div>
                    <div class="rounded-2xl border border-white/15 bg-white/10 p-5"><p class="text-sm leading-6 text-sky-50">Browse products, compare packages, and connect with support whenever you need guidance.</p><a href="{{ route('home') }}" class="mt-4 inline-flex items-center gap-2 text-sm font-bold text-white hover:text-sky-100">Explore the catalog <i class="fa-solid fa-arrow-right text-xs"></i></a></div>
                </aside>
                <main class="p-6 sm:p-10 lg:p-14">
                    <div class="mb-8 flex items-center justify-between lg:hidden"><a href="{{ route('home') }}" class="flex items-center gap-2 text-lg font-black tracking-[0.2em] text-sky-700"><i class="fa-solid fa-layer-group"></i> ITPVA</a><a href="{{ route('home') }}" class="text-sm font-semibold text-slate-500 hover:text-sky-700">Home</a></div>
                    {{ $slot }}
                </main>
            </div>
        </div>
    </body>
</html>
