<?php

//conexion a la base de datos
include "db_connect.php";

mysqli_query($connect, "insert into profesor (codigo_profesor, nombre_profesor, apellido_profesor, edad_profesor, identificacion_profesor, correo_personal_profesor, correo_institucional_profesor, contrasena_profesor, grado_asignado, direccion_profesor, telefono_profesor, celular_profesor) values('$_REQUEST[codigo]','$_REQUEST[nombre]','$_REQUEST[apellido]','$_REQUEST[edad]', '$_REQUEST[identi]','$_REQUEST[correop]','$_REQUEST[correoi]', '$_REQUEST[contraseñae]', '$_REQUEST[grado]', '$_REQUEST[direccion]','$_REQUEST[telefono]', '$_REQUEST[celular]')") or die ("Problemas con la conexion de tablas". mysqli_error($connect));

mysqli_close($connect);

?>
            <div class = "alert alert-success text-center mt-2">
                <?php echo "Fueron registrados los datos del profesor";?>
            </div>