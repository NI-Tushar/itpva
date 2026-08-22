<x-guest-layout>
    <div class="mx-auto max-w-lg">
        <div class="mb-8">
            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#e8f7ef] text-[#08A05A]"><i class="fa-solid fa-user-plus text-lg"></i></div>
            <p class="mt-6 text-xs font-black uppercase tracking-[0.3em] text-[#08A05A]">Join the marketplace</p>
            <h2 class="mt-3 text-3xl font-black tracking-tight text-slate-950 sm:text-4xl">Create your account</h2>
            <p class="mt-3 text-sm leading-7 text-slate-500">Set up your account to save your details and make every product conversation easier.</p>
        </div>

        <form method="POST" action="{{ route('register') }}" class="space-y-5">
            @csrf

            <div class="grid gap-5 sm:grid-cols-2">
                <div>
                    <label for="name" class="text-sm font-bold text-slate-700">Full name</label>
                    <div class="relative mt-2"><i class="fa-solid fa-user pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i><input id="name" name="name" type="text" value="{{ old('name') }}" required autofocus autocomplete="name" placeholder="Your name" class="block w-full rounded-xl border border-slate-200 bg-slate-50 py-3.5 pl-11 pr-4 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-[#08A05A] focus:bg-white focus:ring-4 focus:ring-[#08A05A]/10"></div>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <div>
                    <label for="email" class="text-sm font-bold text-slate-700">Email address</label>
                    <div class="relative mt-2"><i class="fa-solid fa-envelope pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i><input id="email" name="email" type="email" value="{{ old('email') }}" required autocomplete="username" placeholder="you@example.com" class="block w-full rounded-xl border border-slate-200 bg-slate-50 py-3.5 pl-11 pr-4 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-[#08A05A] focus:bg-white focus:ring-4 focus:ring-[#08A05A]/10"></div>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
            </div>

            <div>
                <label for="password" class="text-sm font-bold text-slate-700">Password</label>
                <div class="relative mt-2"><i class="fa-solid fa-key pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i><input id="password" name="password" type="password" required autocomplete="new-password" placeholder="Create a secure password" class="block w-full rounded-xl border border-slate-200 bg-slate-50 py-3.5 pl-11 pr-4 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-[#08A05A] focus:bg-white focus:ring-4 focus:ring-[#08A05A]/10"></div>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div>
                <label for="password_confirmation" class="text-sm font-bold text-slate-700">Confirm password</label>
                <div class="relative mt-2"><i class="fa-solid fa-shield-halved pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i><input id="password_confirmation" name="password_confirmation" type="password" required autocomplete="new-password" placeholder="Repeat your password" class="block w-full rounded-xl border border-slate-200 bg-slate-50 py-3.5 pl-11 pr-4 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-[#08A05A] focus:bg-white focus:ring-4 focus:ring-[#08A05A]/10"></div>
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex gap-3 rounded-xl border border-[#08A05A]/20 bg-[#e8f7ef] p-4 text-sm leading-6 text-slate-600"><i class="fa-solid fa-circle-info mt-1 text-[#08A05A]"></i><p>Use an email address you can access so you can receive account and support updates.</p></div>
            <button type="submit" class="flex w-full items-center justify-center gap-2 rounded-xl bg-[#08A05A] px-5 py-3.5 text-sm font-black text-white shadow-lg shadow-[#08A05A]/20 transition hover:bg-[#067a45] focus:outline-none focus:ring-4 focus:ring-[#08A05A]/20">Create account <i class="fa-solid fa-arrow-right text-xs"></i></button>
        </form>

        <div class="my-8 flex items-center gap-4"><div class="h-px flex-1 bg-slate-200"></div><span class="text-xs font-semibold uppercase tracking-widest text-slate-400">already a member?</span><div class="h-px flex-1 bg-slate-200"></div></div>
        <p class="text-center text-sm text-slate-500"><a href="{{ route('login') }}" class="font-black text-[#08A05A] hover:text-[#067a45]">Sign in to your account</a></p>
    </div>
</x-guest-layout>
