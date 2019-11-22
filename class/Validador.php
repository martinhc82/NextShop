<?php

abstract class Validador {
const LIMITE_PASSWORD = 8;


public abstract function validar (): array;

public function validarEmail($email): bool
{

return filter_var ($email,FILTER_VALIDATE_EMAIL);
}

public function validarPassword($password): bool
{

return strlen ($password) >= self::LIMITE_PASSWORD;
}

public function validarVacio($input){

return !empty($input);
}




}
