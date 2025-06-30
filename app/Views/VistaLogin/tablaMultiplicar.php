<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla de Multiplicar</title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
</head>
<body class="p-4">
    <div class="container">
        <h2 class="mb-4">Tabla de Multiplicar</h2>
        <div class="mb-3">
            <input type="number" id="numero" class="form-control" placeholder="Ingresa un número">
        </div>
        <button id="btnMultiplicar" class="btn btn-primary mb-3">Generar Tabla</button>
        <ul id="resultado" class="list-group"></ul>
    </div>

    <!-- Scripts -->
    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('js/eventos.js') ?>"></script>
</body>
</html>
