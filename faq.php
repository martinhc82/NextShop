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

  <div class="container bg-light">
    <!-- Barra de Navegación -->

      <?php
      require_once("navbar.php");
       ?>

  <div class="row">

  <div class="col-lg-3">

        <h4 class="my-4">Centro de Ayuda</h4>

        <!-- Barra de Navegación Izquierda-->

        <?php
          require_once("navbarIzq-advise.php");
        ?>

  </div>

  <div class="col-lg-9">

    <div class="card card-outline-secondary my-4">
      <div class="card-header">
        Bienvenido al Centro de Atención al Cliente | ¿Cómo podemos ayudarte?
      </div>
      <div class="card-body">



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
