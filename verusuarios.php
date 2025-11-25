<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ver Usuarios</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php 
include "header.php";
require "conexion.php";
?>

<div class="main-container">
    <div class="menulateral">
        <?php include "menu.php"; ?>
    </div>

    <div class="contenido">
        <div class="card">
            <h2>VER USUARIOS</h2>
            <div class="linea-division"></div>

            <div class="btn-acciones">
                <a href="usuarios.php" class="btn-gris"><< REGRESAR</a>
            </div>

            <table class="tabla-estilo">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Usuario</th>
                        <th>Contraseña</th>
                        <th>Tipo de Usuario</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>

                <?php
                $sql = "SELECT * FROM usuarios";
                $resultado = $conn->query($sql);

                if ($resultado->num_rows > 0) {
                    while ($row = $resultado->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>{$row['id']}</td>";
                        echo "<td>{$row['nombre_usuario']}</td>";
                        echo "<td>{$row['contrasena']}</td>";
                        echo "<td>{$row['rol']}</td>";
                        echo "<td><a href='eliminar_usuario.php?id={$row['id']}'>Eliminar</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No hay usuarios registrados.</td></tr>";
                }
                ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>
