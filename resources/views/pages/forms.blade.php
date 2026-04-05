@extends('layouts.admin')

@section('content')
    <div class="p-6 md:p-10 max-w-full w-full">
        <header class="mb-10 flex flex-col md:flex-row md:items-end justify-between gap-6">
            <div>
                <h2 class="text-3xl md:text-4xl font-extrabold headline-text tracking-tight text-on-surface mb-2">Form
                    Components</h2>
                <p class="text-on-surface-variant max-w-lg text-lg">Detailed reference for input primitives, validation
                    states, and data entry layouts.</p>
            </div>
            <div class="flex gap-3">
                <div
                    class="px-4 py-2 bg-surface-container-low rounded-xl flex items-center gap-2 text-sm font-semibold text-on-surface-variant">
                    <span class="material-symbols-outlined text-lg" data-icon="edit_note">edit_note</span>
                    Editor v1.2
                </div>
            </div>
        </header>
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            <!-- Main Form Section -->
            <div class="lg:col-span-8 space-y-8">
                <!-- Basic Inputs Card -->
                <section class="bg-surface-container-lowest rounded-xl p-8 shadow-[0_4px_20px_rgba(53,37,205,0.03)]">
                    <div class="mb-8 flex flex-col md:flex-row md:items-center justify-between gap-4">
                        <div>
                            <h3 class="text-xl font-headline font-bold text-on-surface">General Information</h3>
                            <p class="text-sm text-on-surface-variant">Core input types and interactive modal components.
                            </p>
                        </div>
                        <!-- Ready-to-use Modals Gallery -->
                        <div class="flex flex-wrap gap-2">
                            <button
                                class="px-4 py-2 bg-primary text-white rounded-lg text-xs font-bold flex items-center gap-2 hover:opacity-90 transition-all shadow-md shadow-indigo-100"
                                id="open-add-modal-btn">
                                <span class="material-symbols-outlined text-sm" data-icon="add">add</span>
                                Add Data Modal
                            </button>
                            <button
                                class="px-4 py-2 bg-surface-container-high text-on-secondary-container rounded-lg text-xs font-bold flex items-center gap-2 hover:bg-surface-container-highest transition-all"
                                id="open-modal-btn">
                                <span class="material-symbols-outlined text-sm" data-icon="edit">edit</span>
                                Quick Edit Modal
                            </button>
                        </div>
                    </div>
                    <div class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-semibold text-on-surface font-label">Full Name</label>
                                <input
                                    class="w-full bg-surface-container-low border-none rounded-lg px-4 py-3 text-on-surface placeholder:text-slate-400 focus:bg-white transition-all"
                                    placeholder="e.g. John Doe" type="text" />
                                <span class="text-[11px] text-on-surface-variant">Enter the legal name of the entity.</span>
                            </div>
                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-semibold text-on-surface font-label">Email Address</label>
                                <input
                                    class="w-full bg-surface-container-low border-none rounded-lg px-4 py-3 text-on-surface placeholder:text-slate-400 focus:bg-white transition-all"
                                    placeholder="john@graphite.com" type="email" />
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-semibold text-on-surface font-label">Password</label>
                                <div class="relative">
                                    <input
                                        class="w-full bg-surface-container-low border-none rounded-lg px-4 py-3 text-on-surface placeholder:text-slate-400 focus:bg-white transition-all pr-12"
                                        type="password" value="secretpassword" />
                                    <button
                                        class="absolute right-3 top-1/2 -translate-y-1/2 text-slate-400 hover:text-primary transition-colors">
                                        <span class="material-symbols-outlined text-xl"
                                            data-icon="visibility">visibility</span>
                                    </button>
                                </div>
                            </div>
                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-semibold text-on-surface font-label">Role Access</label>
                                <select
                                    class="w-full bg-surface-container-low border-none rounded-lg px-4 py-3 text-on-surface focus:bg-white transition-all appearance-none cursor-pointer">
                                    <option>Administrator</option>
                                    <option>Manager</option>
                                    <option>Editor</option>
                                    <option>Viewer</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-semibold text-on-surface font-label">Entity Bio</label>
                            <textarea
                                class="w-full bg-surface-container-low border-none rounded-lg px-4 py-3 text-on-surface placeholder:text-slate-400 focus:bg-white transition-all resize-none"
                                placeholder="Describe the purpose or history..." rows="4"></textarea>
                        </div>
                    </div>
                </section>
                <!-- Validation States -->
                <section class="bg-surface-container-lowest rounded-xl p-8 shadow-[0_4px_20px_rgba(53,37,205,0.03)]">
                    <div class="mb-8">
                        <h3 class="text-xl font-headline font-bold text-on-surface">Validation States</h3>
                        <p class="text-sm text-on-surface-variant">Visual feedback for form entry and API responses.</p>
                    </div>
                    <div class="space-y-6">
                        <!-- Error State -->
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-semibold text-error font-label">Subdomain Name</label>
                            <div class="relative">
                                <input
                                    class="w-full bg-error-container/20 border-2 border-error/20 rounded-lg px-4 py-3 text-error focus:border-error/40 transition-all pr-12"
                                    type="text" value="invalid_chars_!" />
                                <span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-error"
                                    data-icon="error">error</span>
                            </div>
                            <span class="text-[12px] text-error flex items-center gap-1">
                                <span class="material-symbols-outlined text-[14px]" data-icon="info">info</span>
                                Only lowercase letters, numbers, and hyphens allowed.
                            </span>
                        </div>
                        <!-- Success State -->
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-semibold text-emerald-600 font-label">Account Verification</label>
                            <div class="relative">
                                <input
                                    class="w-full bg-emerald-50 border-2 border-emerald-200 rounded-lg px-4 py-3 text-emerald-800 pr-12"
                                    type="text" value="verified-pro-2024" />
                                <span
                                    class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-emerald-500"
                                    data-icon="check_circle" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                            </div>
                            <span class="text-[12px] text-emerald-600">Username is available and verified.</span>
                        </div>
                    </div>
                </section>
            </div>
            <!-- Sidebar Content -->
            <div class="lg:col-span-4 space-y-8">
                <!-- File Upload Card -->
                <section class="bg-surface-container-lowest rounded-xl p-6 shadow-[0_4px_20px_rgba(53,37,205,0.03)]">
                    <h3 class="text-lg font-headline font-bold text-on-surface mb-6">Asset Upload</h3>
                    <div
                        class="relative group border-2 border-dashed border-outline-variant/30 rounded-xl p-8 flex flex-col items-center justify-center text-center hover:border-primary/50 transition-all cursor-pointer bg-surface-container-low/50">
                        <input class="absolute inset-0 opacity-0 cursor-pointer" type="file" />
                        <div
                            class="w-16 h-16 rounded-full bg-primary/10 flex items-center justify-center text-primary mb-4 group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-3xl" data-icon="cloud_upload">cloud_upload</span>
                        </div>
                        <p class="font-semibold text-on-surface">Click or drag to upload</p>
                        <p class="text-xs text-on-surface-variant mt-1">SVG, PNG, JPG (max 800x400px)</p>
                    </div>
                    <!-- Preview -->
                    <div class="mt-6">
                        <p class="text-xs font-bold uppercase tracking-widest text-on-surface-variant mb-3">Live Preview</p>
                        <div class="rounded-lg overflow-hidden bg-slate-100 aspect-video relative">
                            <img alt="File preview" class="w-full h-full object-cover"
                                data-alt="vibrant abstract 3d rendering with flowing purple and blue waves and smooth texture"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDWCJhseOcgp8zDR7mzWioo1mUjA0bjUQy3HOS8jzjC8t1r9eC-7sbbNoA_-08dIKF0XBiPGrTd_7GLCXwJWZkD8WJWwK4LlbJEHVdEv1dx3HH00-27HuIuhGHSNC_4-t-pDw5g7UcOOwYGdSeGHTfa53eikPXLnMXX1WyeJe-DAVF4bPPfIuGS2id2l2GXHU_bV1SrLj2g9xqDrXixSl5QzdLldWkwPwrOcLtM0qGdG-26DHGX-5pHvAkhnTmp5Ypzedr_TJv-lWwy" />
                            <div
                                class="absolute inset-0 bg-black/20 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity">
                                <button class="p-2 bg-white rounded-full text-error shadow-lg">
                                    <span class="material-symbols-outlined" data-icon="delete">delete</span>
                                </button>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-3 px-1">
                            <span class="text-xs font-medium text-on-surface">hero-banner.jpg</span>
                            <span class="text-xs text-on-surface-variant">1.2 MB</span>
                        </div>
                    </div>
                </section>
                <!-- Form Help/Bento Element -->
                <section class="bg-indigo-600 rounded-xl p-6 text-white overflow-hidden relative">
                    <div class="relative z-10">
                        <span class="material-symbols-outlined text-3xl mb-4" data-icon="auto_awesome">auto_awesome</span>
                        <h4 class="text-lg font-headline font-bold mb-2">Smart Validation</h4>
                        <p class="text-sm text-indigo-100/80 leading-relaxed mb-4">Our system uses AI to predict common
                            form errors before they occur, saving up to 40% of data entry time.</p>
                        <a class="text-sm font-bold flex items-center gap-1 hover:gap-2 transition-all" href="#">
                            Learn more
                            <span class="material-symbols-outlined text-sm" data-icon="arrow_forward">arrow_forward</span>
                        </a>
                    </div>
                    <div class="absolute -right-8 -bottom-8 w-32 h-32 bg-indigo-500 rounded-full blur-3xl opacity-50">
                    </div>
                </section>
                <!-- Action Buttons -->
                <div class="flex flex-col gap-3">
                    <button
                        class="w-full py-4 bg-gradient-to-r from-primary to-primary-container text-white rounded-xl font-bold shadow-[0_20px_50px_rgba(53,37,205,0.15)] hover:translate-y-[-2px] transition-all">
                        Save Changes
                    </button>
                    <button
                        class="w-full py-4 bg-surface-container-high text-on-secondary-container rounded-xl font-bold hover:bg-surface-container-highest transition-all">
                        Discard Draft
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page-overlays')
    <!-- Add New Record Modal -->
    <div class="fixed inset-0 z-[100] hidden flex items-center justify-center p-4" id="add-record-modal">
        <div
            class="absolute inset-0 bg-slate-900/60 backdrop-blur-sm opacity-0 transition-opacity duration-300 modal-overlay">
        </div>
        <div
            class="relative w-full max-w-2xl overflow-hidden rounded-3xl bg-white shadow-2xl opacity-0 scale-95 transition-all duration-300 modal-content">
            <div class="p-8">
                <div class="flex items-center justify-between mb-8">
                    <div>
                        <h3 class="text-2xl font-headline font-black text-on-surface tracking-tight">Create New Entry</h3>
                        <p class="text-sm text-on-surface-variant mt-1">Populate the fields below to register a new system
                            record.</p>
                    </div>
                    <button class="p-2 text-slate-400 hover:text-slate-600 close-modal">
                        <span class="material-symbols-outlined" data-icon="close">close</span>
                    </button>
                </div>
                <form class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-semibold text-on-surface">Full Name</label>
                            <input
                                class="w-full bg-surface-container-low border-none rounded-xl px-4 py-3 text-on-surface focus:ring-2 focus:ring-primary/20 transition-all"
                                placeholder="Enter full name" type="text" />
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-semibold text-on-surface">Category</label>
                            <select
                                class="w-full bg-surface-container-low border-none rounded-xl px-4 py-3 text-on-surface appearance-none cursor-pointer">
                                <option>System Architecture</option>
                                <option>Marketing Assets</option>
                                <option>Technical Docs</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-semibold text-on-surface">Project Lead Email</label>
                        <input class="w-full bg-surface-container-low border-none rounded-xl px-4 py-3 text-on-surface"
                            placeholder="lead@company.com" type="email" />
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-semibold text-on-surface">Description (Optional)</label>
                        <textarea class="w-full bg-surface-container-low border-none rounded-xl px-4 py-3 text-on-surface resize-none"
                            rows="3"></textarea>
                    </div>
                    <div class="pt-6 flex gap-3">
                        <button
                            class="flex-1 py-4 bg-primary text-white rounded-xl font-bold shadow-lg shadow-indigo-100 hover:opacity-90 transition-all"
                            type="button">Submit Record</button>
                        <button
                            class="flex-1 py-4 bg-surface-container-high text-on-secondary-container rounded-xl font-bold hover:bg-slate-200 transition-all close-modal"
                            type="button">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Quick Edit Modal HTML -->
    <div class="fixed inset-0 z-[100] hidden flex items-center justify-center p-4" id="quick-edit-modal">
        <div
            class="absolute inset-0 bg-slate-900/60 backdrop-blur-sm opacity-0 transition-opacity duration-300 modal-overlay">
        </div>
        <div
            class="relative w-full max-w-lg overflow-hidden rounded-3xl bg-white shadow-2xl opacity-0 scale-95 transition-all duration-300 modal-content">
            <div class="p-8">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-2xl font-headline font-black text-on-surface tracking-tight">Quick Edit Asset</h3>
                    <button class="p-2 text-slate-400 hover:text-slate-600 close-modal">
                        <span class="material-symbols-outlined" data-icon="close">close</span>
                    </button>
                </div>
                <form class="space-y-6">
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-semibold text-on-surface">Asset Name</label>
                        <input
                            class="w-full bg-surface-container-low border-none rounded-xl px-4 py-3 text-on-surface focus:ring-2 focus:ring-primary/20 transition-all"
                            value="Enterprise Dashboard 2024" type="text" />
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-semibold text-on-surface">Tags</label>
                        <input
                            class="w-full bg-surface-container-low border-none rounded-xl px-4 py-3 text-on-surface focus:ring-2 focus:ring-primary/20 transition-all"
                            placeholder="e.g. priority, high-res" type="text" />
                    </div>
                    <div class="pt-4 flex gap-3">
                        <button
                            class="flex-1 py-4 bg-primary text-white rounded-xl font-bold shadow-lg shadow-indigo-100 hover:opacity-90 transition-all close-modal"
                            type="button">Update Changes</button>
                        <button
                            class="flex-1 py-4 bg-surface-container-high text-on-secondary-container rounded-xl font-bold hover:bg-slate-200 transition-all close-modal"
                            type="button">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
