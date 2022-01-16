<?php

    class Metodos{

        public $conexion;
        
        function __construct(){
            require 'configbd.php';
            $this->conexion = mysqli_connect(HOSTNAME, USERNAME, PW, BD);
        }

        function consultar($consulta){
            return $this->conexion->query($consulta);
        }

        function iniciar_sesion(){

            if(isset($_POST['enviar'])){

                $consulta = "SELECT * FROM usuario WHERE nick ='".$_POST['nick']."' and password ='".$_POST['password']."';";
                $resultado = $this->consultar($consulta);

                $fila=$resultado->fetch_array();

                if($fila){

                    $_SESSION['idUsuario']=$fila['idUsuario'];
                    $_SESSION['nick']=$fila['nick'];
                }else{

                    echo 'Algo falló en el inicio de sesión';
                }
            }
        }

        function comprobar_sesion(){

            session_start();

            $_SESSION['correo'];

            if($_SESSION = null || $_SESSION = ""){
                include("../nav/nav_ns.php");
            }else{
                include("../nav/nav_s.php");
            }
        }
    }
?>