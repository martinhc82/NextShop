<?php

class Usuario {

  private $name;
  private $email;
  private $password;

  public function __construct(string $nameUser, string $emailUser, string $passUser)
  {
    $this->name = $nameUser;
    $this->email = $emailUser;
    $this->setPass($passUser);
  }

  private function encriptarPass(string $password): string
  {
    return password_hash($password, PASSWORD_DEFAULT);
  }


  public function setName(string $name)
  {
    $this->name = $name;
  }

  public function setEmail(string $email)
  {
    $this->email = $email;
  }

  public function setPass(string $password)
  {
    $this->password = $this->encriptarPass($password);
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function getEmail(): string
  {
    return $this->email;
  }

  public function getPass(): string
  {
    return $this->password;
  }






}
