<!DOCTYPE html> 
<html lang="es"> 
<head>
    <meta charset="UTF-8"> 
    <title>Vestidos Formales</title> <!-- Título que aparece en la pestaña del navegador -->
    <!-- Vincula la hoja de estilos Bootstrap para diseño responsivo y moderno -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
</head>
<body>
    <div class="container py-4"> <!-- Contenedor principal con padding vertical -->
        <h2 class="mb-4">Catálogo - Vestidos Formales</h2> <!-- Título con margen inferior -->

        <div class="row"> <!-- Fila para organizar los productos en columnas -->

            <!-- Producto 1 -->
            <div class="col-md-4"> <!-- Columna que ocupa 4 espacios en pantallas medianas -->
                <div class="card"> <!-- Tarjeta Bootstrap para mostrar producto -->
                    <img src="<?= base_url('img/formal1.jpg') ?>" class="card-img-top" alt="Vestido Formal 1">
                    <!-- Imagen del producto, ocupa la parte superior de la tarjeta -->
                    <div class="card-body"> <!-- Cuerpo de la tarjeta con texto y botón -->
                        <h5 class="card-title">Vestido Ejecutivo Negro</h5> <!-- Nombre del producto -->
                        <p class="card-text">$98.00</p> <!-- Precio -->
                        <a href="#" class="btn btn-dark">Agregar al carrito</a> <!-- Botón para agregar al carrito -->
                    </div>
                </div>
            </div>

            <!-- Producto 2 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="<?= base_url('img/formal2.webp') ?>" class="card-img-top" alt="Vestido Formal 2">
                    <div class="card-body">
                        <h5 class="card-title">Vestido Clásico Gris</h5>
                        <p class="card-text">$110.00</p>
                        <a href="#" class="btn btn-dark">Agregar al carrito</a>
                    </div>
                </div>
            </div>

            <!-- Producto 3 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="<?= base_url('img/formal3.jpg') ?>" class="card-img-top" alt="Vestido Formal 3">
                    <div class="card-body">
                        <h5 class="card-title">Vestido Blanco Formal</h5>
                        <p class="card-text">$130.00</p>
                        <a href="#" class="btn btn-dark">Agregar al carrito</a>
                    </div>
                </div>
            </div>

        </div> <!-- Fin de la fila -->
    </div> <!-- Fin del contenedor -->

    <!-- Script de Bootstrap para funcionalidades como modales, dropdowns, etc. -->
    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>
