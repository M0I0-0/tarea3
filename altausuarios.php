<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Alta Usuarios</title>
    <link rel="stylesheet" href="styles.css">
    <meta name="description" content="Formulario para dar de alta nuevos usuarios en el sistema administrativo.">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
</head>
<body>
    <?php 
    include "header.php";
    ?>

    <div class="main-container">
        <div class="menulateral">
            <?php include 'menu.php'; ?>
        </div>

        <div class="contenido">
            <div class="card">
                <h2>ALTA USUARIOS</h2>
                <div class="linea-division"></div>

                <div class="btn-acciones">
                    <a href="usuarios.php" class="btn-gris"><< REGRESAR</a>
                </div>

                <form id="formulario" action="guardar_usuarios.php" method="POST" style="max-width: 600px; margin: auto;">
                    
                    <div class="form-group">
                        <input type="text" name="usuario" placeholder="Nombre de usuario" class="input-card">
                    </div>

                    <div class="form-group">
                        <input type="password" name="contrasena" placeholder="Contraseña" class="input-card">
                    </div>

                    <div class="form-group">
                        <select name="rol" class="input-card">
                            <option value="admin">Administrador</option>
                            <option value="user">Usuario</option>
                        </select>
                    </div>

                    <button type="submit" class="btn-vino" style="width: 100%; margin-top: 10px;">Guardar Usuario</button>
                    
                </form>
            </div>
        </div>
    </div>
        <script type="text/javascript">
    $(function () {
        $('#formulario').on('submit', function (e) {
            var usuario  = $.trim($('input[name="usuario"]').val());
            var contrasena = $('input[name="contrasena"]').val() || '';
            var rol      = $('select[name="rol"]').val();

            if (!usuario) {
                alert('El campo "Nombre de usuario" es obligatorio.');
                $('input[name="usuario"]').focus();
                e.preventDefault();
                return false;
            }
            if (usuario.length < 3) {
                alert('El nombre de usuario debe tener al menos 3 caracteres.');
                $('input[name="usuario"]').focus();
                e.preventDefault();
                return false;
            }

            if (!contrasena) {
                alert('El campo "Contraseña" es obligatorio.');
                $('input[name="contrasena"]').focus();
                e.preventDefault();
                return false;
            }
            if (contrasena.length < 2) {
                alert('La contraseña debe tener al menos 3 caracteres.');
                $('input[name="contrasena"]').focus();
                e.preventDefault();
                return false;
            }

            if (!rol) {
                alert('Selecciona un rol válido.');
                $('select[name="rol"]').focus();
                e.preventDefault();
                return false;
            }
        });
    });
    </script>
</body>
</html>