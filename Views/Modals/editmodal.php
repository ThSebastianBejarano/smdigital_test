<div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Doctor</h5>
      </div>
      <div class="modal-body">
      <form action="<?php echo RUTA_URL; ?>Home/edit" method="POST">
      <input type="hidden" name="id" id="up_id">
        <div class="mb-3">
            <label for="name" class="form-label">Nombre:</label>
            <input type="text" class="form-control" name="name" id="up_name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" name="email" id="up_email">
        </div>
        <div class="mb-3">
            <label for="direccion" class="form-label">Direccion:</label>
            <input type="text" class="form-control" name="direccion" id="up_direccion">
        </div>
        <div class="mb-3">
            <label for="ciudad" class="form-label">Ciudad:</label>
            <input type="text" class="form-control" name="ciudad" id="up_ciudad">
        </div>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary" name="editdata">Actualizar</button>
      </form>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>