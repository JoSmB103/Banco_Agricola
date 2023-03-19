<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</head>
<body style="background-color: #6C757D">
<div></div>
<?php
    require_once("../modelo/class.cliente.php");

    if(isset($_POST['registro'])){

        $dui = isset($_POST['dui'])?$_POST['dui']:"";
        $sucursal = isset($_POST['select'])?$_POST['select']:"";
        $nombre = isset($_POST['nombres'])?$_POST['nombres']:"";
        $apellido = isset($_POST['apellidos'])?$_POST['apellidos']:"";
        $usuario = isset($_POST['usuario'])?$_POST['usuario']:"";
        $contra = isset($_POST['contra'])?$_POST['contra']:"";
        $correo = isset($_POST['correo'])?$_POST['correo']:"";
    

        $cliente = new cliente;

        if (empty($dui) || empty($nombre) || empty($apellido) || empty($usuario) || empty($contra) || empty($correo) || empty($sucursal)) {
            echo "
            <div class='modal modal-sheet position-static d-block bg-secondary py-5' tabindex='-1' role='dialog' id='modalSheet'>
    <div class='modal-dialog' role='document'>
    <div class='modal-content rounded-4 shadow'>
        <div class='modal-header border-bottom-0'>
        <h1 class='modal-title fs-5'>UPSS!!!</h1>
        </div>
        <div class='modal-body py-0'>
        <p>Hemos detectado que no has llenado todos los campos necesarios, regresa al menu y completa todos los campos por favor</p>
        </div>
        <div class='modal-footer flex-column border-top-0'>
        <a href='../vista/registroCliente.php' type='button' class='btn btn-lg btn-primary w-100 mx-0 mb-2'>Volver al menu</a>
        </div>
    </div>
    </div>
</div>";
        }else{
            $cliente->registro($dui,$sucursal,$nombre,$apellido,$usuario,$contra,$correo);

            header("Location: ../vista/inicioSesion.php");
        }
    
    }

?>
    
</body>
</html>
