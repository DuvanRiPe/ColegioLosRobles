<?php

//conexion a la base de datos
$conexion=mysqli_connect("localhost","root","","colegiolosrobles") or die("Problemas con la conexion en la base de datos");

mysqli_query($conexion, "insert into preinscripcion(correo,comprobante,ano_academico,curso,nombre,apellido,tipoidentificacion,documentonino,nacimientonino,doctrina,vivecon,edada31dic,direccion,barrio,sistemasalud,en_tratamiento,descripcion_tratamiento,nombremadre,apellidomadre,nacimientomadre,documentomadre,celularmadre,correomadre,empresamadre,telempresamadre,estudiomadre,nombrepadre,apellidopadre,nacimientompadre,documentopadre,celularpadre,correopadre,empresapadre,telempresapadre,estudiopadre,nombreacudiente,documentoacudiente,celularacudiente,diracudiente,correoacudiente) values ('$_REQUEST[correo]', '$_REQUEST[comprobante]', '$_REQUEST[ano_academico]' ,'$_REQUEST[curso]','$_REQUEST[nombre]','$_REQUEST[apellido]','$_REQUEST[tipoidentificacion]','$_REQUEST[documentonino]','$_REQUEST[nacimientonino]','$_REQUEST[doctrina]','$_REQUEST[vivecon]','$_REQUEST[edada31dic]','$_REQUEST[direccion]','$_REQUEST[barrio]','$_REQUEST[sistemasalud]','$_REQUEST[en_tratamiento]','$_REQUEST[descripcion_tratamiento]','$_REQUEST[nombremadre]','$_REQUEST[apellidomadre]','$_REQUEST[nacimientomadre]','$_REQUEST[documentomadre]','$_REQUEST[celularmadre]','$_REQUEST[correomadre]','$_REQUEST[empresamadre]','$_REQUEST[telempresamadre]','$_REQUEST[estudiomadre]','$_REQUEST[nombrepadre]','$_REQUEST[apellidopadre]','$_REQUEST[nacimientompadre]','$_REQUEST[documentopadre]','$_REQUEST[celularpadre]','$_REQUEST[correopadre]','$_REQUEST[empresapadre]','$_REQUEST[telempresapadre]','$_REQUEST[estudiopadre]','$_REQUEST[nombreacudiente]','$_REQUEST[documentoacudiente]','$_REQUEST[celularacudiente]','$_REQUEST[diracudiente]', '$_REQUEST[correoacudiente]' )") or die ("Problemas con la conexion de tablas". mysqli_error($conexion));

mysqli_close($conexion);

?>

            <div class = "alert alert-success text-center mt-2">
                <?php echo"Envio exitoso";?>
            </div>


</body>
</html>