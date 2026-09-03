{{--
    ToyShare Admin — Sidebar Navigation Component
    Usage: <x-sidebar-nav :active="'dashboard'" />
    Place inside your layout, wrapping {{ $slot }} in .ts-main
--}}
<link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">

<!-- Mobile hamburger -->
<button class="mobile-toggle" id="mobileToggle" aria-label="Open menu">
    <svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
    </svg>
</button>
<div class="mobile-overlay" id="mobileOverlay"></div>

<aside class="ts-sidebar" id="sidebar">

    <!-- Brand -->
    <div class="ts-brand">
        <div class="brand-logo">
            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5"/>
            </svg>
        </div>
        <div class="brand-name">
            <strong>ToyShare</strong>
            <span>Admin Portal</span>
        </div>
    </div>

    <!-- Collapse toggle -->
    <div class="ts-toggle">
        <button class="ts-toggle-btn" id="collapseToggle" aria-label="Collapse sidebar">
            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
            </svg>
        </button>
    </div>

    <!-- Navigation -->
    <nav class="ts-nav">

        <span class="group-heading">Overview</span>

        <a href="{{ route('admin.dashboard') }}"
           data-nav="dashboard"
           data-tooltip="Dashboard"
           class="nav-item {{ $active === 'dashboard' ? 'active' : '' }}">
            <span class="nav-icon-wrap">
                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                </svg>
            </span>
            <span class="nav-label">Dashboard</span>
        </a>

        <div class="ts-divider"></div>
        <span class="group-heading">People</span>

        <a href="{{ route('admin.members') }}"
           data-nav="members"
           data-tooltip="Members"
           class="nav-item {{ $active === 'members' ? 'active' : '' }}">
            <span class="nav-icon-wrap">
                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M17 20h5v-2a4 4 0 00-3-3.87M9 20H4v-2a4 4 0 013-3.87m9-8a4 4 0 11-8 0 4 4 0 018 0zm6 4a4 4 0 11-8 0 4 4 0 018 0z"/>
                </svg>
            </span>
            <span class="nav-label">Members</span>
        </a>

        <div class="ts-divider"></div>
        <span class="group-heading">Inventory</span>

        <a href="{{ route('admin.catalogue') }}"
           data-nav="catalogue"
           data-tooltip="Toy Catalogue"
           class="nav-item {{ $active === 'catalogue' ? 'active' : '' }}">
            <span class="nav-icon-wrap">
                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10"/>
                </svg>
            </span>
            <span class="nav-label">Toy Catalogue</span>
        </a>

        <a href="{{ route('admin.categories') }}"
           data-nav="categories"
           data-tooltip="Categories"
           class="nav-item {{ $active === 'categories' ? 'active' : '' }}">
            <span class="nav-icon-wrap">
                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M7 7h.01M7 3h5l4.586 4.586a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-4-4a2 2 0 010-2.828L7 3z"/>
                </svg>
            </span>
            <span class="nav-label">Categories</span>
        </a>

        <div class="ts-divider"></div>
        <span class="group-heading">Activity</span>

        <a href="{{ route('admin.borrowings') }}"
           data-nav="borrowings"
           data-tooltip="Borrowings"
           class="nav-item {{ $active === 'borrowings' ? 'active' : '' }}">
            <span class="nav-icon-wrap">
                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/>
                </svg>
            </span>
            <span class="nav-label">Borrowings</span>
        </a>

        <a href="{{ route('admin.requests') }}"
           data-nav="requests"
           data-tooltip="Requests"
           class="nav-item {{ $active === 'requests' ? 'active' : '' }}">
            <span class="nav-icon-wrap">
                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>
                </svg>
            </span>
            <span class="nav-label">Requests</span>
            @if(($pendingRequests ?? 0) > 0)
                <span class="nav-badge">{{ $pendingRequests }}</span>
            @endif
        </a>

        <div class="ts-divider"></div>
        <span class="group-heading">System</span>

        <a href="{{ route('admin.reports') }}"
           data-nav="reports"
           data-tooltip="Reports"
           class="nav-item {{ $active === 'reports' ? 'active' : '' }}">
            <span class="nav-icon-wrap">
                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                </svg>
            </span>
            <span class="nav-label">Reports</span>
        </a>

        <a href="{{ route('admin.settings') }}"
           data-nav="settings"
           data-tooltip="Settings"
           class="nav-item {{ $active === 'settings' ? 'active' : '' }}">
            <span class="nav-icon-wrap">
                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
            </span>
            <span class="nav-label">Settings</span>
        </a>

    </nav>

    <!-- User footer -->
    <div class="ts-user">
        <div class="ts-user-inner">
            <div class="user-avatar">
                {{ strtoupper(substr(Auth::user()->name ?? 'A', 0, 2)) }}
            </div>
            <div class="user-info">
                <div class="user-name">{{ Auth::user()->name ?? 'Administrator' }}</div>
                <div class="user-role">Super Admin</div>
            </div>
            <span class="user-chevron">
                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                </svg>
            </span>
        </div>
    </div>

</aside>

<script>
(function () {
    const sidebar   = document.getElementById('sidebar');
    const layout    = document.querySelector('.ts-layout');
    const collapseBtn = document.getElementById('collapseToggle');
    const mobileBtn   = document.getElementById('mobileToggle');
    const overlay     = document.getElementById('mobileOverlay');

    // Persist collapse state
    const STORAGE_KEY = 'ts_sidebar_collapsed';
    const isCollapsed = localStorage.getItem(STORAGE_KEY) === '1';
    if (isCollapsed) {
        sidebar.classList.add('collapsed');
        layout && layout.classList.add('sidebar-collapsed');
    }

    collapseBtn && collapseBtn.addEventListener('click', () => {
        const collapsed = sidebar.classList.toggle('collapsed');
        layout && layout.classList.toggle('sidebar-collapsed', collapsed);
        localStorage.setItem(STORAGE_KEY, collapsed ? '1' : '0');
    });

    mobileBtn && mobileBtn.addEventListener('click', () => {
        sidebar.classList.add('mobile-open');
        overlay.classList.add('active');
    });
    overlay && overlay.addEventListener('click', () => {
        sidebar.classList.remove('mobile-open');
        overlay.classList.remove('active');
    });
})();
</script>
