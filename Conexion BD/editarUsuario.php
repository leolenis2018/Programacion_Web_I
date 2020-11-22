<?php

include("BaseDatos.php");

//1. Recibir desde la URl el id del registro que vamos a editar

$id = $_GET["id"];

//2. recibo los datos a editar
if (isset($_POST["botonEditar"])) {

    $nombre = $_POST["nombreEditar"];
    $descripcion = $_POST["descripcionEditar"];
    $foto= $_POST["foto"];

}

//3. Utilizar o crear un objeto de la clase Base Datos
$transaccion = new BaseDatos();

//4. Crear una consulta SQL para editar datos
$consultaSQL = "UPDATE usuarios SET nombre='$nombre', descripcion='$descripcion', foto='$foto' WHERE id_Usuario='$id' ";

//5. Utilizar el metodo editarDatos
$transaccion->editarDatos($consultaSQL);

 //6. Redireccion
 header("location:listaUsuarios.php");
