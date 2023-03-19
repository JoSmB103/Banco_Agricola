<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/Form.css" />


        <title>Inicio de sesion cliente prestamista</title>
    </head>
    <body>
        <div class="form-body">
            <img src="Img/usuario.png">
            <p class="text">Inicio de cliente/prestamista</p>
            <form action="../controlador/ctrl.inicioSesion.php" method="POST" class="login-form"  >
                <br>
                
                <input type="text" name="user" id="usuarioInicioU" placeholder="Ingrese su usuario">
                <br>
                <input type="text" name="contra" id="contraInicioU" placeholder="Ingrese su contraseña">
                <br>
                <input type="submit" value="Iniciar Sesion">
                <br>
            </form>
            <div class="contenedor">
                <a href="registroCliente.php">Ya tienes una cuenta?</a>
            </div>
            <br>
        </div>
    </body>
            <script src="js/validacionInicio.js"> </script>
</html>