<!-- Modal -->
<div class="modal fade" id="estudiante_r" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Datos Estudiante</h5>
      </div>
      <div class="modal-body">
        
       <form action="estudiante.php" method="post">

           <label for="codigo">Codigo del Estudiante: </label>
           <input name="codigo" type="text">

           <label for="nombre">Nombre del Estudiante: </label>
           <input name="nombre" type="text">

           <label for="apellido">Apellido del Estudiante: </label>
           <input name="apellido" type="text">

           <label for="edad">Edad del Estudiante: </label>
           <input name="edad" type="text">

           <label for="identi">Identificacion del Estudiante: </label>
           <input name="identi" type="text">

           <label for="correop">Correo Personal del Estudiante: </label>
           <input name="correop" type="text">

           <label for="correoi">Correo Institucional del Estudiante: </label>
           <input name="correoi" type="text">

           <label for="contraseñae">Contraseña del Estudiante: </label>
           <input name="contraseñae" type="text">

           <label for="grado">Grado del Estudiante: </label>
           <input name="grado" type="text">

           <label for="direccion">Direccion del Estudiante: </label>
           <input name="direccion" type="text">

           <label for="telefono">Telefono del Estudiante: </label>
           <input name="telefono" type="text">

           <label for="celular">Celular del Estudiante: </label>
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