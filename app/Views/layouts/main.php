<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi CRUD Pegawai</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>

<body class="h-100 d-flex flex-column">
<?= $this->include('layouts/navbar') ?>

<div class="container">
    <?= $this->renderSection('content') ?>
</div>

<footer class="footer mt-auto py-3 bg-secondary">
        <div class="container text-center">
            <span class="text-white">Copyright &copy; 2025 - Codeigniter 4</span>
        </div>
    </footer>

    <script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>