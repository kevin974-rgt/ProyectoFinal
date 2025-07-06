<!doctype html> 
<html lang="es"> 

<head>
    <title>CATALOGO DE ROPA PUCESI</title> <!-- Título de la pestaña del navegador -->
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!-- Hace que la página sea responsive (adaptable a móviles) -->

    <!-- Fuente de Google (Lato) para estilos de texto más bonitos -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <!-- Íconos de Font Awesome (como el ojito para mostrar la contraseña) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Archivo CSS personalizado del proyecto -->
    <link rel="stylesheet" href="<?= base_url('public/css/style.css') ?>">
</head>

<!-- BODY con fondo de imagen -->
<body class="img js-fullheight" style="background-image: url('<?= base_url('public/img/bg.jpg') ?>');">

    <!-- Sección principal del formulario -->
    <section class="ftco-section">
        <div class="container"> <!-- Contenedor general -->
            <div class="row justify-content-center"> <!-- Fila centrada -->
                <div class="col-md-6 text-center mb-5"> <!-- Columna de 6 espacios, centrada, con margen abajo -->
                    <h2 class="heading-section">CATALOGO DE ROPA</h2> <!-- Título del formulario -->
                </div>
            </div>

            <div class="row justify-content-center"> <!-- Segunda fila centrada -->
                <div class="col-md-6 col-lg-4"> <!-- Columna adaptable (6 en md, 4 en lg) -->
                    <div class="login-wrap p-0"> <!-- Contenedor del formulario sin padding -->

                        <h3 class="mb-4 text-center">¿Tienes una cuenta?</h3> <!-- Subtítulo centrado -->

                        <!-- Si hay un mensaje de error en la sesión, se muestra aquí -->
                        <?php if (session('mensaje')): ?>
                            <div class="alert alert-danger text-center">
                                <?= session('mensaje') ?> <!-- Muestra el mensaje de error -->
                            </div>
                        <?php endif; ?>

                        <!-- Formulario de inicio de sesión -->
                        <form action="<?= base_url('login/verificar') ?>" method="post">
                            <!-- Campo para el nombre de usuario -->
                            <div class="form-group">
                                <input type="text" name="usuario" class="form-control" placeholder="Usuario" required>
                            </div>

                            <!-- Campo para la contraseña -->
                            <div class="form-group">
                                <input id="password-field" type="password" name="password" class="form-control" placeholder="Contraseña" required>
                                <!-- Icono de ojito para mostrar/ocultar contraseña -->
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>

                            <!-- Botón para enviar el formulario -->
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3">Iniciar sesión</button>
                            </div>

                            <!-- Opciones adicionales (recordar usuario, recuperar contraseña) -->
                            <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary">Recordarme
                                        <input type="checkbox" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="w-50 text-md-right">
                                    <a href="#" style="color: #fff">¿Olvidaste tu contraseña?</a> <!-- Enlace (falso por ahora) -->
                                </div>
                            </div>
                        </form>

                        <!-- Línea divisoria y opciones de redes sociales -->
                        <p class="w-100 text-center">&mdash; O inicia sesión con &mdash;</p>

                        <div class="social d-flex text-center">
                            <a href="#" class="px-2 py-2 mr-md-1 rounded">
                                <span class="fa fa-facebook mr-2"></span> Facebook
                            </a>
                            <a href="#" class="px-2 py-2 ml-md-1 rounded">
                                <span class="fa fa-twitter mr-2"></span> Twitter
                            </a>
                        </div>

                    </div> <!-- Fin login-wrap -->
                </div>
            </div>
        </div>
    </section>

    <!-- Scripts JavaScript para funcionamiento de la plantilla -->
    <script src="<?= base_url('public/js/jquery.min.js') ?>"></script> <!-- jQuery -->
    <script src="<?= base_url('public/js/popper.js') ?>"></script> <!-- Popper (para tooltips, etc.) -->
    <script src="<?= base_url('public/js/bootstrap.min.js') ?>"></script> <!-- Bootstrap JS -->
    <script src="<?= base_url('public/js/main.js') ?>"></script> <!-- JS personalizado -->
</body>
</html>
