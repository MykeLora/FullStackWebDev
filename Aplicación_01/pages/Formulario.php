<?php
define('PAG_ACTUAL','Formulario');
require('../templats/header.php'); ?>


<div class="container mt-5">
    <h2 class="m-3">Formulario</h2>
    <hr>
    <form action="procesar.php" method="post">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre">
        </div>

        <div class="form-group">
            <label for="correo">Correo electrónico:</label>
            <input type="email" class="form-control" id="correo" name="correo" required placeholder="Ingrese su correo electrónico">
        </div>

        <div class="form-group">
            <label for="mensaje">Mensaje:</label>
            <textarea class="form-control" id="mensaje" name="mensaje" rows="5" placeholder="Escriba su mensaje"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>


<?php require('../templats/footer.php'); ?>
