<?php

    session_start();
    require_once 'conn.php';

    if(isset($_POST['validar']))
    {
        $us=$_POST['user'];
        $ps=$_POST['psw'];

        $conexion = new Conexion();

        $query=$conexion->prepare('SELECT * from alumno WHERE usuario = :user AND contraseña=:clave');

        $query->bindParam(':user', $us);
        $query->bindParam(':clave', $ps);

        $query->execute();

        $count= $query->rowCount();

        if ($count)
        {
            $_SESSION['user']=$us;
            header("Location: inicio.php");

        }
        else
        {
            echo "Verificar las credenciales de acceso";
            echo "<br> <a href='inicio.php'>Regresar pagina principal </a>";
        }

    
    }

    
?>