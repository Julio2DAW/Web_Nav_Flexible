<?php
    
    require 'php/metodos.php';
    $metodos = new Metodos();
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <!--Metadata-->
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Nav Flexible con Inicio de Sesión" />
        <meta name="author" content="Julio Antonio Ramos Gago <jramosgago.guadalupe@alumnado.fundacionloyola.net>" />
        <!--Título-->
        <title>Nav Flexible con Inicio de Sesión</title>
        <!--CSS-->
        <link rel="stylesheet" href="css/normalize.css" />
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <header>
            <nav>
                <div>
                    <a href="">Inicio</a>
                </div>
                <div>
                    <a href="">Quienes Somos</a>
                </div>
                <?php
                    $metodos -> comprobar_sesion();
                ?>
            </nav>
        </header>
        <main>
            <h1>Página de Inicio</h1>
        </main>
        <footer>
            <div>Julio Antonio Ramos Gago || Diseño de Interfaces</div>
        </footer>
    </body>
</html>