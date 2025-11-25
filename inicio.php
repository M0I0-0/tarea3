<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Inicio</title>
    <link rel="stylesheet" href="styles.css">
    <meta name="description" content="Esta es la pagina de inicio del sitio web.">
</head>
<body>
    <?php 
    include "header.php"; 
    ?>
    <div class="main-container">
        <div class="menulateral">
            <?php 
            include 'menu.php'; 
        ?>
        </div>
        <div class="contenido">
            <div class="card">
                <h1>Pagina de Inicio del Panel</h1>
                <img class="img-fluid" src="foto_admin.jpg" alt="">
            </div>
        </div>
    </div>
</body>
</html>