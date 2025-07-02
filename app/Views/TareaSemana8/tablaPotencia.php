<!DOCTYPE html> <!-- Declaración del tipo de documento HTML5 -->
<html lang="es"> <!-- Define que el idioma principal del contenido es español -->
<head>
    <meta charset="UTF-8"> <!-- Codificación de caracteres UTF-8 para admitir tildes y caracteres especiales -->
    <title>Potencias</title> <!-- Título que aparece en la pestaña del navegador -->

    <!-- Enlace a la hoja de estilos Bootstrap para aplicar diseño moderno -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
</head>
<body class="p-4"> <!-- Cuerpo de la página con padding aplicado mediante Bootstrap -->
    <div class="container"> <!-- Contenedor principal con márgenes automáticos y ancho adaptable -->
        <h2 class="mb-4">Potencias</h2> <!-- Título de la sección con margen inferior -->

        <div class="mb-3"> <!-- Campo de entrada para la base -->
            <input type="number" id="base" class="form-control" placeholder="Base">
            <!-- Input numérico con Bootstrap, identificado como 'base' -->
        </div>

        <div class="mb-3"> <!-- Campo de entrada para el exponente -->
            <input type="number" id="exponente" class="form-control" placeholder="Exponente">
            <!-- Input numérico con Bootstrap, identificado como 'exponente' -->
        </div>

        <button id="btnPotencia" class="btn btn-success mb-3">Calcular</button>
        <!-- Botón verde que al hacer clic calculará la potencia -->

        <div id="resultadoPotencia" class="alert alert-info"></div>
        <!-- Div donde se mostrará el resultado. Se usa estilo de alerta informativa de Bootstrap -->
    </div>

    <!-- Inclusión de scripts al final para no bloquear el renderizado del HTML -->

    <!-- Script de funcionalidades de Bootstrap (modales, botones, etc.) -->
    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Script propio donde se programa el cálculo de la potencia -->
    <script src="<?= base_url('js/eventos.js') ?>"></script>
</body>
</html>
