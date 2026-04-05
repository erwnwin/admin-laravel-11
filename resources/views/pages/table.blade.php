@extends('layouts.admin')

@section('content')
    <div class="w-full max-w-full p-6 md:p-10" data-table-page>
        <header class="mb-10 flex flex-col justify-between gap-6 md:flex-row md:items-end">
            <div>
                <h2 class="mb-2 text-3xl font-extrabold tracking-tight text-on-surface headline-text md:text-4xl">Data
                    Management</h2>
                <p class="max-w-2xl text-lg text-on-surface-variant">
                    Explore multiple table patterns for enterprise workflows: searchable card tables, row selection,
                    inline filtering, and compact operational queues.
                </p>
            </div>
            <div class="flex flex-wrap gap-3">
                <div
                    class="flex items-center gap-2 rounded-xl bg-surface-container-low px-4 py-2 text-sm font-semibold text-on-surface-variant">
                    <span class="material-symbols-outlined text-lg">database</span>
                    Table Lab v2.0
                </div>
                <button
                    class="flex items-center gap-2 rounded-xl border border-slate-200 bg-white px-4 py-2 text-sm font-semibold text-on-surface shadow-sm transition-colors hover:bg-slate-50">
                    <span class="material-symbols-outlined text-lg">download</span>
                    Export Snapshot
                </button>
            </div>
        </header>

        <div class="mb-10 grid grid-cols-1 gap-6 xl:grid-cols-3">
            <article class="rounded-3xl bg-primary p-7 text-white shadow-[0_20px_50px_rgba(53,37,205,0.18)]">
                <div class="mb-8 flex items-start justify-between">
                    <div>
                        <p class="text-xs font-black uppercase tracking-[0.28em] text-indigo-100">Selectable Mode</p>
                        <h3 class="mt-3 text-4xl font-black headline-text">48</h3>
                    </div>
                    <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-white/15">
                        <span class="material-symbols-outlined text-2xl">checklist</span>
                    </span>
                </div>
                <p class="max-w-xs text-sm leading-relaxed text-indigo-100">
                    Bulk actions are ready for review queues, audit approval, and export workflows from a single card.
                </p>
            </article>

            <article class="rounded-3xl border border-slate-100 bg-surface-container-lowest p-7 shadow-[0_12px_30px_rgba(0,0,0,0.03)]">
                <div class="mb-6 flex items-center justify-between">
                    <div>
                        <p class="text-xs font-black uppercase tracking-[0.28em] text-slate-400">Filters</p>
                        <h3 class="mt-3 text-3xl font-black text-on-surface headline-text">Live Query</h3>
                    </div>
                    <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-amber-50 text-amber-600">
                        <span class="material-symbols-outlined text-2xl">tune</span>
                    </span>
                </div>
                <p class="text-sm leading-relaxed text-on-surface-variant">
                    Search by asset name, owner, or classification, then narrow with status chips and category select.
                </p>
            </article>

            <article class="rounded-3xl border border-primary/10 bg-surface-container-lowest p-7 shadow-[0_12px_30px_rgba(53,37,205,0.06)]">
                <div class="mb-6 flex items-center justify-between">
                    <div>
                        <p class="text-xs font-black uppercase tracking-[0.28em] text-slate-400">Card Variant</p>
                        <h3 class="mt-3 text-3xl font-black text-on-surface headline-text">Compact Queue</h3>
                    </div>
                    <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-indigo-50 text-primary">
                        <span class="material-symbols-outlined text-2xl">view_agenda</span>
                    </span>
                </div>
                <p class="text-sm leading-relaxed text-on-surface-variant">
                    A secondary card table below shows how smaller operational lists can stay tidy without losing density.
                </p>
            </article>
        </div>

        <section
            class="overflow-hidden rounded-3xl border border-slate-100 bg-surface-container-lowest shadow-[0_14px_40px_rgba(0,0,0,0.04)]">
            <div class="border-b border-slate-100 p-6 md:p-8">
                <div class="flex flex-col gap-6 xl:flex-row xl:items-center xl:justify-between">
                    <div>
                        <p class="text-xs font-black uppercase tracking-[0.28em] text-slate-400">Records Workspace</p>
                        <h3 class="mt-2 text-2xl font-black text-on-surface headline-text">Primary Data Table Card</h3>
                        <p class="mt-2 max-w-2xl text-sm leading-relaxed text-on-surface-variant">
                            Designed for data-heavy administration: the toolbar lives inside the card so filtering,
                            selection, and table actions feel like a single system.
                        </p>
                    </div>
                    <div class="flex flex-wrap items-center gap-2">
                        <span
                            class="rounded-full bg-primary/10 px-3 py-1 text-[11px] font-bold uppercase tracking-[0.2em] text-primary">
                            Multi Select
                        </span>
                        <span
                            class="rounded-full bg-emerald-100 px-3 py-1 text-[11px] font-bold uppercase tracking-[0.2em] text-emerald-700">
                            Filter Ready
                        </span>
                    </div>
                </div>

                <div class="mt-6 grid grid-cols-1 gap-4 xl:grid-cols-[minmax(0,1fr)_auto_auto]">
                    <label class="relative block">
                        <span class="material-symbols-outlined pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-slate-400">search</span>
                        <input
                            class="h-12 w-full rounded-2xl border-none bg-surface-container-low pl-12 pr-4 text-sm text-on-surface transition-all focus:ring-2 focus:ring-primary/20"
                            data-table-search placeholder="Search assets, owners, or categories..." type="text">
                    </label>

                    <div class="flex flex-wrap items-center gap-2">
                        <button class="rounded-full bg-primary px-4 py-2 text-xs font-bold uppercase tracking-[0.22em] text-white transition-all" data-table-filter="all" type="button">All</button>
                        <button class="rounded-full bg-surface-container-low px-4 py-2 text-xs font-bold uppercase tracking-[0.22em] text-on-surface-variant transition-all hover:bg-surface-container-high" data-table-filter="active" type="button">Active</button>
                        <button class="rounded-full bg-surface-container-low px-4 py-2 text-xs font-bold uppercase tracking-[0.22em] text-on-surface-variant transition-all hover:bg-surface-container-high" data-table-filter="pending" type="button">Pending</button>
                        <button class="rounded-full bg-surface-container-low px-4 py-2 text-xs font-bold uppercase tracking-[0.22em] text-on-surface-variant transition-all hover:bg-surface-container-high" data-table-filter="inactive" type="button">Inactive</button>
                    </div>

                    <select class="min-w-[220px] cursor-pointer rounded-2xl border-none bg-surface-container-low px-4 py-3 text-sm font-semibold text-on-surface transition-all focus:ring-2 focus:ring-primary/20" data-table-category>
                        <option value="all">All Categories</option>
                        <option value="financial data">Financial Data</option>
                        <option value="marketing data">Marketing Data</option>
                        <option value="system logs">System Logs</option>
                        <option value="investor relations">Investor Relations</option>
                    </select>
                </div>

                <div class="mt-5 flex flex-wrap items-center justify-between gap-3">
                    <div class="flex flex-wrap items-center gap-3 text-sm text-on-surface-variant">
                        <label class="flex items-center gap-3 rounded-2xl bg-surface-container-low px-4 py-2">
                            <input class="h-4 w-4 rounded border-slate-300 text-primary focus:ring-primary/20" data-table-select-all type="checkbox">
                            <span class="font-semibold text-on-surface">Select all visible rows</span>
                        </label>
                        <span class="rounded-2xl bg-surface-container-low px-4 py-2 font-semibold"><span data-selected-count>0</span> selected</span>
                        <span class="rounded-2xl bg-surface-container-low px-4 py-2 font-semibold"><span data-visible-count>4</span> results</span>
                    </div>

                    <div class="flex flex-wrap items-center gap-2">
                        <label class="flex items-center gap-3 rounded-2xl bg-surface-container-low px-4 py-2 text-sm font-semibold text-on-surface">
                            <span>Rows per page</span>
                            <select class="cursor-pointer border-none bg-transparent pr-7 text-sm font-bold text-primary focus:ring-0" data-table-page-size>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </label>
                        <button class="rounded-2xl bg-surface-container-high px-4 py-2 text-sm font-semibold text-on-secondary-container transition-all hover:bg-surface-container-highest" type="button">Save Filter</button>
                        <button class="rounded-2xl bg-primary px-4 py-2 text-sm font-bold text-white shadow-lg shadow-indigo-100 transition-all hover:opacity-90" type="button">Create Record</button>
                    </div>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full min-w-[980px] border-collapse text-left">
                    <thead>
                        <tr class="bg-surface-container-low">
                            <th class="w-14 px-4 py-4"><span class="sr-only">Select</span></th>
                            <th class="px-4 py-4 text-[11px] font-black uppercase tracking-[0.24em] text-on-surface-variant">Asset</th>
                            <th class="px-4 py-4 text-[11px] font-black uppercase tracking-[0.24em] text-on-surface-variant">Category</th>
                            <th class="px-4 py-4 text-[11px] font-black uppercase tracking-[0.24em] text-on-surface-variant">Updated</th>
                            <th class="px-4 py-4 text-[11px] font-black uppercase tracking-[0.24em] text-on-surface-variant">Owner</th>
                            <th class="px-4 py-4 text-[11px] font-black uppercase tracking-[0.24em] text-on-surface-variant">Status</th>
                            <th class="px-4 py-4 text-right text-[11px] font-black uppercase tracking-[0.24em] text-on-surface-variant">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-surface-container" data-table-body>
                        <tr class="transition-all hover:bg-surface-container-low/60" data-table-row data-category="financial data" data-search="global_q3_revenue financial data marcus chen spreadsheets" data-status="active">
                            <td class="px-4 py-3"><input class="h-4 w-4 rounded border-slate-300 text-primary focus:ring-primary/20" data-row-checkbox type="checkbox"></td>
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                    <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-indigo-50 text-indigo-600"><span class="material-symbols-outlined">description</span></div>
                                    <div>
                                        <p class="font-semibold text-on-surface">Global_Q3_Revenue.xlsx</p>
                                        <p class="text-xs text-on-surface-variant">2.4 MB • Spreadsheets</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm text-on-surface-variant">Financial Data</td>
                            <td class="px-4 py-3 text-sm text-on-surface-variant">Oct 12, 2023</td>
                            <td class="px-4 py-3"><div class="flex items-center gap-2"><img alt="Owner" class="h-7 w-7 rounded-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDiDL6FgAG5LVV3AqKZ65lwHKTrS6DRwMcBPXupMLglI18tvACLwuGmxxeh_DEY6dSInXnZN4oBNNOXFdert0ZJrfdJmn4kqyjpexVE8WIRGZ0j-pI1FdzvQewnlgOSBIv60H_DK0HpaWzV_yw7kPLXQx9AXf0xVUr9Kxr3viQQskVGw9Xlu5CEhRe08UvBCpVQEPhyhrpyDy5LG-ZYa79fDTXXchLLlrSa86X5sL7vwToSBhX6S7l-_7Cn_S8aXGRBp9mws2XDPwYl"><span class="text-sm font-medium text-on-surface">Marcus Chen</span></div></td>
                            <td class="px-4 py-3"><span class="inline-flex items-center gap-1.5 rounded-full bg-emerald-100 px-3 py-1 text-xs font-bold uppercase tracking-[0.18em] text-emerald-700"><span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>Active</span></td>
                            <td class="px-4 py-3 text-right"><div class="flex justify-end gap-1"><button class="rounded-xl p-2 text-on-surface-variant transition-all hover:bg-slate-100 hover:text-primary" type="button"><span class="material-symbols-outlined text-[18px]">visibility</span></button><button class="rounded-xl p-2 text-on-surface-variant transition-all hover:bg-emerald-50 hover:text-emerald-600" type="button"><span class="material-symbols-outlined text-[18px]">edit</span></button><button class="rounded-xl p-2 text-on-surface-variant transition-all hover:bg-rose-50 hover:text-error" type="button"><span class="material-symbols-outlined text-[18px]">delete</span></button></div></td>
                        </tr>
                        <tr class="transition-all hover:bg-surface-container-low/60" data-table-row data-category="marketing data" data-search="consumer_insights_archive marketing data alex rivera directory" data-status="pending">
                            <td class="px-4 py-3"><input class="h-4 w-4 rounded border-slate-300 text-primary focus:ring-primary/20" data-row-checkbox type="checkbox"></td>
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                    <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-orange-50 text-orange-600"><span class="material-symbols-outlined">folder</span></div>
                                    <div>
                                        <p class="font-semibold text-on-surface">Consumer_Insights_Archive</p>
                                        <p class="text-xs text-on-surface-variant">145 Files • Directory</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm text-on-surface-variant">Marketing Data</td>
                            <td class="px-4 py-3 text-sm text-on-surface-variant">Sep 28, 2023</td>
                            <td class="px-4 py-3"><div class="flex items-center gap-2"><img alt="Owner" class="h-7 w-7 rounded-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBmuIrBIKn3eTwlIxRxNctc0dtFEzncOD4-_ZLnJTi8WgeN2UX-UzM3qUBfz_PariGdjKLuBTyG8dOIwDpSf20j5Y2iHGwv-b5AFDzIVnC3ciN7AsTB8D7T8NccyiLUV6g0yBT-IIu9eNRRNGpCHsNVM8Pqfoz2ISyIxRo7CsooK6sb5r7TiEfHhuTUS5sMy31QImvhK-KeV2PuF3BEUn9c0ZXukBqjWXiUJpjmOPEZT_hcpMRhuvCi2sp8HtRKQwIKYTYzUcH4pkSt"><span class="text-sm font-medium text-on-surface">Alex Rivera</span></div></td>
                            <td class="px-4 py-3"><span class="inline-flex items-center gap-1.5 rounded-full bg-amber-100 px-3 py-1 text-xs font-bold uppercase tracking-[0.18em] text-amber-700"><span class="h-1.5 w-1.5 rounded-full bg-amber-500"></span>Pending</span></td>
                            <td class="px-4 py-3 text-right"><div class="flex justify-end gap-1"><button class="rounded-xl p-2 text-on-surface-variant transition-all hover:bg-slate-100 hover:text-primary" type="button"><span class="material-symbols-outlined text-[18px]">visibility</span></button><button class="rounded-xl p-2 text-on-surface-variant transition-all hover:bg-emerald-50 hover:text-emerald-600" type="button"><span class="material-symbols-outlined text-[18px]">edit</span></button><button class="rounded-xl p-2 text-on-surface-variant transition-all hover:bg-rose-50 hover:text-error" type="button"><span class="material-symbols-outlined text-[18px]">delete</span></button></div></td>
                        </tr>
                        <tr class="transition-all hover:bg-surface-container-low/60" data-table-row data-category="system logs" data-search="legacy_user_nodes_backup system logs sarah jenkins database dump" data-status="inactive">
                            <td class="px-4 py-3"><input class="h-4 w-4 rounded border-slate-300 text-primary focus:ring-primary/20" data-row-checkbox type="checkbox"></td>
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                    <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-slate-100 text-slate-600"><span class="material-symbols-outlined">database</span></div>
                                    <div>
                                        <p class="font-semibold text-on-surface">Legacy_User_Nodes_Backup</p>
                                        <p class="text-xs text-on-surface-variant">12.8 GB • Database Dump</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm text-on-surface-variant">System Logs</td>
                            <td class="px-4 py-3 text-sm text-on-surface-variant">Aug 15, 2023</td>
                            <td class="px-4 py-3"><div class="flex items-center gap-2"><img alt="Owner" class="h-7 w-7 rounded-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDl31jYLjfYWUVvxCZDqGJ0FvN6NcnNpqqAuUtcAzHAqT-pNWNHllLd8k5982IX5udmBnxfeJ7ayHlv4d4-CR8QiiZKQm43TxqVK0v8ycAMxTQxmcpOxLOUO-sYSE3mf1SiO3bJNLjqh-PfyYWq0o_FXqqJcBUs6B9XM6KKKlVQqZfBowxsR3vK47g4NEJhYJFz3a8ExHEmXSqC31ACxCAfQ4X7vtRyMVu8FiCZza2baXD1vbmE4tTIry7CSPT01pFDE577wTfqNg5a"><span class="text-sm font-medium text-on-surface">Sarah Jenkins</span></div></td>
                            <td class="px-4 py-3"><span class="inline-flex items-center gap-1.5 rounded-full bg-slate-100 px-3 py-1 text-xs font-bold uppercase tracking-[0.18em] text-slate-600"><span class="h-1.5 w-1.5 rounded-full bg-slate-400"></span>Inactive</span></td>
                            <td class="px-4 py-3 text-right"><div class="flex justify-end gap-1"><button class="rounded-xl p-2 text-on-surface-variant transition-all hover:bg-slate-100 hover:text-primary" type="button"><span class="material-symbols-outlined text-[18px]">visibility</span></button><button class="rounded-xl p-2 text-on-surface-variant transition-all hover:bg-emerald-50 hover:text-emerald-600" type="button"><span class="material-symbols-outlined text-[18px]">edit</span></button><button class="rounded-xl p-2 text-on-surface-variant transition-all hover:bg-rose-50 hover:text-error" type="button"><span class="material-symbols-outlined text-[18px]">delete</span></button></div></td>
                        </tr>
                        <tr class="transition-all hover:bg-surface-container-low/60" data-table-row data-category="investor relations" data-search="annual_report_draft investor relations david miller pdf" data-status="active">
                            <td class="px-4 py-3"><input class="h-4 w-4 rounded border-slate-300 text-primary focus:ring-primary/20" data-row-checkbox type="checkbox"></td>
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                    <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-indigo-50 text-indigo-600"><span class="material-symbols-outlined">description</span></div>
                                    <div>
                                        <p class="font-semibold text-on-surface">Annual_Report_Draft_v2</p>
                                        <p class="text-xs text-on-surface-variant">4.1 MB • PDF Document</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm text-on-surface-variant">Investor Relations</td>
                            <td class="px-4 py-3 text-sm text-on-surface-variant">Just now</td>
                            <td class="px-4 py-3"><div class="flex items-center gap-2"><img alt="Owner" class="h-7 w-7 rounded-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA5f3laCkLd5a10nHt192o2_qlH-rWDTeXtMaTQYI3kzaKPIZL8dyh305xf9bLSPe1MgD5h7Js5ITpc1wkZrOpGzZa1-DsP5ZtJ391S7LcSmr_L5CaBS7NbqUf5gNKslY3NCUEhAqRlUB0MJIn3ZOQ50y_71rDLH33xKxtiiftt_SXxTsEZiMldVEKVjQi93qhCL8p58GF7pd0V34HZTYDJokNaAeTsiOl42oDSkYoprY-9XxYe1Xb6gP8g1FPVUOux4bFCGhttnSqD"><span class="text-sm font-medium text-on-surface">David Miller</span></div></td>
                            <td class="px-4 py-3"><span class="inline-flex items-center gap-1.5 rounded-full bg-emerald-100 px-3 py-1 text-xs font-bold uppercase tracking-[0.18em] text-emerald-700"><span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>Active</span></td>
                            <td class="px-4 py-3 text-right"><div class="flex justify-end gap-1"><button class="rounded-xl p-2 text-on-surface-variant transition-all hover:bg-slate-100 hover:text-primary" type="button"><span class="material-symbols-outlined text-[18px]">visibility</span></button><button class="rounded-xl p-2 text-on-surface-variant transition-all hover:bg-emerald-50 hover:text-emerald-600" type="button"><span class="material-symbols-outlined text-[18px]">edit</span></button><button class="rounded-xl p-2 text-on-surface-variant transition-all hover:bg-rose-50 hover:text-error" type="button"><span class="material-symbols-outlined text-[18px]">delete</span></button></div></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="hidden border-t border-slate-100 px-6 py-10 text-center" data-table-empty-state>
                <div class="mx-auto flex max-w-md flex-col items-center">
                    <span class="flex h-16 w-16 items-center justify-center rounded-3xl bg-surface-container-low text-primary">
                        <span class="material-symbols-outlined text-3xl">manage_search</span>
                    </span>
                    <h4 class="mt-4 text-xl font-black text-on-surface headline-text">No records match this view</h4>
                    <p class="mt-2 text-sm leading-relaxed text-on-surface-variant">
                        Try changing the status chip, switching the category, or clearing the current search query.
                    </p>
                </div>
            </div>

            <div class="flex flex-col gap-4 border-t border-slate-100 bg-surface-container-low px-6 py-4 md:flex-row md:items-center md:justify-between">
                <div class="flex flex-col gap-2 text-sm text-on-surface-variant">
                    <p>Showing <span class="font-semibold text-on-surface" data-visible-range-start>1</span>-<span class="font-semibold text-on-surface" data-visible-range-end>2</span> of <span class="font-semibold text-on-surface" data-visible-count-footer>4</span> curated assets in the active view.</p>
                    <p>Page <span class="font-semibold text-on-surface" data-current-page>1</span> of <span class="font-semibold text-on-surface" data-total-pages>2</span></p>
                </div>
                <div class="flex flex-wrap items-center gap-2">
                    <button class="rounded-xl bg-white px-4 py-2 text-sm font-semibold text-on-surface-variant transition-all hover:bg-slate-50" data-table-clear-selection type="button">Clear Selection</button>
                    <button class="rounded-xl bg-white px-4 py-2 text-sm font-semibold text-on-surface-variant transition-all hover:bg-slate-50 disabled:cursor-not-allowed disabled:opacity-50" data-table-page-prev type="button">Previous</button>
                    <div class="flex items-center gap-2" data-table-page-list></div>
                    <button class="rounded-xl bg-white px-4 py-2 text-sm font-semibold text-on-surface-variant transition-all hover:bg-slate-50 disabled:cursor-not-allowed disabled:opacity-50" data-table-page-next type="button">Next</button>
                    <button class="rounded-xl bg-primary px-4 py-2 text-sm font-bold text-white transition-all hover:opacity-90" type="button">Apply Bulk Action</button>
                </div>
            </div>
        </section>

        <div class="mt-10 grid grid-cols-1 gap-6 xl:grid-cols-[1.15fr_0.85fr]">
            <section class="overflow-hidden rounded-3xl border border-slate-100 bg-surface-container-lowest shadow-[0_12px_32px_rgba(0,0,0,0.04)]">
                <div class="border-b border-slate-100 p-6">
                    <p class="text-xs font-black uppercase tracking-[0.28em] text-slate-400">Compact Card Table</p>
                    <h3 class="mt-2 text-xl font-black text-on-surface headline-text">Approval Queue</h3>
                </div>
                <div class="divide-y divide-slate-100">
                    <div class="flex items-center justify-between gap-4 p-5">
                        <div class="min-w-0"><p class="font-semibold text-on-surface">Vendor Contract Redlines</p><p class="text-sm text-on-surface-variant">Legal • Awaiting final signature</p></div>
                        <span class="shrink-0 rounded-full bg-amber-100 px-3 py-1 text-[11px] font-bold uppercase tracking-[0.18em] text-amber-700">Pending</span>
                    </div>
                    <div class="flex items-center justify-between gap-4 p-5">
                        <div class="min-w-0"><p class="font-semibold text-on-surface">Regional KPI Digest</p><p class="text-sm text-on-surface-variant">Analytics • Ready for distribution</p></div>
                        <span class="shrink-0 rounded-full bg-emerald-100 px-3 py-1 text-[11px] font-bold uppercase tracking-[0.18em] text-emerald-700">Active</span>
                    </div>
                    <div class="flex items-center justify-between gap-4 p-5">
                        <div class="min-w-0"><p class="font-semibold text-on-surface">Archive Cleanup Batch</p><p class="text-sm text-on-surface-variant">Infrastructure • Scheduled for review</p></div>
                        <span class="shrink-0 rounded-full bg-slate-100 px-3 py-1 text-[11px] font-bold uppercase tracking-[0.18em] text-slate-600">Inactive</span>
                    </div>
                </div>
            </section>

            <section class="rounded-3xl border border-primary/10 bg-surface-container-lowest p-6 shadow-[0_12px_32px_rgba(53,37,205,0.05)]">
                <p class="text-xs font-black uppercase tracking-[0.28em] text-slate-400">Filter Presets</p>
                <h3 class="mt-2 text-xl font-black text-on-surface headline-text">Quick Views</h3>
                <div class="mt-6 space-y-3">
                    <button class="flex w-full items-center justify-between rounded-2xl bg-surface-container-low px-4 py-4 text-left transition-all hover:bg-surface-container-high" data-table-preset data-preset-status="pending" data-preset-category="all" data-preset-search="" type="button">
                        <span><span class="block font-semibold text-on-surface">Needs Approval</span><span class="block text-sm text-on-surface-variant">Pending assets assigned this week</span></span>
                        <span class="material-symbols-outlined text-slate-400">arrow_forward</span>
                    </button>
                    <button class="flex w-full items-center justify-between rounded-2xl bg-surface-container-low px-4 py-4 text-left transition-all hover:bg-surface-container-high" data-table-preset data-preset-status="active" data-preset-category="investor relations" data-preset-search="" type="button">
                        <span><span class="block font-semibold text-on-surface">Investor Pack</span><span class="block text-sm text-on-surface-variant">Relations documents updated today</span></span>
                        <span class="material-symbols-outlined text-slate-400">arrow_forward</span>
                    </button>
                    <button class="flex w-full items-center justify-between rounded-2xl bg-surface-container-low px-4 py-4 text-left transition-all hover:bg-surface-container-high" data-table-preset data-preset-status="inactive" data-preset-category="system logs" data-preset-search="" type="button">
                        <span><span class="block font-semibold text-on-surface">Archive Candidates</span><span class="block text-sm text-on-surface-variant">Inactive records older than 30 days</span></span>
                        <span class="material-symbols-outlined text-slate-400">arrow_forward</span>
                    </button>
                </div>
            </section>
        </div>
    </div>
@endsection
