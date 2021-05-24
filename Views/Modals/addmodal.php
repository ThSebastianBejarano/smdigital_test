<div class="modal fade" id="addmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Doctor</h5>
      </div>
      <div class="modal-body">
      <form class="needs-validation" action="<?php echo RUTA_URL; ?>Home/add" method="POST" novalidate>
        <div class="mb-3">
            <label for="name" class="form-label">Nombre:</label>
            <input type="text" class="form-control" name="name" value="" required>
            <div class="valid-feedback">Looks good!</div>
            <div class="invalid-feedback">Completar el Campo!</div>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" name="email" value="" required>
            <div class="valid-feedback">Looks good!</div>
            <div class="invalid-feedback">Completar el Campo!</div>
        </div>
        <div class="mb-3">
            <label for="direccion" class="form-label">Direccion:</label>
            <input type="text" class="form-control" name="direccion" value="" required>
            <div class="valid-feedback">Looks good!</div>
            <div class="invalid-feedback">Completar el Campo!</div>
        </div>
        <div class="mb-3">
            <label for="ciudad" class="form-label">Ciudad:</label>
            <input type="text" class="form-control" name="ciudad" value="" required>
            <div class="valid-feedback">Looks good!</div>
            <div class="invalid-feedback">Completar el Campo!</div>
        </div>
        <button type="submit" class="btn btn-primary">Agregar</button>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>