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
    <script src="https://kit.fontawesome.com/7e5b2d153f.js"crossorigin="anonymous"></script>
    <script defer src="js/scrollreveal.js"></script>
    <link rel="stylesheet" href="css/transferencia.css">
    <link rel="stylesheet" href="css/index.css" />
    <title>Deposito</title>
</head>
<body>


    
    <form action="../controlador/ctrl.Movimiento.php" method="POST">
   
    <img src="Img/moneda.png">
    <h1>Realizar deposito</h1>
    <br>
    <label for="Cuenta">Cuenta:</label>
    <select name="cuenta" id=""  class="text1">
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
      <label for="deposito">Monto deposito:</label>
      <input type='number' placeholder="Monto de deposito:" name="monto" class="text1" required>

      
      <input type="submit" value="Enviar" name='enviarDeposito'>
      <input type="submit" value="Cancelar" class="btn" role="button">
    </form>
    
</body>
</html>