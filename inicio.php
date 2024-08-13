<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTC Oferta Educativa</title>
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
        .col-md-6 {
            margin-bottom: 20px;
        }
        .card img {
            height: 150px;
            object-fit: cover;
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
                    <a class="nav-link active" href="#">Oferta educativa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">Mi carrera</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="informacion.php">Mi información</a>
                </li>
            </ul>
        </div>
        <a href="logout.php">
    <button type="button" class="btn-acceder">Cerrar sesión</button>
    </a>
    </nav>


    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Ingenierías</h2>
                <div class="card mb-3">
                    <img src="img/biotecnologia.jpg" class="card-img-top" alt="Biotecnología">
                    <div class="card-body">
                        <h5 class="card-title">Biotecnología</h5>
                    </div>
                </div>
                <div class="card mb-3">
                    <img src="img/confiabilidad.jpg" class="card-img-top" alt="Confiabilidad de Planta">
                    <div class="card-body">
                        <h5 class="card-title">Confiabilidad de Planta</h5>
                    </div>
                </div>
                <div class="card mb-3">
                    <img src="img/software.jpeg" class="card-img-top" alt="Desarrollo y Gestión de Software">
                    <div class="card-body">
                        <h5 class="card-title">Desarrollo y Gestión de Software</h5>
                    </div>
                </div>
                <div class="card mb-3">
                    <img src="img/entornos.jpeg" class="card-img-top" alt="Entornos Virtuales y Negocios Digitales">
                    <div class="card-body">
                        <h5 class="card-title">Entornos Virtuales y Negocios Digitales</h5>
                    </div>
                </div>
                <div class="card mb-3">
                    <img src="img/energias.jpeg" class="card-img-top" alt="Energias Renovables">
                    <div class="card-body">
                        <h5 class="card-title">Energias Renovables</h5>
                    </div>
                </div>
                <div class="card mb-3">
                    <img src="img/mecatronica.jpg" class="card-img-top" alt="Mecatrónica">
                    <div class="card-body">
                        <h5 class="card-title">Mecatronica</h5>
                    </div>
                </div>
                <div class="card mb-3">
                    <img src="img/nanotecnologia.jpg" class="card-img-top" alt="Nanotecnología">
                    <div class="card-body">
                        <h5 class="card-title">Nanotecnología</h5>
                    </div>
                </div>
                <div class="card mb-3">
                    <img src="img/procesos.jpeg" class="card-img-top" alt="Procesos y Operaciones Industriales">
                    <div class="card-body">
                        <h5 class="card-title">Procesos y Operaciones Industriales</h5>
                    </div>
                </div>
                <div class="card mb-3">
                    <img src="img/redes.jpg" class="card-img-top" alt="Redes Inteligentes y Ciberseguridad">
                    <div class="card-body">
                        <h5 class="card-title">Redes Inteligentes y Ciberseguridad</h5>
                    </div>
                </div>
                <div class="card mb-3">
                    <img src="img/seguridad.jpeg" class="card-img-top" alt="Seguridad Ambiental Sustentable">
                    <div class="card-body">
                        <h5 class="card-title">Seguridad Ambiental Sustentable</h5>
                    </div>
                </div>
                
               
            </div>
            <div class="col-md-6">
                <h2>Licenciaturas</h2>
                <div class="card mb-3">
                    <img src="img/innovacion.jpeg" class="card-img-top" alt="Innovación de Negocios y Mercadotecnia">
                    <div class="card-body">
                        <h5 class="card-title">Innovación de Negocios y Mercadotecnia</h5>
                    </div>
                </div>
                <div class="card mb-3">
                    <img src="img/logistica.jpeg" class="card-img-top" alt="Diseño y Gestión de Redes Logísticas">
                    <div class="card-body">
                        <h5 class="card-title">Diseño y Gestión de Redes Logísticas</h5>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
