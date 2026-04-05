@extends('layouts.auth')

@section('body_class',
    'bg-surface text-on-surface min-h-screen flex items-center justify-center editorial-gradient
    p-6')

@section('content')
    <main class="w-full max-w-[520px]">
        <div class="mb-12 flex flex-col items-center justify-center space-y-4">
            <div class="flex items-center space-x-3">
                <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-primary shadow-lg">
                    <span class="material-symbols-outlined text-white"
                        style="font-variation-settings: 'FILL' 1;">lock_reset</span>
                </div>
                <h1 class="headline-text text-3xl font-extrabold tracking-tight text-indigo-600">CODETA Admin</h1>
            </div>
            <p class="max-w-[360px] text-center text-sm text-on-surface-variant">
                Recover access to your workspace securely. We will send a reset link to the email tied to your account.
            </p>
        </div>

        <div
            class="relative overflow-hidden rounded-2xl border border-white/50 bg-surface-container-lowest p-10 shadow-[0_20px_50px_rgba(53,37,205,0.08)]">
            <form class="space-y-6" id="forgot-password-form" data-redirect-url="{{ route('login') }}">
                <div class="space-y-1">
                    <h2 class="headline-text text-xl font-bold tracking-tight text-on-surface">Forgot Password</h2>
                    <p class="text-sm text-on-surface-variant">
                        Enter your account email and we will send a password reset link.
                    </p>
                </div>

                <div class="space-y-2">
                    <label class="block text-sm font-semibold text-on-surface-variant" for="reset_email">Email Address</label>
                    <input
                        class="h-12 w-full rounded-xl border-none bg-surface-container-low px-4 text-on-surface transition-all focus:ring-2 focus:ring-primary/20"
                        id="reset_email" placeholder="admin@codeta.id" type="email" value="admin@codeta.id" />
                </div>

                <button
                    class="flex h-14 w-full items-center justify-center space-x-2 rounded-xl bg-primary text-white shadow-lg shadow-indigo-200 transition-all hover:scale-[1.02] hover:shadow-indigo-300 active:scale-[0.98]"
                    type="submit">
                    <span class="font-headline font-bold">Send Reset Link</span>
                </button>
            </form>

            <div class="absolute -bottom-10 -right-10 h-40 w-40 rounded-full bg-primary/5 blur-3xl"></div>
            <div class="absolute -left-10 -top-10 h-32 w-32 rounded-full bg-secondary/5 blur-3xl"></div>
        </div>

        <div class="mt-10 text-center space-y-4">
            <p class="text-sm font-medium text-on-surface-variant">
                Remembered your password?
                <a class="ml-1 font-bold text-primary decoration-2 underline-offset-4 hover:underline"
                    href="{{ route('login') }}">Back to login</a>
            </p>
            <div class="flex items-center justify-center space-x-6">
                <a class="text-xs text-on-surface-variant transition-colors hover:text-on-surface" href="#">Privacy Policy</a>
                <span class="h-1.5 w-1.5 rounded-full bg-slate-200"></span>
                <a class="text-xs text-on-surface-variant transition-colors hover:text-on-surface" href="#">Support</a>
            </div>
        </div>
    </main>
@endsection
