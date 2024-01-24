<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Aplicación</title>
    <link rel="icon" href="foto 2x2.jpg" type="image/x-icon">
   
    <?php 
        if(!defined('PAG_ACTUAL')){
            define('PAG_ACTUAL', '');
        }
    ?>

</head>
<body>
<h1 class="m-2">Tarea 1</h1>
<div class="container mt-5">
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto m-2">

            <li class="nav-item <?= (PAG_ACTUAL == '') ? 'active' : '' ?>">
                    <a class="nav-link" href="index.php">Inicio</a> 
                </li>

                <li class="nav-item <?= (PAG_ACTUAL == 'Formulario')? 'active' : '' ?> ">
                    <a class="nav-link" href="Formulario.php">Formulario</a> 
                </li>

                <li class="nav-item <?= (PAG_ACTUAL == 'Listado')? 'active' : '' ?> ">
                    <a class="nav-link" href="listado.php">Listado</a> 
                </li>
            </ul>
        </div>
    </nav>
</div>
