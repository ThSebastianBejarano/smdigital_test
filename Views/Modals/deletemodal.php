<div class="modal fade" id="deletemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar Doctor</h5>
      </div>
      <div class="modal-body">
      <form action="<?php echo RUTA_URL; ?>Home/delect" method="POST" >
        <input type="hidden" name="delete_id" id="delete_id">
        <h4>Estas Seguro de eliminar el dato? </h4>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" name="deletedata" class="btn btn-primary" >Eliminar</button>
      </form>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>