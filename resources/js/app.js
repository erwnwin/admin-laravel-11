import './bootstrap';
import Swal from 'sweetalert2';

window.Swal = Swal;

const toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    customClass: {
        popup: 'rounded-2xl border-none shadow-xl font-body bg-white',
        title: 'text-sm font-bold text-on-surface',
    },
});

const dialogClasses = {
    popup: 'rounded-3xl border-none shadow-2xl font-body p-8',
    confirmButton: 'bg-indigo-600 text-white px-8 py-3 rounded-xl font-bold hover:bg-indigo-700 transition-all focus:ring-4 focus:ring-indigo-100 outline-none min-w-[120px]',
    cancelButton: 'bg-surface-container-high text-on-surface px-8 py-3 rounded-xl font-bold hover:bg-surface-container-highest transition-all min-w-[120px]',
    title: 'headline-text font-black text-on-surface text-2xl',
    htmlContainer: 'text-on-surface-variant text-base leading-relaxed mt-4',
};

const dialog = Swal.mixin({
    customClass: dialogClasses,
    buttonsStyling: false,
});

const showToast = (title, icon = 'success', iconColor = '#3525cd') => {
    toast.fire({ title, icon, iconColor });
};

const SIDEBAR_STORAGE_KEY = 'codeta-admin-sidebar-collapsed';
const DOCUMENTATION_LANGUAGE_KEY = 'codeta-admin-documentation-language';

const setSidebarCollapsed = (sidebar, collapsed) => {
    const toggleIcon = sidebar.querySelector('[data-sidebar-toggle-icon]');
    const textNodes = sidebar.querySelectorAll('.sidebar-text');
    const items = sidebar.querySelectorAll('.desktop-nav-item');
    const brandBlock = sidebar.querySelector('.mb-8');
    const sectionLabels = sidebar.querySelectorAll('.sidebar-section-label');
    const authMenu = sidebar.querySelector('[data-auth-menu="desktop"]');

    sidebar.classList.toggle('w-20', collapsed);
    sidebar.classList.toggle('w-64', !collapsed);
    sidebar.dataset.collapsed = collapsed ? 'true' : 'false';

    if (toggleIcon) {
        toggleIcon.style.transform = collapsed ? 'rotate(180deg)' : 'rotate(0deg)';
    }

    if (brandBlock) {
        brandBlock.classList.toggle('justify-center', collapsed);
        brandBlock.classList.toggle('px-2', !collapsed);
        brandBlock.classList.toggle('px-0', collapsed);
    }

    textNodes.forEach((node) => node.classList.toggle('hidden', collapsed));
    sectionLabels.forEach((label) => label.classList.toggle('hidden', collapsed));
    items.forEach((item) => {
        item.classList.toggle('px-4', !collapsed);
        item.classList.toggle('px-0', collapsed);
        item.classList.toggle('justify-center', collapsed);
        item.classList.toggle('gap-3', !collapsed);
        item.classList.toggle('gap-0', collapsed);
        if (item.dataset.keepBetween === 'true') {
            item.classList.toggle('justify-between', !collapsed);
        }
    });

    if (authMenu && collapsed) {
        authMenu.classList.add('hidden');
    }
};

const initAdminShell = () => {
    const desktopSidebar = document.querySelector('[data-sidebar="desktop"]');
    const desktopToggle = document.querySelector('[data-sidebar-toggle]');
    const mobileSidebar = document.querySelector('[data-sidebar="mobile"]');
    const mobileOverlay = document.querySelector('[data-mobile-overlay]');
    const mobileContent = document.querySelector('[data-mobile-content]');
    const mobileOpen = document.querySelector('[data-mobile-drawer-toggle]');
    const mobileClose = document.querySelector('[data-mobile-drawer-close]');
    const desktopAuthToggle = document.querySelector('[data-auth-toggle="desktop"]');
    const desktopAuthMenu = document.querySelector('[data-auth-menu="desktop"]');
    const desktopAuthChevron = document.querySelector('[data-auth-chevron="desktop"]');
    const mobileAuthToggle = document.querySelector('[data-auth-toggle="mobile"]');
    const mobileAuthMenu = document.querySelector('[data-auth-menu="mobile"]');
    const mobileAuthChevron = document.querySelector('[data-auth-chevron="mobile"]');
    const profileMenu = document.querySelector('[data-profile-menu]');
    const profileToggle = document.querySelector('[data-profile-toggle]');
    const profilePanel = document.querySelector('[data-profile-panel]');
    const profileChevron = document.querySelector('[data-profile-chevron]');
    const mobileNavLinks = document.querySelectorAll('[data-mobile-nav-link]');

    let manuallyCollapsed = localStorage.getItem(SIDEBAR_STORAGE_KEY) === 'true';

    if (desktopSidebar && desktopToggle) {
        setSidebarCollapsed(desktopSidebar, manuallyCollapsed);

        desktopToggle.addEventListener('click', () => {
            manuallyCollapsed = !manuallyCollapsed;
            setSidebarCollapsed(desktopSidebar, manuallyCollapsed);
            localStorage.setItem(SIDEBAR_STORAGE_KEY, manuallyCollapsed ? 'true' : 'false');
        });

        desktopSidebar.addEventListener('mouseenter', () => {
            if (manuallyCollapsed) {
                setSidebarCollapsed(desktopSidebar, false);
            }
        });

        desktopSidebar.addEventListener('mouseleave', () => {
            if (manuallyCollapsed) {
                setSidebarCollapsed(desktopSidebar, true);
            }
        });
    }

    if (desktopAuthToggle && desktopAuthMenu && desktopAuthChevron) {
        desktopAuthToggle.addEventListener('click', () => {
            const hidden = desktopAuthMenu.classList.contains('hidden');
            desktopAuthMenu.classList.toggle('hidden');
            desktopAuthChevron.style.transform = hidden ? 'rotate(180deg)' : 'rotate(0deg)';
        });
    }

    if (mobileAuthToggle && mobileAuthMenu && mobileAuthChevron) {
        mobileAuthToggle.addEventListener('click', () => {
            const hidden = mobileAuthMenu.classList.contains('hidden');
            mobileAuthMenu.classList.toggle('hidden');
            mobileAuthChevron.style.transform = hidden ? 'rotate(180deg)' : 'rotate(0deg)';
        });
    }

    const openMobileDrawer = () => {
        if (!mobileSidebar || !mobileOverlay || !mobileContent) {
            return;
        }

        mobileSidebar.classList.remove('pointer-events-none');
        mobileOverlay.classList.remove('opacity-0');
        mobileContent.classList.remove('-translate-x-full');
    };

    const closeMobileDrawer = () => {
        if (!mobileSidebar || !mobileOverlay || !mobileContent) {
            return;
        }

        mobileSidebar.classList.add('pointer-events-none');
        mobileOverlay.classList.add('opacity-0');
        mobileContent.classList.add('-translate-x-full');
    };

    mobileOpen?.addEventListener('click', openMobileDrawer);
    mobileClose?.addEventListener('click', closeMobileDrawer);
    mobileOverlay?.addEventListener('click', closeMobileDrawer);
    mobileNavLinks.forEach((link) => link.addEventListener('click', closeMobileDrawer));

    if (profileMenu && profileToggle && profilePanel) {
        const setProfileMenuState = (open) => {
            profilePanel.dataset.open = open ? 'true' : 'false';
            profileToggle.setAttribute('aria-expanded', open ? 'true' : 'false');
            if (profileChevron) {
                profileChevron.style.transform = open ? 'rotate(180deg)' : 'rotate(0deg)';
            }
        };

        setProfileMenuState(false);

        profileToggle.addEventListener('click', (event) => {
            event.stopPropagation();
            const isOpen = profilePanel.dataset.open === 'true';
            setProfileMenuState(!isOpen);
        });

        document.addEventListener('click', (event) => {
            if (!profileMenu.contains(event.target)) {
                setProfileMenuState(false);
            }
        });

        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape') {
                setProfileMenuState(false);
            }
        });
    }
};

const initPasswordToggles = () => {
    [
        ['#toggle-password', '#password'],
        ['#toggle-confirm-password', '#confirm_password'],
    ].forEach(([buttonSelector, inputSelector]) => {
        const button = document.querySelector(buttonSelector);
        const input = document.querySelector(inputSelector);

        if (!button || !input) {
            return;
        }

        button.addEventListener('click', () => {
            const isPassword = input.type === 'password';
            input.type = isPassword ? 'text' : 'password';

            const icon = button.querySelector('span');
            if (icon) {
                icon.textContent = isPassword ? 'visibility_off' : 'visibility';
            }
        });
    });
};

const initAuthForms = () => {
    const loginForm = document.getElementById('login-form');
    const registerForm = document.getElementById('register-form');
    const forgotPasswordForm = document.getElementById('forgot-password-form');

    if (loginForm) {
        loginForm.addEventListener('submit', async (event) => {
            event.preventDefault();

            await dialog.fire({
                title: 'Authenticating...',
                html: 'Please wait while we verify your identity.',
                timer: 1500,
                timerProgressBar: true,
                didOpen: () => Swal.showLoading(),
            });

            await dialog.fire({
                icon: 'success',
                title: 'Success!',
                text: 'Welcome back to CODETA Admin Dashboard.',
                showConfirmButton: false,
                timer: 1500,
                iconColor: '#3525cd',
            });

            window.location.href = loginForm.dataset.redirectUrl || '/';
        });
    }

    if (registerForm) {
        registerForm.addEventListener('submit', async (event) => {
            event.preventDefault();

            await dialog.fire({
                title: 'Creating Account...',
                html: 'Deploying your workspace instance.',
                timer: 2000,
                timerProgressBar: true,
                didOpen: () => Swal.showLoading(),
            });

            await dialog.fire({
                icon: 'success',
                title: 'Identity Verified',
                text: 'Your enterprise account has been created successfully.',
                showConfirmButton: false,
                timer: 1800,
                iconColor: '#3525cd',
            });

            window.location.href = registerForm.dataset.redirectUrl || '/login';
        });
    }

    if (forgotPasswordForm) {
        forgotPasswordForm.addEventListener('submit', async (event) => {
            event.preventDefault();

            await dialog.fire({
                title: 'Sending Reset Link...',
                html: 'We are preparing password reset instructions for your inbox.',
                timer: 1800,
                timerProgressBar: true,
                didOpen: () => Swal.showLoading(),
            });

            await dialog.fire({
                icon: 'success',
                title: 'Check Your Email',
                text: 'A password reset link has been sent successfully.',
                showConfirmButton: false,
                timer: 1800,
                iconColor: '#3525cd',
            });

            window.location.href = forgotPasswordForm.dataset.redirectUrl || '/login';
        });
    }
};

const toggleModal = (modalId, show) => {
    const modal = document.getElementById(modalId);
    if (!modal) {
        return;
    }

    const overlay = modal.querySelector('.modal-overlay');
    const content = modal.querySelector('.modal-content');

    if (show) {
        modal.classList.remove('hidden');
        requestAnimationFrame(() => {
            overlay?.classList.remove('opacity-0');
            content?.classList.remove('scale-95', 'opacity-0');
        });
        return;
    }

    overlay?.classList.add('opacity-0');
    content?.classList.add('scale-95', 'opacity-0');
    setTimeout(() => modal.classList.add('hidden'), 300);
};

const initFormsPage = () => {
    document.getElementById('open-modal-btn')?.addEventListener('click', () => toggleModal('quick-edit-modal', true));
    document.getElementById('open-add-modal-btn')?.addEventListener('click', () => toggleModal('add-record-modal', true));

    document.querySelectorAll('.close-modal').forEach((button) => {
        button.addEventListener('click', (event) => {
            const label = button.textContent?.replace(/\s+/g, ' ').trim();
            if (label === 'Update Changes') {
                return;
            }

            event.preventDefault();
            const modal = button.closest('[id$="modal"]');
            if (modal) {
                toggleModal(modal.id, false);
            }
        });
    });

    window.addEventListener('click', (event) => {
        if (event.target instanceof HTMLElement && event.target.classList.contains('modal-overlay')) {
            const modal = event.target.closest('[id$="modal"]');
            if (modal) {
                toggleModal(modal.id, false);
            }
        }
    });

    document.querySelectorAll('button').forEach((button) => {
        const label = button.textContent?.replace(/\s+/g, ' ').trim();
        if (!label || !['Save Changes', 'Submit Record', 'Update Changes'].includes(label)) {
            return;
        }

        button.addEventListener('click', (event) => {
            event.preventDefault();
            const originalHtml = button.innerHTML;
            button.disabled = true;
            button.innerHTML = '<span class="material-symbols-outlined animate-spin text-sm">sync</span> Processing...';

            setTimeout(() => {
                showToast(label === 'Save Changes' ? 'Configuration updated successfully' : 'Record created successfully');
                button.disabled = false;
                button.innerHTML = originalHtml;

                if (label !== 'Save Changes') {
                    const modal = button.closest('[id$="modal"]');
                    if (modal) {
                        toggleModal(modal.id, false);
                    }
                }
            }, 1200);
        });
    });
};

const initTablePage = () => {
    const page = document.querySelector('[data-table-page]');

    if (!page) {
        return;
    }

    const rows = [...page.querySelectorAll('[data-table-row]')];
    const searchInput = page.querySelector('[data-table-search]');
    const filterButtons = [...page.querySelectorAll('[data-table-filter]')];
    const categorySelect = page.querySelector('[data-table-category]');
    const selectAll = page.querySelector('[data-table-select-all]');
    const pageSizeSelect = page.querySelector('[data-table-page-size]');
    const clearSelectionButton = page.querySelector('[data-table-clear-selection]');
    const selectedCountNodes = page.querySelectorAll('[data-selected-count]');
    const visibleCountNodes = page.querySelectorAll('[data-visible-count], [data-visible-count-footer]');
    const emptyState = page.querySelector('[data-table-empty-state]');
    const presetButtons = [...page.querySelectorAll('[data-table-preset]')];
    const prevButton = page.querySelector('[data-table-page-prev]');
    const nextButton = page.querySelector('[data-table-page-next]');
    const pageList = page.querySelector('[data-table-page-list]');
    const currentPageNodes = page.querySelectorAll('[data-current-page]');
    const totalPagesNodes = page.querySelectorAll('[data-total-pages]');
    const rangeStartNodes = page.querySelectorAll('[data-visible-range-start]');
    const rangeEndNodes = page.querySelectorAll('[data-visible-range-end]');

    let activeStatus = 'all';
    let currentPage = 1;
    let pageSize = Number(pageSizeSelect?.value ?? 2);

    const filteredRows = () => rows.filter((row) => row.dataset.matchesFilter === 'true');

    const visibleRows = () => rows.filter((row) => row.dataset.visiblePage === 'true');

    const selectedRows = () => rows.filter((row) => row.querySelector('[data-row-checkbox]')?.checked);

    const paintRowSelection = () => {
        rows.forEach((row) => {
            const checkbox = row.querySelector('[data-row-checkbox]');
            const checked = Boolean(checkbox?.checked);

            row.classList.toggle('bg-primary/5', checked);
            row.classList.toggle('ring-1', checked);
            row.classList.toggle('ring-inset', checked);
            row.classList.toggle('ring-primary/10', checked);
        });
    };

    const syncSelectedCount = () => {
        const count = selectedRows().length;
        selectedCountNodes.forEach((node) => {
            node.textContent = String(count);
        });
    };

    const syncSelectAllState = () => {
        if (!selectAll) {
            return;
        }

        const currentVisibleRows = visibleRows();
        const checkedVisibleRows = currentVisibleRows.filter((row) => row.querySelector('[data-row-checkbox]')?.checked);

        selectAll.checked = currentVisibleRows.length > 0 && checkedVisibleRows.length === currentVisibleRows.length;
        selectAll.indeterminate = checkedVisibleRows.length > 0 && checkedVisibleRows.length < currentVisibleRows.length;
    };

    const updateFilterButtonState = () => {
        filterButtons.forEach((button) => {
            const active = button.dataset.tableFilter === activeStatus;

            button.classList.toggle('bg-primary', active);
            button.classList.toggle('text-white', active);
            button.classList.toggle('bg-surface-container-low', !active);
            button.classList.toggle('text-on-surface-variant', !active);
        });
    };

    const renderPagination = (totalPages) => {
        if (!pageList) {
            return;
        }

        pageList.innerHTML = '';

        for (let pageNumber = 1; pageNumber <= totalPages; pageNumber += 1) {
            const button = document.createElement('button');
            const active = pageNumber === currentPage;
            button.type = 'button';
            button.textContent = String(pageNumber);
            button.className = active
                ? 'flex h-10 w-10 items-center justify-center rounded-xl bg-primary text-sm font-bold text-white shadow-lg shadow-indigo-100'
                : 'flex h-10 w-10 items-center justify-center rounded-xl bg-white text-sm font-semibold text-on-surface-variant transition-all hover:bg-slate-50';
            button.addEventListener('click', () => {
                currentPage = pageNumber;
                applyFilters();
            });
            pageList.appendChild(button);
        }
    };

    const applyFilters = () => {
        const query = searchInput?.value.trim().toLowerCase() ?? '';
        const category = categorySelect?.value ?? 'all';

        rows.forEach((row) => {
            const matchesStatus = activeStatus === 'all' || row.dataset.status === activeStatus;
            const matchesCategory = category === 'all' || row.dataset.category === category;
            const haystack = row.dataset.search ?? '';
            const matchesSearch = query === '' || haystack.includes(query);

            row.dataset.matchesFilter = matchesStatus && matchesCategory && matchesSearch ? 'true' : 'false';
        });

        const currentFilteredRows = filteredRows();
        const visibleCount = currentFilteredRows.length;
        const totalPages = visibleCount === 0 ? 0 : Math.ceil(visibleCount / pageSize);

        if (totalPages > 0 && currentPage > totalPages) {
            currentPage = totalPages;
        }

        const startIndex = visibleCount === 0 ? 0 : (currentPage - 1) * pageSize;
        const endIndex = Math.min(startIndex + pageSize, visibleCount);

        rows.forEach((row) => {
            row.dataset.visiblePage = 'false';
            row.classList.add('hidden');
        });

        currentFilteredRows.forEach((row, index) => {
            const shouldShow = index >= startIndex && index < endIndex;
            row.dataset.visiblePage = shouldShow ? 'true' : 'false';
            row.classList.toggle('hidden', !shouldShow);
        });

        visibleCountNodes.forEach((node) => {
            node.textContent = String(visibleCount);
        });

        currentPageNodes.forEach((node) => {
            node.textContent = String(totalPages === 0 ? 0 : currentPage);
        });

        totalPagesNodes.forEach((node) => {
            node.textContent = String(totalPages);
        });

        const rangeStart = visibleCount === 0 ? 0 : startIndex + 1;
        const rangeEnd = visibleCount === 0 ? 0 : endIndex;

        rangeStartNodes.forEach((node) => {
            node.textContent = String(rangeStart);
        });

        rangeEndNodes.forEach((node) => {
            node.textContent = String(rangeEnd);
        });

        if (emptyState) {
            emptyState.classList.toggle('hidden', visibleCount !== 0);
        }

        if (prevButton) {
            prevButton.disabled = currentPage <= 1 || visibleCount === 0;
        }

        if (nextButton) {
            nextButton.disabled = currentPage >= totalPages || visibleCount === 0;
        }

        renderPagination(totalPages);
        syncSelectAllState();
        syncSelectedCount();
    };

    filterButtons.forEach((button) => {
        button.addEventListener('click', () => {
            activeStatus = button.dataset.tableFilter ?? 'all';
            updateFilterButtonState();
            currentPage = 1;
            applyFilters();
        });
    });

    searchInput?.addEventListener('input', () => {
        currentPage = 1;
        applyFilters();
    });

    categorySelect?.addEventListener('change', () => {
        currentPage = 1;
        applyFilters();
    });

    pageSizeSelect?.addEventListener('change', () => {
        pageSize = Number(pageSizeSelect.value);
        currentPage = 1;
        applyFilters();
    });

    rows.forEach((row) => {
        row.querySelector('[data-row-checkbox]')?.addEventListener('change', () => {
            paintRowSelection();
            syncSelectedCount();
            syncSelectAllState();
        });
    });

    selectAll?.addEventListener('change', () => {
        visibleRows().forEach((row) => {
            const checkbox = row.querySelector('[data-row-checkbox]');
            if (checkbox) {
                checkbox.checked = selectAll.checked;
            }
        });

        paintRowSelection();
        syncSelectedCount();
        syncSelectAllState();
    });

    clearSelectionButton?.addEventListener('click', () => {
        rows.forEach((row) => {
            const checkbox = row.querySelector('[data-row-checkbox]');
            if (checkbox) {
                checkbox.checked = false;
            }
        });

        paintRowSelection();
        syncSelectedCount();
        syncSelectAllState();
        showToast('Row selection cleared');
    });

    prevButton?.addEventListener('click', () => {
        if (currentPage > 1) {
            currentPage -= 1;
            applyFilters();
        }
    });

    nextButton?.addEventListener('click', () => {
        const visibleCount = filteredRows().length;
        const totalPages = visibleCount === 0 ? 0 : Math.ceil(visibleCount / pageSize);
        if (currentPage < totalPages) {
            currentPage += 1;
            applyFilters();
        }
    });

    presetButtons.forEach((button) => {
        button.addEventListener('click', () => {
            activeStatus = button.dataset.presetStatus ?? 'all';

            if (categorySelect) {
                categorySelect.value = button.dataset.presetCategory ?? 'all';
            }

            if (searchInput) {
                searchInput.value = button.dataset.presetSearch ?? '';
            }

            updateFilterButtonState();
            currentPage = 1;
            applyFilters();
            showToast(`View switched to ${button.textContent?.trim() ?? 'preset'}`);
        });
    });

    updateFilterButtonState();
    paintRowSelection();
    applyFilters();
};

const initIconsPage = () => {
    const grid = document.getElementById('icon-grid');
    const search = document.getElementById('icon-search');

    if (!grid || !search) {
        return;
    }

    const icons = [
        'dashboard', 'table_chart', 'edit_note', 'widgets', 'person_outline', 'settings', 'lock', 'logout', 'search', 'notifications',
        'apps', 'add', 'close', 'menu', 'chevron_left', 'expand_more', 'check_circle', 'error', 'warning', 'question_mark',
        'format_quote', 'mouse', 'new_releases', 'layers', 'download', 'delete', 'sync', 'home', 'favorite', 'verified',
        'account_circle', 'shopping_cart', 'info', 'help', 'visibility', 'visibility_off', 'mail', 'send', 'star', 'calendar_today',
        'analytics', 'database', 'cloud_upload', 'cloud_download', 'description', 'folder', 'attach_file', 'monitoring', 'trending_up', 'trending_down',
    ];

    const copyIcon = async (icon) => {
        try {
            await navigator.clipboard.writeText(icon);
            showToast(`Copied: ${icon}`);
        } catch {
            showToast('Clipboard permission was blocked', 'error', '#ba1a1a');
        }
    };

    const renderIcons = (filter = '') => {
        const normalizedFilter = filter.trim().toLowerCase();
        grid.innerHTML = '';

        icons
            .filter((icon) => icon.includes(normalizedFilter))
            .forEach((icon) => {
                const card = document.createElement('button');
                card.type = 'button';
                card.className = 'icon-card group flex flex-col items-center justify-center gap-3 rounded-2xl border border-slate-100 bg-white p-6 shadow-sm transition-all hover:border-primary/30 hover:shadow-xl hover:shadow-indigo-500/5';
                card.innerHTML = `
                    <span class="material-symbols-outlined text-3xl text-slate-600 transition-all duration-300 group-hover:scale-110 group-hover:text-primary">${icon}</span>
                    <span class="text-center text-[10px] font-bold uppercase tracking-widest text-slate-400 transition-colors group-hover:text-indigo-600">${icon.replace(/_/g, ' ')}</span>
                `;
                card.addEventListener('click', () => copyIcon(icon));
                grid.appendChild(card);
            });
    };

    search.addEventListener('input', (event) => {
        renderIcons(event.target.value);
    });

    renderIcons();
};

const initDocumentationPage = () => {
    const page = document.querySelector('[data-documentation-page]');

    if (!page) {
        return;
    }

    const buttons = [...page.querySelectorAll('[data-doc-language]')];
    const copyNodes = [...page.querySelectorAll('[data-doc-copy]')];

    const setLanguage = (language) => {
        const normalizedLanguage = language === 'id' ? 'id' : 'en';

        copyNodes.forEach((node) => {
            node.textContent = normalizedLanguage === 'id' ? node.dataset.langId ?? '' : node.dataset.langEn ?? '';
        });

        buttons.forEach((button) => {
            const active = button.dataset.docLanguage === normalizedLanguage;
            button.classList.toggle('bg-white', active);
            button.classList.toggle('text-primary', active);
            button.classList.toggle('shadow-sm', active);
            button.classList.toggle('text-on-surface-variant', !active);
            button.setAttribute('aria-pressed', active ? 'true' : 'false');
        });

        document.documentElement.lang = normalizedLanguage === 'id' ? 'id' : 'en';
        localStorage.setItem(DOCUMENTATION_LANGUAGE_KEY, normalizedLanguage);
    };

    buttons.forEach((button) => {
        button.addEventListener('click', () => {
            setLanguage(button.dataset.docLanguage ?? 'en');
        });
    });

    setLanguage(localStorage.getItem(DOCUMENTATION_LANGUAGE_KEY) ?? 'en');
};

const initUiAlerts = () => {
    window.showAlert = (type) => {
        if (type === 'success') {
            dialog.fire({
                icon: 'success',
                title: 'Data Synchronized',
                text: 'All enterprise metrics have been successfully pushed to the edge nodes.',
                iconColor: '#3525cd',
            });
            return;
        }

        if (type === 'error') {
            dialog.fire({
                icon: 'error',
                title: 'Access Denied',
                text: 'Your current permission level does not allow modification of master records.',
                iconColor: '#ba1a1a',
            });
            return;
        }

        if (type === 'warning') {
            dialog.fire({
                icon: 'warning',
                title: 'Storage Capacity',
                text: 'Your workspace is at 85% capacity. Consider upgrading your tier soon.',
                iconColor: '#7e3000',
            });
            return;
        }

        Swal.fire({
            title: 'Destroy Instance?',
            text: 'This action is irreversible and will purge all related metadata.',
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Yes, Purge it',
            cancelButtonText: 'Abort',
            customClass: {
                ...dialogClasses,
                confirmButton: 'bg-red-600 text-white px-8 py-3 rounded-xl font-bold hover:bg-red-700 transition-all focus:ring-4 focus:ring-red-100 outline-none min-w-[120px]',
            },
            buttonsStyling: false,
            iconColor: '#3525cd',
        }).then((result) => {
            if (result.isConfirmed) {
                dialog.fire({
                    icon: 'success',
                    title: 'Destroyed!',
                    text: 'The instance has been successfully removed.',
                    iconColor: '#3525cd',
                });
            }
        });
    };

    window.showCuratedAlert = () => {
        dialog.fire({
            title: 'Curated Motion',
            text: 'This is a premium modal experience designed for commercial administrative suites.',
            confirmButtonText: 'Incredible',
        });
    };
};

document.addEventListener('DOMContentLoaded', () => {
    initAdminShell();
    initPasswordToggles();
    initAuthForms();
    initFormsPage();
    initTablePage();
    initIconsPage();
    initDocumentationPage();
    initUiAlerts();
});
