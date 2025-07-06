<!DOCTYPE html> 
<html lang="es"> 
<head>
    <meta charset="UTF-8"> 
    <title>Vestidos de Fiesta</title> <!-- Título que aparecerá en la pestaña del navegador -->
    <!-- Enlace a la hoja de estilos Bootstrap para un diseño responsivo y moderno -->
    <link rel="stylesheet" href="<?= base_url('public/css/bootstrap.min.css') ?>">
</head>
<body>
    <div class="container py-4"> <!-- Contenedor principal con padding vertical -->
        <h2 class="mb-4">Catálogo - Vestidos de Fiesta</h2> <!-- Título con margen inferior -->

        <div class="row"> <!-- Fila para organizar los productos en columnas -->

            <!-- Producto 1 -->
            <div class="col-md-4"> <!-- Columna que ocupa 4 espacios en pantallas medianas -->
                <div class="card"> <!-- Tarjeta Bootstrap para mostrar producto -->
                    <img src="<?= base_url('public/img/fiesta1.webp') ?>" class="card-img-top" alt="Vestido Fiesta 1">
                    <!-- Imagen del producto, se adapta al ancho superior de la tarjeta -->
                    <div class="card-body"> <!-- Cuerpo de la tarjeta para texto y botones -->
                        <h5 class="card-title">Vestido Rojo Elegante</h5> <!-- Nombre del producto -->
                        <p class="card-text">$120.00</p> <!-- Precio -->
                        <a href="#" class="btn btn-danger">Agregar al carrito</a> <!-- Botón de acción -->
                    </div>
                </div>
            </div>

            <!-- Producto 2 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="<?= base_url('public/img/fiesta2.webp') ?>" class="card-img-top" alt="Vestido Fiesta 2">
                    <div class="card-body">
                        <h5 class="card-title">Vestido Azul Noche</h5>
                        <p class="card-text">$135.00</p>
                        <a href="#" class="btn btn-danger">Agregar al carrito</a>
                    </div>
                </div>
            </div>

            <!-- Producto 3 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="<?= base_url('public/img/fiesta3.avif') ?>" class="card-img-top" alt="Vestido Fiesta 3">
                    <div class="card-body">
                        <h5 class="card-title">Vestido Plateado Brillante</h5>
                        <p class="card-text">$150.00</p>
                        <a href="#" class="btn btn-danger">Agregar al carrito</a>
                    </div>
                </div>
            </div>

        </div> <!-- Fin de la fila -->
    </div> <!-- Fin del contenedor -->

    <!-- Script de Bootstrap para funcionalidades dinámicas -->
    <script src="<?= base_url('public/js/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>
