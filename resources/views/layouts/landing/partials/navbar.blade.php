<div class="container px-0">
    <nav class="navbar navbar-light bg-white navbar-expand-xl">
        <a href="{{ route('/') }}" class="navbar-brand">
            <h1 class="text-primary display-6">Tani Market</h1>
        </a>
        <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars text-primary"></span>
        </button>
        <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
            <div class="navbar-nav mx-auto">
                <a href="{{ route('/') }}" class="nav-item nav-link">Home</a>
                <a href="#kontak" class="nav-item nav-link">Kontak</a>
                <a href="#lokasi" class="nav-item nav-link">Lokasi</a>
                <a href="#tentangKami" class="nav-item nav-link">Tentang Kami</a>
            </div>
            <div class="d-flex m-3 me-0">
                @if (Auth::check() && Auth::user()->role == 'Admin')
                    <a href="{{ route('dashboard.index') }}" class="me-3 btn btn-outline-primary">Dashboard</a>
                @endif
                @if (Auth::check() && Auth::user()->role == 'Customer')
                    <a href="{{ route('dashboard.index') }}" class="me-3 btn btn-outline-primary"><i
                            class="fas fa-history"></i></a>
                @endif
                @if (Auth::check())
                    <a href="{{ route('logout') }}" class="text-white btn btn-primary">Logout</a>
                @else
                    <a href="{{ route('login.index') }}" class="text-white btn btn-primary">Masuk</a>
                @endif
            </div>
        </div>
    </nav>
</div>
