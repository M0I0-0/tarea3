<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel Administrativo - Cursos</title>
    <link rel="stylesheet" href="styles.css">
    <meta name="description" content="Panel administrativo para la gestión de cursos.">
</head>
<body>
    <?php 
    include "header.php";
    ?>

    <div class="main-container">
        <div class="menulateral">
            <?php include 'menu.php'; ?>
        </div>

        <div class="contenido">
            <div class="card">
                <h2>CURSOS</h2>
                <div class="linea-division"></div>

                <div class="btn-acciones" style="margin-top: 50px;">
                    <a href="vercursos.php" class="btn-gris">VER CURSOS</a>
                    <a href="altacursos.php" class="btn-vino">AGREGAR CURSOS</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>