<!-- Modal -->
<div class="modal fade" id="profesor_v<?php echo$datos["identificacion_profesor"]; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Datos Del Profesor</h5>
      </div>
      <div class="modal-body">
        
        <?php
            echo "Codigo Profesor: ". $datos ["codigo_profesor"]. "<br>" ; 
            echo "Nombre: ".$datos ["nombre_profesor"]. "<br>";
            echo "Apellido: ".$datos ["apellido_profesor"]. "<br>";
            echo "Edad: ".$datos ["edad_profesor"]. "<br>";
            echo "Identificacion: ".$datos ["identificacion_profesor"]. "<br>";
            echo "Correo Personal: ".$datos ["correo_personal_profesor"]. "<br>";
            echo "Correo Institucional: ".$datos ["correo_institucional_profesor"]. "<br>";
            echo "Contraseña: ".$datos ["contrasena_profesor"]. "<br>";
            echo "Grado Asignado: ".$datos ["grado_asignado"]. "<br>";
            echo "Direccion: ".$datos ["direccion_profesor"]. "<br>";
            echo "Telefono: ".$datos ["telefono_profesor"]. "<br>";
            echo "Celular: ".$datos ["celular_profesor"]. "<br>";
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>