<?php
require_once 'conn.php';

class Users 
{
    private $conexion;

    public function __construct() {
        $this->conexion = new Conexion();
    }

    public function guarda() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['registro'])) {
            $us = $_POST['user'];
            $nom = $_POST['nom'];
            $pswd = $_POST['pswd'];
            $confirm_pswd = $_POST['confirm_pswd'];

            // Verificación de que ambas contraseñas coinciden
            if ($pswd !== $confirm_pswd) {
                echo "<div class='alert alert-danger' role='alert'>Las contraseñas no coinciden. Por favor, inténtalo de nuevo.</div>";
                echo "<br> <a href='saberhacerr.php' class='btn btn-primary'>Regresar</a>";
                return;
            }

            // Preparamos la consulta para insertar los datos
            $query = $this->conexion->prepare('INSERT INTO alumno (usuario, nombre, contraseña) VALUES (:user, :nom, :clave)');

            // Enlazamos los parámetros
            $query->bindParam(':user', $us);
            $query->bindParam(':nom', $nom);
            $query->bindParam(':clave', $pswd);

            // Ejecutamos la consulta y verificamos si fue exitosa
            if ($query->execute()) {
                echo "<div class='alert alert-success' role='alert'>Registro guardado exitosamente.</div>";
                echo "<br> <a href='index.php' class='btn btn-primary'>Ir al inicio de sesión</a>";
            } else {
                echo "<div class='alert alert-danger' role='alert'>Hubo un problema al guardar el registro. Por favor, inténtalo de nuevo.</div>";
                echo "<br> <a href='saberhacerr.php' class='btn btn-primary'>Regresar</a>";
            }
        }
    }
}

// Creando la instancia y guardando el registro
$el_user = new Users();
$el_user->guarda();
?>
