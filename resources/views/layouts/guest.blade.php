<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'ITPVA') }} - {{ request()->routeIs('register') ? 'Create Account' : 'Sign In' }}</title>
        <link rel="icon" type="image/x-icon" href="/small-logo.png">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('small-logo.png') }}">

        <!-- Fonts & Icons -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800,900&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

        <!-- Tailwind CSS & Alpine.js -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <style>
            :root { --site-primary: #08A05A; --site-primary-dark: #067a45; --site-primary-soft: #e8f7ef; }
            @keyframes floatSlow {
                0%, 100% { transform: translateY(0px); }
                50% { transform: translateY(-8px); }
            }
            .animate-float {
                animation: floatSlow 5s ease-in-out infinite;
            }
        </style>
        @stack('css')
    </head>
    <body class="min-h-screen bg-slate-950 font-sans text-slate-100 antialiased relative flex flex-col justify-center items-center py-10 px-4 sm:px-6 lg:px-8 selection:bg-emerald-500 selection:text-white">
        
        {{-- Deep Atmospheric Background with Heavy Blur --}}
        <div class="fixed inset-0 overflow-hidden pointer-events-none select-none z-0">
            <div class="absolute inset-0 scale-150 bg-cover bg-center blur-3xl opacity-20 transform-gpu" style="background-image: url('{{ asset('images/hero-bg.png') }}');"></div>
            <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-emerald-950/40 via-slate-950/85 to-slate-950"></div>
            <div class="absolute inset-0 bg-slate-950/60 backdrop-blur-[2px]"></div>

            {{-- Ambient Glowing Atmospheric Orbs --}}
            <div class="absolute -top-32 left-1/4 h-96 w-96 rounded-full bg-emerald-500/15 blur-3xl filter"></div>
            <div class="absolute -bottom-24 right-1/4 h-96 w-96 rounded-full bg-sky-500/10 blur-3xl filter"></div>

            {{-- Tech Micro-Grid Overlay --}}
            <div class="absolute inset-0 bg-[linear-gradient(to_right,#1e293b12_1px,transparent_1px),linear-gradient(to_bottom,#1e293b12_1px,transparent_1px)] bg-[size:4rem_4rem]"></div>
        </div>

        {{-- Authentication Wrapper --}}
        <div class="relative z-10 w-full max-w-5xl space-y-4">
            
            {{-- Top Utility Bar --}}
            <div class="flex items-center justify-between px-2 text-xs">
                <a href="{{ route('home') }}" class="group inline-flex items-center gap-2 rounded-xl border border-slate-800 bg-slate-900/80 px-4 py-2 font-semibold text-slate-300 backdrop-blur-xl transition hover:border-slate-700 hover:bg-slate-800 hover:text-white shadow-sm">
                    <i class="fa-solid fa-arrow-left text-xs transition group-hover:-translate-x-1"></i>
                    <span>Back to ITPVA Marketplace</span>
                </a>

                <div class="inline-flex items-center gap-2 rounded-xl border border-slate-800 bg-slate-900/60 px-3.5 py-2 font-mono text-xs font-bold text-slate-400 backdrop-blur-md">
                    <span class="h-2 w-2 rounded-full bg-emerald-400 animate-pulse"></span>
                    <span>256-Bit SSL Encrypted Node</span>
                </div>
            </div>

            {{-- Main Split Glass Card --}}
            <div class="relative overflow-hidden rounded-3xl border border-slate-700/80 bg-slate-900/85 backdrop-blur-2xl shadow-2xl shadow-black/80 ring-1 ring-white/10 lg:grid lg:grid-cols-12">
                
                {{-- Left Aside: IT Tech Showcase Panel (5 cols) --}}
                <aside class="relative flex flex-col justify-between border-b lg:border-b-0 lg:border-r border-slate-800/90 bg-gradient-to-b from-slate-950 via-slate-900 to-emerald-950/50 p-8 sm:p-10 lg:col-span-5 text-white">
                    
                    {{-- Logo & Operational Pill --}}
                    <div>
                        <div class="flex items-center justify-between">
                            <a href="{{ route('home') }}" class="inline-flex items-center gap-3">
                                <img src="{{ asset('images/logo/logo.png') }}" class="h-8 w-auto" alt="ITPVA">
                            </a>
                            <span class="rounded-full border border-emerald-500/30 bg-emerald-500/10 px-2.5 py-0.5 font-mono text-[11px] font-bold text-emerald-400">
                                v2.4 OPERATIONAL
                            </span>
                        </div>

                        {{-- Dynamic Aside Headline & Context --}}
                        <div class="mt-12 space-y-4">
                            @if (request()->routeIs('register'))
                                <span class="inline-flex items-center gap-1.5 rounded-full bg-emerald-500/10 border border-emerald-500/25 px-3 py-1 font-mono text-xs font-bold text-emerald-400 uppercase tracking-wider">
                                    <i class="fa-solid fa-user-plus text-[11px]"></i>
                                    <span>Enterprise Onboarding</span>
                                </span>
                                <h1 class="text-2xl sm:text-3xl font-black leading-tight text-white">
                                    Join the Premier Verified PVA Network
                                </h1>
                                <p class="text-sm leading-relaxed text-slate-300">
                                    Create your account to secure instant account deliveries, aged carrier profiles, and automated 2FA provisioning.
                                </p>

                                {{-- Features Checklist --}}
                                <div class="mt-6 space-y-3 pt-4 border-t border-slate-800/80">
                                    <div class="flex items-start gap-2.5 text-xs text-slate-300">
                                        <i class="fa-solid fa-circle-check text-emerald-400 text-sm mt-0.5 shrink-0"></i>
                                        <span><strong>100% Non-VoIP:</strong> Verified with real physical tier-1 SIM carriers.</span>
                                    </div>
                                    <div class="flex items-start gap-2.5 text-xs text-slate-300">
                                        <i class="fa-solid fa-circle-check text-emerald-400 text-sm mt-0.5 shrink-0"></i>
                                        <span><strong>Residential IPs:</strong> Clean ISP origin, free of datacenter flags.</span>
                                    </div>
                                    <div class="flex items-start gap-2.5 text-xs text-slate-300">
                                        <i class="fa-solid fa-circle-check text-emerald-400 text-sm mt-0.5 shrink-0"></i>
                                        <span><strong>48h Replacement SLA:</strong> Immediate support & credential replacement.</span>
                                    </div>
                                </div>
                            @else
                                <span class="inline-flex items-center gap-1.5 rounded-full bg-emerald-500/10 border border-emerald-500/25 px-3 py-1 font-mono text-xs font-bold text-emerald-400 uppercase tracking-wider">
                                    <i class="fa-solid fa-shield-halved text-[11px]"></i>
                                    <span>Secure Access Node</span>
                                </span>
                                <h1 class="text-2xl sm:text-3xl font-black leading-tight text-white">
                                    Welcome to the ITPVA Control Center
                                </h1>
                                <p class="text-sm leading-relaxed text-slate-300">
                                    Access your verified credentials, order queue history, and real-time inventory provisioning.
                                </p>

                                {{-- KPI Metric Tiles --}}
                                <div class="mt-6 grid grid-cols-2 gap-3 pt-4 border-t border-slate-800/80">
                                    <div class="rounded-xl border border-slate-800 bg-slate-950/60 p-3">
                                        <p class="font-mono text-lg font-black text-white">120K+</p>
                                        <p class="text-[11px] font-semibold text-slate-400 uppercase tracking-wider">Dispatched</p>
                                    </div>
                                    <div class="rounded-xl border border-slate-800 bg-slate-950/60 p-3">
                                        <p class="font-mono text-lg font-black text-emerald-400">&lt; 3 Min</p>
                                        <p class="text-[11px] font-semibold text-slate-400 uppercase tracking-wider">Queue SLA</p>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>

                    {{-- Bottom Security Tile --}}
                    <div class="mt-10 rounded-2xl border border-slate-800 bg-slate-950/70 p-4 backdrop-blur-md">
                        <div class="flex items-center gap-2 font-semibold text-slate-200 text-xs">
                            <i class="fa-solid fa-lock text-emerald-400 text-sm"></i>
                            <span>Enterprise Security Guarantee</span>
                        </div>
                        <p class="mt-1.5 text-[11px] leading-relaxed text-slate-400">
                            Credentials and 2FA keys are dispatched via encrypted streams. Need sales help? <a href="{{ route('contact') }}" class="text-emerald-400 hover:underline">Contact Tech Sales &rarr;</a>
                        </p>
                    </div>

                </aside>

                {{-- Right Form Canvas (7 cols) --}}
                <main class="flex flex-col justify-center p-6 sm:p-10 lg:p-12 lg:col-span-7 bg-slate-900/60">
                    {{ $slot }}
                </main>

            </div>

        </div>

        @stack('js')
    </body>
</html>
