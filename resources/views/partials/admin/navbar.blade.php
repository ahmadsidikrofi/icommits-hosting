<div class="main-header">
    <!-- Logo Header -->
    <div class="logo-header" style="background: rgb(58, 77, 255);">
        <a href="/admin/dashboard" class="logo" style="margin-bottom: 12px; margin-left: 15px;">
            <img src="{{ asset('image/logo-icommits.png') }}" width="40px" alt="">
            <h1 class="navbar-brand text-white mt-2">Icommits</h2>
        </a>
        <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
            data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <i class="fa-solid fa-bars text-white"></i>
            </span>
        </button>
        <button class="topbar-toggler more"><i class="fa-solid fa-ellipsis-vertical text-white"></i></button>
        <div class="nav-toggle">
            <button class="btn btn-toggle toggle-sidebar">
                <i class="icon-menu"></i>
            </button>
        </div>
    </div>
    <!-- End Logo Header -->

    <!-- Navbar Header -->
    <nav class="navbar navbar-header navbar-expand-lg" style="background: rgb(54, 54, 238);">

        <div class="container-fluid">
            <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                <li class="nav-item hidden-caret">
                    <h3 class="text-white mr-2 mt-2">Rofi</h3>
                </li>
                <li class="nav-item dropdown hidden-caret">
                    <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                        <div class="avatar-sm float-right">
                            <img src="{{ asset('assets/admin/img/user.jpg') }}" alt="Profile"
                                class="avatar-img rounded-circle">
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-user animated fadeIn">
                        <div class="dropdown-user-scroll scrollbar-outer">
                            <li>
                                <div class="user-box">
                                    <div class="u-text">
                                        <h3>Rofi</h3>
                                        <p class="text-muted">rofidragon71@gmail.com</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown-divider"></div>
                                {{-- @if (Auth::user()->id != 1)
                                    <a class="dropdown-item" href="/admin/profile">Profile</a>
                                @endif --}}
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/admin/logout">Logout</a>
                            </li>
                        </div>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Navbar -->
</div>
