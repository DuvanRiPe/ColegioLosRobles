<!-- Modal -->
<div class="modal fade" id="estudiante_B<?php echo$datos["identifiacion_estudiante"]; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Estas Seguro?</h5>
      </div>
      <div class="modal-body">
        
        <?php
            echo "Se eliminara todos los datos del estudiante ". $datos['nombre_estudiante'];
        ?>
        <form action="estudiante.php" method="post">
            <input name="delete" type="hidden" value="<?php echo $datos['identifiacion_estudiante']; ?>">
      </div>
      <div class="modal-footer">
        <button name="borrar" type="submit" class="btn btn-danger">Borrar</button>
        </form>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>