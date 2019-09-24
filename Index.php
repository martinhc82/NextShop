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

  <!-- Contenido -->
  <div class="container">

    <!-- Barra de Navegación -->

      <?php
      require_once("navbar.php");
       ?>

    <div class="row">


      <!-- /.col-lg-3 -->

      <div class="col-lg-12">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid w-100" src="img/ofertaA-carrousel-900x350.png" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class=" d-block w-100 img-fluid" src="img/ofertaB-carrousel-900x350.png" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid w-100" src="img/ofertaC-carrousel-900x350.png" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/artA-artHome-700x400.png" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="detalle.php">Item One</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/artB-artHome-700x400.png" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="detalle.php">Item Two</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/artC-artHome-700x400.png" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="detalle.php">Item Three</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/artD-artHome-700x400.png" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="detalle.php">Item Four</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/artE-artHome-700x400.png" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="detalle.php">Item Five</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/artF-artHome-700x400.png" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="detalle.php">Item Six</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-12 -->

    </div>
    <!-- /.row -->

  </div>

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

  </footer>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
