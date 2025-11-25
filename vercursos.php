<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ver Cursos</title>
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
            <h2>VER CURSOS</h2>
            <div class="linea-division"></div>

            <div class="btn-acciones">
                <a href="cursos.php" class="btn-gris"><< REGRESAR</a>
            </div>

            <table class="tabla-estilo">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre del Curso</th>
                        <th>Docente</th>
                        <th>Horas</th>
                        <th>Días</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>

                <?php
                $sql = "SELECT * FROM cursos";
                $resultado = $conn->query($sql);

                if ($resultado->num_rows > 0) {
                    while ($row = $resultado->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>{$row['id']}</td>";
                        echo "<td>{$row['nombre_curso']}</td>";
                        echo "<td>{$row['nombre_docente']}</td>";
                        echo "<td>{$row['numero_horas']}</td>";
                        echo "<td>{$row['dias']}</td>";
                        echo "<td><a href='eliminar_curso.php?id={$row['id']}'>Eliminar</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='7'>No hay cursos disponibles.</td></tr>";
                }
                ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>
