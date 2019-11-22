<?php

class Usuario {

private $id;
private $email;
private $password;
private $avatar;

public function __construct($email,$password){

$this->setEmail($email);
$this->setPassword($password);
}

public function setId($id){
$this->id = $id;
  }

public function setEmail($email){
$this->email = $email;
  }
public function setPassword($password){
$this->password = $password;
    }
public function setAvatar($avatar){
    $this->avatar = $avatar;
      }

public function getId(){
return $this->id;
            }

public function getEmail(){
  return $this->email;
      }
public function getPassword(){
    return $this->password;
        }
public function getAvatar(){
  return $this->avatar;
}





}





 ?>
