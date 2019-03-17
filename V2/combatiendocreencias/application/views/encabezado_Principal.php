<!--navbar-light bg-light-->
<nav class="navbar navbar-expand-lg navbar-light" style="z-index:1; background: #00b0ff;">
  <a class="navbar-brand" href="<?php echo base_url();?>">Combatiendo creencias</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          ALUMNO
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url();?>index.php/Principal/cuestionarioInicial/">Cuestionario inicial de creencias</a>
          <a class="dropdown-item" href="#">Cuestionario de creencias</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>index.php/Principal/nosotros/">NOSOTROS<span class="sr-only">(current)</span></a>
      </li>
      <?php if ($this->session->userdata('nivel') == 'profesor') { ?>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>index.php/Principal/charts/">PROFESOR<span class="sr-only">(current)</span></a>
      </li>
      <form class="form-inline my-2 my-lg-0">
        <a class="btn btn-warning" href="<?php echo base_url();?>index.php/Principal/cerrar_sesion/">Cerrar Sesión<span class="sr-only">(current)</span></a>
      </form>
      <?php } else{ ?>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a class="btn btn-outline-dark my-2 my-sm-0" href="<?php echo base_url();?>index.php/Principal/login/" role="button">INICIAR SESIÓN</a>
    </form>
    <?php  } ?>
  </div>
</nav>
