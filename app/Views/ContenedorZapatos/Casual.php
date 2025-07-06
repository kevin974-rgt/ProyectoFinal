<!DOCTYPE html> 
<html lang="es"> 
<head>
    <meta charset="UTF-8"> 
    <title>Zapatos Casual</title> <!-- Título que aparece en la pestaña del navegador -->
    <!-- Enlace a la hoja de estilos Bootstrap para un diseño responsivo y moderno -->
    <link rel="stylesheet" href="<?= base_url('public/css/bootstrap.min.css') ?>">
</head>
<body>
    <div class="container py-4"> <!-- Contenedor central con padding vertical -->
        <h2 class="mb-4">Catálogo - Zapatos Casual</h2> <!-- Título con margen inferior -->

        <div class="row"> <!-- Fila para organizar productos en columnas -->

            <div class="col-md-4"> <!-- Columna que ocupa 4 espacios en pantallas medianas -->
                <div class="card"> <!-- Tarjeta Bootstrap para mostrar un producto -->
                    <img src="<?= base_url('public/img/casual1.webp') ?>" class="card-img-top" alt="Zapato Casual 1">
                    <!-- Imagen del producto, ocupa la parte superior de la tarjeta -->
                    <div class="card-body"> <!-- Cuerpo de la tarjeta para texto y botones -->
                        <h5 class="card-title">Zapato Beige Casual</h5> <!-- Nombre del producto -->
                        <p class="card-text">$55.00</p> <!-- Precio del producto -->
                        <a href="#" class="btn btn-primary">Agregar al carrito</a> <!-- Botón para acción -->
                    </div>
                </div>
            </div>

            <div class="col-md-4"> <!-- Segunda columna para otro producto -->
                <div class="card">
                    <img src="<?= base_url('public/img/casual2.jpg') ?>" class="card-img-top" alt="Zapato Casual 2">
                    <div class="card-body">
                        <h5 class="card-title">Zapato Marrón Café</h5>
                        <p class="card-text">$60.00</p>
                        <a href="#" class="btn btn-primary">Agregar al carrito</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4"> <!-- Tercera columna con otro producto -->
                <div class="card">
                    <img src="<?= base_url('public/img/casual3.webp') ?>" class="card-img-top" alt="Zapato Casual 3">
                    <div class="card-body">
                        <h5 class="card-title">Zapato Casual Azul</h5>
                        <p class="card-text">$58.00</p>
                        <a href="#" class="btn btn-primary">Agregar al carrito</a>
                    </div>
                </div>
            </div>

        </div> <!-- Fin de la fila -->
    </div> <!-- Fin del contenedor -->

    <!-- Script de Bootstrap para funcionalidades dinámicas -->
    <script src="<?= base_url('public/js/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>

