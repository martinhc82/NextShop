<?php
require_once('class/autoload.php');
$errorEmail = '';
$errorPassword = '';
$email = '';
if ($_POST) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  if ($email == '') {
    $errorEmail = 'Por favor, ingresá tu correo electrónico';
  } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errorEmail = 'El correo electrónico no es válido';
  }
  if ($password == '') {
    $errorPassword = 'Por favor, ingresa tu contraseña';
  }
  if (empty($errorEmail) && empty($errorPassword)) {
    //levanto mi archivo en formato json
    $archivo = file_get_contents('usuarios.json');
    //lo transformo a variables en php
    $usuarios = json_decode($archivo, true);
    //recorro al array de usuarios
    foreach ($usuarios as $usuario) {
      if ($usuario['email'] == $email && password_verify($password, $usuario['password'])) {
        //aqui encontré al usuario y lo logueo
        $_SESSION['email'] = $usuario['email'];
        $_SESSION['avatar'] = $usuario['avatar'];
        $_SESSION['admin'] = $usuario['admin'];
        $_SESSION['id'] = $usuario['id'];
        //pregunto si envie el mantenerme logeado
        if (isset($_POST['mantenerme'])) {
          //creo una cookie que va a durar 30 dias
          setcookie('email', $email, time() + 60 * 60 * 24 * 30);
        }
        //luego lo redirijo a miPerfil
        header('location:miPerfil.php');
      }
    }
    $errorEmail = 'Usuario o Contraseña inválidos';
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>nextShop</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="fontawesome/css/all.css">
  <link href="https://fonts.googleapis.com/css?family=Viga&display=swap" rel="stylesheet">
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body>

  <!-- Barra de Navegación -->

  <?php
  require_once("header.php");
  ?>

  <!-- Contenido -->
  
  <div class="container bg-light ">

    <div class="row">

      <div class="col-lg-3">

        <h4 class="my-4">Bienvenido</h4>

        <!-- Barra de Navegación Izquierda-->

        <?php
        require_once("navbarIzq-advise.php");
        ?>

      </div>

      <div class="col-lg-9">

        <div class="card card-outline-secondary my-4">
          <div class="card-header">
            ¡Bienvenido a nextShop <?php echo $_SESSION['email'] ?>!
          </div>
          <div class="card-body">
<div >
  <a href="logout.php">Cerrar Sesion</a>
</div>

            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Posted by Anonymous on 3/1/17</small>
          </div>
        </div>
        <!-- /.card -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- Footer -->

  <?php
  require_once("footer.php");
  ?>
</body>

</html>
