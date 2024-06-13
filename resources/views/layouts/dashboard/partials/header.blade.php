<nav class="navbar navbar-expand-lg navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item d-block d-xl-none">
            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
            </a>
        </li>
    </ul>
    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
            <a href="{{ route('/') }}" class="btn btn-outline-primary mt-2 d-block">Home</a>
            @if (Auth::check() && Auth::user()->role == 'Admin')
                <a href="{{ route('logout') }}" class="btn btn-danger mx-3 mt-2 d-block">Logout</a>
            @endif
        </ul>
    </div>
</nav>
