<!-- Modal -->
<div class="modal fade" id="profesor_a<?php echo$datos["identificacion_profesor"]; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Datos Del Profesor</h5>
      </div>
      <div class="modal-body">
        
       <form action="profesor.php" method="post">

           <label for="codigo">Codigo Profesor: 
            <input name="codigo" type="text" class="form-control" value="<?php echo $datos["codigo_profesor"] ?>">
           </label>
            <br>
           <label for="nombre">Nombre Profesor:
            <input name="nombre" type="text" class="form-control" value="<?php echo $datos["nombre_profesor"] ?>">
           </label>
            <br>
           <label for="apellido">Apellido del Profesor: 
            <input name="apellido" type="text" class="form-control" value="<?php echo $datos["apellido_profesor"] ?>" >
           </label>
            <br>
           <label for="edad">Edad del Profesor: 
             <input name="edad" type="text" class="form-control" value="<?php echo $datos["edad_profesor"] ?>" >
           </label>
            <br>
           <label for="identi">Identificacion del Profesor:
            <input name="identi" type="text" class="form-control" value="<?php echo $datos["identificacion_profesor"] ?>" >
            </label>
            <br>
           <label for="correop">Correo Personal del Profesor: 
            <input name="correop" type="text" class="form-control" value="<?php echo $datos["correo_personal_profesor"] ?>" >
           </label>
            <br>
           <label for="correoi">Correo Institucional del Profesor: 
            <input name="correoi" type="text" class="form-control" value="<?php echo $datos["correo_institucional_profesor"] ?>" >
            </label>
            <br>
           <label for="contraseñae">Contraseña del Profesor: 
            <input name="contraseñae" type="text" class="form-control" value="<?php echo $datos["contrasena_profesor"] ?>"  >
           </label>
            <br>
           <label for="grado">Grado Asignado: 
             <input name="grado" type="text" class="form-control" class="form-control" value="<?php echo $datos["grado_asignado"] ?>"   >
           </label> 
            <br>
           <label for="direccion">Direccion del Profesor: 
            <input name="direccion" type="text" class="form-control" value="<?php echo $datos["direccion_profesor"] ?>"  >
           </label>
            <br>
           <label for="telefono">Telefono del Profesor: 
            <input name="telefono" type="text" class="form-control" value="<?php echo $datos["telefono_profesor"] ?>"  >
           </label>
            <br>
           <label for="celular">Celular del Profesor: 
            <input name="celular" type="text" class="form-control" value="<?php echo $datos["celular_profesor"] ?>"  >
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