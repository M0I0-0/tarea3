<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre_curso = trim($_POST['nombre_curso']);
    $nombre_docente = trim($_POST['nombre_docente']);
    $numero_horas = trim($_POST['numero_horas']);
    $horario = trim($_POST['horario']);
    $dias = trim($_POST['dias']);
    $objetivo = trim($_POST['objetivo']);

    // Validaciones básicas
    if (
        empty($nombre_curso) || empty($nombre_docente) || 
        empty($numero_horas) || empty($horario) || empty($dias)
    ) {
        echo "Error: Todos los campos obligatorios deben llenarse.";
        exit;
    }

    $sql = "INSERT INTO cursos (nombre_curso, nombre_docente, numero_horas, horario, dias, objetivo)
            VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Error en prepare(): " . $conn->error);
    }

    $stmt->bind_param("ssisss",
        $nombre_curso,
        $nombre_docente,
        $numero_horas,
        $horario,
        $dias,
        $objetivo
    );

    if ($stmt->execute()) {
        header("Location: altacursos.php");
        exit();
    }

    $stmt->close();
    $conn->close();

} else {
    echo "Método no permitido.";
}
?>
