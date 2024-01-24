<?php
date_default_timezone_set('America/Santo_Domingo');

if ($_POST) {
    // Verifica que todos los campos estén completos
    if (empty($_POST['nombre']) || empty($_POST['correo']) || empty($_POST['mensaje'])) {
        echo '<div class="container mt-5 text-center">
                <div class="alert alert-danger" role="alert">
                    ¡Error! Todos los campos deben completarse.
                </div>
              </div>';
    } else {
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $mensaje = $_POST['mensaje'];
        $fecha = date("Y-m-d H:i:s");

        if (!is_dir('mensajes')) {
            mkdir('mensajes', 0777);
        }

        $_POST['fecha'] = date('Y-m-d H:i:s');

        $datos = json_encode($_POST);

        file_put_contents("mensajes/$correo.json", $datos); // Cambié la extensión del archivo a .json

        
        // Muestra un mensaje de agradecimiento debajo del navbar
        echo '<div class="container mt-5">
                <div class="alert alert-success text-center" role="alert">
                    ¡Gracias, ' . $nombre . '! Hemos recibido tu mensaje.
                    <a href="listado.php" class="btn btn-primary">Ver mensajes</a>
                </div>
              </div>';


    }
}

require('../templats/header.php'); ?>


<?php require('../templats/footer.php'); ?>


