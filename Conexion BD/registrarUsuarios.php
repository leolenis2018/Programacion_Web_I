<?php

include("BaseDatos.php");

if (isset($_POST["botonEnvio"])) {


    // 1. //Recibir los datos desde la vista (Interfaz de Usuario)

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $descripcion = $_POST["descripcion"];
    $genero = $_POST["genero"];
    $foto= $_POST["foto"];

    //2.// Crear una copia de la clase BaseDatos
    //Crear un objeto de la clase BaseDatos
    $transaccion = new BaseDatos();

    // 3. Crear una consulta SQL

    $consultaSQL = "INSERT INTO usuarios(nombre, apellido, descripcion, genero, foto) VALUES ('$nombre','$apellido', '$descripcion', '$genero', '$foto')";

    //4. Utlizar la funcion para insertar datos de la clase BD

    $transaccion->agregarDatos($consultaSQL);

    //5. Redireccion
    header("location:formularioRegistro.php");

    
}