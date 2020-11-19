<?php

include("BaseDatos.php");

//1. Recibir desde la URl el id del registro que vamos a eliminar

$id=$_GET["id"];

//2. Creamos un obejto de la clase Base Datos()
$transaccion=new BaseDatos();

//3. Crear una consulta SQL para elimiar datos
$consultaSQL="DELETE FROM usuarios WHERE idUsuario='$id' ";

//4. Utilizar el metodo eliminarDatos
$transaccion->eliminarDatos($consultaSQL);

if (isset($_POST["botonEnvio"])) {


    // 1. //Recibir los datos desde la vista (Interfaz de Usuario)

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $descripcion = $_POST["descripcion"];
    $genero = $_POST["genero"];

    //2.// Crear una copia de la clase BaseDatos
    //Crear un objeto de la clase BaseDatos
    $transaccion = new BaseDatos();

    // 3. Crear una consulta SQL

    $consultaSQL = "INSERT INTO usuarios(nombre, apellido, descripcion, genero) VALUES ('$nombre','$apellido', '$descripcion', '$genero' )";

    //4. Utlizar la funcion para insertar datos de la clase BD

    $transaccion->agregarDatos($consultaSQL);

    
}