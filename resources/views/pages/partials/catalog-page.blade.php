<section class="space-y-8">
    <div class="grid gap-8 lg:grid-cols-[1.15fr_0.85fr] lg:items-center">
        <div class="space-y-6">
            <span class="inline-flex items-center gap-2 rounded-full border border-sky-400/20 bg-sky-400/10 px-4 py-2 text-xs font-semibold uppercase tracking-[0.3em] text-sky-200">
                {{ $eyebrow }}
            </span>
            <div class="space-y-4">
                <h1 class="max-w-3xl text-4xl font-black tracking-tight text-white sm:text-5xl lg:text-6xl">{{ $title }}</h1>
                <p class="max-w-2xl text-base leading-8 text-slate-300 sm:text-lg">{{ $description }}</p>
            </div>
            <div class="flex flex-wrap gap-3">
                <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 rounded-full bg-sky-500 px-6 py-3 text-sm font-semibold text-slate-950 transition hover:bg-sky-400">
                    Contact Sales
                    <i class="fa-solid fa-arrow-right text-xs"></i>
                </a>
                <a href="{{ route('about-us') }}" class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-6 py-3 text-sm font-semibold text-white transition hover:bg-white/10">Learn More</a>
            </div>
        </div>
        <div class="rounded-[2rem] border border-white/10 bg-white/5 p-6 shadow-2xl shadow-slate-950/30">
            <div class="rounded-[1.5rem] border border-sky-400/15 bg-slate-900/80 p-6">
                <p class="text-sm font-semibold uppercase tracking-[0.3em] text-sky-300">Why Choose Us</p>
                <div class="mt-6 space-y-4">
                    @foreach ($highlights as $highlight)
                        <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                            <p class="text-sm font-semibold text-white">{{ $highlight['title'] }}</p>
                            <p class="mt-2 text-sm leading-6 text-slate-400">{{ $highlight['text'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="grid gap-4 md:grid-cols-3">
        @foreach ($stats as $stat)
            <div class="rounded-[1.75rem] border border-white/10 bg-white/5 p-6">
                <p class="text-3xl font-black text-white">{{ $stat['value'] }}</p>
                <p class="mt-2 text-sm font-semibold uppercase tracking-[0.2em] text-sky-300">{{ $stat['label'] }}</p>
                <p class="mt-3 text-sm leading-6 text-slate-400">{{ $stat['text'] }}</p>
            </div>
        @endforeach
    </div>

    <div class="rounded-[2rem] border border-white/10 bg-slate-900/70 p-6 sm:p-8">
        <div class="flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between">
            <div>
                <p class="text-sm font-semibold uppercase tracking-[0.3em] text-sky-300">Available Services</p>
                <h2 class="mt-2 text-2xl font-bold text-white">Built for fast delivery and clean onboarding</h2>
            </div>
            <p class="max-w-2xl text-sm leading-7 text-slate-400">
                Every page is ready for your content, pricing, proof, and CTA sections. You can now expand each category independently without changing the header structure.
            </p>
        </div>

        <div class="mt-6 grid gap-4 md:grid-cols-2 xl:grid-cols-3">
            @foreach ($cards as $card)
                <div class="rounded-[1.5rem] border border-white/10 bg-white/5 p-5">
                    <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-sky-500/15 text-sky-300 ring-1 ring-sky-400/20">
                        <i class="{{ $card['icon'] }}"></i>
                    </div>
                    <h3 class="mt-4 text-lg font-semibold text-white">{{ $card['title'] }}</h3>
                    <p class="mt-2 text-sm leading-6 text-slate-400">{{ $card['text'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
