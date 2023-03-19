<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/7e5b2d153f.js"crossorigin="anonymous"></script>
    <script defer src="js/scrollreveal.js"></script>
    <link rel="stylesheet" href="../vista/css/realizarMovimiento.css" />
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
              <a href="#" class="nav-menu-link nav-link">Inicio</a>
            </li>
            <li class="nav-menu-item">
              <a href="vista.Movimiento.php" class="nav-menu-link nav-link">Lista Movimiento</a>
            </li>
           
            <li class="nav-menu-item">
              <a href="cuenta.php" class="nav-menu-link nav-link nav-menu-link_active">Agregar Cuenta</a>
            </li>
            <li class="nav-menu-item">
              <a href="../index.html" class="nav-menu-link nav-link nav-menu-link_active">Cerrar Sesion</a>
            </li>
          </ul>
        </nav>
      </header>
      
      <h1 class="tit">Movimientos</h1>
      <div class="contPadre">
        <div class="tarjeta">
            <div class="titulo"><h3>Realizar Retiro</h3></div>
            <div class="cuerpo">
            <img src="../vista/Img/retiro.jpg" alt="muestra" class="imgMovimiento1">
            <p>El concepto de retiro bancario hace referencia a la acción de extraer dinero en efectivo de un banco. Para que este proceso sea posible, la persona debe contar con una cuenta en la entidad bancaria en cuestión y, a la vez, tener fondos disponibles en la misma.</p>
            </div>
            <div class="pie">
                <a href="vistaRetiro.php">Realizar</a>
            </div>
        </div>
        <div class="tarjeta">
            <div class="titulo"><h3>Realizar Transferencia</h3></div>
            <div class="cuerpo">
            <img src="../vista/img/transferencia.jpg" alt="muestra" class="imgMovimiento2">
            <p>Una transferencia bancaria es una operación a través de la cual una persona o entidad da instrucciones a su entidad bancaria para que envíe determinada cantidad de dinero con cargo a su cuenta a la cuenta de otra persona o empresa. En resumen, una transferencia bancaria consiste en pasar dinero de una cuenta a otra.</p>
            </div>
            <div class="pie">
              <a href="vistaTransferencia.php">Realizar</a>
            </div>
        </div>
        <div class="tarjeta">
            <div class="titulo"><h3>Realizar Deposito</h3></div>
            <div class="cuerpo">
            <img src="../vista/img/deposito.png" alt="muestra" class="imgMovimiento3">
            <p>El depósito es una operación en la que una entidad financiera custodia el dinero de un cliente. Es decir, guarda su dinero, para que a cambio remunere según el plazo y cantidad al cliente por tener inmovilizado su dinero.</p>
            </div>
            <div class="pie">
                <a href="vistaDeposito.php">Realizar</a>
            </div>
        </div>
      </div>
</body>
</html>