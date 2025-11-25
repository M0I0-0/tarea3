<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso Panel</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="header">
        <h1>ESCUELA DE CURSOS DE CAPACITACION</h1>
    </div>
    <div class="form1">
        <h2>Acceso Panel Administrativo</h2>
        <form action="mandarformulario.php" method="POST">
            <input type="text" name="usuario" placeholder="Usuario" required>
            <br>
            <input type="password" name="password" placeholder="Contraseña" required>
            <br>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>