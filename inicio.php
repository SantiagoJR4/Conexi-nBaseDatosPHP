<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilophp.css">
    <title>PaginaInicio</title>
</head>
<body>
    <h1>BIENVENIDO PAGINA PRINCIPAL</h1>
    <div>
        <?php
            session_start();
            $usuario = $_SESSION['nombre'];
            $apellido = $_SESSION['apellido'];
            if(!isset($usuario)){
                header("location:login.html");
            }else{
                echo "Bienvenido $usuario.$apellido";
                ?>
                <hr><a href="salir.php" style="text-decoration:none">SALIR</a>
                <?php
            }
        ?>
    </div>
</body>
</html>