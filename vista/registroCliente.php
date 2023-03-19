<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/Form.css" />
        
        <title>Registro Cliente Prestamista</title>
    </head>
    
    <body>
        <div class="form-body">
            <img src="Img/usuario.png">
            <p class="text">Registro de cliente/prestamista</p>
            <form action="../controlador/ctrl.registroCliente.php" method="POST" class="login-form"  >
                <br>
                <input type="text" name="dui" id="dui" placeholder="Ingrese su dui">
                <br>
                <input type="text" name="nombres"  placeholder="Ingrese su nombre">
                <br>
                <input type="text" name="apellidos"  placeholder="Ingrese su apellido">
                <br>
                <input type="text" name="usuario" placeholder="Ingrese su Usuario">
                <br>
                <input type="password" name="contra"  placeholder="Ingrese su Contraseña">
                <br>
                <input type="text" name="correo"  placeholder="Ingrese su correo">
                <br>
                <select name="select" class="select-css">            
                    <option selected>Sucursales</option>
                    <option value="1">Ahuchapan</option>
                    <option value="2">Cabañas</option>
                    <option value="3">Chalatenango</option>
                    <option value="4">Cuscatlan</option>
                    <option value="5">La libertad</option>
                    <option value="6">Morazan</option>
                    <option value="7">La Paz</option>
                    <option value="8">Santa Ana</option>
                    <option value="9">San Miguel</option>
                    <option value="10">San salvador</option>
                    <option value="11">San Vicente</option>
                    <option value="12">Sonsonate</option>
                    <option value="13">La Union</option>
                    <option value="14">Usulutan</option>
                </select>
                <br>
                <br>
                <input type="submit" value="Registrar" name="registro">
                <br>
            </form>
            <div class="contenedor">
                <a href="inicioSesion.php">Ya tienes una cuenta?</a>
            </div>
            <br>
        </div>
</body>
</html>