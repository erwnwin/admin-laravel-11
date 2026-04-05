<header
    class="sticky top-0 z-40 flex items-center justify-between bg-white/80 px-6 py-3 shadow-[0_20px_50px_rgba(53,37,205,0.08)] backdrop-blur-md">
    <div class="flex flex-1 items-center gap-4">
        <button class="rounded-lg p-2 text-slate-500 transition-colors hover:bg-slate-100 md:hidden"
            data-mobile-drawer-toggle type="button">
            <span class="material-symbols-outlined">menu</span>
        </button>
    </div>

    <div class="flex items-center gap-2 md:gap-4">
        <div class="relative" data-profile-menu>
            <button
                class="group flex items-center gap-3 rounded-2xl border border-transparent pl-2 pr-1 py-1 transition-all hover:border-indigo-100 hover:bg-white/80 focus:outline-none focus:ring-2 focus:ring-indigo-100"
                data-profile-toggle type="button" aria-expanded="false">
                <div class="hidden text-right sm:block">
                    <p class="text-sm font-bold leading-none text-on-surface">Erwin, S.Kom</p>
                    <p class="text-[11px] font-medium text-on-surface-variant">Programmer</p>
                </div>
                <div class="relative">
                    <img class="h-10 w-10 rounded-full object-cover ring-2 ring-white shadow-md transition-all group-hover:ring-primary/30"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuC02beaqRMja-q_13k7_WoAOPs-Ml7FZ3vnq6nJlOKU6FN_qxAL_TtdDuYZwV41g_3ZlS_AbsjmSv2L9miuCXEp0BnrbbG-pmk6QoCaDR7Vg9zgJimOtBCPG-ST_T1xXN3AIjtQL486jqWtBgejMJNBwMQtpxkNuXWi6PCOQzAA8p9bF91fpwkBDLpB78JmWaCjLIOI5aQT2N1U2WVgrVCtn1cwuqN1rKXzmL_FSCAp1uVJeTnNEVHqGP5vXZOSN33uymK-0uPgVTXT"
                        alt="User profile avatar">
                    <div class="absolute bottom-0 right-0 h-3 w-3 rounded-full border-2 border-white bg-green-500">
                    </div>
                </div>
                <span class="material-symbols-outlined hidden text-slate-400 transition-transform duration-300 sm:block"
                    data-profile-chevron>expand_more</span>
            </button>

            <div class="profile-menu pointer-events-none absolute right-0 top-[calc(100%+0.75rem)] z-50 w-72 translate-y-2 rounded-3xl border border-slate-100 bg-white p-3 opacity-0 shadow-[0_24px_60px_rgba(53,37,205,0.12)] transition-all duration-200"
                data-profile-panel>
                <div class="rounded-2xl bg-gradient-to-br from-indigo-50 via-white to-slate-50 p-4">
                    <div class="flex items-center gap-3">
                        <img class="h-14 w-14 rounded-2xl object-cover shadow-sm"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuC02beaqRMja-q_13k7_WoAOPs-Ml7FZ3vnq6nJlOKU6FN_qxAL_TtdDuYZwV41g_3ZlS_AbsjmSv2L9miuCXEp0BnrbbG-pmk6QoCaDR7Vg9zgJimOtBCPG-ST_T1xXN3AIjtQL486jqWtBgejMJNBwMQtpxkNuXWi6PCOQzAA8p9bF91fpwkBDLpB78JmWaCjLIOI5aQT2N1U2WVgrVCtn1cwuqN1rKXzmL_FSCAp1uVJeTnNEVHqGP5vXZOSN33uymK-0uPgVTXT"
                            alt="Alex Rivers avatar">
                        <div class="min-w-0">
                            <p class="truncate text-sm font-black text-on-surface">Erwin, S.Kom</p>
                            <p class="text-xs font-medium text-on-surface-variant">Programmer</p>
                            <p class="truncate pt-1 text-xs text-slate-400">erwin@codeta.id</p>
                        </div>
                    </div>
                </div>

                <div class="mt-3 space-y-1">
                    <a class="flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-semibold text-slate-600 transition-all hover:bg-slate-50 hover:text-primary"
                        href="{{ route('profile') }}">
                        <span class="material-symbols-outlined text-[20px]">person_outline</span>
                        View Profile
                    </a>
                    <a class="flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-semibold text-slate-600 transition-all hover:bg-slate-50 hover:text-primary"
                        href="{{ route('settings') }}">
                        <span class="material-symbols-outlined text-[20px]">settings</span>
                        Account Settings
                    </a>
                    <a class="flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-semibold text-slate-600 transition-all hover:bg-rose-50 hover:text-error"
                        href="{{ route('login') }}">
                        <span class="material-symbols-outlined text-[20px]">logout</span>
                        Logout
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
