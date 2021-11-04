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
    <?php
        include('conexion.php');
        $sql = "SELECT Nombres,Apellidos FROM usuario;
        $conn=conectardb();
        $result = mysqli_query($conn,$sql);
        if($result){
            while($row = $result->fetch_array()){
                $nombre=$row['Nombres'];
                $apellido=$row['Apellidos'];
            }
        }
    ?>
    <div>
        <?php echo $nombre.$apellido; ?>
    </div>
</body>
</html>