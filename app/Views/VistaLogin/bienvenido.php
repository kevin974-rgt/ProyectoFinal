<!DOCTYPE html> 
<html lang="es"> 

<head>
    <meta charset="UTF-8"> 
    <title>Bienvenido</title> <!-- Título que aparecerá en la pestaña del navegador -->

    <!-- Enlace al archivo CSS de Bootstrap para dar estilos bonitos al sitio -->
    <link rel="stylesheet" href="<?= base_url('public/css/bootstrap.min.css') ?>">
</head>

<body class="text-center p-5"> <!-- El contenido del body estará centrado y con padding (espaciado interno) -->

    <h1>¡Bienvenido!</h1> <!-- Título principal que se muestra en grande -->
    <p>Has ingresado correctamente al sistema.</p> <!-- Mensaje de confirmación de acceso -->

    <!-- Contenedor principal para organizar los elementos con Bootstrap -->
    <div class="container mt-5"> <!-- mt-5 agrega un margen arriba -->
        <div class="row justify-content-center"> <!-- Crea una fila y centra el contenido horizontalmente -->

            <!-- Primera columna: Zapatos -->
            <div class="col-md-3"> <!-- Ocupa 3 columnas de 12 disponibles en pantallas medianas -->
                <h4>Zapatos</h4> <!-- Subtítulo para esta categoría -->

                <!-- Botón que lleva a la ruta zapatos/1 con estilo azul (primario) -->
                <a href="<?= base_url('zapatos/1') ?>" class="btn btn-primary btn-block mb-2">Deportivos (1)</a>

                <!-- Botón que lleva a la ruta zapatos/2 con estilo gris (secundario) -->
                <a href="<?= base_url('zapatos/2') ?>" class="btn btn-secondary btn-block">Casual (2)</a>
            </div>

            <!-- Segunda columna: Vestidos -->
            <div class="col-md-3">
                <h4>Vestidos</h4> <!-- Subtítulo para vestidos -->

                <!-- Botón verde para vestido de fiesta (id 1) -->
                <a href="<?= base_url('vestidos/1') ?>" class="btn btn-success btn-block mb-2">Fiesta (1)</a>

                <!-- Botón celeste para vestido formal (id 2) -->
                <a href="<?= base_url('vestidos/2') ?>" class="btn btn-info btn-block">Formal (2)</a>
            </div>

            <!-- Tercera columna: Carteras -->
            <div class="col-md-3">
                <h4>Carteras</h4> <!-- Subtítulo para carteras -->

                <!-- Botón amarillo para cartera de mano (id 1) -->
                <a href="<?= base_url('carteras/1') ?>" class="btn btn-warning btn-block mb-2">Mano (1)</a>

                <!-- Botón rojo para cartera de hombro (id 2) -->
                <a href="<?= base_url('carteras/2') ?>" class="btn btn-danger btn-block">Hombro (2)</a>
            </div>

        </div> 
    </div> 

</body> 
</html> 
