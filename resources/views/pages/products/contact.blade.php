@extends('layouts.app')

@section('title', 'Contact Tech Support & Sales')

@section('app-content')
<div class="space-y-12 sm:space-y-16 relative w-full text-slate-900 pb-12">

    {{-- =========================================================================
         1. HERO SECTION: DARK, HEAVILY BLURRED BG, FLOATING DISPATCH CONSOLE
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
                <span class="text-emerald-400 font-bold">Contact Tech Sales & Support</span>
            </nav>

            <div class="grid gap-10 lg:grid-cols-12 lg:items-center">
                
                {{-- Left Column: Headline & Direct Overview --}}
                <div class="lg:col-span-7 space-y-6">
                    
                    {{-- Eyebrow Pill --}}
                    <div class="inline-flex items-center gap-2.5 rounded-full border border-emerald-500/30 bg-emerald-500/10 px-4 py-2 font-mono text-xs font-bold uppercase tracking-wider text-emerald-400 shadow-sm backdrop-blur-md">
                        <span class="flex h-2 w-2 rounded-full bg-emerald-400 animate-pulse"></span>
                        <span>DIRECT DISPATCH DESK // 24/7 ROTATION</span>
                    </div>

                    {{-- Main Headline --}}
                    <div class="space-y-4">
                        <h1 class="text-3xl font-black tracking-tight text-white sm:text-4xl lg:text-5xl xl:text-6xl leading-[1.15]">
                            Let’s Coordinate Your Next Account Deployment.
                        </h1>
                        <p class="max-w-2xl text-base sm:text-lg leading-relaxed text-slate-300">
                            Whether you need instant batch delivery, custom carrier geographies, high-volume discounts, or SLA replacement assistance, our tech specialists respond in under 15 minutes.
                        </p>
                    </div>

                    {{-- Quick Action Buttons --}}
                    <div class="flex flex-wrap items-center gap-3 pt-2">
                        <a href="#inquiry-form" class="group inline-flex items-center gap-2.5 rounded-xl bg-emerald-600 px-6 py-3.5 text-sm font-bold text-white shadow-lg shadow-emerald-900/40 transition hover:bg-emerald-500">
                            <span>Submit Direct Inquiry</span>
                            <i class="fa-solid fa-arrow-down text-xs transition group-hover:translate-y-0.5"></i>
                        </a>
                        <a href="mailto:support@itpva.com" class="inline-flex items-center gap-2 rounded-xl border border-slate-700/80 bg-slate-900/80 px-6 py-3.5 text-sm font-semibold text-slate-200 backdrop-blur-xl transition hover:border-slate-600 hover:bg-slate-800 hover:text-white">
                            <i class="fa-solid fa-envelope text-xs text-emerald-400"></i>
                            <span>Email: support@itpva.com</span>
                        </a>
                    </div>

                    {{-- Live SLA Badges Strip --}}
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 pt-6 border-t border-slate-800/80 text-xs font-semibold text-slate-300">
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-circle-check text-emerald-400 text-sm"></i>
                            <span>&lt; 15 Min Response</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-shield-halved text-emerald-400 text-sm"></i>
                            <span>48h Replacement SLA</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-clock text-emerald-400 text-sm"></i>
                            <span>24/7/365 On-Duty</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-lock text-emerald-400 text-sm"></i>
                            <span>Encrypted Channels</span>
                        </div>
                    </div>

                </div>

                {{-- Right Column: Dark Blurred Dispatch Hub Terminal --}}
                <div class="lg:col-span-5 relative">
                    
                    {{-- Floating Badge (Top-Right) --}}
                    <div class="animate-float absolute -top-4 -right-2 z-20 hidden sm:flex items-center gap-2.5 rounded-2xl border border-slate-700/80 bg-slate-900/85 px-3.5 py-2.5 shadow-2xl shadow-black/70 text-white backdrop-blur-xl">
                        <span class="flex h-8 w-8 items-center justify-center rounded-xl bg-emerald-950/80 border border-emerald-500/30 text-emerald-400">
                            <i class="fa-solid fa-headset text-sm"></i>
                        </span>
                        <div>
                            <p class="text-xs font-bold text-white">Live Operations</p>
                            <p class="text-[11px] font-semibold text-emerald-400">Staff Active Now</p>
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
                                <span class="ml-2 font-mono text-xs font-bold text-slate-300">itpva-hub // dispatch-desk</span>
                            </div>
                            <span class="inline-flex items-center gap-1.5 rounded-full bg-emerald-500/15 border border-emerald-500/30 px-2.5 py-1 font-mono text-xs font-bold text-emerald-400">
                                <span class="h-1.5 w-1.5 rounded-full bg-emerald-400 animate-pulse"></span> Ready
                            </span>
                        </div>

                        {{-- Dispatch Routing Channels --}}
                        <div class="mt-4 space-y-3">
                            <div class="rounded-2xl border border-slate-800 bg-slate-950/60 p-3.5 backdrop-blur-md">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-3">
                                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-emerald-500/15 text-emerald-400">
                                            <i class="fa-solid fa-envelope text-base"></i>
                                        </div>
                                        <div>
                                            <p class="text-xs font-bold text-white">Primary Support Inbox</p>
                                            <p class="text-[11px] text-slate-400">support@itpva.com</p>
                                        </div>
                                    </div>
                                    <span class="font-mono text-[11px] font-bold text-emerald-400">&lt; 15m ETA</span>
                                </div>
                            </div>

                            <div class="rounded-2xl border border-slate-800 bg-slate-950/60 p-3.5 backdrop-blur-md">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-3">
                                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-sky-500/15 text-sky-400">
                                            <i class="fa-brands fa-telegram text-base"></i>
                                        </div>
                                        <div>
                                            <p class="text-xs font-bold text-white">Telegram Live Queue</p>
                                            <p class="text-[11px] text-slate-400">@ITPVA_Support</p>
                                        </div>
                                    </div>
                                    <span class="font-mono text-[11px] font-bold text-sky-400">Instant</span>
                                </div>
                            </div>

                            <div class="rounded-2xl border border-slate-800 bg-slate-950/60 p-3.5 backdrop-blur-md">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-3">
                                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-emerald-500/15 text-emerald-400">
                                            <i class="fa-brands fa-whatsapp text-base"></i>
                                        </div>
                                        <div>
                                            <p class="text-xs font-bold text-white">WhatsApp Tech Line</p>
                                            <p class="text-[11px] text-slate-400">Verified Representative</p>
                                        </div>
                                    </div>
                                    <span class="font-mono text-[11px] font-bold text-emerald-400">Active</span>
                                </div>
                            </div>
                        </div>

                        {{-- SLA Guarantee Footer --}}
                        <div class="mt-4 flex items-center justify-between border-t border-slate-800/90 pt-3.5 text-xs">
                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-shield-halved text-emerald-400"></i>
                                <span class="font-mono text-slate-300">Replacement Guarantee Active</span>
                            </div>
                            <span class="font-mono text-emerald-400 font-bold">48 Hours</span>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>

    {{-- =========================================================================
         2. DIRECT CONTACT METHODS CARDS
         ========================================================================= --}}
    <section class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid gap-6 md:grid-cols-3">
            
            {{-- Card 1: Email Support --}}
            <a href="mailto:support@itpva.com" class="group rounded-2xl border border-slate-200/90 bg-white p-6 sm:p-7 shadow-sm transition duration-200 hover:-translate-y-1 hover:border-emerald-400 hover:shadow-xl">
                <div class="flex items-center justify-between">
                    <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600 transition group-hover:scale-110 group-hover:bg-emerald-600 group-hover:text-white">
                        <i class="fa-solid fa-envelope text-xl"></i>
                    </span>
                    <i class="fa-solid fa-arrow-up-right-from-square text-xs text-slate-400 transition group-hover:text-emerald-600"></i>
                </div>
                <h3 class="mt-5 text-xl font-bold text-slate-900 group-hover:text-emerald-700 transition">Email Dispatch Desk</h3>
                <p class="mt-2 text-sm leading-relaxed text-slate-600">Best for formal batch orders, custom invoice requests, and CSV credential deliveries.</p>
                <div class="mt-5 pt-4 border-t border-slate-100 flex items-center justify-between text-xs font-bold text-emerald-700">
                    <span>support@itpva.com</span>
                    <span class="text-slate-400 group-hover:text-emerald-600">&rarr;</span>
                </div>
            </a>

            {{-- Card 2: 24/7 Hours & Rotation --}}
            <div class="rounded-2xl border border-slate-200/90 bg-white p-6 sm:p-7 shadow-sm">
                <div class="flex items-center justify-between">
                    <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-sky-50 text-sky-600">
                        <i class="fa-solid fa-clock text-xl"></i>
                    </span>
                    <span class="rounded-full bg-emerald-100 px-3 py-1 font-mono text-[11px] font-bold text-emerald-800">
                        ONLINE NOW
                    </span>
                </div>
                <h3 class="mt-5 text-xl font-bold text-slate-900">24/7 Global Rotation</h3>
                <p class="mt-2 text-sm leading-relaxed text-slate-600">Our team operates across US and EU timezones to fulfill orders and address questions continuously.</p>
                <div class="mt-5 pt-4 border-t border-slate-100 text-xs font-bold text-slate-700">
                    Mon - Sun &bull; 365 Days Continuous Service
                </div>
            </div>

            {{-- Card 3: Catalog Discovery --}}
            <a href="{{ route('home') }}#products" class="group rounded-2xl border border-slate-200/90 bg-white p-6 sm:p-7 shadow-sm transition duration-200 hover:-translate-y-1 hover:border-emerald-400 hover:shadow-xl">
                <div class="flex items-center justify-between">
                    <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-violet-50 text-violet-600 transition group-hover:scale-110 group-hover:bg-violet-600 group-hover:text-white">
                        <i class="fa-solid fa-layer-group text-xl"></i>
                    </span>
                    <i class="fa-solid fa-arrow-right text-xs text-slate-400 transition group-hover:text-violet-600"></i>
                </div>
                <h3 class="mt-5 text-xl font-bold text-slate-900 group-hover:text-violet-700 transition">Browse Products First</h3>
                <p class="mt-2 text-sm leading-relaxed text-slate-600">Explore technical specifications, stock statuses, and available pricing tiers before inquiring.</p>
                <div class="mt-5 pt-4 border-t border-slate-100 flex items-center justify-between text-xs font-bold text-violet-700">
                    <span>Explore 21+ Services</span>
                    <span class="text-slate-400 group-hover:text-violet-600">&rarr;</span>
                </div>
            </a>

        </div>
    </section>

    {{-- =========================================================================
         3. INTERACTIVE INQUIRY FORM & GUIDANCE BREAKDOWN
         ========================================================================= --}}
    <section id="inquiry-form" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 scroll-mt-24">
        <div class="grid gap-10 lg:grid-cols-12 lg:items-start">
            
            {{-- Left Column: Interactive Dispatch Request Form --}}
            <div class="lg:col-span-7 rounded-3xl border border-slate-200/90 bg-white p-6 sm:p-10 shadow-sm" x-data="{ submitted: false }">
                
                {{-- Form Header --}}
                <div class="mb-8">
                    <span class="inline-flex items-center gap-1.5 rounded-full bg-emerald-50 px-3 py-1 text-xs font-bold uppercase tracking-wider text-emerald-700">
                        <i class="fa-solid fa-paper-plane text-[11px]"></i>
                        <span>Dispatch Inquiry</span>
                    </span>
                    <h2 class="mt-2 text-2xl sm:text-3xl font-black tracking-tight text-slate-900">
                        Submit Your Order or Requirement
                    </h2>
                    <p class="mt-1.5 text-sm text-slate-600">
                        Fill in your target product and preferred batch size. We'll reply with stock availability, custom pricing, and dispatch ETA.
                    </p>
                </div>

                {{-- Success State --}}
                <div x-show="submitted" class="rounded-2xl border border-emerald-500/30 bg-emerald-50 p-6 text-center text-emerald-950 space-y-3" style="display: none;">
                    <span class="flex h-12 w-12 mx-auto items-center justify-center rounded-full bg-emerald-600 text-white text-xl">
                        <i class="fa-solid fa-check"></i>
                    </span>
                    <h3 class="text-xl font-bold text-emerald-900">Inquiry Queued Successfully!</h3>
                    <p class="text-sm text-emerald-800">Your message has been assigned to a technical account manager. We will review availability and contact you within 15 minutes.</p>
                    <button type="button" @click="submitted = false" class="mt-4 rounded-xl border border-emerald-600 bg-white px-4 py-2 text-xs font-bold text-emerald-800 hover:bg-emerald-100 transition">
                        Submit Another Inquiry
                    </button>
                </div>

                {{-- Form Fields --}}
                <form x-show="!submitted" @submit.prevent="submitted = true" class="space-y-5">
                    
                    {{-- Name & Email --}}
                    <div class="grid gap-4 sm:grid-cols-2">
                        <div>
                            <label for="contact_name" class="block text-xs font-bold uppercase tracking-wider text-slate-700">Your Name / Handle</label>
                            <div class="relative mt-1.5">
                                <i class="fa-solid fa-user pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-sm text-slate-400"></i>
                                <input id="contact_name" type="text" required placeholder="Alex Vance" class="block w-full rounded-xl border border-slate-300 bg-slate-50/70 py-3 pl-11 pr-4 text-sm text-slate-900 placeholder:text-slate-400 outline-none transition focus:border-emerald-600 focus:bg-white focus:ring-2 focus:ring-emerald-500/20">
                            </div>
                        </div>

                        <div>
                            <label for="contact_email" class="block text-xs font-bold uppercase tracking-wider text-slate-700">Contact Email</label>
                            <div class="relative mt-1.5">
                                <i class="fa-solid fa-envelope pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-sm text-slate-400"></i>
                                <input id="contact_email" type="email" required placeholder="alex@company.com" class="block w-full rounded-xl border border-slate-300 bg-slate-50/70 py-3 pl-11 pr-4 text-sm text-slate-900 placeholder:text-slate-400 outline-none transition focus:border-emerald-600 focus:bg-white focus:ring-2 focus:ring-emerald-500/20">
                            </div>
                        </div>
                    </div>

                    {{-- Product Category & Quantity Range --}}
                    <div class="grid gap-4 sm:grid-cols-2">
                        <div>
                            <label for="contact_product" class="block text-xs font-bold uppercase tracking-wider text-slate-700">Target Product</label>
                            <div class="relative mt-1.5">
                                <select id="contact_product" required class="block w-full rounded-xl border border-slate-300 bg-slate-50/70 py-3 px-4 text-sm text-slate-900 outline-none transition focus:border-emerald-600 focus:bg-white focus:ring-2 focus:ring-emerald-500/20">
                                    <option value="">Select a Category...</option>
                                    <option value="gmail">Gmail Accounts (Fresh / Aged)</option>
                                    <option value="voice">Google Voice (Non-VoIP Real SIM)</option>
                                    <option value="facebook">Facebook Accounts (BM / Seasoned)</option>
                                    <option value="instagram">Instagram Accounts (Niche / Aged)</option>
                                    <option value="twitter">Twitter / X Accounts (Tokens Included)</option>
                                    <option value="cloud">Cloud Consoles (AWS / GCP / DO)</option>
                                    <option value="yahoo">Yahoo / Hotmail / AOL</option>
                                    <option value="custom">Other / Custom Bulk Requirement</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label for="contact_quantity" class="block text-xs font-bold uppercase tracking-wider text-slate-700">Estimated Batch Size</label>
                            <div class="relative mt-1.5">
                                <select id="contact_quantity" required class="block w-full rounded-xl border border-slate-300 bg-slate-50/70 py-3 px-4 text-sm text-slate-900 outline-none transition focus:border-emerald-600 focus:bg-white focus:ring-2 focus:ring-emerald-500/20">
                                    <option value="starter">Starter (1 - 5 Accounts)</option>
                                    <option value="team">Team Pack (5 - 25 Accounts)</option>
                                    <option value="bulk" selected>Bulk Batch (25 - 100 Accounts)</option>
                                    <option value="enterprise">Enterprise (100+ to 1,000+ Accounts)</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    {{-- Message / Specific Requirements --}}
                    <div>
                        <label for="contact_message" class="block text-xs font-bold uppercase tracking-wider text-slate-700">Requirements & Details</label>
                        <div class="relative mt-1.5">
                            <textarea id="contact_message" rows="4" required placeholder="Specify creation year preference, required country area codes, proxy format, or questions..." class="block w-full rounded-xl border border-slate-300 bg-slate-50/70 p-4 text-sm text-slate-900 placeholder:text-slate-400 outline-none transition focus:border-emerald-600 focus:bg-white focus:ring-2 focus:ring-emerald-500/20"></textarea>
                        </div>
                    </div>

                    {{-- Submit Button --}}
                    <button type="submit" class="group flex w-full items-center justify-center gap-2.5 rounded-xl bg-emerald-600 px-6 py-4 text-sm font-bold text-white shadow-lg shadow-emerald-900/30 transition hover:bg-emerald-500 hover:shadow-emerald-500/30">
                        <span>Dispatch Request to Support Desk</span>
                        <i class="fa-solid fa-arrow-right text-xs transition group-hover:translate-x-1"></i>
                    </button>

                    <p class="text-center text-[11px] text-slate-500">
                        Encrypted transmission &bull; No marketing spam &bull; 15-minute response SLA
                    </p>

                </form>

            </div>

            {{-- Right Column: What to Include & Common Requests --}}
            <div class="lg:col-span-5 space-y-6">
                
                {{-- Fast Checklist Card --}}
                <div class="rounded-3xl border border-slate-200/90 bg-white p-6 sm:p-8 shadow-sm">
                    <span class="inline-flex items-center gap-1.5 rounded-full bg-emerald-50 px-3 py-1 text-xs font-bold uppercase tracking-wider text-emerald-700">
                        <i class="fa-solid fa-lightbulb text-[11px]"></i>
                        <span>Order Preparation</span>
                    </span>
                    <h3 class="mt-3 text-xl font-black text-slate-900">What to Include for Faster Fulfillment</h3>
                    
                    <div class="mt-5 space-y-3.5">
                        <div class="flex items-start gap-3 rounded-xl border border-slate-100 bg-slate-50/70 p-3.5">
                            <span class="flex h-8 w-8 items-center justify-center rounded-lg bg-emerald-100 text-emerald-700 shrink-0">
                                <i class="fa-solid fa-tag text-xs"></i>
                            </span>
                            <div>
                                <h4 class="text-xs font-bold text-slate-900">Target Platform & Year Range</h4>
                                <p class="text-xs text-slate-600 mt-0.5">e.g. Gmail 2015-2018 Aged or US Google Voice area code 212.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3 rounded-xl border border-slate-100 bg-slate-50/70 p-3.5">
                            <span class="flex h-8 w-8 items-center justify-center rounded-lg bg-emerald-100 text-emerald-700 shrink-0">
                                <i class="fa-solid fa-file-csv text-xs"></i>
                            </span>
                            <div>
                                <h4 class="text-xs font-bold text-slate-900">Preferred Delivery Format</h4>
                                <p class="text-xs text-slate-600 mt-0.5">Let us know if you require formatted CSV, JSON, or JSON cookie sessions.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3 rounded-xl border border-slate-100 bg-slate-50/70 p-3.5">
                            <span class="flex h-8 w-8 items-center justify-center rounded-lg bg-emerald-100 text-emerald-700 shrink-0">
                                <i class="fa-solid fa-bolt text-xs"></i>
                            </span>
                            <div>
                                <h4 class="text-xs font-bold text-slate-900">Immediate or Scheduled Dispatch</h4>
                                <p class="text-xs text-slate-600 mt-0.5">We can queue instant dispatch or spread deliveries across days.</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- 48-Hour SLA Guarantee Box --}}
                <div class="rounded-3xl border border-emerald-200 bg-gradient-to-br from-emerald-50 to-emerald-100/40 p-6 sm:p-8">
                    <div class="flex items-center gap-3">
                        <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-600 text-white text-lg shadow-sm">
                            <i class="fa-solid fa-shield-halved"></i>
                        </span>
                        <div>
                            <h3 class="text-lg font-black text-slate-900">48-Hour Replacement Guarantee</h3>
                            <p class="text-xs text-emerald-800 font-semibold">Zero-Friction Access Warranty</p>
                        </div>
                    </div>
                    <p class="mt-4 text-xs sm:text-sm leading-relaxed text-slate-700">
                        If any credential encounters a login issue, invalid password, or phone challenge upon first access, simply send the account line to our support desk. We replace it immediately within our SLA coverage.
                    </p>
                </div>

            </div>

        </div>
    </section>

</div>
@endsection
