<?php

include("BaseDatos.php");

if (isset($_POST["botonEnvio"])) {


    //Recibir los datos desde la vista (Interfaz de Usuario)

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $descripcion = $_POST["descripcion"];
    $genero = $_POST["genero"];

    // Crear una copia de la clase BaseDatos
    // Crear un objeto de la clase BaseDatos

    $transaccion=new BaseDatos();
    $transaccion->conectarBD();
}
