<?php
    require_once('functions/autoload.php');

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
        // Tomo archivo en formato json usuarios.jason
            $archivo = file_get_contents('usuarios.json');
        // Convierto el contenido a variables en php
            $usuarios = json_decode($archivo, true);
        // Recorro al array que resulta de convertir el archivo usuarios.jason
            foreach ($usuarios as $usuario) {
                if ($usuario['email'] == $email && password_verify($password, $usuario['password'])) {
        // Encuentro al usuario y lo logueo
                    $_SESSION['email'] = $usuario['email'];
                    $_SESSION['avatar'] = $usuario['avatar'];
                    $_SESSION['admin'] = $usuario['admin'];
                    $_SESSION['id'] = $usuario['id'];
        // Pregunto si envié el mantenerme logeado
                    if(isset($_POST['mantenerme'])) {
        // Creo una cookie -con nombre email- que va a durar 30 días
                        setcookie('email', $email, time() + 60*60*24*30);
                    }
        // Redirijo al usuario a la página miPerfil
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

  <div class="container bg-light ">
    <!-- Barra de Navegación -->

      <?php
      require_once("navbar.php");
       ?>

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
        Ingresa a nextShop | Si no tenés una cuenta registrate <a href="register.php">aquí</a>
      </div>
      <div class="card-body">

      <!--  <?php
            var_dump($_POST);
        ?> -->

        <div class="form-login">

        <form method="post" action="login.php">
          <div class="form-group">
            <label for="email">Correo electrónico</label> <?php echo "| " .$errorEmail; ?>
            <input type="text" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Ingresa tu correo electrónico" name="email"
            value="<?php echo $email; ?>">
            <small id="emailHelp" class="form-text text-muted">Nunca compartiremos tu email con otros.</small>
          </div>
          <div class="form-group">
            <label for="password">Contraseña</label> <?php echo "| " .$errorPassword; ?>
            <input type="password" class="form-control" id="password" placeholder="Ingresa tu contraseña" name="password">
          </div>
          <div class="form-group form-check">
            <input type="checkbox" name="mantenerme" class="form-check-input" id="mantenerme" value="1">
            <label class="form-check-label" for="mantenerme">Dejarme Conectado</label>
          </div>
          <button type="submit" class="btn btn-danger">Ingresar</button>
        </form>

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
