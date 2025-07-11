<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="alert alert-success mt-5" role="alert">
    Selamat datang, <strong><?= session('username') ?></strong>
</div>

<div class="p-5 text-center bg-white rounded-3 shadow-sm">
    <h1 class="text-body-emphasis">Aplikasi CRUD Pegawai</h1>
    <p class="lead">
        Selamat datang di aplikasi CRUD Pegawai. Aplikasi ini memungkinkan Anda untuk mengelola data pegawai dan jabatan dengan mudah.
    </p>
</div>
<?= $this->endSection() ?>