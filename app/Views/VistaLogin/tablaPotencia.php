<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Potencias</title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
</head>
<body class="p-4">
    <div class="container">
        <h2 class="mb-4">Potencias</h2>
        <div class="mb-3">
            <input type="number" id="base" class="form-control" placeholder="Base">
        </div>
        <div class="mb-3">
            <input type="number" id="exponente" class="form-control" placeholder="Exponente">
        </div>
        <button id="btnPotencia" class="btn btn-success mb-3">Calcular</button>
        <div id="resultadoPotencia" class="alert alert-info"></div>
    </div>

    <!-- Scripts -->
    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('js/eventos.js') ?>"></script>
</body>
</html>
