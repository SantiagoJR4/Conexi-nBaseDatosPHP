<?php
    function conectardb(){
        //Conexion a MYSQL
        $server='localhost';
        $username='root';
        $password='';
        $database='colegiodb';

        $conn=mysqli_connect($server,$username,$password,$database);
        //Check conexión
        if (!$conn){
            die("Conecction failed:" . mysqli_connect_error());
        }
        return $conn;
    }
?>