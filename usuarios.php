<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel Administrativo - Cursos</title>
    <link rel="stylesheet" href="styles.css">
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
                <h2>USUARIOS</h2>
                <div class="linea-division"></div>

                <div class="btn-acciones" style="margin-top: 50px;">
                    <a href="verusuarios.php" class="btn-gris">VER USUARIOS</a>
                    <a href="altausuarios.php" class="btn-vino">AGREGAR USUARIOS</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>