<?php
session_start();
class Autenticador {


public function estaLogeadoElUsuario(): bool
{
return isset( $_SESSION['email']);

}

    public function logear(Usuario $usuario)
    {
        $_SESSION['email'] = $usuario->getEmail();
        $_SESSION['id'] = $id->getId();
    }

    public function deslogear(Usuario $usuario)
    {
        session_destroy();
    }
    public function guardarCookie()
    {
    }
}
