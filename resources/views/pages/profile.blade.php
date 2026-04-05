@extends('layouts.admin')

@section('content')
    <div class="p-6 md:p-10 max-w-full w-full">
        <header class="mb-10 flex flex-col md:flex-row md:items-end justify-between gap-6">
            <div>
                <h2 class="text-3xl md:text-4xl font-extrabold headline-text tracking-tight text-on-surface mb-2">User
                    Profile</h2>
                <p class="text-on-surface-variant max-w-lg text-lg">Manage your personal information, security preferences,
                    and account identity.</p>
            </div>
            <div class="flex gap-3">
                <div
                    class="px-4 py-2 bg-surface-container-low rounded-xl flex items-center gap-2 text-sm font-semibold text-on-surface-variant">
                    <span class="material-symbols-outlined text-lg" data-icon="person">person</span>
                    ID: 884-291
                </div>
            </div>
        </header>
        <!-- Hero Profile Section -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-start">
            <!-- Central Avatar & Identity Card -->
            <div
                class="md:col-span-1 bg-surface-container-lowest rounded-xl p-8 flex flex-col items-center text-center shadow-[0_10px_40px_rgba(0,0,0,0.03)]">
                <div class="relative group mb-6">
                    <div class="w-32 h-32 rounded-full overflow-hidden ring-4 ring-indigo-50">
                        <img alt="User profile avatar" class="w-full h-full object-cover"
                            data-alt="Professional headshot of a man with friendly expression, clean haircut, soft bokeh background of a high-end creative studio"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuC02beaqRMja-q_13k7_WoAOPs-Ml7FZ3vnq6nJlOKU6FN_qxAL_TtdDuYZwV41g_3ZlS_AbsjmSv2L9miuCXEp0BnrbbG-pmk6QoCaDR7Vg9zgJimOtBCPG-ST_T1xXN3AIjtQL486jqWtBgejMJNBwMQtpxkNuXWi6PCOQzAA8p9bF91fpwkBDLpB78JmWaCjLIOI5aQT2N1U2WVgrVCtn1cwuqN1rKXzmL_FSCAp1uVJeTnNEVHqGP5vXZOSN33uymK-0uPgVTXT" />
                    </div>
                    <button
                        class="absolute bottom-1 right-1 bg-primary text-white p-2 rounded-full shadow-lg hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined text-sm" data-icon="edit">edit</span>
                    </button>
                </div>
                <h1 class="text-2xl font-bold text-on-surface headline-text tracking-tight">Jordan Henderson</h1>
                <p class="text-on-surface-variant text-sm mb-4">Senior Enterprise Administrator</p>
                <div class="flex gap-2">
                    <span
                        class="bg-indigo-50 text-indigo-700 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-widest">Admin</span>
                    <span
                        class="bg-slate-100 text-slate-600 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-widest">Active</span>
                </div>
            </div>
            <!-- Personal Information Form -->
            <div class="md:col-span-2 space-y-8">
                <section class="bg-surface-container-lowest rounded-xl p-8 shadow-[0_10px_40px_rgba(0,0,0,0.03)]">
                    <div class="flex items-center justify-between mb-8">
                        <div>
                            <h2 class="text-xl font-extrabold text-on-surface headline-text tracking-tight">Personal
                                Information</h2>
                            <p class="text-on-surface-variant text-sm mt-1">Manage your public profile and identity
                                settings.</p>
                        </div>
                        <span class="material-symbols-outlined text-indigo-300" data-icon="badge">badge</span>
                    </div>
                    <form class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-6">
                        <div class="space-y-2">
                            <label class="block text-sm font-semibold text-on-surface-variant">Full Name</label>
                            <input
                                class="w-full bg-surface-container-highest/50 border-none rounded-lg px-4 py-3 text-on-surface focus:ring-2 focus:ring-primary/20 transition-all outline-none"
                                type="text" value="Jordan Henderson" />
                        </div>
                        <div class="space-y-2">
                            <label class="block text-sm font-semibold text-on-surface-variant">Email Address</label>
                            <input
                                class="w-full bg-surface-container-highest/50 border-none rounded-lg px-4 py-3 text-on-surface focus:ring-2 focus:ring-primary/20 transition-all outline-none"
                                type="email" value="j.henderson@graphite.io" />
                        </div>
                        <div class="space-y-2">
                            <label class="block text-sm font-semibold text-on-surface-variant">Role Title</label>
                            <input
                                class="w-full bg-surface-container-highest/50 border-none rounded-lg px-4 py-3 text-on-surface focus:ring-2 focus:ring-primary/20 transition-all outline-none"
                                type="text" value="Senior Enterprise Administrator" />
                        </div>
                        <div class="space-y-2">
                            <label class="block text-sm font-semibold text-on-surface-variant">Work Location</label>
                            <select
                                class="w-full bg-surface-container-highest/50 border-none rounded-lg px-4 py-3 text-on-surface focus:ring-2 focus:ring-primary/20 transition-all outline-none appearance-none cursor-pointer">
                                <option>London, United Kingdom</option>
                                <option>New York, USA</option>
                                <option>Berlin, Germany</option>
                            </select>
                        </div>
                        <div class="md:col-span-2 pt-4 flex gap-3">
                            <button
                                class="bg-gradient-to-br from-primary to-primary-container text-white px-6 py-3 rounded-lg font-bold shadow-lg shadow-indigo-200 hover:shadow-indigo-300 transition-all"
                                type="button">
                                Update Profile
                            </button>
                            <button
                                class="text-on-surface-variant font-semibold hover:text-primary transition-colors px-6 py-3"
                                type="button">Discard Changes</button>
                        </div>
                    </form>
                </section>
                <!-- Security / Change Password Section -->
                <section class="bg-surface-container-lowest rounded-xl p-8 shadow-[0_10px_40px_rgba(0,0,0,0.03)]">
                    <div class="flex items-center justify-between mb-8">
                        <div>
                            <h2 class="text-xl font-extrabold text-on-surface headline-text tracking-tight">Security
                                Credentials</h2>
                            <p class="text-on-surface-variant text-sm mt-1">Keep your account secure with regular password
                                rotations.</p>
                        </div>
                        <span class="material-symbols-outlined text-indigo-300" data-icon="shield_lock">shield_lock</span>
                    </div>
                    <div class="space-y-6">
                        <div class="flex flex-col md:flex-row gap-6">
                            <div class="flex-1 space-y-2">
                                <label class="block text-sm font-semibold text-on-surface-variant">Current Password</label>
                                <div class="relative">
                                    <input
                                        class="w-full bg-surface-container-highest/50 border-none rounded-lg px-4 py-3 text-on-surface focus:ring-2 focus:ring-primary/20 transition-all outline-none"
                                        placeholder="••••••••••••" type="password" />
                                    <span
                                        class="material-symbols-outlined absolute right-3 top-3 text-slate-400 cursor-pointer"
                                        data-icon="visibility">visibility</span>
                                </div>
                            </div>
                            <div class="flex-1 space-y-2">
                                <label class="block text-sm font-semibold text-on-surface-variant">New Password</label>
                                <input
                                    class="w-full bg-surface-container-highest/50 border-none rounded-lg px-4 py-3 text-on-surface focus:ring-2 focus:ring-primary/20 transition-all outline-none"
                                    placeholder="Min. 12 characters" type="password" />
                            </div>
                        </div>
                        <div class="flex justify-start">
                            <button
                                class="bg-surface-container-high text-on-secondary-container px-6 py-3 rounded-lg font-bold hover:bg-surface-container-highest transition-all"
                                type="button">
                                Change Password
                            </button>
                        </div>
                    </div>
                </section>
                <!-- Preferences Section -->
                <section
                    class="bg-surface-container-lowest rounded-xl p-8 border-l-4 border-tertiary shadow-[0_10px_40px_rgba(0,0,0,0.03)]">
                    <div class="flex items-start gap-4">
                        <div class="bg-tertiary-fixed text-on-tertiary-fixed-variant p-3 rounded-xl">
                            <span class="material-symbols-outlined" data-icon="warning">warning</span>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold headline-text text-on-surface">Data Retention Policy</h3>
                            <p class="text-on-surface-variant text-sm mt-1 leading-relaxed">
                                Your profile data is stored according to the Enterprise Graphite policy. Requesting a full
                                data export will take up to 24 hours. Profile deletions are irreversible.
                            </p>
                            <button
                                class="mt-4 text-tertiary-container font-bold text-sm uppercase tracking-wider hover:underline">Learn
                                More</button>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
