<!-- Sidebar -->
<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-primary">
                <li class="nav-item {{ Request::is('admin/dashboard') ? 'active' : '' }}">
                    <a href="/admin/dashboard" class="collapsed"> <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                    <a href="/" class="collapsed" target="_blank"> <i class="fa-solid fa-eye"></i></i>
                        <p>Preview</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Menu</h4>
                </li>

                <li class="nav-item {{ Request::is('admin/menu') ? 'active' : '' }}">
                    <a href="/admin/menu-navbar">
                        <i class="fa-solid fa-bars-staggered"></i>
                        <p>Menu</p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('admin/link') ? 'active' : '' }}">
                    <a href="/admin/link">
                        <i class="fa-solid fa-link"></i>
                        <p>Daftarkan Link</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Pengaturan</h4>
                </li>
                <li class="nav-item {{ Request::is('admin/module') ? 'active' : '' }}">
                    <a href="/admin/module">
                        <i class="fa-solid fa-list"></i>
                        <p>Module</p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('admin/setting') ? 'active' : '' }}">
                    <a href="/admin/setting">
                        <i class="fa-solid fa-gears"></i>
                        <p>Settings</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">User</h4>
                </li>
                <li class="nav-item {{ Request::is('admin/pengguna') ? 'active' : '' }}">
                    <a href="/admin/pengguna">
                        <i class="fa-solid fa-users"></i>
                        <p>Pengguna</p>
                    </a>
                </li>
                {{-- @if (Auth::user()->id == 1)

                @else
                    <li class="nav-item {{ Request::is('admin/artikel') ? 'active' : '' }}">
                        <a href="/admin/artikel">
                            <i class="fa-solid fa-newspaper"></i>
                            <p>Artikel</p>
                        </a>
                    </li>
                @endif --}}
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
