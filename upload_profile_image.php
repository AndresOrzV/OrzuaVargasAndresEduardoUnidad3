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
$uploadDir = "img/";
$uploadFile = $uploadDir . $usuario . ".png";


if (!is_dir($uploadDir)) {
    echo json_encode(['success' => false, 'message' => 'Directorio no encontrado.']);
    exit;
}

if ($_FILES['profileImage']['error'] === UPLOAD_ERR_OK) {
    if (move_uploaded_file($_FILES['profileImage']['tmp_name'], $uploadFile)) {
        echo json_encode(['success' => true, 'imageUrl' => $uploadFile]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error al mover el archivo.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Error de subida: ' . $_FILES['profileImage']['error']]);
}
?>
