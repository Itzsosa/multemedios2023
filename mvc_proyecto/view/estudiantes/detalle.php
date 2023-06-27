<?php
require 'view/header.php';
require 'view/menu.php';
?>
<div class="container-fluid" id="contendorprincipal">
  <h1>
    <?php echo $this->mensaje; ?>
    <a style="float:right; " name="" id="" class="btn btn-primary mt-2" href="<?php echo constant('URL'); ?>estudiantes"
      role="button">Volver al principal</a>
  </h1>

  <div>
    <?php echo $this->mensajeResultado; ?>
  </div>

  <form class="form-control" action="<?php echo constant('URL'); ?>estudiantes/actualizarEstudiante" method="POST">
    <?php require 'form.php'; ?>
  </form>
</div>
<?php
require 'view/footer.php';
?>