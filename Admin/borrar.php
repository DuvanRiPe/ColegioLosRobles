<?php
//conexion a la base de datos
require_once "database/db.php";

$con = new ConexionBd();

$conex = $con->conectar();

//condicional

    mysqli_query($conex, "DELETE  FROM estudiante WHERE identifiacion_estudiante='$_REQUEST[delete]'") or die ("problemas al eliminar el registro". mysqli_error($conex));

    mysqli_close($conex);

?>
            <div class = "alert alert-danger text-center mt-2">
                <?php echo"Eliminado exitoso";?>
            </div>