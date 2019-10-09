<?php

require_once('Usuario.php');


$usu01 = new Usuario('Pedro', 'pedro@gmail.com', '1234');
$usu02 = new Usuario('Gabriela', 'gaby@yahoo.com', '5678');


var_dump($usu01, $usu02);
