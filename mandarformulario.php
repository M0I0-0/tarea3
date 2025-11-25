<?php
session_start();
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $password_ingresada = $_POST['password'];

    $sql = "SELECT nombre_usuario, contrasena FROM usuarios WHERE nombre_usuario = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows === 1) {
        $fila = $resultado->fetch_assoc();
        
        if (password_verify($password_ingresada, $fila['contrasena'])) {
            
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