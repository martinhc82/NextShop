<!-- Modal -->
<div class="modal fade" id="formLoginPrueba" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Ingresa | ¿No tenés una cuenta? <a class="nav-link" data-toggle="modal" data-target="#formRegister">Registrate</h5></a>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <!-- Modal Formulario Login-->
        <form class=""action="index.php" method="post">
          <div class="form-group">
            <label for="usu">E-mail:</label>
            <input class="form-control" id="usu" type="email" placeholder="Ingrese su E-mail..." required="true">
          </div>

          <div class="form-group">
            <label for="pass">Contraseña:</label>
            <input class="form-control" id="pass" type="password" placeholder="Ingrese su contraseña..." required="true">
          </div>



      </div>
      <div class="modal-footer">
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Recordarme</label>
        </div>

        <br>

        <input type="submit" class="btn btn-outline-secondary my-2 my-sm-0" value="Ingresar">
      </form>
      </div>
    </div>
  </div>
</div>
