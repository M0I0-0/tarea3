<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Alta de Cursos</title>
    <link rel="stylesheet" href="styles.css">
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
                <h2>ALTA DE CURSOS</h2>
                <div class="linea-division"></div>

                <div class="btn-acciones">
                    <a href="cursos.php" class="btn-gris"><< REGRESAR</a>
                </div>

                <form id="formulario" action="guardar_curso.php" method="post" class="curso-form">
                    <div class="form-group">
                        <input type="text" placeholder="Nombre del curso" class="input-card" name="nombre_curso">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Nombre del docente" class="input-card" name="nombre_docente">
                    </div>
                    <div class="form-group">
                        <select class="input-card" name="numero_horas">
                            <option>Numero de horas del curso</option>
                            <option>20</option>
                            <option>30</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="horario">Selecciona un horario:</label>
                        <select id="horario" name="horario" class="input-card">
                            <option value="">Selecciona un horario</option>
                            <option value="8-11am">8 - 11 am</option>
                            <option value="11-2pm">12 am - 15 pm</option>
                            <option value="2-5pm">16 pm - 20 pm</option>
                        </select>
                    </div>
                    <div class="dias-container">
                        <h4 class="dias-title">Días del curso</h4>
                        <label class="dias-option">
                            <input type="radio" name="dias" value="lun_mie_vie"> <br> Lunes, Miércoles, Viernes
                        </label>
                        <label class="dias-option">
                            <input type="radio" name="dias" value="sabados"><br> Martes, Jueves y Sabado
                        </label>
                        <label class="dias-option">
                            <input type="radio" name="dias" value="solosabados"><br> Solo Sabados
                        </label>
                    </div>

                    <div class="form-group mt-15">
                        <textarea placeholder="Objetivo del curso" class="input-card" rows="4" name="objetivo"></textarea>
                    </div>

                    <button type="submit" class="btn-vino btn-guardar">Guardar Curso</button>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    $(function () {
        $('#formulario').on('submit', function (e) {
            var nombre    = $.trim($('input[name="nombre_curso"]').val());
            var docente   = $.trim($('input[name="nombre_docente"]').val());
            var numero_horas = $('select[name="numero_horas"]').val();
            var horario = $('#horario').val();
            var dias = $('input[name="dias"]:checked').val();
            var objetivo  = $.trim($('textarea[name="objetivo"]').val());

            if (!nombre) {
                alert('El campo "Nombre del curso" es obligatorio');
                $('input[name="nombre_curso"]').focus();
                e.preventDefault();
                return false;
            }
            if (!docente) {
                alert('El campo "Nombre del docente" es obligatorio');
                $('input[name="nombre_docente"]').focus();
                e.preventDefault();
                return false;
            }
            if (!numero_horas || numero_horas === 'Numero de horas del curso') {
                alert('Selecciona el número de horas del curso');
                $('select[name="numero_horas"]').focus();
                e.preventDefault();
                return false;
            }
            if (!horario) {
                alert('Selecciona un horario para el curso');
                $('#horario').focus();
                e.preventDefault();
                return false;
            }
            if (!dias) {
                alert('Selecciona al menos una opción en "Días del curso"');
                $('input[name="dias"]').first().focus();
                e.preventDefault();
                return false;
            }
            if (!objetivo) {
                alert('El campo "Objetivo del curso" es obligatorio');
                $('textarea[name="objetivo"]').focus();
                e.preventDefault();
                return false;
            }
        });
    });
    </script>
</body>
</html>