<?php
require "conexion.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM usuarios WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: ver_usuarios.php?msg=eliminado");
    } else {
        echo "Error al eliminar: " . $conn->error;
    }
}
header("Location: verusuarios.php");
exit();

?>
