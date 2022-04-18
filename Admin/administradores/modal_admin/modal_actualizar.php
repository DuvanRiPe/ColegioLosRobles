<!-- Modal -->
<div class="modal fade" id="actualizar_admin<?php echo$datos["codigo_admin"]; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Datos del Admin</h5>
      </div>
      <div class="modal-body">
        
       <form class="form-group" action="./administradores.php" method="post">

           <label for="codigo">Codigo Admin: 
            <input name="codigo" type="text" class="form-control" value="<?php echo $datos["codigo_admin"] ?>">
           </label>
            <br>
           <label for="nombre">Nombre Admin: 
            <input name="nombre" type="text" class="form-control" value="<?php echo $datos["nombre_admin"] ?>">
           </label>
           <br>
           
           <label for="usuario">Usuario Admin:
            <input name="usuario" type="text" class="form-control" value="<?php echo $datos["usuario_admin"] ?>" >
           </label>
           <br>
           
           <label for="contraseña">Contraseña Admin: 
            <input name="contraseña" type="text" class="form-control" value="<?php echo $datos["contraseña_admin"] ?>" >
           </label>

      </div>
      <div class="modal-footer">
        <button name="actualizar" type="submit" class="btn btn-success" data-bs-dismiss="modal">Actualizar</button>
        </form>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>