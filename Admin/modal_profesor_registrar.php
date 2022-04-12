<!-- Modal -->
<div class="modal fade" id="profesor_r" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Datos Del Profesor</h5>
      </div>
      <div class="modal-body">
        
       <form action="profesor.php" method="post">

           <label for="codigo">Codigo del Profesor: </label>
           <input name="codigo" type="text">

           <label for="nombre">Nombre del Profesor: </label>
           <input name="nombre" type="text">

           <label for="apellido">Apellido del Profesor: </label>
           <input name="apellido" type="text">

           <label for="edad">Edad del Profesor: </label>
           <input name="edad" type="text">

           <label for="identi">Identificacion del Profesor: </label>
           <input name="identi" type="text">

           <label for="correop">Correo Personal del Profesor: </label>
           <input name="correop" type="text">

           <label for="correoi">Correo Institucional del Profesor: </label>
           <input name="correoi" type="text">

           <label for="contraseñae">Contraseña del Profesor: </label>
           <input name="contraseñae" type="text">

           <label for="grado">Grado Asignado: </label>
           <input name="grado" type="text">

           <label for="direccion">Direccion del Profesor: </label>
           <input name="direccion" type="text">

           <label for="telefono">Telefono del Profesor: </label>
           <input name="telefono" type="text">

           <label for="celular">Celular del Profesor: </label>
           <input name="celular" type="text">

      

      </div>
      <div class="modal-footer">
        <button name="registrar" type="submit" class="btn btn-success" data-bs-dismiss="modal">Registrar</button>
        </form>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>