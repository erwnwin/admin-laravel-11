@extends('layouts.admin')

@section('content')
    <div class="p-6 md:p-10 max-w-full w-full">
        <header class="mb-10 flex flex-col md:flex-row md:items-end justify-between gap-6">
            <div>
                <h2 class="text-3xl md:text-4xl font-extrabold headline-text tracking-tight text-on-surface mb-2">UI
                    Foundations</h2>
                <p class="text-on-surface-variant max-w-lg text-lg">A gallery of atomic elements and composite patterns from
                    the CODETA design system.</p>
            </div>
            <div class="flex gap-3">
                <div
                    class="px-4 py-2 bg-surface-container-low rounded-xl flex items-center gap-2 text-sm font-semibold text-on-surface-variant">
                    <span class="material-symbols-outlined text-lg" data-icon="widgets">widgets</span>
                    System v2.4
                </div>
            </div>
        </header>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Color Palette Section -->
            <section class="lg:col-span-3 bg-surface-container-low rounded-2xl p-8 mb-4">
                <h3
                    class="text-xs font-bold uppercase tracking-[0.2em] text-on-surface-variant mb-6 flex items-center gap-2">
                    <span class="w-4 h-px bg-outline-variant"></span>
                    Strategic Tone Palette
                </h3>
                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
                    <div class="space-y-2">
                        <div class="h-20 w-full bg-primary rounded-xl shadow-lg shadow-primary/20"></div>
                        <p class="text-xs font-bold text-center">Primary</p>
                    </div>
                    <div class="space-y-2">
                        <div class="h-20 w-full bg-secondary rounded-xl"></div>
                        <p class="text-xs font-bold text-center">Secondary</p>
                    </div>
                    <div class="space-y-2">
                        <div class="h-20 w-full bg-tertiary rounded-xl"></div>
                        <p class="text-xs font-bold text-center">Tertiary</p>
                    </div>
                    <div class="space-y-2">
                        <div class="h-20 w-full bg-surface-container-high rounded-xl"></div>
                        <p class="text-xs font-bold text-center">Container High</p>
                    </div>
                    <div class="space-y-2">
                        <div class="h-20 w-full bg-error rounded-xl"></div>
                        <p class="text-xs font-bold text-center">Error</p>
                    </div>
                    <div class="space-y-2">
                        <div class="h-20 w-full bg-outline rounded-xl"></div>
                        <p class="text-xs font-bold text-center">Outline</p>
                    </div>
                </div>
            </section>
            <!-- Buttons & Interactive -->
            <section
                class="bg-surface-container-lowest rounded-2xl p-8 shadow-[0_10px_40px_rgba(0,0,0,0.02)] border border-surface-container/50">
                <h3 class="text-xl font-headline font-bold text-on-surface mb-8 flex justify-between items-center">
                    Action Triggers
                    <span class="material-symbols-outlined text-primary text-2xl" data-icon="mouse">mouse</span>
                </h3>
                <div class="flex flex-col gap-4">
                    <!-- Primary -->
                    <button
                        class="w-full py-4 bg-primary text-white rounded-xl font-bold shadow-xl shadow-indigo-100 hover:scale-[1.02] active:scale-[0.98] transition-all">
                        Filled Primary
                    </button>
                    <!-- Tonal -->
                    <button
                        class="w-full py-4 bg-primary-container text-on-primary-container rounded-xl font-bold hover:bg-slate-200 transition-all">
                        Tonal Secondary
                    </button>
                    <!-- Outlined -->
                    <button
                        class="w-full py-4 border-2 border-outline-variant text-on-surface rounded-xl font-bold hover:bg-surface-container-low transition-all">
                        Ghost Outline
                    </button>
                    <!-- Loading States Showcase -->
                    <div class="flex flex-col gap-3 mt-4 pt-4 border-t border-slate-100 dark:border-slate-800">
                        <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest pl-1">Interactive Loading
                            States</p>
                        <button
                            class="w-full py-4 bg-primary text-white rounded-xl font-bold transition-all flex items-center justify-center gap-3 group active:scale-95"
                            onclick="this.setAttribute('data-original', this.innerHTML); this.classList.add('opacity-80', 'pointer-events-none'); this.innerHTML='<span class=\'material-symbols-outlined animate-spin text-xl\'>sync</span> Processing...'; setTimeout(() => { this.classList.remove('opacity-80', 'pointer-events-none'); this.innerHTML=this.getAttribute('data-original'); }, 2000)">
                            <span class="material-symbols-outlined" data-icon="send">send</span>
                            Click to Load
                        </button>
                        <button
                            class="w-full py-4 bg-indigo-50 text-indigo-700 rounded-xl font-bold transition-all flex items-center justify-center gap-3 overflow-hidden relative group active:scale-95"
                            onclick="this.classList.add('pointer-events-none'); this.querySelector('.progress-bar').style.width='100%'; setTimeout(() => { this.classList.remove('pointer-events-none'); this.querySelector('.progress-bar').style.width='0'; }, 2000)">
                            <div
                                class="progress-bar absolute bottom-0 left-0 h-1 bg-primary w-0 transition-all duration-[2000ms] ease-linear">
                            </div>
                            Progress Animation
                        </button>
                        <button
                            class="w-full py-4 bg-surface-container-highest text-on-surface rounded-xl font-bold transition-all flex items-center justify-center gap-2 group active:scale-95"
                            onclick="this.setAttribute('data-original', this.innerHTML); this.classList.add('pointer-events-none'); this.innerHTML='<div class=\'flex gap-1\'><div class=\'w-2 h-2 bg-primary rounded-full animate-bounce\'></div><div class=\'w-2 h-2 bg-primary rounded-full animate-bounce [animation-delay:0.2s]\'></div><div class=\'w-2 h-2 bg-primary rounded-full animate-bounce [animation-delay:0.4s]\'></div></div>'; setTimeout(() => { this.classList.remove('pointer-events-none'); this.innerHTML=this.getAttribute('data-original'); }, 2000)">
                            Bouncing Dots
                        </button>
                    </div>
                    <!-- Error -->
                    <button
                        class="w-full py-4 bg-error-container text-error rounded-xl font-bold hover:bg-red-100 transition-all flex items-center justify-center gap-2">
                        <span class="material-symbols-outlined text-lg" data-icon="delete">delete</span>
                        Destructive Action
                    </button>
                </div>
            </section>
            <!-- Status Badges -->
            <section
                class="bg-surface-container-lowest rounded-2xl p-8 shadow-[0_10px_40px_rgba(0,0,0,0.02)] border border-surface-container/50">
                <h3 class="text-xl font-headline font-bold text-on-surface mb-8 flex justify-between items-center">
                    Status Logic
                    <span class="material-symbols-outlined text-primary text-2xl"
                        data-icon="new_releases">new_releases</span>
                </h3>
                <div class="space-y-6">
                    <div class="flex items-center justify-between">
                        <span class="text-sm font-semibold">User Status</span>
                        <span
                            class="px-3 py-1 bg-emerald-100 text-emerald-800 rounded-full text-[10px] font-black uppercase tracking-widest">Active</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-sm font-semibold">Risk Rating</span>
                        <span
                            class="px-3 py-1 bg-amber-100 text-amber-800 rounded-full text-[10px] font-black uppercase tracking-widest">Medium</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-sm font-semibold">API Health</span>
                        <span
                            class="px-3 py-1 bg-indigo-100 text-indigo-700 rounded-full text-[10px] font-black uppercase tracking-widest">Stable</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-sm font-semibold">Sync Errors</span>
                        <span
                            class="px-3 py-1 bg-red-100 text-red-700 rounded-full text-[10px] font-black uppercase tracking-widest">High</span>
                    </div>
                    <hr class="border-surface-container" />
                    <div class="grid grid-cols-2 gap-4 pt-2">
                        <button class="text-xs font-bold text-primary flex items-center gap-1">
                            <span class="material-symbols-outlined text-sm" data-icon="settings">settings</span>
                            Configure States
                        </button>
                        <button class="text-xs font-bold text-on-surface-variant flex items-center gap-1">
                            <span class="material-symbols-outlined text-sm" data-icon="download">download</span>
                            Export Definitions
                        </button>
                    </div>
                </div>
            </section>
            <!-- Cards & Surfaces -->
            <section
                class="bg-surface-container-lowest rounded-2xl p-8 shadow-[0_10px_40px_rgba(0,0,0,0.02)] border border-surface-container/50">
                <h3 class="text-xl font-headline font-bold text-on-surface mb-8 flex justify-between items-center">
                    Surface Layering
                    <span class="material-symbols-outlined text-primary text-2xl" data-icon="layers">layers</span>
                </h3>
                <div class="space-y-4">
                    <div class="p-4 bg-surface-container-low rounded-xl border border-surface-container">
                        <p class="text-xs font-bold text-on-surface-variant mb-1 uppercase tracking-tighter">Surface-Low</p>
                        <p class="text-sm">Standard content container.</p>
                    </div>
                    <div class="p-4 bg-surface-container-high rounded-xl border border-surface-container-highest">
                        <p class="text-xs font-bold text-on-surface-variant mb-1 uppercase tracking-tighter">Surface-High
                        </p>
                        <p class="text-sm">Prominent feature card.</p>
                    </div>
                    <div class="p-4 bg-indigo-50 rounded-xl border border-indigo-100">
                        <p class="text-xs font-bold text-primary mb-1 uppercase tracking-tighter">Surface-Tint</p>
                        <p class="text-sm">Active contextual highlight.</p>
                    </div>
                </div>
            </section>
            <!-- Typography -->
            <section
                class="lg:col-span-2 bg-surface-container-lowest rounded-2xl p-8 shadow-[0_10px_40px_rgba(0,0,0,0.02)] border border-surface-container/50">
                <h3 class="text-xl font-headline font-bold text-on-surface mb-8">Editorial Typography</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="space-y-6">
                        <div>
                            <p class="text-[10px] font-bold text-slate-400 mb-2 uppercase">Heading 1 / Manrope 800</p>
                            <h1 class="text-4xl font-headline font-extrabold tracking-tight">The Digital Admin</h1>
                        </div>
                        <div>
                            <p class="text-[10px] font-bold text-slate-400 mb-2 uppercase">Body Text / Inter 400</p>
                            <p class="text-on-surface-variant leading-relaxed">
                                Designed for clarity, efficiency, and speed. Our typography leverages open-source fonts
                                tailored for high-density enterprise data interfaces.
                            </p>
                        </div>
                    </div>
                    <div class="space-y-6">
                        <div class="p-6 bg-surface-container rounded-xl border-l-4 border-primary">
                            <span class="material-symbols-outlined text-primary text-3xl mb-2"
                                data-icon="format_quote">format_quote</span>
                            <p class="italic text-on-surface font-headline font-medium leading-relaxed">
                                "A well-structured design system is the heartbeat of a high-performance organization."
                            </p>
                        </div>
                        <div class="flex gap-4">
                            <div class="flex-1">
                                <p class="text-[10px] font-bold text-slate-400 mb-1 uppercase">Link Style</p>
                                <a class="text-primary font-bold hover:underline" href="#">View full
                                    documentation</a>
                            </div>
                            <div class="flex-1">
                                <p class="text-[10px] font-bold text-slate-400 mb-1 uppercase">Label Style</p>
                                <span class="text-xs font-black uppercase text-on-surface-variant">System-ID-2024</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- NEW: Interactive Primitives (Toggles, Checkboxes, Radios) -->
            <section class="lg:col-span-3 bg-surface-container-low rounded-3xl p-10 border border-surface-container">
                <div class="flex flex-col md:flex-row md:items-center justify-between mb-10 gap-4">
                    <div>
                        <h3 class="text-2xl font-headline font-black text-on-surface tracking-tight">Interactive Primitives
                        </h3>
                        <p class="text-on-surface-variant text-sm mt-1">Fully functional, animated form controls with
                            custom branding.</p>
                    </div>
                    <div class="flex items-center gap-2">
                        <span
                            class="px-3 py-1 bg-primary/10 text-primary text-[10px] font-bold rounded-lg uppercase tracking-wider">Production
                            Ready</span>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                    <!-- Toggles Column -->
                    <div class="space-y-6">
                        <p class="text-xs font-black uppercase tracking-widest text-slate-400 mb-2">Switch Toggles</p>
                        <div class="flex flex-col gap-6">
                            <label class="flex items-center justify-between group cursor-pointer">
                                <span class="text-sm font-semibold text-on-surface">Cloud Synchronization</span>
                                <div class="relative">
                                    <input class="sr-only peer" type="checkbox" />
                                    <div
                                        class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary">
                                    </div>
                                </div>
                            </label>
                            <label class="flex items-center justify-between group cursor-pointer">
                                <span class="text-sm font-semibold text-on-surface">Auto-save Drafts</span>
                                <div class="relative">
                                    <input checked="" class="sr-only peer" type="checkbox" />
                                    <div
                                        class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-emerald-500">
                                    </div>
                                </div>
                            </label>
                            <label
                                class="flex items-center justify-between group cursor-pointer opacity-50 cursor-not-allowed">
                                <span class="text-sm font-semibold text-on-surface">Edge Computing (Disabled)</span>
                                <div class="relative">
                                    <input disabled="" class="sr-only peer" type="checkbox" />
                                    <div class="w-11 h-6 bg-slate-200 rounded-full peer-checked:bg-primary"></div>
                                </div>
                            </label>
                        </div>
                    </div>
                    <!-- Checkboxes Column -->
                    <div class="space-y-6">
                        <p class="text-xs font-black uppercase tracking-widest text-slate-400 mb-2">Custom Checkboxes</p>
                        <div class="flex flex-col gap-4">
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input
                                    class="w-5 h-5 rounded border-2 border-outline-variant text-primary focus:ring-primary/20 transition-all cursor-pointer"
                                    type="checkbox" />
                                <span
                                    class="text-sm font-semibold text-on-surface group-hover:text-primary transition-colors">Select
                                    for Batch Processing</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input checked=""
                                    class="w-5 h-5 rounded border-2 border-outline-variant text-primary focus:ring-primary/20 transition-all cursor-pointer"
                                    type="checkbox" />
                                <span
                                    class="text-sm font-semibold text-on-surface group-hover:text-primary transition-colors">Enable
                                    Telemetry</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input
                                    class="w-5 h-5 rounded border-2 border-outline-variant text-error focus:ring-error/20 transition-all cursor-pointer"
                                    type="checkbox" />
                                <span class="text-sm font-semibold text-error">Accept High Risk Terms</span>
                            </label>
                        </div>
                    </div>
                    <!-- Radios Column -->
                    <div class="space-y-6">
                        <p class="text-xs font-black uppercase tracking-widest text-slate-400 mb-2">Modern Radios</p>
                        <div class="flex flex-col gap-4">
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input checked=""
                                    class="w-5 h-5 border-2 border-outline-variant text-primary focus:ring-primary/20 transition-all cursor-pointer"
                                    name="ui-radio" type="radio" />
                                <span
                                    class="text-sm font-semibold text-on-surface group-hover:text-primary transition-colors">Production
                                    Instance</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input
                                    class="w-5 h-5 border-2 border-outline-variant text-primary focus:ring-primary/20 transition-all cursor-pointer"
                                    name="ui-radio" type="radio" />
                                <span
                                    class="text-sm font-semibold text-on-surface group-hover:text-primary transition-colors">Staging
                                    Cluster</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input
                                    class="w-5 h-5 border-2 border-outline-variant text-primary focus:ring-primary/20 transition-all cursor-pointer"
                                    name="ui-radio" type="radio" />
                                <span
                                    class="text-sm font-semibold text-on-surface group-hover:text-primary transition-colors">Local
                                    Sandbox</span>
                            </label>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="mt-12 bg-surface-container-lowest rounded-3xl p-10 border border-surface-container shadow-[0_20px_50px_rgba(0,0,0,0.02)]">
                <div class="max-w-3xl">
                    <h2 class="text-3xl font-headline font-black text-on-surface tracking-tight mb-4">Modern Alert System
                    </h2>
                    <p class="text-on-surface-variant text-lg leading-relaxed mb-10">We've integrated <span
                            class="font-bold text-primary">SweetAlert2</span> with custom Tailwind CSS branding to ensure
                        your system feedback is as premium as your interface.</p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                        <button
                            class="flex flex-col items-center gap-3 p-6 bg-surface-container-low rounded-2xl hover:bg-indigo-50 hover:text-indigo-600 transition-all group"
                            onclick="showAlert('success')">
                            <span class="material-symbols-outlined text-3xl group-hover:scale-110 transition-transform"
                                data-icon="check_circle">check_circle</span>
                            <span class="text-xs font-bold uppercase tracking-widest">Success</span>
                        </button>
                        <button
                            class="flex flex-col items-center gap-3 p-6 bg-surface-container-low rounded-2xl hover:bg-red-50 hover:text-red-600 transition-all group"
                            onclick="showAlert('error')">
                            <span class="material-symbols-outlined text-3xl group-hover:scale-110 transition-transform"
                                data-icon="error">error</span>
                            <span class="text-xs font-bold uppercase tracking-widest">Error</span>
                        </button>
                        <button
                            class="flex flex-col items-center gap-3 p-6 bg-surface-container-low rounded-2xl hover:bg-amber-50 hover:text-amber-600 transition-all group"
                            onclick="showAlert('warning')">
                            <span class="material-symbols-outlined text-3xl group-hover:scale-110 transition-transform"
                                data-icon="warning">warning</span>
                            <span class="text-xs font-bold uppercase tracking-widest">Warning</span>
                        </button>
                        <button
                            class="flex flex-col items-center gap-3 p-6 bg-surface-container-low rounded-2xl hover:bg-indigo-50 hover:text-indigo-600 transition-all group"
                            onclick="showAlert('confirm')">
                            <span class="material-symbols-outlined text-3xl group-hover:scale-110 transition-transform"
                                data-icon="question_mark">question_mark</span>
                            <span class="text-xs font-bold uppercase tracking-widest">Confirm</span>
                        </button>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
