<x-guest-layout>
    <div class="mx-auto max-w-md">
        <div class="mb-8">
            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#e8f7ef] text-[#08A05A]"><i class="fa-solid fa-lock text-lg"></i></div>
            <p class="mt-6 text-xs font-black uppercase tracking-[0.3em] text-[#08A05A]">Member access</p>
            <h2 class="mt-3 text-3xl font-black tracking-tight text-slate-950 sm:text-4xl">Welcome back</h2>
            <p class="mt-3 text-sm leading-7 text-slate-500">Sign in to continue managing your ITPVA marketplace journey.</p>
        </div>

        <x-auth-session-status class="mb-5" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}" class="space-y-5">
            @csrf

            <div>
                <label for="email" class="text-sm font-bold text-slate-700">Email address</label>
                <div class="relative mt-2">
                    <i class="fa-solid fa-envelope pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i>
                    <input id="email" name="email" type="email" value="{{ old('email') }}" required autofocus autocomplete="username" placeholder="you@example.com" class="block w-full rounded-xl border border-slate-200 bg-slate-50 py-3.5 pl-11 pr-4 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-[#08A05A] focus:bg-white focus:ring-4 focus:ring-[#08A05A]/10">
                </div>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div>
                <div class="flex items-center justify-between gap-3"><label for="password" class="text-sm font-bold text-slate-700">Password</label>@if (Route::has('password.request'))<a href="{{ route('password.request') }}" class="text-xs font-bold text-[#08A05A] hover:text-[#067a45]">Forgot password?</a>@endif</div>
                <div class="relative mt-2">
                    <i class="fa-solid fa-key pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i>
                    <input id="password" name="password" type="password" required autocomplete="current-password" placeholder="Enter your password" class="block w-full rounded-xl border border-slate-200 bg-slate-50 py-3.5 pl-11 pr-4 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-[#08A05A] focus:bg-white focus:ring-4 focus:ring-[#08A05A]/10">
                </div>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <label for="remember_me" class="flex cursor-pointer items-center gap-3 text-sm text-slate-500">
                <input id="remember_me" name="remember" type="checkbox" class="h-4 w-4 rounded border-slate-300 text-[#08A05A] shadow-sm focus:ring-[#08A05A]">
                <span>Keep me signed in</span>
            </label>

            <button type="submit" class="flex w-full items-center justify-center gap-2 rounded-xl bg-[#08A05A] px-5 py-3.5 text-sm font-black text-white shadow-lg shadow-[#08A05A]/20 transition hover:bg-[#067a45] focus:outline-none focus:ring-4 focus:ring-[#08A05A]/20">Sign in <i class="fa-solid fa-arrow-right text-xs"></i></button>
        </form>

        <div class="my-8 flex items-center gap-4"><div class="h-px flex-1 bg-slate-200"></div><span class="text-xs font-semibold uppercase tracking-widest text-slate-400">or</span><div class="h-px flex-1 bg-slate-200"></div></div>
        <p class="text-center text-sm text-slate-500">New to ITPVA? <a href="{{ route('register') }}" class="font-black text-[#08A05A] hover:text-[#067a45]">Create an account</a></p>
    </div>
</x-guest-layout>
