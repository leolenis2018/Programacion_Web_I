<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
</head>

<body>
    <?php
    include("BaseDatos.php");

    //1. Crear un objeto de la clase BaseDatos

    $transaccion = new BaseDatos();

    //2. Crear la consulta para buscar datos
    $consultaSQL = "SELECT * FROM usuarios WHERE 1";

    //3. Utilizar el metodo para consultar Datos
    $usuarios = $transaccion->consultarDatos($consultaSQL);

    print_r($usuarios)

    ?>
    <div class="container">

        <div class="row row-cols-1 row-cols-md-3">">

            <?php foreach ($usuarios as $usuario) : ?>
                <div class="col mb-4">
                    <div class="card h-100">
                        <img src="http://placeimg.com/640/480/people" class="card-img-top" alt="imagen">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo ($usuario["nombre"]) ?></h3>
                            <p class="card-text"><?php echo ($usuario["descripcion"]) ?></p>
                            <a href="eliminarUsuarios.php?id=<?php echo($usuario["idUsuario"]) ?>" class="btn btn-outline-primary">Eliminar</a>
                        </div>
                    </div>
                </div>

            <?php endforeach ?>









            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
            <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
            <script>
                $(document).ready(function() {
                    $('body').bootstrapMaterialDesign();
                });
            </script>
</body>

</html>