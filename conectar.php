<?php
    session_start();

    $user=$_POST["user"];
    $pw=md5($_POST["pw"]);

    $_SESSION["user"]=$user;

    //Include
    include('conexion.php');

    $conn=conectardb();

    $sql = "SELECT * FROM usuario WHERE user='$user' and pw='$pw'";
    $result = $conn->query($sql);

    $filas=mysqli_num_rows($result);

    if($filas>0){
        while($row = $result->fetch_array()){
            $_SESSION['nombre']=$row['Nombres'];
            $_SESSION['apellido']=$row['Apellidos'];
            header('location:inicio.php');
        }
    }else{
        include_once("login.html");
        echo"<script>alert('Error en la autenticación')</script>";
    }
    mysqli_free_result($result);
    mysqli_close($conn);
?>
