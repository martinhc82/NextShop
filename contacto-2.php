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
          require_once("navbarIzq.php");
        ?>

  </div>

  <div class="col-lg-9">

    <div class="well well-sm">
      <form class="form-horizontal" method="post">
        <fieldset>

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
                          <div class="col-md-12 text-center">
                              <button type="submit" class="btn btn-secondary btn-lg">Enviar</button>
                          </div>
                      </div>
                  </fieldset>
              </form>
          </div>
      </div>

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
