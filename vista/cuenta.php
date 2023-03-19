<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/Form.css" />

        <title>Registro Cuenta Bancaria</title>
    </head>
    <body>
        <div class="form-body">
        <img src="Img/usuario.png">
            <p class="text">Creando cuenta bancaria</p>
            <form action="../controlador/ctrl.RegistroCuentaBancaria.php" method="POST" class="login-form">
                <input type="text" name="dui" id="usarioCuenta" placeholder="Ingrese su dui">
                <br>
                <input type="password" name="contra" id="contraCuenta" placeholder="Ingrese la contraseña">
                <br>
                <input type="submit" value="Registrar" name="registro">
                <br>
            </form>
        </div>
</body>
</html>