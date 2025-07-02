<!DOCTYPE html> 
<html lang="es"> 
<head>
    <meta charset="UTF-8"> 
    <title>Carteras de Mano</title> <!-- Título que aparece en la pestaña del navegador -->
    <!-- Enlace a la hoja de estilos Bootstrap para diseño responsivo y moderno -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
</head>
<body>
    <div class="container py-4"> <!-- Contenedor central con padding vertical -->
        <h2 class="mb-4">Catálogo - Carteras de Mano</h2> <!-- Título con margen inferior -->

        <div class="row"> <!-- Fila para distribuir las tarjetas en columnas -->

            <div class="col-md-4"> <!-- Columna que ocupa 4 espacios en pantallas medianas -->
                <div class="card"> <!-- Tarjeta Bootstrap para mostrar producto -->
                    <img src="<?= base_url('img/mano1.jpeg') ?>" class="card-img-top" alt="Cartera Mano 1">
                    <!-- Imagen del producto con clase para que ocupe el ancho superior de la tarjeta -->

                    <div class="card-body"> <!-- Cuerpo de la tarjeta que contiene el texto -->
                        <h5 class="card-title">Cartera Negra Elegante</h5> <!-- Título del producto -->
                        <p class="card-text">$45.00</p> <!-- Precio del producto -->
                        <a href="#" class="btn btn-warning">Agregar al carrito</a> <!-- Botón para acción -->
                    </div>
                </div>
            </div>

            <div class="col-md-4"> <!-- Segunda columna para otro producto -->
                <div class="card">
                    <img src="<?= base_url('img/mano2.webp') ?>" class="card-img-top" alt="Cartera Mano 2">
                    <div class="card-body">
                        <h5 class="card-title">Cartera Marrón Cuero</h5>
                        <p class="card-text">$50.00</p>
                        <a href="#" class="btn btn-warning">Agregar al carrito</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4"> <!-- Tercera columna con otro producto -->
                <div class="card">
                    <img src="<?= base_url('img/mano3.jpg') ?>" class="card-img-top" alt="Cartera Mano 3">
                    <div class="card-body">
                        <h5 class="card-title">Cartera Pequeña Roja</h5>
                        <p class="card-text">$40.00</p>
                        <a href="#" class="btn btn-warning">Agregar al carrito</a>
                    </div>
                </div>
            </div>

        </div> <!-- Fin de la fila -->
    </div> <!-- Fin del contenedor -->

    <!-- Script de Bootstrap para funcionalidades como modales, dropdowns, etc. -->
    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>
