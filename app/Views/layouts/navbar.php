<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
    <div class="container">
        <div class="d-flex justify-content-between w-100">
            <div class="d-flex flex-row">
                <a class="navbar-brand fw-bold" href="#">CRUD Pegawai</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= route_to('home.index') ?>">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= route_to('jabatan.index') ?>">Jabatan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= route_to('pegawai.index') ?>">Pegawai</a>
                        </li>
                    </ul>
                </div>
            </div>
            <a href="<?= route_to('auth.logout') ?>" class="btn btn-outline-light">Logout</a>
        </div>
    </div>
</nav>