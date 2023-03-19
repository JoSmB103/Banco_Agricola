<?php
    class SessionUsuario{
        public function setAtributos($atributos, $valor)
        {
            if (session_status() === PHP_SESSION_ACTIVE && is_string($atributos)) {
                $_SESSION[$atributos] = $valor;
            }
        }

        public function getVarSession($atributos)
        {
            if (session_status() === PHP_SESSION_ACTIVE && is_string($atributos) && isset($_SESSION[$atributos])) {
                return $_SESSION[$atributos];
            }else {
                return null;
            }
        }

        public function eliminarVariablesSession($atributos)
        {
            if (session_status() === PHP_SESSION_ACTIVE && is_string($atributos) && isset($_SESSION[$atributos])) {
                unset($_SESSION[$atributos]) ;
            }
        }

        public function destruirSession(){

            session_destroy();

        }

    }
?>