<?php

class BaseDatos
{

    //Atributos == Variables
    public $usuarioBD = "root";
    public $passwordBD = "";


    //funcion especial que se llama constructor

    public function __construct()
    {
    }

    //metodos == funciones

    public function conectarBD()
    {

        try {

            $infoDB = "mysql:host=localhost;dbname=tienda18";
            $conexionBD = new PDO($infoDB, $this->usuarioBD, $this->passwordBD);
            return ($conexionBD);
        } catch (PDOException $error) {
            echo ($error->getMessage());
        }
    }

    public function agregarDatos($consultaSQL)
    {
        // 1.Para enviar datos a una bd, primeo debo conectarme.
        $conexionBD = $this->conectarBD();

        //2. Preparar la consulta a realizar. Esto es utilizar un metodo de PDO.
        $consultaInsertarDatos = $conexionBD->prepare($consultaSQL);

        //3. Ejecutamos la consulta.
        $resultado = $consultaInsertarDatos->execute();

        //4. Verificamos el resultado.
        if ($resultado) {
            echo ("Registro ok");
        } else {
            echo ("Error");
        }
    }

    public function consultarDatos($consultaSQL)
    {

        // 1.Para enviar datos a una bd, primeo debo conectarme.
        $conexionBD = $this->conectarBD();

        //2. Preparar la consulta a realizar. 
        $consultaBuscarDatos = $conexionBD->prepare($consultaSQL);

        //3. Definir la forma en la que vamos a traer los datos (setFetchMode)

        $consultaBuscarDatos->setFetchMode(PDO::FETCH_ASSOC);

        //4. Ejecutar la consulta.

        $consultaBuscarDatos->execute();

        //5. Retornar los Datos consultados
        return ($consultaBuscarDatos->fetchAll());
    }

    public function editarDatos($consultaSQL)

    { //Accedemos a la base de Datos
        $conexionBD = $this->conectarBD();

        // Instanciamos la clase
        $editarDatos = $conexionBD->prepare($consultaSQL);

        //ejecutamos la operacion
        $resultado = $editarDatos->execute();

        if ($resultado) {
            echo ("Editado con exito");
        } else {
            echo ("Error al Editar");
        }
    }
    public function eliminarDatos($consultaSQL)
    {
        //Accedemos a la base de Datos
        $conexionBD = $this->conectarBD();

        // Instanciamos la clase
        $eliminarDatos = $conexionBD->prepare($consultaSQL);


        //ejecutamos la operacion
        $resultado = $eliminarDatos->execute();

        if ($resultado) {
            echo ("Eliminado con exito");
        } else {
            echo ("Error al Eliminar");
        }



    }
}