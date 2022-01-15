<?php

    //IMPORTACIONES
    require_once 'conexion.php';

    class Operaciones{

        //ATRIBUTOS
        private $bd = null;

        function __construct(){

            $this->bd = new Conexion();

	    }

        function iniciarSesion($datos){

            //Consulta SQL
            $sql = 'SELECT idUsuario FROM usuario WHERE correo = "'.$datos['correo'].'" AND password = "'.$datos['password'].'"';

            //Enviar la consulta
            $this->bd->consultar($sql);

            //Comprobar si ha habido error
            if($this->bd->codigoError())
            return;

            //Obtener el resultado de la consulta
            $resultado = $this->bd->extraerFila();

            //Crear sesión con el id del usuario
            session_start();
            $_SESSION['id'] = $resultado['idUsuario'];

            //Redirigir a index.php
            header('Location:index.php');

        }
    }
?>