<?php

class ValidadorLogin extends Validador {

  private $email;
  private $password;

public function __construct($email,$password){
  $this->setEmail($email);
  $this->setPassword($password);

}

public function setEmail($email){
$this->email = $email;
  }
public function setPassword($password){
$this->password = $password;
    }

    public function getEmail(){
      return $this->email;
          }
    public function getPassword(){
        return $this->password;
            }

public function validar(): array
{
$errores = [];
if (!$this->validarEmail($this->getEmail())){
   $errores ['email'] = 'El mail es invalido';
}
if (!$this->validarPassword($this->getPassword())){
   $errores ['password'] = 'El password debe ser al menos' . self::LIMITE_PASSWORD . 'caracteres';
}
return $errores;
}

}







 ?>
