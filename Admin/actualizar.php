<?php

//conexion con la base de datos
require_once "database/db.php";

$con = new ConexionBd();

$conex = $con->conectar();



mysqli_query($conex,"UPDATE estudiante SET codigo_estudiante= '$_REQUEST[codigo]',nombre_estudiante ='$_REQUEST[nombre]', apellido_estudiante ='$_REQUEST[apellido]', edad ='$_REQUEST[edad]', identifiacion_estudiante ='$_REQUEST[identi]', correo_personal_estudiante= '$_REQUEST[correop]',correo_institucional_estudiante ='$_REQUEST[correoi]', contraseña_estudiante = '$_REQUEST[contraseñae]', grado ='$_REQUEST[grado]', direccion_estudiante ='$_REQUEST[direccion]', telefono_estudiante ='$_REQUEST[telefono]', celular_estudiante = '$_REQUEST[celular]' WHERE codigo_estudiante = '$_REQUEST[codigo]' ") or die ("Problemas en la conexion con la tabla". mysqli_error($conex));

?>
            <div class = "alert alert-success text-center mt-2">
                <?php echo "Los cambios realizados fueron guardados satisfactoriamente";?>
            </div>


