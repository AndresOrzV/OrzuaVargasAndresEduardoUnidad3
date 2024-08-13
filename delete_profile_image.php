<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (!isset($_SESSION['user'])) {
    echo json_encode(['success' => false, 'message' => 'Usuario no autenticado']);
    exit;
}

$usuario = $_SESSION['user'];
$profileImage = "img/" . $usuario . ".png";
$defaultImage = "img/default.png"; 

if (file_exists($profileImage)) {
    if (unlink($profileImage)) {
        echo json_encode(['success' => true, 'defaultImageUrl' => $defaultImage]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error al eliminar el archivo.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'No se encontró la imagen de perfil.']);
}
?>
