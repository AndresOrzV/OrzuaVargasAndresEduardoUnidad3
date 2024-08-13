<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexión</title>
</head>
<body>
    <?php
        class Conexion extends PDO 
        {
            PRIVATE $tipo_de_base = 'mysql';
            private $host = '127.0.0.1';
            private $nombre_de_base = 'saber';
            private $usuario = 'root';
            private $contrasena = '';

            public function __construct()
            {
                try {
                    parent::__construct($this->tipo_de_base.':host='.$this->host.';dbname='.$this->nombre_de_base, $this->usuario,$this->contrasena);
                } catch (PDOexception $e) {
                    echo 'Ha surgido un error y no se puede conectar a la base de datos <br> Error: ' .$e -> getMessage
                    ();
                }
            }
        }
    ?>
    
</body>
</html>