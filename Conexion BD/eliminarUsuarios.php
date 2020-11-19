<?php

include("BaseDatos.php");

//1. Recibir desde la URl el id del registro que vamos a eliminar

$id=$_GET["id"];

//2. Creamos un objeto de la clase Base Datos()
$transaccion = new BaseDatos();

//3. Crear una consulta SQL para elimiar datos
$consultaSQL = "DELETE FROM usuarios WHERE idUsuario='$id' ";

//4. Utilizar el metodo eliminarDatos
$transaccion->eliminarDatos($consultaSQL);
