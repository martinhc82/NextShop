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

        <h1 class="my-4">Descubrí</h1>
        <!-- Barra de Navegación Izquierda-->

          <?php
          require_once("navbarIzq.php");
           ?>


      </div>

  <div class="col-lg-9">

    <div class="card mt-4">
      <img class="card-img-top img-fluid" src="img/ofertaA-carrousel-900x350.png" alt="">
      <div class="card-body">
        <h3 class="card-title">Artículo A</h3>
        <h4>$3.450</h4>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente dicta fugit fugiat hic aliquam itaque facere, soluta. Totam id dolores, sint aperiam sequi pariatur praesentium animi perspiciatis molestias iure, ducimus!</p>
        <span class="text-warning">&#9733; &#9733; &#9733; &#9734; &#9734;</span>
        3 estrellas
      </div>
    </div>
    <!-- /.card -->

    <div class="card card-outline-secondary my-4">
      <div class="card-header">
        Opiniones sobre el producto
      </div>
      <div class="card-body">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
        <small class="text-muted">Posted by Anonymous on 3/1/17</small>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
        <small class="text-muted">Posted by Anonymous on 3/1/17</small>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
        <small class="text-muted">Posted by Anonymous on 3/1/17</small>
        <hr>
        <a href="#" class="btn btn-secondary my-2 my-sm-0">Dejanos tu opinión</a>
      </div>
    </div>
    <!-- /.card -->

  </div>
  <!-- /.col-lg-9 -->

</div>
<!-- /.row -->

</div>
  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <ul class="text-center text-white navbar-nav mr-auto">
        <li> <a class="m-0 text-center text-white" href="FAQ.html">Preguntas Frecuentes</a></li>
        <li><a class="m-0 text-center text-white" href="Contacto.html">Contacto</a></li>
        <li class="nav-item">
          <a href="#" class="m-0 text-center text-white"><i class="fab fa-facebook-square"></i></a>
          <a href="#" class="m-0 text-center text-white"><i class="fab fa-instagram"></i></a>
          <a href="#" class="m-0 text-center text-white"><i class="fab fa-twitter-square"></i></a>
        </li>
        <li><p class="m-0">Copyright &copy; nextShop S.R.L. 2019</p></li>
      </ul>



     </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
<!-- <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
