<div style="max-width:50%; margin:auto; padding:auto;">
<?php if (!$ocultarId) : ?>
  <div class="mb-3">
    <label for="id" class="form-label">Id</label>
    <input type="text" class="form-control" name="id" id="id" value="<?php echo isset($this->datos->id) ? $this->datos->id : ''; ?>" readonly style="background-color: #e9ecef;">
    <small id="helpId" class="form-text text-muted">Help text</small>
  </div>
<?php endif; ?>


<div class="mb-3">
  <label for="" class="form-label">Nombre</label>
  <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder=""
    value="<?php echo isset($this->datos->nombre) ? $this->datos->nombre : ""; ?>">
  <small id="helpId" class="form-text text-muted">Ingrese el nombre del grupo</small>
</div>

<div class="mb-3">
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="<?php echo constant('URL'); ?>grupos" class="btn btn-secondary">Volver</a>
</div>

</div>

