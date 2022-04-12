<!-- Modal -->
<div class="modal fade" id="visualizar<?php echo $datos["documentonino"]; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Datos Del Profesor</h5>
      </div>
      <div class="modal-body">
        
        <?php
            echo "Codigo Aspirante: ". $datos ["codigoAspirante"]. "<br>" ; 
            echo "Correo del Aspirante: ".$datos ["correo"]. "<br>";
            echo "Comprobante: ".$datos ["comprobante"]. "<br>";
            echo "Año Academico: ".$datos ["ano_academico"]. "<br>";
            echo "Curso del Aspirante: ".$datos ["curso"]. "<br>";
            echo "Nombre del Aspirante: ".$datos ["nombre"]. "<br>";
            echo "Apellido del Aspirante: ".$datos ["apellido"]. "<br>";
            echo "Tipo de Identificacion: ".$datos ["tipoidentificacion"]. "<br>";
            echo "Documento del Niño: ".$datos ["documentonino"]. "<br>";
            echo "Año de Nacimiento del Niño: ".$datos ["nacimientonino"]. "<br>";
            echo "Doctrina del Niño: ".$datos ["doctrina"]. "<br>";
            echo "Estadia del Niño".$datos ["vivecon"]. "<br>";
            echo "Edad del Niño: ".$datos ["edada31dic"]. "<br>";
            echo "Direccion del Aspirante: ".$datos ["direccion"]. "<br>";
            echo "Barrio del Aspirante: ".$datos ["barrio"]. "<br>";
            echo "Salud: ".$datos ["sistemasalud"]. "<br>";
            echo "Tratamiento de Aspirante: ".$datos ["en_tratamiento"]. "<br>";
            echo "Descripcion del Tratamiento: ".$datos ["descripcion_tratamiento"]. "<br>";
            echo "Nombre de la madre: ".$datos ["nombremadre"]. "<br>";
            echo "Apellido de la Madre: ".$datos ["apellidomadre"]. "<br>";
            echo "Fecha de Nacimiento de la Madre: ".$datos ["nacimientomadre"]. "<br>";
            echo "Documento de la Madre: ".$datos ["documentomadre"]. "<br>";
            echo "Celular de la Madre: ".$datos ["celularmadre"]. "<br>";
            echo "Correo de la Madre: ".$datos ["correomadre"]. "<br>";
            echo "Empresa de la madre: ".$datos ["empresamadre"]. "<br>";
            echo "Telefono de la Empresa de la Madre: ".$datos ["telempresamadre"]. "<br>";
            echo "Estudio de la Madre: ".$datos ["estudiomadre"]. "<br>";
            echo "Nombre del Padre: ".$datos ["nombrepadre"]. "<br>";
            echo "Apellido del Padre: ".$datos ["apellidopadre"]. "<br>";
            echo "Fecha de Nacimiento Del Padre: ".$datos ["nacimientompadre"]. "<br>";
            echo "Documento de la Padre: ".$datos ["documentopadre"]. "<br>";
            echo "Celular del Padre: ".$datos ["celularpadre"]. "<br>";
            echo "Correo del Padre: ".$datos ["correopadre"]. "<br>";
            echo "Empresa del Padre: ".$datos ["empresapadre"]. "<br>";
            echo "Telefono de la Empresa del Padre : ".$datos ["telempresapadre"]. "<br>";
            echo "Estudio del Padre: ".$datos ["estudiopadre"]. "<br>";
            echo "Nombre Acudiente: ".$datos ["nombreacudiente"]. "<br>";
            echo "Documento del Acudiente: ".$datos ["documentoacudiente"]. "<br>";
            echo "Celular del Acudiente: ".$datos ["celularacudiente"]. "<br>";
            echo "Direccion del Acudiente: ".$datos ["diracudiente"]. "<br>";
            echo "Correo del Acudiente: ".$datos ["correoacudiente"]. "<br>";
            echo "Estado del Aspirante: ".$datos ["estado"]. "<br>";
            ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>