<!-- Modal Form Login-->

  <?php
  require_once("modalFormLogin.php");
  require_once("modalFormRegister.php")
   ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
  <a class="navbar-brand" href="Index.php"><img class=""src="img/logo-nextShop.svg"  width="150" alt="nextShop"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Productos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Microprocesadores</a>
          <a class="dropdown-item" href="#">Motherboards</a>
          <a class="dropdown-item" href="#">Memorias RAM</a>
          <a class="dropdown-item" href="#">Almacenamiento</a>
          <a class="dropdown-item" href="#">Gabinetes</a>
          <a class="dropdown-item" href="#">Fuentes</a>
          <a class="dropdown-item" href="#">Refrigeración</a>
          <a class="dropdown-item" href="#">Placas de Video</a>
          <a class="dropdown-item" href="#">Periféricos</a>
          <a class="dropdown-item" href="#">Monitores</a>
          <a class="dropdown-item" href="#">Audio</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="prod-notebooks.php">Notebooks</a>
          <a class="dropdown-item" href="#">CPUs Armadas</a>
        </div>
      </li>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="" aria-label="Search">
        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Buscar</button>
      </form>
    </ul>

    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="faq.php">Centro de Ayuda</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Sucursales</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="carrito.php"><i class="fas fa-shopping-cart"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#formLoginPrueba"><i class="fas fa-user"></i></a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link"><i class="fab fa-facebook-square"></i></a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link"><i class="fab fa-instagram"></i></a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link"><i class="fab fa-twitter-square"></i></a>
      </li>
    </ul>

  </div>
</nav>
