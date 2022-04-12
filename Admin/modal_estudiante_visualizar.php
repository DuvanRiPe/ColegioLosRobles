<!-- Modal -->
<div class="modal fade" id="estudiante_v<?php echo$datos["identifiacion_estudiante"]; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Datos Estudiante</h5>
      </div>
      <div class="modal-body">
        
        <?php
            echo "Codigo Estudiante: ". $datos ["codigo_estudiante"]. "<br>" ; 
            echo "Nombre: ".$datos ["nombre_estudiante"]. "<br>";
            echo "Apellido: ".$datos ["apellido_estudiante"]. "<br>";
            echo "Edad: ".$datos ["edad"]. "<br>";
            echo "Identifiacion: ".$datos ["identifiacion_estudiante"]. "<br>";
            echo "Correo Personal: ".$datos ["correo_personal_estudiante"]. "<br>";
            echo "Correo Institucional: ".$datos ["correo_institucional_estudiante"]. "<br>";
            echo "Contraseña: ".$datos ["contraseña_estudiante"]. "<br>";
            echo "Grado Actual: ".$datos ["grado"]. "<br>";
            echo "Direccion: ".$datos ["direccion_estudiante"]. "<br>";
            echo "Telefono: ".$datos ["telefono_estudiante"]. "<br>";
            echo "Celular: ".$datos ["celular_estudiante"]. "<br>";
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>