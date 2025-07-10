<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <div class="d-flex justify-content-between border-bottom py-2">
        <h3 class="pb-2 mb-0">Data Jabatan</h3>
        <a href="<?= route_to('jabatan.index') ?>" class="btn btn-dark">Kembali</a>
    </div>
    <div class="pt-3">
        <form action="<?= route_to('jabatan.store') ?>" method="post">
            <?= csrf_field() ?>
            <div class="mb-3">
                <label for="nama_jabatan" class="form-label">Nama Jabatan</label>
                <input type="text" class="form-control" id="nama_jabatan" name="nama_jabatan" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi_jabatan" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi_jabatan" name="deskripsi_jabatan" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-dark">Simpan</button>
        </form>
    </div>
</div>
<?= $this->endSection() ?>