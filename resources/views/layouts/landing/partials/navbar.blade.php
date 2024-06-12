<div class="container px-0">
    <nav class="navbar navbar-light bg-white navbar-expand-xl">
        <a href="index.html" class="navbar-brand">
            <h1 class="text-primary display-6">Tani Market</h1>
        </a>
        <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars text-primary"></span>
        </button>
        <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
            <div class="navbar-nav mx-auto">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="shop-detail.html" class="nav-item nav-link">Tentang Kami</a>
                <a href="contact.html" class="nav-item nav-link">Kontak</a>
            </div>
            <div class="d-flex m-3 me-0">
                <a href="{{ route('login.index') }}" class="my-auto text-white btn btn-primary">
                    Masuk
                </a>
            </div>
        </div>
    </nav>
</div>
