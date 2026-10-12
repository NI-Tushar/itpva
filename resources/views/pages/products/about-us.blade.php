@extends('layouts.app')

@section('title', 'About Us - Authentic PVA & Cloud Infrastructure')

@section('app-content')
<div class="space-y-12 sm:space-y-16 relative w-full text-slate-900 pb-12">

    {{-- =========================================================================
         1. HERO SECTION: DARK, HEAVILY BLURRED BG, FLOATING INFRASTRUCTURE CARD
         ========================================================================= --}}
    <section class="relative left-1/2 w-screen -translate-x-1/2 overflow-hidden bg-slate-950 text-white pt-6 pb-16 sm:pt-10 sm:pb-24 border-b border-slate-800/80 shadow-2xl">
        
        {{-- Deep Atmospheric Background with Heavy Blur --}}
        <div class="absolute inset-0 overflow-hidden pointer-events-none select-none">
            <div class="absolute inset-0 scale-150 bg-cover bg-center blur-3xl opacity-25 transform-gpu" style="background-image: url('{{ asset('images/hero-bg.png') }}');"></div>
            <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-emerald-950/40 via-slate-950/85 to-slate-950"></div>
            <div class="absolute inset-0 bg-slate-950/60 backdrop-blur-[2px]"></div>

            {{-- Ambient Glowing Atmospheric Orbs --}}
            <div class="absolute -top-32 left-1/4 h-96 w-96 rounded-full bg-emerald-500/15 blur-3xl filter"></div>
            <div class="absolute top-1/3 -right-24 h-96 w-96 rounded-full bg-sky-500/10 blur-3xl filter"></div>
            <div class="absolute -bottom-24 left-1/2 -translate-x-1/2 h-64 w-[600px] rounded-full bg-emerald-600/10 blur-3xl filter"></div>

            {{-- Tech Micro-Grid Overlay --}}
            <div class="absolute inset-0 bg-[linear-gradient(to_right,#1e293b15_1px,transparent_1px),linear-gradient(to_bottom,#1e293b15_1px,transparent_1px)] bg-[size:4rem_4rem] [mask-image:radial-gradient(ellipse_60%_50%_at_50%_30%,#000_70%,transparent_100%)]"></div>
        </div>

        {{-- Hero Container --}}
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 z-10">
            
            {{-- Breadcrumb Navigation --}}
            <nav class="flex items-center gap-2 text-xs sm:text-sm font-medium text-slate-400 mb-6">
                <a href="{{ route('home') }}" class="hover:text-emerald-400 transition flex items-center gap-1.5">
                    <i class="fa-solid fa-house text-xs"></i>
                    <span>Home</span>
                </a>
                <span class="text-slate-600">/</span>
                <span class="text-emerald-400 font-bold">About ITPVA</span>
            </nav>

            <div class="grid gap-10 lg:grid-cols-12 lg:items-center">
                
                {{-- Left Column: Brand Mission & Story --}}
                <div class="lg:col-span-7 space-y-6">
                    
                    {{-- Eyebrow Pill --}}
                    <div class="inline-flex items-center gap-2.5 rounded-full border border-emerald-500/30 bg-emerald-500/10 px-4 py-2 font-mono text-xs font-bold uppercase tracking-wider text-emerald-400 shadow-sm backdrop-blur-md">
                        <span class="flex h-2 w-2 rounded-full bg-emerald-400 animate-pulse"></span>
                        <span>ABOUT ITPVA // VERIFIED INFRASTRUCTURE NETWORK</span>
                    </div>

                    {{-- Main Headline --}}
                    <div class="space-y-4">
                        <h1 class="text-3xl font-black tracking-tight text-white sm:text-4xl lg:text-5xl xl:text-6xl leading-[1.15]">
                            Authentic Non-VoIP Digital Infrastructure.
                        </h1>
                        <p class="max-w-2xl text-base sm:text-lg leading-relaxed text-slate-300">
                            We founded ITPVA to eliminate the frustration of low-grade virtual phone numbers and instant-ban accounts. Today, we supply agencies, automation engineers, and enterprises with genuine physical carrier SIM verifications, clean residential IP histories, and strict 48-hour replacement SLAs.
                        </p>
                    </div>

                    {{-- Action CTA Buttons --}}
                    <div class="flex flex-wrap items-center gap-3 pt-2">
                        <a href="{{ route('home') }}#products" class="group inline-flex items-center gap-2.5 rounded-xl bg-emerald-600 px-6 py-3.5 text-sm font-bold text-white shadow-lg shadow-emerald-900/40 transition hover:bg-emerald-500">
                            <span>Explore Product Matrix</span>
                            <i class="fa-solid fa-arrow-right text-xs transition group-hover:translate-x-1"></i>
                        </a>
                        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 rounded-xl border border-slate-700/80 bg-slate-900/80 px-6 py-3.5 text-sm font-semibold text-slate-200 backdrop-blur-xl transition hover:border-slate-600 hover:bg-slate-800 hover:text-white">
                            <i class="fa-solid fa-headset text-xs text-emerald-400"></i>
                            <span>Contact Engineering Desk</span>
                        </a>
                    </div>

                    {{-- Trust Spec Badges Strip --}}
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 pt-6 border-t border-slate-800/80 text-xs font-semibold text-slate-300">
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-sim-card text-emerald-400 text-sm"></i>
                            <span>Real Carrier SIMs</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-network-wired text-emerald-400 text-sm"></i>
                            <span>Residential ISP IPs</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-shield-halved text-emerald-400 text-sm"></i>
                            <span>48h Replacement SLA</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-bolt text-emerald-400 text-sm"></i>
                            <span>&lt; 3m Auto Dispatch</span>
                        </div>
                    </div>

                </div>

                {{-- Right Column: Dark Blurred Network Console Card --}}
                <div class="lg:col-span-5 relative">
                    
                    {{-- Floating Mini Badge --}}
                    <div class="animate-float absolute -top-4 -right-2 z-20 hidden sm:flex items-center gap-2.5 rounded-2xl border border-slate-700/80 bg-slate-900/85 px-3.5 py-2.5 shadow-2xl shadow-black/70 text-white backdrop-blur-xl">
                        <span class="flex h-8 w-8 items-center justify-center rounded-xl bg-emerald-950/80 border border-emerald-500/30 text-emerald-400">
                            <i class="fa-solid fa-globe text-sm"></i>
                        </span>
                        <div>
                            <p class="text-xs font-bold text-white">Global Nodes</p>
                            <p class="text-[11px] font-semibold text-emerald-400">45+ Tier-1 Geos</p>
                        </div>
                    </div>

                    {{-- Main Floating Console Card --}}
                    <div class="animate-float-subtle relative rounded-3xl border border-slate-700/80 bg-slate-900/85 p-5 shadow-2xl shadow-black/70 backdrop-blur-2xl ring-1 ring-white/10 text-white">
                        
                        {{-- Window Header --}}
                        <div class="flex items-center justify-between border-b border-slate-800/90 pb-4">
                            <div class="flex items-center gap-2">
                                <span class="h-3 w-3 rounded-full bg-rose-500"></span>
                                <span class="h-3 w-3 rounded-full bg-amber-400"></span>
                                <span class="h-3 w-3 rounded-full bg-emerald-400"></span>
                                <span class="ml-2 font-mono text-xs font-bold text-slate-300">itpva-network // core-telemetry</span>
                            </div>
                            <span class="inline-flex items-center gap-1.5 rounded-full bg-emerald-500/15 border border-emerald-500/30 px-2.5 py-1 font-mono text-xs font-bold text-emerald-400">
                                <span class="h-1.5 w-1.5 rounded-full bg-emerald-400 animate-pulse"></span> Optimal
                            </span>
                        </div>

                        {{-- Core Telemetry Tiles --}}
                        <div class="mt-4 space-y-2.5">
                            <div class="flex items-center justify-between rounded-xl border border-slate-800 bg-slate-950/60 p-3.5 backdrop-blur-md">
                                <span class="text-xs font-semibold text-slate-300">Physical Carrier Non-VoIP</span>
                                <span class="font-mono text-xs font-bold text-emerald-400">100% Guaranteed</span>
                            </div>
                            <div class="flex items-center justify-between rounded-xl border border-slate-800 bg-slate-950/60 p-3.5 backdrop-blur-md">
                                <span class="text-xs font-semibold text-slate-300">Datacenter Subnet Flagging</span>
                                <span class="font-mono text-xs font-bold text-emerald-400">0% (Pure Residential)</span>
                            </div>
                            <div class="flex items-center justify-between rounded-xl border border-slate-800 bg-slate-950/60 p-3.5 backdrop-blur-md">
                                <span class="text-xs font-semibold text-slate-300">Fulfillment Queue Turnaround</span>
                                <span class="font-mono text-xs font-bold text-emerald-400">&lt; 3 Minutes</span>
                            </div>
                            <div class="flex items-center justify-between rounded-xl border border-slate-800 bg-slate-950/60 p-3.5 backdrop-blur-md">
                                <span class="text-xs font-semibold text-slate-300">Replacement Guarantee</span>
                                <span class="font-mono text-xs font-bold text-emerald-400">48-Hour SLA</span>
                            </div>
                        </div>

                        {{-- Console Footer --}}
                        <div class="mt-4 flex items-center justify-between border-t border-slate-800/90 pt-3.5 text-xs">
                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-lock text-emerald-400"></i>
                                <span class="font-mono text-slate-300">AES-256 Encrypted Batch Pipeline</span>
                            </div>
                            <span class="font-mono text-emerald-400 font-bold">ACTIVE</span>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>

    {{-- =========================================================================
         2. IT KPI METRICS STRIP
         ========================================================================= --}}
    <section class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            
            <div class="group rounded-2xl border border-slate-200/90 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:border-emerald-300 hover:shadow-md">
                <div class="flex items-center justify-between">
                    <p class="font-mono text-3xl sm:text-4xl font-black text-slate-900">120K+</p>
                    <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600 transition group-hover:bg-emerald-600 group-hover:text-white">
                        <i class="fa-solid fa-server text-sm"></i>
                    </span>
                </div>
                <p class="mt-2 text-xs font-bold uppercase tracking-wider text-emerald-700">Accounts Provisioned</p>
                <p class="mt-1 text-xs text-slate-500">Delivered across email, social, voice, and cloud.</p>
            </div>

            <div class="group rounded-2xl border border-slate-200/90 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:border-emerald-300 hover:shadow-md">
                <div class="flex items-center justify-between">
                    <p class="font-mono text-3xl sm:text-4xl font-black text-slate-900">99.9%</p>
                    <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600 transition group-hover:bg-emerald-600 group-hover:text-white">
                        <i class="fa-solid fa-shield-check text-sm"></i>
                    </span>
                </div>
                <p class="mt-2 text-xs font-bold uppercase tracking-wider text-emerald-700">Delivery SLA</p>
                <p class="mt-1 text-xs text-slate-500">Backed by our 48-hour immediate replacement policy.</p>
            </div>

            <div class="group rounded-2xl border border-slate-200/90 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:border-emerald-300 hover:shadow-md">
                <div class="flex items-center justify-between">
                    <p class="font-mono text-3xl sm:text-4xl font-black text-slate-900">45+</p>
                    <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600 transition group-hover:bg-emerald-600 group-hover:text-white">
                        <i class="fa-solid fa-earth-americas text-sm"></i>
                    </span>
                </div>
                <p class="mt-2 text-xs font-bold uppercase tracking-wider text-emerald-700">Global Geographies</p>
                <p class="mt-1 text-xs text-slate-500">US, UK, EU, Canada, and Australia carrier pools.</p>
            </div>

            <div class="group rounded-2xl border border-slate-200/90 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:border-emerald-300 hover:shadow-md">
                <div class="flex items-center justify-between">
                    <p class="font-mono text-3xl sm:text-4xl font-black text-slate-900">24/7</p>
                    <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600 transition group-hover:bg-emerald-600 group-hover:text-white">
                        <i class="fa-solid fa-headset text-sm"></i>
                    </span>
                </div>
                <p class="mt-2 text-xs font-bold uppercase tracking-wider text-emerald-700">Dedicated Support</p>
                <p class="mt-1 text-xs text-slate-500">Fast 15-minute response across support channels.</p>
            </div>

        </div>
    </section>

    {{-- =========================================================================
         3. 4-STEP VERIFICATION & PROVISIONING PIPELINE
         ========================================================================= --}}
    <section class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="rounded-3xl border border-slate-200/90 bg-white p-6 sm:p-10 shadow-sm">
            
            <div class="max-w-2xl">
                <span class="inline-flex items-center gap-1.5 rounded-full bg-emerald-50 px-3 py-1 text-xs font-bold uppercase tracking-wider text-emerald-700">
                    <i class="fa-solid fa-diagram-project text-[11px]"></i>
                    <span>Engineering Architecture</span>
                </span>
                <h2 class="mt-2 text-2xl sm:text-3xl font-black tracking-tight text-slate-900">
                    Our 4-Stage Provisioning & Verification Pipeline
                </h2>
                <p class="mt-2 text-sm sm:text-base text-slate-600">
                    Every account dispatched by ITPVA passes through automated health gates before entering our customer delivery queue.
                </p>
            </div>

            <div class="mt-10 grid gap-6 md:grid-cols-2 lg:grid-cols-4">
                
                {{-- Stage 1 --}}
                <div class="relative rounded-2xl border border-slate-200 bg-slate-50/70 p-6 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between">
                            <span class="font-mono text-xs font-black text-emerald-700 bg-emerald-100 rounded-lg px-2.5 py-1">STAGE 01</span>
                            <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-white text-emerald-600 shadow-sm">
                                <i class="fa-solid fa-sim-card text-base"></i>
                            </span>
                        </div>
                        <h3 class="mt-5 text-lg font-bold text-slate-900">Physical SIM Allocation</h3>
                        <p class="mt-2 text-xs leading-relaxed text-slate-600">
                            Numbers are provisioned exclusively on physical tier-1 SIM carriers (AT&T, Verizon, T-Mobile, Vodafone). No recycled VoIP numbers.
                        </p>
                    </div>
                    <div class="mt-6 pt-3 border-t border-slate-200 text-[11px] font-semibold text-emerald-800">
                        ✓ Anti-VoIP Shield Passed
                    </div>
                </div>

                {{-- Stage 2 --}}
                <div class="relative rounded-2xl border border-slate-200 bg-slate-50/70 p-6 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between">
                            <span class="font-mono text-xs font-black text-emerald-700 bg-emerald-100 rounded-lg px-2.5 py-1">STAGE 02</span>
                            <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-white text-emerald-600 shadow-sm">
                                <i class="fa-solid fa-network-wired text-base"></i>
                            </span>
                        </div>
                        <h3 class="mt-5 text-lg font-bold text-slate-900">Residential IP Registration</h3>
                        <p class="mt-2 text-xs leading-relaxed text-slate-600">
                            Registrations occur via authentic ISP residential subnets with consistent browser fingerprints, preventing platform fraud flags.
                        </p>
                    </div>
                    <div class="mt-6 pt-3 border-t border-slate-200 text-[11px] font-semibold text-emerald-800">
                        ✓ 0% Datacenter Flags
                    </div>
                </div>

                {{-- Stage 3 --}}
                <div class="relative rounded-2xl border border-slate-200 bg-slate-50/70 p-6 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between">
                            <span class="font-mono text-xs font-black text-emerald-700 bg-emerald-100 rounded-lg px-2.5 py-1">STAGE 03</span>
                            <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-white text-emerald-600 shadow-sm">
                                <i class="fa-solid fa-key text-base"></i>
                            </span>
                        </div>
                        <h3 class="mt-5 text-lg font-bold text-slate-900">2FA & Cookie Tenuring</h3>
                        <p class="mt-2 text-xs leading-relaxed text-slate-600">
                            Recovery emails and 2FA secret seeds are established. For aged accounts, cookies and browsing history are organically maintained.
                        </p>
                    </div>
                    <div class="mt-6 pt-3 border-t border-slate-200 text-[11px] font-semibold text-emerald-800">
                        ✓ Full 2FA Keys Included
                    </div>
                </div>

                {{-- Stage 4 --}}
                <div class="relative rounded-2xl border border-slate-200 bg-slate-50/70 p-6 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between">
                            <span class="font-mono text-xs font-black text-emerald-700 bg-emerald-100 rounded-lg px-2.5 py-1">STAGE 04</span>
                            <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-white text-emerald-600 shadow-sm">
                                <i class="fa-solid fa-lock text-base"></i>
                            </span>
                        </div>
                        <h3 class="mt-5 text-lg font-bold text-slate-900">Encrypted Batch Dispatch</h3>
                        <p class="mt-2 text-xs leading-relaxed text-slate-600">
                            Orders are dispatched in clean, structured CSV/JSON formats with passwords, 2FA secret seeds, and 48-hour replacement warranty.
                        </p>
                    </div>
                    <div class="mt-6 pt-3 border-t border-slate-200 text-[11px] font-semibold text-emerald-800">
                        ✓ 48h Replacement SLA
                    </div>
                </div>

            </div>

        </div>
    </section>

    {{-- =========================================================================
         4. CORE ENGINEERING COMMITMENTS
         ========================================================================= --}}
    <section class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid gap-6 sm:grid-cols-2">
            
            <div class="rounded-3xl border border-slate-200/90 bg-white p-7 sm:p-8 shadow-sm">
                <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-emerald-50 text-emerald-600 text-xl">
                    <i class="fa-solid fa-shield-halved"></i>
                </span>
                <h3 class="mt-5 text-xl font-black text-slate-900">Zero Synthetic VoIP Policy</h3>
                <p class="mt-2 text-sm leading-relaxed text-slate-600">
                    Cheap virtual VoIP numbers are banned on Google, Meta, and AWS. We only acquire real, physical SIM card inventory to provide long-lasting accounts that withstand security reviews.
                </p>
            </div>

            <div class="rounded-3xl border border-slate-200/90 bg-white p-7 sm:p-8 shadow-sm">
                <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-sky-50 text-sky-600 text-xl">
                    <i class="fa-solid fa-file-code"></i>
                </span>
                <h3 class="mt-5 text-xl font-black text-slate-900">Developer & Automation Ready</h3>
                <p class="mt-2 text-sm leading-relaxed text-slate-600">
                    Whether you are importing accounts into anti-detect browsers (AdsPower, Dolphin, Multilogin) or parsing accounts via automated Python/Node scrapers, our credential formats load seamlessly.
                </p>
            </div>

            <div class="rounded-3xl border border-slate-200/90 bg-white p-7 sm:p-8 shadow-sm">
                <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-violet-50 text-violet-600 text-xl">
                    <i class="fa-solid fa-handshake"></i>
                </span>
                <h3 class="mt-5 text-xl font-black text-slate-900">Unconditional 48-Hour Replacement</h3>
                <p class="mt-2 text-sm leading-relaxed text-slate-600">
                    Every order includes our standard replacement SLA. If you encounter any unexpected password mismatch, phone challenge, or locked account on first login, our support team issues an instant replacement.
                </p>
            </div>

            <div class="rounded-3xl border border-slate-200/90 bg-white p-7 sm:p-8 shadow-sm">
                <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-amber-50 text-amber-600 text-xl">
                    <i class="fa-solid fa-cubes"></i>
                </span>
                <h3 class="mt-5 text-xl font-black text-slate-900">Custom High-Volume Fulfillment</h3>
                <p class="mt-2 text-sm leading-relaxed text-slate-600">
                    Need hundreds of accounts per week or custom creation intervals? Our account management team establishes scheduled delivery pipelines with dedicated pricing and priority queueing.
                </p>
            </div>

        </div>
    </section>

    {{-- =========================================================================
         5. CALL TO ACTION BANNER
         ========================================================================= --}}
    <section class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="relative overflow-hidden rounded-3xl bg-slate-950 p-8 sm:p-12 text-white shadow-2xl border border-slate-800">
            
            <div class="absolute -right-20 -top-20 h-72 w-72 rounded-full bg-emerald-500/20 blur-3xl pointer-events-none"></div>
            <div class="absolute -left-20 -bottom-20 h-72 w-72 rounded-full bg-sky-500/15 blur-3xl pointer-events-none"></div>

            <div class="relative z-10 grid gap-8 lg:grid-cols-12 lg:items-center">
                <div class="lg:col-span-8 space-y-4">
                    <span class="inline-flex items-center gap-2 rounded-full border border-emerald-500/30 bg-emerald-500/10 px-3.5 py-1 font-mono text-xs font-bold uppercase tracking-wider text-emerald-400">
                        <span class="h-2 w-2 rounded-full bg-emerald-400 animate-pulse"></span>
                        <span>EXPERIENCE AUTHENTIC PVA QUALITY</span>
                    </span>
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-black tracking-tight text-white">
                        Ready to Upgrade Your PVA & Account Infrastructure?
                    </h2>
                    <p class="max-w-2xl text-sm sm:text-base leading-relaxed text-slate-300">
                        Explore our full inventory of verified Google, Voice, Social, and Cloud accounts, or speak with our sales engineers for tailored volume pricing.
                    </p>
                </div>
                
                <div class="lg:col-span-4 flex flex-col sm:flex-row lg:flex-col gap-3.5 lg:items-end">
                    <a href="{{ route('home') }}#products" class="group inline-flex items-center justify-center gap-2.5 rounded-xl bg-emerald-600 px-6 py-3.5 text-sm font-bold text-white shadow-lg shadow-emerald-900/40 transition hover:bg-emerald-500">
                        <span>Browse 21+ Services</span>
                        <i class="fa-solid fa-arrow-right text-xs transition group-hover:translate-x-1"></i>
                    </a>
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-2 rounded-xl border border-slate-700 bg-slate-900/80 px-6 py-3.5 text-sm font-semibold text-slate-200 backdrop-blur-xl transition hover:bg-slate-800 hover:text-white">
                        <span>Contact Tech Sales &rarr;</span>
                    </a>
                </div>
            </div>

        </div>
    </section>

</div>
@endsection
