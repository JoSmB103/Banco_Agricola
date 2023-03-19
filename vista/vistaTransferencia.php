<?php
    session_start();
    require_once('../modelo/class.cliente.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/transferencia.css">
    <link rel="stylesheet" href="css/index.css">
    <title>Realizar Transferencia</title>
</head>
<body>


    <form action="../controlador/ctrl.Movimiento.php" method="POST">
    <img src="Img/transferencia.png">
    <h1>Realizar transferencia</h1>
    <br>
    <label for="Cuenta">Cuenta:</label>
    <select name="cuenta" id="cuenta">
        <?php
                $objCliente = new cliente;
                $array = array();

                $array = $objCliente->obtenerCuentasUser($_SESSION['usuario']);

                foreach($array as $fila){
                    echo"
                        <option value='".$fila['id']."'>".$fila['id']."</option>
                    ";
                }
            ?>
        
    </select>
      <label for="Cdestino">Cuenta destino:</label>
      <input type="number" id="cuentaTransf" name="cuentaTransf" placeholder="Introduce el número de cuenta destino" required>

      <label for="Monto">Monto de transferencia:</label>
      <input type="number" id="monto" name="monto" placeholder="Introduce el monto a transferir" required>
      <input type="hidden" name="bandera" value="0">
      <input type="submit" value="Enviar" name='enviarTransferir'>
      <input type="submit" value="Cancelar" class="btn" role="button">
    </form>
        
</body>
</html>