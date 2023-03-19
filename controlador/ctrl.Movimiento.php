<?php
    require_once('../modelo/class.Movimiento.php');
    require_once('../modelo/class.cliente.php');

    $objMovimiento= new movimiento;

    if (isset($_POST['enviarDeposito'])) {
        $cuenta = $_POST['cuenta'];
        $cuentaDestino =$_POST['cuenta'];
       //-----------------
        $monto =  $_POST['monto'];
        //--------------------------
        date_default_timezone_set('America/El_Salvador');
        $fecha_actual = getdate();
        $fechaTransapcion = $fecha_actual['year']."/".$fecha_actual['mon']."/".$fecha_actual['mday'];
       //--------------------------

       $objMovimiento-> movimiento($cuenta,$cuentaDestino,$monto,$fechaTransapcion,0);

    }else if(isset($_POST['enviarRetiro'])){

        $cuenta = $_POST['cuenta'];
        $cuentaDestino =$_POST['cuenta'];
       //-----------------
        $monto =  $_POST['monto'];
        //--------------------------
        date_default_timezone_set('America/El_Salvador');
        $fecha_actual = getdate();
        $fechaTransapcion = $fecha_actual['year']."/".$fecha_actual['mon']."/".$fecha_actual['mday'];
       //--------------------------
       $objCli = new cliente;
       $verificar = $objCli->verificarSaldoSuficiente($cuenta,$monto); 

       if ($verificar == true) {
            $objMovimiento-> movimiento($cuenta,$cuentaDestino,$monto,$fechaTransapcion,1);
       }else{
            echo "Error saldo insuficiente";
       }
      

    }elseif (isset($_POST['enviarTransferir'])) {

          $objCli = new cliente;
          $cuenta = $_POST['cuenta'];
          $cuentaDestino = $_POST['cuentaTransf'];

          if($objCli->existCuenta($cuentaDestino) == 1){
             
               //-----------------
               $monto =  $_POST['monto'];
               //--------------------------
               date_default_timezone_set('America/El_Salvador');
               $fecha_actual = getdate();
               $fechaTransapcion = $fecha_actual['year']."/".$fecha_actual['mon']."/".$fecha_actual['mday'];
               //--------------------------
               
               $verificar = $objCli->verificarSaldoSuficiente($cuenta,$monto); 
      
               if ($verificar == true) {
                    $objMovimiento-> movimiento($cuenta,$cuentaDestino,$monto,$fechaTransapcion,2);
               }else{
                    echo "Error saldo insuficiente";
               }

          }else {
               echo "No existe la cuenta a la desea transferir";
          }
      
    }
?>

