<?php
session_start();
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = trim($_POST['usuario'] ?? '');
    $password_ingresada = $_POST['password'] ?? '';

    if ($usuario === '' || $password_ingresada === '') {
        echo "
        <script>
            alert('Usuario y contraseña son obligatorios.'); 
            window.location.href = 'index.php';
        </script>
        ";
        exit;
    }

    $sql = "SELECT nombre_usuario, contrasena FROM usuarios WHERE nombre_usuario = ?";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("Error en prepare(): " . $conn->error);
    }
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado && $resultado->num_rows === 1) {
        $fila = $resultado->fetch_assoc();

        // Comparación directa porque la contraseña se guarda sin hash
        if ($password_ingresada === $fila['contrasena']) {
            $_SESSION['usuario'] = $usuario;
            header("Location: inicio.php");
            exit();
        } else {
            echo "
            <script>
                alert('La contraseña es incorrecta.');
                window.location.href = 'index.php';
            </script>
            ";
        }
    } else {
        echo "
        <script>
            alert('El usuario no existe en la base de datos.');
            window.location.href = 'index.php';
        </script>
        ";
    }

    $stmt->close();
    $conn->close();
}
?>