<?php
    require_once("class.conexion.php");
    
    class movimiento{
        
        public function movimiento($cuenta,$cuentaDestino,$monto,$fechaTransapcion,$tipoMov){
            $dbh = new Conexion;
            $con = $dbh->get_conexion();
            $sql = "INSERT INTO listamovimientos (idCuenta,fechaMovimiento,tipoMovimiento,destinoMovimiento,montoMovimiento) VALUES(:cuenta,:fechaTransapcion,:tipoMov,:cuentaDestino,:monto)";
            $stmt = $con->prepare($sql);
            $stmt->bindParam(":cuenta",$cuenta);
            $stmt->bindParam(":fechaTransapcion",$fechaTransapcion);
            $stmt->bindParam(":tipoMov",$tipoMov);
            $stmt->bindParam(":cuentaDestino",$cuentaDestino);
            $stmt->bindParam(":monto",$monto);

            if (!$stmt) {
                throw new Exception("Error. fallo en la base de datos");
            }else {

                if ($tipoMov == 0) {
                    $this->modificarSaldoCuenta($cuenta,$monto,$tipoMov) ;
                    $stmt->execute();
                    echo "Deposito Exitoso";
                }elseif ($tipoMov == 1) {

                    $this->modificarSaldoCuenta($cuenta,$monto,$tipoMov);
                    $stmt->execute();
                    echo "Retiro Exitoso";
                }elseif ($tipoMov == 2) {
                    $this->modificarSaldoCuentaTransferencia($cuenta,$monto,$cuentaDestino);
                    $stmt->execute();
                    echo "Transferencia Exitoso";
                }  
            }
           
        }

        public function modificarSaldoCuenta($id,$monto,$tipoMov){
            $dbh = new Conexion;
            $con = $dbh->get_conexion();
            $objCuenta = new cliente;
            $actuSaldoCuenta =  $objCuenta->obtenerSaldoCuenta($id);
            if ($tipoMov == 0) {
                $actuSaldoCuenta +=$monto;
            }else if($tipoMov == 1){

                $actuSaldoCuenta -=$monto;

            }

            $sql1 = "UPDATE cuentabancaria SET SaldoActual='".$actuSaldoCuenta."' WHERE id ='".$id."'";
            $stmt1 = $con->prepare($sql1);

            if (!$stmt1) {
                throw new Exception("Error. fallo en la base de datos");
            }else {
                $stmt1->execute();
            }
        }

        public function modificarSaldoCuentaTransferencia($id,$monto,$idTranferir){
            $dbh = new Conexion;
            $con = $dbh->get_conexion();

            $objCuenta = new cliente;
            $actuSaldoCuenta =  $objCuenta->obtenerSaldoCuenta($id);
            $actuSaldoCuentaATranferir =  $objCuenta->obtenerSaldoCuenta($idTranferir);
            $actuSaldoCuentaATranferir += $monto;
            $actuSaldoCuenta-=$monto;
    
            $sql1 = "UPDATE cuentabancaria SET SaldoActual='".$actuSaldoCuenta."' WHERE id ='".$id."'";
            $stmt1 = $con->prepare($sql1);

            $sql2 = "UPDATE cuentabancaria SET SaldoActual='".$actuSaldoCuentaATranferir."' WHERE id ='".$idTranferir."'";
            $stmt2 = $con->prepare($sql2);
        
            if (!$stmt1 || !$stmt2) {
                throw new Exception("Error. fallo en la base de datos");
               
            }else {
                $stmt1->execute();
                $stmt2->execute();
            }
        }

        public function obtenerTodosMovimientos($id){

            $dbh = new Conexion();
            $conexion = $dbh->get_conexion();
        
            $sql = "SELECT * FROM listamovimientos WHERE idCuenta='".$id."'";
        
            $resultado = $conexion->query($sql);
            
            if (!$resultado) {
                throw new Exception("Error. fallo en la base de datos");
            } else {
        
                return $resultado;
            }
        }
    }

?>

