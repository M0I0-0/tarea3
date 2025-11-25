<?php
require "conexion.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM cursos WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: ver_cursos.php?msg=eliminado");
    } else {
        echo "Error al eliminar: " . $conn->error;
    }
}
header("Location: vercursos.php");
exit();

?>
