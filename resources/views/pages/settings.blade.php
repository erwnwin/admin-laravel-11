@extends('layouts.admin')

@section('content')
    <div class="p-6 md:p-10 max-w-full w-full">
        <header class="mb-10 flex flex-col md:flex-row md:items-end justify-between gap-6">
            <div>
                <h2 class="text-3xl md:text-4xl font-extrabold headline-text tracking-tight text-on-surface mb-2">System
                    Settings</h2>
                <p class="text-on-surface-variant max-w-lg text-lg">Configure your workspace, notification preferences, and
                    system behavior.</p>
            </div>
            <div class="flex gap-3">
                <div
                    class="px-4 py-2 bg-surface-container-low rounded-xl flex items-center gap-2 text-sm font-semibold text-on-surface-variant">
                    <span class="material-symbols-outlined text-lg" data-icon="settings">settings</span>
                    Config v4.0
                </div>
            </div>
        </header>
        <div class="space-y-6">
            <!-- Workspace Configuration -->
            <section class="bg-surface-container-lowest rounded-xl shadow-[0_10px_40px_rgba(0,0,0,0.03)] overflow-hidden">
                <div class="p-6 border-b border-surface-container">
                    <h3 class="text-lg font-bold flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">domain</span>
                        Workspace Configuration
                    </h3>
                </div>
                <div class="p-6 space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="text-sm font-semibold text-on-surface-variant">Workspace Name</label>
                            <input
                                class="w-full bg-surface-container-highest/30 border-none rounded-lg px-4 py-3 text-on-surface focus:ring-2 focus:ring-primary/20 transition-all outline-none"
                                type="text" value="CODETA Enterprise HQ" />
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-semibold text-on-surface-variant">Timezone</label>
                            <select
                                class="w-full bg-surface-container-highest/30 border-none rounded-lg px-4 py-3 text-on-surface focus:ring-2 focus:ring-primary/20 transition-all outline-none appearance-none cursor-pointer">
                                <option>(GMT-08:00) Pacific Time</option>
                                <option>(GMT+00:00) UTC</option>
                                <option selected="">(GMT+08:00) Singapore Time</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex items-center justify-between py-4 border-t border-surface-container">
                        <div>
                            <p class="font-bold text-on-surface">Private Workspace</p>
                            <p class="text-xs text-on-surface-variant">Only invited members can access this workspace.</p>
                        </div>
                        <button class="w-12 h-6 bg-primary rounded-full relative transition-colors">
                            <div class="absolute right-1 top-1 w-4 h-4 bg-white rounded-full"></div>
                        </button>
                    </div>
                </div>
            </section>
            <!-- Notifications -->
            <section class="bg-surface-container-lowest rounded-xl shadow-[0_10px_40px_rgba(0,0,0,0.03)] overflow-hidden">
                <div class="p-6 border-b border-surface-container">
                    <h3 class="text-lg font-bold flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">notifications_active</span>
                        Notifications
                    </h3>
                </div>
                <div class="p-6 space-y-4">
                    <div class="flex items-center justify-between p-4 bg-surface-container-low/50 rounded-lg">
                        <div class="flex items-center gap-4">
                            <span class="material-symbols-outlined text-indigo-400">mail</span>
                            <div>
                                <p class="text-sm font-bold text-on-surface">Email Digests</p>
                                <p class="text-[11px] text-on-surface-variant">Weekly summary of activity.</p>
                            </div>
                        </div>
                        <button class="w-12 h-6 bg-primary rounded-full relative transition-colors">
                            <div class="absolute right-1 top-1 w-4 h-4 bg-white rounded-full"></div>
                        </button>
                    </div>
                    <div class="flex items-center justify-between p-4 bg-surface-container-low/50 rounded-lg">
                        <div class="flex items-center gap-4">
                            <span class="material-symbols-outlined text-indigo-400">browser_updated</span>
                            <div>
                                <p class="text-sm font-bold text-on-surface">Push Notifications</p>
                                <p class="text-[11px] text-on-surface-variant">Real-time browser updates.</p>
                            </div>
                        </div>
                        <button class="w-12 h-6 bg-surface-container-high rounded-full relative transition-colors">
                            <div class="absolute left-1 top-1 w-4 h-4 bg-white rounded-full"></div>
                        </button>
                    </div>
                </div>
            </section>
            <!-- Danger Zone -->
            <section class="bg-red-50/50 dark:bg-red-900/10 rounded-xl border border-red-100 dark:border-red-900/30 p-6">
                <h3 class="text-lg font-bold text-red-600 flex items-center gap-2 mb-4">
                    <span class="material-symbols-outlined">dangerous</span>
                    Danger Zone
                </h3>
                <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                    <div>
                        <p class="font-bold text-on-surface">Delete Workspace</p>
                        <p class="text-xs text-on-surface-variant">Permanently remove all data and members. This action
                            cannot be undone.</p>
                    </div>
                    <button
                        class="px-6 py-2 bg-red-600 text-white rounded-lg text-sm font-bold hover:bg-red-700 transition-all shadow-lg shadow-red-200">
                        Delete Workspace
                    </button>
                </div>
            </section>
            <div class="flex justify-end gap-3 pt-6">
                <button class="px-6 py-3 text-on-surface-variant font-bold hover:text-primary transition-colors">Reset
                    Defaults</button>
                <button
                    class="px-8 py-3 bg-primary text-white rounded-xl font-bold shadow-xl shadow-indigo-200 hover:scale-105 transition-all">Save
                    All Changes</button>
            </div>
        </div>
    </div>
@endsection
