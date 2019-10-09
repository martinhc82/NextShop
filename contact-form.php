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

        <h4 class="my-4">Contáctenos</h4>

        <!-- Barra de Navegación Izquierda-->

        <?php
          require_once("navbarIzq-advise.php");
        ?>

  </div>

  <div class="col-lg-9">

    <div class="card card-outline-secondary my-4">
      <div class="card-header">
        Si desea realizar una consulta o sugerencia no dude en contactarse con nosotros
      </div>
      <div class="card-body">
        <form class="form-horizontal" method="post">

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center">Nombre:</span>
                            <div class="col-md-8">
                                <input id="fname" name="name" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center">Apellido:</span>
                            <div class="col-md-8">
                                <input id="lname" name="name" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center">E-mail</span>
                            <div class="col-md-8">
                                <input id="email" name="email" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center">Teléfono:</span>
                            <div class="col-md-8">
                                <input id="phone" name="phone" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"></span>
                            <div class="col-md-8">
                                <textarea class="form-control" id="message" name="message" placeholder="Déjenos su mensaje..." rows="7"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-left">
                                <button type="submit" class="btn btn-secondary btn-mg">Enviar</button>
                            </div>
                        </div>

                </form>
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
