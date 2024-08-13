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
            <label class="btn btn-primary active">
                <input type="radio" name="options" id="login-option" autocomplete="off" checked> Inicio de sesión
            </label>
            <label class="btn btn-secondary">
                <input type="radio" name="options" id="register-option" autocomplete="off" onclick="location.href='saberhacerr.php'"> Registro
            </label>
        </div>
    </nav>

    <div id="forms-container">
        <form action="new_sesion.php" method="post">
            <div id="" class="form-content">
                <div class="form-group">
                    <label for="username">Usuario</label>
                    <input type="text" class="form-control" name='user' placeholder="Ingrese su usuario">
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" name='psw' placeholder="Ingrese su contraseña">
                </div>
                <div>
                    <button type="submit" class="btn-acceder" name='validar'>Acceder</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
