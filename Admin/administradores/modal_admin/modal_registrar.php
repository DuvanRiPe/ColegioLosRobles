<!-- Modal -->
<div class="modal fade" id="registrar_admin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Datos Del Profesor</h5>
      </div>
      <div class="modal-body">
        
       <form action="./administradores.php" method="post">

           <label for="codigo">Codigo Admin: </label>
           <input name="codigo" type="text">
            <br>
           <label for="nombre">Nombre Admin: </label>
           <input name="nombre" type="text">
            <br>
           <label for="usuario">Usuario Admin: </label>
           <input name="usuario" type="text">
            <br>
           <label for="contraseña">Contraseña Admin: </label>
           <input name="contraseña" type="text">

           <input name="rol" type="hidden" value=1>

      </div>
      <div class="modal-footer">
        <button name="registrar" type="submit" class="btn btn-success" data-bs-dismiss="modal">Registrar</button>
        </form>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>