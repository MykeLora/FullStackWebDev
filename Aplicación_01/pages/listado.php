<?php 
define('PAG_ACTUAL','Listado');
require('../templats/header.php'); ?>

<style>
        /* Estilos personalizados para la tabla */
    .table-custom {
        border-collapse: separate;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
        color: #333;
        background-color: #f8f9fa;
    }

    .table-custom th, .table-custom td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .table-custom th {
        background-color: #343a40;
        color: #fff;
    }

        .table-custom tbody tr:hover {
            background-color: #e9ecef;
        }
</style>

<div class="container mt-5">
    <h3 class="m-3">Listado de Personas</h3>
    <hr>

    <table class="table table-custom">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Mensaje</th>
                <th>Fecha</th>
            </tr>
        </thead>

        <tbody>
            <?php
                $dir = 'mensajes';
                $archivos = scandir($dir);

                foreach($archivos as $archivo){
                    $ruta = "$dir/$archivo";

                    if(is_file($ruta)){
                        $datos = file_get_contents($ruta);
                        $mensaje = json_decode($datos);

                        echo "
                            <tr>
                                <td>{$mensaje->nombre}</td>
                                <td>{$mensaje->correo}</td>
                                <td>{$mensaje->mensaje}</td>
                                <td>{$mensaje->fecha}</td>

                            </tr>
                        ";
                    }
                }
            ?>
        </tbody>
    </table>
</div>



<?php require('../templats/footer.php'); ?>