<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
        <a href="{{ route('admin.dashboard') }}">
            <img src="{{ url('/') }}/assets/img/Saas-logo.jpg" width="36px" alt="">
            <span id="title-word"><img src="{{ url('/') }}/assets/img/Saas-logo2.jpg" width="100px"
                    height="35px"></span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>
    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
            <li class="nav-item dropdown">
                <a class="nav-link nav-icon" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <i class="bi bi-translate"></i>
                </a>
            </li>
            <li class="nav-item dropdown pe-3 mr-6">
                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="javascript:void(0);"
                    data-bs-toggle="dropdown">
                    <img src="{{ url('/') }}/assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                    <span class="d-none d-md-block dropdown-toggle ps-2">DEMO</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                            <i class="bi bi-person"></i>
                            <span>admin</span>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Sign Out</span>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</header>
<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link {{ isset($act1) ? '' : 'collapsed' }}" href="">
                <i class="bi bi-house-door"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ isset($act2) ? '' : 'collapsed' }}" href="">
                <i class="bi bi-bank"></i>
                <span>Category</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ isset($act3) ? '' : 'collapsed' }}" href="">
                <i class="bi bi-boxes"></i>
                <span>Location</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ isset($act4) ? '' : 'collapsed' }}" href="">
                <i class="bi bi-collection"></i>
                <span>Address</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ isset($act5) ? '' : 'collapsed' }}" href="">
                <i class="bi bi-sliders"></i>
                <span>Event</span>
            </a>
        </li>
    </ul>
</aside>
<!-- ======= End Header ======= -->
