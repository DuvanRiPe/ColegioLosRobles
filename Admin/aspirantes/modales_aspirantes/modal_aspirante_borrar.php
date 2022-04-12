<!-- Modal -->
<div class="modal fade" id="eliminar<?php echo $datos["documentonino"]; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">¿Estás Seguro?</h5>
      </div>
      <div class="modal-body">
        
        <?php
            echo "Se eliminarán todos los datos del Aspirante ". $datos['nombre'];
        ?>
        <form action="./aspirante.php" method="post">
            <input name="delete" type="hidden" value="<?php echo $datos['documentonino']; ?>">
      </div>
      <div class="modal-footer">
        <button name="eliminar_modal" type="submit" class="btn btn-danger">Borrar</button>
        </form>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>