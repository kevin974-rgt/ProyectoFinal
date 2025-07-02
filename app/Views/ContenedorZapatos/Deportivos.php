<!DOCTYPE html> 
<html lang="es"> 
<head>
    <meta charset="UTF-8"> 
    <title>Zapatos Deportivos</title> <!-- Título que aparecerá en la pestaña del navegador -->
    <!-- Vincula la hoja de estilos Bootstrap para un diseño responsivo y moderno -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
</head>
<body>
    <div class="container py-4"> <!-- Contenedor principal con padding vertical para separación -->
        <h2 class="mb-4">Catálogo - Zapatos Deportivos</h2> <!-- Título con margen inferior -->

        <div class="row"> <!-- Fila para organizar los productos en columnas -->

            <!-- Producto 1 -->
            <div class="col-md-4"> <!-- Columna que ocupa un tercio del ancho en pantallas medianas -->
                <div class="card"> <!-- Tarjeta Bootstrap para mostrar producto -->
                    <img src="<?= base_url('img/zapato1.webp') ?>" class="card-img-top" alt="Zapato Deportivo">
                    <!-- Imagen del producto, ocupa la parte superior de la tarjeta -->
                    <div class="card-body"> <!-- Cuerpo de la tarjeta para título, texto y botón -->
                        <h5 class="card-title">Nike Sport</h5> <!-- Nombre del producto -->
                        <p class="card-text">$89.99</p> <!-- Precio del producto -->
                        <a href="#" class="btn btn-primary">Agregar al carrito</a> <!-- Botón para agregar al carrito -->
                    </div>
                </div>
            </div>

            <!-- Producto 2 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="<?= base_url('img/zapato2.avif') ?>" class="card-img-top" alt="Zapato Deportivo">
                    <div class="card-body">
                        <h5 class="card-title">Adidas Runner</h5>
                        <p class="card-text">$74.50</p>
                        <a href="#" class="btn btn-primary">Agregar al carrito</a>
                    </div>
                </div>
            </div>

            <!-- Producto 3 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="<?= base_url('img/zapato3.jpg') ?>" class="card-img-top" alt="Zapato Deportivo">
                    <div class="card-body">
                        <h5 class="card-title">Puma Velocity</h5>
                        <p class="card-text">$65.00</p>
                        <a href="#" class="btn btn-primary">Agregar al carrito</a>
                    </div>
                </div>
            </div>

        </div> <!-- Fin de la fila -->
    </div> <!-- Fin del contenedor -->

    <!-- Script de Bootstrap para funcionalidades dinámicas como modales o menús desplegables -->
    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>

