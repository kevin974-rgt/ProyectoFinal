<!DOCTYPE html> 
<html lang="es"> 
<head>
    <meta charset="UTF-8"> 
    <title>Carteras de Hombro</title> <!-- Título que aparece en la pestaña del navegador -->
    <!-- Enlace a la hoja de estilos Bootstrap para diseño responsivo y moderno -->
    <link rel="stylesheet" href="<?= base_url('public/css/bootstrap.min.css') ?>">
</head>
<body>
    <div class="container py-4"> <!-- Contenedor central con padding vertical -->
        <h2 class="mb-4">Catálogo - Carteras de Hombro</h2> <!-- Título con margen inferior -->

        <div class="row"> <!-- Fila para distribuir las tarjetas en columnas -->

            <div class="col-md-4"> <!-- Columna que ocupa 4 espacios en pantallas medianas -->
                <div class="card"> <!-- Tarjeta Bootstrap para mostrar producto -->
                    <img src="<?= base_url('public/img/hombro1.jpg') ?>" class="card-img-top" alt="Cartera Hombro 1">
                    <!-- Imagen del producto con clase para que ocupe el ancho superior de la tarjeta -->

                    <div class="card-body"> <!-- Cuerpo de la tarjeta que contiene el texto -->
                        <h5 class="card-title">Cartera Hombro Azul</h5> <!-- Título del producto -->
                        <p class="card-text">$52.00</p> <!-- Precio del producto -->
                        <a href="#" class="btn btn-warning">Agregar al carrito</a> <!-- Botón para acción -->
                    </div>
                </div>
            </div>

            <div class="col-md-4"> <!-- Segunda columna para otro producto -->
                <div class="card">
                    <img src="<?= base_url('public/img/hombro2.webp') ?>" class="card-img-top" alt="Cartera Hombro 2">
                    <div class="card-body">
                        <h5 class="card-title">Cartera Grande Beige</h5>
                        <p class="card-text">$60.00</p>
                        <a href="#" class="btn btn-warning">Agregar al carrito</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4"> <!-- Tercera columna con otro producto -->
                <div class="card">
                    <img src="<?= base_url('public/img/hombro3.jpg') ?>" class="card-img-top" alt="Cartera Hombro 3">
                    <div class="card-body">
                        <h5 class="card-title">Cartera Verde Oliva</h5>
                        <p class="card-text">$48.00</p>
                        <a href="#" class="btn btn-warning">Agregar al carrito</a>
                    </div>
                </div>
            </div>

        </div> <!-- Fin de la fila -->
    </div> <!-- Fin del contenedor -->

    <!-- Script de Bootstrap para funcionalidades como modales, dropdowns, etc. -->
    <script src="<?= base_url('public/js/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>
