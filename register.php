<?php
require_once('class/autoload.php');

$errorEmail = '';
$errorPassword = '';
$email = '';

if ($_POST) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $nombreArchivo = '';

  if ($email == '') {
    $errorEmail = 'Por favor, ingresá tu correo electrónico';
  } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errorEmail = 'El correo electrónico no es válido';
  }
  if ($password == '') {
    $errorPassword = 'Por favor, ingresa tu contraseña';
  }

  if ($_FILES['avatar']['error'] === 0) {
    //pido la extension del archivo
    $ext = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
    if ($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg') {
      $errorAvatar = 'El archivo tiene un formato inválido';
    } else {
      $nombreArchivo = $email . '.' . $ext;
      //voy a mover el archivo del temporal a mi carpeta avatars
      move_uploaded_file($_FILES['avatar']['tmp_name'], 'avatars/' . $nombreArchivo);
    }
  }
  //levanto mi archivo en formato json
  $archivo = file_get_contents('usuarios.json');
  //lo transformo a variables en php
  $usuarios = json_decode($archivo, true);
  $id = 0;
  foreach ($usuarios as $usuario) {
    if ($usuario['id'] > $id) {
      $id = $usuario['id'];
    }
  }
  $id++;
  //formar los datos del usuario
  $usuario = [
    'email' => $email,
    'password' => password_hash($password, PASSWORD_DEFAULT),
    'avatar' => $nombreArchivo,
    'admin' => false,
    'id' => $id,
  ];
  //agrego el usuario nuevo al array del json
  $usuarios[] = $usuario;
  //convierto ese usuario en JSON para luego mandarlo a guardar
  $usuariosEnJson = json_encode($usuarios);
  //guardo el usuario en mi json
  file_put_contents('usuarios.json', $usuariosEnJson);
  header('location:index.php');
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

        <h4 class="my-4">Unite a nextShop</h4>

        <!-- Barra de Navegación Izquierda-->

        <?php
        require_once("navbarIzq-advise.php");
        ?>

      </div>

      <div class="col-lg-9">

        <div class="card card-outline-secondary my-4">
          <div class="card-header">
            Completá este formulario para registrarte en nuestro sitio | Si estás registrado ingresá <a href="login.php">aquí</a>
          </div>
          <div class="card-body">
            <div class="form-login">

              <form method="post" action="" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="email">Correo electrónico</label> <?php echo "| " . $errorEmail; ?>
                  <input type="text" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Ingrese su correo electrónico" name="email" value="<?php ?>">
                </div>
                <div class="form-group">
                  <label for="password">Contraseña</label>
                  <input type="password" class="form-control" id="password" placeholder="Ingrese su contraseña" name="password">
                </div>
                <div class="form-group">
                  <label for="confirm-password">Confirmar Contraseña</label>
                  <input type="password" class="form-control" id="confirm-password" placeholder="Confirme su contraseña" name="confirm-password">
                </div>
                <div class="form-group">
                  <label for="avatar">Subir Avatar</label>
                  <input type="file" id="avatar" name="avatar">
                </div>
                <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="terminos" name="terminos">
                  <label class="form-check-label" for="terminos">Acepto los Términos y Condiciones</label>
                </div>
                <button type="submit" class="btn btn-secondary">Registrarse</button>
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
