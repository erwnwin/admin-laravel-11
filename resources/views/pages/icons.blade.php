@extends('layouts.admin')

@section('content')
    <div class="p-6 md:p-10 max-w-full w-full">
        <!-- Page Title & Search Section -->
        <header class="mb-10 flex flex-col md:flex-row md:items-end justify-between gap-6">
            <div>
                <h2 class="text-3xl md:text-4xl font-extrabold headline-text tracking-tight text-on-surface mb-2">Icons
                    Gallery</h2>
                <p class="text-on-surface-variant max-w-lg text-lg">Click on any icon to copy its identifier. Explore 1,000+
                    material symbols for your enterprise projects.</p>
            </div>
            <div class="flex flex-col md:items-end gap-3">
                <div class="relative w-full max-w-xs">
                    <span
                        class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-xl">search</span>
                    <input id="icon-search"
                        class="w-full bg-surface-container-low border-none rounded-full py-2 pl-11 pr-4 text-sm focus:ring-2 focus:ring-primary/20 transition-all"
                        placeholder="Search icon name..." type="text" />
                </div>
                <div
                    class="px-4 py-2 bg-surface-container-low rounded-xl flex items-center gap-2 text-sm font-semibold text-on-surface-variant">
                    <span class="material-symbols-outlined text-lg" data-icon="info">info</span>
                    Material Symbols v1.0
                </div>
            </div>
        </header>

        <!-- Icon Grid -->
        <div id="icon-grid" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
            <!-- Icons will be injected here via JS -->
        </div>
    </div>
@endsection
