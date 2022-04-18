<?php

//conexion con la base de datos
require_once "../database/db.php";

$con = new ConexionBd();

$conex = $con->conectar();



mysqli_query($conex,"UPDATE admin SET codigo_admin= '$_REQUEST[codigo]',nombre_admin ='$_REQUEST[nombre]', usuario_admin ='$_REQUEST[usuario]', contraseña_admin ='$_REQUEST[contraseña]' WHERE codigo_admin = '$_REQUEST[codigo]' ") or die ("Problemas en la conexion con la tabla". mysqli_error($conex));

?>
            <div class = "alert alert-success text-center mt-2">
                <?php echo "Los cambios realizados fueron guardados satisfactoriamente";?>
            </div>


