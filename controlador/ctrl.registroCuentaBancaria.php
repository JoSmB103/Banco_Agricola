<?php
    require_once("../modelo/class.cliente.php");
    require_once("../modelo/class.Session.php");

    if(isset($_POST['registro'])){

        $idCliente = isset($_POST['dui'])?$_POST['dui']:"";
        $contra = isset($_POST['contra'])?$_POST['contra']:"";

        if (empty($idCliente) || empty($contra)) {
            echo "<h1> Por favor, completa todos los campos. </h1>";
            echo "<a href='../vista/cuenta.php' style='background-color: blue; color: white;'> volver al menu</a>";
        }else{
            
        $cliente = new cliente;
        $resul = $cliente->busquedaCuenta($idCliente);
        echo $resul;
        if($resul <= 2){
            echo "puede seguir ingresando cuenta </br>";
           
            //generando id
            $inicio = 100;
            $limite = 999;
            $idCuenta = mt_rand($inicio,$limite);
            $cliente->registroCuenta($idCuenta,$idCliente,$contra,0);
            

        }else{
            echo "ya no puede crear cuenta";
        }
    }
}






?>