<?php

//conexion con la base de datos
// include "db_connect.php";
require_once "database/db.php";

$con = new ConexionBd();

$conex = $con->conectar();

mysqli_query($conex,"UPDATE profesor SET codigo_profesor= '$_REQUEST[codigo]',nombre_profesor ='$_REQUEST[nombre]', apellido_profesor ='$_REQUEST[apellido]', edad_profesor ='$_REQUEST[edad]', identificacion_profesor ='$_REQUEST[identi]', correo_personal_profesor= '$_REQUEST[correop]',correo_institucional_profesor ='$_REQUEST[correoi]', contrasena_profesor = '$_REQUEST[contraseñae]', grado_asignado ='$_REQUEST[grado]', direccion_profesor ='$_REQUEST[direccion]', telefono_profesor ='$_REQUEST[telefono]', celular_profesor = '$_REQUEST[celular]' WHERE codigo_profesor = '$_REQUEST[codigo]' ") or die ("Problemas en la conexion con la tabla". mysqli_error($conex));

?>
            <div class = "alert alert-success text-center mt-2">
                <?php echo "Los cambios realizados fueron guardados satisfactoriamente";?>
            </div>


