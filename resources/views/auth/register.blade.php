<x-guest-layout>
    <div class="mx-auto w-full max-w-lg">
        
        {{-- Header --}}
        <div class="mb-7">
            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 shadow-sm">
                <i class="fa-solid fa-user-plus text-base"></i>
            </div>
            <p class="mt-4 font-mono text-xs font-bold uppercase tracking-wider text-emerald-400">CREATE CREDENTIALS</p>
            <h2 class="mt-1 text-2xl sm:text-3xl font-black tracking-tight text-white">Create your account</h2>
            <p class="mt-1.5 text-sm leading-relaxed text-slate-400">Join verified buyers and businesses managing premium PVA inventory.</p>
        </div>

        <form method="POST" action="{{ route('register') }}" class="space-y-4">
            @csrf

            {{-- Name & Email in 2 columns --}}
            <div class="grid gap-4 sm:grid-cols-2">
                {{-- Full Name --}}
                <div>
                    <label for="name" class="block text-xs font-bold uppercase tracking-wider text-slate-300">Full Name</label>
                    <div class="relative mt-1.5">
                        <i class="fa-solid fa-user pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-sm text-slate-500"></i>
                        <input id="name" 
                               name="name" 
                               type="text" 
                               value="{{ old('name') }}" 
                               required 
                               autofocus 
                               autocomplete="name" 
                               placeholder="Alex Vance" 
                               class="block w-full rounded-xl border border-slate-700 bg-slate-950/80 py-3 pl-11 pr-4 text-sm text-white placeholder:text-slate-500 outline-none transition focus:border-emerald-500 focus:bg-slate-950 focus:ring-2 focus:ring-emerald-500/30">
                    </div>
                    <x-input-error :messages="$errors->get('name')" class="mt-1.5 text-xs font-semibold text-rose-400" />
                </div>

                {{-- Email Address --}}
                <div>
                    <label for="email" class="block text-xs font-bold uppercase tracking-wider text-slate-300">Email Address</label>
                    <div class="relative mt-1.5">
                        <i class="fa-solid fa-envelope pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-sm text-slate-500"></i>
                        <input id="email" 
                               name="email" 
                               type="email" 
                               value="{{ old('email') }}" 
                               required 
                               autocomplete="username" 
                               placeholder="alex@company.com" 
                               class="block w-full rounded-xl border border-slate-700 bg-slate-950/80 py-3 pl-11 pr-4 text-sm text-white placeholder:text-slate-500 outline-none transition focus:border-emerald-500 focus:bg-slate-950 focus:ring-2 focus:ring-emerald-500/30">
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="mt-1.5 text-xs font-semibold text-rose-400" />
                </div>
            </div>

            {{-- Password & Password Confirmation in 2 columns --}}
            <div class="grid gap-4 sm:grid-cols-2" x-data="{ showPass: false, showConfirm: false }">
                {{-- Password --}}
                <div>
                    <label for="password" class="block text-xs font-bold uppercase tracking-wider text-slate-300">Password</label>
                    <div class="relative mt-1.5">
                        <i class="fa-solid fa-key pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-sm text-slate-500"></i>
                        <input id="password" 
                               name="password" 
                               :type="showPass ? 'text' : 'password'" 
                               required 
                               autocomplete="new-password" 
                               placeholder="••••••••••••" 
                               class="block w-full rounded-xl border border-slate-700 bg-slate-950/80 py-3 pl-11 pr-10 text-sm text-white placeholder:text-slate-500 outline-none transition focus:border-emerald-500 focus:bg-slate-950 focus:ring-2 focus:ring-emerald-500/30">
                        <button type="button" 
                                @click="showPass = !showPass" 
                                class="absolute right-3 top-1/2 -translate-y-1/2 text-slate-400 hover:text-slate-200 transition p-1"
                                title="Toggle password visibility">
                            <i class="fa-solid" :class="showPass ? 'fa-eye-slash' : 'fa-eye'"></i>
                        </button>
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="mt-1.5 text-xs font-semibold text-rose-400" />
                </div>

                {{-- Confirm Password --}}
                <div>
                    <label for="password_confirmation" class="block text-xs font-bold uppercase tracking-wider text-slate-300">Confirm Password</label>
                    <div class="relative mt-1.5">
                        <i class="fa-solid fa-shield-halved pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-sm text-slate-500"></i>
                        <input id="password_confirmation" 
                               name="password_confirmation" 
                               :type="showConfirm ? 'text' : 'password'" 
                               required 
                               autocomplete="new-password" 
                               placeholder="••••••••••••" 
                               class="block w-full rounded-xl border border-slate-700 bg-slate-950/80 py-3 pl-11 pr-10 text-sm text-white placeholder:text-slate-500 outline-none transition focus:border-emerald-500 focus:bg-slate-950 focus:ring-2 focus:ring-emerald-500/30">
                        <button type="button" 
                                @click="showConfirm = !showConfirm" 
                                class="absolute right-3 top-1/2 -translate-y-1/2 text-slate-400 hover:text-slate-200 transition p-1"
                                title="Toggle password visibility">
                            <i class="fa-solid" :class="showConfirm ? 'fa-eye-slash' : 'fa-eye'"></i>
                        </button>
                    </div>
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1.5 text-xs font-semibold text-rose-400" />
                </div>
            </div>

            {{-- Security Notice --}}
            <div class="flex items-start gap-3 rounded-xl border border-emerald-500/20 bg-emerald-950/30 p-3.5 text-xs text-slate-300">
                <i class="fa-solid fa-circle-check mt-0.5 text-sm text-emerald-400 shrink-0"></i>
                <p class="leading-relaxed">Your email is used for immediate credential delivery, 2FA backup codes, and active SLA replacement warranties.</p>
            </div>

            {{-- Submit Button --}}
            <button type="submit" 
                    class="group flex w-full items-center justify-center gap-2.5 rounded-xl bg-emerald-600 px-5 py-3.5 text-sm font-bold text-white shadow-lg shadow-emerald-900/40 transition hover:bg-emerald-500 hover:shadow-emerald-500/30 focus:outline-none focus:ring-4 focus:ring-emerald-500/20">
                <span>Complete Registration</span>
                <i class="fa-solid fa-arrow-right text-xs transition group-hover:translate-x-1"></i>
            </button>
        </form>

        {{-- Switch to Login --}}
        <div class="my-6 flex items-center gap-4">
            <div class="h-px flex-1 bg-slate-800"></div>
            <span class="font-mono text-xs font-semibold uppercase tracking-widest text-slate-500">ALREADY A MEMBER?</span>
            <div class="h-px flex-1 bg-slate-800"></div>
        </div>

        <a href="{{ route('login') }}" 
           class="flex w-full items-center justify-center gap-2 rounded-xl border border-slate-700 bg-slate-950/60 px-5 py-3.5 text-sm font-bold text-slate-200 transition hover:border-slate-600 hover:bg-slate-800 hover:text-white">
            <i class="fa-solid fa-lock text-xs text-emerald-400"></i>
            <span>Sign in to your account</span>
        </a>

    </div>
</x-guest-layout>
