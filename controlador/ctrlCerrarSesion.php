<?php
    require_once('../modelo/class.Session.php');
    $session = new SessionUsuario;
    session_start();
    $session->eliminarVariablesSession('usuario');
    $session->destruirSession();
    header('location:../index.html');
?>