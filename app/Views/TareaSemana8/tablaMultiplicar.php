<!DOCTYPE html> <!-- Indica que el documento está en formato HTML5 -->
<html lang="es"> <!-- Establece el idioma del contenido como español -->
<head>
    <meta charset="UTF-8"> <!-- Define la codificación de caracteres como UTF-8 -->
    <title>Tabla de Multiplicar</title> <!-- Título que aparece en la pestaña del navegador -->

    <!-- Enlace al archivo CSS de Bootstrap para aplicar estilos rápidamente -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
</head>
<body class="p-4"> <!-- Agrega padding general al cuerpo de la página -->
    <div class="container"> <!-- Contenedor principal con márgenes automáticos y ancho fijo -->
        <h2 class="mb-4">Tabla de Multiplicar</h2> <!-- Título con margen inferior -->

        <div class="mb-3"> <!-- Contenedor del campo de entrada con margen inferior -->
            <input type="number" id="numero" class="form-control" placeholder="Ingresa un número">
            <!-- Campo de tipo numérico para que el usuario ingrese el número -->
        </div>

        <button id="btnMultiplicar" class="btn btn-primary mb-3">Generar Tabla</button>
        <!-- Botón que al hacer clic generará la tabla de multiplicar -->

        <ul id="resultado" class="list-group"></ul>
        <!-- Lista vacía donde se mostrará la tabla generada -->
    </div>

    <!-- Scripts que se cargan al final para mejorar el rendimiento -->

    <!-- Script de Bootstrap con funcionalidades como botones, modales, etc. -->
    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Script personalizado donde se programan los eventos y lógica -->
    <script src="<?= base_url('js/eventos.js') ?>"></script>
</body>
</html>
