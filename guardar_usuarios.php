<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $usuario = trim($_POST['usuario']);
    $contrasena = trim($_POST['contrasena']);
    $rol = trim($_POST['rol']);

    if (empty($usuario) || empty($contrasena) || empty($rol)) {
        echo "Error: Todos los campos son obligatorios.";
        exit;
    }

    // $contrasena se usará tal cual (sin hash)
    $sql = "INSERT INTO usuarios (nombre_usuario, contrasena, rol)
            VALUES (?, ?, ?)";

    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Error en prepare(): " . $conn->error);
    }

    $stmt->bind_param("sss", $usuario, $contrasena, $rol);

    if ($stmt->execute()) {
        header("Location: altausuarios.php");
        exit();
    }

    $stmt->close();
    $conn->close();

} else {
    echo "Método no permitido.";
}
?>
