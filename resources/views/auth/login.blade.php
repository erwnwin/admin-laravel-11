@extends('layouts.auth')

@section('body_class',
    'bg-surface text-on-surface min-h-screen flex items-center justify-center editorial-gradient
    p-6')

@section('content')
    <main class="w-full max-w-[480px]">
        <!-- Brand Header -->
        <div class="mb-12 flex flex-col items-center justify-center space-y-4">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-primary rounded-xl flex items-center justify-center shadow-lg">
                    <span class="material-symbols-outlined text-white"
                        style="font-variation-settings: 'FILL' 1;">dashboard</span>
                </div>
                <h1 class="headline-text text-3xl font-extrabold tracking-tight text-indigo-600">CODETA Admin</h1>
            </div>
            <p class="text-on-surface-variant text-center max-w-[320px] text-sm">
                CODETA Template Admin for high-performance enterprise management and data clarity.
            </p>
        </div>
        <!-- Login Card -->
        <div
            class="bg-surface-container-lowest rounded-2xl shadow-[0_20px_50px_rgba(53,37,205,0.08)] p-10 relative overflow-hidden border border-white/50">
            <form class="space-y-6" id="login-form" data-redirect-url="{{ route('dashboard') }}">
                <div class="space-y-1">
                    <h2 class="headline-text text-xl font-bold text-on-surface tracking-tight">Welcome Back</h2>
                    <p class="text-on-surface-variant text-sm">Please sign in to access your dashboard.</p>
                </div>
                <div class="space-y-2">
                    <label class="block text-sm font-semibold text-on-surface-variant" for="email">Email Address</label>
                    <input
                        class="w-full h-12 px-4 bg-surface-container-low rounded-xl border-none focus:ring-2 focus:ring-primary/20 transition-all text-on-surface"
                        id="email" placeholder="admin@codeta.id" type="email" value="admin@codeta.id" />
                </div>
                <div class="space-y-2">
                    <div class="flex justify-between items-center">
                        <label class="block text-sm font-semibold text-on-surface-variant" for="password">Password</label>
                        <a class="text-xs font-bold text-primary hover:text-indigo-700 transition-colors"
                            href="{{ route('password.request') }}">Forgot password?</a>
                    </div>
                    <div class="relative">
                        <input
                            class="w-full h-12 px-4 bg-surface-container-low rounded-xl border-none focus:ring-2 focus:ring-primary/20 transition-all text-on-surface"
                            id="password" placeholder="••••••••" type="password" value="password123" />
                        <button
                            class="absolute right-3 top-3 text-slate-400 cursor-pointer text-xl hover:text-primary transition-colors focus:outline-none"
                            id="toggle-password" type="button">
                            <span class="material-symbols-outlined pointer-events-none">visibility</span>
                        </button>
                    </div>
                </div>
                <div class="flex items-center">
                    <input class="w-4 h-4 rounded border-slate-300 text-primary focus:ring-primary/20" id="remember"
                        type="checkbox" />
                    <label class="ml-3 text-sm text-on-surface-variant font-medium cursor-pointer" for="remember">Keep me
                        signed in</label>
                </div>
                <button
                    class="w-full h-14 bg-primary text-white font-headline font-bold rounded-xl shadow-lg shadow-indigo-200 hover:shadow-indigo-300 hover:scale-[1.02] active:scale-[0.98] transition-all flex items-center justify-center space-x-2"
                    type="submit">
                    <span>Login</span>
                    {{-- <span class="material-symbols-outlined text-[18px]">arrow_forward</span> --}}
                </button>
            </form>
            <!-- Decorative Accents -->
            <div class="absolute -bottom-10 -right-10 w-40 h-40 bg-primary/5 rounded-full blur-3xl"></div>
            <div class="absolute -top-10 -left-10 w-32 h-32 bg-secondary/5 rounded-full blur-3xl"></div>
        </div>
        <!-- Footer links -->
        <div class="mt-10 text-center space-y-4">
            <p class="text-on-surface-variant text-sm font-medium">
                Don't have an account yet?
                <a class="text-primary font-bold hover:underline decoration-2 underline-offset-4 ml-1"
                    href="{{ route('register') }}">Create an account</a>
            </p>
            <div class="flex items-center justify-center space-x-6">
                <a class="text-on-surface-variant text-xs hover:text-on-surface transition-colors" href="#">Privacy
                    Policy</a>
                <span class="w-1.5 h-1.5 bg-slate-200 rounded-full"></span>
                <a class="text-on-surface-variant text-xs hover:text-on-surface transition-colors" href="#">Terms of
                    Use</a>
            </div>
        </div>
    </main>
@endsection
