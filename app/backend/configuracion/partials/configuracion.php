<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Configuración</title>
    <link rel="stylesheet" href="../../../assets/css/config.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script> <!-- para AJAX -->
</head>
<body>
    <div class="sidebar">
        <h4 class="p-3">⚙ Configuración</h4>
        <a href="?page=login" class="menu-item" data-url="partials/login.php">🔐 Iniciar sesión</a>
        <a href="#" class="menu-item" data-url="partials/notificar.php">🛑 Notificar inicio sospechoso</a>
        <a href="#" class="menu-item" data-url="partials/tema.php">🎨 Tema del sitio</a>
        <a href="#" class="menu-item" data-url="partials/cambiar.php">🔒 Cambiar contraseña</a>
    </div>

    <div class="content p-4" id="main-content">
        <h3>Bienvenido a Configuración</h3>
        <p>Selecciona una opción del menú lateral para continuar.</p>
    </div>

    <script>
        $(document).ready(function () {
            $(".menu-item").on("click", function (e) {
                e.preventDefault();
                const url = $(this).data("url");
                $("#main-content").load(url);
            });
        });
    </script>
</body>
</html>
