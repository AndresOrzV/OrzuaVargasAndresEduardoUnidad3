<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTC Saber Hacer</title>
    <link rel="stylesheet" href="css/saberhacers.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-custom">
        <a class="navbar-brand" href="#"> 
            <img src="img/logoutc.png" alt="" height="90px">
        </a>
        <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <label class="btn btn-secondary">
                <input type="radio" name="options" id="login-option" autocomplete="off" checked onclick="location.href='index.php'"> Inicio de sesión
            </label>
            <label class="btn btn-primary active">
                <input type="radio" name="options" id="register-option" autocomplete="off"> Registro
            </label>
        </div>
    </nav>

    <div id="forms-container">
        <form action="registro.php" method="post">
            <div id="register-form" class="form-content">
                <div class="form-group">
                    <label for="user">Usuario</label>
                    <input type="text" class="form-control" name="user" placeholder="Ingrese su matrícula" required>
                </div>
                <div class="form-group">
                    <label for="nom">Nombre</label>
                    <input type="text" class="form-control" name="nom" placeholder="Ingrese su nombre" required>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" name="pswd" placeholder="Ingrese su contraseña" required>
                </div>
                <div class="form-group">
                    <label for="confirm-password">Confirma tu contraseña</label>
                    <input type="password" class="form-control" name="confirm_pswd" placeholder="Confirma tu contraseña" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn-acceder" name="registro">Registrarse</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
