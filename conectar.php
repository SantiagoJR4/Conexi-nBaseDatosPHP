<?php
    $user=$_POST["user"];
    $pw=md5($_POST["pw"]);
    session_start();
    $_SESSION["user"]=$user;

    //Include
    include('conexion.php');

    $conn=conectardb();

    $sql = "SELECT * FROM usuario WHERE user='$user' and pw='$pw'";
    $result = $conn->query($sql);

    $filas=mysqli_num_rows($result);

    if($filas){
        header('location:inicio.php');
    } else{
        include_once("login.html");
        echo"<div>ERROR AUTENTICACIÓN</div";
    }
    mysqli_free_result($result);
    mysqli_close($conn);
?>
