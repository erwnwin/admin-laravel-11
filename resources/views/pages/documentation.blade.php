@extends('layouts.documentation')

@section('content')
    <div class="mx-auto min-h-screen w-full max-w-6xl px-6 py-10 md:px-10 lg:px-12" data-documentation-page>
        <header
            class="rounded-[2rem] border border-white/70 bg-white/90 p-8 shadow-[0_24px_60px_rgba(15,23,42,0.08)] backdrop-blur">
            <div class="flex flex-col gap-8 lg:flex-row lg:items-end lg:justify-between">
                <div class="max-w-3xl">
                    <p class="text-xs font-black uppercase tracking-[0.28em] text-primary">
                        <span data-doc-copy data-lang-en="Documentation" data-lang-id="Dokumentasi">Documentation</span>
                    </p>
                    <h1 class="mt-4 text-4xl font-black tracking-tight text-on-surface headline-text md:text-5xl">
                        <span data-doc-copy data-lang-en="Admin Laravel Documentation"
                            data-lang-id="Dokumentasi Admin Laravel">Admin Laravel Documentation</span>
                    </h1>
                    <p class="mt-4 text-lg leading-relaxed text-on-surface-variant">
                        <span data-doc-copy
                            data-lang-en="Reference guide for the CODETA admin starter: structure, setup flow, frontend stack, and the next recommendations to turn this template into a production-ready admin panel."
                            data-lang-id="Panduan referensi untuk starter admin CODETA: struktur proyek, alur setup, stack frontend, dan rekomendasi lanjutan agar template ini siap menjadi panel admin yang production-ready.">Reference guide for the CODETA admin starter: structure, setup flow, frontend stack, and the next recommendations to turn this template into a production-ready admin panel.</span>
                    </p>
                </div>

                <div class="flex flex-wrap items-center gap-3">
                    <div class="inline-flex rounded-2xl bg-surface-container-low p-1">
                        <button class="rounded-xl px-4 py-2 text-sm font-bold transition-all" data-doc-language="id"
                            type="button">Indonesia</button>
                        <button class="rounded-xl px-4 py-2 text-sm font-bold transition-all" data-doc-language="en"
                            type="button">English</button>
                    </div>

                    <a class="inline-flex items-center gap-2 rounded-2xl bg-primary px-5 py-3 text-sm font-bold text-white shadow-lg shadow-indigo-100 transition-all hover:opacity-90"
                        href="{{ route('dashboard') }}">
                        <span class="material-symbols-outlined text-lg">arrow_back</span>
                        <span data-doc-copy data-lang-en="Back to Dashboard" data-lang-id="Kembali ke Dashboard">Back
                            to Dashboard</span>
                    </a>
                    <a class="inline-flex items-center gap-2 rounded-2xl border border-slate-200 bg-white px-5 py-3 text-sm font-semibold text-on-surface transition-all hover:bg-slate-50"
                        href="#recommendations">
                        <span class="material-symbols-outlined text-lg">tips_and_updates</span>
                        <span data-doc-copy data-lang-en="Setup Recommendations"
                            data-lang-id="Rekomendasi Setup">Setup Recommendations</span>
                    </a>
                </div>
            </div>

            <div class="mt-8 flex flex-wrap gap-3 text-sm">
                <a class="rounded-full bg-surface-container-low px-4 py-2 font-semibold text-on-surface transition-all hover:bg-surface-container-high"
                    href="#quick-start"><span data-doc-copy data-lang-en="Quick Start" data-lang-id="Mulai Cepat">Quick Start</span></a>
                <a class="rounded-full bg-surface-container-low px-4 py-2 font-semibold text-on-surface transition-all hover:bg-surface-container-high"
                    href="#project-map"><span data-doc-copy data-lang-en="Project Map" data-lang-id="Peta Proyek">Project Map</span></a>
                <a class="rounded-full bg-surface-container-low px-4 py-2 font-semibold text-on-surface transition-all hover:bg-surface-container-high"
                    href="#feature-notes"><span data-doc-copy data-lang-en="Feature Notes" data-lang-id="Catatan Fitur">Feature Notes</span></a>
                <a class="rounded-full bg-surface-container-low px-4 py-2 font-semibold text-on-surface transition-all hover:bg-surface-container-high"
                    href="#recommendations"><span data-doc-copy data-lang-en="Recommendations" data-lang-id="Rekomendasi">Recommendations</span></a>
                <a class="rounded-full bg-surface-container-low px-4 py-2 font-semibold text-on-surface transition-all hover:bg-surface-container-high"
                    href="#go-live"><span data-doc-copy data-lang-en="Go Live Checklist" data-lang-id="Checklist Go Live">Go Live Checklist</span></a>
            </div>
        </header>

        <div class="mt-10 grid gap-6 xl:grid-cols-[minmax(0,1fr)_320px]">
            <div class="space-y-6">
                <section class="rounded-[2rem] border border-slate-100 bg-white p-8 shadow-[0_18px_48px_rgba(15,23,42,0.05)]"
                    id="quick-start">
                    <p class="text-xs font-black uppercase tracking-[0.28em] text-slate-400">
                        <span data-doc-copy data-lang-en="Quick Start" data-lang-id="Mulai Cepat">Quick Start</span>
                    </p>
                    <h2 class="mt-3 text-2xl font-black text-on-surface headline-text">
                        <span data-doc-copy data-lang-en="Run the admin locally" data-lang-id="Jalankan admin secara lokal">Run the admin locally</span>
                    </h2>
                    <div class="mt-6 rounded-3xl bg-slate-950 p-6 text-sm text-slate-100">
                        <pre class="overflow-x-auto whitespace-pre-wrap font-mono leading-7">composer install
npm install
copy .env.example .env
php artisan key:generate
php artisan serve
npm run dev</pre>
                    </div>
                    <p class="mt-4 text-sm leading-relaxed text-on-surface-variant">
                        <span data-doc-copy
                            data-lang-en="The current template already uses Vite for asset bundling, Tailwind CSS for styling, and demo client-side interactions for auth, forms, icons, and table workflows."
                            data-lang-id="Template saat ini sudah memakai Vite untuk bundling aset, Tailwind CSS untuk styling, serta interaksi client-side demo untuk auth, forms, icons, dan workflow tabel.">The current template already uses Vite for asset bundling, Tailwind CSS for styling, and demo client-side interactions for auth, forms, icons, and table workflows.</span>
                    </p>
                </section>

                <section class="rounded-[2rem] border border-slate-100 bg-white p-8 shadow-[0_18px_48px_rgba(15,23,42,0.05)]"
                    id="project-map">
                    <p class="text-xs font-black uppercase tracking-[0.28em] text-slate-400">
                        <span data-doc-copy data-lang-en="Project Map" data-lang-id="Peta Proyek">Project Map</span>
                    </p>
                    <h2 class="mt-3 text-2xl font-black text-on-surface headline-text">
                        <span data-doc-copy data-lang-en="Key folders and responsibilities" data-lang-id="Folder penting dan tanggung jawabnya">Key folders and responsibilities</span>
                    </h2>
                    <div class="mt-6 grid gap-4 md:grid-cols-2">
                        <article class="rounded-3xl bg-surface-container-low p-5">
                            <h3 class="text-lg font-bold text-on-surface"><span data-doc-copy data-lang-en="Blade Views" data-lang-id="Blade Views">Blade Views</span></h3>
                            <p class="mt-2 text-sm text-on-surface-variant">
                                <span data-doc-copy
                                    data-lang-en="The resources/views/pages folder stores dashboard screens, while reusable UI lives in resources/views/components and layouts live in resources/views/layouts."
                                    data-lang-id="Folder resources/views/pages menyimpan halaman dashboard, sedangkan UI yang dapat dipakai ulang berada di resources/views/components dan layout ada di resources/views/layouts.">The resources/views/pages folder stores dashboard screens, while reusable UI lives in resources/views/components and layouts live in resources/views/layouts.</span>
                            </p>
                        </article>
                        <article class="rounded-3xl bg-surface-container-low p-5">
                            <h3 class="text-lg font-bold text-on-surface"><span data-doc-copy data-lang-en="Frontend Assets" data-lang-id="Aset Frontend">Frontend Assets</span></h3>
                            <p class="mt-2 text-sm text-on-surface-variant">
                                <span data-doc-copy
                                    data-lang-en="The resources/js/app.js file handles interactive UI behavior and resources/css/app.css centralizes visual tokens plus utility overrides."
                                    data-lang-id="File resources/js/app.js menangani perilaku UI interaktif dan resources/css/app.css memusatkan token visual beserta utility override.">The resources/js/app.js file handles interactive UI behavior and resources/css/app.css centralizes visual tokens plus utility overrides.</span>
                            </p>
                        </article>
                        <article class="rounded-3xl bg-surface-container-low p-5">
                            <h3 class="text-lg font-bold text-on-surface"><span data-doc-copy data-lang-en="HTTP Layer" data-lang-id="Lapisan HTTP">HTTP Layer</span></h3>
                            <p class="mt-2 text-sm text-on-surface-variant">
                                <span data-doc-copy
                                    data-lang-en="The routes/web.php file maps page routes and app/Http/Controllers/PageController.php provides the page rendering methods."
                                    data-lang-id="File routes/web.php memetakan route halaman dan app/Http/Controllers/PageController.php menyediakan method untuk merender halaman.">The routes/web.php file maps page routes and app/Http/Controllers/PageController.php provides the page rendering methods.</span>
                            </p>
                        </article>
                        <article class="rounded-3xl bg-surface-container-low p-5">
                            <h3 class="text-lg font-bold text-on-surface"><span data-doc-copy data-lang-en="Verification" data-lang-id="Verifikasi">Verification</span></h3>
                            <p class="mt-2 text-sm text-on-surface-variant">
                                <span data-doc-copy
                                    data-lang-en="The tests/Feature/AdminPagesTest.php file gives lightweight route coverage so layout regressions are easier to catch after changes."
                                    data-lang-id="File tests/Feature/AdminPagesTest.php memberikan coverage route ringan agar regresi layout lebih mudah terdeteksi setelah ada perubahan.">The tests/Feature/AdminPagesTest.php file gives lightweight route coverage so layout regressions are easier to catch after changes.</span>
                            </p>
                        </article>
                    </div>
                </section>

                <section class="rounded-[2rem] border border-slate-100 bg-white p-8 shadow-[0_18px_48px_rgba(15,23,42,0.05)]"
                    id="feature-notes">
                    <p class="text-xs font-black uppercase tracking-[0.28em] text-slate-400">
                        <span data-doc-copy data-lang-en="Feature Notes" data-lang-id="Catatan Fitur">Feature Notes</span>
                    </p>
                    <h2 class="mt-3 text-2xl font-black text-on-surface headline-text">
                        <span data-doc-copy data-lang-en="What this admin starter already covers" data-lang-id="Cakupan yang sudah dimiliki starter admin ini">What this admin starter already covers</span>
                    </h2>
                    <div class="mt-6 space-y-4">
                        <div class="rounded-3xl border border-slate-100 p-5">
                            <h3 class="text-lg font-bold text-on-surface"><span data-doc-copy data-lang-en="Admin shell experience" data-lang-id="Pengalaman shell admin">Admin shell experience</span></h3>
                            <p class="mt-2 text-sm leading-relaxed text-on-surface-variant">
                                <span data-doc-copy
                                    data-lang-en="The template already supports responsive sidebar navigation, persistent collapse state, mobile drawer behavior, and profile dropdown actions."
                                    data-lang-id="Template ini sudah mendukung navigasi sidebar responsif, state collapse yang tersimpan, perilaku mobile drawer, dan aksi dropdown profile.">The template already supports responsive sidebar navigation, persistent collapse state, mobile drawer behavior, and profile dropdown actions.</span>
                            </p>
                        </div>
                        <div class="rounded-3xl border border-slate-100 p-5">
                            <h3 class="text-lg font-bold text-on-surface"><span data-doc-copy data-lang-en="Operational screens" data-lang-id="Halaman operasional">Operational screens</span></h3>
                            <p class="mt-2 text-sm leading-relaxed text-on-surface-variant">
                                <span data-doc-copy
                                    data-lang-en="Dashboard, data table, forms, icons, profile, settings, login, register, and forgot password are already connected through Laravel routing and Blade layouts."
                                    data-lang-id="Dashboard, data table, forms, icons, profile, settings, login, register, dan forgot password sudah terhubung melalui routing Laravel dan layout Blade.">Dashboard, data table, forms, icons, profile, settings, login, register, and forgot password are already connected through Laravel routing and Blade layouts.</span>
                            </p>
                        </div>
                        <div class="rounded-3xl border border-slate-100 p-5">
                            <h3 class="text-lg font-bold text-on-surface"><span data-doc-copy data-lang-en="Interactive data table" data-lang-id="Data table interaktif">Interactive data table</span></h3>
                            <p class="mt-2 text-sm leading-relaxed text-on-surface-variant">
                                <span data-doc-copy
                                    data-lang-en="Search, chip filters, category select, row selection, quick preset views, and pagination now work together on the client side for a cleaner admin workflow demo."
                                    data-lang-id="Search, chip filter, category select, pemilihan baris, quick preset view, dan pagination sekarang bekerja bersama di sisi client untuk demo workflow admin yang lebih rapi.">Search, chip filters, category select, row selection, quick preset views, and pagination now work together on the client side for a cleaner admin workflow demo.</span>
                            </p>
                        </div>
                    </div>
                </section>

                <section class="rounded-[2rem] border border-primary/10 bg-white p-8 shadow-[0_18px_48px_rgba(53,37,205,0.08)]"
                    id="recommendations">
                    <p class="text-xs font-black uppercase tracking-[0.28em] text-primary">
                        <span data-doc-copy data-lang-en="Recommendations" data-lang-id="Rekomendasi">Recommendations</span>
                    </p>
                    <h2 class="mt-3 text-2xl font-black text-on-surface headline-text">
                        <span data-doc-copy data-lang-en="Recommended next setup for admin-laravel" data-lang-id="Rekomendasi setup berikutnya untuk admin-laravel">Recommended next setup for admin-laravel</span>
                    </h2>
                    <div class="mt-6 grid gap-4 md:grid-cols-2">
                        <article class="rounded-3xl bg-indigo-50 p-5">
                            <h3 class="text-lg font-bold text-on-surface"><span data-doc-copy data-lang-en="1. Add real authentication" data-lang-id="1. Tambahkan autentikasi yang nyata">1. Add real authentication</span></h3>
                            <p class="mt-2 text-sm leading-relaxed text-on-surface-variant">
                                <span data-doc-copy
                                    data-lang-en="Replace demo auth redirects with Laravel auth actions, password reset mail flow, and middleware-protected admin routes."
                                    data-lang-id="Ganti redirect auth demo dengan action auth Laravel, alur email reset password, dan route admin yang diproteksi middleware.">Replace demo auth redirects with Laravel auth actions, password reset mail flow, and middleware-protected admin routes.</span>
                            </p>
                        </article>
                        <article class="rounded-3xl bg-emerald-50 p-5">
                            <h3 class="text-lg font-bold text-on-surface"><span data-doc-copy data-lang-en="2. Move demo table to database data" data-lang-id="2. Pindahkan tabel demo ke data database">2. Move demo table to database data</span></h3>
                            <p class="mt-2 text-sm leading-relaxed text-on-surface-variant">
                                <span data-doc-copy
                                    data-lang-en="Render records from Eloquent or API resources so search, pagination, filters, and bulk actions can evolve into production features."
                                    data-lang-id="Render data dari Eloquent atau API resource agar search, pagination, filter, dan bulk action bisa berkembang menjadi fitur production.">Render records from Eloquent or API resources so search, pagination, filters, and bulk actions can evolve into production features.</span>
                            </p>
                        </article>
                        <article class="rounded-3xl bg-amber-50 p-5">
                            <h3 class="text-lg font-bold text-on-surface"><span data-doc-copy data-lang-en="3. Separate UI demo and business modules" data-lang-id="3. Pisahkan demo UI dan modul bisnis">3. Separate UI demo and business modules</span></h3>
                            <p class="mt-2 text-sm leading-relaxed text-on-surface-variant">
                                <span data-doc-copy
                                    data-lang-en="Keep template showcase pages for inspiration, but build domain-specific modules for users, reports, inventory, or transactions in their own route groups."
                                    data-lang-id="Tetap simpan halaman showcase template untuk inspirasi, tetapi bangun modul spesifik domain seperti users, reports, inventory, atau transactions dalam grup route masing-masing.">Keep template showcase pages for inspiration, but build domain-specific modules for users, reports, inventory, or transactions in their own route groups.</span>
                            </p>
                        </article>
                        <article class="rounded-3xl bg-rose-50 p-5">
                            <h3 class="text-lg font-bold text-on-surface"><span data-doc-copy data-lang-en="4. Strengthen environment setup" data-lang-id="4. Perkuat setup environment">4. Strengthen environment setup</span></h3>
                            <p class="mt-2 text-sm leading-relaxed text-on-surface-variant">
                                <span data-doc-copy
                                    data-lang-en="Standardize .env values per environment, enable queue workers when needed, and decide early whether the project will use MySQL, PostgreSQL, or SQLite only for demos."
                                    data-lang-id="Standarkan nilai .env untuk tiap environment, aktifkan queue worker saat dibutuhkan, dan tentukan sejak awal apakah proyek akan memakai MySQL, PostgreSQL, atau SQLite hanya untuk demo.">Standardize .env values per environment, enable queue workers when needed, and decide early whether the project will use MySQL, PostgreSQL, or SQLite only for demos.</span>
                            </p>
                        </article>
                        <article class="rounded-3xl bg-sky-50 p-5">
                            <h3 class="text-lg font-bold text-on-surface"><span data-doc-copy data-lang-en="5. Improve test coverage" data-lang-id="5. Tingkatkan coverage test">5. Improve test coverage</span></h3>
                            <p class="mt-2 text-sm leading-relaxed text-on-surface-variant">
                                <span data-doc-copy
                                    data-lang-en="Add feature tests for auth flows, middleware access, and form submissions so future UI polishing does not hide backend regressions."
                                    data-lang-id="Tambahkan feature test untuk alur auth, akses middleware, dan submit form agar polesan UI berikutnya tidak menutupi regresi backend.">Add feature tests for auth flows, middleware access, and form submissions so future UI polishing does not hide backend regressions.</span>
                            </p>
                        </article>
                        <article class="rounded-3xl bg-slate-100 p-5">
                            <h3 class="text-lg font-bold text-on-surface"><span data-doc-copy data-lang-en="6. Add admin permissions" data-lang-id="6. Tambahkan permission admin">6. Add admin permissions</span></h3>
                            <p class="mt-2 text-sm leading-relaxed text-on-surface-variant">
                                <span data-doc-copy
                                    data-lang-en="Introduce role and permission control before the project grows, especially if the admin will be used by multiple teams with different access levels."
                                    data-lang-id="Tambahkan kontrol role dan permission sebelum proyek berkembang lebih besar, terutama jika admin akan dipakai oleh beberapa tim dengan level akses berbeda.">Introduce role and permission control before the project grows, especially if the admin will be used by multiple teams with different access levels.</span>
                            </p>
                        </article>
                    </div>
                </section>

                <section class="rounded-[2rem] border border-slate-100 bg-white p-8 shadow-[0_18px_48px_rgba(15,23,42,0.05)]"
                    id="go-live">
                    <p class="text-xs font-black uppercase tracking-[0.28em] text-slate-400">
                        <span data-doc-copy data-lang-en="Go Live Checklist" data-lang-id="Checklist Go Live">Go Live Checklist</span>
                    </p>
                    <h2 class="mt-3 text-2xl font-black text-on-surface headline-text">
                        <span data-doc-copy data-lang-en="Before using this in production" data-lang-id="Sebelum memakai ini di production">Before using this in production</span>
                    </h2>
                    <div class="mt-6 grid gap-3">
                        <div class="flex items-start gap-3 rounded-2xl bg-surface-container-low px-5 py-4">
                            <span class="material-symbols-outlined text-primary">check_circle</span>
                            <p class="text-sm text-on-surface-variant">
                                <span data-doc-copy
                                    data-lang-en="Use real auth and CSRF-protected form submissions for every protected action."
                                    data-lang-id="Gunakan auth yang nyata dan submit form yang dilindungi CSRF untuk setiap aksi yang diproteksi.">Use real auth and CSRF-protected form submissions for every protected action.</span>
                            </p>
                        </div>
                        <div class="flex items-start gap-3 rounded-2xl bg-surface-container-low px-5 py-4">
                            <span class="material-symbols-outlined text-primary">check_circle</span>
                            <p class="text-sm text-on-surface-variant">
                                <span data-doc-copy
                                    data-lang-en="Enable optimized deployment commands such as php artisan optimize and npm run build."
                                    data-lang-id="Aktifkan command deployment yang teroptimasi seperti php artisan optimize dan npm run build.">Enable optimized deployment commands such as php artisan optimize and npm run build.</span>
                            </p>
                        </div>
                        <div class="flex items-start gap-3 rounded-2xl bg-surface-container-low px-5 py-4">
                            <span class="material-symbols-outlined text-primary">check_circle</span>
                            <p class="text-sm text-on-surface-variant">
                                <span data-doc-copy
                                    data-lang-en="Audit every demo interaction in JavaScript and connect it to a backend endpoint or remove it."
                                    data-lang-id="Audit setiap interaksi demo di JavaScript dan hubungkan ke endpoint backend atau hapus bila tidak dipakai.">Audit every demo interaction in JavaScript and connect it to a backend endpoint or remove it.</span>
                            </p>
                        </div>
                        <div class="flex items-start gap-3 rounded-2xl bg-surface-container-low px-5 py-4">
                            <span class="material-symbols-outlined text-primary">check_circle</span>
                            <p class="text-sm text-on-surface-variant">
                                <span data-doc-copy
                                    data-lang-en="Prepare logging, monitoring, backup, and queue strategy before onboarding real users."
                                    data-lang-id="Siapkan strategi logging, monitoring, backup, dan queue sebelum mengundang user sungguhan.">Prepare logging, monitoring, backup, and queue strategy before onboarding real users.</span>
                            </p>
                        </div>
                    </div>
                </section>
            </div>

            <aside
                class="h-fit rounded-[2rem] border border-slate-100 bg-white p-6 shadow-[0_18px_48px_rgba(15,23,42,0.05)] xl:sticky xl:top-8">
                <p class="text-xs font-black uppercase tracking-[0.28em] text-slate-400">
                    <span data-doc-copy data-lang-en="At a Glance" data-lang-id="Sekilas">At a Glance</span>
                </p>
                <div class="mt-5 space-y-3">
                    <div class="rounded-2xl bg-surface-container-low p-4">
                        <p class="text-xs font-black uppercase tracking-[0.24em] text-slate-400"><span data-doc-copy data-lang-en="Framework" data-lang-id="Framework">Framework</span></p>
                        <p class="mt-2 text-lg font-bold text-on-surface">Laravel 11</p>
                    </div>
                    <div class="rounded-2xl bg-surface-container-low p-4">
                        <p class="text-xs font-black uppercase tracking-[0.24em] text-slate-400"><span data-doc-copy data-lang-en="Frontend" data-lang-id="Frontend">Frontend</span></p>
                        <p class="mt-2 text-lg font-bold text-on-surface">Blade + Tailwind + Vite</p>
                    </div>
                    <div class="rounded-2xl bg-surface-container-low p-4">
                        <p class="text-xs font-black uppercase tracking-[0.24em] text-slate-400"><span data-doc-copy data-lang-en="Current Focus" data-lang-id="Fokus Saat Ini">Current Focus</span></p>
                        <p class="mt-2 text-lg font-bold text-on-surface"><span data-doc-copy data-lang-en="UI shell ready, backend flows next" data-lang-id="Shell UI siap, alur backend berikutnya">UI shell ready, backend flows next</span></p>
                    </div>
                </div>
            </aside>
        </div>

        <footer
            class="mt-8 flex flex-col gap-3 rounded-[2rem] border border-slate-100 bg-white px-6 py-5 text-sm text-on-surface-variant shadow-[0_18px_48px_rgba(15,23,42,0.05)] md:flex-row md:items-center md:justify-between">
            <p>
                <span data-doc-copy data-lang-en="Documentation support by CODET.ID"
                    data-lang-id="Dokumentasi didukung oleh CODET.ID">Documentation support by CODET.ID</span>
            </p>
            <a class="font-semibold text-primary transition-colors hover:text-indigo-700" href="https://codeta.my.id"
                rel="noreferrer" target="_blank">CODET.ID / codeta.my.id</a>
        </footer>
    </div>
@endsection
