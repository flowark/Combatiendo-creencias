<div class="content-login" id="cuerpo-grl">
    <div class="container">
      <img src="<?php echo base_url();?>img/team.png" alt="">
      <h1 id="encabezado-content">Iniciar sesión</h1>
      <form action="<?php echo base_url();?>index.php/Principal/validaUsuario/" method="POST">
        <div class="row justify-content-center align-items-center">
          <div class="form-group col-lg-4">
            <?php echo form_error('txtusuario');?>
            <label for="txtusuario">Usuario:</label>
            <input type="text" class="form-control" id="txtusuario" placeholder="Ingresa usuario" name="txtusuario" required>
          </div>
        </div>
        <div class="row justify-content-center align-items-center">
          <div class="form-group col-lg-4">
            <?php echo form_error('txtpassword');?>
            <label for="txtpassword">Contraseña:</label>
            <input type="password" class="form-control" id="txtpassword" placeholder="Ingresa contraseña" name="txtpassword" required>
          </div>
        </div>
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-4">
              <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
          </div>
        </div>
        <p class="mt-5 mb-3 text-muted">&copy; Combatiendo creencias</p>
      </form>
    </div>
</div>
