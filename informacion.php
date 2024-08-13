<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: saberhacers.php"); 
    exit();
}

$usuario = $_SESSION['user'];

$profileDir = "img/";


$defaultImage = "img/default.png";


$profileImage = $profileDir . $usuario . ".png";

if (!file_exists($profileImage)) {
    $profileImage = $defaultImage;
    $isDefaultImage = true;
} else {
    $isDefaultImage = false;
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Información - UTC Oferta Educativa</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        .navbar-custom {
            background-color: #4CAF50;
            color: #ffffff;
        }
        .navbar-custom a {
            color: #ffffff;
        }
        .navbar-custom a:hover {
            color: #e0e0e0;
        }
        .navbar-nav {
            margin: auto;
        }
        .navbar-custom .nav-link.active {
            background-color: #ffffff;
            color: #4CAF50;
            border-radius: 50px;
            padding: 10px 20px;
        }
        .navbar-custom .nav-link {
            border-radius: 50px;
            padding: 10px 20px;
            margin: 0 10px;
        }
        .btn-acceder {
            background-color: #ffffff;
            color: #4CAF50;
            border: 2px solid #4CAF50;
            border-radius: 50px;
            padding: 5px 15px;
            margin-left: 15px;
        }
        .btn-acceder:hover {
            background-color: #45a049;
            color: #ffffff;
        }
        .container {
            margin-top: 20px;
        }
        .welcome-message {
            font-size: 1.5rem;
            margin-bottom: 20px;
        }
        .profile-container {
            display: flex;
            align-items: center;
        }
        .image-container {
            position: relative;
            width: 100px;
            height: 100px;
            margin-right: 20px;
        }
        .profile-image {
            border-radius: 50%;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 50%;
            opacity: 0;
            transition: opacity 0.3s ease;
            display: flex;
            flex-direction: column;
            justify-content: stretch;
            align-items: stretch;
        }
        .overlay-button {
            background-color: transparent;
            color: #fff;
            border: none;
            padding: 0;
            cursor: pointer;
            transition: background-color 0.3s ease;
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.8rem;
        }
        .overlay-button:hover {
            background-color: rgba(69, 160, 73, 0.7);
        }
        .image-container:hover .overlay {
            opacity: 1;
        }
        .overlay-button:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-custom navbar-expand-lg">
        <a class="navbar-brand" href="#">
            <img src="img/logoutc.png" alt="" height="70px">
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link " href="inicio.php">Oferta educativa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Mi carrera</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="informacion.php">Mi información</a>
                </li>
            </ul>
        </div>
        <a href="logout.php">
            <button type="button" class="btn-acceder">Cerrar sesión</button>
        </a>
    </nav>

    <div class="container">
        <div class="welcome-message profile-container">
            <div class="image-container">
                <img id="profileImage" src="<?php echo htmlspecialchars($profileImage); ?>" alt="Imagen de perfil" class="profile-image">
                
                <div class="overlay">
                    <button class="overlay-button" id="uploadButton">Subir foto</button>
                    <button class="overlay-button" id="deleteButton" <?php echo $isDefaultImage ? 'disabled' : ''; ?>>Eliminar foto</button>
                </div>
            </div>
            <input type="file" id="fileInput" style="display: none;" accept="image/*">
            <h1>Bienvenido, <?php echo htmlspecialchars($usuario); ?>!</h1>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#uploadButton').click(function() {
            $('#fileInput').click();
        });

        $('#fileInput').change(function() {
            var formData = new FormData();
            formData.append('profileImage', this.files[0]);

            $.ajax({
                url: 'upload_profile_image.php',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        $('#profileImage').attr('src', response.imageUrl + '?t=' + new Date().getTime());
                        $('#deleteButton').prop('disabled', false);
                    } else {
                        alert('Error al subir la imagen: ' + response.message);
                    }
                },
                error: function() {
                    alert('Error al subir la imagen');
                }
            });
        });

        $('#deleteButton').click(function() {
            if (confirm('¿Estás seguro de que quieres eliminar tu foto de perfil?')) {
                $.ajax({
                    url: 'delete_profile_image.php',
                    type: 'POST',
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            $('#profileImage').attr('src', response.defaultImageUrl + '?t=' + new Date().getTime());
                            $('#deleteButton').prop('disabled', true);
                        } else {
                            alert('Error al eliminar la imagen: ' + response.message);
                        }
                    },
                    error: function() {
                        alert('Error al eliminar la imagen');
                    }
                });
            }
        });
    });
    </script>
</body>
</html>
