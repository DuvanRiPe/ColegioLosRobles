<?php

//conexion a la base de datos
require_once "../database/db.php";

$con = new ConexionBd();

$conex = $con->conectar();

mysqli_query($conex, "insert into admin (codigo_admin, nombre_admin, usuario_admin, contraseña_admin, codigo_rol) values('$_REQUEST[codigo]','$_REQUEST[nombre]','$_REQUEST[usuario]','$_REQUEST[contraseña]','$_REQUEST[rol]')") or die ("Problemas con la conexion de tablas". mysqli_error($conex));

mysqli_close($conex);

?>
            <div class = "alert alert-success text-center mt-2">
                <?php echo "Fueron registrados los datos del profesor";?>
            </div>