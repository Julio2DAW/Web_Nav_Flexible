<?php
    
    require 'metodos.php';
    $metodos = new Metodos();
?>
<!DOCTYPE html>
<!--Julio Antonio Ramos Gago-->
<html lang="es">
    <head>
       <!--Metadata-->
       <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Nav Flexible con Inicio de Sesión" />
        <meta name="author" content="Julio Antonio Ramos Gago <jramosgago.guadalupe@alumnado.fundacionloyola.net>" />
        <!--Título-->
        <title>Iniciar Sesión</title>
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
            <section>
                <form action="inicio_sesion.php" method="post">
                    <input type="email" name="correo" placeholder="Introduce Email" />
                    <input type="password" name="password" placeholder="Ingrese Password" />
                    <input type="submit" name="enviar" value="Enviar" />
                </form>
                <?php
                    
                    $metodos -> iniciar_sesion();
                ?>
            </section>
        </main>
        <footer>
            <div>Julio Antonio Ramos Gago || Diseño de Interfaces</div>
        </footer>
    </body>
</html>