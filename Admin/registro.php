<?php

//conexion a la base de datos
require_once "database/db.php";

$con = new ConexionBd();

$conex = $con->conectar();

mysqli_query($conex, "insert into estudiante (codigo_estudiante, nombre_estudiante, apellido_estudiante, edad, identifiacion_estudiante, correo_personal_estudiante, correo_institucional_estudiante, contraseña_estudiante, grado, direccion_estudiante, telefono_estudiante, celular_estudiante) values('$_REQUEST[codigo]','$_REQUEST[nombre]','$_REQUEST[apellido]','$_REQUEST[edad]', '$_REQUEST[identi]','$_REQUEST[correop]','$_REQUEST[correoi]', '$_REQUEST[contraseñae]', '$_REQUEST[grado]', '$_REQUEST[direccion]','$_REQUEST[telefono]', '$_REQUEST[celular]')") or die ("Problemas con la conexion de tablas". mysqli_error($conex));

mysqli_close($conex);

?>
            <div class = "alert alert-success text-center mt-2">
                <?php echo "Fueron registrados los datos del aspirante";?>
            </div>