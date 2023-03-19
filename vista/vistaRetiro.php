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

    <link rel="stylesheet" href="css/retiro.css">
    <title>Realizar retiro</title>
</head>
<body>



<form action="../controlador/ctrl.Movimiento.php" method="POST">
   
   <img src="Img/retiro.png">
   <h1>Realizar Retiro</h1>
   <br>
   <label for="Cuenta">Cuenta:</label>
   <select name="cuenta" id="" class="text2">
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
     <label for="retiro">Monto retiro:</label>
     <input type='number' name='monto' placeholder="Monto de retiro:" class="text2" required>

     
     <input type="submit" value="Enviar" name='enviarRetiro'>
     <input type="submit" value="Cancelar" class="btn" role="button">
   </form>
    
        
</body>
</html>