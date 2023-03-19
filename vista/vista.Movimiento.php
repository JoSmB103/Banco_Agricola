<?php 
  session_start();
  require_once('../modelo/class.Movimiento.php');
  require_once('../modelo/class.cliente.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/movimientos.css">
    
    <title>Lista de movimmientos</title>

    <script
      src="https://kit.fontawesome.com/7e5b2d153f.js"
      crossorigin="anonymous"
    ></script>
    <script defer src="js/scrollreveal.js"></script>
</head>
<body>
<header class="header">
        <nav class="nav">
        <img class="banco" src="../vista/img/logo.png">
          <button class="nav-toggle" aria-label="Abrir menú">
            <i class="fas fa-bars"></i>
            </button>
            <ul class="nav-menu">
           
            <li class="nav-menu-item">
              <a href="realizarMovimiento.php" class="nav-menu-link nav-link nav-menu-link_active">Realizar Movimiento</a>
            </li>
            <li class="nav-menu-item">
              <a href="../index.html" class="nav-menu-link nav-link nav-menu-link_active">Cerrar Sesion</a>
            </li>
          </ul>
        </nav>
      </header>

    <div class="banner">
    <div class="banner-text">
        <h1><b>Movimientos</b></h1>
        <p>Consulta todos los movimientos realizados durante el periodo seleccionado.</p>
    </div>
    <div class="banner-overlay"></div>

    
    
    </div>
    <br>
    <br>
    <div class="table-container">
  <table>
    <thead>
      <tr>
        <th scope="col">Fecha</th>
        <th scope="col">Referencia</th>
        <th scope="col">Referencia</th>
        <th scope="col">Monto</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $obCliente = new cliente;
        $idCuenta = $obCliente->obtenerIdCuenta($_SESSION['usuario']);
        $objMovi = new movimiento;
        $filas = $objMovi->obtenerTodosMovimientos($idCuenta);

        foreach($filas as $info){
          if($info['tipoMovimiento'] == 0){
              $tipo = "Deposito";
          }elseif ($info['tipoMovimiento'] == 1) {
            $tipo = "Retiro";
          }elseif ($info['tipoMovimiento'] == 2) {
            $tipo = "Transferencia";
          }

          echo "
          <tr>
              <th scope='row'>".$info['fechaMovimiento']."</th>
              <td>".$info['idCuenta']."</td>
              <td>".$tipo."</td>
              <td>".$info['montoMovimiento']."</td>
          </tr>
          ";

        }
      ?>
    </tbody>
  </table>
</div> 
</body>
</html>