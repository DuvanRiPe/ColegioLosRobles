<!-- Modal -->
<div class="modal fade" id="estudiante_a<?php echo$datos["identifiacion_estudiante"]; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Datos Estudiante</h5>
      </div>
      <div class="modal-body">
        
       <form class="form-group" action="estudiante.php" method="post">

           <label for="codigo">Codigo Estudiante: 
            <input name="codigo" type="text" class="form-control" value="<?php echo $datos["codigo_estudiante"] ?>">
           </label>
            <br>
           <label for="nombre">Nombre Estudiante: 
            <input name="nombre" type="text" class="form-control" value="<?php echo $datos["nombre_estudiante"] ?>">
           </label>
           <br>
           
           <label for="apellido">Apellido del Estudiante:
            <input name="apellido" type="text" class="form-control" value="<?php echo $datos["apellido_estudiante"] ?>" >
           </label>
           <br>
           
           <label for="edad">Edad del Estudiante: 
            <input name="edad" type="text" class="form-control" value="<?php echo $datos["edad"] ?>" >
           </label>
            <br>
           <label for="identi">Identificacion del Estudiante: 
            <input name="identi" type="text" class="form-control" value="<?php echo $datos["identifiacion_estudiante"] ?>">
           </label>
           <br>
           <label for="correop">Correo Personal del Estudiante: 
            <input name="correop" type="text" class="form-control" value="<?php echo $datos["correo_personal_estudiante"] ?>" >
           </label>
           <br>

           <label for="correoi">Correo Institucional del Estudiante: 
            <input name="correoi" type="text" class="form-control" value="<?php echo $datos["correo_institucional_estudiante"] ?>">
           </label>
           <br>
           

           <label for="contraseñae">Contraseña del Estudiante: 
            <input name="contraseñae" type="text" class="form-control" value="<?php echo $datos["contraseña_estudiante"] ?>"  >
           </label>
           <br>

           <label for="grado">Grado del Estudiante: 
            <br>
            <input name="grado" type="text" class="form-control" value="<?php echo $datos["grado"] ?>"   >
           </label>
           <br>
  
           <label for="direccion">Direccion del Estudiante:
            <input name="direccion" type="text" class="form-control" value="<?php echo $datos["direccion_estudiante"] ?>"  >
           </label>
            <br>

           <label for="telefono">Telefono del Estudiante: 
            <input name="telefono" type="text" class="form-control" value="<?php echo $datos["telefono_estudiante"] ?>"  >
           </label>
           <br>

           <label for="celular">Celular del Estudiante:
           <input name="celular" type="text" class="form-control" value="<?php echo $datos["celular_estudiante"] ?>"  >
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