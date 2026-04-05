@props(['pageKey' => null])

@php
    $mainItems = [
        ['key' => 'dashboard', 'label' => 'Dashboard', 'route' => 'dashboard', 'icon' => 'dashboard'],
        ['key' => 'table', 'label' => 'Data Table', 'route' => 'table', 'icon' => 'table_chart'],
        ['key' => 'forms', 'label' => 'Forms', 'route' => 'forms', 'icon' => 'edit_note'],
        ['key' => 'ui', 'label' => 'UI Elements', 'route' => 'ui', 'icon' => 'widgets'],
        ['key' => 'icons', 'label' => 'Icons Gallery', 'route' => 'icons', 'icon' => 'auto_awesome'],
        ['key' => 'documentation', 'label' => 'Documentation', 'route' => 'documentation', 'icon' => 'description'],
    ];

    $accountItems = [
        ['key' => 'profile', 'label' => 'Profile', 'route' => 'profile', 'icon' => 'person_outline'],
        ['key' => 'settings', 'label' => 'Settings', 'route' => 'settings', 'icon' => 'settings'],
    ];

    $authItems = [
        ['key' => 'login', 'label' => 'Login', 'route' => 'login'],
        ['key' => 'register', 'label' => 'Register', 'route' => 'register'],
    ];

    $authActive = in_array($pageKey, ['login', 'register'], true);
@endphp

<aside
    class="relative sticky top-0 z-50 hidden h-screen w-64 flex-col gap-1 overflow-visible rounded-r-3xl bg-slate-50 px-4 py-8 text-sm font-medium transition-all duration-300 ease-in-out md:flex"
    data-sidebar="desktop" data-collapsed="false">
    <button
        class="absolute -right-4 top-5 z-[60] flex h-8 w-8 items-center justify-center rounded-full border border-slate-200 bg-white shadow-md transition-all duration-300 group hover:bg-slate-50"
        data-sidebar-toggle type="button">
        <span
            class="material-symbols-outlined text-lg text-primary transition-transform duration-300 group-hover:scale-110"
            data-sidebar-toggle-icon>chevron_left</span>
    </button>

    <div class="mb-8 flex items-center gap-3 px-2">
        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-primary text-white">
            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">dashboard</span>
        </div>
        <div>
            <h1
                class="sidebar-text text-lg font-extrabold leading-tight text-indigo-600 transition-opacity duration-300">
                CODETA Admin</h1>
            <p
                class="sidebar-text text-[10px] uppercase tracking-widest text-slate-400 transition-opacity duration-300">
                Enterprise Edition</p>
        </div>
    </div>

    <nav class="flex flex-1 flex-col gap-4">
        <div class="flex flex-col gap-0.5">
            <p
                class="sidebar-section-label px-4 pb-2 text-[10px] font-black uppercase tracking-[0.28em] text-slate-400">
                Main</p>
            @foreach ($mainItems as $item)
                <a href="{{ route($item['route']) }}" title="{{ $item['label'] }}" @class([
                    'desktop-nav-item sidebar-tooltip-group relative flex items-center gap-3 rounded-xl px-4 py-2 transition-all duration-300 ease-in-out',
                    'nav-link-active' => $pageKey === $item['key'],
                    'text-slate-500 hover:bg-slate-100 hover:text-indigo-600' =>
                        $pageKey !== $item['key'],
                ])>
                    <span class="material-symbols-outlined">{{ $item['icon'] }}</span>
                    <span class="sidebar-text transition-opacity duration-300">{{ $item['label'] }}</span>
                    <span class="sidebar-tooltip">{{ $item['label'] }}</span>
                </a>
            @endforeach
        </div>

        <div class="flex flex-col gap-0.5">
            <p
                class="sidebar-section-label px-4 pb-2 text-[10px] font-black uppercase tracking-[0.28em] text-slate-400">
                Account</p>
            @foreach ($accountItems as $item)
                <a href="{{ route($item['route']) }}" title="{{ $item['label'] }}" @class([
                    'desktop-nav-item sidebar-tooltip-group relative flex items-center gap-3 rounded-xl px-4 py-2 transition-all duration-300 ease-in-out',
                    'nav-link-active' => $pageKey === $item['key'],
                    'text-slate-500 hover:bg-slate-100 hover:text-indigo-600' =>
                        $pageKey !== $item['key'],
                ])>
                    <span class="material-symbols-outlined">{{ $item['icon'] }}</span>
                    <span class="sidebar-text transition-opacity duration-300">{{ $item['label'] }}</span>
                    <span class="sidebar-tooltip">{{ $item['label'] }}</span>
                </a>
            @endforeach
        </div>

        <div class="flex flex-col gap-0.5">
            <p
                class="sidebar-section-label px-4 pb-2 text-[10px] font-black uppercase tracking-[0.28em] text-slate-400">
                System</p>
            <button @class([
                'desktop-nav-item sidebar-tooltip-group relative flex w-full items-center justify-between rounded-xl px-4 py-2 transition-all duration-300 ease-in-out',
                'bg-indigo-50/50 text-indigo-700' => $authActive,
                'text-slate-500 hover:bg-slate-100 hover:text-indigo-600' => !$authActive,
            ]) data-auth-toggle="desktop" data-keep-between="true"
                title="Authentication" type="button">
                <span class="flex items-center gap-3">
                    <span class="material-symbols-outlined">lock</span>
                    <span class="sidebar-text transition-opacity duration-300">Authentication</span>
                </span>
                <span class="material-symbols-outlined sidebar-text text-xs transition-transform duration-300"
                    data-auth-chevron="desktop"
                    style="{{ $authActive ? 'transform: rotate(180deg);' : '' }}">expand_more</span>
                <span class="sidebar-tooltip">Authentication</span>
            </button>

            <div @class([
                'flex flex-col gap-0.5 overflow-hidden pl-9 pr-2',
                'hidden' => !$authActive,
            ]) data-auth-menu="desktop">
                @foreach ($authItems as $item)
                    <a href="{{ route($item['route']) }}" @class([
                        'rounded-lg px-4 py-2 text-xs transition-all',
                        'bg-indigo-50 text-indigo-700' => $pageKey === $item['key'],
                        'text-slate-500 hover:bg-slate-100 hover:text-indigo-600' =>
                            $pageKey !== $item['key'],
                    ])>
                        {{ $item['label'] }}
                    </a>
                @endforeach
            </div>
        </div>
    </nav>

    <div class="mt-auto px-2">
        <a class="desktop-nav-item sidebar-tooltip-group relative flex items-center gap-3 rounded-xl px-4 py-2 text-slate-500 transition-all hover:bg-rose-50 hover:text-error"
            href="{{ route('login') }}" title="Log Out">
            <span class="material-symbols-outlined">logout</span>
            <span class="sidebar-text transition-opacity duration-300">Log Out</span>
            <span class="sidebar-tooltip">Log Out</span>
        </a>
    </div>
</aside>

<div class="pointer-events-none fixed inset-0 z-50 lg:hidden" data-sidebar="mobile">
    <div class="absolute inset-0 bg-slate-900/60 opacity-0 transition-opacity duration-300" data-mobile-overlay></div>
    <aside
        class="absolute left-0 top-0 flex h-full w-72 -translate-x-full flex-col gap-1 bg-white p-6 shadow-2xl transition-transform duration-300"
        data-mobile-content>
        <div class="mb-8 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-primary text-white">
                    <span class="material-symbols-outlined">dashboard</span>
                </div>
                <span class="headline-text text-lg font-extrabold text-indigo-600">CODETA Admin</span>
            </div>
            <button class="p-2 text-slate-400 transition-colors hover:text-slate-600" data-mobile-drawer-close
                type="button">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>

        <nav class="space-y-4">
            <div class="space-y-1">
                <p class="px-4 pb-2 text-[10px] font-black uppercase tracking-[0.28em] text-slate-400">Main</p>
                @foreach ($mainItems as $item)
                    <a href="{{ route($item['route']) }}" data-mobile-nav-link @class([
                        'flex items-center gap-3 rounded-xl px-4 py-3 font-medium transition-all duration-300',
                        'mobile-nav-link-active' => $pageKey === $item['key'],
                        'text-slate-500 hover:bg-slate-50' => $pageKey !== $item['key'],
                    ])>
                        <span class="material-symbols-outlined">{{ $item['icon'] }}</span>
                        {{ $item['label'] }}
                    </a>
                @endforeach
            </div>

            <div class="space-y-1">
                <p class="px-4 pb-2 text-[10px] font-black uppercase tracking-[0.28em] text-slate-400">Account</p>
                @foreach ($accountItems as $item)
                    <a href="{{ route($item['route']) }}" data-mobile-nav-link @class([
                        'flex items-center gap-3 rounded-xl px-4 py-3 font-medium transition-all duration-300',
                        'mobile-nav-link-active' => $pageKey === $item['key'],
                        'text-slate-500 hover:bg-slate-50' => $pageKey !== $item['key'],
                    ])>
                        <span class="material-symbols-outlined">{{ $item['icon'] }}</span>
                        {{ $item['label'] }}
                    </a>
                @endforeach
            </div>

            <div class="space-y-1">
                <p class="px-4 pb-2 text-[10px] font-black uppercase tracking-[0.28em] text-slate-400">System</p>
                <button
                    class="flex w-full items-center justify-between rounded-xl px-4 py-3 font-medium text-slate-500 transition-all hover:bg-slate-50"
                    data-auth-toggle="mobile" type="button">
                    <span class="flex items-center gap-3">
                        <span class="material-symbols-outlined">lock</span>
                        Authentication
                    </span>
                    <span class="material-symbols-outlined text-xs transition-transform duration-300"
                        data-auth-chevron="mobile"
                        style="{{ $authActive ? 'transform: rotate(180deg);' : '' }}">expand_more</span>
                </button>

                <div @class([
                    'flex flex-col gap-1 overflow-hidden pl-11 pr-2',
                    'hidden' => !$authActive,
                ]) data-auth-menu="mobile">
                    @foreach ($authItems as $item)
                        <a href="{{ route($item['route']) }}" data-mobile-nav-link @class([
                            'rounded-lg px-4 py-2 text-sm transition-all',
                            'mobile-nav-link-active' => $pageKey === $item['key'],
                            'text-slate-500 hover:bg-slate-50' => $pageKey !== $item['key'],
                        ])>
                            {{ $item['label'] }}
                        </a>
                    @endforeach
                </div>
            </div>
        </nav>

        <div class="mt-auto border-t border-slate-100 pt-6">
            <div class="flex items-center gap-3 px-4 py-3">
                <img class="h-10 w-10 rounded-full object-cover"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuD8mHnfStfoOBdfyAhdtN9NDEE5KtmAX4WdP8ObBOLmUOgP_8039jNGrCihb2rq_8HAczDKRHzHusyHOvkzHXxEzBwGhydllANEkL9lDYbZHvfjyUqqmuZEtMNgZt2rG24ZFyS3mtWxap5y19AVK4bvOdkR3JQiAzulmONTq6ltnhPBtDoU-yFlB1kNCWbnsjaXQC5uYxdBpfXhkf3w3MJ7-DFP-3h4TJ563f3rII0HL2xobHezKGKXmzwnrNTDFCDyOd1frMoXtkb3"
                    alt="Profile avatar">
                <div>
                    <p class="text-sm font-bold leading-none text-on-surface">Erwin, S.Kom</p>
                    <p class="text-[11px] text-on-surface-variant">Sign out</p>
                </div>
            </div>
        </div>
    </aside>
</div>
