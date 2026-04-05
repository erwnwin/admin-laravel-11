@extends('layouts.auth')

@section('body_class', 'bg-surface text-on-surface min-h-screen flex items-center justify-center p-6 tonal-gradient')

@section('content')
    <main class="w-full max-w-3xl">
        <div
            class="bg-surface-container-lowest rounded-2xl shadow-[0_20px_50px_rgba(53,37,205,0.08)] overflow-hidden border border-white/50">
            <!-- Header Section -->
            <div class="px-10 pt-12 pb-8 text-center">
                <div class="inline-flex items-center justify-center mb-6">
                    <div class="w-10 h-10 bg-primary rounded-xl flex items-center justify-center shadow-lg">
                        <span class="material-symbols-outlined text-white"
                            style="font-variation-settings: 'FILL' 1;">dashboard</span>
                    </div>
                    <span class="ml-3 text-2xl font-extrabold tracking-tight text-indigo-600 headline-text">CODETA
                        Admin</span>
                </div>
                <h1 class="text-3xl font-extrabold text-on-surface tracking-tight mb-2 headline-text">Create Account</h1>
                <p class="text-on-surface-variant font-medium">Join the premium enterprise editorial workspace.</p>
            </div>
            <!-- Registration Form -->
            <form class="px-10 pb-12 space-y-6" id="register-form" data-redirect-url="{{ route('login') }}">

                <!-- Input Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-6">
                    <div class="space-y-2">
                        <label class="text-sm font-semibold text-on-surface-variant ml-1" for="full_name">Full Name</label>
                        <input
                            class="w-full bg-surface-container-low border-none rounded-xl px-4 py-3 text-on-surface focus:ring-2 focus:ring-primary/20 transition-all"
                            id="full_name" placeholder="Alex Rivers" required="" type="text" />
                    </div>
                    <div class="space-y-2">
                        <label class="text-sm font-semibold text-on-surface-variant ml-1" for="email">Email
                            Address</label>
                        <input
                            class="w-full bg-surface-container-low border-none rounded-xl px-4 py-3 text-on-surface focus:ring-2 focus:ring-primary/20 transition-all"
                            id="email" placeholder="alex@codeta.id" required="" type="email" />
                    </div>
                    <div class="space-y-2 relative">
                        <label class="text-sm font-semibold text-on-surface-variant ml-1" for="password">Password</label>
                        <div class="relative">
                            <input
                                class="w-full bg-surface-container-low border-none rounded-xl px-4 py-3 text-on-surface focus:ring-2 focus:ring-primary/20 transition-all"
                                id="password" placeholder="••••••••" required="" type="password" />
                            <button
                                class="absolute right-3 top-3 text-slate-400 hover:text-primary transition-colors focus:outline-none"
                                id="toggle-password" type="button">
                                <span class="material-symbols-outlined pointer-events-none text-xl">visibility</span>
                            </button>
                        </div>
                    </div>
                    <div class="space-y-2 relative">
                        <label class="text-sm font-semibold text-on-surface-variant ml-1" for="confirm_password">Confirm
                            Password</label>
                        <div class="relative">
                            <input
                                class="w-full bg-surface-container-low border-none rounded-xl px-4 py-3 text-on-surface focus:ring-2 focus:ring-primary/20 transition-all"
                                id="confirm_password" placeholder="••••••••" required="" type="password" />
                            <button
                                class="absolute right-3 top-3 text-slate-400 hover:text-primary transition-colors focus:outline-none"
                                id="toggle-confirm-password" type="button">
                                <span class="material-symbols-outlined pointer-events-none text-xl">visibility</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Terms -->
                <div class="flex items-start space-x-3 pt-2">
                    <input class="h-4 w-4 text-primary focus:ring-primary/20 border-slate-300 rounded mt-1" id="terms"
                        required="" type="checkbox" />
                    <label class="text-xs text-on-surface-variant font-medium leading-relaxed" for="terms">
                        I agree to the <a class="text-primary font-bold hover:underline" href="#">Terms of Service</a>
                        and <a class="text-primary font-bold hover:underline" href="#">Privacy Policy</a>
                    </label>
                </div>
                <!-- Submit -->
                <button
                    class="w-full h-14 bg-primary text-white font-headline font-bold rounded-xl shadow-lg shadow-indigo-200 hover:shadow-indigo-300 hover:scale-[1.02] active:scale-[0.98] transition-all flex items-center justify-center space-x-2"
                    type="submit">
                    <span>Create Account</span>
                    <span class="material-symbols-outlined text-[18px]">how_to_reg</span>
                </button>
                <!-- Footer Link -->
                <div class="text-center pt-6">
                    <p class="text-sm text-on-surface-variant font-medium">
                        Already have an account?
                        <a class="text-primary font-bold hover:underline decoration-2 underline-offset-4 ml-1"
                            href="{{ route('login') }}">Log in here</a>
                    </p>
                </div>
            </form>
        </div>
        <!-- Minimalist Footer -->
        <footer class="mt-8 text-center text-[10px] text-slate-400 font-bold uppercase tracking-widest">
            © 2026 CODETA Template Admin. All rights reserved.
        </footer>
    </main>
@endsection
