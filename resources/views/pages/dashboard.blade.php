@extends('layouts.admin')

@section('content')
    <div class="p-6 md:p-10 max-w-full w-full">
        <!-- Welcome Section -->
        <header class="mb-10 flex flex-col md:flex-row md:items-end justify-between gap-6">
            <div>
                <h2 class="text-3xl md:text-4xl font-extrabold headline-text tracking-tight text-on-surface mb-2">Dashboard
                    Overview</h2>
                <p class="text-on-surface-variant max-w-lg text-lg">Welcome back, Erwin, S.Kom. Your workspace is looking
                    active
                    today with <span class="text-primary font-bold">12 new analytics</span> waiting.</p>
            </div>
            <div class="flex gap-3">
                <div
                    class="px-4 py-2 bg-surface-container-low rounded-xl flex items-center gap-2 text-sm font-semibold text-on-surface-variant">
                    <span class="material-symbols-outlined text-lg" data-icon="calendar_today">calendar_today</span>
                    Oct 24 - Oct 30, 2023
                </div>
            </div>
        </header>
        <!-- Bento Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-4 md:grid-rows-2 gap-6 mb-10">
            <!-- Large Primary Card -->
            <div
                class="md:col-span-2 md:row-span-2 bg-primary rounded-3xl p-8 text-white relative overflow-hidden shadow-[0_20px_50px_rgba(53,37,205,0.15)] flex flex-col justify-between group">
                <div
                    class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -translate-y-1/2 translate-x-1/4 blur-3xl group-hover:scale-110 transition-transform duration-700">
                </div>
                <div class="relative z-10">
                    <div class="flex items-center gap-2 mb-6">
                        <span
                            class="px-3 py-1 bg-white/20 backdrop-blur-md rounded-full text-[10px] font-bold uppercase tracking-widest">Growth
                            Index</span>
                    </div>
                    <h3 class="text-5xl font-extrabold headline-text mb-2">+24.8%</h3>
                    <p class="text-indigo-100 font-medium">Global activity increase this month across all curated projects.
                    </p>
                </div>
                <div class="relative z-10 flex items-end justify-between mt-12">
                    <div class="flex -space-x-3">
                        <img class="w-10 h-10 rounded-full border-2 border-primary"
                            data-alt="portrait of smiling man in casual wear"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDf7O1b5jpc3-Gqg0tab9y90t0Ax1qDV3O4JJ5AxCM9Yj43eKap5aXwWceOGDVx2xJLhLC2-DR0VOIUcFjGRS6_-51h8lafJp3fn76oRG5qzIP7XYPM7Tx2sX5VxISfHqoDTBhBFD2dWss1JAlcU6_5E8M3avAqLfO4sMO20EbntiKWWPRdkfbRAHGy-NQRA2bjoHP2ye6YkiyfpBhQoDfXMHK7Tc29HmbAHMyUloO3iblnhVYadnwEYgmCdx-CV6aSxhDO4u2prloA" />
                        <img class="w-10 h-10 rounded-full border-2 border-primary"
                            data-alt="portrait of woman with curly hair smiling"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuD9NFSUbQ0uEI9Ax8QBqKPx5aA-nN9SJ0rpBn4drCdz2Js2SRKBKNB4DnuRbtfR2h8z4FxtXVlcMXro_660sc2L1DaD8oFQwf0TMgrejzkzS4J_PBrqm3MToucagm6LyA-ijwb6xMln0qm2jOFVQUZDwdd4TnC3QfoFFNncU-g-8zVhVTtfW_M9KyeFjvO_c0mya3uBroGWi4WBGIJM2wsuxgc3ZoFp_w0RZ1AiQLQT5SlsnY0ZEFwul0ZJ7IDCNk_piH2zJy_dfdnV" />
                        <div
                            class="w-10 h-10 rounded-full bg-indigo-400 border-2 border-primary flex items-center justify-center text-[10px] font-bold">
                            +12</div>
                    </div>
                    <button
                        class="px-5 py-2.5 bg-white text-primary rounded-xl text-sm font-bold shadow-xl hover:translate-y-[-2px] transition-all">View
                        Full Report</button>
                </div>
            </div>
            <!-- Metric Card 1 -->
            <div
                class="bg-surface-container-lowest rounded-3xl p-6 flex flex-col justify-between shadow-[0_10px_30px_rgba(0,0,0,0.02)] border border-slate-50 transition-transform hover:scale-[1.02] duration-300">
                <div class="flex items-start justify-between">
                    <div class="w-12 h-12 bg-indigo-50 rounded-2xl flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined" data-icon="group" data-weight="fill"
                            style="font-variation-settings: 'FILL' 1;">group</span>
                    </div>
                    <span class="text-green-600 text-xs font-bold bg-green-50 px-2 py-1 rounded-lg flex items-center gap-1">
                        <span class="material-symbols-outlined text-[14px]" data-icon="trending_up">trending_up</span>
                        12%
                    </span>
                </div>
                <div class="mt-4">
                    <p class="text-sm font-semibold text-on-surface-variant">Active Users</p>
                    <h4 class="text-2xl font-extrabold headline-text text-on-surface">12,842</h4>
                </div>
            </div>
            <!-- Metric Card 2 -->
            <div
                class="bg-surface-container-lowest rounded-3xl p-6 flex flex-col justify-between shadow-[0_10px_30px_rgba(0,0,0,0.02)] border border-slate-50 transition-transform hover:scale-[1.02] duration-300">
                <div class="flex items-start justify-between">
                    <div class="w-12 h-12 bg-amber-50 rounded-2xl flex items-center justify-center text-amber-600">
                        <span class="material-symbols-outlined" data-icon="payments" data-weight="fill"
                            style="font-variation-settings: 'FILL' 1;">payments</span>
                    </div>
                    <span class="text-red-600 text-xs font-bold bg-red-50 px-2 py-1 rounded-lg flex items-center gap-1">
                        <span class="material-symbols-outlined text-[14px]" data-icon="trending_down">trending_down</span>
                        2%
                    </span>
                </div>
                <div class="mt-4">
                    <p class="text-sm font-semibold text-on-surface-variant">Avg. Revenue</p>
                    <h4 class="text-2xl font-extrabold headline-text text-on-surface">$4,250</h4>
                </div>
            </div>
            <!-- Metric Card 3 (Wide-ish) -->
            <div
                class="md:col-span-2 bg-surface-container-lowest rounded-3xl p-6 shadow-[0_10px_30px_rgba(0,0,0,0.02)] border border-slate-50">
                <div class="flex items-center justify-between mb-4">
                    <p class="text-sm font-semibold text-on-surface">Team Utilization</p>
                    <span class="material-symbols-outlined text-slate-400 cursor-pointer"
                        data-icon="more_horiz">more_horiz</span>
                </div>
                <div class="space-y-4">
                    <div>
                        <div class="flex justify-between text-[11px] font-bold text-on-surface-variant mb-1.5">
                            <span>DESIGN SYSTEMS</span>
                            <span>84%</span>
                        </div>
                        <div class="w-full bg-slate-100 h-2 rounded-full overflow-hidden">
                            <div class="bg-primary h-full w-[84%] rounded-full"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-[11px] font-bold text-on-surface-variant mb-1.5">
                            <span>BACKEND INFRA</span>
                            <span>62%</span>
                        </div>
                        <div class="w-full bg-slate-100 h-2 rounded-full overflow-hidden">
                            <div class="bg-indigo-300 h-full w-[62%] rounded-full"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Project Table Section -->
        <div class="bg-surface-container-lowest rounded-3xl shadow-[0_10px_40px_rgba(0,0,0,0.03)] overflow-hidden">
            <div class="p-6 md:p-8 flex flex-col md:flex-row md:items-center justify-between gap-4">
                <div>
                    <h3 class="text-xl font-bold headline-text text-on-surface">Recent Curations</h3>
                    <p class="text-sm text-on-surface-variant">Review the latest projects processed by your team.</p>
                </div>
                <div class="flex items-center gap-2">
                    <button
                        class="px-4 py-2 bg-surface-container-high rounded-xl text-sm font-semibold text-on-surface-variant hover:bg-slate-200 transition-colors">Export
                        CSV</button>
                    <button
                        class="px-4 py-2 bg-primary/10 text-primary rounded-xl text-sm font-bold hover:bg-primary/20 transition-colors">View
                        All</button>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead class="bg-surface-container-low border-none">
                        <tr>
                            <th
                                class="px-4 py-3 text-[11px] font-extrabold text-on-surface-variant uppercase tracking-widest">
                                Project Name</th>
                            <th
                                class="px-4 py-3 text-[11px] font-extrabold text-on-surface-variant uppercase tracking-widest">
                                Lead Admin</th>
                            <th
                                class="px-4 py-3 text-[11px] font-extrabold text-on-surface-variant uppercase tracking-widest">
                                Status</th>
                            <th
                                class="px-4 py-3 text-[11px] font-extrabold text-on-surface-variant uppercase tracking-widest">
                                Date Created</th>
                            <th
                                class="px-4 py-3 text-[11px] font-extrabold text-on-surface-variant uppercase tracking-widest text-right">
                                Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        <tr class="hover:bg-slate-50/50 transition-colors group">
                            <td class="px-4 py-2.5">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-10 h-10 rounded-xl bg-indigo-100 flex items-center justify-center text-primary font-bold">
                                        L</div>
                                    <div>
                                        <p class="text-sm font-bold text-on-surface">Lumira Branding</p>
                                        <p class="text-[11px] text-on-surface-variant">Visual Identity</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-2.5">
                                <div class="flex items-center gap-2">
                                    <img alt="Admin avatar" class="w-6 h-6 rounded-full"
                                        data-alt="Professional studio portrait of man in white shirt smiling"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuD2Ri-fFZlYKlEUggBo4TsUnzl-7ceo2TWHD9K9aUAjy7xp6Tm5KLQx1W0r7JSAe7fJVKbOD2He3qmdv_B9cnUNn5iv9LO8Ni6CNvmx3iGRoGoHHpGpbTN_ilPIYgyUETcmdRncyKPiq6OWbmWQnnhDiQRJnFSbd82J-vSD7Ga5dWsK68kYuwrzg6PJ4tfMfhnmNeFdGBhgrsRq4GWCS6AO2emqEkoJGAGc86O5Rr-V6o51IW7T65N0V2UvJktvitgA-iDpXUgwSMqJ" />
                                    <span class="text-sm text-on-surface-variant">James Wilson</span>
                                </div>
                            </td>
                            <td class="px-4 py-2.5">
                                <span
                                    class="px-3 py-1 bg-green-50 text-green-700 text-[10px] font-bold rounded-full border border-green-100">COMPLETED</span>
                            </td>
                            <td class="px-4 py-2.5 text-sm text-on-surface-variant">Oct 28, 2023</td>
                            <td class="px-4 py-2.5 text-right">
                                <button
                                    class="p-1.5 text-slate-400 hover:bg-indigo-50 hover:text-primary rounded-lg transition-all">
                                    <span class="material-symbols-outlined text-[18px]"
                                        data-icon="visibility">visibility</span>
                                </button>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50/50 transition-colors group">
                            <td class="px-4 py-2.5">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-10 h-10 rounded-xl bg-amber-100 flex items-center justify-center text-amber-700 font-bold">
                                        O</div>
                                    <div>
                                        <p class="text-sm font-bold text-on-surface">Origin App UI</p>
                                        <p class="text-[11px] text-on-surface-variant">UX Research</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-2.5">
                                <div class="flex items-center gap-2">
                                    <img alt="Admin avatar" class="w-6 h-6 rounded-full"
                                        data-alt="portrait of woman in casual outfit looking at camera"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDEJeN_5AQ9Q2mRi7nayPBETiTBvXzkxM0xsKfNrvELgnyFfNLIm9V0JMKyNmJqioqKsoHWitcC5MZg-5fYYbBp8xwFAsZvSPGQvdvvBPzZeyiEUW903GfdMlWkXqqlKYVQ83bVRHR9eTTr1xpuWjj1zJs4Fg86X8iVDpdsiQqhdO9EfsB4KpctZuJLoMmeFIKz53DjLYfvcTrsPUTFO5eHpTNg4WgBsEtdzEjnOYSNwJjGYONUvPbJCWwHDt1bdxGM7jbdXAR5wBWX" />
                                    <span class="text-sm text-on-surface-variant">Sarah Chen</span>
                                </div>
                            </td>
                            <td class="px-4 py-2.5">
                                <span
                                    class="px-3 py-1 bg-indigo-50 text-primary text-[10px] font-bold rounded-full border border-indigo-100">IN
                                    PROGRESS</span>
                            </td>
                            <td class="px-4 py-2.5 text-sm text-on-surface-variant">Oct 24, 2023</td>
                            <td class="px-4 py-2.5 text-right">
                                <button
                                    class="p-1.5 text-slate-400 hover:bg-indigo-50 hover:text-primary rounded-lg transition-all">
                                    <span class="material-symbols-outlined text-[18px]"
                                        data-icon="visibility">visibility</span>
                                </button>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50/50 transition-colors group">
                            <td class="px-4 py-2.5">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-10 h-10 rounded-xl bg-slate-100 flex items-center justify-center text-slate-700 font-bold">
                                        X</div>
                                    <div>
                                        <p class="text-sm font-bold text-on-surface">Xero Website</p>
                                        <p class="text-[11px] text-on-surface-variant">Development</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-2.5">
                                <div class="flex items-center gap-2">
                                    <img alt="Admin avatar" class="w-6 h-6 rounded-full"
                                        data-alt="Close up of middle aged man smiling in suit"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAIGOom2bMQAcW4HyKZ1lYKOFeRVZRc3edpdFXj7SL-4EZgjSq0zjdElGnLmSWSf_ynXerjMi6YW8TSztZjCU-s8z045-CHsoMYj2Izbvzc6BP_k9gNWAjt74qZDmBqZTGrXJJ0Mf7d5xyaWXSfbIcdMDwt5pEI2SjXmRD-8oiLwwaH0gTOH-Fi5aSo5jsBDDQ8Pc9OE3BNjfh01U6r8PDOX81xyVGyJTjfM0WBBcH6x96A0t4qotSL5u3Itl2gt93MnYkzfVAOnlWU" />
                                    <span class="text-sm text-on-surface-variant">Marcus Reed</span>
                                </div>
                            </td>
                            <td class="px-4 py-2.5">
                                <span
                                    class="px-3 py-1 bg-slate-50 text-slate-600 text-[10px] font-bold rounded-full border border-slate-200">QUEUED</span>
                            </td>
                            <td class="px-4 py-2.5 text-sm text-on-surface-variant">Oct 20, 2023</td>
                            <td class="px-4 py-2.5 text-right">
                                <button
                                    class="p-1.5 text-slate-400 hover:bg-indigo-50 hover:text-primary rounded-lg transition-all">
                                    <span class="material-symbols-outlined text-[18px]"
                                        data-icon="visibility">visibility</span>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
