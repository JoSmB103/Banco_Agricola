<?php 
require_once("class.conexion.php");

class cliente{
    private $usu;
    private $contra;
    private $nombre;
    private $apellido;
    private $correo;
    private $sucur;
    
    public function registro($id,$sucursal, $nombre, $apellido, $usuario, $contra, $correo ){
        $dbh = new Conexion();
        $conexion = $dbh->get_conexion();
        $sql = "INSERT INTO cliente (id,sucursal,nombres,apellidos,usuario,pass,correo) VALUES (:id,:sucursal,:nombre,:apellido,:usuario,:contra,:correo)";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(":id",$id);
        $stmt->bindParam(":sucursal", $sucursal);
        $stmt->bindParam(":nombre",$nombre);
        $stmt->bindParam(":apellido",$apellido);
        $stmt->bindParam(":usuario", $usuario);
        $stmt->bindParam(":contra", $contra);
        $stmt->bindParam(":correo",$correo);
        
        if (!$stmt) {
            throw new Exception("Error. fallo en la base de datos");
        } else {
            $stmt->execute();
            
        }
    }

    public function obtenerIdUser($nameUser){
        $dbh = new Conexion();
        $id="";
        $conexion = $dbh->get_conexion();
        $sql = "SELECT id FROM cliente WHERE usuario='".$nameUser."'";
    
        $resultado = $conexion->query($sql);
        
        if (!$resultado) {
            throw new Exception("Error. fallo en la base de datos");
        } else {
    
            foreach ($resultado as $fila) {
                
                $id = $fila['id'];
            }
        }
        return $id;
    
      }
    
    public function incioSesion($usuario,$contra){
        $dbh = new Conexion();
        $conexion = $dbh->get_conexion();
        $sql = "SELECT * FROM cliente WHERE usuario=:usu and pass=:pass";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(":usu",$usuario);
        $stmt->bindParam(":pass",$contra);
        if (!$stmt) {
            throw new Exception("Error. fallo en la base de datos");
        } else {
            $stmt->execute();
            if ($stmt->rowCount()) {
                return true;
            } else {
                return false;
            }
        }
    
    }



    //----------------------------------------------------------METODOS DE LA CUENTAA

    public function registroCuenta($idCuenta,$idCliente,$contra,$saldoCuenta){
        $dbh = new Conexion();
        $conexion = $dbh->get_conexion();
        $sql = "INSERT INTO cuentabancaria (id,idCliente,contra,saldoActual) VALUES (:idCuenta, :idCliente, :contra, :saldoCuenta)";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(":idCuenta",$idCuenta);
        $stmt->bindParam(":idCliente",$idCliente);
        $stmt->bindParam(":contra", $contra);
        $stmt->bindParam(":saldoCuenta", $saldoCuenta);

        if (!$stmt) {
            throw new Exception("Error. fallo en la base de datos");
        } else {
            $stmt->execute();

        }
    }

  public function busquedaCuenta($id){
    $dbh = new Conexion();
    $conexion = $dbh->get_conexion();
    $sql = "SELECT * FROM cuentabancaria WHERE idCliente='".$id."'";
    $stmt = $conexion->prepare($sql);

    if (!$stmt) {
        throw new Exception("Error. fallo en la base de datos");
    } else {

        $stmt->execute();
        return $stmt->rowCount();
    }

  }

  public function existCuenta($id){
    $dbh = new Conexion();
    $conexion = $dbh->get_conexion();
    $sql = "SELECT * FROM cuentabancaria WHERE id='".$id."'";
    $stmt = $conexion->prepare($sql);

    if (!$stmt) {
        throw new Exception("Error. fallo en la base de datos");
    } else {

        $stmt->execute();
        return $stmt->rowCount();
    }


  }

  public function obtenerIdCuenta($id){
    $dbh = new Conexion();
    $idEntregar="";
    $conexion = $dbh->get_conexion();
    $sql = "SELECT id FROM cuentabancaria WHERE idCliente='".$id."'";

    $resultado = $conexion->query($sql);
    
    if (!$resultado) {
        throw new Exception("Error. fallo en la base de datos");
    } else {

        foreach ($resultado as $fila) {
            
            $idEntregar = $fila['id'];
        }
    }
    return$idEntregar;

  }
  

  public function obtenerSaldoCuenta($id){
        $dbh = new Conexion();
        $saldoCuenta= 0;

        $conexion = $dbh->get_conexion();
        $sql = "SELECT saldoActual FROM cuentabancaria WHERE id='".$id."'";

        $resultado = $conexion->query($sql);
    
        if (!$resultado) {
            throw new Exception("Error. fallo en la base de datos");
        } else {

            foreach ($resultado as $fila) {
            
                $saldoCuenta = $fila['saldoActual'];
            }

        }
        return  $saldoCuenta;
  }

    public function verificarSaldoSuficiente($id,$monto){

        $bandera = true;
        $actuSaldoCuenta =  $this->obtenerSaldoCuenta($id);
    
        if ($actuSaldoCuenta > $monto) {
        
            return $bandera;
        }else {

        $bandera = false;
        return $bandera;
        }
    }

  public function obtenerCuentasUser($id){
    $dbh = new Conexion();
    $conexion = $dbh->get_conexion();

    $sql = "SELECT id FROM cuentabancaria WHERE idCliente='".$id."'";

    $resultado = $conexion->query($sql);
    
    if (!$resultado) {
        throw new Exception("Error. fallo en la base de datos");
    } else {

        return $resultado;
    }
    
  }
}

?>
    